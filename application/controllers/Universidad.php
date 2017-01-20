<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Universidad extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('crud_ciudad');
        $this->load->model('crud_universidad');
        $this->load->model('crud_carrera');
        $this->load->helper('registro');
        $this->load->model('crud_tipo_estudio');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index(){
		$this->dataBasicaCampos  = $this->crud_ciudad->obtenerRegistros();
        if ($this->dataBasicaCampos != NULL){
            $this->dataBasicaCampos = controlSelect($this->dataBasicaCampos, "ciudad_id", "ciudad_nombre", "Seleccione Ciudad",0);
        }      
        $datos['basica_ciudad'] = $this->dataBasicaCampos;

        $this->dataBasicaCampos  = $this->crud_tipo_estudio->obtenerRegistros();
        if ($this->dataBasicaCampos != NULL){
            $this->dataBasicaCampos = controlSelect($this->dataBasicaCampos, "tipo_estudio_id", "tipo_estudio_nombre", "Seleccione Nivel de estudio",0);
        }      
        $datos['basica_tipo_estudio'] = $this->dataBasicaCampos;

        $datos['produccion_universidad'] = NULL;
        $datos['produccion_carrera'] = NULL;
		
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('universidad1_view', $datos);
		$this->load->view('footer_view');
	}

	public function CargarUniversidad() {
        $dataCiudadId = $this->input->post("reg_Departamento", TRUE);
        //$dataIdDepartamento = 1;
        $dataWhere = array("ciudad_id" => $dataCiudadId);
        $produccionUniversidad  = $this->crud_universidad->obtenerRegistros($dataWhere);
        if ($produccionUniversidad != NULL):
            $produccionUniversidad = controlSelect($produccionUniversidad, "universidad_id", "universidad_nombre", "Seleccione una Universidad",0);
        endif;  
        if ($produccionUniversidad != NULL):
            echo json_encode($produccionUniversidad, JSON_FORCE_OBJECT);
        else:
            echo 'false';
        endif;
    }

    public function CargarCarrera() {
        $dataUniversidad = $this->input->post("reg_universidad", TRUE);
        $dataTipoEstudio = $this->input->post("reg_tipoEstudio", TRUE);
        //$dataIdDepartamento = 1;
        $dataWhere = array(
            "ca.id_universidad" => $dataUniversidad,
            "ca.id_tipo_estudio" => $dataTipoEstudio
        );
        $produccionCarrera  = $this->crud_carrera->obtenerRegistros($dataWhere);
        if ($produccionCarrera != NULL):
            $produccionCarrera = controlSelect($produccionCarrera, "carrera_id", "carrera_nombre", "Seleccione una Carrera", 0);
        endif;  
        if ($produccionCarrera != NULL){
            echo json_encode($produccionCarrera, JSON_FORCE_OBJECT);
        }
        else{
            echo 'false';
        }
    }

     public function infoCarrera() {
        $dataUniversidad = $this->input->post("reg_universidad", TRUE);
        $dataTipoEstudio = $this->input->post("reg_tipoEstudio", TRUE);
        $dataCiudad = $this->input->post("reg_ciudad", TRUE);
        if ($dataUniversidad == NULL and $dataTipoEstudio == NULL) {
            $dataWhere = array(
            "ci.ciudad_id" => $dataCiudad
            );
        }elseif ($dataTipoEstudio == NULL) {
            $dataWhere = array(
            "ci.ciudad_id" => $dataCiudad,
            "ca.id_universidad" => $dataUniversidad
            );
        }else{
            $dataWhere = array(
            "ci.ciudad_id" => $dataCiudad,
            "ca.id_universidad" => $dataUniversidad,
            "ca.id_tipo_estudio" => $dataTipoEstudio
            );
        }
        $produccionCarrera  = $this->crud_carrera->obtenerRegistros($dataWhere);
        if ($produccionCarrera != NULL){
            echo json_encode($produccionCarrera, JSON_FORCE_OBJECT);
        }
        else{
            echo 'false';
        }
    }

    public function buscarTexto() {
        $dataCarrera = $this->input->post("reg_carrera", TRUE);
        $dataTipoEstudio = $this->input->post("reg_tipoEstudio", TRUE);
        //$dataIdDepartamento = 1;
        $dataWhere = array(
            "ca.carrera_nombre like" => "%".$dataCarrera."%"
        );
        if ($dataTipoEstudio != NULL) {
            $dataWhere = array(
            "ca.carrera_nombre like" => "%".$dataCarrera."%",
            "ca.id_tipo_estudio" => $dataTipoEstudio 
            );
        }
        $produccionCarrera  = $this->crud_carrera->obtenerRegistros($dataWhere);
            if ($produccionCarrera != NULL){
                echo json_encode($produccionCarrera, JSON_FORCE_OBJECT);
            }
            else{
                echo 'false';
            }
        }
}
