<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete_model extends CI_Model {


    public function eliminar_prog($id_programacion){
        $this->db->where('id_programacion', $id_programacion);
        $this->db->delete('programacion_curso');
    }

    public function eliminar_profesor($id_profesor){
        $this->db->where('id_profesor', $id_profesor);
        $this->db->delete('profesores');
    }

    public function eliminar_estudiante($id_estudiante){
        $this->db->where('id_estudiante', $id_estudiante);
        $this->db->delete('estudiantes');
    }
}