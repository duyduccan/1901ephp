<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if(isset($_GET) && !empty($_GET)){
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}
?>
<h1>form html</h1>
<pre>
    $_GET gửi dữ liệu đi qua url
    ví dụ mặc định: http://localhost/1901ephp1/day3/1.senddata/get.php
    khi form có method="get" gửi dữ liệu đi:
    http://localhost:8888/1901ephp/day3/senddata/get.php?username=canduyduc&password=123&submit=%C4%90%C4%83ng+k%C3%BD
    lúc này php sẽ đưa các tên của ô input trong form và giá trị của chúng
    lên trên query string của url
</pre>
<div>
    <form name="register" action="" method="get">
        <div>
            <lable>Username</lable>
            <input type="text" name="username" value="" placeholder="nhập username">
        </div>
        <div>
            <lable>Password</lable>
            <input type="password" name="password" value="" placeholder="nhập password">
        </div>
        <div>
            <input type="submit" name="submit"  value="Đăng ký">
        </div>
    </form>
</div>
</body>
</html>