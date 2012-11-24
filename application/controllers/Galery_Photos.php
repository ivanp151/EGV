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
		$this->load->view('galery_photos',$data);
	}
}

/* End of file Galery_Photos.php */
/* Location: ./application/controllers/Galery_Photos.php */