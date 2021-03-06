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
        margin: 10px 0;
        justify-content: center;
    }
    .col-sm-6{
        margin-top: 15px;
        justify-content: center;
    }
    .form-control{
        font-size: 20px;
    }
    .btn{
        justify-content: center;
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
                <h3 style="text-align: center">ĐỔI MẬT KHẨU</h3>
                <hr>
                <form action="DoiMatKhauUser.php" class="needs-validation" method="POST" novalidate>
                    <?php 
                         $kn = mysqli_connect("localhost", "root", "", "sotay") or die("chưa kết nối");
                         $sql1 = "select * from sinhvien INNER JOIN lop ON sinhvien.MaLop = lop.MaLop INNER JOIN khoahoc ON lop.MaKhoaHoc = khoahoc.MaKhoaHoc where MaSinhVien='".$_SESSION['Username']."'";
                         $kq1 = mysqli_query($kn,$sql1);
                         $row = mysqli_fetch_array($kq1);
                    ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Tên đăng nhập" name="txtTenDangNhap" required autocomplete="off" value="<?php echo $row['MaSinhVien'] ?>">
                                <div class="valid-feedback">Hợp lệ.</div>
                                <div class="invalid-feedback">Vui lòng không được bỏ trống thông tin!</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nhập mật khẩu cũ" name="txtMatKhauCu" required autocomplete="off">
                                <div class="valid-feedback">Hợp lệ.</div>
                                <div class="invalid-feedback">Vui lòng không được bỏ trống thông tin!</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="tieude" placeholder="Nhập mật khẩu mới" name="txtMatKhauMoi" required autocomplete="off">
                                <div class="valid-feedback">Hợp lệ.</div>
                                <div class="invalid-feedback">Vui lòng không được bỏ trống thông tin!</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="tieude" placeholder="Nhập lại mật khẩu mới" name="txtNhapLaiMatKhauMoi" required autocomplete="off">
                                <div class="valid-feedback">Hợp lệ.</div>
                                <div class="invalid-feedback">Vui lòng không được bỏ trống thông tin!</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="text-align: center;">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary" name="btnDoiMatKhau">ĐỔI MẬT KHẨU</button>
                        </div>
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
    function doimatkhau()
    {
        $MaSV = $_SESSION['Username'];
        $txtMatKhauCu = array_key_exists('txtMatKhauCu', $_POST) ? $_POST['txtMatKhauCu'] : null;
        $txtMatKhauMoi = array_key_exists('txtMatKhauMoi', $_POST) ? $_POST['txtMatKhauMoi'] : null;
        $txtNhapLaiMatKhauMoi = array_key_exists('txtNhapLaiMatKhauMoi', $_POST) ? $_POST['txtNhapLaiMatKhauMoi'] : null;

        $kn = mysqli_connect("localhost", "root", "", "sotay")or die("chưa kết nối");
        $timmatkhau = "select MatKhau from sinhvien where MaSinhVien = '".$MaSV."' and MatKhau = '".$txtMatKhauCu."'";
        $kqtimmatkhau = mysqli_query($kn, $timmatkhau);
        $row1 = mysqli_fetch_array($kqtimmatkhau);
        if(!$row1)
        {
            echo '<script>alert("Mật khẩu cũ sai và không khớp!");</script>';
            
        }
        else
        {
            if($txtNhapLaiMatKhauMoi = $txtMatKhauMoi)
            {
                $sql = "update sinhvien set MatKhau = '".$txtNhapLaiMatKhauMoi."' where MaSinhVien = '".$MaSV."'";
                $kq = mysqli_query($kn,$sql);
                echo '<script>alert("Đổi mật khẩu thành công");</script>';
            }  
            else
            {
                echo '<script>alert("Mật khẩu mới và nhập lại mật khẩu không khớp nhau!");</script>';
            }
               
        }
    }

    if($_POST){
        if(isset($_POST['btnDoiMatKhau']) and $_SERVER['REQUEST_METHOD'] == "POST"){
            doimatkhau();
        }
    }
?>
</body>
</html>
​
