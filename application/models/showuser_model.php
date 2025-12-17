<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showuser_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getuser($i)
	{
		$this->db->select('*');//lấy hết dữ liệu
		$this->db->where('id', $i);
		$ketquauser = $this->db->get('user');//lấy dữ liệu từ bảng user

		

		$ketquauser = $ketquauser->result_array();

		return $ketquauser;
	}
	public function editByID($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$dulieu = $this->db->get('user');
	//	var_dump($dulieu);
		$dulieu = $dulieu->result_array();
        return $dulieu;

	}
	public function updateDataById($id,$fullname,$birthday,$email,$sdt,$address)
	{
		$dulieucanupdate = array(
			'id' => $id,
			'fullname' => $fullname,
			'birthday' => $birthday,
			'email' => $email,
			'sdt' => $sdt,
			'address' => $address,
		);

		$this->db->where('id', $id);
		return $this->db->update('user', $dulieucanupdate);

	}

}

/* End of file showuser_model.php */
/* Location: ./application/models/showuser_model.php */