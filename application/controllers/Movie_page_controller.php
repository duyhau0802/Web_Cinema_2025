<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property CI_DB_mysqli_driver $db
 * @property showPhim_model $showPhim_model
 * @property lich_model $lich_model
 * @property CI_Loader $load
 * @property CI_Input $input
 */
class Movie_page_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}

	public function showinfophim($idlaytuview)
	{
		
		$this->load->model('showPhim_model');
		$ketqua = $this->showPhim_model->getinfophim($idlaytuview);
		$ketqua = array('dulieutucontroller' =>$ketqua);
		$daychuadoi = date('Y-m-d');
		$this->load->model('lich_model');
		$dulieugio = $this->lich_model->getDatabaseLichchieu($idlaytuview, $daychuadoi);
		$dulieugio = array('dulieugiotucontroller' => $dulieugio);
		$day = date('d-m-Y');
			
		$dulieungay= array(array($day));
		$dulieungay = array('dulieungaytucontroller'=>$dulieungay);
		// echo "<pre>";
		// var_dump($dulieungay);
		// $this->load->model('lich_model');
		// // $ketqualich = $this->lich_model->getinfophim($idlaytuview);
		// echo "<pre>";


		$this->load->view('movie_page_view', $ketqua + $dulieungay + $dulieugio);
		
	}

}

/* End of file Movie-page_controller.php */
/* Location: ./application/controllers/Movie-page_controller.php */