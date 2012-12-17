<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*	@utor : Alfredo ivan Palomino Calli ivanp_151@hotmail.com
*	Class Activity : controlador se encarga de administrar
*			todas las acciones de la vista galery_photos
*/
class Actually extends CI_Controller {
	public $layout = 'default';
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');	
	}
	public function index()
	{
		$data['menu'] = menu_ul('actually');

		$seoHeader = seo_headers('actualidad');
		$this->title = $seoHeader['title'];
		$this->meta = $seoHeader['metas'];
		$this->styles = $seoHeader['styles'];
		$this->scripts = $seoHeader['scripts'];

		$this->load->view('actually',$data);		
	}
}

/* End of file Activity.php */
/* Location: ./application/controllers/Activity.php */