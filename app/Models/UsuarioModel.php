<?php namespace App\Models;

    use CodeIgniter\Model;

    class UsuarioModel extends Model
    {
        protected $table      = 'usuario';
        protected $primaryKey = 'id';

        protected $useAutoIncrement = true;

        protected $returnType     = 'array';

        protected $allowedFields = ['id','usuario','contraseña','nombre','apellidos','estado'];

        protected $useTimestamps = false;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';

    }

?>