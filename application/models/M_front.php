<?php

class M_front extends CI_Model
{
	
	public function __construct()
	{
		parent:: __construct();
	}

	public function get_tb_siswa(){
		$siswa = $this->db->get('tb_siswa')->result();
		
		if ($siswa)
			return $siswa;
		
	}

	public function add_siswa($data){
		$tambah = $this->db->insert('tb_siswa',$data);
		if($tambah){
			redirect();
		}

	}
}

?>