<?php

namespace App\Controllers;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Home extends BaseController
{
    public function index()
    {
        return view('landing');
    }

    public function saveSurvey()
    {
        $resp1 = $this->request->getVar('rating_input_1');
        $resp2 = $this->request->getVar('rating_input_2');
        $resp3 = $this->request->getVar('rating_input_3');
        $resp4 = $this->request->getVar('rating_input_4');
        $resp5 = $this->request->getVar('rating_input_5');
        $mejorar = $this->request->getVar('mejorar');

        $fecha = date('Y-m-d H:i:s');

        $encuesta = model('EncuestaModel');

        $datos_encuesta = array(
            "registro" => $fecha,
            "correo" => "rbbbritohotel@gmail.com",
            "estado" => 1
        );

        $encuesta->insert($datos_encuesta);

        $encuesta_id = $encuesta->insertID();

        $calificacion = model('CalificacionesModel');

        $insert_1 = array(
            "encuesta_id" => $encuesta_id,
            "calificacion" => $resp1,
            "pregunta" => "¿Cómo fue tu experiencia con el proceso de reserva y la atención recibida en recepción?",
            "estado" => 1
        );

        $calificacion->insert($insert_1);

        $insert_2 = array(
            "encuesta_id" => $encuesta_id,
            "calificacion" => $resp2,
            "pregunta" => "¿Qué tan satisfecho/a te sentiste con la limpieza de tu habitación?",
            "estado" => 1
        );

        $calificacion->insert($insert_2);

        $insert_3 = array(
            "encuesta_id" => $encuesta_id,
            "calificacion" => $resp3,
            "pregunta" => "¿Qué tan satisfecho/a te sentiste con la atención y amabilidad del personal durante tu estadía en el hotel?",
            "estado" => 1
        );

        $calificacion->insert($insert_3);

        $insert_4 = array(
            "encuesta_id" => $encuesta_id,
            "calificacion" => $resp4,
            "pregunta" => "¿Qué tan satisfecho/a quedó con la calidad de la comida ofrecida en el restaurante durante su estadía?",
            "estado" => 1
        );

        $calificacion->insert($insert_4);

        $insert_5 = array(
            "encuesta_id" => $encuesta_id,
            "calificacion" => $resp5,
            "pregunta" => "¿Qué tan probable es que recomiende el hotel RBB BRITO ?",
            "estado" => 1
        );

        $calificacion->insert($insert_5);

        $area = model('AreasModel');

        for ($i=0; $i < count($mejorar); $i++) { 
            $data = array(
                "encuesta_id" => $encuesta_id,
                "area" => $mejorar[$i],
                "estado" => 1
            );

            $area->insert($data);
        }

        return $this->response->setJSON([
            "respuesta" => "ok",
            "mensaje" => "Se registro correctamente la encuesta"
        ]); 
    }

    public function getSurvey($id)
    {
        $resp = model('CalificacionesModel');
        $areas = model('AreasModel');

        $calif = $resp->where('encuesta_id', $id)->findAll();
        $mejorar = $areas->where('encuesta_id', $id)->findAll();

        $datos = [
            "calificaciones" => $calif,
            "mejorar" => $mejorar
        ];

        return $this->response->setJSON($datos);
    }

    public function graciasEncuesta()
    {
        return view('gracias');
    }

    public function descargar_excel()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A2', 'N°');
        $sheet->setCellValue('B2', 'REGISTRO');
        $sheet->setCellValue('C2', 'PREG. 1');
        $sheet->setCellValue('D2', 'PREG. 2');
        $sheet->setCellValue('E2', 'PREG. 3');
        $sheet->setCellValue('F2', 'PREG. 4');
        $sheet->setCellValue('G2', 'PREG. 5');
        $sheet->setCellValue('H2', 'AREAS');

        $encuesta = model('EncuestaModel');
        $resp = model('CalificacionesModel');
        $areas = model('AreasModel');

        $letras = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I'];

        $encuestas = $encuesta->query("select id, DATE_FORMAT(registro, '%d-%m-%Y %H:%i:%s') AS registro, correo, estado from encuesta")->getResult();

        foreach ($encuestas as $key => $value) {
            $id = $value->id;

            $sheet->setCellValue('A'.($key + 3), $key + 1);
            $sheet->setCellValue('B'.($key + 3), $value->registro);

            $calif = $resp->where('encuesta_id', $id)->findAll();

            foreach ($calif as $keys => $values) {
                $sheet->setCellValue($letras[$keys + 2].($key + 3), $values['calificacion']);
            }

            $mejorar = $areas->select('area')->where('encuesta_id', $id)->findAll();
            $areasArray = array_column($mejorar, 'area');
            $areasString = implode(', ', $areasArray);

            $sheet->setCellValue('H'.($key + 3), $areasString);
        }

        // Guardar el archivo
        $writer = new Xlsx($spreadsheet);
        $fileName = 'listaEncuesta.xlsx';

        // Establecer cabeceras para la descarga
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header("Content-Disposition: attachment; filename=\"$fileName\"");
        header('Cache-Control: max-age=0');

        $writer->save('php://output');

        exit();
    }
}
