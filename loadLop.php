<?php 
     $kn = mysqli_connect("localhost", "root", "", "sotay") or die("chưa kết nối");
     $key = $_POST['khoa'];
     $sql1 = "select * from lop where MaKhoaHoc = '".$key."'";
     $kq1 = mysqli_query($kn, $sql1);
     while($row = mysqli_fetch_array($kq1))
    {
?>
<option value="<?php echo htmlspecialchars($row['MaLop']) ?>"><?php echo $row['MaLop'] .' - '. $row['TenLop'] ?></option>   
<?php
    }
?>