<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*	@utor : Alfredo ivan Palomino Calli ivanp_151@hotmail.com
*	Class Galery_Photos : controlador se encarga de administrar
*			todas las acciones de la vista galery_photos
*/
class Galery_Photos extends CI_Controller {
	public $layout = 'default';
	public function index()
	{
		$data['menu'] = menu_ul('photos');
		//
		$seoHeader = seo_headers('galery');
		$this->title = $seoHeader['title'];
		$this->meta = $seoHeader['metas'];
		$this->styles = $seoHeader['styles'];
		$this->scripts = $seoHeader['scripts'];

		$this->load->view('galery_photos',$data);
	}
}

/* End of file Galery_Photos.php */
/* Location: ./application/controllers/Galery_Photos.php */