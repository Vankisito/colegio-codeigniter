<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_model extends CI_Model {

	public function obtener_sexos(){
        return $this->db->get('sexos')->result();
    }
    public function obtener_aulas(){
        return $this->db->get('aulas')->result();
    }
    public function obtener_cursos(){
        return $this->db->get('cursos')->result();
    }
    public function obtener_profesores(){
        return $this->db->get('profesores')->result();
    }
    public function obtener_estudiantes(){
        return $this->db->get('estudiantes')->result();
    }
    public function obtener_programaciones(){
        return $this->db->query('SELECT pgc.id_programacion, pgc.fecha_curso, c.descripcion_curso, a.descripcion_aula, p.nombre_profesor, e.nombre_estudiante FROM cursos AS c, aulas AS a, profesores AS p, estudiantes AS e, programacion_curso AS pgc WHERE c.id_curso = pgc.curso AND pgc.aula = a.id_aula AND pgc.profesor = p.id_profesor AND pgc.estudiante = e.id_estudiante;')->result();
    }

    public function obtener_profesores_comp(){
        return $this->db->query('SELECT p.id_profesor, p.nombre_profesor, p.apellido_profesor, p.edad_profesor, s.descripcion_sexo  From profesores AS p, sexos AS s WHERE s.id_sexo = p.sexo_profesor ')->result();

    }
    
    public function obtener_estudiantes_comp(){
        return $this->db->query('SELECT e.id_estudiante, e.nombre_estudiante, e.apellido_estudiante, e.edad_estudiante, s.descripcion_sexo FROM estudiantes AS e, sexos AS s WHERE e.sexo_estudiante = s.id_sexo;')->result();
    }
}