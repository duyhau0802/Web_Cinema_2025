<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class taikhoan_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insert($email, $fullname, $birthday, $address, $sdt)
	{
		$dulieu = array(
			'email' => $email,
			'fullname' => $fullname,
			'birthday' => $birthday,
			'address' => $address,
			'sdt' => $sdt
		);
		$this->db->insert('user', $dulieu);
		return $this->db->insert_id();
	}

}

/* End of file taikhoan_model.php */
/* Location: ./application/models/taikhoan_model.php */

