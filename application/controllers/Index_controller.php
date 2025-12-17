<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Thêm dòng này vào danh sách DocBlock của Controller:
 * @property CI_DB_mysqli_driver $db
 * @property showPhim_model $showPhim_model 
 * @property CI_Loader $load           // Nếu bạn dùng $this->load
 * @property CI_Input $input           // Nếu bạn dùng $this->input (Lỗi cũ)
 */

class Index_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('showPhim_model');
		$dulieuPhimDC = $this->showPhim_model->getDatabasePhimDC();
		$dulieuPhimDC = array('dulieuPhimDCcon' => $dulieuPhimDC );
		$this->load->view('Index_view', $dulieuPhimDC, FALSE);
	}

}

/* End of file IndexPhimDC_controller.php */
/* Location: ./application/controllers/IndexPhimDC_controller.php */