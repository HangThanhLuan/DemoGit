<?php 
    require 'site.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tạo điểm rèn luyện cho sinh viên</title>
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
    .btn{
        margin: 15px 0;
    }
  </style>
</head>
<body>
<!-- thân của trang -->
<div class="container-fluid" style="margin-top:30px;">
    <div class="row">
        <div class="col-sm-1"></div>

        <div class="col-sm-10">
            <?php
                $malop = $_GET['malop'];
                $makhoahoc = $_GET['makhoahoc'];
            
                $kn = mysqli_connect("localhost", "root", "", "sotay") or die("chưa kết nối");
                $sql1 = "select * from sinhvien INNER JOIN lop ON sinhvien.MaLop = lop.MaLop INNER JOIN khoahoc ON lop.MaKhoaHoc = khoahoc.MaKhoaHoc where lop.MaKhoaHoc = '".$makhoahoc."' and lop.MaLop = '".$malop."'";
                $kq1 = mysqli_query($kn,$sql1);
                $row = mysqli_fetch_array($kq1);
            ?>
        <form action="" method="POST" class="container-items ">
            <table align="center">
                <tr>
                    <td>
                        <h2 style="text-align: center">PHIẾU ĐÁNH GIÁ KẾT QUẢ RÈN LUYỆN SINH VIÊN</h2>
                        <h3 style="text-align: center">Lớp: <?php echo $row['TenLop'] ?></h3>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-sm-3" style="margin: 15px 0;">
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
                            </div>
                            <div class="col-sm-4" style="margin: 15px 0;">
                                <select name="cboHocKy" id="cboHocKy" class="form-control" style="width: 180px; margin: auto;">
                                    <option value="" selected="selected">--Chọn học kỳ--</option>
                                    <option value="1">Học kỳ 1</option>
                                    <option value="2">Học kỳ 2</option>
                                </select>
                                <script type='text/javascript'>
                                    document.getElementById('cboHocKy').value = "<?php echo $_POST['cboHocKy'];?>";
                                </script>
                            </div>
                            <div class="col-sm-5" style="margin: 15px 0;">
                                <select name="cboMaSV" id="cboMaSV" class="form-control" style="width: 400px; margin: auto;">
                                    <option value="" selected="selected">--Chọn sinh viên--</option>
                                    <?php 
                                        while($row = mysqli_fetch_array($kq1))
                                        {
                                            echo '<option value="'.$row['MaSinhVien'].'">'.$row['MaSinhVien']." - ".$row['HoTen'].'</option>';
                                        }
                                        
                                    ?>
                                </select>
                                <script type='text/javascript'>
                                    document.getElementById('cboMaSV').value = "<?php echo $_POST['cboMaSV'];?>";
                                </script>
                            </div>
                        </div>
                        <br>
                    </td>
                </tr>
                <br>
                <tr>
                    <td >
                        <table border="1" style="text-align: left" id="formDRL" class="table table-bordered">
                                <tr>
                                    <td style="text-align: center"><h5>Nội dung đánh giá</h5></td>
                                    <td style="text-align: center; width: 120px"><h5>Sinh viên tự đánh giá</h5></td>
                                    <td style="text-align: center; width: 120px"><h5>Tập thể lớp đánh giá</h5></td>
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
                                                                <td style="justify-content: center;"><input style="text-align: center"  class="form-control" type="text" name="txtHKtruocSV" placeholder="Điểm HK trước" id="txtHKtruocSV" onkeyup="tinhtong()"></td>
                                                                <td style="justify-content: center;"><input style="text-align: center"  class="form-control" type="text" name="txtHKtruocTT" placeholder="Điểm HK trước" id="txtHKtruocTT" onkeyup="tinhtong()"></td>

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
                                                                <td><input style="text-align: center" class="form-control" type="text" name="txtHKnaySV" placeholder="Điểm HK này" id="txtHKnaySV" onkeyup="tinhtong()"></td>
                                                                <td><input style="text-align: center" class="form-control" type="text" name="txtHKnayTT" placeholder="Điểm HK này" id="txtHKnayTT" onkeyup="tinhtong()"></td>
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
                                    <td style="text-align: center">
                                        <div id="kqSVMuc1_1">Kết quả mục 1.1</div>
                                    </td>
                                    <td>
                                        <div id="kqTTMuc1_1">Kết quả mục 1.1</div>
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
                                    <td>
                                        <input class="form-control" type="text" name="txtSVMuc1_2" id="txtSVMuc1_2" onkeyup="tinhtong()" placeholder="Mục 1.2">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="txtTTMuc1_2" id="txtTTMuc1_2" onkeyup="tinhtong()" placeholder="Mục 1.2">
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
                                    <td>
                                        <input class="form-control" type="text" name="txtSVMuc1_3" id="txtSVMuc1_3" onkeyup="tinhtong()" placeholder="Mục 1.3">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="txtTTMuc1_3" id="txtTTMuc1_3" onkeyup="tinhtong()" placeholder="Mục 1.3">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" height=15px title="Điểm trừ (nếu có) ở mục 1.4, mục 2 và mục 4.1 không vượt quá (tổng) số điểm của mục tương ứng (đảm bảo tổng điểm của mỗi mục tương ứng là không âm)."><b>1.4. Chấp hành tốt các nội quy, quy định về học vụ<a href="#ghichu">(4)</a>:</b></td>
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
                                    <td>
                                        <input class="form-control" type="text" name="txtSVMuc1_4" id="txtSVMuc1_4" onkeyup="tinhtong()" placeholder="Mục 1.4">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="txtTTMuc1_4" id="txtTTMuc1_4" onkeyup="tinhtong()" placeholder="Mục 1.4">
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
                                    <td>
                                        <input class="form-control" type="text" name="txtSVMuc2_1" id="txtSVMuc2_1" onkeyup="tinhtong()" placeholder="Mục 2.1">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="txtTTMuc2_1" id="txtTTMuc2_1" onkeyup="tinhtong()" placeholder="Mục 2.1">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table style="width: 100%">
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
                                        <input class="form-control" type="text" name="txtSVMuc2_2" id="txtSVMuc2_2" onkeyup="tinhtong()" placeholder="Mục 2.2">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="txtTTMuc2_2" id="txtTTMuc2_2" onkeyup="tinhtong()" placeholder="Mục 2.2">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table style="width: 100%">
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
                                    <td>
                                        <input class="form-control" type="text" name="txtSVMuc2_3" id="txtSVMuc2_3" onkeyup="tinhtong()" placeholder="Mục 2.3">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="txtTTMuc2_3" id="txtTTMuc2_3" onkeyup="tinhtong()" placeholder="Mục 2.3">
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
                                    <td>
                                        <input class="form-control" type="text" name="txtSVMuc3_1" id="txtSVMuc3_1" onkeyup="tinhtong()" placeholder="Mục 3.1">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="txtTTMuc3_1" id="txtTTMuc3_1" onkeyup="tinhtong()" placeholder="Mục 3.1">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table style="width: 100%">
                                            <tr>
                                                <td colspan="4"><b>3.2 Tham gia các hoạt động huy động lực lượng (cấp khoa trở lên):</b></td>
                                                <td style="text-align: center">+3/lần</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="txtSVMuc3_2" id="txtSVMuc3_2" onkeyup="tinhtong()" placeholder="Mục 3.2">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="txtTTMuc3_2" id="txtTTMuc3_2" onkeyup="tinhtong()" placeholder="Mục 3.2">
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
                                    <td>
                                        <input class="form-control" type="text" name="txtSVMuc4_1" id="txtSVMuc4_1" onkeyup="tinhtong()" placeholder="Mục 4.1">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="txtTTMuc4_1" id="txtTTMuc4_1" onkeyup="tinhtong()" placeholder="Mục 4.1">
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
                                    <td>
                                        <input class="form-control" type="text" name="txtSVMuc4_2" id="txtSVMuc4_2" onkeyup="tinhtong()" placeholder="Mục 4.2">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="txtTTMuc4_2" id="txtTTMuc4_2" onkeyup="tinhtong()" placeholder="Mục 4.2">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table>
                                            <tr>
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
                                        <input class="form-control" type="text" name="txtSVMuc4_3" id="txtSVMuc4_3" onkeyup="tinhtong()" placeholder="Mục 4.3">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="txtTTMuc4_3" id="txtTTMuc4_3" onkeyup="tinhtong()" placeholder="Mục 4.3">
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
                                    <td>
                                        <input class="form-control" type="text" name="txtSVMuc5_1" id="txtSVMuc5_1" onkeyup="tinhtong()" placeholder="Mục 5.1">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="txtTTMuc5_1" id="txtTTMuc5_1" onkeyup="tinhtong()" placeholder="Mục 5.1">
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
                                    <td>
                                        <input class="form-control" type="text" name="txtSVMuc5_2" id="txtSVMuc5_2" onkeyup="tinhtong()" placeholder="Mục 5.2">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="txtTTMuc5_2" id="txtTTMuc5_2" onkeyup="tinhtong()" placeholder="Mục 5.2">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table style="width: 100%">
                                            <tr>
                                                <td colspan="2"><b>5.3 Là thành viên của ít nhất 1 câu lạc bộ học thuật/kỹ năng của Trường Đại học Quy Nhơn:</b></td>
                                                <td>+3đ</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="txtSVMuc5_3" id="txtSVMuc5_3" onkeyup="tinhtong()" placeholder="Mục 5.3">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="txtTTMuc5_3" id="txtTTMuc5_3" onkeyup="tinhtong()" placeholder="Mục 5.3">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" height=15px><b>6. Sinh viên có thành tích đặc biệt:</b></td>
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
                                    <td>
                                        <input class="form-control" type="text" name="txtSVMuc6" id="txtSVMuc6" onkeyup="tinhtong()" placeholder="Mục 6">
                                    </td> 
                                    <td>
                                        <input class="form-control" type="text" name="txtTTMuc6" id="txtTTMuc6" onkeyup="tinhtong()" placeholder="Mục 6">
                                    </td>
                                </tr>
                                <tr style="text-align: center">
                                    <td ><b>Tổng điểm các mục 1+2+3+4+5+6<br></b>Nếu tổng điểm của cả 6 mục vượt quá 100 sẽ được quy về 100 điểm.</td>
                                    <td style="vertical-align: inherit;">
                                        <div id="kqSV">Kết quả</div>
                                    </td>
                                    <td style="vertical-align: inherit;">
                                        <div id="kqTT">Kết quả</div>
                                    </td>
                                </tr>
                                <tr style="text-align: center">
                                    <td ><b>Xếp loại rèn luyện<br></b></td>
                                    <td>
                                        <div id="xlSV">Xếp loại</div>
                                    </td>
                                    <td>
                                        <div id="xlTT">Xếp loại</div>
                                    </td>
                                </tr>
                        </table>                     
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;" colspan="3"><h4>Nội dung ghi chú điểm từng phần</h4></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <table border="1" style="margin: auto; width: 100%" class="table table-bordered" >
                            <tr>
                                <td style="text-align: center;">Sinh viên ghi chú</td>
                                <td style="text-align: center;">Tập thể ghi chú</td>
                            </tr>
                            <tr>
                                <td ><textarea class="form-control" name="txtGhiChuSV" id="txtGhiChuSV" cols="50" rows="10" ></textarea></td>
                                <td><textarea class="form-control" name="txtGhiChuTT" id="txtGhiChuTT" cols="50" rows="10" ></textarea></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td colspan="2" style="text-align: center; justcontent: center">
                        <div class="row" style="justify-content: center; display: flex; margin-top: 50px">
                            <div class="col-sm-6">
                                <input class="btn btn-primary btn-block" type="submit" name="btnThem" value="Thêm điểm rèn luyện" >
                            </div>
                            <div class="col-sm-6">
                                <input class="btn btn-primary btn-block" type="submit" name="btnTroVe" value="Làm mới trang" >
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">
                        <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <br>
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
            </table> 
            <br> 
        </form> 
        </div>

        <div class="col-sm-1"></div>
    </div>
</div>
</body>

<?php 
    $cboMaSV = array_key_exists('cboMaSV', $_POST) ? $_POST['cboMaSV']: null;
    $cboNamHoc = array_key_exists('cboNamHoc', $_POST) ? $_POST['cboNamHoc']: null;
    $cboHocKy = array_key_exists('cboHocKy', $_POST) ? $_POST['cboHocKy']: null;

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
    $txtGhiChuSV = array_key_exists('txtGhiChuSV', $_POST) ? $_POST['txtGhiChuSV']: null;
    
    $txtHKtruocSV = array_key_exists('txtHKtruocSV', $_POST) ? $_POST['txtHKtruocSV']: null;
    $txtHKnaySV = array_key_exists('txtHKnaySV', $_POST) ? $_POST['txtHKnaySV']: null;

    $txtTTMuc1_2 = array_key_exists('txtTTMuc1_2', $_POST) ? $_POST['txtTTMuc1_2']: null;
    $txtTTMuc1_3 = array_key_exists('txtTTMuc1_3', $_POST) ? $_POST['txtTTMuc1_3']: null;
    $txtTTMuc1_4 = array_key_exists('txtTTMuc1_4', $_POST) ? $_POST['txtTTMuc1_4']: null;
    $txtTTMuc2_1 = array_key_exists('txtTTMuc2_1', $_POST) ? $_POST['txtTTMuc2_1']: null;
    $txtTTMuc2_2 = array_key_exists('txtTTMuc2_2', $_POST) ? $_POST['txtTTMuc2_2']: null;
    $txtTTMuc2_3 = array_key_exists('txtTTMuc2_3', $_POST) ? $_POST['txtTTMuc2_3']: null;
    $txtTTMuc3_1 = array_key_exists('txtTTMuc3_1', $_POST) ? $_POST['txtTTMuc3_1']: null;
    $txtTTMuc3_2 = array_key_exists('txtTTMuc3_2', $_POST) ? $_POST['txtTTMuc3_2']: null;
    $txtTTMuc4_1 = array_key_exists('txtTTMuc4_1', $_POST) ? $_POST['txtTTMuc4_1']: null;
    $txtTTMuc4_2 = array_key_exists('txtTTMuc4_2', $_POST) ? $_POST['txtTTMuc4_2']: null;
    $txtTTMuc4_3 = array_key_exists('txtTTMuc4_3', $_POST) ? $_POST['txtTTMuc4_3']: null;
    $txtTTMuc5_1 = array_key_exists('txtTTMuc5_1', $_POST) ? $_POST['txtTTMuc5_1']: null;
    $txtTTMuc5_2 = array_key_exists('txtTTMuc5_2', $_POST) ? $_POST['txtTTMuc5_2']: null;
    $txtTTMuc5_3 = array_key_exists('txtTTMuc5_3', $_POST) ? $_POST['txtTTMuc5_3']: null;
    $txtTTMuc6 = array_key_exists('txtTTMuc6', $_POST) ? $_POST['txtTTMuc6']: null;
    $txtGhiChuTT = array_key_exists('txtGhiChuTT', $_POST) ? $_POST['txtGhiChuTT']: null;
    
    $txtHKtruocTT = array_key_exists('txtHKtruocTT', $_POST) ? $_POST['txtHKtruocTT']: null;
    $txtHKnayTT = array_key_exists('txtHKnayTT', $_POST) ? $_POST['txtHKnayTT']: null;

    function tinhDiemHKnaySV($txtHKnaySV)
    {
        $diemSV = 0;

        if($txtHKnaySV < 4)
            $diemSV = 3;
        if($txtHKnaySV >= 4.0 and $txtHKnaySV < 5.0)
            $diemSV = 6;
        if($txtHKnaySV >= 5.0 and $txtHKnaySV < 6.5)
            $diemSV = 8;
        if($txtHKnaySV >= 6.5 and $txtHKnaySV < 8.0)
            $diemSV = 10;
        if($txtHKnaySV >= 8.0)
            $diemSV = 12;

        return $diemSV;
    }

    function tinhDiemHKnayTT($txtHKnayTT)
    {
        $diemTT = 0;

        if($txtHKnayTT < 4)
            $diemTT = 3;
        if($txtHKnayTT >= 4.0 and $txtHKnayTT < 5.0)
            $diemTT = 6;
        if($txtHKnayTT >= 5.0 and $txtHKnayTT < 6.5)
            $diemTT = 8;
        if($txtHKnayTT >= 6.5 and $txtHKnayTT < 8.0)
            $diemTT = 10;
        if($txtHKnayTT >= 8.0)
            $diemTT = 12;

        return $diemTT;
    }

    function tinhDiemTBSV($txtHKnaySV, $txtHKtruocSV)
    {
        $tinhdiemTBSV = $txtHKnaySV - $txtHKtruocSV;
        $diemTBSV = 0;

        if($tinhdiemTBSV >= 0.01 and $tinhdiemTBSV < 0.1)
            $diemTBSV = 1;
        if($tinhdiemTBSV >= 0.1 and $tinhdiemTBSV < 0.2)
            $diemTBSV = 2;
        if($tinhdiemTBSV >= 0.2 and $tinhdiemTBSV < 0.3)
            $diemTBSV = 3;
        if($tinhdiemTBSV >= 0.3 and $tinhdiemTBSV < 0.4)
            $diemTBSV = 4;
        if($tinhdiemTBSV >= 0.4 and $tinhdiemTBSV < 0.5)
            $diemTBSV = 5;
        if($tinhdiemTBSV >= 0.5 and $tinhdiemTBSV < 0.6)
            $diemTBSV = 6;
        if($tinhdiemTBSV >= 0.6 and $tinhdiemTBSV < 0.7)
            $diemTBSV = 7;
        if($tinhdiemTBSV >= 0.7 and $tinhdiemTBSV < 0.8)
            $diemTBSV = 8;
        if($tinhdiemTBSV >= 0.8 and $tinhdiemTBSV < 0.9)
            $diemTBSV = 9;
        if($tinhdiemTBSV >= 0.9)
            $diemTBSV = 10;

        return $diemTBSV;
    }

    function tinhDiemTBTT($txtHKnayTT, $txtHKtruocTT)
    {
        $tinhdiemTBTT = $txtHKnayTT - $txtHKtruocTT;
        $diemTBTT = 0;

        if($tinhdiemTBTT >= 0.01 and $tinhdiemTBTT < 0.1)
            $diemTBTT = 1;
        if($tinhdiemTBTT >= 0.1 and $tinhdiemTBTT < 0.2)
            $diemTBTT = 2;
        if($tinhdiemTBTT >= 0.2 and $tinhdiemTBTT < 0.3)
            $diemTBTT = 3;
        if($tinhdiemTBTT >= 0.3 and $tinhdiemTBTT < 0.4)
            $diemTBTT = 4;
        if($tinhdiemTBTT >= 0.4 and $tinhdiemTBTT < 0.5)
            $diemTBTT = 5;
        if($tinhdiemTBTT >= 0.5 and $tinhdiemTBTT < 0.6)
            $diemTBTT = 6;
        if($tinhdiemTBTT >= 0.6 and $tinhdiemTBTT < 0.7)
            $diemTBTT = 7;
        if($tinhdiemTBTT >= 0.7 and $tinhdiemTBTT < 0.8)
            $diemTBTT = 8;
        if($tinhdiemTBTT >= 0.8 and $tinhdiemTBTT < 0.9)
            $diemTBTT = 9;
        if($tinhdiemTBTT >= 0.9)
            $diemTBTT = 10;

        return $diemTBTT;
    }

    function tinhdiemTongSV($txtHKnaySV, $txtHKtruocSV, $txtSVMuc1_2, $txtSVMuc1_3, $txtSVMuc1_4, $txtSVMuc2_1, $txtSVMuc2_2, $txtSVMuc2_3, $txtSVMuc3_1, $txtSVMuc3_2, $txtSVMuc4_1, $txtSVMuc4_2, $txtSVMuc4_3, $txtSVMuc5_1, $txtSVMuc5_2, $txtSVMuc5_3, $txtSVMuc6)
    {
        $txtTongDiemMuc1_1SV = tinhDiemHKnaySV($txtHKnaySV) + tinhDiemTBSV($txtHKnaySV, $txtHKtruocSV);
        
        $tongdiemSV = $txtTongDiemMuc1_1SV + $txtSVMuc1_2 +  $txtSVMuc1_3 + $txtSVMuc1_4 + $txtSVMuc2_1 + $txtSVMuc2_2 + $txtSVMuc2_3 + $txtSVMuc3_1 + $txtSVMuc3_2 + $txtSVMuc4_1 + $txtSVMuc4_2 + $txtSVMuc4_3 + $txtSVMuc5_1 + $txtSVMuc5_2 + $txtSVMuc5_3 + $txtSVMuc6;
        
        if($tongdiemSV >= 100)
        {
            $diemTongSV = 100;
        }
        else
        {
            $diemTongSV = $tongdiemSV;
        }

        return $diemTongSV;
    }

    function tinhdiemTongTT($txtHKnayTT, $txtHKtruocTT, $txtTTMuc1_2, $txtTTMuc1_3, $txtTTMuc1_4, $txtTTMuc2_1, $txtTTMuc2_2, $txtTTMuc2_3, $txtTTMuc3_1, $txtTTMuc3_2, $txtTTMuc4_1, $txtTTMuc4_2, $txtTTMuc4_3, $txtTTMuc5_1, $txtTTMuc5_2, $txtTTMuc5_3, $txtTTMuc6)
    {
        $txtTongDiemMuc1_1TT = tinhDiemHKnayTT($txtHKnayTT) + tinhDiemTBTT($txtHKnayTT, $txtHKtruocTT);
        
        $tongdiemTT = $txtTongDiemMuc1_1TT + $txtTTMuc1_2 +  $txtTTMuc1_3 + $txtTTMuc1_4 + $txtTTMuc2_1 + $txtTTMuc2_2 + $txtTTMuc2_3 + $txtTTMuc3_1 + $txtTTMuc3_2 + $txtTTMuc4_1 + $txtTTMuc4_2 + $txtTTMuc4_3 + $txtTTMuc5_1 + $txtTTMuc5_2 + $txtTTMuc5_3 + $txtTTMuc6;
        
        if($tongdiemTT >= 100)
        {
            $diemTongTT = 100;
        }
        else
        {
            $diemTongTT = $tongdiemTT;
        }

        return $diemTongTT;
    }

    function TinhDiemRenLuyen($txtHKnaySV, $txtHKtruocSV, $txtSVMuc1_2, $txtSVMuc1_3, $txtSVMuc1_4, $txtSVMuc2_1, $txtSVMuc2_2, $txtSVMuc2_3, $txtSVMuc3_1, $txtSVMuc3_2, $txtSVMuc4_1, $txtSVMuc4_2, $txtSVMuc4_3, $txtSVMuc5_1, $txtSVMuc5_2, $txtSVMuc5_3, $txtSVMuc6, $txtGhiChuSV, $cboMaSV, $cboHocKy, $cboNamHoc, $txtHKnayTT, $txtHKtruocTT, $txtTTMuc1_2, $txtTTMuc1_3, $txtTTMuc1_4, $txtTTMuc2_1, $txtTTMuc2_2, $txtTTMuc2_3, $txtTTMuc3_1, $txtTTMuc3_2, $txtTTMuc4_1, $txtTTMuc4_2, $txtTTMuc4_3, $txtTTMuc5_1, $txtTTMuc5_2, $txtTTMuc5_3, $txtTTMuc6, $txtGhiChuTT)
    {
        $LanCham1 = 1;
        $LanCham2 = 2;
        
        $txtTongDiemMuc1_1SV = tinhDiemHKnaySV($txtHKnaySV) + tinhDiemTBSV($txtHKnaySV, $txtHKtruocSV);
        $txtTongDiemMuc1_1TT = tinhDiemHKnayTT($txtHKnayTT) + tinhDiemTBTT($txtHKnayTT, $txtHKtruocTT);
        
        $diemTongSV = tinhdiemTongSV($txtHKnaySV, $txtHKtruocSV, $txtSVMuc1_2, $txtSVMuc1_3, $txtSVMuc1_4, $txtSVMuc2_1, $txtSVMuc2_2, $txtSVMuc2_3, $txtSVMuc3_1, $txtSVMuc3_2, $txtSVMuc4_1, $txtSVMuc4_2, $txtSVMuc4_3, $txtSVMuc5_1, $txtSVMuc5_2, $txtSVMuc5_3, $txtSVMuc6);
        $diemTongTT = tinhdiemTongTT($txtHKnayTT, $txtHKtruocTT, $txtTTMuc1_2, $txtTTMuc1_3, $txtTTMuc1_4, $txtTTMuc2_1, $txtTTMuc2_2, $txtTTMuc2_3, $txtTTMuc3_1, $txtTTMuc3_2, $txtTTMuc4_1, $txtTTMuc4_2, $txtTTMuc4_3, $txtTTMuc5_1, $txtTTMuc5_2, $txtTTMuc5_3, $txtTTMuc6);

        $kn = mysqli_connect("localhost", "root", "", "sotay") or die("chưa kết nối");
        $sql2 = "select MaSinhVien, NamHoc, HocKy from bangdiemrenluyen where MaSinhVien = '".$cboMaSV."' and NamHoc='".$cboNamHoc."' and HocKy= '".$cboHocKy."'";
        $kq2 = mysqli_query($kn, $sql2);
        if($row1 = mysqli_fetch_array($kq2))
        {
            $masv = $row1['MaSinhVien'];
            $truyvan = "select * from sinhvien where MaSinhVien = '".$masv."'";
            $kqtruyvan = mysqli_query($kn, $truyvan);
            $rowtruyvan = mysqli_fetch_array($kqtruyvan);
            $hoten = $rowtruyvan['HoTen'];
            echo '<script>alert("Điểm năm học '.$cboNamHoc.' và học kỳ '.$cboHocKy.' của sinh viên '.$cboMaSV.' - '.$hoten.' đã có trong hệ thống!");</script>';
        }
        else
        {
            if($cboNamHoc == "" or $cboHocKy == "" or $cboMaSV == "")
            {
                echo '<script>alert("Vui lòng không được bỏ trống thông tin!");</script>';
            }
            else
            {
                //câu lệnh truy vấn.
                $sql3 = "insert into bangdiemrenluyen (ID, MaSinhVien, NamHoc, HocKy, LanCham, DTB_HKTruoc, DTB_HKNay, Muc1_1, Muc1_2, Muc1_3, Muc1_4, Muc2_1, Muc2_2, Muc2_3, Muc3_1, Muc3_2, Muc4_1, Muc4_2, Muc4_3, Muc5_1, Muc5_2, Muc5_3, Muc6, TongDiem, GhiChu)
                        values ('', '$cboMaSV', '$cboNamHoc', '$cboHocKy', '$LanCham1', '$txtHKtruocSV', '$txtHKnaySV', '$txtTongDiemMuc1_1SV', '$txtSVMuc1_2', '$txtSVMuc1_3', '$txtSVMuc1_4', '$txtSVMuc2_1', '$txtSVMuc2_2', '$txtSVMuc2_3', '$txtSVMuc3_1', '$txtSVMuc3_2', '$txtSVMuc4_1', '$txtSVMuc4_2', '$txtSVMuc4_3', '$txtSVMuc5_1', '$txtSVMuc5_2', '$txtSVMuc5_3', '$txtSVMuc6', '$diemTongSV', '$txtGhiChuSV')";
                $sql4 = "insert into bangdiemrenluyen (ID, MaSinhVien, NamHoc, HocKy, LanCham, DTB_HKTruoc, DTB_HKNay, Muc1_1, Muc1_2, Muc1_3, Muc1_4, Muc2_1, Muc2_2, Muc2_3, Muc3_1, Muc3_2, Muc4_1, Muc4_2, Muc4_3, Muc5_1, Muc5_2, Muc5_3, Muc6, TongDiem, GhiChu)
                        values ('', '$cboMaSV', '$cboNamHoc', '$cboHocKy', '$LanCham2', '$txtHKtruocTT', '$txtHKnayTT', '$txtTongDiemMuc1_1TT', '$txtTTMuc1_2', '$txtTTMuc1_3', '$txtTTMuc1_4', '$txtTTMuc2_1', '$txtTTMuc2_2', '$txtTTMuc2_3', '$txtTTMuc3_1', '$txtTTMuc3_2', '$txtTTMuc4_1', '$txtTTMuc4_2', '$txtTTMuc4_3', '$txtTTMuc5_1', '$txtTTMuc5_2', '$txtTTMuc5_3', '$txtTTMuc6', '$diemTongTT', '$txtGhiChuTT')";
                //Thực hiện câu lệnh truy vấn
                $kq3 = mysqli_query($kn,$sql3);
                $kq4 = mysqli_query($kn,$sql4);
                echo '<script>alert("Gửi thành công!");</script>';
            } 
        }

        //echo '<script>alert("'.$diemTongSV.'");</script>';
    }

    if($_POST){
        if(isset($_POST['btnThem']) and $_SERVER['REQUEST_METHOD'] == "POST"){
            TinhDiemRenLuyen($txtHKnaySV, $txtHKtruocSV, $txtSVMuc1_2, $txtSVMuc1_3, $txtSVMuc1_4, $txtSVMuc2_1, $txtSVMuc2_2, $txtSVMuc2_3, $txtSVMuc3_1, $txtSVMuc3_2, $txtSVMuc4_1, $txtSVMuc4_2, $txtSVMuc4_3, $txtSVMuc5_1, $txtSVMuc5_2, $txtSVMuc5_3, $txtSVMuc6, $txtGhiChuSV, $cboMaSV, $cboHocKy, $cboNamHoc, $txtHKnayTT, $txtHKtruocTT, $txtTTMuc1_2, $txtTTMuc1_3, $txtTTMuc1_4, $txtTTMuc2_1, $txtTTMuc2_2, $txtTTMuc2_3, $txtTTMuc3_1, $txtTTMuc3_2, $txtTTMuc4_1, $txtTTMuc4_2, $txtTTMuc4_3, $txtTTMuc5_1, $txtTTMuc5_2, $txtTTMuc5_3, $txtTTMuc6, $txtGhiChuTT);
        }
        if(isset($_POST['btnTroVe']) and $_SERVER['REQUEST_METHOD'] == "POST")
        { 
            $previous = "javascript:history.back()"; 
            if(isset($_SERVER['HTTP_REFERER'])) { 
                $previous = $_SERVER['HTTP_REFERER']; 
            }                              
        }
    }
    

?>

<script>
    function tinhtong()
    {
        var txtHKtruocSV = document.getElementById("txtHKtruocSV");
        var txtHKnaySV = document.getElementById("txtHKnaySV");
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

        var txtHKtruocTT = document.getElementById("txtHKtruocTT");
        var txtHKnayTT = document.getElementById("txtHKnayTT");
        var txtTTMuc1_2 = document.getElementById("txtTTMuc1_2");
        var txtTTMuc1_3 = document.getElementById("txtTTMuc1_3");
        var txtTTMuc1_4 = document.getElementById("txtTTMuc1_4");
        var txtTTMuc2_1 = document.getElementById("txtTTMuc2_1");
        var txtTTMuc2_2 = document.getElementById("txtTTMuc2_2");
        var txtTTMuc2_3 = document.getElementById("txtTTMuc2_3");
        var txtTTMuc3_1 = document.getElementById("txtTTMuc3_1");
        var txtTTMuc3_2 = document.getElementById("txtTTMuc3_2");
        var txtTTMuc4_1 = document.getElementById("txtTTMuc4_1");
        var txtTTMuc4_2 = document.getElementById("txtTTMuc4_2");
        var txtTTMuc4_3 = document.getElementById("txtTTMuc4_3");
        var txtTTMuc5_1 = document.getElementById("txtTTMuc5_1");
        var txtTTMuc5_2 = document.getElementById("txtTTMuc5_2");
        var txtTTMuc5_3 = document.getElementById("txtTTMuc5_3");
        var txtTTMuc6 = document.getElementById("txtTTMuc6");

        var kqSV = document.getElementById("kqSV");
        var xlSV = document.getElementById("xlSV");

        var kqTT = document.getElementById("kqTT");
        var xlTT = document.getElementById("xlTT");kqTTMuc1_1

        var kqSVMuc1_1 = document.getElementById("kqSVMuc1_1");
        var kqTTMuc1_1 = document.getElementById("kqTTMuc1_1");

        var diemHKnaySV = 0;

        if(parseFloat(txtHKnaySV.value) < 4)
            diemHKnaySV = 3;
        if((parseFloat(txtHKnaySV.value) >= 4.0) && (parseFloat(txtHKnaySV.value) < 5.0))
            diemHKnaySV = 6;
        if((parseFloat(txtHKnaySV.value) >= 5.0) && (parseFloat(txtHKnaySV.value) < 6.5))
            diemHKnaySV = 8;
        if((parseFloat(txtHKnaySV.value) >= 6.5) && (parseFloat(txtHKnaySV.value) < 8.0))
            diemHKnaySV = 10;
        if(parseFloat(txtHKnaySV.value) >= 8.0)
            diemHKnaySV = 12;

        var diemHKnayTT = 0;

        if(parseFloat(txtHKnayTT.value) < 4)
            diemHKnayTT = 3;
        if((parseFloat(txtHKnayTT.value) >= 4.0) && (parseFloat(txtHKnayTT.value) < 5.0))
            diemHKnayTT = 6;
        if((parseFloat(txtHKnayTT.value) >= 5.0) && (parseFloat(txtHKnayTT.value) < 6.5))
            diemHKnayTT = 8;
        if((parseFloat(txtHKnayTT.value) >= 6.5) && (parseFloat(txtHKnayTT.value) < 8.0))
            diemHKnayTT = 10;
        if(parseFloat(txtHKnayTT.value) >= 8.0)
            diemHKnayTT = 12;

        var diemtbSV = 0;
        var tinhdiemtbSV = parseFloat(txtHKnaySV.value) - parseFloat(txtHKtruocSV.value);

        if((tinhdiemtbSV >= 0.01) && (tinhdiemtbSV < 0.1))
        {
            diemtbSV = 1;
        }
        if((tinhdiemtbSV >= 0.1) && (tinhdiemtbSV < 0.2))
        {
            diemtbSV = 2;
        } 
        if((tinhdiemtbSV >= 0.2) && (tinhdiemtbSV < 0.3))
        {
            diemtbSV = 3;
        }    
        if((tinhdiemtbSV >= 0.3) && (tinhdiemtbSV < 0.4))
        {
            diemtbSV = 4;
        }    
        if((tinhdiemtbSV >= 0.4) && (tinhdiemtbSV < 0.5))
        {
            diemtbSV = 5;
        }    
        if((tinhdiemtbSV >= 0.5) && (tinhdiemtbSV < 0.6))
        {
            diemtbSV = 6;
        }   
        if((tinhdiemtbSV >= 0.6) && (tinhdiemtbSV < 0.7))
        {
            diemtbSV = 7;
        }    
        if((tinhdiemtbSV >= 0.7) && (tinhdiemtbSV < 0.8))
        {
            diemtbSV = 8;
        }   
        if((tinhdiemtbSV >= 0.8) && (tinhdiemtbSV < 0.9))
        {
            diemtbSV = 9;
        }    
        if(tinhdiemtbSV >= 0.9)
        {
            diemtbSV = 10;
        }    

        var diemtbTT = 0;
        var tinhdiemtbTT = parseFloat(txtHKnayTT.value) - parseFloat(txtHKtruocTT.value);

        if((tinhdiemtbTT >= 0.01) && (tinhdiemtbTT < 0.1))
        {
            diemtbTT = 1;
        }
        if((tinhdiemtbTT >= 0.1) && (tinhdiemtbTT < 0.2))
        {
            diemtbTT = 2;
        } 
        if((tinhdiemtbTT >= 0.2) && (tinhdiemtbTT < 0.3))
        {
            diemtbTT = 3;
        }    
        if((tinhdiemtbTT >= 0.3) && (tinhdiemtbTT < 0.4))
        {
            diemtbTT = 4;
        }    
        if((tinhdiemtbTT >= 0.4) && (tinhdiemtbTT < 0.5))
        {
            diemtbTT = 5;
        }    
        if((tinhdiemtbTT >= 0.5) && (tinhdiemtbTT < 0.6))
        {
            diemtbTT = 6;
        }   
        if((tinhdiemtbTT >= 0.6) && (tinhdiemtbTT < 0.7))
        {
            diemtbTT = 7;
        }    
        if((tinhdiemtbTT >= 0.7) && (tinhdiemtbTT < 0.8))
        {
            diemtbTT = 8;
        }   
        if((tinhdiemtbTT >= 0.8) && (tinhdiemtbTT < 0.9))
        {
            diemtbTT = 9;
        }    
        if(tinhdiemtbTT >= 0.9)
        {
            diemtbTT = 10;
        }    


        var tongmuc1_1SV = parseInt(diemHKnaySV) + parseInt(diemtbSV);

        var tongSV = parseInt(tongmuc1_1SV) + parseInt(txtSVMuc1_2.value) + parseInt(txtSVMuc1_3.value) + parseInt(txtSVMuc1_4.value) + parseInt(txtSVMuc2_1.value) + parseInt(txtSVMuc2_2.value) +
            parseInt(txtSVMuc2_3.value) + parseInt(txtSVMuc3_1.value) + parseInt(txtSVMuc3_2.value) + parseInt(txtSVMuc4_1.value) + parseInt(txtSVMuc4_2.value) + 
            parseInt(txtSVMuc4_3.value) + parseInt(txtSVMuc5_1.value) + parseInt(txtSVMuc5_2.value) + parseInt(txtSVMuc5_3.value) + parseInt(txtSVMuc6.value);

        var tongmuc1_1TT = parseInt(diemHKnayTT) + parseInt(diemtbTT);

        var tongTT = parseInt(tongmuc1_1TT) + parseInt(txtTTMuc1_2.value) + parseInt(txtTTMuc1_3.value) + parseInt(txtTTMuc1_4.value) + parseInt(txtTTMuc2_1.value) + parseInt(txtTTMuc2_2.value) +
            parseInt(txtTTMuc2_3.value) + parseInt(txtTTMuc3_1.value) + parseInt(txtTTMuc3_2.value) + parseInt(txtTTMuc4_1.value) + parseInt(txtTTMuc4_2.value) + 
            parseInt(txtTTMuc4_3.value) + parseInt(txtTTMuc5_1.value) + parseInt(txtTTMuc5_2.value) + parseInt(txtTTMuc5_3.value) + parseInt(txtTTMuc6.value);

        var ketquadiemSV = 0;
        if(tongSV >= 100)
            ketquadiemSV = 100;
        else
            ketquadiemSV = tongSV;

        var ketquadiemTT = 0;
        if(tongTT >= 100)
            ketquadiemTT = 100;
        else
            ketquadiemTT = tongTT;

        var xeploaiTT = "";
        if(ketquadiemTT < 35)
        {
            xeploaiTT = "Kém";
        }
        if(ketquadiemTT >= 35 && ketquadiemTT < 50)
        {
            xeploaiTT = "Yếu";
        }
        if(ketquadiemTT >= 50 && ketquadiemTT < 65)
        {
            xeploaiTT = "Trung bình";
        }
        if(ketquadiemTT >= 65 && ketquadiemTT < 80)
        {
            xeploaiTT = "Khá";
        }
        if(ketquadiemTT >= 80 && ketquadiemTT < 90)
        {
            xeploaiTT = "Tốt";
        }
        if(ketquadiemTT >= 90)
        {
            xeploaiTT = "Xuất sắc";
        }

        var xeploaiSV = "";
        if(ketquadiemSV < 35)
        {
            xeploaiSV = "Kém";
        }
        if(ketquadiemSV >= 35 && ketquadiemSV < 50)
        {
            xeploaiSV = "Yếu";
        }
        if(ketquadiemSV >= 50 && ketquadiemSV < 65)
        {
            xeploaiSV = "Trung bình";
        }
        if(ketquadiemSV >= 65 && ketquadiemSV < 80)
        {
            xeploaiSV = "Khá";
        }
        if(ketquadiemSV >= 80 && ketquadiemSV < 90)
        {
            xeploaiSV = "Tốt";
        }
        if(ketquadiemSV >= 90)
        {
            xeploaiSV = "Xuất sắc";
        }

        if (!isNaN(tongmuc1_1SV)){
            kqSVMuc1_1.innerHTML = tongmuc1_1SV;
        }

        if (!isNaN(tongmuc1_1TT)){
            kqTTMuc1_1.innerHTML = tongmuc1_1TT;
        }

        if (!isNaN(ketquadiemSV)){
            kqSV.innerHTML = ketquadiemSV;
            xlSV.innerHTML = xeploaiSV;
        }

        if (!isNaN(ketquadiemTT)){
            kqTT.innerHTML = ketquadiemTT;
            xlTT.innerHTML = xeploaiTT;
        }

    }
</script>
</html>
​
