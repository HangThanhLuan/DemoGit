<?php 
    require 'site.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Đăng ký thời gian chấm điểm rèn luyện</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style/style-footer.css">
  <link rel="stylesheet" href="style/style-VanBan.css">
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
    .bangthongtin, th, .cot{
        /* border:1px solid #ccc; */
    }
    .bangthongtin{
        /* border-collapse:collapse; */
        width: auto;
    }
  </style>
</head>

<?php
    $cboNamHoc = array_key_exists('cboNamHoc', $_POST) ?  $_POST['cboNamHoc']: null;
    $cboHocKy = array_key_exists('cboHocKy', $_POST) ?  $_POST['cboHocKy']: null;
    $dateNgayBatDau = array_key_exists('dateNgayBatDau', $_POST) ?  $_POST['dateNgayBatDau']: null;
    $dateNgayKetThuc = array_key_exists('dateNgayKetThuc', $_POST) ?  $_POST['dateNgayKetThuc']: null;
    $txtTimKiem = array_key_exists('txtTimKiem', $_POST) ?  $_POST['txtTimKiem']: null;
    $txtNamHoc = array_key_exists('txtNamHoc', $_POST) ?  $_POST['txtNamHoc']: null;
    $txtHocKy = array_key_exists('txtHocKy', $_POST) ?  $_POST['txtHocKy']: null;
    $dateNgayBatDau1 = array_key_exists('dateNgayBatDau1', $_POST) ?  $_POST['dateNgayBatDau1']: null;
    $dateNgayKetThuc1 = array_key_exists('dateNgayKetThuc1', $_POST) ?  $_POST['dateNgayKetThuc1']: null;
    $txtNamHoc1 = array_key_exists('txtNamHoc1', $_POST) ?  $_POST['txtNamHoc1']: null;
    $txtHocKy1 = array_key_exists('txtHocKy1', $_POST) ?  $_POST['txtHocKy1']: null;
    $dateNgayBatDau2 = array_key_exists('dateNgayBatDau2', $_POST) ?  $_POST['dateNgayBatDau2']: null;
    $dateNgayKetThuc2 = array_key_exists('dateNgayKetThuc2', $_POST) ?  $_POST['dateNgayKetThuc2']: null;

        function loadRL()
        {
            $kn = mysqli_connect("localhost", "root", "", "sotay") or die ("chưa kết nối");
            $sqlRenLuyen = "select * from dangkydiemrenluyen ORDER BY NgayBatDau DESC";
            $kqRenLuyen = mysqli_query($kn, $sqlRenLuyen) or die ("lỗi truy vấn"); 
            $stt = 0;
            while($rowRenLuyen = mysqli_fetch_array($kqRenLuyen))
            {
                $stt = $stt + 1;
                $NamHoc = $rowRenLuyen['NamHoc'];
                $HocKy = $rowRenLuyen['HocKy'];
                $NgayBatDau = $rowRenLuyen['NgayBatDau'];
                $NgayKetThuc = $rowRenLuyen['NgayKetThuc'];
                echo"
                <tr class='hang1'>
                    <td class='cot' style='text-align: center; vertical-align: inherit;'>".$stt."</td>
                    <td class='cot' style='text-align: center; vertical-align: inherit;'>".$rowRenLuyen['NamHoc']."</td>
                    <td class='cot' style='text-align: center; vertical-align: inherit;'>".$rowRenLuyen['HocKy']."</td>
                    <td class='cot' style='text-align: center; vertical-align: inherit;'>".$rowRenLuyen['NgayBatDau']."</td>
                    <td class='cot' style='text-align: center; vertical-align: inherit;'>".$rowRenLuyen['NgayKetThuc']."</td>
                    <td class='cot' style='text-align: center; vertical-align: inherit;'><a class='btn btn-link editbtn' data-toggle='modal' data-target='#editModal' style='margin: 0 0;'>Chỉnh sửa</a></td>
                    <td class='cot' style='text-align: center; vertical-align: inherit;'><a class='btn btn-link xoabtn' data-toggle='modal' data-target='#xoaModal' style='margin: 0 0;'>Xóa đăng ký</a></td>
                </tr>";
            }
        }

        function themRl($cboHocKy, $cboNamHoc, $dateNgayBatDau, $dateNgayKetThuc)
        {
            $kn = mysqli_connect("localhost", "root", "", "sotay") or die ("chưa kết nối");
            $sqlRenLuyen = "select * from dangkydiemrenluyen where NamHoc = '$cboNamHoc' and HocKy = '$cboHocKy'  ORDER BY NgayBatDau DESC";
            $kqRenLuyen = mysqli_query($kn, $sqlRenLuyen) or die ("lỗi truy vấn");

            if($rowRenLuyen = mysqli_fetch_array($kqRenLuyen))
            {
                $NamHoc_1 = $rowRenLuyen['NamHoc'];
                $HocKy_1 = $rowRenLuyen['HocKy'];
                $NgayBatDau_1 = $rowRenLuyen['NgayBatDau'];
                $NgayKetThuc_1 = $rowRenLuyen['NgayKetThuc'];

                echo '<script>alert("Năm học: '.$NamHoc_1.' và học kỳ: '.$HocKy_1.' và ngày bắt đầu: '.$NgayBatDau_1.' và ngày kết thúc: '.$NgayKetThuc_1.' đã có trong hệ thống!");</script>';
            }
            else
            {
                if($cboHocKy == "" or $cboNamHoc == "" or $dateNgayKetThuc == "" or $dateNgayBatDau == "")
                {
                    echo '<script>alert("Không được bỏ trống thông tin");</script>';
                }  
                else
                {
                    $kn = mysqli_connect("localhost", "root", "", "sotay")or die("chưa kết nối");
                    $sql = "insert into dangkydiemrenluyen (NamHoc, HocKy, NgayBatDau, NgayKetThuc)
                    values ('$cboNamHoc', '$cboHocKy', '$dateNgayBatDau', '$dateNgayKetThuc')";
                    //Thực hiện câu lệnh truy vấn
                    $kq = mysqli_query($kn,$sql);
                    echo '<script>alert("Thêm thông tin đăng ký thời gian chấm điểm rèn luyện thành công!");</script>';
                }
                
            }
        }

        function CapNhatRL($txtNamHoc, $txtHocKy, $dateNgayBatDau1, $dateNgayKetThuc1)
        {
            $kn = mysqli_connect("localhost", "root", "", "sotay") or die ("chưa kết nối");
            $sql1= "update dangkydiemrenluyen set NgayBatDau =  '".$dateNgayBatDau1."', NgayKetThuc = '".$dateNgayKetThuc1."' where NamHoc = '".$txtNamHoc."' and HocKy = '".$txtHocKy."'";
            $kq1 = mysqli_query($kn, $sql1) or die ("lỗi truy vấn");
           
            echo "<script>alert('Cập nhật thành công');</script>";
        }

        function XoaRL($txtNamHoc1, $txtHocKy1, $dateNgayBatDau2, $dateNgayKetThuc2)
        {
            $kn = mysqli_connect("localhost", "root", "", "sotay") or die ("chưa kết nối");
            $sql1="delete from dangkydiemrenluyen where NamHoc = '".$txtNamHoc1."' and HocKy = '".$txtHocKy1."' and NgayBatDau = '".$dateNgayBatDau2."' and NgayKetThuc = '".$dateNgayKetThuc2."'";
            $kq1=mysqli_query($kn, $sql1) or die ("lỗi truy vấn");

            echo "<script>alert('Xóa thành công');</script>";
        }
        
        function timRL($txtTimKiem)
        {
            $kn = mysqli_connect("localhost", "root", "", "sotay") or die ("chưa kết nối");
            $sqlRenLuyen1 = "select * from dangkydiemrenluyen where (NamHoc like '%$txtTimKiem%' or NamHoc like '%$txtTimKiem%' or NgayBatDau like '%$txtTimKiem%' or NgayKetThuc like '%$txtTimKiem%') ORDER BY NgayBatDau DESC";
            $kqRenLuyen1 = mysqli_query($kn, $sqlRenLuyen1) or die ("lỗi truy vấn");
            $stt = 0;
            while($rowRenLuyen1 = mysqli_fetch_array($kqRenLuyen1))
            {
                $stt = $stt + 1;
                $NamHoc = $rowRenLuyen1['NamHoc'];
                $HocKy = $rowRenLuyen1['HocKy'];
                $NgayBatDau = $rowRenLuyen1['NgayBatDau'];
                $NgayKetThuc = $rowRenLuyen1['NgayKetThuc'];
                echo"
                <tr class='hang1'>
                    <td class='cot' style='text-align: center; vertical-align: inherit;'>".$stt."</td>
                    <td class='cot' style='text-align: center; vertical-align: inherit;'>".$rowRenLuyen1['NamHoc']."</td>
                    <td class='cot' style='text-align: center; vertical-align: inherit;'>".$rowRenLuyen1['HocKy']."</td>
                    <td class='cot' style='text-align: center; vertical-align: inherit;'>".$rowRenLuyen1['NgayBatDau']."</td>
                    <td class='cot' style='text-align: center; vertical-align: inherit;'>".$rowRenLuyen1['NgayKetThuc']."</td>
                    <td class='cot' style='text-align: center; vertical-align: inherit;'><a class='btn btn-link editbtn' data-toggle='modal' data-target='#editModal' style='margin: 0 0;'>Chỉnh sửa</a></td>
                    <td class='cot' style='text-align: center; vertical-align: inherit;'><a class='btn btn-link xoabtn' data-toggle='modal' data-target='#xoaModal' style='margin: 0 0;'>Xóa đăng ký</a></td>
                </tr>";
            }
        }
?>

<body>

<!-- top đầu trang -->
<div class="jumbotron text-center" style="margin-bottom:0;  padding: 20px;">

    <?php load_top(); ?>

</div>

<!-- menu của trang / menu user 1 -->
<?php load_menu_admin_1(); ?>

<!-- thân của trang -->
<div class="container-fluid" style="margin-top:30px;">
    <div class="row">
        <div class="col-sm-1"></div>

        <div class="col-sm-10">
            <form action="" method="POST">
                <div class="container">
                    <h4 style="text-align: center">ĐĂNG KÝ THỜI GIAN CHẤM ĐIỂM RÈN LUYỆN</h4>
                    <hr>
                    <div>           
                        <div class="row">
                            <div class="col-sm-7" style="justify-content: center;display: flex;">
                                <input class="form-control" type="text" id="myInput" name="txtTimKiem" placeholder="Nhập nội dung cần cần tìm" autocomplete="off">
                            </div>
                            <div class="col-sm-5" style="justify-content: center;display: flex;">
                                <button class="btn btn-primary" type="submit" name="btnTimKiem" >Tìm kiếm</button>
                                <button class="btn btn-primary" type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Thêm mới</button>
                                <button class="btn btn-primary" type="submit" name="btnLamMoi" >Làm mới</button>
                            </div>
                        </div>  

                        <!-- Gọi modal thêm  -->
                        <div class="modal fade" id="addModal">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Tạo đăng ký thời gian chấm điểm rèn luyện</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-6" style="justify-content: center;display: block;">
                                            <p>Chọn năm học</p>
                                            <select name="cboNamHoc" class="form-control" id="cboNamHoc">
                                                    <option value="" selected="selected">--Chọn năm học--</option>
                                                    <?php 
                                                        $date = getdate();
                                                        $nammoi = $date['year'] + 3;
                                                        $namcu = $date['year'] - 4;
                                                        while($namcu < $nammoi)
                                                        {
                                                            $nam1 = ($namcu)."-".($namcu + 1);
                                                            echo "<option value='$nam1'>$nam1</option>";
                                                            $namcu++;
                                                        }
                                                    ?>
                                                </select>
                                        </div>
                                        <div class="col-sm-6" style="justify-content: center;display: block;">
                                            <p>Chọn học kỳ</p>
                                            <select name="cboHocKy" class="form-control" id="cboHocKy">
                                                <option value="" selected="selected">--Chọn học kỳ--</option>
                                                <option value="1">Học kỳ 1</option>
                                                <option value="2">Học kỳ 2</option>
                                            </select>
                                        </div>
                                    </div>  

                                    <div class="row">
                                        <div class="col-sm-6" style="justify-content: center;display: block;">
                                            <p>Chọn ngày bắt đầu</p>
                                            <input type="date" class="form-control" name="dateNgayBatDau">  
                                        </div>
                                        <div class="col-sm-6" style="justify-content: center;display: block;">
                                            <p>Chọn ngày kết thúc</p>
                                            <input type="date" class="form-control" name="dateNgayKetThuc">
                                        </div>
                                    </div>  
                                </div>
                                
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit" name="btnThemMoi">Thêm mới</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                        <!-- end modal -->

                        <!-- The Modal cập nhật điểm -->
                        <div class="modal fade" id="editModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                
                                    <div class="modal-header">
                                        <div>
                                            <h4 class="modal-title" style="text-align: left;">Cập nhật thời gian đăng ký chấm điểm rèn luyện</h4>
                                        </div>
                                        
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                
                                    <div class="modal-body">
                                        <div>
                                            <div class="row">
                                                <div class="col-sm-6" style="justify-content: center;display: block;">
                                                    <p>Chọn năm học</p>
                                                    <input type="text" class="form-control" id="namhoc" name="txtNamHoc" style="font-size: 18px; pointer-events: none;" >
                                                </div>
                                                <div class="col-sm-6" style="justify-content: center;display: block;">
                                                    <p>Chọn học kỳ</p>
                                                    <input type="text" class="form-control" id="hocky" name="txtHocKy" style="font-size: 18px; pointer-events: none;" >
                                                </div>
                                            </div>  

                                            <div class="row">
                                                <div class="col-sm-6" style="justify-content: center;display: block;">
                                                    <p>Chọn ngày bắt đầu</p>
                                                    <input type="date" class="form-control" name="dateNgayBatDau1" id="ngaybatdau">  
                                                </div>
                                                <div class="col-sm-6" style="justify-content: center;display: block;">
                                                    <p>Chọn ngày kết thúc</p>
                                                    <input type="date" class="form-control" name="dateNgayKetThuc1" id="ngayketthuc">
                                                </div>
                                            </div>  
                                            
                                            <br>
                                            <button type="submit" class="btn btn-primary btn-block" id="btneditDK" name="btneditDK" value="btneditDK" style="margin: 0 0;">Cập nhật</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->

                        <!-- The Modal xóa -->
                        <div class="modal fade" id="xoaModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                
                                    <div class="modal-header">
                                        <div>
                                            <h4 class="modal-title" style="text-align: left;">Xóa thời gian đăng ký chấm điểm rèn luyện</h4>
                                        </div>
                                        
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                
                                    <div class="modal-body">
                                        <div>
                                            <div class="row">
                                                <div class="col-sm-6" style="justify-content: center;display: block;">
                                                    <p>Chọn năm học</p>
                                                    <input type="text" class="form-control" id="namhoc1" name="txtNamHoc1" style="font-size: 18px; pointer-events: none;" >
                                                </div>
                                                <div class="col-sm-6" style="justify-content: center;display: block;">
                                                    <p>Chọn học kỳ</p>
                                                    <input type="text" class="form-control" id="hocky1" name="txtHocKy1" style="font-size: 18px; pointer-events: none;" >
                                                </div>
                                            </div>  

                                            <div class="row">
                                                <div class="col-sm-6" style="justify-content: center;display: block;">
                                                    <p>Chọn ngày bắt đầu</p>
                                                    <input type="date" class="form-control" name="dateNgayBatDau2" id="ngaybatdau1" style="font-size: 18px; pointer-events: none;">  
                                                </div>
                                                <div class="col-sm-6" style="justify-content: center;display: block;">
                                                    <p>Chọn ngày kết thúc</p>
                                                    <input type="date" class="form-control" name="dateNgayKetThuc2" id="ngayketthuc1" style="font-size: 18px; pointer-events: none;">
                                                </div>
                                            </div>  
                                            <h4>Bạn chắc chắn muốn xóa thông tin này không?</h4>
                                        </div>
                                    </div>
                                    
                                     <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" type="submit" name="btnXoa">Xóa thông tin</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->
                    </div>
                    <div style="width: 100%">
                    <br>
                        <div id="tbsv3">
                            <table class="table table-hover table-striped table-responsive-xl" style="width: 100%; text-align: center; vertical-align: inherit;" id="bangthongtin">
                                <thead>
                                    <tr class="hang1">
                                        <th class="textDS">STT</th>
                                        <th class="textDS">Năm học</th>
                                        <th class="textDS">Hoc kỳ</th>
                                        <th class="textDS">Ngày bắt đầu</th>
                                        <th class="textDS">Ngày kết thúc</th>
                                        <th></th>
                                        <th></th>   
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <?php 
                                        if($_POST)
                                        {
                                            if(isset($_POST['btnThemMoi']) and $_SERVER['REQUEST_METHOD'] == "POST"){
                                                themRl($cboHocKy, $cboNamHoc, $dateNgayBatDau, $dateNgayKetThuc);
                                                loadRL();
                                            }
                                            if(isset($_POST['btnLamMoi']) and $_SERVER['REQUEST_METHOD'] == "POST"){
                                                loadRL();
                                            }
                                            if(isset($_POST['btneditDK']) and $_SERVER['REQUEST_METHOD'] == "POST"){
                                                CapNhatRL($txtNamHoc, $txtHocKy, $dateNgayBatDau1, $dateNgayKetThuc1);
                                                loadRL();
                                            }
                                            if(isset($_POST['btnTimKiem']) and $_SERVER['REQUEST_METHOD'] == "POST"){
                                                timRL($txtTimKiem);
                                            }
                                            if(isset($_POST['btnXoa']) and $_SERVER['REQUEST_METHOD'] == "POST"){
                                                XoaRL($txtNamHoc1, $txtHocKy1, $dateNgayBatDau2, $dateNgayKetThuc2);
                                                loadRL();
                                            }
                                        }
                                        else
                                        {
                                            loadRL();
                                        }
                                    ?>
                                </tbody>
                            </table>
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
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        });
    </script> -->

    <script>
        // Gọi modal cập nhật 
        $(document).ready(function () {
            $('.editbtn').on('click', function () {
                $('#editModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#namhoc').val(data[1]);
                $('#hocky').val(data[2]);
                $('#ngaybatdau').val(data[3]);
                $('#ngayketthuc').val(data[4]);
            });
        });

        // Gọi modal xóa
        $(document).ready(function () {
            $('.xoabtn').on('click', function () {
                $('#xoaModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#namhoc1').val(data[1]);
                $('#hocky1').val(data[2]);
                $('#ngaybatdau1').val(data[3]);
                $('#ngayketthuc1').val(data[4]);
            });
        });
    </script>
</body>
</html>
​
