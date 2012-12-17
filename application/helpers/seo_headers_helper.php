<?
/**
 * helper_headers : contiene el array de seo tags para cada pagina, 
 *					retorna el array dependiendo de $sel para renderizar 
 * 					los script,link,title,metas de la vista
 *
 * @author : Alfredo Iván Palomino Calli <ivanp151@gmail.com>
 * @copyright Copyright (c) 2012, @author
 *
 * @$sel 	=  name de la vista a renderizar 
 *
 * @return $seo_headers[$sel];
 */
if ( ! function_exists('seo_headers'))
{
    function seo_headers($sel = 'welcome')
    {    
    	$seo_headers = array(
    		'welcome' => array(
    			'title' => 'Bienvenido a el Colegio Enrique Guzmán y Valle',
    			'metas'	=> array(
    				array(
    					'name' 		=> 	'author',
    					'content'	=> 	'Alfredo palomino , Reina Elizabeth',
    				),
    				array(
    					'name' 		=> 	'Description',
    					'content'	=> 	'Colegio enrrique guzman y valle , academia educativa,'.
    									'  mejor colegio, educación inicial, educación Primaria'.
    									' educación secundaria',
    				),
    				array(
    					'name' 		=> 	'keywords',
    					'content'	=> 	'Colegio enrrique guzman y valle , academia educativa,'.
    									'  mejor colegio, educación inicial, educación Primaria'.
    									' educación secundaria',
    				),
    				array(
    					'name' 		=> 	'robots',
    					'content'	=> 	'index,follow',
    				),
    			),
    			'styles' => array(
    				
    			),
    			'scripts' => array(
    				array(
    					'type' 	=> 'text/javascript',
    					'src'	=> S::url('js/plugins/coin-slider.min.js'),
    				),
    				array(
    					'type' 	=> 'text/javascript',
    					'src'	=> S::url('js/main.js'),
    				),
    			),
    		),
			'actualidad' => array(
    			'title' => 'Actualidad en Enrique Guzmán y Valle Noticias',
    			'metas'	=> array(
    				array(
    					'name' 		=> 	'author',
    					'content'	=> 	'Alfredo palomino , Reina Elizabeth',
    				),
    				array(
    					'name' 		=> 	'Description',
    					'content'	=> 	'Nuevas noticias, actualidad educacion'.
    									'  mejor colegio, educación inicial, educación Primaria'.
    									' educación secundaria',
    				),
    				array(
    					'name' 		=> 	'keywords',
    					'content'	=> 	'Colegio enrrique guzman y valle , academia educativa,'.
    									'  mejor colegio, educación inicial, educación Primaria'.
    									' educación secundaria',
    				),
    				array(
    					'name' 		=> 	'robots',
    					'content'	=> 	'index,follow',
    				),
    			),
    			'styles' => array(
    				
    			),
    			'scripts' => array(
    				array(
    					'type' 	=> 'text/javascript',
    					'src'	=> S::url('js/plugins/coin-slider.min.js'),
    				),
    				array(
    					'type' 	=> 'text/javascript',
    					'src'	=> S::url('js/main.js'),
    				),
    			),
    		),
			'galery' => array(
    			'title' => 'Actualidad en Enrique Guzmán y Valle Noticias',
    			'metas'	=> array(
    				array(
    					'name' 		=> 	'author',
    					'content'	=> 	'Alfredo palomino , Reina Elizabeth',
    				),
    				array(
    					'name' 		=> 	'Description',
    					'content'	=> 	'Nuevas noticias, actualidad educacion'.
    									'  mejor colegio, educación inicial, educación Primaria'.
    									' educación secundaria',
    				),
    				array(
    					'name' 		=> 	'keywords',
    					'content'	=> 	'Colegio enrrique guzman y valle , academia educativa,'.
    									'  mejor colegio, educación inicial, educación Primaria'.
    									' educación secundaria',
    				),
    				array(
    					'name' 		=> 	'robots',
    					'content'	=> 	'index,follow',
    				),
    			),
    			'styles' => array(
    				
    			),
    			'scripts' => array(
    				array(
    					'type' 	=> 'text/javascript',
    					'src'	=> S::url('js/plugins/coin-slider.min.js'),
    				),
    				array(
    					'type' 	=> 'text/javascript',
    					'src'	=> S::url('js/main.js'),
    				),
    			),
    		),
			'niveles' => array(
    			'title' => 'Actualidad en Enrique Guzmán y Valle Noticias',
    			'metas'	=> array(
    				array(
    					'name' 		=> 	'author',
    					'content'	=> 	'Alfredo palomino , Reina Elizabeth',
    				),
    				array(
    					'name' 		=> 	'Description',
    					'content'	=> 	'Nuevas noticias, actualidad educacion'.
    									'  mejor colegio, educación inicial, educación Primaria'.
    									' educación secundaria',
    				),
    				array(
    					'name' 		=> 	'keywords',
    					'content'	=> 	'Colegio enrrique guzman y valle , academia educativa,'.
    									'  mejor colegio, educación inicial, educación Primaria'.
    									' educación secundaria',
    				),
    				array(
    					'name' 		=> 	'robots',
    					'content'	=> 	'index,follow',
    				),
    			),
    			'styles' => array(
    				
    			),
    			'scripts' => array(
    				array(
    					'type' 	=> 'text/javascript',
    					'src'	=> S::url('js/plugins/coin-slider.min.js'),
    				),
    				array(
    					'type' 	=> 'text/javascript',
    					'src'	=> S::url('js/main.js'),
    				),
    			),
    		),
			'estudiantes' => array(
    			'title' => 'Actualidad en Enrique Guzmán y Valle Noticias',
    			'metas'	=> array(
    				array(
    					'name' 		=> 	'author',
    					'content'	=> 	'Alfredo palomino , Reina Elizabeth',
    				),
    				array(
    					'name' 		=> 	'Description',
    					'content'	=> 	'Nuevas noticias, actualidad educacion'.
    									'  mejor colegio, educación inicial, educación Primaria'.
    									' educación secundaria',
    				),
    				array(
    					'name' 		=> 	'keywords',
    					'content'	=> 	'Colegio enrrique guzman y valle , academia educativa,'.
    									'  mejor colegio, educación inicial, educación Primaria'.
    									' educación secundaria',
    				),
    				array(
    					'name' 		=> 	'robots',
    					'content'	=> 	'index,follow',
    				),
    			),
    			'styles' => array(
    				
    			),
    			'scripts' => array(
    				array(
    					'type' 	=> 'text/javascript',
    					'src'	=> S::url('js/plugins/coin-slider.min.js'),
    				),
    				array(
    					'type' 	=> 'text/javascript',
    					'src'	=> S::url('js/main.js'),
    				),
    			),
    		),
			'docentes' => array(
    			'title' => 'Actualidad en Enrique Guzmán y Valle Noticias',
    			'metas'	=> array(
    				array(
    					'name' 		=> 	'author',
    					'content'	=> 	'Alfredo palomino , Reina Elizabeth',
    				),
    				array(
    					'name' 		=> 	'Description',
    					'content'	=> 	'Nuevas noticias, actualidad educacion'.
    									'  mejor colegio, educación inicial, educación Primaria'.
    									' educación secundaria',
    				),
    				array(
    					'name' 		=> 	'keywords',
    					'content'	=> 	'Colegio enrrique guzman y valle , academia educativa,'.
    									'  mejor colegio, educación inicial, educación Primaria'.
    									' educación secundaria',
    				),
    				array(
    					'name' 		=> 	'robots',
    					'content'	=> 	'index,follow',
    				),
    			),
    			'styles' => array(
    				
    			),
    			'scripts' => array(
    				array(
    					'type' 	=> 'text/javascript',
    					'src'	=> S::url('js/plugins/coin-slider.min.js'),
    				),
    				array(
    					'type' 	=> 'text/javascript',
    					'src'	=> S::url('js/main.js'),
    				),
    			),
    		),
			'nosotros' => array(
    			'title' => 'Actualidad en Enrique Guzmán y Valle Noticias',
    			'metas'	=> array(
    				array(
    					'name' 		=> 	'author',
    					'content'	=> 	'Alfredo palomino , Reina Elizabeth',
    				),
    				array(
    					'name' 		=> 	'Description',
    					'content'	=> 	'Nuevas noticias, actualidad educacion'.
    									'  mejor colegio, educación inicial, educación Primaria'.
    									' educación secundaria',
    				),
    				array(
    					'name' 		=> 	'keywords',
    					'content'	=> 	'Colegio enrrique guzman y valle , academia educativa,'.
    									'  mejor colegio, educación inicial, educación Primaria'.
    									' educación secundaria',
    				),
    				array(
    					'name' 		=> 	'robots',
    					'content'	=> 	'index,follow',
    				),
    			),
    			'styles' => array(
    				
    			),
    			'scripts' => array(
    				array(
    					'type' 	=> 'text/javascript',
    					'src'	=> S::url('js/plugins/coin-slider.min.js'),
    				),
    				array(
    					'type' 	=> 'text/javascript',
    					'src'	=> S::url('js/main.js'),
    				),
    			),
    		),
    	);
        return $seo_headers[$sel];
    }
}
