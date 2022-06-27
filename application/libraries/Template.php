<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template {
	var $ci;

	function __construct(){
		$this->ci = & get_instance();
	}

    function load($loc ,$tpl_name,$view,$data=null){
    	if($loc == 'admin' && $tpl_name == 'default'){
    		$tpl_name = 'admin';
    	}

    	if($loc == 'emp' && $tpl_name == 'default'){
    		$tpl_name = 'emp';
    	}

    	$data['main'] = $loc .'/'. $view; 
    	$this->ci->load->view('/template/'.$tpl_name,$data);
    }


}
