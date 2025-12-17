<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property CI_DB_mysqli_driver $db
 * @property showuser_model $showuser_model
 * @property login_model $login_model
 * @property CI_Loader $load
 * @property CI_Input $input
 * @property CI_Session $session
 */
// khởi tạo biến sessions
//session_start();

class showuser_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function indexshowuser()
	{	
		$this->load->model('showuser_model');
		$dulieu = $this->showuser_model->getuser($_SESSION['id_user']);
		
		$dulieu = array('dulieucontroller' => $dulieu ); 
		// echo "<pre>";
		// var_dump($dulieu);


		//biến dữ liệu thành mảng với key = dulieucontroller
		

		if ($this->session->userdata('vipmember')) {
			$this->load->view('showuser_view', $dulieu);
			
		}else {
			redirect('Login_register/indexlogin','refresh');
		}

	}
     public function logout(){
		if ($this->session->has_userdata('vipmember')) {
			$this->session->unset_userdata('vipmember');
			redirect('index_controller','refresh');
			
		}
	}
	public function edituser($idlayve)
	{
		$this->load->model('showuser_model');
		$ketqua = $this->showuser_model->editByID($idlayve);
		$ketqua = array('mangketqua' => $ketqua);
		//truyền ketqua vào efitview
		$this->load->view('edituser_view', $ketqua, FALSE);
	}


     public function updatedulieu(){
	$id = $this->input->post('id');
	$fullname = $this->input->post('fullname');
	$birthday = $this->input->post('birthday');
	$email = $this->input->post('email');
	$sdt = $this->input->post('sdt');
	$address = $this->input->post('address');

	
	$this->load->model('showuser_model');

	$this->showuser_model->updateDataById($id,$fullname,$birthday,$email,$sdt,$address);
		
	$this->indexshowuser();
     

     }
     public function indextaikhoan()
	{
		
		$this->load->view('showuser_view');
		$this->load->model('login_model');

          echo '<pre>';
		var_dump($this->login_model->getdatabase());
		
	}
	



 
}

/* End of file showuser_controller.php */
/* Location: ./application/controllers/showuser_controller.php */