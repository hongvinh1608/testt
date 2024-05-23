<?php
session_start();
if(!isset($_SESSION['dangnhap'])){
    header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
 <link rel="stylesheet" href="../css/styleadmin.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- <h3 class="title_admin">WELLCOME TO ADMIN</h3> -->
    <div class="wrapper">
    <div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>ADMIN : Trung Hiếu</h4>
    <nav class="nav nav-pills nav-stacked">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh Mục sản phẩm</a></li>
        <li><a href="index.php?action=quanlysp&query=them">Quản lý sản phẩm</a></li>
        <li class="dx" >
        <?php
        include("modules/header.php")
        ?>
        </li> 
      </nav><br>
    <?php
        include("config/config.php");
        // include("modules/header.php");
        // include("modules/menu.php");
        include("modules/main.php");
        include("modules/footer.php");
    ?>
    </div>
    </div>
    </div>   
</body>
</html>
<style>
  .dx{
    padding: 10px 0px;
   
  }
</style>