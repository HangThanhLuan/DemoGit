<?php 
    require 'site.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Xem điểm rèn luyện sinh viên</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style/style-footer.css">
  <link rel="stylesheet" href="style/style-VanBan.css">
  <link rel="stylesheet" href="style/styleDRL.css">
  <style>
    .form-control{
        text-align: center;     
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
            <form action="" method="POST" >
                <?php
                    $MaSV = $_SESSION['Username'];
                    $NamHoc = array_key_exists('cboNamHoc', $_POST) ? $_POST['cboNamHoc'] : null;
                    $HocKy = array_key_exists('cboHocKy', $_POST) ? $_POST['cboHocKy'] : null;

                    $kn = mysqli_connect("localhost", "root", "", "sotay") or die("chưa kết nối");
                    $sql1 = "select * from sinhvien INNER JOIN lop ON sinhvien.MaLop = lop.MaLop INNER JOIN khoahoc ON lop.MaKhoaHoc = khoahoc.MaKhoaHoc where MaSinhVien='".$_SESSION['Username']."'";
                    $kq1 = mysqli_query($kn,$sql1);
                    $row = mysqli_fetch_array($kq1);

                    /*function xemdiem($NamHoc, $HocKy, $MaSV)
                    {
                        if($NamHoc == "" or $HocKy == "")
                        {
                            echo'<script>alert("Bạn cần lựa chọn thông tin năm học và học kỳ");</script>';
                        }
                        else
                        {
                            $LanCham1 = 1;
                            $LanCham2 = 2;
                            //Load điểm sv tự chấm lần 1.
                            $kn = mysqli_connect("localhost", "root", "", "du_an_cong_thong_tin_sinh_vien_khoa_cntt") or die("chưa kết nối");
                            $sql2= "select * from diem_ren_luyen where LanCham = '".$LanCham1."' and MaSinhVien='".$MaSV."' and NamHoc='".$NamHoc."' and HocKy = '".$HocKy."'";
                            $kq2 = mysqli_query($kn, $sql2) or die ("lỗi truy vấn");
                            $row1 = mysqli_fetch_array($kq2);

                            //Load điểm tập thể chấm lần 2
                            $sql3= "select * from diem_ren_luyen where LanCham = '".$LanCham2."' and MaSinhVien='".$MaSV."' and NamHoc='".$NamHoc."' and HocKy = '".$HocKy."'";
                            $kq3 = mysqli_query($kn, $sql3) or die ("lỗi truy vấn");
                            $row2 = mysqli_fetch_array($kq3);

                        }
                    }*/
                ?>
                <table id="formChung" style="width: 100%">
                    <tr>
                        <td>
                            <h3 style="text-align: center">CHI TIẾT PHIẾU ĐÁNH GIÁ KẾT QUẢ RÈN LUYỆN SINH VIÊN</h3>
                            <hr> 
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center">
                            <div style="display: flex; width: 100%">
                                <select name="cboNamHoc" id="cboNamHoc" class="form-control" style="width: 180px; margin: auto;">
                                    <option value="" selected="selected">--Chọn năm học--</option>
                                    <?php 
                                        $nam1 = ($row['NamBatDau'])."-".($row['NamBatDau'] + 1);
                                        $nam2 = ($row['NamBatDau'] + 1)."-".($row['NamBatDau'] + 2);
                                        $nam3 = ($row['NamBatDau'] + 2)."-".($row['NamBatDau'] + 3);
                                        $nam4 = ($row['NamBatDau'] + 3)."-".($row['NamBatDau'] + 4);
                                        $nam5 = ($row['NamBatDau'] + 4)."-".($row['NamBatDau'] + 5);
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
                                <select name="cboHocKy" id="cboHocKy" class="form-control" style="width: 180px; margin: auto;">
                                    <option value="" selected="selected">--Chọn học kỳ--</option>
                                    <option value="1">Học kỳ 1</option>
                                    <option value="2">Học kỳ 2</option>
                                </select>
                                <script type='text/javascript'>
                                    document.getElementById('cboHocKy').value = "<?php echo $_POST['cboHocKy'];?>";
                                </script>
                                <button class="btn btn-primary" type="submit" name="btnTim" value="btnTim" style="margin: auto;">Lọc dữ liệu</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left">
                            <table style="text-align: left; height: 250px; margin-top:20px; margin-bottom: 30px" id="formChung1" >
                                <tr>
                                    <td colspan="4" >
                                        <table >
                                            <tr>
                                                <td style="padding-right: 30px;"><h5 class="h5">Mã sinh viên:</h5></td>
                                                <td style="padding-right: 30px;"><p class="p"> <?php echo htmlspecialchars($row['MaSinhVien']) ?></p></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" >
                                        <table>
                                            <tr>
                                                <td style="padding-right: 30px;"><h5 class="h5">Họ tên sinh viên:</h5></td>
                                                <td style="padding-right: 30px;">
                                                    <p class="p"><?php echo htmlspecialchars($row['HoTen']) ?></p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <table>
                                            <tr>
                                                <td style="padding-right: 30px;"><h5 class="h5">Khóa:</h5></td>
                                                <td style="padding-right: 30px;"><p class="p"><p class="p"> <?php echo htmlspecialchars($row['MaKhoaHoc']) ?></p></td>
                                                <td><h5 class="h5">Ngành học:</h5></td>
                                                <td style="padding-left: 30px; padding-right: 30px;"><p class="p">Công nghệ thông tin</p></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <table>
                                            <tr>
                                                <td style="padding-right: 30px;"><h5 class="h5">Lớp sinh hoạt:</h5></td>
                                                <td style="padding-right: 30px;"><p class="p"><p class="p"> <?php echo htmlspecialchars($row['TenLop']) ?></p></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <table>
                                            <tr>
                                                <td style="padding-right: 30px;"><h5 class="h5">Năm học:</h5></td>
                                                <td style="padding-right: 30px;"><p class="p"><p class="p"> <?php echo htmlspecialchars($NamHoc) ?></p></td>
                                                <td><h5 class="h5">Học kỳ:</h5></td>
                                                <td style="padding-left: 30px; padding-right: 30px;"><p class="p"><?php echo htmlspecialchars($HocKy) ?></p></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <table>
                                            <tr>
                                                <td style="padding-right: 30px;"><h5 class="h5">Chức vụ (Ban đại diện lớp, đoàn, hội,...):</h5></td>
                                                <td style="padding-right: 30px;"><p class="p"><p class="p"><?php echo htmlspecialchars($row['ChucVu']) ?></p></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <br>
                    <?php
                        if($_POST)
                        {
                            if(isset($_POST['btnTim']) and $_SERVER['REQUEST_METHOD'] == "POST")
                            {
                                if($NamHoc == "" or $HocKy == "")
                                {
                                    echo'<script>alert("Bạn cần lựa chọn thông tin năm học và học kỳ");</script>';
                                    die();
                                }
                                else
                                {
                                    $LanCham1 = 1;
                                    $LanCham2 = 2;
                                    //Load điểm sv tự chấm lần 1.
                                    $kn = mysqli_connect("localhost", "root", "", "sotay") or die("chưa kết nối");
                                    $sql2= "select * from bangdiemrenluyen where LanCham = '".$LanCham1."' and MaSinhVien='".$MaSV."' and NamHoc='".$NamHoc."' and HocKy = '".$HocKy."'";
                                    $kq2 = mysqli_query($kn, $sql2) or die ("lỗi truy vấn");
                                    $row1 = mysqli_fetch_array($kq2);

                                    //Load điểm tập thể chấm lần 2
                                    $sql3= "select * from bangdiemrenluyen where LanCham = '".$LanCham2."' and MaSinhVien='".$MaSV."' and NamHoc='".$NamHoc."' and HocKy = '".$HocKy."'";
                                    $kq3 = mysqli_query($kn, $sql3) or die ("lỗi truy vấn");
                                    $row2 = mysqli_fetch_array($kq3);
                                }
                    ?>
                    <tr>
                        <td >
                            <table border="1" style="text-align: left" id="formDRL" class="table table-bordered">
                                    <tr>
                                        <td style="text-align: center"><h5>Nội dung đánh giá</h5></td>
                                        <td style="text-align: center; width: 100px"><h5>Sinh viên tự đánh giá</h5></td>
                                        <td style="text-align: center; width: 100px"><h5>Tập thể lớp đánh giá</h5></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" height=15px><b>1. Ý thức học tâp:</b></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" height=15px  title="Mục 1.1, cần ghi rõ kết quả học tập (điểm TBC học kỳ) của kỳ đang xét và kỳ trước để đối chiếu."><b>1.1. Kết quả học tâp<a href="#ghichu">(3)</a>:</b></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table border="1" style="text-align: left" id="bang1" class="table table-bordered">
                                                <tr>
                                                    <td colspan="2">Điểm trung bình học kỳ trước: <br><br>
                                                        <div style="display: flex">
                                                            <table border="1" class="table table-bordered">
                                                                <tr>
                                                                    <td style="text-align: center">Điểm sinh viên chấm</td>
                                                                    <td style="text-align: center">Điểm tập thể chấm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="justify-content: center;">
                                                                        <input style="text-align: center" class="form-control" type="text" name="txtHKtruocSV" placeholder="Điểm HK trước" value="<?php echo htmlspecialchars($row1['DTB_HKtruoc']); ?>">
                                                                    
                                                                    </td>
                                                                    <td style="justify-content: center;">
                                                                        <input style="text-align: center" class="form-control" type="text" name="txtHKtruoc" placeholder="Điểm HK trước" value="<?php echo $row2['DTB_HKtruoc']; ?>">
                                                                    </td>                        
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        
                                                    </td>
                                                    <td colspan="2">Điểm trung bình học kỳ này:  <br><br>
                                                        <div style="display: flex">
                                                            <table border="1" class="table table-bordered">
                                                                <tr>
                                                                    <td style="text-align: center">Điểm sinh viên chấm</td>
                                                                    <td style="text-align: center">Điểm tập thể chấm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input style="text-align: center" class="form-control" type="text" name="txtHKnaySV" placeholder="Điểm HK này" value="<?php echo $row1['DTB_HKnay']; ?>"></td>
                                                                    <td><input style="text-align: center" class="form-control" type="text" name="txtHKnay" placeholder="Điểm HK này" value="<?php echo $row2['DTB_HKnay']; ?>"></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">Điểm trung bình học kỳ này: </td>
                                                </tr>
                                                <tr>
                                                    <td>Dưới 4.0</td>
                                                    <td>+3đ</td>
                                                    <td>Từ 6.5 - Cận 8.0</td>
                                                    <td>+10đ</td>
                                                </tr>
                                                <tr>
                                                    <td>Từ 4.0 - Cận 5.0</td>
                                                    <td>+6đ</td>
                                                    <td>Từ 8.0 - 10</td>
                                                    <td>+12đ</td>
                                                </tr>
                                                <tr>
                                                    <td>Từ 5.0 - Cận 6.5</td>
                                                    <td>+8đ</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">Tăng ĐTB chung học kỳ so với ĐTB chung học kỳ của kỳ trước:</td>
                                                </tr>
                                                <tr>
                                                    <td>Từ 0.01– cận 0.1</td>
                                                    <td>+1đ</td>
                                                    <td>Từ 0.5 – cận 0.6</td>
                                                    <td>+6đ</td>
                                                </tr>
                                                <tr>
                                                    <td>Từ 0.1 – cận 0.2</td>
                                                    <td>+2đ</td>
                                                    <td>Từ 0.6 – cận 0.7</td>
                                                    <td>+7đ</td>
                                                </tr>
                                                <tr>
                                                    <td>Từ 0.2 – cận 0.3</td>
                                                    <td>+3đ</td>
                                                    <td>Từ 0.7 – cận 0.8</td>
                                                    <td>+8đ</td>
                                                </tr>
                                                <tr>
                                                    <td>Từ 0.3 – cận 0.4</td>
                                                    <td>+4đ</td>
                                                    <td>Từ 0.8 – cận 0.9</td>
                                                    <td>+9đ</td>
                                                </tr>
                                                <tr>
                                                    <td>Từ 0.4 – cận 0.5</td>
                                                    <td>+5đ</td>
                                                    <td>Từ 0.9 trở lên</td>
                                                    <td>+10đ</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtSVMuc1_1" value="<?php echo htmlspecialchars($row1['Muc1_1']) ?>">
                                            
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtTTMuc1_1" value="<?php echo $row2['Muc1_1']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" height=15px title="Điểm cộng được tính trên mỗi chương trình, hoạt động,... đã tham gia (Lưu ý: các chương trình, hoạt động phải được khoa, LCĐ/LCH xác nhận, và phải được ghi chi tiết tên và kết quả trong cột Ghi chú)"><b>1.2. Ý thức và kết quả tham gia các hoạt động học thuật<a href="#ghichu">(8)</a>:</b></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table border="1" style="text-align: left" id="bang2" class="table table-bordered">
                                                <tr style="text-align: center">
                                                    <td></td>
                                                    <td>Cấp tỉnh, TƯ (hoặc cấp t.đương)</td>
                                                    <td>Cấp trường (hoặc cấp t.đương)</td>
                                                    <td>Cấp khoa, liên chi Đoàn/Hội, (hoặc cấp t.đương)</td>
                                                    <td>Cấp lớp, chi đoàn (hoặc cấp t.đương)</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5">Các hoạt động NCKHSV, Olympic các môn học, các cuộc thi học thuật, khởi nghiệp,...</td>
                                                </tr>
                                                <tr style="text-align: center">
                                                    <td style="text-align: left">Giải I</td>
                                                    <td>+10đ</td>
                                                    <td>+9đ</td>
                                                    <td>+7đ</td>
                                                    <td>+5đ</td>
                                                </tr>
                                                <tr style="text-align: center">
                                                    <td style="text-align: left">Giải II</td>
                                                    <td>+9đ</td>
                                                    <td>+8đ</td>
                                                    <td>+6đ</td>
                                                    <td>+4đ</td>
                                                </tr>
                                                <tr style="text-align: center">
                                                    <td style="text-align: left">Giải III</td>
                                                    <td>+8đ</td>
                                                    <td>+7đ</td>
                                                    <td>+5đ</td>
                                                    <td>+3đ</td>
                                                </tr>
                                                <tr style="text-align: center">
                                                    <td style="text-align: left">Giải KK</td>
                                                    <td>+7đ</td>
                                                    <td>+6đ</td>
                                                    <td>+4đ</td>
                                                    <td>+2đ</td>
                                                </tr>
                                                <tr style="text-align: center">
                                                    <td  style="text-align: left" width=100px>Tham gia</td>
                                                    <td>+5đ</td>
                                                    <td>+4đ</td>
                                                    <td>+2đ</td>
                                                    <td>+1đ</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5">Hoạt động học thuật ngoại khóa (seminar, talkshow, giao lưu học thuật, hoạt động của các CLB học thuật,...)</td>
                                                </tr>
                                                <tr style="text-align: center">
                                                    <td width=100px rowspan="2">Chủ trì/tham gia chính</td>
                                                    <td>Quy mô lớn/vừa</td>
                                                    <td>+8đ</td>
                                                    <td>+6đ</td>
                                                    <td>+4đ</td>
                                                </tr>
                                                <tr style="text-align: center">
                                                    <td>Quy mô nhỏ(dưới 10 người)</td>
                                                    <td></td>
                                                    <td>+5đ</td>
                                                    <td>+3đ</td>
                                                </tr>
                                                <tr style="text-align: center">
                                                    <td style="text-align: left">Tham gia</td>
                                                    <td></td>
                                                    <td>+2đ</td>
                                                    <td>+2đ</td>
                                                    <td>+1đ</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center" colspan="5">Thành viên BTC hoàn thành tốt nhiệm vụ</td>
                                                </tr>
                                                <tr style="text-align: center">
                                                    <td></td>
                                                    <td></td>
                                                    <td>+6đ</td>
                                                    <td>+4đ</td>
                                                    <td>+2đ</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtSVMuc1_2" value="<?php echo $row1['Muc1_2']; ?>">
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtTTMuc1_2" value="<?php echo $row2['Muc1_2']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" height=15px title="Chứng chỉ được tính nếu vẫn còn giá trị hiệu lực tại học kỳ đang xét rèn luyện."><b>1.3. Tích cực học tập nâng cao trình độ ngoại ngữ<a href="#ghichu">(9)</a>:</b></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table border="1" style="text-align: left" id="bang3" class="table table-bordered">
                                                <tr>
                                                    <td>Chứng chỉ ngoại ngữ B1 (theo chuẩn đầu ra của Trường)</td>
                                                    <td>+3đ</td>
                                                </tr>
                                                <tr>
                                                    <td>IELTS, TOEFL, TOEIC, tiếng Nhật,...</td>
                                                    <td>+5đ/chứng chỉ</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtSVMuc1_3" value="<?php echo $row1['Muc1_3']; ?>">
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtTTMuc1_3" value="<?php echo $row2['Muc1_3']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" height=15px title="Điểm trừ (nếu có) ở mục 1.4, mục 2 và mục 4.1 không vượt quá (tổng) số điểm của mục tương ứng (đảm bảo tổng điểm của mỗi mục tương ứng là không âm)."><b>1.4. Chấp hành tốt các nội quy, quy định về học vụ<a href="#ghichu">(4)</a>:</b></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table border="1" style="text-align: left" id="bang4" class="table table-bordered">
                                                <tr>
                                                    <td>Chuyên cần, thực hành, thực tế, thực tập,...</td>
                                                    <td>+4đ</td>
                                                </tr>
                                                <tr>
                                                    <td>Vi phạm (nhắc nhở, khiển trách)</td>
                                                    <td>-1đ đến -3đ/lần</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtSVMuc1_4" value="<?php echo $row1['Muc1_4']; ?>">
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtTTMuc1_4" value="<?php echo $row2['Muc1_4']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" height=15px title="Điểm trừ (nếu có) ở mục 1.4, mục 2 và mục 4.1 không vượt quá (tổng) số điểm của mục tương ứng (đảm bảo tổng điểm của mỗi mục tương ứng là không âm)."><b>2. Ý thức và kết quả chấp hành nội quy, quy chế trong nhà trường<a href="#ghichu">(4)</a>:</b></td>
                                    </tr> 
                                    <tr>
                                        <td>
                                            <table border="1" style="text-align: left" id="bang5" class="table table-bordered">
                                                <tr>
                                                    <td colspan="2"><b>2.1. Chấp hành đầy đủ và không vi phạm các nội quy, quy chế về: học tập, sinh hoạt, thực hiện nếp sống văn hóa, văn minh,…</b></td>
                                                    <td>+20đ</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">Trong trường hợp có vi phạm thì điểm trên sẽ bị giảm trừ như sau:</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Không tham gia (hoặc bài thu hoạch không đạt) các buổi sinh hoạt chính trị đầu năm, đầu khóa, cuối khóa:</td>
                                                    <td>-10đ</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Vắng đại hội lớp, đoàn, hội (không có lý do chính đáng):</td>
                                                    <td>-7đ/lần</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Vắng sinh hoạt lớp, đoàn,… (không lý do chính đáng):</td>
                                                    <td>-5đ/lần</td>
                                                </tr>                  
                                                <tr>
                                                    <td rowspan="2">Đóng học phí, các loại quỹ (lớp, đoàn, hội,...):</td>
                                                    <td style="text-align: center">Đóng trễ hạn:</td>
                                                    <td>-2đ/nội dung</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center">Không đóng:</td>
                                                    <td>-5đ/nội dung</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Vi phạm quy định đồng phục, trang phục:</td>
                                                    <td> -1đ/lần</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">Các trường hợp khác do lớp, hội đồng khoa quyết định điểm trừ</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtSVMuc2_1" value="<?php echo $row1['Muc2_1']; ?>">
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtTTMuc2_1" value="<?php echo $row2['Muc2_1']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td colspan="2"><b>2.2. Chấp hành đầy đủ và không vi phạm các quy chế nội, ngoại trú:<b></td>
                                                    <td>+5đ</td>
                                            
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Trường hợp vi phạm (có báo cáo về khoa, trường):</td>
                                                    <td>-5đ/lần</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtSVMuc2_2" value="<?php echo $row1['Muc2_2']; ?>">
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtTTMuc2_2" value="<?php echo $row2['Muc2_2']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td rowspan="2" title="Người học bị kỷ luật:
                                                    mức khiển trách, khi đánh giá kết quả rèn luyện không được vượt quá loại khá.
                                                    mức cảnh cáo, khi đánh giá kết quả rèn luyện không được vượt quá loại trung bình."><b>2.3. Sinh viên vi phạm các nội quy, quy chế thi,… bị kỷ luật<a href="#ghichu">(2)</a><b></td>
                                                    <td>Mức khiển trách:</td>
                                                    <td>-15đ/lần</td>
                                                </tr>
                                                <tr>
                                                    <td>Mức cảnh cáo trở lên:</td>
                                                    <td>-20đ/lần</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtSVMuc2_3" value="<?php echo $row1['Muc2_3']; ?>">
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtTTMuc2_3" value="<?php echo $row2['Muc2_3']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><b>3. Ý thức và kết quả tham gia các hoạt động chính trị - xã hội, văn hóa, văn nghệ, thể thao, phòng chống các tệ nạn xã hội:</b></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table border="1" style="text-align: left" id="bang6" class="table table-bordered">
                                                <tr>
                                                    <td colspan="5" title="Điểm cộng được tính trên mỗi chương trình, hoạt động,... đã tham gia (Lưu ý: các chương trình, hoạt động phải được khoa, LCĐ/LCH xác nhận, và phải được ghi chi tiết tên và kết quả trong cột Ghi chú)."><b>3.1 Tham gia thi với tư cách (cá nhân) là sv của trường/khoa hoặc là thành viên của 1 đội tuyển (do lớp, khoa, LCĐ/LCH, hoặc các đơn vị trong trường thành lập); hoặc tham gia tổ chức; hoặc tham dự, cổ vũ<a href="#ghichu">(8)</a>:</b></td>
                                                </tr>
                                                <tr style="text-align: center">
                                                    <td></td>
                                                    <td>Cấp tỉnh, TƯ (hoặc cấp t.đương)</td>
                                                    <td>Cấp trường (hoặc cấp t.đương)</td>
                                                    <td>Cấp khoa, liên chi Đoàn/Hội, (hoặc cấp t.đương)</td>
                                                    <td>Cấp lớp, chi đoàn (hoặc cấp t.đương)</td>
                                                </tr>
                                                <tr style="text-align: center">
                                                    <td style="text-align: left">Giải I</td>
                                                    <td>+15đ</td>
                                                    <td>+10đ</td>
                                                    <td>+9đ</td>
                                                    <td>+5đ</td>
                                                </tr>
                                                <tr style="text-align: center">
                                                    <td style="text-align: left">Giải II</td>
                                                    <td>+14đ</td>
                                                    <td>+9đ</td>
                                                    <td>+8đ</td>
                                                    <td>+4đ</td>
                                                </tr>
                                                <tr style="text-align: center">
                                                    <td style="text-align: left">Giải III</td>
                                                    <td>+13đ</td>
                                                    <td>+8đ</td>
                                                    <td>+7đ</td>
                                                    <td>+3đ</td>
                                                </tr>
                                                <tr style="text-align: center">
                                                    <td style="text-align: left">Giải KK</td>
                                                    <td>+12đ</td>
                                                    <td>+7đ</td>
                                                    <td>+6đ</td>
                                                    <td>+2đ</td>
                                                </tr>
                                                <tr style="text-align: center">
                                                    <td style="text-align: left" width=100px>Tham gia</td>
                                                    <td>+8đ</td>
                                                    <td>+5đ</td>
                                                    <td>+4đ</td>
                                                    <td>+2đ</td>
                                                </tr>
                                                <tr style="text-align: center">
                                                    <td style="text-align: left">Cổ vũ</td>
                                                    <td>+2đ</td>
                                                    <td>+2đ</td>
                                                    <td>+2đ</td>
                                                    <td>+2đ</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center" colspan="5">Với các hoạt động không có giải thưởng    </td>
                                                </tr>
                                                <tr style="text-align: center">
                                                    <td style="text-align: left">Tham gia</td>
                                                    <td>+13</td>
                                                    <td>+8đ</td>
                                                    <td>+7đ</td>
                                                    <td>+3đ</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center" colspan="5">Thành viên BTC hoàn thành tốt nhiệm vụ</td>
                                                </tr>
                                                <tr style="text-align: center">
                                                    <td style="text-align: left">Tham gia</td>
                                                    <td>14</td>
                                                    <td>+9đ</td>
                                                    <td>+8đ</td>
                                                    <td>+5đ</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center" colspan="5">Hỗ trợ BTC hoàn thành tốt nhiệm vụ</td>
                                                </tr>
                                                <tr style="text-align: center">
                                                    <td style="text-align: left">Tham gia</td>
                                                    <td>+10</td>
                                                    <td>+7</td>
                                                    <td>+6đ</td>
                                                    <td>+3đ</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtSVMuc3_1" value="<?php echo $row1['Muc3_1']; ?>">
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtTTMuc3_1" value="<?php echo $row2['Muc3_1']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td colspan="4"><b>3.2 Tham gia các hoạt động huy động lực lượng (cấp khoa trở lên):</b></td>
                                                    <td style="text-align: center">+3/lần</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtSVMuc3_2" value="<?php echo $row1['Muc3_2']; ?>">
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtTTMuc3_2" value="<?php echo $row2['Muc3_2']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" height=15px title="Điểm trừ (nếu có) ở mục 1.4, mục 2 và mục 4.1 không vượt quá (tổng) số điểm của mục tương ứng (đảm bảo tổng điểm của mỗi mục tương ứng là không âm)."><b>4. Phẩm chất công dân và quan hệ cộng đồng<a href="#ghichu">(4)</a>:</b></td>
                                    </tr> 
                                    <tr>
                                        <td>
                                            <table border="1" style="text-align: left" id="bang7" class="table table-bordered">
                                                <tr>
                                                    <td colspan="2"><b>4.1. Chấp hành tốt và tuyên truyền các chủ trương của Đảng, chính sách, pháp luật của Nhà nước; quan hệ tốt trong lớp, trong trường, ở nơi cư trú; có lối sống lành mạnh (không sử dụng ma túy và các chất gây nghiện; không hút thuốc lá; hạn chế uống rượu, bia,...):</b></td>
                                                    <td>+15đ</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Trường hợp vi phạm bị nhắc nhở:</td>
                                                    <td>-2đ/lần</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Vi phạm bị từ khiển trách trở lên:</td>
                                                    <td>-3đ/lần</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtSVMuc4_1"  value="<?php echo $row1['Muc4_1']; ?>">
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtTTMuc4_1" value="<?php echo $row2['Muc4_1']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td colspan="3" title="Các hoạt động tình nguyện được tính là do trường/khoa/LCĐ/LCH hoặc các đơn vị tương đương tổ chức. Nếu lớp/chi đoàn/chi hội tổ chức thì cần khoa/LCĐ/LCH duyệt và chấp thuận kế hoạch."><b>4.2 Tham gia các hoạt động tình nguyện, hoạt động xã hội<a href="#ghichu">(10)</a>:</b></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Tham gia (đạt yêu cầu trở lên) chuỗi hoạt động tình nguyện có quy mô vừa/lớn (mùa hè xanh, tiếp sức mùa thi,…):</td>
                                                    <td>+7đ đến +10đ/lần</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Tham gia các hoạt động tình nguyện tại chỗ (trong ngày):</td>
                                                    <td>+3đ/lần</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Hiến máu tình nguyện (có giấy chứng nhận):</td>
                                                    <td>+5đ/lần</td>
                                                </tr>                  
                                                <tr>
                                                    <td rowspan="2" title="Dựa vào bảng đánh giá xếp loại hàng kỳ của đội xung kích khoa.">Tham gia đội xung kích của khoa<a href="#ghichu">(11)</a>:</td>
                                                    <td style="text-align: center">Hoàn thành nhiệm vụ:</td>
                                                    <td>+3đ</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center">Hoàn thành tốt/xuất sắc nhiệm vụ:</td>
                                                    <td>+5đ</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Tham gia đội xung kích trường:</td>
                                                    <td>+3đ</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtSVMuc4_2" value="<?php echo $row1['Muc4_2']; ?>">
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtTTMuc4_2" value="<?php echo $row2['Muc4_2']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table>
                                                </tr>
                                                    <td colspan="2"><b>4.3 Tham gia giữ gìn trật tự an toàn xã hội, đấu tranh bảo vệ pháp luật; chia sẻ giúp đỡ người thân; cứu giúp người khó khăn, hoạn nạn:<b></td>
                                                    <td>+3đ</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Có thành tích (được biểu dương, khen thưởng,...):</td>
                                                    <td>+10đ</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtSVMuc4_3" value="<?php echo $row1['Muc4_3']; ?>">
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtTTMuc4_3" value="<?php echo $row2['Muc4_3']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" height=15px><b>5. Ý thức và kết quả tham gia hoạt động của lớp, các đoàn thể, tổ chức khác trong trường: </b></td>
                                    </tr> 
                                    <tr>
                                        <td>
                                            <table border="1" style="text-align: left" id="bang8" class="table table-bordered">
                                                <tr>
                                                    <td colspan="3" title="Mục 5.1 tiến hành theo hình thức sv trong lớp/BCH LCĐ/BCH LCH/thành viên đội xung kích khoa bỏ phiếu đánh giá (theo thang điểm từ -2 đến +7) mức độ đóng góp của các cá nhân trong danh sách BCS lớp, BCH chi đoàn, BCH chi hội sv/BCH LCĐ/BCH LCH/đội trưởng, phó đội xung kích khoa. Sinh viên kiêm nhiệm nhiều chức vụ thì chỉ tính điểm 1 mục."><b>5.1. Ban cán sự lớp, cán bộ Đoàn (chi đoàn, LCĐ, Đoàn trường), cán bộ Hội Sinh viên (chi hội, LCH, HSV trường), đội trưởng/phó đội xung kích (khoa, trường), ban chủ nhiệm các CLB thuộc khoa<a href="#ghichu">(5)</a>:</b></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Hoàn thành nhiệm vụ (hoàn thành/tốt/xuất sắc):</td>
                                                    <td>+1đ đến +7đ</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Không hoàn thành nhiệm vụ:</td>
                                                    <td>-1đ đến -2đ</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtSVMuc5_1" value="<?php echo $row1['Muc5_1']; ?>">
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtTTMuc5_1" value="<?php echo $row2['Muc5_1']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td colspan="2" title="Mục 5.2, danh sách sẽ được đề xuất và thống nhất bởi CVHT, BCS lớp, BCH LCĐ, BCH LCH SV, BCH chi đoàn, BCH chi hội SV và các SV trong lớp. Trường hợp đặc biệt sẽ được hội đồng khoa xem xét."><b>5.2 Sinh viên là nhân tố tích cực trong các hoạt động của lớp, khoa, trường (không thuộc các đối tượng ở mục 5.1)<a href="#ghichu">(6)</a>:</b></td>
                                                    <td>+1đ đến +5đ</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtSVMuc5_2" value="<?php echo $row1['Muc5_2']; ?>">
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtTTMuc5_2" value="<?php echo $row2['Muc5_2']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table>
                                                </tr>
                                                    <td colspan="2"><b>5.3 Là thành viên của ít nhất 1 câu lạc bộ học thuật/kỹ năng của Trường Đại học Quy Nhơn:</b></td>
                                                    <td>+3đ</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtSVMuc5_3" value="<?php echo $row1['Muc5_3']; ?>">
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtTTMuc5_3" value="<?php echo $row2['Muc5_3']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" height=15px><h4>6. Sinh viên có thành tích đặc biệt:</h4></td>
                                    </tr> 
                                    <tr>
                                        <td>
                                            <table border="1" style="text-align: left" id="bang9" class="table table-bordered">
                                                <tr>
                                                    <td colspan="2">Được khen thưởng cấp khoa, LCĐ, LCH:</td>
                                                    <td>+6đ</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Được khen thưởng cấp trường/tỉnh:</td>
                                                    <td>+8đ</td>
                                                </tr> 
                                                <tr>
                                                    <td colspan="2">Được khen thưởng cấp bộ, quốc gia trở lên:</td>
                                                    <td>+10đ</td>
                                                </tr>    
                                            </table>
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtSVMuc6" value="<?php echo $row1['Muc6']; ?>">
                                        </td> 
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtTTMuc6" value="<?php echo $row2['Muc6']; ?>">
                                        </td>
                                    </tr>
                                    <tr style="text-align: center">
                                        <td ><b>Tổng điểm các mục 1+2+3+4+5+6<br></b>Nếu tổng điểm của cả 6 mục vượt quá 100 sẽ được quy về 100 điểm.</td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control" type="text" name="txtSVMucTong" value="<?php echo $row1['TongDiem']; ?>">
                                        </td>
                                        <td style="text-align: center; vertical-align: inherit;">
                                            <input class="form-control"type="text" name="txtTTMucTong" value="<?php echo $row2['TongDiem']; ?>">
                                        </td>
                                    </tr>
                                    <tr style="text-align: center">
                                        <td ><b style="font-size: 20px;">Xếp loại rèn luyện<br></b></td>
                                        <td style="font-size: 25px;">
                                            
                                        </td>
                                        <td style="font-size: 25px;">
                                            
                                        </td>
                                    </tr>
                            </table>                     
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;" colspan="3"><h4>Nội dung ghi chú điểm từng phần</h4></td>
                    </tr>
                    <tr>
                        <td>
                            <table border="1" style="margin: auto;" class="table table-bordered">
                                <tr>
                                    <td width=850px><?php echo $row1['GhiChu']; ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center">
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table border="1" style="text-align: left" id="bang10" class="table table-bordered">
                                <tr>
                                    <td colspan="3" style="text-align: center;"><h2><a id="ghichu">GHI CHÚ</a></h2></td>
                                </tr>
                                <tr>
                                    <td colspan="3">(1) Cột Ghi chú ghi cụ thể nội dung của cộng/trừ điểm tương ứng. </td>
                                </tr>
                                <tr>
                                    <td rowspan="2">(2) Người học bị kỷ luật:</td>
                                    <td >mức <b>khiển trách</b>, khi đánh giá kết quả rèn luyện không được vượt quá loại <b>khá</b>.</td>
                                </tr>
                                <tr>
                                    <td>mức <b>cảnh cáo</b>, khi đánh giá kết quả rèn luyện không được vượt quá loại <b>trung bình</b>.</td>
                                </tr>
                                <tr>
                                    <td colspan="3">(3) Mục 1.1, cần ghi rõ kết quả học tập (điểm TBC học kỳ) của kỳ đang xét và kỳ trước để đối chiếu.</td>
                                </tr>
                                <tr>
                                    <td colspan="3">(4) Điểm trừ (nếu có) ở mục 1.4, mục 2 và mục 4.1 không vượt quá (tổng) số điểm của mục tương ứng (đảm bảo tổng điểm của mỗi mục tương ứng là không âm).</td>
                                </tr>
                                <tr>
                                    <td colspan="3">(5) Mục 5.1 tiến hành theo hình thức sv trong lớp/BCH LCĐ/BCH LCH/thành viên đội xung kích khoa <b>bỏ phiếu</b> đánh giá (theo thang điểm từ -2 đến +7) mức độ đóng góp của các cá nhân trong danh sách BCS lớp, BCH chi đoàn, BCH chi hội sv/BCH LCĐ/BCH LCH/đội trưởng, phó đội xung kích khoa. Sinh viên kiêm nhiệm nhiều chức vụ thì chỉ tính điểm 1 mục.</td>
                                </tr>
                                <tr>
                                    <td colspan="3">(6) Mục 5.2, danh sách sẽ được <b>đề xuất</b> và <b>thống nhất</b> bởi CVHT, BCS lớp, BCH LCĐ, BCH LCH SV, BCH chi đoàn, BCH chi hội SV và các SV trong lớp. Trường hợp đặc biệt sẽ được hội đồng khoa xem xét.</td>
                                </tr>
                                <tr>
                                    <td colspan="3">(7) Người học bị xếp loại rèn luyện Yếu, Kém trong 2 học kỳ liên tiếp thì phải <b>tạm ngừng</b> học ít nhất 1 học kỳ ở học kỳ tiếp theo và bị xếp loại Yếu, Kém 2 học kỳ liên tiếp lần thứ 2 thì sẽ bị buộc <b>thôi học</b>.</td>
                                </tr>
                                <tr>
                                    <td colspan="3">(8) Điểm cộng được tính trên mỗi chương trình, hoạt động,... đã tham gia (Lưu ý: các chương trình, hoạt động phải được khoa, LCĐ/LCH xác nhận, và phải được ghi chi tiết tên và kết quả trong Ô ghi chú)</td>
                                </tr>
                                <tr>
                                    <td colspan="3">(9) Chứng chỉ được tính nếu vẫn còn giá trị hiệu lực tại học kỳ đang xét rèn luyện.</td>
                                </tr>
                                <tr>
                                    <td colspan="3">(10) Các hoạt động tình nguyện được tính là do trường/khoa/LCĐ/LCH hoặc các đơn vị tương đương tổ chức. Nếu lớp/chi đoàn/chi hội tổ chức thì cần khoa/LCĐ/LCH duyệt và chấp thuận kế hoạch.</td>
                                </tr>
                                <tr>
                                    <td colspan="3">(11) Dựa vào bảng đánh giá xếp loại hàng kỳ của đội xung kích khoa.</td>
                                </tr>
                                <tr>
                                    <td colspan="3">(12) Các trường hợp đặc biệt sẽ do Hội đồng khoa quyết định.</td>
                                </tr>
                                <tr>
                                    <td colspan="3">(13) Quy mô tổ chức phải đạt ít nhất từ 25% thành viên lớp tham gia.</td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <table border="1" style="text-align: left; width: 700px;" id="bang11" class="table table-bordered">
                                            <tr>
                                                <td style="text-align: center" colspan="2">(14) <b style="text-align: center"> Phân loại kết quả rèn luyện</b></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    90 ≤ Tổng điểm	            : Xuất sắc<br>
                                                    80 ≤ Tổng điểm < 90 điểm	: Tốt<br>
                                                    65 ≤ Tổng điểm < 80 điểm	: Khá
                                                </td>
                                                <td>
                                                    50 ≤ Tổng điểm < 65 điểm	: Trung bình<br>
                                                    35 ≤ Tổng điểm < 50 điểm	: Yếu<br>
                                                    35 < Tổng điểm	: Kém</td>   
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr> 
                <?php 
                    }
                }
                ?>   
                </table> 
                
                <br><br>
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
