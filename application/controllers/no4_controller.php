<?php
class No4_controller extends CI_Controller{
    function __construct(){
		parent::__construct();
		$this->load->model('No4_model');
	}
    public function index(){
        $data['pesan'] = $this->No4_model->getData();
		$this->load->view('no4_view',$data);
    }
}