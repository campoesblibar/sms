<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends IAN_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('template');
		$this->load->helper('url');
	}

	public function index(){
		$this->template->display('main');
	}

	public function masterdata(){
		$this->template->display('masterdata');
	}

}