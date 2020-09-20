<?php
class no3_model extends CI_Model{
    //membuat function dengan nama getPesan
    public function getPesan(){ 
        $pesan="Hello World dari CI Model";

        //mengembalikan nilai menjadi isi/value
        // dari variabel pesan
        return $pesan;
    }
}
?>