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
<h1>Tạo session trong php</h1>
<?php
//$_SESSION là một mảng
$_SESSION['user_name'] = "admin";
$_SESSION['user_email'] = "admin@gmail.com";

$location = "ha noi";

$_SESSION['user_location'] = $location;

// xem tất cả các session đang hoạt động
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
</body>
</html>