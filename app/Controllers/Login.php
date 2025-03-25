<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function ingresar()
    {
        $usuario = $this->request->getVar('usuario');
        $password = $this->request->getVar('password');

        $user = model('UsuarioModel');

        $info = $user->where('usuario', $usuario)->where('password', $password)->first();

        if (!$info) {
            $data = array(
                "respuesta" => "error",
                "mensaje" => "Usuario y/o contraseña incorrectos"
            );

            echo json_encode($data);
            exit();
        }

        session()->set([
            'id_user' => $info['id'],
            'nombre' => $info['nombre'],
            'apellidos' => $info['apellidos'],
            'usuario' => $usuario,
            'is_logged' => true
        ]);

        $data = array(
            "respuesta" => "ok",
            "mensaje"   => "Accediendo..."
        );

        return $this->response->setJSON($data);
    }

    public function signout()
    {
        session()->destroy();

        return $this->response->setJSON([
            "respuesta" => 'ok'
        ]);
    }
}
