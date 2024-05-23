        <?php
        session_start();
        ?>
        <?php
        if(isset($_SESSION['cart'])){

        }
        ?>
        <table style="width: 100%;text-align:center">
        <tr>
            <TH>ID</TH>
            <TH>Mã sp</TH>
            <TH>Tên sp</TH>
            <TH>Hình ảnh</TH>
            <TH>Số lượng</TH>
            <th>Giá sp</th>
            <th>Thành tiền</th>
            <th>Quản lý</th>
        </tr>
        <?php
        if(isset($_SESSION['cart'])){
            $i=0;
            $tongtien=0;
            foreach($_SESSION['cart'] as $cart_item){
            $thanhtien=$cart_item['soluong']*$cart_item['giasp']; 
            $tongtien+=$thanhtien;
                $i++;
        ?>
        <tr>  
            <td><?php echo $i ?></td>
            <td><?php echo $cart_item['masp']; ?></td>
            <td><?php echo $cart_item['tensanpham'];?></td>
            <td><img src="admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'];?>" width="150px"></td>
            <td> 
                <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>">+</a>
                <?php echo $cart_item['soluong'];?>
                <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>">-</a>
            </td>
            <td><?php echo number_format($cart_item['giasp'],0,',','.').'vnđ'; ?></td>
            <td><?php echo number_format($thanhtien,0,',','.').'vnđ'; ?></td>
            <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xóa</a></td>
        </tr>
        <?php
            }
            ?>
            <tr>
            <td  colspan="8">
        <p style="float:left; font-weight:bold">Tổng tiền: <?php echo number_format($tongtien,0,',','.').'vnđ'; ?></p>
        <p style="float:right"><a href="pages/main/themgiohang.php?xoatatca=1">Xóa tất cả</a></p>
        <div style="clear:both" ><p style="padding: 8px 8px ;"><a href="pages/main/thanhtoan.php">Đặt hàng</a></p></div>
        </td>
        </tr>
        <?php
        }else{
        ?>
        <tr>
            <td  colspan="8"><h2>hien tai gio hang dang trong</h2></td>
        </tr>
        <?php
        }
        ?>
        </table>


        <style>
        table {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100px;
            max-height: 100px;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .total {
            margin-top: 10px;
            font-weight: bold;
        }

        .total p {
            margin: 0;
            padding: 5px;
        }

        .total p:first-child {
            float: left;
        }

        .total p:last-child {
            float: right;
        }

        .no-cart {
            text-align: center;
        }
        /* td a */
        td a {
            display: inline-block;
            padding: 5px 10px;
            background-color: #ff6347;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        td a:hover {
            background-color: #d9534f;
        }
        p a {
            display: inline-block;
            padding: 5px 10px;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .p a:hover {
            background-color: #c82333;
        }
        </style>
