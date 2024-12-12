<?php
session_start(); // Khởi động session để lưu thông tin người dùng

// Kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webbandoanvat";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Xử lý khi người dùng gửi form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Truy vấn để kiểm tra tài khoản
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Kiểm tra mật khẩu
        $user = $result->fetch_assoc();
        if (password_verify($password, $user["password"])) {
            // Đăng nhập thành công
            $_SESSION["username"] = $user["username"];
            echo "Đăng nhập thành công! Xin chào " . $_SESSION["username"];
        } else {
            echo "Sai mật khẩu!";
        }
    } else {
        echo "Tài khoản không tồn tại!";
    }

    $stmt->close();
}

$conn->close();
?>
