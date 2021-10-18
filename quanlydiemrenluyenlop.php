<?php 
    require 'site.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quản lý điểm rèn luyện lớp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style/style-footer.css">
  <link rel="stylesheet" href="style/style-VanBan.css">
</head>

<body>

<!-- top đầu trang -->
<div class="jumbotron text-center" style="margin-bottom:0;  padding: 20px;">

    <?php load_top(); ?>

</div>

<!-- menu của trang / menu user 1 -->
<?php load_menu_user_1(); ?>

<?php
    $kn = mysqli_connect("localhost", "root", "", "sotay") or die("chưa kết nối");
    $sql = "select * from sinhvien INNER JOIN lop ON sinhvien.MaLop = lop.MaLop INNER JOIN khoahoc ON lop.MaKhoaHoc = khoahoc.MaKhoaHoc where MaSinhVien='".$_SESSION['Username']."'";
    $kq = mysqli_query($kn,$sql);
    $thuchienkq = mysqli_fetch_array($kq);

    $MaLop = $thuchienkq['MaLop'];
    $MaKhoaHoc = $thuchienkq['MaKhoaHoc'];

    $cboNamHoc = array_key_exists('cboNamHoc', $_POST) ? $_POST['cboNamHoc'] : null;
    $cboHocKy = array_key_exists('cboHocKy', $_POST) ? $_POST['cboHocKy'] : null;
    $cboLanCham = array_key_exists('cboLanCham', $_POST) ? $_POST['cboLanCham'] : null;
    $cbolop = $thuchienkq['MaLop'];
    $cboKhoa = $thuchienkq['MaKhoaHoc'];

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
        if($cboHocKy == "" or $cboNamHoc == "" or $cboLanCham == "")
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
                $maSV = $row10['MaSinhVien'];
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
                    <td class='cot' style='text-align: center;'>".$row10['NamHoc']."</td>
                    <td class='cot' style='text-align: center;'>".$row10['HocKy']."</td>
                    <td class='cot' style='text-align: center;'>".$row10['MaSinhVien']."</td>
                    <td class='cot' >".$row10['HoTen']."</td>
                    <td class='cot' >".$row10['ChucVu']."</td>
                    <td class='cot' style='text-align: center;'>".$row10['TongDiem']."</td>
                    <td class='cot' >".$xeploai."</td>
                    <td class='cot'><a target='_blank' href='ChiTietDiemRL.php?masv=$maSV&namhoc=$NamHoc&hocky=$HocKy'>Chi tiết</a></td>
                </tr>";
            }  
        }  
    }

    function soLuong($cboHocKy, $cboNamHoc, $cboKhoa, $cbolop, $cboLanCham)
    {
        if($cboHocKy == "" or $cboNamHoc == "" or $cboLanCham == "")
        {
            echo '<script>alert("Bạn cần chọn thông tin tìm kiếm");</script> ';
        }
        else
        {
            
            $kn = mysqli_connect("localhost", "root", "", "sotay") or die ("chưa kết nối");
            $sql1 = "select count(sinhvien.MaSinhVien) as soLuong from bangdiemrenluyen 
                    INNER JOIN sinhvien ON sinhvien.MaSinhVien = bangdiemrenluyen.MaSinhVien 
                    INNER JOIN lop ON sinhvien.MaLop = lop.MaLop 
                    INNER JOIN khoahoc ON khoahoc.MaKhoaHoc = lop.MaKhoaHoc 
                    where khoahoc.MaKhoaHoc ='".$cboKhoa."' and lop.MaLop = '".$cbolop."' and bangdiemrenluyen.LanCham = '$cboLanCham' 
                        and bangdiemrenluyen.NamHoc='".$cboNamHoc."' and bangdiemrenluyen.HocKy = '".$cboHocKy."'";
            $kq1 = mysqli_query($kn, $sql1);
            $row11 = mysqli_fetch_array($kq1);

            $sql2 = "select count(sinhvien.MaSinhVien) as soLuongSVLop from sinhvien
                    INNER JOIN lop ON sinhvien.MaLop = lop.MaLop 
                    INNER JOIN khoahoc ON khoahoc.MaKhoaHoc = lop.MaKhoaHoc 
                    where khoahoc.MaKhoaHoc ='".$cboKhoa."' and lop.MaLop = '".$cbolop."'";
            $kq2 = mysqli_query($kn, $sql2);
            $row12 = mysqli_fetch_array($kq2);

            if($cboLanCham == 1)
            {
                echo "Số lượng SV đã gửi bảng điểm / Tổng SV => ". $row11['soLuong'] ." / ". $row12['soLuongSVLop'];
            }
            if($cboLanCham == 2)
            {
                echo "Số lượng SV đã chấm điểm / Tổng SV => ". $row11['soLuong'] ." / ". $row12['soLuongSVLop'];
            }
        }  
    }

?>

<!-- thân của trang -->
<div class="container-fluid" style="margin-top:30px;">
    <div class="row">
        <div class="col-sm-1"></div>

        <div class="col-sm-10">

        <form action="" method="POST" >
            <div class="home">
                <div>
                        <div class="container-ad-items">
                        <div class="containner-ad-text">
                            <h3 style="display: flex; justify-content: center; text-align: center">QUẢN LÝ ĐIỂM RÈN LUYỆN SINH VIÊN</h3>
                            <h4 style="display: flex; justify-content: center; text-align: center">LỚP: <?php echo htmlspecialchars($thuchienkq['TenLop']) ?></h4>
                            <hr> 
                        </div>
                            <div class="HDsearch">
                                <table style="font-size:20px; margin: auto; width: 100%">
                                    <tr>
                                        <td style="text-align: left">
                                            <div class="row" style="justify-content: center; text-align: center;">
                                                <div class="col-sm-2"></div>
                                                <div class="col-sm-2" style="margin: 10px 0;">
                                                    <select class="form-control cboNamHoc" name="cboNamHoc" id="cboNamHoc">
                                                        <option value="" selected="selected">--Chọn năm học--</option>
                                                        <?php 
                                                            $nam1 = ($thuchienkq['NamBatDau'])."-".($thuchienkq['NamBatDau'] + 1);
                                                            $nam2 = ($thuchienkq['NamBatDau'] + 1)."-".($thuchienkq['NamBatDau'] + 2);
                                                            $nam3 = ($thuchienkq['NamBatDau'] + 2)."-".($thuchienkq['NamBatDau'] + 3);
                                                            $nam4 = ($thuchienkq['NamBatDau'] + 3)."-".($thuchienkq['NamBatDau'] + 4);
                                                            $nam5 = ($thuchienkq['NamBatDau'] + 4)."-".($thuchienkq['NamBatDau'] + 5);
                                                            echo "<option value='$nam1'>$nam1</option>";
                                                            echo "<option value='$nam2'>$nam2</option>";
                                                            echo "<option value='$nam3'>$nam3</option>";
                                                            echo "<option value='$nam4'>$nam4</option>";
                                                            echo "<option value='$nam5'>$nam5</option>";
                                                        ?>
                                                    </select>
                                                    <script type='text/javascript'>
                                                        document.getElementById('cboNamHoc').value = "<?php echo $_POST['cboNamHoc'];?>";
                                                    </script>
                                                </div>
                                                <div class="col-sm-2" style="margin: 10px 0;">
                                                    <select name="cboHocKy" class="form-control" id="cboHocKy">
                                                        <option value="">--Chọn học kỳ--</option>
                                                        <option value="1">Học kỳ 1</option>
                                                        <option value="2">Học kỳ 2</option>
                                                    </select>
                                                    <script type='text/javascript'>
                                                        document.getElementById('cboHocKy').value = "<?php echo $_POST['cboHocKy'];?>";
                                                    </script>
                                                </div>
                                                <div class="col-sm-2" style="margin: 10px 0;">
                                                    <select name="cboLanCham" class="form-control" id="cboLanCham">
                                                        <option value="">--Chọn lần chấm--</option>
                                                        <option value="1">Sinh viên tự chấm</option>
                                                        <option value="2">Tập thể lớp chấm</option>
                                                    </select>
                                                    <script type='text/javascript'>
                                                        document.getElementById('cboLanCham').value = "<?php echo $_POST['cboLanCham'];?>";
                                                    </script>
                                                </div>
                                                <div class="col-sm-2"style="margin: 10px 0;">
                                                    <input class="btn btn-primary" type="submit" name="btnTimKiem" value="Lọc dữ liệu">
                                                </div>
                                                <div class="col-sm-2"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">
                                            <div style="margin-top: 15px; margin-bottom: 15px;">
                                                <?php
                                                    if($_POST){
                                                        if(isset($_POST['btnTimKiem']) and $_SERVER['REQUEST_METHOD'] == "POST"){
                                                            soLuong($cboHocKy, $cboNamHoc, $cboKhoa, $cbolop, $cboLanCham);
                                                            echo"<br>Năm học: ". $cboNamHoc ." <-> Học kỳ: ". $cboHocKy;
                                                        }
                                                    } 
                                                ?>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <a style="font-size: 18px;" target='_blank' href="taodiemRLSVLop.php?malop=<?php echo $MaLop ?>&makhoahoc=<?php echo $MaKhoaHoc ?>"><+> Thêm bảng điểm cho sinh viên</a>

                                <div id="tbsv3" class="table-responsive"  style = "margin: 15px 0" >
                                    <table class="table table-hover table-striped table-responsive-xl" id="bangthongtin">
                                        <tr class="hang1">
                                            <th style="text-align: center;">STT</th>
                                            <th style="text-align: center;">Năm học</th>
                                            <th style="text-align: center;">Học kỳ</th>
                                            <th style="text-align: center;">Mã sinh viên</th>
                                            <th style="text-align: center;">Họ tên sinh viên</th>
                                            <th style="text-align: center;">Chức vụ</th>
                                            <th style="text-align: center;">Điểm tổng</th>
                                            <th style="text-align: center;">Xếp loại</th>
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
                            <br>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </form>

        </div>
        <div class="col-sm-1"></div>
    </div>
</div>

<!-- chân trang -->
<div class="jumbotron text-center" style="margin-bottom:0">

    <?php load_footer(); ?>

</div>
</body>
</html>
​
