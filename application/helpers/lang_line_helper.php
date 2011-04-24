<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
   
   if( ! function_exists('get_line')){
	function get_line($line){
	    $CI =& get_instance();
	    
	    $CI->lang->load('univers','indonesia');
	    $CI->lang->load('nav','indonesia');
	    
	    
	    echo $CI->lang->line($line);
	}
   }
   
   if( ! function_exists('get_line_item')){
	function get_line_item($line){
	    $CI =& get_instance();
	    
	    $CI->lang->load('univers','indonesia');
	    $CI->lang->load('nav','indonesia');
	    
	    
	    return $CI->lang->line($line);
	}
   }
?>