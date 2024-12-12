<?php
$servername = "localhost"; // Địa chỉ máy chủ (thường là localhost)
$username = "root";        // Tên người dùng MySQL
$password = "";            // Mật khẩu MySQL (thường để trống trên XAMPP)
$dbname = "webdoanvat";  // Tên cơ sở dữ liệu

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
echo "Kết nối thành công!";

// Truy vấn cơ sở dữ liệu
$sql = "SELECT TaiKhoanID, TenDangNhap, MatKhau, Email, SoDienThoai, NgayDangKy, VaiTroID FROM taikhoan";
$result = $conn->query($sql);

// Xử lý kết quả
if ($result->num_rows > 0) {
    // Lặp qua từng dòng dữ liệu
    while ($row = $result->fetch_assoc()) {
        echo "TaiKhoanID: " . $row["TaiKhoanID"] . " - TenDangNhap: " . $row["TenDangNhap"] . " - MatKhau: " . $row["MatKhau"] . " - Email: " . $row["Email"] ." - SoDienThoai: " . $row["SoDienThoai"] ." - NgayDangKy: " . $row["NgayDangKy"]." - VaiTroID: " . $row["VaiTroID"]. "<br>";
    }
} else {
    echo "Không tìm thấy dữ liệu.";
}

// Đóng kết nối
$conn->close();
?>
