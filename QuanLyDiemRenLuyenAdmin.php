<?php 
    require 'site.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trang chủ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style/style-footer.css">
  <link rel="stylesheet" href="style/style-VanBan.css">
  <script src="js/chonkhoa.js"></script>
  <script src="js/chonnamhoc.js"></script>
</head>
<body>

<!-- top đầu trang -->
<div class="jumbotron text-center" style="margin-bottom:0; padding: 20px;">

    <?php load_top(); ?>

</div>

<!-- menu của trang / menu admin 1 -->
<?php load_menu_admin_1(); ?>

<!-- thân của trang -->
<div class="container-fluid" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-1"></div>

        <div class="col-sm-10">
            <?php 
                $cboNamHoc = array_key_exists('cboNamHoc', $_POST) ? $_POST['cboNamHoc'] : null;
                $cboHocKy = array_key_exists('cboHocKy', $_POST) ? $_POST['cboHocKy'] : null;
                $cbolop = array_key_exists('cboLop', $_POST) ? $_POST['cboLop'] : null;
                $cboKhoa = array_key_exists('cboKhoa', $_POST) ? $_POST['cboKhoa'] : null;
                $cboLanCham = array_key_exists('cboLanCham', $_POST) ? $_POST['cboLanCham'] : null;

                function XepLoai($tongdiem)
                {
                    $xeploai = "";
                    if($tongdiem < 35)
                    {
                        $xeploai = "Kém";
                    }
                    if($tongdiem >= 35 and $tongdiem < 50)
                    {
                        $xeploai = "Yếu";
                    }
                    if($tongdiem >= 50 and $tongdiem < 65)
                    {
                        $xeploai = "Trung bình";
                    }
                    if($tongdiem >= 65 and $tongdiem < 80)
                    {
                        $xeploai = "Khá";
                    }
                    if($tongdiem >= 80 and $tongdiem < 90)
                    {
                        $xeploai = "Tốt";
                    }
                    if($tongdiem >= 90)
                    {
                        $xeploai = "Xuất sắc";
                    }
                    return $xeploai;
                }

                function TimKiem($cboHocKy, $cboNamHoc, $cboKhoa, $cbolop, $cboLanCham)
                {
                    if($cboHocKy == "" or $cboNamHoc == "" or $cboKhoa == "" or $cbolop == "" or $cboLanCham == "")
                    {
                        echo '<script>alert("Bạn cần chọn thông tin tìm kiếm");</script> ';
                    }
                    else
                    {
                        $kn = mysqli_connect("localhost", "root", "", "sotay") or die ("chưa kết nối");
                        $sql = "select * from bangdiemrenluyen
                                INNER JOIN sinhvien ON sinhvien.MaSinhVien = bangdiemrenluyen.MaSinhVien 
                                INNER JOIN lop ON sinhvien.MaLop = lop.MaLop 
                                INNER JOIN khoahoc ON khoahoc.MaKhoaHoc = lop.MaKhoaHoc 
                                where khoahoc.MaKhoaHoc ='".$cboKhoa."' and lop.MaLop = '".$cbolop."' and bangdiemrenluyen.LanCham = '$cboLanCham' 
                                    and bangdiemrenluyen.NamHoc='".$cboNamHoc."' and bangdiemrenluyen.HocKy = '".$cboHocKy."'";
                        $kq = mysqli_query($kn, $sql);
                        $stt = 0;
                        while($row10 = mysqli_fetch_array($kq))
                        {
                            $_SESSION['MaSinhVien'] = $row10['MaSinhVien'];
                            $maSV = $_SESSION['MaSinhVien'];
                            $NamHoc = $row10['NamHoc'];
                            $HocKy = $row10['HocKy'];
                            $tongdiem = $row10['TongDiem'];

                            $xeploai = "";
                            if($tongdiem < 35)
                            {
                                $xeploai = "Kém";
                            }
                            if($tongdiem >= 35 and $tongdiem < 50)
                            {
                                $xeploai = "Yếu";
                            }
                            if($tongdiem >= 50 and $tongdiem < 65)
                            {
                                $xeploai = "Trung bình";
                            }
                            if($tongdiem >= 65 and $tongdiem < 80)
                            {
                                $xeploai = "Khá";
                            }
                            if($tongdiem >= 80 and $tongdiem < 90)
                            {
                                $xeploai = "Tốt";
                            }
                            if($tongdiem >= 90)
                            {
                                $xeploai = "Xuất sắc";
                            }
                            

                            $stt = $stt + 1;
                            echo "<tr class='hang1'>
                                <td class='cot' style='text-align: center;'>".$stt."</td>
                                <td class='cot' style='text-align: center;'>".$row10['MaSinhVien']."</td>
                                <td class='cot' >".$row10['HoTen']."</td>
                                <td class='cot' >".$row10['ChucVu']."</td>
                                <td class='cot' >".$row10['TenLop']."</td>
                                <td class='cot' style='text-align: center;'>".$row10['TongDiem']."</td>
                                <td class='cot' >".$xeploai."</td>
                                <td class='cot'><a target='_blank' href='ChiTietDiemRL.php?masv=$maSV&namhoc=$NamHoc&hocky=$HocKy'>Chi tiết</a></td>
                            </tr>";
                        }  
                    }      
                }
            ?>

            <form action="" method="POST">
                <div class="home">
                    <div> 
                        </div>
                            <div class="HDsearch">
                                <table style="font-size:20px; margin: auto;">   
                                    <tr>
                                        <td>
                                            <h2 style="display: flex; justify-content: center; text-align: center">QUẢN LÝ ĐIỂM RÈN LUYỆN SINH VIÊN</h2>
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <select class="form-control drop cboKhoa" name="cboKhoa" id="cboKhoa">
                                                        <option value="" selected="selected">--Chọn khóa học--</option>
                                                        <?php
                                                            $kn = mysqli_connect("localhost", "root", "", "sotay") or die("chưa kết nối");
                                                            $sql1 = "select * from khoahoc";
                                                            $kq1 = mysqli_query($kn, $sql1);
                                                            while($row2 = mysqli_fetch_array($kq1)):
                                                        ?>
                                                        <option value="<?php echo htmlspecialchars($row2['MaKhoaHoc']) ?>"><?php echo htmlspecialchars($row2['MaKhoaHoc']) ?></option>
                                                        <?php endwhile; ?>
                                                    </select>
                                                    <script type='text/javascript'>
                                                        document.getElementById('cboKhoa').value = "<?php echo $_POST['cboKhoa'];?>";
                                                    </script> 
                                                </div>
                                                <div class="col-sm-2">
                                                    <select class="form-control drop cboLop" name="cboLop" id="cboLop" >
                                                        <option value="" selected="selected">--Chọn lớp học--</option>
                                                    </select>
                                                    <script type='text/javascript'>
                                                        document.getElementById('cboLop').value = "<?php echo $_POST['cboLop'];?>";
                                                    </script>
                                                </div>
                                                <div class="col-sm-2">
                                                    <select class="form-control drop cboNamHoc" name="cboNamHoc" id="cboNamHoc">
                                                        <option value="" selected="selected">--Chọn năm học--</option>
                                                    </select>
                                                    <script type='text/javascript'>
                                                        document.getElementById('cboNamHoc').value = "<?php echo $_POST['cboNamHoc'];?>";
                                                    </script>
                                                </div>
                                                <div class="col-sm-2">
                                                    <select name="cboHocKy" class="form-control drop" id="cboHocKy">
                                                        <option value="" selected="selected">--Chọn học kỳ--</option>
                                                        <option value="1">Học kỳ 1</option>
                                                        <option value="2">Học kỳ 2</option>
                                                    </select>
                                                    <script type='text/javascript'>
                                                        document.getElementById('cboHocKy').value = "<?php echo $_POST['cboHocKy'];?>";
                                                    </script>
                                                </div>
                                                <div class="col-sm-2">
                                                    <select name="cboLanCham" class="form-control  drop" id="cboLanCham">
                                                        <option value="" selected="selected">--Chọn lần chấm--</option>
                                                        <option value="1">Sinh viên tự chấm</option>
                                                        <option value="2">Tập thể lớp chấm</option>
                                                    </select>
                                                    <script type='text/javascript'>
                                                        document.getElementById('cboLanCham').value = "<?php echo $_POST['cboLanCham'];?>";
                                                    </script>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input class="btn btn-primary" type="submit" name="btnTimKiem" value="Lọc dữ liệu">
                                                </div>
                                            </div>              
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                            <div id="tbsv3" style="margin-top: 20px">
                                <table class="table table-striped" style="font-size: 18px;" id="bangthongtin">
                                    <tr class="hang1">
                                        <th style="text-align: center;">STT</th>
                                        <th style="text-align: center;">Mã sinh viên</th>
                                        <th >Họ tên sinh viên</th>
                                        <th >Chức vụ</th>
                                        <th >Lớp sinh hoạt</th>
                                        <th style="text-align: center;">Điểm tổng</th>
                                        <th >Xếp loại</th>
                                        <th style="text-align: center;">Chi tiết</th>
                                    </tr>
                                    <?php
                                        if($_POST){
                                            if(isset($_POST['btnTimKiem']) and $_SERVER['REQUEST_METHOD'] == "POST"){
                                                TimKiem($cboHocKy, $cboNamHoc, $cboKhoa, $cbolop, $cboLanCham);
                                            }
                                        } 
                                    ?>
                                </table>
                                </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </form>
            
        </div>
            <div class="col-sm-1">
        </div>
    </div>
</div>

<!-- chân trang -->
<div class="jumbotron text-center" style="margin-bottom:0">

    <?php load_footer(); ?>

</div>

</body>
</html>
​
