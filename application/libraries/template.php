<?php
    class Template{
        protected $_ci;
        function __construct(){
            $this->_ci = &get_instance();
        }
        function views($template = NULL, $data = NULL){
            if($template != NULL){
                //memanggil file dari Admin/_Template kemudian ditampung kedalam $data
                //$data['head'] memanggil head.php dari Admin/_template
                //['head'] data yang kita panggil dari Admin/_template/template.php
                $data['head'] = $this->_ci->load->view('Admin/_Template/head', $data, TRUE);
                $data['topbar'] = $this->_ci->load->view('Admin/_Template/topbar', $data, TRUE);
                $data['sidebar'] = $this->_ci->load->view('Admin/_Template/sidebar', $data, TRUE);
                //$template dan $data diperoleh data dari controller
                //['isi'] data yang dipanggil dari Admin/_template/content.php
                $data['isi'] = $this->_ci->load->view($template, $data, TRUE);
                $data['content'] = $this->_ci->load->view('Admin/_Template/content', $data, TRUE);
                $data['footer'] = $this->_ci->load->view('Admin/_Template/footer', $data, TRUE);
                $data['js'] = $this->_ci->load->view('Admin/_Template/js', $data, TRUE);

                //menampilkan file template.php dari folder admin/_Template/
                echo $data['template']=$this->_ci->load->view('Admin/_Template/template', $data, TRUE);
            }
        }
    }
?>