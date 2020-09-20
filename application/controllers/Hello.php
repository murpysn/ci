<?php
class Hello extends CI_Controller{
  public function index(){
      //echo "<h2>Hello World CI!</h2>";
      
      //memuat model
      $this->load->model('Hello_model');

      //mengambil objek
      $model = $this->Hello_model;

      //mengambil data dari var model
      $a = $model->txt;

      //memuat data yang akan dikirim ke view
      $data['teks'] = $a;

      //memanggil view
      $this->load->view('helloview', $data);
      
  }  
}
?>