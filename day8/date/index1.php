<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    unix timestamp - thời gian unix
    khái niệm quen thuộc trong hệ thống unix và lập trình php
    thời gian unix, là hệ thống nhằm diễn tả một điểm trên trục thời gian
    theo trục thời gian nó sử dụng số giây để xác định thời điểm
    với điểm gốc từ thời điểm 00:00:00 ngày 1/1/1970(UTC)

    ví dụ lúc 00:00:00 - 1/1/2017 có giá trị timestamp là 1483228800;
    có nghĩa là tính từ 00:00:00 ngày 1/1/1970 đến 00:00:00 - 1/1/2017 là 1483228800 giây

    trong php sử dụng hàm time() để lấy timestamp hiện tại
    để đổi thời gian dạng timestamp sang các định dạng ngày giờ khác dùng hàm date()
</pre>

<?php echo "<br>Thời gian timestamp hiện tại: ".time();?>
<?php
//chuyển đổi thời gian unix timestamp sang dạng đọc được
$timestamp = time();
echo "<br> Thời gian date hiện tại: ".date("H:i:s d/m/Y",$timestamp);
?>
</body>
</html>