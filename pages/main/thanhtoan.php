
     <div class="dangki">
                <form>
                    <div class="top">
                        <h3>THÔNG TIN KHÁCH HÀNG ĐẶT HÀNG <br></h3>

                    </div>
                    <div class="input">
                        <input type="Tên" placeholder="Tên" required>
                    </div>
                    <div class="input">
                    <input type="email" placeholder="Email" required>
                    </div>
                    <div class="input">
                    <input type="text" name="SĐT" placeholder="SĐT">
                    </div>
                    <div class="input">
                    <input type="Địa chỉ" placeholder="Địa chỉ" required>
                    </div>
                    <div class="btn">
                    <button type="button" onclick="window.location.href='camon.php'">XÁC NHẬN ĐẶT HÀNG VÀ THANH TOÁN</button>
                    </div>
                </form>
            </div>
        </div>
        <style>
          body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2; /* Màu nền */
}

.dangki {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Đổ bóng */
}

.top h3 {
    margin: 0;
    font-size: 24px;
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}
.btn button {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: none;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease; /* Hiệu ứng chuyển đổi màu nền */
}

.btn button:hover {
    background-color: #0056b3;
}
.dangki input[type="text"],
.dangki input[type="email"],
.dangki input[type="Tên"],
.dangki input[type="Địa chỉ"],
.dangki input[type="SĐT"] {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    transition: border-color 0.3s ease; /* Hiệu ứng chuyển đổi màu viền */
}

.dangki input[type="text"]:focus,
.dangki input[type="email"]:focus,
.dangki input[type="Tên"]:focus,
.dangki input[type="Địa chỉ"]:focus,
.dangki input[type="SĐT"]:focus {
    outline: none;
    border-color: #007bff; /* Màu viền khi focus */
}

 
        </style>