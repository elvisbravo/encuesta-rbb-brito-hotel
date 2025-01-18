<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $encuesta = model('EncuestaModel');

        $encuestas = $encuesta->query("select id, DATE_FORMAT(registro, '%d-%m-%Y %H:%i:%s') AS registro, correo, estado from encuesta")->getResult();

        return view('dashboard', compact('encuestas'));
    }

}
