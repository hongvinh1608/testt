<p class="lk">Thêm Sản Phẩm </p>
<table border="1" width="100%" style="border-collapse: collapse";>
<form method="post" action="modules/quanlysp/xuly.php" enctype="multipart/form-data"> 
  <tr>
    <td>Tên sản phẩm</td>
    <td><input type="text" name="tensanpham"></td>
  </tr>
  <tr>
    <td>Mã sp</td>
    <td><input type="text" name="masp"></td>
  </tr> 
  <tr>
    <td>giá sp</td>
    <td><input type="text" name="giasp"></td>
  </tr> 
  <tr>
    <td>Số lượng</td>
    <td><input type="text" name="soluong"></td>
  </tr> 
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh"></td>
  </tr> 
  <tr>
    <td>tóm tắt</td>
    <td><textarea rows="10"  name="tomtat" style="resize: none;"></textarea></td>
  </tr> 
  <tr>
    <td>Nội dung</td>
    <td><textarea rows rows="10"  name="noidung" style="resize: none;"></textarea></td>
  </tr> 
  <tr>
    <td>Danh mục sản phẩm</td>
    <td>
      <select name="danhmuc" >
        <?php
        $sql_danhmuc="select * from b_danhmuc  order by id_danhmuc desc ";
        $query_danhmuc=mysqli_query($mysqli,$sql_danhmuc);
        while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
          ?>
        <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
        <?php
        }
        ?>
      </select>
    </td>
  </tr> 
  <tr>
    <td>Tình Trạng</td>
    <td>  
      <select name="tinhtrang" >
     <option value="1" >Kích hoạt</option>
     <option value="0">Ẩn</option>
    </select>
    </td>
  </tr> 
  <tr>
    <td colspan="2"><input type="submit" name="themsanpham" value="Thêm  sản phẩm"></td>
  </tr>
  </form>
</table>


  <style>
    .lk{
        font-size: 1.5em;
        font-weight: bold;
        color: blue;
    }
table {
  border-collapse: collapse;
  width: auto;
  border: 1px solid #000; 
}

input[type="text"],
textarea {
  width: 100%; 
  padding: 8px; 
  box-sizing: border-box;
  margin-bottom: 10px; 
}

input[type="submit"] {
  padding: 10px 20px; 
  background-color: #4CAF50; 
  color: white;
  border: none;
  border-radius: 4px; 
  cursor: pointer; 
}

td:first-child {
  font-weight: bold; 
}
</style>