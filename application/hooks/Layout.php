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
        }
        else
        {
            $view = $output;
        }
  
        $OUT->_display($view);
    }
}