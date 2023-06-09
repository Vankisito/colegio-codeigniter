<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Edit_model');
		$this->load->model('Get_model');
		$this->load->model('Delete_model');
		$this->load->model('Save_model');
    }
    
	//tablas
	public function index()
	{
		$data = array('programacion'=> $this->Get_model->obtener_programaciones());
		$this->load->view('programacion_views/programacion_tabla',$data);
	}

	public function tabla_profesores(){

		$data = array('profesores' => $this->Get_model->obtener_profesores_comp());
		$this->load->view('profesores_views/profesores_tabla',$data);
	}

	public function tabla_estudiantes(){
		$data = array('estudiantes' => $this->Get_model->obtener_estudiantes_comp());
		$this->load->view('estudiantes_views/estudiantes_tabla',$data);
	}


	//crud programacion
	public function form_agg_programacion(){
		$data = array('profesores'=> $this->Get_model->obtener_profesores(),'aulas'=> $this->Get_model->obtener_aulas(),'cursos' => $this->Get_model->obtener_cursos(),'estudiantes' => $this->Get_model->obtener_estudiantes());
		$this->load->view('programacion_views/form_agg_programacion',$data);
	}

	public function save_prog(){
		$programacion['fecha_curso'] = $_POST['fecha'];
		$programacion['curso'] = $_POST['curso'];
		$programacion['aula'] = $_POST['aula'];
		$programacion['profesor'] = $_POST['profesor'];
		$programacion['estudiante'] = $_POST['estudiante'];
		$this->Save_model->guardar_programacion($programacion);
		redirect(base_url());
	}

	public function delete_programacion($id_programacion){
		$this->Delete_model->eliminar_prog($id_programacion);
		redirect(base_url());
	}

	public function form_edit_prog($id_programacion){
		$data = array('programacion'=> $this->Edit_model->Obtener_edit_programacion($id_programacion), 'cursos'=> $this->Get_model->obtener_cursos(), 'aulas'=> $this->Get_model->obtener_aulas(), 'profesores'=> $this->Get_model->obtener_profesores(), 'estudiantes'=> $this->Get_model->obtener_estudiantes());
		$this->load->view('programacion_views/form_edit_prog',$data);
	}

	public function actualizar_programacion(){
		$id_programacion=$_POST['id'];
		$programacion['fecha_curso'] = $_POST['fecha'];
		$programacion['curso'] = $_POST['curso'];
		$programacion['aula'] = $_POST['aula'];
		$programacion['profesor'] = $_POST['profesor'];
		$programacion['estudiante'] = $_POST['estudiante'];
		$this->Edit_model->actualizar_programacion_query($id_programacion,$programacion);
		redirect(base_url());

	}

	//crud profesor

	public function form_edit_profesor($id_profesor){
		$data = array('sexos' => $this->Get_model->obtener_sexos(),'profesor' => $this->Edit_model->Obtener_edit_profesor($id_profesor));
		$this->load->view('profesores_views/form_edit_profesor',$data);
	}

	public function actualizar_profesor(){
		$id_profesor=$_POST['id'];
		$profesor['nombre_profesor'] = $_POST['nombre'];
		$profesor['apellido_profesor'] = $_POST['apellido'];
		$profesor['edad_profesor'] = $_POST['edad'];
		$profesor['sexo_profesor'] = $_POST['sexo'];
		$this->Edit_model->actualizar_profesor_query($id_profesor,$profesor);
		redirect(base_url('welcome/tabla_profesores'));

	}

	public function save_profesor(){
		$profesor['nombre_profesor'] = $_POST['nombre'];
		$profesor['apellido_profesor'] = $_POST['apellido'];
		$profesor['edad_profesor'] = $_POST['edad'];
		$profesor['sexo_profesor'] = $_POST['sexo'];
		$this->Save_model->guardar_profesor($profesor);
		redirect(base_url('welcome/tabla_profesores'));
	}
	public function form_new_profesor(){
		$data = array('sexos' => $this->Get_model->obtener_sexos());
		$this->load->view('profesores_views/form_new_profesor',$data);
	}


	public function delete_profesor($id_profesor){
		$this->Delete_model->eliminar_profesor($id_profesor);
		redirect(base_url('welcome/tabla_profesores'));
	}


	//crud estudiante
	public function form_new_estudiante(){
		$data = array('sexos' => $this->Get_model->obtener_sexos());
		$this->load->view('estudiantes_views/form_new_estudiante',$data);
	}

	public function save_estudiante(){
		$estudiante['nombre_estudiante'] = $_POST['nombre'];
		$estudiante['apellido_estudiante'] = $_POST['apellido'];
		$estudiante['edad_estudiante'] = $_POST['edad'];
		$estudiante['sexo_estudiante'] = $_POST['sexo'];
		$this->Save_model->guardar_estudiante($estudiante);
		redirect(base_url('welcome/tabla_estudiantes'));
	}

	public function delete_estudiante($id_estudiante){
		$this->Delete_model->eliminar_estudiante($id_estudiante);
		redirect(base_url('welcome/tabla_estudiantes'));
	}

	public function actualizar_estudiante(){
		$id_estudiante=$_POST['id'];
		$estudiante['nombre_estudiante'] = $_POST['nombre'];
		$estudiante['apellido_estudiante'] = $_POST['apellido'];
		$estudiante['edad_estudiante'] = $_POST['edad'];
		$estudiante['sexo_estudiante'] = $_POST['sexo'];
		$this->Edit_model->actualizar_estudiante_query($id_estudiante,$estudiante);
		redirect(base_url('welcome/tabla_estudiantes'));

	}

	public function form_edit_estudiante($id_estudiante){
		$data = array('sexos' => $this->Get_model->obtener_sexos(),'estudiante' => $this->Edit_model->Obtener_edit_estudiante($id_estudiante));
		$this->load->view('profesores_views/form_edit_profesor',$data);
	}
}
