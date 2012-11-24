<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";
$route['404_override'] = '';

$route['prueba'] = 'Static_Pages_School';
$route['nosotros'] = 'Static_Pages_School/weAre';
$route['nivelesEducativos'] = 'Static_Pages_School/levelsEducatives';

$route['galeria-de-fotos'] = 'Galery_Photos';
$route['actualidad'] = 'Actually';
$route['estudiantes'] = 'Students';
$route['docentes'] = 'Teachers';

class R{
	public $r;
	public function __construct(){
		$id = 'home';
		$this->r[$id]['pagina-inicio']=
		'welcome';

		$id = 'levels';
		$this->r[$id]['niveles-educativos']=
		'Niveles-Educativos';

	}
	public function getRoutes(){

	}
	public function url($id){
		return $this->r[$id];
	}
}
/*
*	S class
*/
class S{
    public static function url($file){
        return MEDIAURL.$file.'?vs='.STATICVERSION;
    }
}

//$route = R::makeCiRoutes($route);
/* End of file routes.php */
/* Location: ./application/config/routes.php */
