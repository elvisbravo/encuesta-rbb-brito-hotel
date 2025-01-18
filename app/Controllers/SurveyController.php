<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\EncuestaModel;

class SurveyController extends ResourceController
{
    protected $format = 'json';

    public function generateSurveyLink()
    {
        // Recibir datos del POST
        $email = $this->request->getPost('email');
        $firstName = $this->request->getPost('firstName');
        $lastName = $this->request->getPost('lastName');

        // Generar token único
        $token = bin2hex(random_bytes(32));

        // Guardar en la base de datos
        $surveyModel = new EncuestaModel();

        $data = [
            'email' => $email,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'token' => $token,
            'status' => 'pending',
            'created_at' => date('Y-m-d H:i:s')
        ];
        
        $surveyModel->insert($data);

        // Generar el enlace
        $surveyLink = base_url("survey/fill/{$token}");

        // Enviar el correo
        $email = \Config\Services::email();
        
        $email->setFrom('tu@empresa.com', 'Nombre de tu Empresa');
        $email->setTo($data['email']);
        $email->setSubject('Por favor, completa nuestra encuesta');
        
        $message = view('emails/survey_template', [
            'firstName' => $firstName,
            'surveyLink' => $surveyLink
        ]);
        
        $email->setMessage($message);
        $email->send();

        return $this->respond([
            'status' => 'success',
            'message' => 'Survey link generated and email sent',
            'surveyLink' => $surveyLink
        ]);
    }

    public function fillSurvey($token)
    {
        $surveyModel = new EncuestaModel();
        $survey = $surveyModel->where('token', $token)->first();

        if (!$survey) {
            return $this->failNotFound('Survey not found');
        }

        if ($survey['status'] === 'completed') {
            return $this->fail('Survey already completed');
        }

        // Mostrar el formulario de la encuesta
        return view('survey_form', ['token' => $token]);
    }

    public function submitSurvey()
    {
        $token = $this->request->getPost('token');
        $answers = $this->request->getPost('answers');

        $surveyModel = new EncuestaModel();
        $survey = $surveyModel->where('token', $token)->first();

        if (!$survey) {
            return $this->failNotFound('Survey not found');
        }

        // Guardar respuestas
        $surveyModel->update($survey['id'], [
            'answers' => json_encode($answers),
            'status' => 'completed',
            'completed_at' => date('Y-m-d H:i:s')
        ]);

        return $this->respond([
            'status' => 'success',
            'message' => 'Survey completed successfully'
        ]);
    }
}