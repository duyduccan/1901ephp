<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
// isset kiểm tra xem biến có giá trị là true
// empty kiểm tra xem biến có giá trị rỗng là true
if(isset($_POST) && !empty($_POST)){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>
<h1>form html</h1>
<pre>
    isset() được sử dụng để kiểm tra xem có sự tồn tại của biến trong hàm isset() hay
    không nếu có tồn tại hàm trả về true không tồn tại trả về false
    && và thỏa các điều kiện
    || hoặc tức là chỉ cần thỏa 1 trong các điều kiện
    $_POST khi gửi form đi và method= "post" trong form
    thì $_POST khi gửi sẽ là một mảng dữ liệu
    và key là tên các ô input trong form
    và value là giá trị bên trong các ô input đó

</pre>
<div>
    <form name="register" action="" method="post">
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