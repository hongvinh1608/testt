<?php      
            $sql_pro = "SELECT * FROM b_sanpham,b_danhmuc where b_sanpham.id_danhmuc =b_danhmuc.id_danhmuc order by
           b_sanpham.id_sanpham desc LIMIT 10";
            $query_pro = mysqli_query($mysqli , $sql_pro); 
            ?>
          <h3 style="margin-top: 30px;;text-align: center;font: size 14px;font-weight:bold;color:blue">SẢN PHẨM MỚI NHẤT</h3>
            <ul class="list_product">
                <?php
            while($row =mysqli_fetch_array($query_pro)){
              ?>
                <li>
                    <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                        <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                        <p class="title_product"><?php  echo $row['tensanpham']  ?></p>
                        <p class="price_product">Giá : <?php echo number_format($row['giasp'],0,',','.').'vnd'?> </p>
                     <p style="text-align: center; color:blue"><?php echo $row['tendanhmuc']  ?></p>
                    </a>
                </li>
                <?php
            }
            ?>  
            </ul>