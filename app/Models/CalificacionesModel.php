<?php namespace App\Models;

    use CodeIgniter\Model;

    class CalificacionesModel extends Model
    {
        protected $table      = 'calificaciones_encuesta';
        protected $primaryKey = 'id';

        protected $useAutoIncrement = true;

        protected $returnType     = 'array';

        protected $allowedFields = ['id','encuesta_id','calificacion','pregunta', 'estado'];

        protected $useTimestamps = false;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';

    }

?>