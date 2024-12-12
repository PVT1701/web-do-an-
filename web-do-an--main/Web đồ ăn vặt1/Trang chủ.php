<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web đồ ăn vặt</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<header class="header" id="header">
    <div class="logo">
        <img src="image\icon\logo.png" alt="Logo">
        <span></span>
    </div>
    <nav class="nav">
        <ul class="nav-menu">
            <li><a href="">Trang Chủ</a></li>
            <li><a href="gioithieu.html">Giới Thiệu</a></li>
            <li class="dropdown">
                <a href="sanpham.html">Sản Phẩm</a>
                <ul class="dropdown-menu">
                    <li><a href="combobestsaller.html">Combo Best Seller</a></li>
                    <li><a href="subpage1.html">Combo Mix</a></li>
                    <li><a href="#">Combo Thịt Khô</a></li>
                    <li><a href="#">Combo Snack + Quẩy</a></li>
                    <li><a href="#">Các Sản Phẩm Lẻ</a></li>
                    <li><a href="#">Sản Phẩm Mới</a></li>
                </ul>
            </li>
            <li><a href="tintuc.html">Tin Tức</a></li>
            <li><a href="lienhe.html">Liên Hệ</a></li>
        </ul>
    </nav>
    <div class="header-icons">
        <div class="nav-container">
            <!-- Icon tìm kiếm -->
            <div class="search-bar">
              <button class="search-icon" onclick="toggleSearch()">
                <i class="fa-solid fa-search"></i>
              </button>
              <input type="text" placeholder="Tìm kiếm..." class="search-input">
            </div>
        
            <!-- Icon người dùng -->
            <div class="user-container">
              <div class="user-bar">
                <button class="user-icon" onclick="toggleMenu()">
                  <i class="fa-solid fa-user"></i>
                </button>
                <ul class="user-menu">
                  <li><a href="dangnhap.php">Đăng Nhập</a></li>
                  <li><a href="dangky.html">Đăng Ký</a></li>
                </ul>        
              </div>
            </div>
             <!-- Icon giỏ hàng -->
             <div class="cart">
                <span><a href="giohang.html"><i class="fa-solid fa-cart-shopping"></i></a></span> <!-- Biểu tượng giỏ hàng -->
                <div id="cart-count"></div>
                <div class="cart-tooltip" id="cart-tooltip">
                </div>
            </div>
          </div>
    </div>
</header>

<div class="slider">
    <div class="list">
        <div class="item">
            <img src="image\slider_1.webp" alt="">
        </div>
        <div class="item">
            <img src="image\slider_2.webp" alt="">
        </div>
        <div class="item">
            <img src="image\slider_3.webp" alt="">
        </div>
    </div>
    <div class="buttons">
        <button id="prev"><</button>
        <button id="next">></button>
    </div>
    <ul class="dots">
        <li class="active"></li>
        <li></li>
        <li></li>
    </ul>
</div><br><br><br><br>
<div class="abody">
    <h1>VỀ CHÚNG TÔI</h1>
</div><br>
<div class="bbody">
    <h4>Chào mừng bạn đến với Ăn Là Ghiền, trang web bán đồ ăn vặt hấp dẫn và đa dạng nhất hiện nay!
        Tại đây, bạn sẽ tìm thấy một thế giới đầy màu sắc của các loại snack thơm ngon, từ bánh kẹo truyền 
        thống đến những món ăn vặt độc đáo từ khắp nơi trên thế giới. Chúng tôi cam kết mang đến cho bạn 
        những sản phẩm chất lượng cao, an toàn và ngon miệng, phù hợp với mọi sở thích. Với giao diện thân 
        thiện và dễ sử dụng, bạn chỉ cần vài cú click chuột để có thể đặt hàng và nhận được đồ ăn vặt yêu 
        thích ngay tại nhà. Hãy cùng khám phá và thưởng thức những hương vị tuyệt vời tại SnackLand ngay hôm nay!</h4>
</div><br><br><br>
<div class="logo-image">
    <img src="image\icon\logo.png" alt="logo">
</div>

<div class="icon-container">
    <div class="icon-box">
        <img src="image\icon\chatluong.png" alt="Quality Icon">
        <p>CHẤT LƯỢNG TIN CẬY</p>
    </div>
    <div class="icon-box">
        <img src="image\icon\huongtoikk.png" alt="Customer Orientation Icon">
        <p>HƯỚNG ĐẾN KHÁCH HÀNG</p>
    </div>
    <div class="icon-box">
        <img src="image\icon\doitra.png" alt="Return Policy Icon">
        <p>CHÍNH SÁCH ĐỔI TRẢ</p>
    </div>
    <div class="icon-box">
        <img src="image\icon\quatang.png" alt="Gift Icon">
        <p>QUÀ TẶNG HẤP DẪN</p>
    </div>
</div><br><br>
<div class="image-container">
    <img src="image/nền1.png" alt="Ảnh mẫu">
    <div class="overlay-text">
        <h3>Hotline</h3>
        <a href="tel:0789395327"><h2>0789395327</h2></a>
        <h4>Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng,</h4>
        <h4>sạch sẽ, an toàn và đảm bảo chất lượng ngon nhất.</h4>
    </div>
</div><br><br>
<div class="abody">
<h1>SẢN PHẨM NỔI BẬT</h1>
</div><br>
<div class="sanpham">
    <div class="image-sp">
        <img src="image/best12.png" alt="sp1"><br>
        <p class="ndsp">COMBO KHÔNG THỂ CẢN PHÁ</p>
        <p class="ndsp">259.000đ</p>
    </div>
    <div class="image-sp">
        <img src="image/best14.png" alt="sp1"><br>
        <p class="ndsp">COMBO GIẢI PHÓNG</p>
        <p class="ndsp">199.000đ</p>
    </div>
    <div class="image-sp">
        <img src="image/best15.png" alt="sp1"><br>
        <p class="ndsp">COMBO ĐỈNH NÓC KỊCH TRẦN</p>
        <p class="ndsp">199.000đ</p>
    </div>
</div>
<div class="abody">
    <a href="sanpham.html"><button class="add-to-cart">Xem thêm</button></a>
</div><br><br>
<div id="back-to-top">
    <a href="#header" class="fa-solid fa-arrow-up">
    </a>
</div>
<footer class="footer">
    <!--
    <div class="social-icons">
        <img src="path/to/facebook-icon.png" alt="Facebook">
        <img src="path/to/tiktok-icon.png" alt="TikTok">
        <img src="path/to/youtube-icon.png" alt="YouTube">
        <img src="path/to/shopee-icon.png" alt="Shopee">
        <img src="path/to/instagram-icon.png" alt="Instagram">
    </div>-->

    <div class="footer-links">
        <div>
            <h4>THỰC PHẨM TỐT NHẤT</h4>
            <a href="#">Chi nhánh</a><br>
            <a href="#">Hợp tác</a><br>
            <a href="#">Sự kiện</a>
        </div>
        <div>
            <h4>TIN TỨC</h4>
            <a href="#">Về chúng tôi</a><br>
            <a href="#">Liên hệ chúng tôi</a><br>
            <a href="#">Đăng nhập</a><br>
            <a href="#">Đăng ký</a><br>
            <a href="#">Câu hỏi thường gặp</a>
        </div>
        <div>
            <h4>LIÊN HỆ VỚI CHÚNG TÔI</h4>
            <div class="contact-item">
                <img src="image\icon\icon-address.png" alt="Location Icon">
                Thái Bình
            </div>
            <div class="contact-item">
                <img src="image\icon\icon-smart.png" alt="Phone Icon">
                <a href="tel:0789395327">0789395327</a>
            </div>
            <div class="contact-item">
                <img src="image\icon\icon-email.png" alt="Email Icon">
                <a href="mailto:pvtzzz1701@gmail.com">anlaghien8386@gmail.com</a>
            </div>
        </div>
        <p>&copy; 2024 Web Đồ Ăn vặt. Được tạo bởi [Trà & Tuyên]</p>    
    </div>
</footer>
<script>
    const sql = require('mssql');

const config = {
    user: 'TenUser',
    password: 'MatKhau',
    server: 'PVT\PVTMASTER', // Tên server hoặc IP
    database: 'QLSHOPDOANVAT',
};

async function connectDB() {
    try {
        let pool = await sql.connect(config);
        let result = await pool.request().query('SELECT * FROM TaiKhoan');
        console.log(result.recordset);

        // Hiển thị dữ liệu (có thể dùng kết hợp HTML)
        result.recordset.forEach(row => {
            console.log(row.TenCot);
        });
    } catch (err) {
        console.error(err);
    }
}

connectDB();

</script>
<script src="main.js"></script>
</body>
</html>
