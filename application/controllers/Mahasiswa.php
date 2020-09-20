<?php

class Mahasiswa extends CI_Controller {
	
	function __construct(){
		parent:: __construct();
		$this->load->model('Mahasiswa_model');
		$this->load->library('template');
	}

	public function index (){

		/* perintah untuk meload "Mahasiswa_model" dengan fungsi
		yang dipanggil adalah "getAll" dan menampilkan hasilnya */
		$data['user'] = $this->Mahasiswa_model->getAll()->result();

		/* meload template dan menampilkan tampilan view di folder crud
		file home_mahasiswa */
		$this->template->views('crud/home_mahasiswa',$data);
	}

	/* fungsi untuk menampilkan form tambah data*/
	public function tambah(){
		//menampilkan view di folder crud file tambah mahasiswa
		$this->template->views('crud/tambah_mahasiswa');
	}

	/* fungsi untuk mengambil data hasil inputan form
	dan memasukkan ke database db_ci*/
	public function input(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$grup = $this->input->post('grup');		
		$data = array(
				'username' => $username,
				'password' => $password,
				'nama' => $nama,
				'grup' => $grup
		);
		$this->Mahasiswa_model->input_data($data,'tm_user');
		redirect('Mahasiswa');
	}
}