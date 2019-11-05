<?php
//Created by Aruji
//Contact https://web.facebook.com/bantalku567

include "model/model.php";

class controller{
	public $model;
	function __construct(){
		$this->model = new model();
	}
	
	function css($css_name){
	    $this->model->css($css_name);
	}

	function req_otp(){
		$this->model->reqotp();
	}
	
	function beli_paket(){
		$this->model->beli_paket();
	
	}
	
    function get_token(){
        $this->model->get_token();
    }
    
    function beli_paket_token(){
        $this->model->beli_paket_token();
        
    }

}

?>
