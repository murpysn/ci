<?php
/**
* 
*/
class Mahasiswa_model extends CI_Model
{
	/*fungsi get all untuk memanggil database dan menjoin kan tabel
	tm_grup dengan tm_user setelah itu mengquerynya*/
	function getAll(){
		$this->db->select('*');
		$this->db->from('tm_user');
		$this->db->join('tm_grup','tm_user.grup=tm_grup.id_grup');
		$query=$this->db->get();

		return $query;
	}

	//fungsi untuk input data ke database
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}
?>