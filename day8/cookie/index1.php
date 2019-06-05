<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    cookie được sử dụng để nhận diện người dùng
    cookie là một file nhỏ được server nhúng vào máy tính của người dùng
    mỗi lần máy tính đó gửi request đến server nó cũng gửi cookie đến
    với php bạn có thể tạo và lấy giá trị của cookie
    để tạo mới cookie bạn sử dụng hàm setcookie()
    cú pháp:
    setcookie(name,value,expire,path,domain,secure,httponly);
    chỉ có tham số name đầu tiên và bắt buộc truyền vào
    còn các tham số sau có thể truyền hoặc không

    [PHPSESSID] => ae45eav4nq55kjtbofl6nihpbd
    PHPSESSID : cookie này sẽ cho phép nhận diện người dùng do PHP tự sinh ra
</pre>

<?php
/*thời gian một ngày là 86400 giây
cookie bên dưới sẽ sống trong 30 ngày*/
$cookie_name = "username";
$cookie_value = "admin";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<?php
/**
 * Xem tất cả các cookie
 */
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
?>
<?php
/**
 * Truy cập vào 1 cookie
 */
if(!isset($_COOKIE["username"])) {
    echo '<br> Cookie $_COOKIE["username"] chưa được tạo';
} else {
    echo '<br>Giá trị của $_COOKIE["username"] là : ' . $_COOKIE["username"];
}
?>
</body>
</html>