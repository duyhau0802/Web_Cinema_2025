<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property CI_DB_mysqli_driver $db
 * @property showPhim_model $showPhim_model
 * @property CI_Loader $load
 * @property CI_Input $input
 */
class Qlyanh_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index($idnhantuview)
	{

		$this->load->model('showPhim_model');
		$ketqua = $this->showPhim_model->getDatabasePhimById($idnhantuview);
		$ketqua = array('dulieutucontroller' =>$ketqua);
		$this->load->view('qlyanh_view',$ketqua, FALSE);
	}
	public function upAnh()
	{
		$id = $this->input->get_post('id');
		
		$target_dir = "Fileupload/";
		$target_file = $target_dir . basename($_FILES["poster"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["poster"]["tmp_name"]);
		  if($check !== false) {
		    echo "File is an image - " . $check["mime"] . ".";
		    $uploadOk = 1;
		  } else {
		    echo "File is not an image.";
		    $uploadOk = 0;
		  }
		}


		// Allow certain file  formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		 // echo 	"Chỉ chấp nhận file ảnh";
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		 // echo "Lỗi, File chưa được upload!";
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["poster"]["tmp_name"], $target_file)) {
		    //echo "File ". htmlspecialchars( basename( $_FILES["poster"]["name"])). " đã được tải lên.";
		  } else {
		    echo "Sorry, there was an error uploading your file.";
		  }
		}
		$poster = basename($_FILES["poster"]["name"]);

		if ($poster) //nếu có up load poster
		{
			$poster = base_url()."Fileupload/".basename($_FILES["poster"]["name"]);
		}
		else
		{
			$poster = $this->input->post('postercu');
		}

		
		$target_dir = "Fileupload/";
		$target_file = $target_dir . basename($_FILES["image1"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["image1"]["tmp_name"]);
		  if($check !== false) {
		    echo "File is an image - " . $check["mime"] . ".";
		    $uploadOk = 1;
		  } else {
		    echo "File is not an image.";
		    $uploadOk = 0;
		  }
		}


		// Allow certain file  formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		  //echo 	"Chỉ chấp nhận file ảnh";
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  //echo "Lỗi, File chưa được upload!";
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file)) {
		   // echo "File ". htmlspecialchars( basename( $_FILES["image1"]["name"])). " đã được tải lên.";
		  } else {
		    echo "Sorry, there was an error uploading your file.";
		  }
		}
		
		$image1 = basename($_FILES["image1"]["name"]);

		if ($image1) //nếu có up load poster
		{
			$image1 = base_url()."Fileupload/".basename($_FILES["image1"]["name"]);
		}
		else
		{
			$image1 = $this->input->post('image1cu');
		}


		$target_dir = "Fileupload/";
		$target_file = $target_dir . basename($_FILES["image2"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["image2"]["tmp_name"]);
		  if($check !== false) {
		    echo "File is an image - " . $check["mime"] . ".";
		    $uploadOk = 1;
		  } else {
		    echo "File is not an image.";
		    $uploadOk = 0;
		  }
		}


		// Allow certain file  formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		  //echo 	"Chỉ chấp nhận file ảnh";
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		 // echo "Lỗi, File chưa được upload!";
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file)) {
		   // echo "File ". htmlspecialchars( basename( $_FILES["image2"]["name"])). " đã được tải lên.";
		  } else {
		    echo "Sorry, there was an error uploading your file.";
		  }
		}

		$image2 = basename($_FILES["image2"]["name"]);

		if ($image2) //nếu có up load poster
		{
			$image2 = base_url()."Fileupload/".basename($_FILES["image2"]["name"]);
		}
		else
		{
			$image2 = $this->input->post('image2cu');
		}
		
		//
		$target_dir = "Fileupload/";
		$target_file = $target_dir . basename($_FILES["image3"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["image3"]["tmp_name"]);
		  if($check !== false) {
		    echo "File is an image - " . $check["mime"] . ".";
		    $uploadOk = 1;
		  } else {
		    echo "File is not an image.";
		    $uploadOk = 0;
		  }
		}


		// Allow certain file  formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		 // echo 	"Chỉ chấp nhận file ảnh";
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  //echo "Lỗi, File chưa được upload!";
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file)) {
		  //  echo "File ". htmlspecialchars( basename( $_FILES["image3"]["name"])). " đã được tải lên.";
		  } else {
		    echo "Sorry, there was an error uploading your file.";
		  }
		}

		$image3 = basename($_FILES["image3"]["name"]);

		if ($image3) //nếu có up load poster
		{
			$image3 = base_url()."Fileupload/".basename($_FILES["image3"]["name"]);
		}
		else
		{
			$image3 = $this->input->post('image3cu');
		}




		$target_dir = "Fileupload/";
		$target_file = $target_dir . basename($_FILES["image4"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["image4"]["tmp_name"]);
		  if($check !== false) {
		    echo "File is an image - " . $check["mime"] . ".";
		    $uploadOk = 1;
		  } else {
		    echo "File is not an image.";
		    $uploadOk = 0;
		  }
		}


		// Allow certain file  formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		  //echo 	"Chỉ chấp nhận file ảnh";
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  //echo "Lỗi, File chưa được upload!";
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["image4"]["tmp_name"], $target_file)) {
		   // echo "File ". htmlspecialchars( basename( $_FILES["image4"]["name"])). " đã được tải lên.";
		  } else {
		    echo "Sorry, there was an error uploading your file.";
		  }
		}

		$image4 = basename($_FILES["image4"]["name"]);

		if ($image4) //nếu có up load poster
		{
			$image4 = base_url()."Fileupload/".basename($_FILES["image4"]["name"]);
		}
		else
		{
			$image4 = $this->input->post('image4cu');
		}

		$target_dir = "Fileupload/";
		$target_file = $target_dir . basename($_FILES["imgtra1"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["imgtra1"]["tmp_name"]);
		  if($check !== false) {
		    echo "File is an image - " . $check["mime"] . ".";
		    $uploadOk = 1;
		  } else {
		    echo "File is not an image.";
		    $uploadOk = 0;
		  }
		}


		// Allow certain file  formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		 // echo 	"Chỉ chấp nhận file ảnh";
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  //echo "Lỗi, File chưa được upload!";
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["imgtra1"]["tmp_name"], $target_file)) {
		   // echo "File ". htmlspecialchars( basename( $_FILES["imgtra1"]["name"])). " đã được tải lên.";
		  } else {
		    echo "Sorry, there was an error uploading your file.";
		  }
		}

		$imgtra1 = basename($_FILES["imgtra1"]["name"]);

		if ($imgtra1) //nếu có up load poster
		{
			$imgtra1 = base_url()."Fileupload/".basename($_FILES["imgtra1"]["name"]);
		}
		else
		{
			$imgtra1 = $this->input->post('imgtra1cu');
		}


		$target_dir = "Fileupload/";
		$target_file = $target_dir . basename($_FILES["imgtra2"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["imgtra2"]["tmp_name"]);
		  if($check !== false) {
		    echo "File is an image - " . $check["mime"] . ".";
		    $uploadOk = 1;
		  } else {
		    echo "File is not an image.";
		    $uploadOk = 0;
		  }
		}


		// Allow certain file  formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		 // echo 	"Chỉ chấp nhận file ảnh";
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		 // echo "Lỗi, File chưa được upload!";
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["imgtra2"]["tmp_name"], $target_file)) {
		   // echo "File ". htmlspecialchars( basename( $_FILES["imgtra2"]["name"])). " đã được tải lên.";
		  } else {
		    echo "Sorry, there was an error uploading your file.";
		  }
		}

		$imgtra2 = basename($_FILES["imgtra2"]["name"]);

		if ($imgtra2) //nếu có up load poster
		{
			$imgtra2 = base_url()."Fileupload/".basename($_FILES["imgtra2"]["name"]);
		}
		else
		{
			$imgtra2 = $this->input->post('imgtra2cu');
		}

		$trailer1 = $this->input->post('trailer1');
		$trailer2 = $this->input->post('trailer2');





		$this->load->model('showPhim_model');
		if ($this->showPhim_model->upAnh($id,$poster, $image1, $image2, $image3, $image4, $imgtra1, $imgtra2, $trailer1, $trailer2)) {
			$this->index($id);
		} else {
			echo"Không thành công";
		}
		

		

		
	}



}

/* End of file Qlyanh_controller.php */
/* Location: ./application/controllers/Qlyanh_controller.php */