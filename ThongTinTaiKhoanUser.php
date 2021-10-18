<?php 
    require 'site.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Thông tin tài khoản</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style/style-footer.css">
  <link rel="stylesheet" href="style/style-VanBan.css">
  <style>
    .row{
        margin: 12px 0;
    }
    .col-sm-6{
        margin-top: 18px;

    }
  </style>
</head>
<body>

<!-- top đầu trang -->
<div class="jumbotron text-center" style="margin-bottom:0;  padding: 20px;">

    <?php load_top(); ?>

</div>

<!-- menu của trang / menu user 1 -->
<?php load_menu_user_1(); ?>

<!-- thân của trang -->
<div class="container-fluid" style="margin-top:30px;">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-3">

            <!-- menu của thân trang / menu user 2-->
            <?php load_menu_user_2(); ?>

            <hr class="d-sm-none">
        </div>

        <div class="col-sm-7">
            <div class="container">
                <h3 style="text-align: center">THÔNG TIN TÀI KHOẢN SINH VIÊN</h3>
                <hr>
                <form action="ThongTinTaiKhoanUser.php" class="needs-validation" method="POST" novalidate>
                    <?php 
                         $kn = mysqli_connect("localhost", "root", "", "sotay") or die("chưa kết nối");
                         $sql1 = "select * from sinhvien INNER JOIN lop ON sinhvien.MaLop = lop.MaLop INNER JOIN khoahoc ON lop.MaKhoaHoc = khoahoc.MaKhoaHoc where MaSinhVien='".$_SESSION['Username']."'";
                         $kq1 = mysqli_query($kn,$sql1);
                         $row = mysqli_fetch_array($kq1);
                    ?>
                    <div class="row">
                        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Mã sinh viên" style="pointer-events: none" value="<?php echo $row['MaSinhVien'] ?>"></div>
                        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Họ tên sinh viên" style="pointer-events: none" value="<?php echo $row['HoTen'] ?>"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"><input type="date" class="form-control" placeholder="Ngày sinh" style="pointer-events: none" value="<?php echo $row['NgaySinh'] ?>"></div>
                        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Giới tính" style="pointer-events: none" value="<?php echo $row['GioiTinh'] ?>"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Số điện thoại" style="pointer-events: none" value="<?php echo $row['SDT'] ?>"></div>
                        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Email" style="pointer-events: none" value="<?php echo $row['Email'] ?>"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Mã Lớp" style="pointer-events: none" value="<?php echo $row['MaLop'] ?>"></div>
                        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Tên lớp" style="pointer-events: none" value="<?php echo $row['TenLop'] ?>"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Chức vụ" style="pointer-events: none" value="<?php echo $row['ChucVu'] ?>"></div>
                        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Tình trạng học" style="pointer-events: none" value="<?php echo $row['TinhTrangHoc'] ?>"></div>
                    </div>
                </form>
                <br>
            </div>
            
            <br>

            <script>
            // Disable form submissions if there are invalid fields
            (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
                });
            }, false);
            })();
            </script>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>

<!-- chân trang -->
<div class="jumbotron text-center" style="margin-bottom:0">

    <?php load_footer(); ?>

</div>
<?php
    function guiGopY()
    {
        $MaSV = $_SESSION['Username'];
        $message = array_key_exists('noidung', $_POST) ? $_POST['noidung'] : null;
        $tieude = array_key_exists('tieude', $_POST) ? $_POST['tieude'] : null;

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = getdate();
        $ngay = $date['mday'];
        $thang = $date['mon'];
        $nam = $date['year'];
        $gio = $date['hours'];
        $phut = $date['minutes'];
        $giay = $date['seconds'];

        $ngayGopY = $nam."-".$thang."-".$ngay;
        $gioGopY = $gio.":".$phut.":".$giay;

        $kn = mysqli_connect("localhost", "root", "", "sotay")or die("chưa kết nối");
        $sql = "insert into homthugopy (ID, MaSinhVien, NgayGopY, GioGopY, TieuDe, NoiDung) values ('', '$MaSV', '$ngayGopY', '$gioGopY', '$tieude' , '$message')";
        $kq = mysqli_query($kn,$sql);

        echo '<script>alert("Gửi thông tin góp ý thành công!");</script>';
    }

    if($_POST){
        if(isset($_POST['submit']) and $_SERVER['REQUEST_METHOD'] == "POST"){
            guiGopY();
        }
    }
?>
</body>
</html>
​
