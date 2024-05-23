<p class="lk">Thêm Danh Mục </p>
<table border="1" width="50%" style="border-collapse: collapse";>
<form method="post" action="modules/quanlydanhmucsp/xuly.php"> 
  <tr>
    <td>Tên danh mục</td>
    <td><input type="text" name="tendanhmuc"></td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td><input type="text" name="thutu"></td>
  </tr> 
  <tr>
    <td colspan="2"><input type="submit" name="themdanhmuc" value="Thêm danh mục sản phẩm"></td>
  </tr>
  </form>
</table>
<style>
  .lk{
        font-size: 1.5em;
        font-weight: bold;
    }
table {
  width: 100%;
  border-collapse: collapse;
  border: 2px solid #333; /* Màu viền */
  font-family: Arial, sans-serif; /* Font chữ */
  margin-bottom: 25px;
}

/* Áp dụng style cho ô input */
input[type="text"] {
  width: 100%;
  padding: 8px; /* Khoảng cách nội dung với viền */
  box-sizing: border-box; /* Kích thước tính cả padding và border */
  border: 1px solid #ccc; /* Màu viền */
  border-radius: 4px; /* Bo tròn góc */
}

/* Áp dụng style cho nút submit */
input[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #4CAF50; /* Màu nền */
  color: white; /* Màu chữ */
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

/* Áp dụng style cho ô thứ tự */
td:nth-child(2) input[type="text"] {
  width: calc(100% - 16px); /* Để cho phần tử input không bị tràn bảng */
}
body{
  font-family: Arial, sans-serif;
}
</style>