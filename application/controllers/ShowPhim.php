<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property CI_DB_mysqli_driver $db
 * @property showPhim_model $showPhim_model
 * @property CI_Loader $load
 * @property CI_Input $input
 */
class ShowPhim extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}

	public function PhimDC()
	{
		$this->load->model('showPhim_model');

		$dulieuPhimDC = $this->showPhim_model->getdatabasePhimDC();
		$dulieuPhimDC = array('dulieuPhimDCcon' => $dulieuPhimDC );

		$this->load->view('showPhimDC_view', $dulieuPhimDC, FALSE);
	}

	public function PhimSC()
	{
		$this->load->model('showPhim_model');
		$dulieuPhimSC = $this->showPhim_model->getdatabasePhimSC();
		$dulieuPhimSC = array('dulieuPhimSCcon' => $dulieuPhimSC );

		$this->load->view('showPhimSC_view', $dulieuPhimSC, FALSE);
	}


}

/* End of file ShowPhimDC.php */
/* Location: ./application/controllers/ShowPhimDC.php */