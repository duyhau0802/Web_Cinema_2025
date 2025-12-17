<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    // kiểm tra email đã tồn tại chưa
    public function email_exists($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('user');
        return $query->num_rows() > 0;
    }

    // kiểm tra số điện thoại đã tồn tại chưa
    public function phone_exists($sdt)
    {
        $this->db->where('sdt', $sdt);
        $query = $this->db->get('user');
        return $query->num_rows() > 0;
    }

    // insert user mới
    public function insert($email, $password, $fullname, $birthday, $sdt, $address)
    {
        $data = array(
            'email' => $email,
            'password' => $password,
            'fullname' => $fullname,
            'birthday' => $birthday,
            'sdt' => $sdt,
            'address' => $address
        );
        return $this->db->insert('user', $data);
    }
}


/* End of file register_model.php */
/* Location: ./application/models/register_model.php */