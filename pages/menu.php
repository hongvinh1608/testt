
    <?php
                $sql_danhmuc = "SELECT * FROM b_danhmuc order by id_danhmuc desc";
                $query_danhmuc = mysqli_query($mysqli , $sql_danhmuc);
            
                ?>
    <div class="menu" >
            <div class="danhmucsp">
                <ul>
                    <li><a href="index.php">Trang chủ </a></li>
                    <?php
                    while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                        ?>
                    <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
                    <?php
                    }
                    ?>
                
                    <li><a href="index.php?quanly=giohang">Giỏ hàng </a></li>
                    <!-- <li><a href="index.php?quanly=dangky">Đăng kí </a></li> -->
                    <li><a href="index.php?quanly=tintuc">Tin tức  </a></li>
                </ul>
                <form action="" class="search-box">
                    <input type="text" name="" id="search-text" placeholder="tìm kiếm" >
                    <button class="search-btn"><i class="ti-search"></i></button>
                </form>
            </div>
        </div>
        <!-- <div class="clear"></div> -->


        <style>
            .search-box{
        background: #fff;
        border-radius: 30px;
        float: right;
        margin-top: 10px;
    }
        .search-box #search-text{
            border: none;
            outline: none;
            background: none;
            padding: 10px 15px;
            font-size: 18px;
        }
        .search-box .search-btn{
            background-color: #fff;
            border: none;
            padding: 15px;
            border-radius: 50%;
        }
        </style>

    