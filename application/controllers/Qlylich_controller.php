<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property CI_DB_mysqli_driver $db
 * @property lich_model $lich_model
 * @property CI_Loader $load
 * @property CI_Input $input
 */
class Qlylich_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function indexNgay($idmotuview)
	{
		$this->load->model('lich_model');		
		$dulieu = $this->lich_model->getDatabaseNgay($idmotuview);
		
		$dulieu = array('dulieutucontroller' => $dulieu);
		$dulieuTit = $this->lich_model->getTitlePhim($idmotuview);
		$dulieuTit = array('dulieutucontrollerTit' => $dulieuTit);
		//var_dump($dulieu);
		//var_dump($dulieuTit);
		$this->load->view('qlylich_view',$dulieuTit+$dulieu, FALSE);

		
	}

	public function indexGio($idmotuview, $daychuadoi)
	{
		//echo "$idmotuview, $daychuadoi";
		$this->load->model('lich_model');
		$dulieu1 = $this->lich_model->getDatabaseGio1($idmotuview, $daychuadoi);
		$dulieu1 = array('dulieutucontroller1' => $dulieu1);
		$dulieu2 = $this->lich_model->getDatabaseGio2($idmotuview, $daychuadoi);
		$dulieu2 = array('dulieutucontroller2' => $dulieu2);
		$dulieuTit = $this->lich_model->getTitlePhim($idmotuview);
		$dulieuTit = array('dulieutucontrollerTit' => $dulieuTit);
		$day = $this->lich_model->getDatabaseGio($idmotuview, $daychuadoi);
		$day = array('daytucontroller' => $day);

		//var_dump($dulieu);
		//var_dump($dulieuTit);
		$this->load->view('qlygio_view',$dulieuTit+$dulieu1+$dulieu2+$day, FALSE);
	}

	public function ajax_themngay($idmotuview)
	{
		$day = $this->input->post('day');
		$this->load->model('lich_model');
		
		$this->lich_model->addNgay($idmotuview, $day);

		echo json_encode($day);
	

		//echo $idmotuview, $ngay;
		//$day = $this->input->post('ngay');
		//$this->load->model('lich_model');
		
	}

	public function ajax_xoangay($daychuadoi)
	{
		$id_movie = $this->input->post('id_movie');
		//echo $daychuaedit, $idmotuview;
		$this->load->model('lich_model');
		$this->lich_model->xoaNgay($id_movie, $daychuadoi);
	}

	public function ajax_editngay($idmotuview)
	{
		$daychuaedit = $this->input->post('daychuaedit');
		$dayedit = $this->input->post('dayedit');
		$this->load->model('lich_model');
		$this->lich_model->updateNgay($idmotuview, $daychuaedit, $dayedit);
	}

	public function ajax_themgio($phong, $gio)
	{
		$id_movie = $this->input->get_post('id_movie');
		$day = $this->input->get_post('day');

		//var_dump($phong);
		//var_dump($gio);
		//var_dump($id_movie);
		//var_dump($day);

		$this->load->model('lich_model');
		$this->lich_model->themGio($id_movie, $day, $phong, $gio);
		echo json_encode($this->db->insert_id());
	}
	public function ajax_xoagio($idc)
	{
		$this->load->model('lich_model');
		$this->lich_model->xoaGio($idc);

	}
	public function ajax_editgio($idc)
	{
		$gioedit = $this->input->get_post('gioedit');
		$this->load->model('lich_model');
		$this->lich_model->updateGio($idc, $gioedit);
	}

}

/* End of file Qlylich_controller.php */
/* Location: ./application/controllers/Qlylich_controller.php */