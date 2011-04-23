<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
   
   if( ! function_exists('get_line')){
	function get_line($line){
	    $CI =& get_instance();
	    
	    $CI->lang->load('nav');
	    
	    echo $CI->lang->line($line);
	}
   }
?>