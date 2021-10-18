<?php 
    require 'site.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chấm điểm rèn luyện sinh viên</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style/style-footer.css">
  <link rel="stylesheet" href="style/style-VanBan.css">
  <link rel="stylesheet" href="style/styleDRL.css">
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

        <div class="col-sm-10">
            <?php
                $kn = mysqli_connect("localhost", "root", "", "sotay") or die("chưa kết nối");
                $sql1 = "select * from sinhvien INNER JOIN lop ON sinhvien.MaLop = lop.MaLop INNER JOIN khoahoc ON lop.MaKhoaHoc = khoahoc.MaKhoaHoc where MaSinhVien='".$_SESSION['Username']."'";
                $kq1 = mysqli_query($kn,$sql1);
                $row = mysqli_fetch_array($kq1);

                $HoTen = $row['HoTen'];
                $MaSV = $row['MaSinhVien'];
            ?>
        <h2 style="text-align: center">PHIẾU ĐÁNH GIÁ KẾT QUẢ RÈN LUYỆN SINH VIÊN</h2>
        <hr>
        <?php 
            $today = date("Y-m-d");
            $today_time = strtotime($today);

            $kn = mysqli_connect("localhost", "root", "", "sotay") or die ("Chưa kết nối");
            $loadRenLuyen = "select * from dangkydiemrenluyen where NgayBatDau <= '".$today."' and NgayKetThuc >= '".$today."'";
            $kqLoadRenLuyen = mysqli_query($kn, $loadRenLuyen) or die("Lỗi truy vấn");
            $kq4 = mysqli_fetch_array($kqLoadRenLuyen);

            if(!$kq4)
            {
                echo "<script>alert('Chưa đến thời hạn chấm điểm rèn luyện');</script>";
            }
            else
            {
                $HocKy = $kq4['HocKy'];
                $NamHoc = $kq4['NamHoc'];
        ?>
        <form action="" method="POST" class="container-items was-validated">
            <table id="formChung" >
                <tr>
                    <td >
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <table style="justify-content: center; display: flex; margin-bottom: 10px;" class="table-sm table-responsive" >
                            <tr>
                                <td style="padding-right: 10px;"><h5 class="h5">Năm học:</h5></td>
                                <td style="padding-left: 10px; padding-right: 10px;">
                                    <p class="p">
                                        <?php echo htmlspecialchars($NamHoc); ?>
                                    </p>
                                </td>
                                <td style="padding-left: 10px; padding-right: 10px;"><h5 class="h5">Học kỳ:</h5></td>
                                <td style="padding-left: 10px; padding-right: 10px;"> 
                                    <p class="p">
                                        <?php 
                                            echo htmlspecialchars($HocKy);
                                        ?>
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td>
                        <table style="justify-content: center; display: flex; margin-bottom: 10px" class="table-sm table-responsive" >
                            <tr>
                                <td style="padding-right: 10px;"><h5 class="h5">Ngày bắt đầu:</h5></td>
                                <td style="padding-left: 10px; padding-right: 10px;">
                                    <p class="p">
                                        <?php 
                                            echo htmlspecialchars($kq4['NgayBatDau']);
                                        ?>
                                    </p>
                                </td>
                                <td style="padding-left: 10px; padding-right: 10px;"><h5 class="h5">Ngày kết thúc:</h5></td>
                                <td style="padding-left: 10px; padding-right: 10px;">
                                    <p class="p">
                                        <?php 
                                            echo htmlspecialchars($kq4['NgayKetThuc']);
                                        
                                        ?>
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td>
                        <table style="justify-content: center; display: flex; margin-bottom: 10px" class="table-sm table-responsive" >
                            <tr>
                                <td>---------------/*\---------------</td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td >
                        <table style="text-align: left; margin-bottom: 20px" id="formChung1" class="table-sm table-responsive" >
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
                                            <td><h5 class="h5">Lớp sinh hoạt:</h5></td>
                                            <td style="padding-left: 30px;"><p class="p"> <?php echo htmlspecialchars($row['TenLop']) ?></p></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <table>
                                        <tr>
                                            <td><h5 class="h5">Chức vụ (Ban đại diện lớp, đoàn, hội,...):</h5></td>
                                            <td style="padding-left: 30px; padding-right: 30px;"><p class="p"><?php echo htmlspecialchars($row['ChucVu']) ?></p></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <br>
                
                <tr>
                    <td>
                        <table border="1"  style="text-align: left" id="formDRL" class="table-sm table-responsive" >
                            <tr>
                                <td style="text-align: center" ><h5>Nội dung đánh giá</h5></td>
                                <td style="text-align: center" width="150px"><h5>Sinh viên tự đánh giá</h5></td>
                            </tr>
                            <tr>
                                <td colspan="2" height=15px><b>1. Ý thức học tâp:</b></td>
                            </tr>
                            <tr>
                                <td colspan="2" height=15px  title="Mục 1.1, cần ghi rõ kết quả học tập (điểm TBC học kỳ) của kỳ đang xét và kỳ trước để đối chiếu."><b>1.1. Kết quả học tâp<a href="#ghichu">(3)</b>:</h4></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <table border="1" style="text-align: left; width: 100%" id="bang1">
                                        <tr>
                                            <td colspan="2">Điểm trung bình học kỳ trước: 
                                                <div class="form-group">
                                                    <input style="text-align: center"  class="form-control" type="text" name="txtHKtruoc" placeholder="Điểm HK trước" id="txtHKtruoc" onkeyup="tinhtong()" required>
                                                    <div class="valid-feedback">Hợp lệ.</div>
                                                    <div class="invalid-feedback">Không bỏ trống.</div>
                                                </div>
                                            </td>
                                            <td colspan="2">Điểm trung bình học kỳ này: 
                                                <div class="form-group">
                                                    <input style="text-align: center" class="form-control" type="text" name="txtHKnay" placeholder="Điểm HK này" id="txtHKnay" onkeyup="tinhtong()" required>
                                                    <div class="valid-feedback">Hợp lệ.</div>
                                                    <div class="invalid-feedback">Không bỏ trống.</div>
                                                </div>
                                            </td>
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
                            </tr>
                            <tr>
                                <td colspan="2" height=15px title="Điểm cộng được tính trên mỗi chương trình, hoạt động,... đã tham gia (Lưu ý: các chương trình, hoạt động phải được khoa, LCĐ/LCH xác nhận, và phải được ghi chi tiết tên và kết quả trong cột Ghi chú)"><b>1.2. Ý thức và kết quả tham gia các hoạt động học thuật<a href="#ghichu">(8)</a>:</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="1" style="text-align: left" id="bang2">
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
                                <td>
                                    <div class="form-group">
                                        <input style="text-align: center" class="form-control" type="text" name="txtSVMuc1_2" placeholder="Mục 1.2" id="txtSVMuc1_2" onkeyup="tinhtong()" required>
                                        <div class="valid-feedback">Hợp lệ.</div>
                                        <div class="invalid-feedback">Không bỏ trống.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" height=15px title="Chứng chỉ được tính nếu vẫn còn giá trị hiệu lực tại học kỳ đang xét rèn luyện."><b>1.3. Tích cực học tập nâng cao trình độ ngoại ngữ<a href="#ghichu">(9)</a>:</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="1" style="text-align: left; width: 100%" id="bang3">
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
                                <td>
                                    <div class="form-group">
                                        <input style="text-align: center" class="form-control" type="text" name="txtSVMuc1_3" placeholder="Mục 1.3" id="txtSVMuc1_3" onkeyup="tinhtong()" required>
                                        <div class="valid-feedback">Hợp lệ.</div>
                                        <div class="invalid-feedback">Không bỏ trống.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" height=15px title="Điểm trừ (nếu có) ở mục 1.4, mục 2 và mục 4.1 không vượt quá (tổng) số điểm của mục tương ứng (đảm bảo tổng điểm của mỗi mục tương ứng là không âm)."><b>1.4. Chấp hành tốt các nội quy, quy định về học vụ<a href="#ghichu">(4)</a>:</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="1" style="text-align: left; width: 100%" id="bang4">
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
                                <td>
                                    <div class="form-group">
                                        <input style="text-align: center" class="form-control" type="text" name="txtSVMuc1_4" placeholder="Mục 1.4" id="txtSVMuc1_4" onkeyup="tinhtong()" required>
                                        <div class="valid-feedback">Hợp lệ.</div>
                                        <div class="invalid-feedback">Không bỏ trống.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" height=15px title="Điểm trừ (nếu có) ở mục 1.4, mục 2 và mục 4.1 không vượt quá (tổng) số điểm của mục tương ứng (đảm bảo tổng điểm của mỗi mục tương ứng là không âm)."><b>2. Ý thức và kết quả chấp hành nội quy, quy chế trong nhà trường<a href="#ghichu">(4)</a>:</b></td>
                            </tr> 
                            <tr>
                                <td>
                                    <table border="1" style="text-align: left; width: 100%" id="bang5">
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
                                <td>
                                    <div class="form-group">
                                        <input style="text-align: center" class="form-control" type="text" name="txtSVMuc2_1" placeholder="Mục 2.1" id="txtSVMuc2_1" onkeyup="tinhtong()" required>
                                        <div class="valid-feedback">Hợp lệ.</div>
                                        <div class="invalid-feedback">Không bỏ trống.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="1" style="text-align: left; width: 100%" id="bang5">
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
                                <td>
                                    <div class="form-group">
                                        <input style="text-align: center" class="form-control" type="text" name="txtSVMuc2_2" placeholder="Mục 2.2" id="txtSVMuc2_2" onkeyup="tinhtong()" required>
                                        <div class="valid-feedback">Hợp lệ.</div>
                                        <div class="invalid-feedback">Không bỏ trống.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="1" style="text-align: left; width: 100%" id="bang5">
                                        <tr>
                                            <td rowspan="2" title="Người học bị kỷ luật: mức khiển trách, khi đánh giá kết quả rèn luyện không được vượt quá loại khá. mức cảnh cáo, khi đánh giá kết quả rèn luyện không được vượt quá loại trung bình."><b>2.3. Sinh viên vi phạm các nội quy, quy chế thi,… bị kỷ luật<a href="#ghichu">(2)</a><b></td>
                                            <td>Mức khiển trách:</td>
                                            <td>-15đ/lần</td>
                                        </tr>
                                        <tr>
                                            <td>Mức cảnh cáo trở lên:</td>
                                            <td>-20đ/lần</td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input style="text-align: center" class="form-control" type="text" name="txtSVMuc2_3" placeholder="Mục 2.3" id="txtSVMuc2_3" onkeyup="tinhtong()" required>
                                        <div class="valid-feedback">Hợp lệ.</div>
                                        <div class="invalid-feedback">Không bỏ trống.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>3. Ý thức và kết quả tham gia các hoạt động chính trị - xã hội, văn hóa, văn nghệ, thể thao, phòng chống các tệ nạn xã hội:</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="1" style="text-align: left" id="bang6">
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
                                <td>
                                    <div class="form-group">
                                        <input style="text-align: center" class="form-control" type="text" name="txtSVMuc3_1" placeholder="Mục 3.1" id="txtSVMuc3_1" onkeyup="tinhtong()" required>
                                        <div class="valid-feedback">Hợp lệ.</div>
                                        <div class="invalid-feedback">Không bỏ trống.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="1" style="text-align: left; width: 100%" id="bang6">
                                        <tr>
                                             <td colspan="4"><b>3.2 Tham gia các hoạt động huy động lực lượng (cấp khoa trở lên):</b></td>
                                             <td style="text-align: center">+3/lần</td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input style="text-align: center" class="form-control" type="text" name="txtSVMuc3_2" placeholder="Mục 3.2" id="txtSVMuc3_2" onkeyup="tinhtong()" required>
                                        <div class="valid-feedback">Hợp lệ.</div>
                                        <div class="invalid-feedback">Không bỏ trống.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" height=15px title="Điểm trừ (nếu có) ở mục 1.4, mục 2 và mục 4.1 không vượt quá (tổng) số điểm của mục tương ứng (đảm bảo tổng điểm của mỗi mục tương ứng là không âm)."><b>4. Phẩm chất công dân và quan hệ cộng đồng<a href="#ghichu">(4)</a>:</b></td>
                            </tr> 
                            <tr>
                                <td>
                                    <table border="1" style="text-align: left" id="bang7">
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
                                <td>
                                    <div class="form-group">
                                        <input style="text-align: center" class="form-control" type="text" name="txtSVMuc4_1" placeholder="Mục 4.1" id="txtSVMuc4_1" onkeyup="tinhtong()" required>
                                        <div class="valid-feedback">Hợp lệ.</div>
                                        <div class="invalid-feedback">Không bỏ trống.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="1" style="text-align: left" id="bang7">
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
                                <td>
                                    <div class="form-group">
                                        <input style="text-align: center" class="form-control" type="text" name="txtSVMuc4_2" placeholder="Mục 4.2" id="txtSVMuc4_2" onkeyup="tinhtong()" required>
                                        <div class="valid-feedback">Hợp lệ.</div>
                                        <div class="invalid-feedback">Không bỏ trống.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="1" style="text-align: left" id="bang7">
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
                                <td>
                                    <div class="form-group">
                                        <input style="text-align: center" class="form-control" type="text" name="txtSVMuc4_3" placeholder="Mục 4.3" id="txtSVMuc4_3" onkeyup="tinhtong()" required>
                                        <div class="valid-feedback">Hợp lệ.</div>
                                        <div class="invalid-feedback">Không bỏ trống.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" height=15px><b>5. Ý thức và kết quả tham gia hoạt động của lớp, các đoàn thể, tổ chức khác trong trường: </b></td>
                            </tr> 
                            <tr>
                                <td>
                                    <table border="1" style="text-align: left" id="bang8">
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
                                <td>
                                    <div class="form-group">
                                        <input style="text-align: center" class="form-control" type="text" name="txtSVMuc5_1" placeholder="Mục 5.1" id="txtSVMuc5_1" onkeyup="tinhtong()" required>
                                        <div class="valid-feedback">Hợp lệ.</div>
                                        <div class="invalid-feedback">Không bỏ trống.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="1" style="text-align: left" id="bang8">
                                        <tr>
                                            <td colspan="2" title="Mục 5.2, danh sách sẽ được đề xuất và thống nhất bởi CVHT, BCS lớp, BCH LCĐ, BCH LCH SV, BCH chi đoàn, BCH chi hội SV và các SV trong lớp. Trường hợp đặc biệt sẽ được hội đồng khoa xem xét."><b>5.2 Sinh viên là nhân tố tích cực trong các hoạt động của lớp, khoa, trường (không thuộc các đối tượng ở mục 5.1)<a href="#ghichu">(6)</a>:</b></td>
                                            <td>+1đ đến +5đ</td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input style="text-align: center" class="form-control" type="text" name="txtSVMuc5_2" placeholder="Mục 5.2" id="txtSVMuc5_2" onkeyup="tinhtong()" required>
                                        <div class="valid-feedback">Hợp lệ.</div>
                                        <div class="invalid-feedback">Không bỏ trống.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="1" style="text-align: left" id="bang8">
                                        </tr>
                                            <td colspan="2"><b>5.3 Là thành viên của ít nhất 1 câu lạc bộ học thuật/kỹ năng của Trường Đại học Quy Nhơn:</b></td>
                                            <td>+3đ</td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input style="text-align: center" class="form-control" type="text" name="txtSVMuc5_3" placeholder="Mục 5.3" id="txtSVMuc5_3" onkeyup="tinhtong()" required>
                                        <div class="valid-feedback">Hợp lệ.</div>
                                        <div class="invalid-feedback">Không bỏ trống.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" height=15px><b>6. Sinh viên có thành tích đặc biệt:</b></td>
                            </tr> 
                            <tr>
                                <td>
                                    <table border="1" style="text-align: left; width: 100%" id="bang9">
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
                                <td>
                                    <div class="form-group">
                                        <input style="text-align: center" class="form-control" type="text" name="txtSVMuc6" placeholder="Mục 6" id="txtSVMuc6" onkeyup="tinhtong()" required>
                                        <div class="valid-feedback">Hợp lệ.</div>
                                        <div class="invalid-feedback">Không bỏ trống.</div>
                                    </div>
                                </td> 
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table border="1" style="text-align: left; width: 100%; margin-top: 30px; margin-bottom: 20px; height: 50px" id="bang9">
                            <tr>
                                <td style="text-align: center">Tổng điểm</td>
                                <td style="text-align: center"><b><div id="kq">Kết quả</div></b></td>
                                <td style="text-align: center">Xếp loại rèn luyện</td>
                                <td style="text-align: center"><b><div id="xl">Xếp loại</div></b></td>
                            </tr>  
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;" colspan="3"><h4 style="margin-top: 15px; margin-bottom: 15px">Nội dung ghi chú điểm từng phần</h4></td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <textarea class="form-control" name="txtGhiChu" rows="10" cols="100" placeholder="Nhập nội dung ghi chú điểm từng phần" required></textarea>
                            <div class="valid-feedback">Hợp lệ.</div>
                            <div class="invalid-feedback">Không bỏ trống.</div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">
                        <br>
                        <button class="btn btn-primary btn-block" name="submit" value="submit">
                            <span> Gửi thông tin </span>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <br>
                        <table border="1" style="text-align: left" id="bang10">
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
                        </table>
                        <tr colspan="3" >
                            <td >
                                <br>
                                <table border="1" style="text-align: left; margin-bottom: 50px;" width=600px id="bang11">
                                    <tr>
                                        <td style="text-align: center" colspan="2">(14) <b style="text-align: center"> Phân loại kết quả rèn luyện</b></td>
                                    </tr>
                                    <tr>
                                        <td>
                                        90 ≤ Tổng điểm	            : xuất sắc<br>
                                        80 ≤ Tổng điểm < 90 điểm	: tốt<br>
                                        65 ≤ Tổng điểm < 80 điểm	: khá
                                        </td>
                                        <td>
                                        50 ≤ Tổng điểm < 65 điểm	: TB<br>
                                        35 ≤ Tổng điểm < 50 điểm	: yếu<br>
                                        35 < Tổng điểm	: kém</td>   
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </td>
                </tr>   
            </table>
        </form> 
        <?php } ?> 
        </div>

        <div class="col-sm-1"></div>
    </div>
</div>

<!-- chân trang -->
<div class="jumbotron text-center" style="margin-bottom:0">

    <?php load_footer(); ?>

</div>
</body>

<?php 
    $txtSVMuc1_2 = array_key_exists('txtSVMuc1_2', $_POST) ? $_POST['txtSVMuc1_2']: null;
    $txtSVMuc1_3 = array_key_exists('txtSVMuc1_3', $_POST) ? $_POST['txtSVMuc1_3']: null;
    $txtSVMuc1_4 = array_key_exists('txtSVMuc1_4', $_POST) ? $_POST['txtSVMuc1_4']: null;
    $txtSVMuc2_1 = array_key_exists('txtSVMuc2_1', $_POST) ? $_POST['txtSVMuc2_1']: null;
    $txtSVMuc2_2 = array_key_exists('txtSVMuc2_2', $_POST) ? $_POST['txtSVMuc2_2']: null;
    $txtSVMuc2_3 = array_key_exists('txtSVMuc2_3', $_POST) ? $_POST['txtSVMuc2_3']: null;
    $txtSVMuc3_1 = array_key_exists('txtSVMuc3_1', $_POST) ? $_POST['txtSVMuc3_1']: null;
    $txtSVMuc3_2 = array_key_exists('txtSVMuc3_2', $_POST) ? $_POST['txtSVMuc3_2']: null;
    $txtSVMuc4_1 = array_key_exists('txtSVMuc4_1', $_POST) ? $_POST['txtSVMuc4_1']: null;
    $txtSVMuc4_2 = array_key_exists('txtSVMuc4_2', $_POST) ? $_POST['txtSVMuc4_2']: null;
    $txtSVMuc4_3 = array_key_exists('txtSVMuc4_3', $_POST) ? $_POST['txtSVMuc4_3']: null;
    $txtSVMuc5_1 = array_key_exists('txtSVMuc5_1', $_POST) ? $_POST['txtSVMuc5_1']: null;
    $txtSVMuc5_2 = array_key_exists('txtSVMuc5_2', $_POST) ? $_POST['txtSVMuc5_2']: null;
    $txtSVMuc5_3 = array_key_exists('txtSVMuc5_3', $_POST) ? $_POST['txtSVMuc5_3']: null;
    $txtSVMuc6 = array_key_exists('txtSVMuc6', $_POST) ? $_POST['txtSVMuc6']: null;
    $txtGhiChu = array_key_exists('txtGhiChu', $_POST) ? $_POST['txtGhiChu']: null;
    
    $txtHKtruoc = array_key_exists('txtHKtruoc', $_POST) ? $_POST['txtHKtruoc']: null;
    $txtHKnay = array_key_exists('txtHKnay', $_POST) ? $_POST['txtHKnay']: null;

    function tinhDiemHKnay($txtHKnay)
    {
        $diem = 0;

        if($txtHKnay < 4)
            $diem = 3;
        if($txtHKnay >= 4.0 and $txtHKnay < 5.0)
            $diem = 6;
        if($txtHKnay >= 5.0 and $txtHKnay < 6.5)
            $diem = 8;
        if($txtHKnay >= 6.5 and $txtHKnay < 8.0)
            $diem = 10;
        if($txtHKnay >= 8.0)
            $diem = 12;

        return $diem;
    }

    function tinhDiemTB($txtHKnay, $txtHKtruoc)
    {
        $tinhdiemTB = $txtHKnay - $txtHKtruoc;
        $diemTB = 0;

        if($tinhdiemTB >= 0.01 and $tinhdiemTB < 0.1)
            $diemTB = 1;
        if($tinhdiemTB >= 0.1 and $tinhdiemTB < 0.2)
            $diemTB = 2;
        if($tinhdiemTB >= 0.2 and $tinhdiemTB < 0.3)
            $diemTB = 3;
        if($tinhdiemTB >= 0.3 and $tinhdiemTB < 0.4)
            $diemTB = 4;
        if($tinhdiemTB >= 0.4 and $tinhdiemTB < 0.5)
            $diemTB = 5;
        if($tinhdiemTB >= 0.5 and $tinhdiemTB < 0.6)
            $diemTB = 6;
        if($tinhdiemTB >= 0.6 and $tinhdiemTB < 0.7)
            $diemTB = 7;
        if($tinhdiemTB >= 0.7 and $tinhdiemTB < 0.8)
            $diemTB = 8;
        if($tinhdiemTB >= 0.8 and $tinhdiemTB < 0.9)
            $diemTB = 9;
        if($tinhdiemTB >= 0.9)
            $diemTB = 10;

        return $diemTB;
    }

    function tinhdiemTong($txtHKnay, $txtHKtruoc, $txtSVMuc1_2, $txtSVMuc1_3, $txtSVMuc1_4, $txtSVMuc2_1, $txtSVMuc2_2, $txtSVMuc2_3, $txtSVMuc3_1, $txtSVMuc3_2, $txtSVMuc4_1, $txtSVMuc4_2, $txtSVMuc4_3, $txtSVMuc5_1, $txtSVMuc5_2, $txtSVMuc5_3, $txtSVMuc6)
    {
        $txtTongDiemMuc1_1 = tinhDiemHKnay($txtHKnay) + tinhDiemTB($txtHKnay, $txtHKtruoc);
        
        $tongdiem = $txtTongDiemMuc1_1 + $txtSVMuc1_2 +  $txtSVMuc1_3 + $txtSVMuc1_4 + $txtSVMuc2_1 + $txtSVMuc2_2 + $txtSVMuc2_3 + $txtSVMuc3_1 + $txtSVMuc3_2 + $txtSVMuc4_1 + $txtSVMuc4_2 + $txtSVMuc4_3 + $txtSVMuc5_1 + $txtSVMuc5_2 + $txtSVMuc5_3 + $txtSVMuc6;
        
        if($tongdiem >= 100)
        {
            $diemTong = 100;
        }
        else
        {
            $diemTong = $tongdiem;
        }

        return $diemTong;
    }

    function TinhDiemRenLuyen($txtHKnay, $txtHKtruoc, $txtSVMuc1_2, $txtSVMuc1_3, $txtSVMuc1_4, $txtSVMuc2_1, $txtSVMuc2_2, $txtSVMuc2_3, $txtSVMuc3_1, $txtSVMuc3_2, $txtSVMuc4_1, $txtSVMuc4_2, $txtSVMuc4_3, $txtSVMuc5_1, $txtSVMuc5_2, $txtSVMuc5_3, $txtSVMuc6, $txtGhiChu, $HocKy, $NamHoc)
    {
        $MaSV = $_SESSION['Username'];
        $LanCham = 1;
        
        $txtTongDiemMuc1_1 = tinhDiemHKnay($txtHKnay) + tinhDiemTB($txtHKnay, $txtHKtruoc);
        
        $diemTong = tinhdiemTong($txtHKnay, $txtHKtruoc, $txtSVMuc1_2, $txtSVMuc1_3, $txtSVMuc1_4, $txtSVMuc2_1, $txtSVMuc2_2, $txtSVMuc2_3, $txtSVMuc3_1, $txtSVMuc3_2, $txtSVMuc4_1, $txtSVMuc4_2, $txtSVMuc4_3, $txtSVMuc5_1, $txtSVMuc5_2, $txtSVMuc5_3, $txtSVMuc6);

        $kn = mysqli_connect("localhost", "root", "", "sotay") or die("chưa kết nối");
        $sql2 = "select MaSinhVien, NamHoc, HocKy from bangdiemrenluyen where MaSinhVien = '".$MaSV."' and NamHoc='".$NamHoc."' and HocKy= '".$HocKy."'";
        $kq2 = mysqli_query($kn, $sql2);
        if($row1 = mysqli_fetch_array($kq2))
        {
            echo '<script>alert("Điểm năm học '.$NamHoc.' và học kỳ '.$HocKy.' đã có trong hệ thống!");</script>';
        }
        else
        {
            if($NamHoc == "" or $HocKy == "")
            {
                echo '<script>alert("Năm học và học kỳ còn trống!");</script>';
            }
            else
            {
                //câu lệnh truy vấn.
                $sql3 = "insert into bangdiemrenluyen (ID, MaSinhVien, NamHoc, HocKy, LanCham, DTB_HKTruoc, DTB_HKNay, Muc1_1, Muc1_2, Muc1_3, Muc1_4, Muc2_1, Muc2_2, Muc2_3, Muc3_1, Muc3_2, Muc4_1, Muc4_2, Muc4_3, Muc5_1, Muc5_2, Muc5_3, Muc6, TongDiem, GhiChu)
                        values ('', '$MaSV', '$NamHoc', '$HocKy', '$LanCham', '$txtHKtruoc', '$txtHKnay', '$txtTongDiemMuc1_1', '$txtSVMuc1_2', '$txtSVMuc1_3', '$txtSVMuc1_4', '$txtSVMuc2_1', '$txtSVMuc2_2', '$txtSVMuc2_3', '$txtSVMuc3_1', '$txtSVMuc3_2', '$txtSVMuc4_1', '$txtSVMuc4_2', '$txtSVMuc4_3', '$txtSVMuc5_1', '$txtSVMuc5_2', '$txtSVMuc5_3', '$txtSVMuc6', '$diemTong', '$txtGhiChu')";
                //Thực hiện câu lệnh truy vấn
                $kq3 = mysqli_query($kn,$sql3);
                echo '<script>alert("Gửi thành công!");</script>';
            } 
        }

        //echo '<script>alert("'.$diemTong.'");</script>';
    }

    function xeploai($tongdiem)
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

    if($_POST){
        if(isset($_POST['submit']) and $_SERVER['REQUEST_METHOD'] == "POST"){
            TinhDiemRenLuyen($txtHKnay, $txtHKtruoc, $txtSVMuc1_2, $txtSVMuc1_3, $txtSVMuc1_4, $txtSVMuc2_1, $txtSVMuc2_2, $txtSVMuc2_3, $txtSVMuc3_1, $txtSVMuc3_2, $txtSVMuc4_1, $txtSVMuc4_2, $txtSVMuc4_3, $txtSVMuc5_1, $txtSVMuc5_2, $txtSVMuc5_3, $txtSVMuc6, $txtGhiChu, $HocKy, $NamHoc);
        }
    }

?>

<script>
    function tinhtong()
    {
        var txtHKtruoc = document.getElementById("txtHKtruoc");
        var txtHKnay = document.getElementById("txtHKnay");
        var txtSVMuc1_2 = document.getElementById("txtSVMuc1_2");
        var txtSVMuc1_3 = document.getElementById("txtSVMuc1_3");
        var txtSVMuc1_4 = document.getElementById("txtSVMuc1_4");
        var txtSVMuc2_1 = document.getElementById("txtSVMuc2_1");
        var txtSVMuc2_2 = document.getElementById("txtSVMuc2_2");
        var txtSVMuc2_3 = document.getElementById("txtSVMuc2_3");
        var txtSVMuc3_1 = document.getElementById("txtSVMuc3_1");
        var txtSVMuc3_2 = document.getElementById("txtSVMuc3_2");
        var txtSVMuc4_1 = document.getElementById("txtSVMuc4_1");
        var txtSVMuc4_2 = document.getElementById("txtSVMuc4_2");
        var txtSVMuc4_3 = document.getElementById("txtSVMuc4_3");
        var txtSVMuc5_1 = document.getElementById("txtSVMuc5_1");
        var txtSVMuc5_2 = document.getElementById("txtSVMuc5_2");
        var txtSVMuc5_3 = document.getElementById("txtSVMuc5_3");
        var txtSVMuc6 = document.getElementById("txtSVMuc6");

        var kq = document.getElementById("kq");
        var xl = document.getElementById("xl");

        var diemHKnay = 0;

        if(parseFloat(txtHKnay.value) < 4)
            diemHKnay = 3;
        if((parseFloat(txtHKnay.value) >= 4.0) && (parseFloat(txtHKnay.value) < 5.0))
            diemHKnay = 6;
        if((parseFloat(txtHKnay.value) >= 5.0) && (parseFloat(txtHKnay.value) < 6.5))
            diemHKnay = 8;
        if((parseFloat(txtHKnay.value) >= 6.5) && (parseFloat(txtHKnay.value) < 8.0))
            diemHKnay = 10;
        if(parseFloat(txtHKnay.value) >= 8.0)
            diemHKnay = 12;

        var diemtb = 0;
        var tinhdiemtb = parseFloat(txtHKnay.value) - parseFloat(txtHKtruoc.value);

        if((tinhdiemtb >= 0.01) && (tinhdiemtb < 0.1))
        {
            diemtb = 1;
        }
        if((tinhdiemtb >= 0.1) && (tinhdiemtb < 0.2))
        {
            diemtb = 2;
        } 
        if((tinhdiemtb >= 0.2) && (tinhdiemtb < 0.3))
        {
            diemtb = 3;
        }    
        if((tinhdiemtb >= 0.3) && (tinhdiemtb < 0.4))
        {
            diemtb = 4;
        }    
        if((tinhdiemtb >= 0.4) && (tinhdiemtb < 0.5))
        {
            diemtb = 5;
        }    
        if((tinhdiemtb >= 0.5) && (tinhdiemtb < 0.6))
        {
            diemtb = 6;
        }   
        if((tinhdiemtb >= 0.6) && (tinhdiemtb < 0.7))
        {
            diemtb = 7;
        }    
        if((tinhdiemtb >= 0.7) && (tinhdiemtb < 0.8))
        {
            diemtb = 8;
        }   
        if((tinhdiemtb >= 0.8) && (tinhdiemtb < 0.9))
        {
            diemtb = 9;
        }    
        if(tinhdiemtb >= 0.9)
        {
            diemtb = 10;
        }    

        var tongmuc1_1 = parseInt(diemHKnay) + parseInt(diemtb);

        var tong = parseInt(tongmuc1_1) + parseInt(txtSVMuc1_2.value) + parseInt(txtSVMuc1_3.value) + parseInt(txtSVMuc1_4.value) + parseInt(txtSVMuc2_1.value) + parseInt(txtSVMuc2_2.value) +
            parseInt(txtSVMuc2_3.value) + parseInt(txtSVMuc3_1.value) + parseInt(txtSVMuc3_2.value) + parseInt(txtSVMuc4_1.value) + parseInt(txtSVMuc4_2.value) + 
            parseInt(txtSVMuc4_3.value) + parseInt(txtSVMuc5_1.value) + parseInt(txtSVMuc5_2.value) + parseInt(txtSVMuc5_3.value) + parseInt(txtSVMuc6.value);

        var ketquadiem = 0;

        if(tong >= 100)
            ketquadiem = 100;
        else
            ketquadiem = tong;

        var xeploai = "";
        if(ketquadiem < 35)
        {
            xeploai = "Kém";
        }
        if(ketquadiem >= 35 && ketquadiem < 50)
        {
            xeploai = "Yếu";
        }
        if(ketquadiem >= 50 && ketquadiem < 65)
        {
            xeploai = "Trung bình";
        }
        if(ketquadiem >= 65 && ketquadiem < 80)
        {
            xeploai = "Khá";
        }
        if(ketquadiem >= 80 && ketquadiem < 90)
        {
            xeploai = "Tốt";
        }
        if(ketquadiem >= 90)
        {
            xeploai = "Xuất sắc";
        }

        if (!isNaN(ketquadiem)){
            kq.innerHTML = ketquadiem;
            xl.innerHTML = xeploai;
        }

    }
</script>
</html>
​
