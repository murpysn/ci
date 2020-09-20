<?php 
class Sbadmin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('template');
    }

    function index(){
        $data['mahasiswa'] = $this->Mahasiswa_model->get_Data();
        $this->template->views('view_mahasiswa',$data);
    }
    
}
?>