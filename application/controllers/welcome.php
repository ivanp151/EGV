<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public $layout = 'default';
	/**
	 *	constructor carga helpers
	 */
	public function __contructor(){

	}
	/**
	 *	index :  carga la pagina inicial 
	 * 	
	 */
	public function index()
	{
		$data['menu'] = menu_ul('home');
		/*
		 *	title , metas, y css de cada 
		 */
		$seoHeader = seo_headers('welcome');
		$this->title = $seoHeader['title'];
		$this->meta = $seoHeader['metas'];
		$this->styles = $seoHeader['styles'];
		$this->scripts = $seoHeader['scripts'];

		/*var_dump($this->meta);
		foreach ($this->meta as $key => $value) {
			echo $value;
		}
		/*
		var_dump($this->title);
		echo PHP_EOL;
		
		echo PHP_EOL;
		var_dump($this->style);
		echo PHP_EOL;
		var_dump($this->script);
		echo PHP_EOL;
		*/
		$this->load->view('index',$data);
	}
	public function json_view()
	{	
		//unset $this->layout for render json
		unset($this->layout);

		$data['json'] = '{"success":true,"data":"hola"}';

		$this->load->view('json', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */