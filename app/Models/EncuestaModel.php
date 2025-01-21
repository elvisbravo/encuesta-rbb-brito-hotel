<?php namespace App\Models;

    use CodeIgniter\Model;

    class EncuestaModel extends Model
    {
        protected $table      = 'encuesta';
        protected $primaryKey = 'id';

        protected $useAutoIncrement = true;

        protected $returnType     = 'array';

        protected $allowedFields = ['id','registro','correo', 'nombre', 'apellidos', 'token', 'registroToken','estado'];

        protected $useTimestamps = false;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';

    }

?>