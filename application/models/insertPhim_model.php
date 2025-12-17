<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class insertPhim_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insertPhim($t, $d, $di, $ac, $la, $co, $de, $op, $ca)
	{
		$dulieuthemvaodb = array('title' => $t, 'duration'=> $d, 'director' => $di, 'actor'=>$ac, 'language'=>$la,'country'=>$co, 'description'=>$de, 'open_date'=>$op, 'category'=>$ca);
		return $this->db->insert('movie', $dulieuthemvaodb);
		
	}

}

/* End of file insertPhim_model.php */
/* Location: ./application/models/insertPhim_model.php */