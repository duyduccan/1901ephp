<?php
//khởi động session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>xóa toàn bộ các session trong php</h1>
<?php
//tạo ra 2 biến session trong php
$_SESSION['user_name'] = "admin";
$_SESSION['user_email'] = "admin@gmail.com";
// hoặc gán 1 biến vào $SESSION
$location = "ha noi";
$_SESSION['user_location'] = $location;

// xem tất cả các session đang hoạt động
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>
<?php
//hủy toàn bộ session trong php
session_unset();
session_destroy();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
</body>
</html>