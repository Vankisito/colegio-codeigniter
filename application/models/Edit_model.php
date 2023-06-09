<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_model extends CI_Model {
    //Programacion
    public function Obtener_edit_programacion($id_programacion){
        $this->db->where('id_programacion', $id_programacion);
        return $this->db->get('programacion_curso')->row();
    }

    public function actualizar_programacion_query($id_programacion, $programacion){
        $this->db->where('id_programacion', $id_programacion);
        $this->db->update('programacion_curso', $programacion);
    }

    //Profesor
    public function Obtener_edit_profesor($id_profesor){
        $this->db->where('id_profesor', $id_profesor);
        return $this->db->get('profesores')->row();
    }

    public function actualizar_profesor_query($id_profesor, $profesor){
        $this->db->where('id_profesor', $id_profesor);
        $this->db->update('profesores', $profesor);
    }

    //Estudiante
    public function Obtener_edit_estudiante($id_estudiante){
        $this->db->where('id_estudiante', $id_estudiante);
        return $this->db->get('estudiantes')->row();
    }

    public function actualizar_estudiante_query($id_estudiante, $estudiante){
        $this->db->where('id_estudiante', $id_estudiante);
        $this->db->update('estudiantes', $estudiante);
    }
}