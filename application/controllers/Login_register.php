<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property CI_DB_mysqli_driver $db
 * @property login_model $login_model
 * @property register_model $register_model
 * @property CI_Loader $load
 * @property CI_Input $input
 * @property CI_Session $session
 */
// session_start();

class Login_register extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	public function indexlogin()
	{
		$this->load->view('login_view');
	}


	public function login()
	{

		//lấy dữ liệu từ view
		$email = $this->input->post('user-email');
		$password = $this->input->post('user-password');

		//$_SESSION['mail'] = $email;

		//gửi 2 biến trên sang model
		$this->load->model('login_model');
		$result = $this->login_model->getDatabyEmail($email);

		// echo "<pre>";
		// print_r($result);
		// echo "</pre>";
		// exit;


		foreach ($result as $value) {
			if (($value['password'] == md5($password)) && ($value['is_admin'] == 0)) {
				$id_user = $value['id'];


				$this->load->view('khachhangthanhcong_view');
				$this->session->set_userdata('vipmember', $email);
				$this->session->set_userdata('user_fullname', $value['fullname']);


				$_SESSION['id_user'] = $id_user;
			} elseif (($value['password'] == md5($password)) && ($value['is_admin'] == 1)) {
				$id_user = $value['id'];
				$this->load->view('adminthanhcong_view');
				$this->session->set_userdata('vipmembe', $email);


				$_SESSION['id_user'] = $id_user;
			}
			// $_SESSION['id'] = $value['id'];
			//echo $_SESSION['id'] ;
			elseif (($value['password'] == md5($password)) && ($value['is_admin'] == 2)) {
				$id_user = $value['id'];
				$this->load->view('nhanvienthanhcong_view');

				$this->session->set_userdata('vip2', $email);
				$_SESSION['id_user'] = $id_user;
			} else {
				$message = "Đăng nhập thất bại";
				echo "<script type='text/javascript'>alert('$message');</script>";
				$this->indexlogin();
			}
		}
	}


	public function indexregister()
	{
		$this->load->view('register_view');
	}

	public function register()
{
    // Kiểm tra nếu là AJAX request (kiểm tra header hoặc parameter)
    $is_ajax = $this->input->is_ajax_request() || 
               !empty($this->input->post('ajax')) || 
               (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
    
    // lấy dữ liệu từ view
    $email = $this->input->post('user-email');
    $password = $this->input->post('user-password');
    $password_re = $this->input->post('user-password-re');
    $fullname = $this->input->post('user-name');
    $birthday = $this->input->post('user-datebirth');
    $sdt = $this->input->post('user-sdt');
    $address = $this->input->post('user-address');

    // Nếu là AJAX request, trả về JSON
    if ($is_ajax) {
        header('Content-Type: application/json');
        
        // Kiểm tra dữ liệu đầy đủ
        if (!$email || !$password || !$password_re || !$fullname || !$birthday || !$sdt || !$address) {
            echo json_encode(array('success' => false, 'message' => 'Vui lòng điền đầy đủ thông tin'));
            return;
        }

        $this->load->model('register_model');

        // kiểm tra email đã tồn tại chưa
        if ($this->register_model->email_exists($email)) {
            echo json_encode(array('success' => false, 'message' => 'Email này đã được đăng ký'));
            return;
        }

        // kiểm tra số điện thoại đã tồn tại chưa
        if ($this->register_model->phone_exists($sdt)) {
            echo json_encode(array('success' => false, 'message' => 'Số điện thoại này đã được đăng ký'));
            return;
        }

        // kiểm tra mật khẩu có trùng nhau
        if ($password != $password_re) {
            echo json_encode(array('success' => false, 'message' => 'Mật khẩu và Mật khẩu xác nhận không trùng khớp'));
            return;
        }

        // insert vào DB
        if ($this->register_model->insert($email, md5($password), $fullname, $birthday, $sdt, $address)) {
            echo json_encode(array('success' => true, 'message' => 'Đăng ký thành công! Vui lòng đăng nhập.'));
            return;
        } else {
            echo json_encode(array('success' => false, 'message' => 'Đăng ký thất bại. Vui lòng thử lại.'));
            return;
        }
    }
    
    // Nếu không phải AJAX, giữ nguyên logic cũ cho form truyền thống
    if ($email && $password && $password_re && $fullname && $birthday && $sdt && $address) {
        $this->load->model('register_model');

        // kiểm tra email đã tồn tại chưa
        if ($this->register_model->email_exists($email)) {
            echo "<script>alert('Email này đã được đăng ký');</script>";
            $this->indexregister();
            return;
        }

        // kiểm tra số điện thoại đã tồn tại chưa
        if ($this->register_model->phone_exists($sdt)) {
            echo "<script>alert('Số điện thoại này đã được đăng ký');</script>";
            $this->indexregister();
            return;
        }

        // kiểm tra mật khẩu có trùng nhau
        if ($password != $password_re) {
            echo "<script>alert('Mật khẩu và Mật khẩu xác nhận không trùng khớp');</script>";
            $this->indexregister();
            return;
        }

        // insert vào DB
        if ($this->register_model->insert($email, md5($password), $fullname, $birthday, $sdt, $address)) {
            $this->load->view('dkythanhcong_view');
        } else {
            echo "<script>alert('Đăng ký thất bại');</script>";
            $this->indexregister();
        }
    } else {
        // Nếu thiếu dữ liệu, hiển thị thông báo lỗi
        echo "<script>alert('Vui lòng điền đầy đủ thông tin');</script>";
        $this->indexregister();
    }
}

}

/* End of file Login_register.php */
/* Location: ./application/controllers/Login_register.php */