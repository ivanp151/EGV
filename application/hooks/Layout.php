<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
/**   
 * CI Layout mimic RoR/CakePHP   
 *    
 * Original code at http://codeigniter.com/forums/viewreply/284919/   
 */
  
class Layout { 
    function index()   
    {      
        global $OUT;
        $CI     =& get_instance();
  
        // get default output generated by CI
        $output = $CI->output->get_output();
        
        if (isset($CI->layout))
        {
            if (!preg_match('/(.+).php$/', $CI->layout))
            {
                $CI->layout .= '.php';
            }
  
            // this will be the requested layout
            $requested  = APPPATH . 'views/layout/' . $CI->layout;
            // this is the default layout, use as fallback
            $default    = APPPATH . 'views/layout/default.php';
            $layout     = '';
  
            if (file_exists($requested))
            {
                $layout = $CI->load->file($requested, true);
            }
            else
            {
                $layout = $CI->load->file($default, true);
            }
  
            $view = str_replace("{content}", $output, $layout);


            if( isset($CI->title) && isset($CI->meta) && isset($CI->scripts) && isset($CI->styles)){
                $view = str_replace("{title}", $CI->title, $view);

                //script for metas
                $scripts = "";
                $styles  = "";
                $metas   = "";
                if ( count( $CI->meta ) > 0) {
                    $metas = meta($CI->meta);                    
                }
                if (count($CI->scripts) > 0) {  
                    foreach ($CI->scripts as $script) {
                        $scripts .= '<script type="'.$script['type'].'" src="'.$script['src'].'" ></script>'.PHP_EOL;
                    }
                }
                if (count($CI->styles) > 0) {   
                    foreach ($CI->styles as $style) {
                        $styles .=  link_tag($style);
                        $styles .= ' '.PHP_EOL;
                    }
                }

                $view = str_replace("{metas}", $metas, $view);
                $view = str_replace("{scripts}", $scripts, $view);
                $view = str_replace("{styles}", $styles, $view);
                $view = preg_replace("/{.*?}/ims", "", $view);
            }
            
        }
        else
        {
            $view = $output;
        }

        $OUT->_display($view);
    }
}