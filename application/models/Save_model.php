<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Save_model extends CI_Model {

    public function guardar_programacion($programacion){
        $this->db->insert('programacion_curso', $programacion);
    }

    public function guardar_profesor($profesor){
        $this->db->insert('profesores', $profesor);
    }

    public function guardar_estudiante($estudiante){
        $this->db->insert('estudiantes', $estudiante);
    }

}