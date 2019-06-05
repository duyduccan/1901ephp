<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Session trong php</h1>
<pre>
    session trong php là cách để lưu trữ thông tin trong biến đồng bộ trên nhiều trang của website
    ví dụ
    khi tạo ra 1 session đăng nhập session này sẽ làm việc trên trang chủ(home.php)
    trang tin tức (new.php) trang danh mục(category.php)...
    session thường được dùng để lưu trữ thông tin đăng nhập, data giỏ hàng của khách hàng
    trên các trang mua sắm..
    để bắt đầu sử dụng session chúng ta cần có hàm session_start() ở đầu trang web
    hàm này sẽ khởi đầu session trong php
    biến session được đặt trong biến global của php là $_SESSION
</pre>
</body>
</html>