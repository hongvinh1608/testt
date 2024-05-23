<?php
    $sql_lietke_danhmucsp = "SELECT * FROM b_danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>
<p class="lk">Liệt Kê Danh Mục Sản Phẩm </p>

<table style="width:100%" border="1" style="border-collapse:collapse;" >
    <tr>
        <th>ID</th>
        <th>Tên danh mục </th>
        <th>Quản lý </th>
    </tr>
    <?php
    $i = 0;
    //mysqli_fetch_array lấy dữ liệu mysql
    while($row = mysqli_fetch_array( $query_lietke_danhmucsp)){
        $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tendanhmuc']?></td>
        <td><a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">Xóa</a> | 
        <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?>">Sửa</a></td>
    </tr>
    <?php
    }
    ?>
</table>
<style>
    .lk{
        font-size: 1.5em;
        font-weight: bold;
        color: blue;
    }
    body {
      font-family: Arial, sans-serif;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      border: 1px solid #ddd;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 12px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #f5f5f5;
    }
  </style>