<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*	@utor : Alfredo ivan Palomino Calli ivanp_151@hotmail.com
*	Class Students: controlador se encarga de administrar
*			todas las acciones de la vista galery_photos
*/
class Students extends CI_Controller {
	public $layout = 'default';
	public function index()
	{
		$data['menu'] = menu_ul('students');

		$seoHeader = seo_headers('estudiantes');
		$this->title = $seoHeader['title'];
		$this->meta = $seoHeader['metas'];
		$this->styles = $seoHeader['styles'];
		$this->scripts = $seoHeader['scripts'];

		$this->load->view('galery_photos',$data);
	}
}

/* End of file Students.php */
/* Location: ./application/controllers/Students.php */