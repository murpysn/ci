<?php
class No3 extends CI_Controller{
  public function index(){
      //memuat model dari direktori model: no3_model.php
      $this->load->model('No3_model');
      
      //mengambil nilai dari function getPesan 
      //yang ada di no3_model.php dan ditampung
      //kedalam variabel data
      $data = $this->No3_model->getPesan();
      echo $data;
  }  
}
?>