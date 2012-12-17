<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*	@utor : Alfredo ivan Palomino Calli ivanp_151@hotmail.com
*	Class Teachers : controlador se encarga de administrar
*			todas las acciones de la vista galery_photos
*/
class Teachers extends CI_Controller {
	public $layout = 'default';
	public function index()
	{
		$data['menu'] = menu_ul('teachers');

		$seoHeader = seo_headers('docentes');
		$this->title = $seoHeader['title'];
		$this->meta = $seoHeader['metas'];
		$this->styles = $seoHeader['styles'];
		$this->scripts = $seoHeader['scripts'];

		$this->load->view('galery_photos',$data);
	}
}

/* End of file Teachers.php */
/* Location: ./application/controllers/Teachers.php */