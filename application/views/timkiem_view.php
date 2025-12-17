<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css
">
    <link href="<?php echo base_url(); ?>css/sidebar.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <cript src="<?php echo base_url(); ?>https://code.jquery.com/jquery-3.4.1.js"></cript>
    <cript src="<?php echo base_url(); ?>https://kit.fontawesome.com/a076d05399.js"></cript>
    <title>trang người dùng</title>
</head>
<body>
    <div class="left">

        <div class="tren"><h2>ADMIN</h2></div>

        <div class="ava">
        <div class="avatar"></div>
        <div class="well">wellcome!</div>
        <div class="wellc"><h3>Admin</h3></div>
        </div><br>

        <nav class="chung">
            <ul>
            <li><a href="index.html">Xác Nhận Vé</a></li>
            <li><a href="Admin_controller">Quản Lí Phim</a></li>
            <li><a href="showadmin_controller">Quản Lý Người Dùng</a></li>
               
            </ul>
        </nav>
    </div>


    <div class="right" >
        
        <div class="menu" >   
             <a>Admin</a>
            <i class="fas fa-user-circle"></i>
        </div>

        <div class="box">
            <form class="sbox" action="<?php echo base_url('tim-kiem') ?>" method="get">
            <input class="stext" type="text" name="/search" placeholder="Tìm kiếm ...">
            <a class="sbutton" type="submit" href="javascript:void(0);">
            <i class="fa fa-search"></i>
            </a>
            </form>
        </div>
        <form action="" method="post">
        <div class="them">
            <button type="submit" >
                <a href="Inserttaikhoan_controller" style="text-decoration: none; color:white">Thêm người dùng </a>
            </button>
            <button type="submit">
                lưu
            </button>
        </div>
        </form>
           

        <div class="taobang">
          
        <table style="width:100%" >
            <b class="tieu"><center>Quản lý người dùng</center></b>
            <thead>
            <tr>
              <th >ID</th>
              <th >EMAIL</th>
             <th >AVATAR</th>
              <th >FULLNAME</th>
              <th >BIRTHDAY</th>
              <th >SDT</th>
              <th >ADDRESS</th>
                <th >XÓA</th>

            </tr>

           
        </thead>
        <tbody>
            <?php foreach ($dulieuvaocontroller as $key => $value): ?>
                <tr>
              <td><?= $value['id'] ?></td>
              <td><?= $value['email'] ?></</td>
             <td><?= $value['avatar'] ?></td>
              <td><?= $value['fullname'] ?></td>
              <td><?= $value['birthday'] ?></td>
              <td><?= $value['sdt'] ?></td>
              <td><?= $value['address'] ?></td>
              
              
               <td><a href="showadmin_controller/deleteuser/<?= $value['id'] ?>" class="btn btn-danger xoa"><i class="far fa-trash-alt"></i></a></td>
                            
           
              </tr>
   
            <?php endforeach ?>

            </tbody>
          </table>

        </div>
 
        </div>
   
</body>
</html>



