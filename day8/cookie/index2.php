<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>xóa cookie</h1>
<pre>
    để xóa cookie bạn cần đặt thời gian quá hạn của nó sẽ qua
    ví dụ đã qua 1 giờ
    time() sẽ lấy thời gian hiện tại
    còn time() - 3600 sẽ lấy thời gian cách đây 1 giờ
</pre>
<?php
// khởi tạo cookie
$cookie_name = 'username';
$cookie_value = "admin";
$time = time() +(86400 * 30);
setcookie($cookie_name,$cookie_value,$time);

//in ra cookie trước khi xóa
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
?>
</body>
</html>