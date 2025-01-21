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
        $email = $this->request->getVar('email');
        $firstName = $this->request->getVar('firstName');
        $lastName = $this->request->getVar('lastName');

        // Generar token único
        $token = bin2hex(random_bytes(32));

        // Guardar en la base de datos
        $surveyModel = new EncuestaModel();

        $data = [
            'registro' => "",
            'correo' => $email,
            'nombre' => $firstName,
            'apellidos' => $lastName,
            'token' => $token,
            'estado' => 'pendiente',
            'registroToken' => date('Y-m-d H:i:s')
        ];
        
        $surveyModel->insert($data);

        // Generar el enlace
        $surveyLink = base_url("survey/fill/{$token}");

        return $this->respond([
            'status' => 'success',
            'message' => 'Link generado correctamente',
            'surveyLink' => $surveyLink
        ]);
    }

}