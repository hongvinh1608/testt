<h2>Chi tiết sản phẩm</h2>
<?php
$sql_chitiet="select*from b_sanpham,b_danhmuc  where b_sanpham.id_danhmuc =b_danhmuc.id_danhmuc AND b_sanpham.
id_sanpham='$_GET[id]'LIMIT 1";
$query_chitiet=mysqli_query($mysqli,$sql_chitiet);
while($row_chitiet= mysqli_fetch_array($query_chitiet)){
    ?>
 <div class="wrapper_chitiet">
    <div class="hinhanh_sanpham">
        <img src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
    </div>
    <form method="post" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
    <div class="chitiet_sanpham">
    <h3>Tên sản phẩm : <?php echo  $row_chitiet['tensanpham'] ?></h3>
    <p>Mã sản phẩm: <?php echo  $row_chitiet['masp'] ?></p>
    <p>Giá sản phẩm <?php echo number_format($row_chitiet['giasp'],0,',','.').'vnd'?></p>
    <p>Số lượng: <?php echo  $row_chitiet['soluong'] ?></p>
    <p>Danh mục:<?php echo  $row_chitiet['tendanhmuc'] ?></p>
    <p><input type="submit" name="themgiohang" value="Thêm giỏ hàng"></p>
    </div>
    </form>
 </div>
 <?php
}
?>

