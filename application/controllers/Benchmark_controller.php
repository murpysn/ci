<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Benchmark_controller extends CI_Controller{
    function __construct(){
        parent::__construct();
        // $this->output->enable_profiler('TRUE');
        $this->benchmark->mark('my_start');
    }
    function __destruct(){
        $this->benchmark->mark('my_stop');
    }
    function index(){
        $this->load->view('view_benchmark');
        echo "Murpy SN";
    }

}
?>