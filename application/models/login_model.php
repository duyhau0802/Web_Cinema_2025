<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getDatabyEmail($e)
	{
		$this->db->select('*');
		$this->db->where('email', $e);
		return $this->db->get('user') ->result_array();;

	}

	public function getdatabase()
	{
		$this->db->select('*');
		return $this->db->get('user')->result_array();
	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */