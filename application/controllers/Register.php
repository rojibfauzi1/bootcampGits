<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


	 
	public function index()
	{
		$this->load->model('M_front');

		$data		   = array();
		$data['siswa'] = $this->M_front->get_tb_siswa();

		$data['title'] = 'Ini hanya coba';
		$this->load->view('v_register',$data);
		/*$this->output->enable_profiler(TRUE);*/ //melihat informasi
		
	}

	public function add_siswa(){
		$this->load->view('v_addsiswa');
	}
	public function simpan_siswa(){
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');

		
                $this->form_validation->set_rules('nama', 'Nama Confirmation', 'required|max_length[13]');
                $this->form_validation->set_rules('nim', 'NIM', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                        /*$this->load->view('myform');*/
                        /*echo "Salah, salahnya di : ".validation_errors();*/
                        /*$this->load->library('session');*/  //load manual library session
                        $this->session->set_flashdata('pesan','gagal, errornya di : '.validation_errors());
                        redirect('Register/add_siswa','refresh');
                }
                else
                {
                        /*echo "Validasi data berhasil";;*/
                       

                        $nama = $this->input->post('nama',TRUE);
                        $nim = $this->input->post('nim',TRUE);

                        $data_kirim = array(
                        	'nama'=>$nama,
                        	'nim'=>$nim
                        	);

                        $this->M_front->add_siswa($data_kirim);

                        $this->session->set_flashdata('pesan','Simpan Data Berhasil');
                		redirect('Register/add_siswa','refresh');
                }
        
	}
}
