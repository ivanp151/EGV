<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*	@utor : Alfredo ivan Palomino Calli ivanp_151@hotmail.com
*	Class Static_Pages : controlador se encarga de administrar
*			todas las acciones de la vista niveles_educativos
*/
class Static_Pages_School extends CI_Controller {
	public $layout = 'default';
	/*
	*	constructor carga helpers 
	*/
	public function __construct(){
		parent::__construct();	
	}
	/*
	* 	levelsEducativos : renderiza la pagina de niveles educativos
	*/
	public function index(){
		
	}
	public function levelsEducatives(){
		$data['menu'] = menu_ul('levels');
		$this->load->view('niveles-educativos',$data);
	}
	/*
	*	nosotros : funcion renderiza pagina nosostros
	*/
	public function weAre(){
		$data['menu'] = menu_ul('we');
		$this->load->view('nosotros',$data);
	}
}

/* End of file Static_Pages.php */
/* Location: ./application/controllers/Static_Pages.php */
