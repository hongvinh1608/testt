<?php
            $sql_pro = "SELECT * FROM b_sanpham where id_danhmuc =' $_GET[id]' order by id_danhmuc desc";
            $query_pro = mysqli_query($mysqli , $sql_pro);
            //lay ten danh muc
            $sql_cate ="SELECT* FROM b_danhmuc where id_danhmuc =' $_GET[id]' LIMIT 1";
            $query_cate = mysqli_query($mysqli ,$sql_cate);
            $row_title = mysqli_fetch_array( $query_cate);
           
            ?>
<h3>Danh mục sp : <?php echo $row_title['tendanhmuc'] ?></h3>
            <ul class="list_product">
                <?php
                while($row_pro = mysqli_fetch_array($query_pro)) {
                ?>
                
                <li>
                    <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">

                        <img src="admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" alt="">
                        <p class="title_product">Tên sản phẩm : <?php  echo $row_pro['tensanpham']  ?></p>
                        <p class="price_product">Giá : <?php echo number_format($row_pro['giasp'],0,',','.').'vnd'?> </p>
                    </a>
                </li>
                <?php
                }
                ?>
                
            </ul>
