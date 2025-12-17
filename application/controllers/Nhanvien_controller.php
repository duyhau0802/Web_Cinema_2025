<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property CI_DB_mysqli_driver $db
 * @property showPhim_model $showPhim_model
 * @property seat_model $seat_model
 * @property CI_Loader $load
 * @property CI_Input $input
 * @property CI_Session $session
 */
class Nhanvien_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('showPhim_model');		
		$dulieu = $this->showPhim_model->getDatabasePhim();
		$dulieu = array('dulieutucontroller' => $dulieu);
		if ($this->session->userdata('vip2')) {
			$this->load->view('qlyphim_view', $dulieu, FALSE);
			
		}else {
			redirect('Login_register/indexlogin','refresh');
		}
		
		

	}

	public function deletePhim($idnhanduoc)
	{
		$this->load->model('showPhim_model');
		if ($this->showPhim_model->deletePhimById($idnhanduoc)) {
				$this->load->view('xoathanhcong_view');
		} else {
				
		}
	}
	
	public function index_xacnhanve()
	{
		$this->load->model('seat_model');
		$dulieubooking = $this->seat_model->showBooking();
		$dulieubooking = array('dulieubookingtucon' => $dulieubooking);
		if ($this->session->userdata('vip2')) {
			$this->load->view('xacnhanve_view', $dulieubooking);
		}else {
			redirect('Login_register/indexlogin','refresh');
		}
		
	}
	public function xacnhanve($idv)
	{
		$dulieucanupdate = array('status' => 1);
		$this->db->where('id_ve', $idv);
		$this->db->update('booking', $dulieucanupdate);

		$this -> index_xacnhanve();
	}
	
}

/* End of file InsertPhim_controller.php */
/* Location: ./application/controllers/InsertPhim_controller.php */