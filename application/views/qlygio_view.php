<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>quản lý lịch chiếu</title>

    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">

    <!-- Fonts -->
    <!-- Font awesome - icon font -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Roboto -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

    <!-- Mobile menu -->
    <link href="<?php echo base_url() ?>css/gozha-nav.css" rel="stylesheet" />
    <!-- Select -->
    <link href="<?php echo base_url() ?>css/external/jquery.selectbox.css" rel="stylesheet" />
    
    <!-- Custom -->
    <link href="<?php echo base_url() ?>css/themsty.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/style.css?v=1" rel="stylesheet" />

    <!-- Modernizr --> 
    <script src="<?php echo base_url() ?>js/external/modernizr.custom.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="jumbotron jumbotron-fluid text-xs-center">
                    <div class="container">
                        <h4 class="display-3">Thêm giờ chiếu</h4>
                        <pre></pre>
                        
                        
                        
                        <!--<p class="lead">1/11/2022</p>-->
                    </div>
                </div>
                <!-- <form> -->
                    <fieldset class="form-group phong1">
                        <h4>Phòng 1</h4>
                        <pre></pre>
                        <input type="time" name="gio" id="gio">
                        <a data-href="1" type="button" class="btn btn-success" id="nutthemgiophong1"><i class="fa fa-plus"></i> </a>
                    </fieldset>
                    <!-- <fieldset class="form-group themgphong1"> -->

                        <!-- </fieldset> -->
                        <!-- </form>   -->
                        <pre></pre>

                        <!-- <form> -->
                            <fieldset class="form-group phong2">
                                <h4>Phòng 2</h4>
                                <pre></pre>
                                <input type="time" name="gio" id="gio">
                                <a data-href="2" type="button" class="btn btn-success" id="nutthemgiophong2"><i class="fa fa-plus"></i></a>
                            </fieldset>
                            <!-- <fieldset class="form-group"> -->

                                <!-- </fieldset> -->
                                <!-- </form>   -->



                            </div>
                            <div class="col-sm-8">
                                <div class="jumbotron jumbotron-fluid text-xs-center">
                                    <div class="container">
                                        <?php foreach ($dulieutucontrollerTit as $valuephim): ?>
                                        <input type="hidden" name="id_movie" id="id_movie" value="<?= $valuephim['id'] ?>">
                                        <h3 class="display-5">Phim: <?= $valuephim['title']; ?></h3>


                                        <?php foreach ($daytucontroller as $day): ?>
                                        <h4 class="display-5">Ngày: <?= $day['day'] ?></h1>
                                        <input type="hidden" name="day" id="day" value="<?= $day['day'] ?>">

                                        <?php endforeach ?>

                                            <pre></pre>
                                        </div>
                                    </div>

                                    <div class="card card-inverse card-primary mb-3 text-center">
                                        <div class="card-block cacgio1">
                                            <h4>Phòng 1</h4>
                                            <?php foreach ($dulieutucontroller1 as $value1): ?>
                                            
                                            <li class="list-group-item">

                                                <div class="thaotac text-xs-right">

                                                    <a data-href="<?= $value1['id_calendar']; ?>" class="nutedit btn btn-danger"> <i class="fa fa-pencil"></i></a>
                                                    <a data-href="<?= $value1['id_calendar']; ?>" class="nutxoa btn btn-warning"> <i class="fa fa-remove"></i></a>
                                                </div>

                                                <div class="jquery_button text-xs-right hidden-xs-up">

                                                    <a data-href="<?= $value1['id_calendar']; ?>" class="nutluu btn btn-success">LƯU</a>
                                                </div>
                                                <div class="card-block">
                                                    <div class="jquery_gioedit hidden-xs-up">
                                                        <input type="time" name="gioedit" id="gioedit" class="form-control gioedit" value="<?= $value1['time']; ?>">
                                                    </div>


                                                    <div class="giochuaedit">     
                                                        <?= $value1['time']; ?>
                                                    </div>
                                                </div>


                                                


                                            </li>
                                            <?php endforeach ?>
                                        </div>

                                        <div class="card-block cacgio2">
                                            <h4>Phòng 2</h4>
                                            <?php foreach ($dulieutucontroller2 as $value2): ?>
                                            
                                            <li class="list-group-item">

                                                <div class="thaotac text-xs-right">

                                                    <a data-href="<?= $value2['id_calendar']; ?>" class="nutedit btn btn-danger"> <i class="fa fa-pencil"></i></a>
                                                    <a data-href="<?= $value2['id_calendar']; ?>" class="nutxoa btn btn-warning"> <i class="fa fa-remove"></i></a>
                                                </div>
                                                <div class="jquery_button text-xs-right hidden-xs-up">

                                                    <a data-href="<?= $value2['id_calendar']; ?>" class="nutluu btn btn-success">LƯU</a>
                                                </div>
                                                <div class="card-block">
                                                    <div class="jquery_gioedit hidden-xs-up">
                                                        <input type="time" name="gioedit" id="gioedit" class="form-control gioedit">
                                                    </div>


                                                    <div class="giochuaedit">     
                                                    <?= $value2['time']; ?>
                                                </div>
                                                </div>
                                                


                                            </li>
                                            <?php endforeach ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>

                        <!-- JavaScript-->
                        <script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
                        <script type="text/javascript" src="<?php echo base_url() ?>1.js"></script>
                        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> 

                        <script>
                            $(function(){
                                var duongdan = '<?php echo base_url() ?>' ;

                //sự kiện nút giờ
                $('body').on('click', '#nutthemgiophong1', function(event) {
                    id_phong = $(this).data('href');
                    id_movie= $('#id_movie').val();
                    day= $('#day').val();
                    gio = $(this).parent().children('input').val();
                    //console.log(id_phong, id_movie,day,gio);
                    $.ajax({
                        url: duongdan+'index.php/Qlylich_controller/ajax_themgio/'+id_phong+'/'+gio,
                        type: 'POST',
                        dataType: 'json',
                        data: {id_movie,day},
                    })
                    .done(function() {
                    //    console.log("success");
                })
                    .fail(function() {
                    //    console.log("error");
                })
                    .always(function(res) {
                        noidung = '<li class="list-group-item">';
                        noidung += '<div class="thaotac text-xs-right">';
                        noidung += '<a data-href="'+res+'" class="nutedit btn btn-danger"> <i class="fa fa-pencil"></i></a>';
                        noidung += ' <a data-href="'+res+'" class="nutxoa btn btn-warning"> <i class="fa fa-remove"></i></a>';
                        noidung += '</div>';
                        noidung += '<div class="jquery_button text-xs-right hidden-xs-up">';
                        noidung += '<a data-href="'+res+'" class="nutluu btn btn-success">LƯU</a>';
                        noidung += '</div>';
                        noidung += '<div class="card-block">';
                        noidung += '<div class="jquery_gioedit hidden-xs-up">';
                        noidung += '<input type="time" name="gioedit" id="gioedit" class="form-control gioedit">';
                        noidung += '</div>';
                        noidung += '<div class="giochuaedit">';
                        noidung += gio;
                        noidung += '</div>';
                        noidung += '</div>';

                        noidung += '</li>';
                        $('.cacgio1').append(noidung); // thêm ngày mới vào
                        $('#gio').val(''); // xoa ô input
                    });
                    

                    
                });

                $('body').on('click', '#nutthemgiophong2', function(event) {
                    id_phong = $(this).data('href');
                    id_movie= $('#id_movie').val();
                    day= $('#day').val();
                    gio = $(this).parent().children('input').val();
                    //console.log(id_phong, id_movie,day,gio);
                    $.ajax({
                        url: duongdan+'index.php/Qlylich_controller/ajax_themgio/'+id_phong+'/'+gio,
                        type: 'POST',
                        dataType: 'json',
                        data: {id_movie,day},
                    })
                    .done(function() {
                    //    console.log("success");
                })
                    .fail(function() {
                    //    console.log("error");
                })
                    .always(function(res) {
                        noidung = '<li class="list-group-item">';
                        noidung += '<div class="thaotac text-xs-right">';
                        noidung += '<a data-href="'+res+'" class="nutedit btn btn-danger"> <i class="fa fa-pencil"></i></a>';
                        noidung += ' <a data-href="'+res+'" class="nutxoa btn btn-warning"> <i class="fa fa-remove"></i></a>';
                        noidung += '</div>';
                        noidung += '<div class="jquery_button text-xs-right hidden-xs-up">';
                        noidung += '<a data-href="'+res+'" class="nutluu btn btn-success">LƯU</a>';
                        noidung += '</div>';
                        noidung += '<div class="card-block">';
                        noidung += '<div class="jquery_gioedit hidden-xs-up">';
                        noidung += '<input type="time" name="gioedit" id="gioedit" class="form-control gioedit">';
                        noidung += '</div>';
                        noidung += '<div class="giochuaedit">';
                        noidung += gio;
                        noidung += '</div>';
                        noidung += '</div>';

                        noidung += '</li>';
                        $('.cacgio2').append(noidung); // thêm ngày mới vào
                        $('#gio').val(''); // xoa ô input
                    });
                    

                    
                });

                //bắt đầu jquery nút xoá
                $('body').on('click', '.nutxoa', function(event) {
                    id_calendar = $(this).data('href');
                    doituongcanxoa = $(this).parent().parent();
                    $.ajax({
                        url: duongdan + 'index.php/Qlylich_controller/ajax_xoagio/' + id_calendar,
                        type: 'POST',
                        dataType: 'json',
                        data: {}
                    })
                    .done(function() {
                    //    console.log("success");
                })
                    .fail(function() {
                    //    console.log("error");
                })
                    .always(function() {
                        console.log("complete");
                        doituongcanxoa.remove();
                    });
                    
                }); //hết jquery nút xoá

                $('body').on('click', '.nutedit', function(event) {
                    //ẩn nội dung cũ
                    $(this).parent().addClass('hidden-xs-up');
                    $(this).parent().next().next().find('.giochuaedit').addClass('hidden-xs-up');

                    //hiện phần tử mới
                    $(this).parent().next().removeClass('hidden-xs-up');
                    $(this).parent().next().next().find('.jquery_gioedit').removeClass('hidden-xs-up');
                    event.preventDefault();

                });

                $('body').on('click', '.nutluu', function(event) {
                    id_calendar = $(this).data('href');
                    
                    //ẩn đi
                    
                    gioedit= $(this).parent().next().children('.jquery_gioedit').children().val();
                    phantu1 = $(this).parent().addClass('hidden-xs-up');
                    phantu2 = $(this).parent().next().children('.jquery_gioedit').addClass('hidden-xs-up');

                    noidung = $(this).parent().next().children('.jquery_gioedit').children('.gioedit').val();

                    //hiển thị lại
                    hienthi1 = $(this).parent().prev().removeClass('hidden-xs-up');
                    hienthi2 = $(this).parent().next().children('.giochuaedit').removeClass('hidden-xs-up');
                    hienthi3 = $(this).parent().next().children('.giochuaedit').html(noidung).removeClass('hidden-xs-up');

                    $.ajax({
                        url: duongdan+'index.php/Qlylich_controller/ajax_editgio/'+id_calendar,
                        type: 'POST',
                        dataType: 'json',
                        data: {gioedit},
                    })
                    .done(function() {
                        console.log("success");
                    })
                    .fail(function() {
                        console.log("error");
                    })
                    .always(function() {
                        console.log("complete");
                    });
                    event.preventDefault();
                    



                });
            })


        </script>


    </body>
    </html>