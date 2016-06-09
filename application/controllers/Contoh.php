<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contoh extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		/*$this->load->database();
		$this->load->helper('url');*/

		$this->load->library('grocery_CRUD');
	}

	public function siswa()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('buku');
		/*	$crud->set_subject('Office');
			$crud->required_fields('city');
			$crud->columns('city','country','phone','addressLine1','postalCode');
*/
			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function _example_output($output = null)
	{
		$this->load->view('v_contoh.php',$output);
	}

}

?>