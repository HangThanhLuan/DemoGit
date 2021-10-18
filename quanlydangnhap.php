<?php 
    require 'site.php';
    require('Classes/PHPExcel.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý đăng nhập</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="style/style-footer.css">
    <link rel="stylesheet" href="style/style-VanBan.css">
    <!-- <link rel="stylesheet" href="style/style-DangNhap.css"> -->
    <link rel="stylesheet" href="style/style-Hoatdong.css">
    <style>
    .btn{
        margin: 15px 15px;
    }
    .form-control{
        margin: 15px 0;
    }
    #tbsv3{
    /* border:5px solid none; */
    max-width: 1200px;
    width: 100%;
    overflow:auto;
    overflow:scroll;
    height:700px;
    margin: 10px auto;
    }
    </style>
</head>
<body>

<?php
    if(isset($_POST['btnThemSV']))
    {
        $file = $_FILES['txtThemSV']['tmp_name'];
        
        $objReader = PHPExcel_IOFactory::createReaderForFile($file);
        $objReader->setLoadSheetsOnly('sinhvien');

        $objExcel = $objReader->load($file);
        $sheetData = $objExcel->getActiveSheet()->toArray('null', true, true, true);

        $highestRow = $objExcel->setActiveSheetIndex()->getHighestRow();
        
        for($row = 2; $row <= $highestRow; $row++)
        {
            $masv = $sheetData[$row]['A'];
            $hoten = $sheetData[$row]['B'];
            $ngaysinh = $sheetData[$row]['C'];
            $gioitinh = $sheetData[$row]['D'];
            $sdt = $sheetData[$row]['E'];
            $email = $sheetData[$row]['F'];
            $malop = $sheetData[$row]['G'];
            $machuyennganh = $sheetData[$row]['H'];
            $chucvu = $sheetData[$row]['I'];
            $tinhtranghoc = $sheetData[$row]['J'];
            $matkhau = $sheetData[$row]['K'];
            $quyen = $sheetData[$row]['L'];

            $kn = mysqli_connect("localhost", "root", "", "sotay") or die ("chưa kết nối");
            $sqlThem = "insert into sinhvien (MaSinhVien, HoTen, NgaySinh, GioiTinh, SDT, Email, MaLop, MaChuyenNganh, ChucVu, TinhTrangHoc, MatKhau, Quyen)
                        values ('$masv', '$hoten', '$ngaysinh', '$gioitinh', '$sdt', '$email', '$malop', '$machuyennganh', '$chucvu', '$tinhtranghoc', '$matkhau', '$quyen')";
            $kq2=mysqli_query($kn, $sqlThem) or die("lỗi truy vấn");
            echo "<script>alert('Thêm thành công');</script>";
        }
    }

    if(isset($_POST['btnCapNhatSV']))
    {
        $file = $_FILES['txtCapNhatSV']['tmp_name'];
        
        $objReader = PHPExcel_IOFactory::createReaderForFile($file);
        $objReader->setLoadSheetsOnly('sinhvien');

        $objExcel = $objReader->load($file);
        $sheetData = $objExcel->getActiveSheet()->toArray('null', true, true, true);

        $highestRow = $objExcel->setActiveSheetIndex()->getHighestRow();
        
        for($row = 2; $row <= $highestRow; $row++)
        {
            $masv = $sheetData[$row]['A'];
            $hoten = $sheetData[$row]['B'];
            $ngaysinh = $sheetData[$row]['C'];
            $gioitinh = $sheetData[$row]['D'];
            $sdt = $sheetData[$row]['E'];
            $email = $sheetData[$row]['F'];
            $malop = $sheetData[$row]['G'];
            $machuyennganh = $sheetData[$row]['H'];
            $chucvu = $sheetData[$row]['I'];
            $tinhtranghoc = $sheetData[$row]['J'];
            $matkhau = $sheetData[$row]['K'];
            $quyen = $sheetData[$row]['L'];

            $kn = mysqli_connect("localhost", "root", "", "sotay") or die ("chưa kết nối");
            $sqlCapNhat = "update sinhvien set HoTen = '$hoten', 
                                            NgaySinh = '$ngaysinh', 
                                            GioiTinh = '$gioitinh', 
                                            SDT = '$sdt', 
                                            Email = '$email', 
                                            MaLop = '$malop', 
                                            MaChuyenNganh = '$machuyennganh', 
                                            ChucVu = '$chucvu', 
                                            TinhTrangHoc = '$tinhtranghoc', 
                                            MatKhau = '$matkhau', 
                                            Quyen = '$quyen'
                        where MaSinhVien = '$masv'";
            $kq2=mysqli_query($kn, $sqlCapNhat) or die("lỗi truy vấn");
            echo "<script>alert('Cập nhật thành công');</script>";
        }
    }

    if(isset($_POST['btnThemGV']))
    {
        $file = $_FILES['txtThemGV']['tmp_name'];
        
        $objReader = PHPExcel_IOFactory::createReaderForFile($file);
        $objReader->setLoadSheetsOnly('giangvien');

        $objExcel = $objReader->load($file);
        $sheetData = $objExcel->getActiveSheet()->toArray('null', true, true, true);

        $highestRow = $objExcel->setActiveSheetIndex()->getHighestRow();
        
        for($row = 2; $row <= $highestRow; $row++)
        {
            $magv = $sheetData[$row]['A'];
            $hoten = $sheetData[$row]['B'];
            $ngaysinh = $sheetData[$row]['C'];
            $gioitinh = $sheetData[$row]['D'];
            $sdt = $sheetData[$row]['E'];
            $email = $sheetData[$row]['F'];
            $matkhau = $sheetData[$row]['G'];
            $quyen = $sheetData[$row]['H'];

            $kn = mysqli_connect("localhost", "root", "", "sotay") or die ("chưa kết nối");
            $sqlThem = "insert into giangvien (MaSinhVien, HoTen, NgaySinh, GioiTinh, SDT, Email, MatKhau, Quyen)
                        values ('$magv', '$hoten', '$ngaysinh', '$gioitinh', '$sdt', '$email', '$matkhau', '$quyen')";
            $kq2=mysqli_query($kn, $sqlThem) or die("lỗi truy vấn");
            echo "<script>alert('Thêm thành công');</script>";
        }
    }

    if(isset($_POST['btnCapNhatGV']))
    {
        $file = $_FILES['txtCapNhatGV']['tmp_name'];
        
        $objReader = PHPExcel_IOFactory::createReaderForFile($file);
        $objReader->setLoadSheetsOnly('giangvien');

        $objExcel = $objReader->load($file);
        $sheetData = $objExcel->getActiveSheet()->toArray('null', true, true, true);

        $highestRow = $objExcel->setActiveSheetIndex()->getHighestRow();
        
        for($row = 2; $row <= $highestRow; $row++)
        {
            $magv = $sheetData[$row]['A'];
            $hoten = $sheetData[$row]['B'];
            $ngaysinh = $sheetData[$row]['C'];
            $gioitinh = $sheetData[$row]['D'];
            $sdt = $sheetData[$row]['E'];
            $email = $sheetData[$row]['F'];
            $matkhau = $sheetData[$row]['G'];
            $quyen = $sheetData[$row]['H'];

            $kn = mysqli_connect("localhost", "root", "", "sotay") or die ("chưa kết nối");
            $sqlCapNhat = "update giangvien set HoTen = '$hoten', 
                                            NgaySinh = '$ngaysinh', 
                                            GioiTinh = '$gioitinh', 
                                            SDT = '$sdt', 
                                            Email = '$email', 
                                            MatKhau = '$matkhau', 
                                            Quyen = '$quyen'
                        where MaGiangVien = '$magv'";
            $kq2=mysqli_query($kn, $sqlCapNhat) or die("lỗi truy vấn");
            echo "<script>alert('Cập nhật thành công');</script>";
        }
    }

    if(isset($_POST['btnXoaSV']))
    {
        $masv = $_POST['txtMaSV'];
        $kn = mysqli_connect("localhost", "root", "", "sotay") or die("chưa kết nối");
        $sql1 = "delete from sinhvien where MaSinhVien = '".$masv."'";
        $kq1 = mysqli_query($kn, $sql1);
        echo "<script>alert('Xóa thành công');</script>";
    }

    if(isset($_POST['btnXoaGV']))
    {
        $magv = $_POST['txtMaGV'];
        $kn = mysqli_connect("localhost", "root", "", "sotay") or die("chưa kết nối");
        $sql1 = "delete from giangvien where MaGiangVien = '".$magv."'";
        $kq1 = mysqli_query($kn, $sql1);
        echo "<script>alert('Xóa thành công');</script>";
    }

    if(isset($_POST['btnCapNhatThongTinSV']))
    {
        $masv1 = $_POST['txtmasv1'];
        $txtchucvu1 = $_POST['txtchucvu1'];
        $txtquyentruycap1 = $_POST['$txtquyentruycap1'];
        $txtmatkhau1 = $_POST['txtmatkhau1'];

        if($txtchucvu1 == "" or $txtquyentruycap1 == "")
        {
            echo "<script>alert('Vui lòng chọn thông tin chức vụ hoặc quyền truy cập');</script>";
        }
        else
        {
            $kn = mysqli_connect("localhost", "root", "", "sotay") or die("chưa kết nối");
            $sql1 = "update sinhvien set ChucVu = '$txtchucvu1', 
                                        MatKhau = '$txtmatkhau1', 
                                        Quyen = '$txtquyentruycap1'
                                        where MaSinhVien = '$masv1'";
            $kq1 = mysqli_query($kn, $sql1);
            echo "<script>alert('Cập nhật thông tin thành công');</script>";
        }
    }

    if(isset($_POST['btnCapNhatThongTinGV']))
    {
        $magv2 = $_POST['txtmagv2'];
        $txtquyentruycap2 = $_POST['$txtquyentruycap2'];
        $txtmatkhau2 = $_POST['txtmatkhau2'];

        if($txtchucvu1 == "" or $txtquyentruycap1 == "")
        {
            echo "<script>alert('Vui lòng chọn thông tin chức vụ hoặc quyền truy cập');</script>";
        }
        else
        {
            $kn = mysqli_connect("localhost", "root", "", "sotay") or die("chưa kết nối");
            $sql1 = "update giangvien set MatKhau = '$txtmatkhau2', 
                                        Quyen = '$txtquyentruycap2'
                                        where MaGiangVien = '$magv2'";
            $kq1 = mysqli_query($kn, $sql1);
            echo "<script>alert('Cập nhật thông tin thành công');</script>";
        }

        
    }

?>
  <!-- top đầu trang -->
<div class="jumbotron text-center" style="margin-bottom:0;  padding: 20px;">

<?php load_top(); ?>

</div>

<!-- menu của trang / menu user 1 -->
<?php load_menu_admin_1(); ?>

    <div class="container-fluid" style="margin-top:30px;">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <form action="" method="POST" enctype="multipart/form-data">
                    <h2 style="text-align: center">QUẢN LÝ TÀI KHOẢN ĐĂNG NHẬP</h2>
                    <hr>
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills" role="tablist" style="justify-content: center;">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#menu1">Tài khoản đăng nhập sinh viên</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu2">Tài khoản đăng nhập giảng viên</a>
                        </li>
                    </ul>
                    <br>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="menu1" class="container-fluid tab-pane active border border-primary"><br>
                            <div>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ThemSV">
                                    Thêm tài khoản đăng nhập
                                </button>

                                <!-- The Modal thêm sinh viên -->
                                <div class="modal fade" id="ThemSV">
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                    
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Thêm tài khoản đăng nhập sinh viên</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p>Vui lòng chọn tệp excel:</p>
                                            <input type="file" name="txtThemSV">
                                        </div>
                                        
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" name="btnThemSV">Thêm</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        
                                    </div>
                                    </div>
                                </div>
                                <!-- end modal -->

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CapNhatSV">
                                    Cập nhật tài khoản đăng nhập
                                </button>

                                <!-- The Modal thêm sinh viên -->
                                <div class="modal fade" id="CapNhatSV">
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                    
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Cập nhật tài khoản đăng nhập sinh viên</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p>Vui lòng chọn tệp excel:</p>
                                            <input type="file" name="txtCapNhatSV">
                                        </div>
                                        
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" name="btnCapNhatSV">Cập nhật</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        
                                    </div>
                                    </div>
                                </div>
                                <!-- end modal -->

                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table id="tbtaikhoanSV" class="table table-bordered table-hover" style="width:100%">
                                    <thead>
                                        <tr style="text-align: center">
                                            <th style="text-align: center; vertical-align: inherit;">Mã sinh viên</th>
                                            <th style="text-align: center; vertical-align: inherit;">Họ tên</th>
                                            <th style="text-align: center; vertical-align: inherit;">Ngày sinh</th>
                                            <th style="text-align: center; vertical-align: inherit;">Giới tính</th>
                                            <th style="text-align: center; vertical-align: inherit;">SĐT</th>
                                            <th style="text-align: center; vertical-align: inherit;">Email</th>
                                            <th style="text-align: center; vertical-align: inherit;">Tên lớp</th>
                                            <th style="text-align: center; vertical-align: inherit;">Chức vụ</th>
                                            <th style="text-align: center; vertical-align: inherit;">Tình trạng học</th>
                                            <th style="text-align: center; vertical-align: inherit;">Mật khẩu</th>
                                            <th style="text-align: center; vertical-align: inherit;">Quyền</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $kn = mysqli_connect("localhost", "root", "", "sotay")or die("chưa kết nối");
                                            $sql1 = "select * from sinhvien INNER JOIN lop ON sinhvien.MaLop = lop.MaLop";
                                            $kq1= mysqli_query($kn,$sql1);
                                            $stt=0;
                                            while($row = mysqli_fetch_array($kq1))
                                            {
                                        ?>
                                        <tr>
                                            <td style="text-align: center; vertical-align: inherit;"><p style="margin: 7px auto;"><?php echo $row['MaSinhVien']; ?></p</td>
                                            <td style="vertical-align: inherit;"><p style="margin: 7px auto;  width: 200px;"><?php echo $row['HoTen'];?></p</td>
                                            <td style="text-align: center; vertical-align: inherit;"><p style="margin: 7px auto; width: 100px;"><?php echo $row['NgaySinh'];?></p></td>
                                            <td style="text-align: center; vertical-align: inherit;"><p style="margin: 7px auto;"><?php echo $row['GioiTinh'];?></p></td>
                                            <td style="text-align: center; vertical-align: inherit;"><p style="margin: 7px auto;"><?php echo $row['SDT'];?></p></td>
                                            <td style="text-align: center; vertical-align: inherit;"><p style="margin: 7px auto;"><?php echo $row['Email'];?></p</td>
                                            <td style="vertical-align: inherit;"><p style="margin: 7px auto; width: 190px;"><?php echo $row['TenLop'];?></p</td>
                                            <td style="text-align: center; vertical-align: inherit;"><p style="margin: 7px auto; width: 80px;"><?php echo $row['ChucVu'];?></p</td>
                                            <td style="text-align: center; vertical-align: inherit;"><p style="margin: 7px auto; width: 100px;"><?php echo $row['TinhTrangHoc'];?></p</td>
                                            <td style="text-align: center; vertical-align: inherit;"><p style="margin: 7px auto; width: 80px;"><?php echo $row['MatKhau'];?></p</td>
                                            <td style="text-align: center; vertical-align: inherit;"><p style="margin: 7px auto;"><?php echo $row['Quyen'];?></p</td>
                                            <td style="text-align: center; vertical-align: inherit;">
                                                <button type="button" class="btn btn-link CapNhatThongTinSV" data-bs-toggle="modal" data-bs-target="#CapNhatThongTinSV">
                                                    <!-- <i class="fas fa-eye"></i> -->
                                                    Update
                                                </button>
                                            </td>
                                            <td style="text-align: center; vertical-align: inherit;">
                                                <button type="button" class="btn btn-link XoaSV" data-toggle="modal" data-target="#XoaSV">
                                                        <!-- <i class="fas fa-file-signature"></i> -->
                                                        Delete
                                                </button>
                                            </td>
                                        <?php } ?>
                                    </tbody>
                                </table>

                                <!-- The Modal cập nhật sinh viên -->
                                <div class="modal fade" id="CapNhatThongTinSV">
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                    
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                        <h4 class="modal-title">Cập nhật thông tin sinh viên</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p>Mã sinh viên:</p>
                                                    <input type="text" class="form-control" name="txtmasv1" id="masv1" placeholder="Mã sinh viên" style="pointer-events: none">
                                                </div>
                                                <div class="col-sm-6">
                                                    <p>Họ tên:</p>
                                                    <input type="text" class="form-control" name="txthoten1" id="hoten1" placeholder="Họ tên sinh viên" style="pointer-events: none">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p>Chức vụ:</p>
                                                    <select class="form-control" id="txtchucvu1" name="txtchucvu1">
                                                        <option value="" selected="selected">--Chọn chức vụ--</option>
                                                        <option value="Không có chức vụ">Không có chức vụ</option>
                                                        <option value="Lớp trưởng">Lớp trưởng</option>
                                                        <option value="Lớp phó học tập">Lớp phó học tập</option>
                                                        <option value="Lớp phó văn thể mỹ">Lớp phó văn thể mỹ</option>
                                                        <option value="Bí thư">Bí thư</option>
                                                        <option value="Phó bí thư">Phó bí thư</option>
                                                        <option value="Ủy viên chi đoàn">Ủy viên chi đoàn</option>
                                                        <option value="Chi hội trưởng">Chi hội trưởng</option>
                                                        <option value="Phó chi hội">Phó chi hội</option>
                                                        <option value="Ủy viên chi hội">Ủy viên chi đoàn</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p>Quyền truy cập:</p>
                                                    <select class="form-control" name="txtquyentruycap1" id="txtquyentruycap1">
                                                        <option value="" selected="selected">--Chọn quyền truy cập--</option>
                                                        <option value="0">Người dùng hệ thống</option>
                                                        <option value="1">Người quản lý thông tin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>Mật khẩu:</p>
                                                    <input type="text" class="form-control" name="txtmatkhau1" id="matkhau1" placeholder="Mật khẩu">
                                                </div>
                                            </div>

                                            <h5>Bạn có chắc chắn muốn cập nhật thông tin này?</h5>
                                        </div>
                                        
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" name="btnCapNhatThongTinSV">Cập nhật thông tin</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        
                                    </div>
                                    </div>
                                </div>
                                <!-- end modal -->

                                <!-- The Modal xóa sinh viên -->
                                <div class="modal fade" id="XoaSV">
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                    
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                        <h4 class="modal-title">Xóa thông tin sinh viên</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p>Mã đăng nhập</p>
                                            <input type="text" class="form-control" name="txtMaSV" id="masv" style="pointer-events: none">
                                            <p>Tên đăng nhập</p>
                                            <input type="text" class="form-control" id="hotensv" style="pointer-events: none">
                                            <br>
                                            <h5>Bạn có chắc chắn muốn xóa thông tin này?</h5>
                                        </div>
                                        
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" name="btnXoaSV">Xóa thông tin</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        
                                    </div>
                                    </div>
                                </div>
                                <!-- end modal -->

                            </div>
                            <br>
                        </div>

                        <div id="menu2" class="container-fluid tab-pane fade border border-primary"><br>
                            <div>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ThemGV">
                                    Thêm tài khoản đăng nhập
                                </button>

                                <!-- The Modal thêm sinh viên -->
                                <div class="modal fade" id="ThemGV">
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                    
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Thêm tài khoản đăng nhập giảng viên</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p>Vui lòng chọn tệp excel:</p>
                                            <input type="file" name="txtThemGV">
                                        </div>
                                        
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" name="btnThemGV">Thêm</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        
                                    </div>
                                    </div>
                                </div>
                                <!-- end modal -->

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CapNhatGV">
                                    Cập nhật tài khoản đăng nhập
                                </button>

                                <!-- The Modal thêm giảng viên -->
                                <div class="modal fade" id="CapNhatGV">
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                    
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Cập nhật tài khoản đăng nhập giảng viên</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p>Vui lòng chọn tệp excel:</p>
                                            <input type="file" name="txtCapNhatGV">
                                        </div>
                                        
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" name="btnCapNhatGV">Cập nhật</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        
                                    </div>
                                    </div>
                                </div>
                                <!-- end modal -->

                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table id="tbtaikhoanGV" class="table table-bordered table-hover" style="width:100%">
                                    <thead>
                                        <tr style="text-align: center">
                                            <th style="text-align: center; vertical-align: inherit;">Mã giảng viên</th>
                                            <th style="text-align: center; vertical-align: inherit;">Họ tên</th>
                                            <th style="text-align: center; vertical-align: inherit;">Ngày sinh</th>
                                            <th style="text-align: center; vertical-align: inherit;">Giới tính</th>
                                            <th style="text-align: center; vertical-align: inherit;">SĐT</th>
                                            <th style="text-align: center; vertical-align: inherit;">Email</th>
                                            <th style="text-align: center; vertical-align: inherit;">Mật khẩu</th>
                                            <th style="text-align: center; vertical-align: inherit;">Quyền</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $kn = mysqli_connect("localhost", "root", "", "sotay")or die("chưa kết nối");
                                            $sql1 = "select * from giangvien";
                                            $kq1= mysqli_query($kn,$sql1);
                                            $stt=0;
                                            while($row = mysqli_fetch_array($kq1))
                                            {
                                        ?>
                                        <tr>
                                            <td style="text-align: center; vertical-align: inherit;"><p style="margin: 7px auto;"><?php echo $row['MaGiangVien']; ?></p</td>
                                            <td style="vertical-align: inherit;"><p style="margin: 7px auto;  width: 200px;"><?php echo $row['HoTen'];?></p</td>
                                            <td style="text-align: center; vertical-align: inherit;"><p style="margin: 7px auto; width: 100px;"><?php echo $row['NgaySinh'];?></p></td>
                                            <td style="text-align: center; vertical-align: inherit;"><p style="margin: 7px auto;"><?php echo $row['GioiTinh'];?></p></td>
                                            <td style="text-align: center; vertical-align: inherit;"><p style="margin: 7px auto;"><?php echo $row['SDT'];?></p></td>
                                            <td style="text-align: center; vertical-align: inherit;"><p style="margin: 7px auto;"><?php echo $row['Email'];?></p</td>
                                            <td style="text-align: center; vertical-align: inherit;"><p style="margin: 7px auto; width: 80px;"><?php echo $row['MatKhau'];?></p</td>
                                            <td style="text-align: center; vertical-align: inherit;"><p style="margin: 7px auto;"><?php echo $row['Quyen'];?></p</td>
                                            <td style="text-align: center; vertical-align: inherit;">
                                                <button type="button" class="btn btn-link CapNhatThongTinGV" data-bs-toggle="modal" data-bs-target="#CapNhatThongTinGV">
                                                    <!-- <i class="fas fa-eye"></i> -->
                                                    Update
                                                </button>
                                            </td>
                                            <td style="text-align: center; vertical-align: inherit;">
                                                <button type="button" class="btn btn-link XoaGV" data-toggle="modal" data-target="#XoaGV">
                                                    <!-- <i class="fas fa-file-signature"></i> -->
                                                    Delete
                                                </button>
                                            </td>
                                        <?php } ?>
                                    </tbody>
                                </table>

                                 <!-- The Modal cập nhật giảng viên -->
                                 <div class="modal fade" id="CapNhatThongTinGV">
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                    
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                        <h4 class="modal-title">Cập nhật thông tin giảng viên</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p>Mã giảng viên:</p>
                                                    <input type="text" class="form-control" name="txtmagv2" id="masv2" placeholder="Mã sinh viên" style="pointer-events: none">
                                                </div>
                                                <div class="col-sm-6">
                                                    <p>Họ tên:</p>
                                                    <input type="text" class="form-control" name="txthoten2" id="hoten2" placeholder="Họ tên sinh viên" style="pointer-events: none">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p>Mật khẩu:</p>
                                                    <input type="text" class="form-control" name="txtmatkhau2" id="matkhau2" placeholder="Mật khẩu">
                                                </div>
                                                <div class="col-sm-6">
                                                    <p>Quyền truy cập:</p>
                                                    <select class="form-control" name="txtquyentruycap2" id="txtquyentruycap2">
                                                        <option value="" selected="selected">--Chọn quyền truy cập--</option>
                                                        <option value="0">Người dùng hệ thống</option>
                                                        <option value="1">Người quản lý thông tin</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <h5>Bạn có chắc chắn muốn cập nhật thông tin này?</h5>
                                        </div>
                                        
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" name="btnCapNhatThongTinGV">Cập nhật thông tin</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        
                                    </div>
                                    </div>
                                </div>
                                <!-- end modal -->

                                <!-- The Modal xóa sinh viên -->
                                <div class="modal fade" id="XoaGV">
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                    
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                        <h4 class="modal-title">Xóa thông tin giảng viên</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p>Mã đăng nhập</p>
                                            <input type="text" class="form-control" name="txtMaGV" id="magv" style="pointer-events: none">
                                            <p>Tên đăng nhập</p>
                                            <input type="text" class="form-control" id="hotengv" style="pointer-events: none">
                                            <br>
                                            <h5>Bạn có chắc chắn muốn xóa thông tin này?</h5>
                                        </div>
                                        
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" name="btnXoaGV">Xóa thông tin</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        
                                    </div>
                                    </div>
                                </div>
                                <!-- end modal -->


                            </div>
                            <br>
                        </div>
                    </div>
                    <br>
                    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
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

<script>
    $(document).ready(function() {
        $('#tbtaikhoanSV').DataTable();
    } );
    $(document).ready(function() {
        $('#tbtaikhoanGV').DataTable();
    } );
</script>

<script>
    // Gọi modal xóa sinh viên 
    $(document).ready(function () {
        $('.XoaSV').on('click', function () {
            $('#XoaSV').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#masv').val(data[0]);
            $('#hotensv').val(data[1]);
        });
    });

    // Gọi modal xóa giảng viên 
    $(document).ready(function () {
        $('.XoaGV').on('click', function () {
            $('#XoaGV').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#magv').val(data[0]);
            $('#hotengv').val(data[1]);
        });
    });

    // Gọi modal cập nhật sinh viên 
    $(document).ready(function () {
        $('.CapNhatThongTinSV').on('click', function () {
            $('#CapNhatThongTinSV').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#masv1').val(data[0]);
            $('#hoten1').val(data[1]);
            $('#sdt1').val(data[4]);
            $('#email1').val(data[5]);
            $('#txtchucvu1').val(data[7]);
            $('#tinhtranghoc1').val(data[8]);
            $('#matkhau1').val(data[9]);
            $('#txtquyentruycap1').val(data[10]);
        });
    });

    // Gọi modal cập nhật giảng viên 
    $(document).ready(function () {
        $('.CapNhatThongTinGV').on('click', function () {
            $('#CapNhatThongTinGV').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#magv2').val(data[0]);
            $('#hoten2').val(data[1]);
            $('#matkhau2').val(data[6]);
            $('#txtquyentruycap2').val(data[7]);
        });
    });
</script>