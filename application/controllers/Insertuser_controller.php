<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property CI_DB_mysqli_driver $db
 * @property CI_Loader $load
 * @property CI_Input $input
 */
class Insertuser_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('insertuser_view');
	}

	public function mkuser_controller()
	{

	echo	$email = $this->input->post('email');
		echo	$fullname = $this->input->post('fullname');
	echo	$birthday = $this->input->post('birthday');
	
	echo	$address = $this->input->post('address');
echo	$sdt = $this->input->post('sdt');

		

		
	}

}

/* End of file InsertPhim_controller.php */
/* Location: ./application/controllers/InsertPhim_controller.php */