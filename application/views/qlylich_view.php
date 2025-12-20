<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý lịch chiếu phim</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <!-- jQuery (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            padding: 20px;
        }
        .hidden-xs-up {
            display: none !important;
        }
        .jumbotron {
            background-color: #f8f9fa;
            padding: 2rem 1rem;
            margin-bottom: 2rem;
            border-radius: 0.3rem;
        }
        .card {
            margin-bottom: 1rem;
        }
        .btn {
            margin: 0 2px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="jumbotron jumbotron-fluid text-xs-center">
                    <div class="container">
                        <?php foreach ($dulieutucontrollerTit as $valuephim): ?>
                            <h1 class="display-5">Thêm ngày </h1>
                            <input type="hidden" name="id_movie" id="id_movie" value="<?= $valuephim['id'] ?>">
                            <p class="lead"><?= $valuephim['id'] ?>: <?= $valuephim['title']; ?></p>
                        
                    </div>
                </div>
                <!-- <form action=" //echo base_url(); ?>/tin/themdanhmuc" method="post"> -->
                    <fieldset class="form-group">
                        <label for="formGroupExampleInput">Chọn ngày</label>
                        <input name="day" type="date" class="form-control" id="day" x>
                    </fieldset>
                    <fieldset class="form-group">
                        <input type="button" class="form-control" id="nutthemngay" value="Thêm ngày">
                    </fieldset>
                    <!-- </form> -->
                </div> <!-- end cot trai -->
                <div class="col-sm-6">
                    <div class="jumbotron jumbotron-fluid text-xs-center cacngay">
                        <div class="container">
                            <h1 class="display-5">Danh sách ngày chiếu phim </h1>
                        </div>
                    </div>
                    <?php foreach ($dulieutucontroller as $value): ?>


                        <?php
                                            $daychuadoi = $value["day"];
                                            $daydadoi = date("d/m/Y", strtotime($daychuadoi));
                                            ?>
                        <div class="card card-inverse card-primary mb-3 text-center">
                            <div class="card-block">
                                <div class="thaotac text-xs-right">

                                    <a data-href="<?php echo $daychuadoi ?>" class="nutedit btn btn-danger"> <i class="fa fa-pencil"></i></a>
                                    <a data-href="<?php echo $daychuadoi ?>" class="nutxoa btn btn-warning"> <i class="fa fa-remove"></i></a>
                                    <a href="../indexGio/<?= $value['id_movie'] ?>/<?php echo $daychuadoi ?>" class="nutxem btn btn-danger"> <i class="fa fa-eye"></i></a>

                                </div>

                                <div class="jquery_button text-xs-right hidden-xs-up">

                                    <a href="" class="nutluu btn btn-success">LƯU</a>
                                </div>

                                <!--<div class="jquery_button text-xs-right hidden-xs-up">
                                    <a href="" class="btn btn-success nutluu"> Lưu </a>

                                </div>-->

                                <h4 class="card-blockquote">

                                    <fieldset class="form-group jquery_dayedit hidden-xs-up">
                                        
                                        <input type="date" class="form-control dayedit" name="dayedit" value= "<?= $daychuadoi ?>">
                                    </fieldset>


                                    <div class="daychuaedit">
                                        <input type="hidden" name="daychuaedit" id="daychuaedit" class="daychuaedit" value="<?= $daychuadoi ?>">

                                        <?php echo $daydadoi ?>
                                        
                                    </div>     
                                </h4>


                            </div>
                        </div> <!-- het mot danh mục -->
                    <?php endforeach ?>
                    <?php endforeach ?>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- DateJS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datejs/1.0/date.min.js"></script>

        <script>
        // Ensure jQuery is available
        if (typeof jQuery == 'undefined') {
            document.write('<script src="https://code.jquery.com/jquery-3.6.0.min.js"><\/script>');
        }


            $(function(){
                var duongdan = '<?php echo base_url() ?>' ;

                //sự kiện nút thêm ngav
                $('#nutthemngay').click(function(event) {
                    var id_movie = $('#id_movie').val();
                    var day = $('#day').val();
                    var dout = day;
                    function stringToDate(_date,_format,_delimiter)
                    {
                        var formatLowerCase=_format.toLowerCase();
                        var formatItems=formatLowerCase.split(_delimiter);
                        var dateItems=_date.split(_delimiter);
                        var monthIndex=formatItems.indexOf("mm");
                        var dayIndex=formatItems.indexOf("dd");
                        var yearIndex=formatItems.indexOf("yyyy");
                        var month=parseInt(dateItems[monthIndex]);
                        month-=1;
                        var formatedDate = new Date(dateItems[yearIndex],month,dateItems[dayIndex]);
                        return formatedDate;
                    }
                    dout = stringToDate(dout,"yyyy-mm-dd","-");
                    dout = dout.toLocaleDateString();
                   // dout = Date.parse(dout);
                   // dout = dout.newDate
                    //dout = dout.toString('dd/mm/yyyy');
                    console.log(dout);
                    //console.log(id_movie);
                    //console.log(day);
                    $.ajax({
                        url: duongdan+'index.php/Qlylich_controller/ajax_themngay/'+id_movie,
                        type: 'POST',
                        dataType: 'json',
                        data: {day}
                    })
                    .done(function() {
                    //    console.log("success");
                    })
                    .fail(function() {
                    //    console.log("error");
                    })
                    .always(function(res) {
                        //console.log(res);

                        //dùng jquery thêm nội dung thêm mới

                        
                        noidung = '<div class="card card-inverse card-primary mb-3 text-center">';
                        noidung += '<div class="card-block">';
                        noidung += '<div class="thaotac text-xs-right">';
                        noidung += '<a data-href="'+res+'" class="nutedit btn btn-danger"> <i class="fa fa-pencil"></i></a>';
                        noidung += '<a data-href="'+res+'" class="nutxoa btn btn-warning"> <i class="fa fa-remove"></i></a>';
                        noidung += '<a href="../indexGio/<?= $value['id_movie'] ?>/'+day+'" class="nutxem btn btn-danger"> <i class="fa fa-eye"></i></a>';
                        noidung += '</div>';
                       //noidung += '<div class="jquery_button text-xs-right hidden-xs-up">';
                        //noidung += '<a href="" class="btn btn-success nutluu"> Lưu </a>';
                        noidung += '<div class="jquery_button text-xs-right hidden-xs-up">';
                        noidung += '<a href="" class="nutluu btn btn-success">LƯU</a>';
                        noidung += '</div>';
                        
                        noidung += '<h4 class="card-blockquote">';
                        noidung += '<fieldset class="form-group jquery_dayedit hidden-xs-up">';
                        noidung += '<input type="date" class="form-control dayedit" name="dayedit" value= "<?= $daychuadoi ?>">';
                        noidung += '</fieldset>';
                        noidung += '<div class="daychuaedit">';
                        noidung += dout;
                        noidung += '</div>';
                        noidung += '</h4>';
                        noidung += '</div>';
                        noidung += '</div>';
                        
                $('.cacngay').after(noidung); // thêm ngày mới vào
                $('#day').val(''); // xoa ô input

            });
                    
                });//hết jquery nút thêm mới

                //bắt đầu jquery nút xoá
                $('body').on('click', '.nutxoa', function(event) {
                    var daychuadoi = $(this).data('href');
                    var id_movie = $('#id_movie').val();
                    doituongcanxoa = $(this).parent().parent().parent();
                    $.ajax({
                        url: duongdan + 'index.php/Qlylich_controller/ajax_xoangay/' + daychuadoi,
                        type: 'POST',
                        dataType: 'json',
                        data: {id_movie}
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

                //bắt đầu jquery nút edit

                $('body').on('click', '.nutedit', function(event) {
                    
                    //ẩn nội dung cũ
                    //$('.thaotac,.daychuaedit').addClass('hidden-xs-up');
                    $(this).parent().addClass('hidden-xs-up');
                    $(this).parent().next().next().find('.daychuaedit').addClass('hidden-xs-up');

                    //cho phần tử mới hiện lên
                    //$('.jquery_button,.jquery_dayedit').removeclass('hidden-xs-up');
                    $(this).parent().next().removeClass('hidden-xs-up');
                    $(this).parent().next().next().find('.jquery_dayedit').removeClass('hidden-xs-up');
                    event.preventDefault();

                    
                
                });

                $('body').on('click', '.nutluu', function(event) {
                    
                    //ajax

                    id_movie = $('#id_movie').val();
                    daychuaedit = $(this).parent().next().children('.daychuaedit').children('input').val();
                    dayedit = $(this).parent().next().children('.jquery_dayedit').children().val();
                    phantu1 = $(this).parent().addClass('hidden-xs-up');
                    phantu2 = $(this).parent().next().children('.jquery_dayedit').addClass('hidden-xs-up');
                    noidung = $(this).parent().next().children('.jquery_dayedit').children('.dayedit').val();
                    

                    //hiển thị lại
                    hienthi1 = $(this).parent().prev().removeClass('hidden-xs-up');
                    hienthi2 = $(this).parent().next().children('.daychuaedit').removeClass('hidden-xs-up');
                    hienthi3 = $(this).parent().next().children('.daychuaedit').html(noidung).removeClass('hidden-xs-up');
                    $.ajax({
                        url: duongdan+'index.php/Qlylich_controller/ajax_editngay/'+id_movie,
                        type: 'POST',
                        dataType: 'json',
                        data: {daychuaedit, dayedit},
                    })
                    .done(function() {
                    //    console.log("success");
                    })
                    .fail(function() {
                    //    console.log("error");
                    })
                    .always(function() {
                        console.log("complete");
                    });
                    event.preventDefault();


                    
                
                });


                
                
            });
        </script>
    </body>
</html>