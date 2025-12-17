<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class lich_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getDatabaseNgay($idm)
	{
		$this->db->distinct('day');
		$this->db->select('id_movie,day');
		$this->db->where('id_movie', $idm);
		$this->db->order_by('day', 'desc');
		
		$dulieuNgay= $this->db->get('calendar');
		return $dulieuNgay=$dulieuNgay->result_array();
	}
	
	public function getDatabaseGio($idm, $d)
	{
		$this->db->distinct('day');
		$this->db->select('day');
		$this->db->where('id_movie', $idm);
		$this->db->where('day', $d);
		$dulieuGio = $this->db->get('calendar');
		return $dulieuGio = $dulieuGio->result_array();

	}
	public function getDatabaseLichchieu($idm, $d)
	{
		$this->db->select('*');
		$this->db->where('id_movie', $idm);
		$this->db->where('day', $d);
		$dulieugio = $this->db->get('calendar');
		return $dulieugio= $dulieugio->result_array();

	}

	public function getDatabaseGio1($idm, $d)
	{
		$this->db->select('*');
		$this->db->where('id_movie', $idm);
		$this->db->where('day', $d);
		$this->db->where('id_phong', '1');
		$dulieuGio1 = $this->db->get('calendar');
		return $dulieuGio1 = $dulieuGio1->result_array();

	}
	public function getDatabaseGio2($idm, $d)
	{
		$this->db->select('*');
		$this->db->where('id_movie', $idm);
		$this->db->where('day', $d);
		$this->db->where('id_phong', '2');
		$dulieuGio2 = $this->db->get('calendar');
		return $dulieuGio2 = $dulieuGio2->result_array();

	}

	public function getTitlePhim($idm)
	{
		$this->db->select('*');
		$this->db->where('id', $idm);
		$dulieuTit= $this->db->get('movie');
		return $dulieuTit=$dulieuTit->result_array();
	}

	public function addNgay($idm, $d)
	{
		$dulieuthemvaodb = array('id_movie' => $idm , 'day' => $d);
		return $this->db->insert('calendar', $dulieuthemvaodb);
	}

	public function xoaNgay($idm, $d)
	{
		$this->db->where('id_movie', $idm);
		$this->db->where('day', $d);
		return $this->db->delete('calendar');
	}

	public function updateNgay($idm, $d, $de)
	{
		$dulieucanupdate = array('day' =>$de);
		$this->db->where('id_movie', $idm);
		$this->db->where('day', $d);
		return $this->db->update('calendar', $dulieucanupdate);
	}
	public function themGio($idm, $d, $p, $g)
	{
		$dulieuthemvaodb = array(
			'id_movie' => $idm ,
			'day' => $d,
			'id_phong'=> $p,
			'time'=> $g
		);
		return $this->db->insert('calendar', $dulieuthemvaodb);
	}

	public function xoaGio($idc)
	{
		$this->db->where('id_calendar', $idc);
		$this->db->delete('calendar');

	}
	public function updateGio($idc, $g)
	{
		$this->db->where('id_calendar', $idc);
		$dulieucanupdate = array('time' => $g);
		$this->db->update('calendar', $dulieucanupdate);
	}

	public function findDay($idm, $d)
	{
		$this->db->select('*');
		$this->db->where('id_movie', $idm);
		$this->db->where('day', $d);
		return $this->db->get('calendar');
		
	}

}

/* End of file calendar_model.php */
/* Location: ./application/models/calendar_model.php */