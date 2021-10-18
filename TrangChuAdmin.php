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

        <div class="col-sm-10" style="text-align: center; margin: 45px 0px;">
            <img style="height:400px; width: auto;" src="image/logo1.png" alt="">
        </div>
        
        <div class="col-sm-1">
        </div>
    </div>
</div>

</body>
</html>
​
