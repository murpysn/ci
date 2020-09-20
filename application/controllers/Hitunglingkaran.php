<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Hitunglingkaran extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('lingkaran');
        // $this->output->enable_profiler('TRUE');
        $this->benchmark->mark('my_start');
    }
    function __destruct(){
        $this->benchmark->mark('my_stop');
    }
    function index(){
        $this->lingkaran->keliling('21');
        echo "<hr/>";
        $this->lingkaran->luas('14');
    }

}
?>