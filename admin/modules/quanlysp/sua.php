<?php
    $sql_sua_sp = "SELECT * FROM b_sanpham where id_sanpham = '$_GET[idsanpham]' LIMIT 1";
    $query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>
<p>Sửa sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse";>
<?php 
while($row=mysqli_fetch_array($query_sua_sp)){
?>
<form method="post" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>" enctype="multipart/form-data"> 
  <tr>
    <td>Tên sản phẩm</td>
    <td><input type="text" value="<?php echo $row['tensanpham']?>" name="tensanpham"></td>
  </tr>
  <tr>
    <td>Mã sp</td>
    <td><input type="text"value="<?php echo $row['masp']?>" name="masp"></td>
  </tr> 
  <tr>
    <td>giá sp</td>
    <td><input type="text" value="<?php echo $row['giasp']?>" name="giasp"></td>
  </tr> 
  <tr>
    <td>Số lượng</td>
    <td><input type="text" value="<?php echo $row['soluong']?>" name="soluong"></td>
  </tr> 
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" value="<?php echo $row['hinhanh']?>" name="hinhanh">
   <img src="modules/quanlysp//uploads/<?php echo $row['hinhanh']?>" width="150px">
  </td>
  </tr> 
  <tr>
    <td>tóm tắt</td>
    <td><textarea rows="10"  name="tomtat" style="resize: none"><?php echo $row['tomtat']?></textarea></textarea></td>
  </tr> 
  <tr>
    <td>Nội dung</td>
    <td><textarea  rows="10"  name="noidung" style="resize: none"><?php echo $row['noidung']?></textarea></td>
  </tr>
  <tr>
    <td>Danh mục sản phẩm</td>
    <td>
      <select name="danhmuc" >
        <?php
        $sql_danhmuc="select * from b_danhmuc  order by id_danhmuc desc ";
        $query_danhmuc=mysqli_query($mysqli,$sql_danhmuc);
        while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
          if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
          ?>
        <option selected value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?>
      </option>
        <?php
          }else{
            ?>
            <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
            <?php
          }
        }
        ?>
      </select>
    </td>
  </tr> 
  <tr>
    <td>Tình Trạng</td>
    <td>  
      <select name="tinhtrang" >
        <?php
        if($row['tinhtrang']==1){
        ?>
     <option value="1" selected>Kích hoạt</option>
     <option value="0">Ẩn</option>
     <?php
        }else{
        ?>
    <option value="1" >Kích hoạt</option>
     <option value="0" selected>Ẩn </option>
        <?php
        }
        ?>
    </select>
    </td>
  </tr> 
  <tr>
    <td colspan="2"><input type="submit" name="suasanpham" value="Sửa  sản phẩm"></td>
  </tr>
  <?php
}
?>
  </form>
</table>



<style>
  /* Form styling */
form {
  margin-bottom: 20px;
}

input[type="text"],
select,
textarea {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type="submit"] {
  padding: 10px 20px;
  background-color: #4caf50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

/* Table styling */
table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

th, td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

th {
  background-color: #f2f2f2;
}

tr:nth-child(even) {
  background-color: #f9f9f9;
}

/* Link styling */
a {
  text-decoration: none;
  color: #0366d6;
}

a:hover {
  text-decoration: underline;
}

</style>