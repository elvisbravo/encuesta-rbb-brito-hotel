<?php namespace App\Models;

    use CodeIgniter\Model;

    class AreasModel extends Model
    {
        protected $table      = 'areas_mejorar';
        protected $primaryKey = 'id';

        protected $useAutoIncrement = true;

        protected $returnType     = 'array';

        protected $allowedFields = ['id','encuesta_id','area', 'estado'];

        protected $useTimestamps = false;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';

    }

?>