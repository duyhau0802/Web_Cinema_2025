<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng ký</title>

	<!-- Mobile Specific Metas-->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
    
    <!-- Fonts -->
        <!-- Font awesome - icon font -->
        <link href="<?php echo base_url(); ?>https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Roboto -->
        <link href='<?php echo base_url(); ?>http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets -->

        <!-- Mobile menu -->
        <link href="<?php echo base_url(); ?>css/gozha-nav.css" rel="stylesheet" />
        <!-- Select -->
        <link href="<?php echo base_url(); ?>css/external/jquery.selectbox.css" rel="stylesheet" />
    
        <!-- Custom -->
        <link href="<?php echo base_url(); ?>css/style.css?v=1" rel="stylesheet" />

        <!-- Modernizr --> 
        <script src="<?php echo base_url(); ?>js/external/modernizr.custom.js"></script>
</head>
<body>
	<div class="wrapper">
         <!-- Banner -->
        

        <!-- Header section -->
        <div class="wrapper">
        <!-- Banner -->
       <!-- Banner -->
       <div class="banner-top">
        <img alt='top banner' src="<?php echo base_url(); ?>images/banner.png" style="height:90px; width:1600px">
    </div>
 <?php require('header_view.php') ?>
       
        
        <!-- Main content -->

        <?php foreach ($mangketqua as $key => $value): ?>

                <form id="login-form" class="login" action="../updatedulieu" method='post' enctype="multidata/form-data">
                    <p class="login__title">SỬA THÔNG TIN</p>

                 
                   <div class="field-wrap">
                    <input type="hidden" name="id" class="form-control" id="form-groupExampleInput"
                    placeholder="vd" value="<?= $value['id'] ?>">
                    Email
                    <input type='email' value='<?= $value['email'] ?>' name='email' class="login__input" >
                  

                    Tên sử dụng
                    <input type='fullname' value='<?= $value['fullname'] ?>' name='fullname' class="login__input" >
                    
                    Ngày Sinh
                    <input type='' value='<?= $value['birthday'] ?>' name='birthday' class="login__input" >

                    
                    
                    Số Điện Thoại
                    <input type='sdt' value='<?= $value['sdt'] ?>' name='sdt' class="login__input" >

                    Địa chỉ
                    <input type='address' value='<?= $value['address'] ?>' name='address' class="login__input" >
                   
                     </div>
                    
                    <div class="login__control">
                        <button type='submit' href="showuser_controller/edituser/<?= $value['id'] ?>" class="btn btn-md btn--warning btn--wider">lưu</button>
                    </div>
                    
                </form>
                <?php endforeach ?>
        
        <div class="clearfix"></div>
    </div>


    <!-- JavaScript-->
        <!-- jQuery 3.1.1--> 
        <script src="<?php echo base_url(); ?>https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/external/jquery-3.1.1.min.js"><\/script>')</script>
        <!-- Migrate --> 
        <script src="<?php echo base_url(); ?>js/external/jquery-migrate-1.2.1.min.js"></script>
        <!-- Bootstrap 3--> 
        <script src="<?php echo base_url(); ?>http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- Mobile menu -->
        <script src="<?php echo base_url(); ?>js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="<?php echo base_url(); ?>js/external/jquery.selectbox-0.2.min.js"></script>
        <!-- Form element -->
        <script src="<?php echo base_url(); ?>js/external/form-element.js"></script>
        <!-- Form validation -->
        <script src="<?php echo base_url(); ?>js/form.js"></script>

        <!-- Custom -->
        <script src="<?php echo base_url(); ?>js/custom.js"></script>
</body>
</html>