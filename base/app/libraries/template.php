<?php
class Template {
	protected $_ci;
	function __construct(){
		$this->_ci =&get_instance();
	}

	function display($dashboard,$data=null){
		$data['_content']=$this->_ci->load->view($dashboard,$data, true);
		$data['_header']=$this->_ci->load->view('dashboard/template/header',$data, true);
		$data['_footer']=$this->_ci->load->view('dashboard/template/footer',$data, true);
		$this->_ci->load->view('/dashboard.php',$data);
	}
}