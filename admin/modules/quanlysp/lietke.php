<?php
    $sql_lietke_sp = "SELECT * FROM b_sanpham , b_danhmuc where b_sanpham.id_danhmuc=b_danhmuc.id_danhmuc order by id_sanpham DESC";
    $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>
<p class="lk">Liệt Kê Sản Phẩm </p>

<table style="width:100%" border="1" style="border-collapse:collapse;" >
    <tr>
        <th>ID</th>
        <th>Tên sản phẩm </th>
        <td>hình ảnh</td>
        <td>giá sp</td>
        <td>số lượng</td>
        <td>Danh muc</td>
        <td>mã sp</td>
        <td>Tóm tắt</td>
        <td>Trạng thái</td>
        <th>Quản lý </th>
    </tr>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array( $query_lietke_sp)){
        $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tensanpham']?></td>
        <td><img src="modules/quanlysp//uploads/<?php echo $row['hinhanh']?>" width="150px"></td>
        <td><?php echo $row['giasp']?></td>
        <td><?php echo $row['soluong']?></td>
        <td><?php echo $row['tendanhmuc']?></td>
        <td><?php echo $row['masp']?></td>
        <td><?php echo $row['tomtat']?></td>
        <td><?php if( $row['tinhtrang']==1){
           echo 'kích hoạt';
        }else{
          echo 'ẩn';
        }
          ?>
          </td>
        <td><a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>">Xóa</a> | 
        <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham']?>">Sửa</a></td>
    </tr>
    <?php
    }
    ?>
</table>

<style>
  /* Table style */
table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

/* Table header style */
th {
  background-color: #f2f2f2;
  font-weight: bold;
  text-align: left;
  padding: 8px;
}

/* Table row style */
td {
  padding: 8px;
}

/* Alternating row colors */
tr:nth-child(even) {
  background-color: #f9f9f9;
}

/* Link style */
a {
  text-decoration: none;
  color: #0366d6;
}

a:hover {
  text-decoration: underline;
}

</style>


















