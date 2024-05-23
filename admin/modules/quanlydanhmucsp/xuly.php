<?php
include('../../config/config.php');

$tenloaisp =$_POST['tendanhmuc'];
$thutu=$_POST['thutu'];
if(isset($_POST['themdanhmuc'])){
    //them
    $sql_them="INSERT INTO  b_danhmuc(tendanhmuc,thutu) value ('".$tenloaisp."','".$tenloaisp."')";
    mysqli_query($mysqli,$sql_them);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
}else if(isset($_POST['suadanhmuc'])){
    $sql_update = "UPDATE b_danhmuc SET tendanhmuc='".$tenloaisp."' ,thutu= '".$thutu."' where id_danhmuc='$_GET[iddanhmuc]'";
    mysqli_query($mysqli,$sql_update);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
}else{
    $id=$_GET['iddanhmuc'];
    $sql_xoa= "delete from b_danhmuc where id_danhmuc='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
}
?>