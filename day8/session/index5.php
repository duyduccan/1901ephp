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
<h1>chỉnh sửa session trong php</h1>
<?php
//tạo session
$_SESSION['user_name'] = "admin";
// xem tất cả các session đang hoạt động
echo "<br>In ra session trước khi sửa";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// sửa session
$_SESSION['user_name'] = "mod";

// xem tất cả các session đang hoạt động
echo "<br>In ra session sau khi sửa";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>
</body>
</html>