<?php
session_start();
$servername = "localhost";  // Tên máy chủ MySQL
$username = "root"; // Tên người dùng MySQL
$password = ""; // Mật khẩu người dùng MySQL
$database = "quanlydienthoai"; // Tên cơ sở dữ liệu MySQL

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
    exit();
}

// Kết nối thành công
// echo "Kết nối thành công!";

// Sau khi hoàn thành công việc với cơ sở dữ liệu, đóng kết nối

?>
