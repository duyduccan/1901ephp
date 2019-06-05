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
<h1>Truy cập vào từng session trong php</h1>
<?php
//$SESSION là một mảng
$_SESSION['user_name'] = "admin";
$_SESSION['user_email'] = "admin@gmail.com";

$location = "ha noi";

$_SESSION['user_location'] = $location;

// xem tất cả các session đang hoạt động
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>

<div>
    <?php
    // kiểm tra 1 session có tồn tại không
    /*<?php if(isset($_SESSION['user_name'])):?>
        <p>user_name là: <?php echo $_SESSION['user_name']?></p>
    <?php endif;?>
     * tương tự
     * <?php if(isset($_SESSION['user_name'])){?>
        <p>user_name là: <?php echo $_SESSION['user_name']?></p>
    <?php }?>*/
    if(isset($_SESSION['user_name'])):?>
        <p>user_name là: <?php echo $_SESSION['user_name']?></p>
    <?php endif;?>

    <?php if(isset($_SESSION['user_email'])):?>
        <p>user_email là: <?php echo $_SESSION['user_email']?></p>
    <?php endif;?>

    <?php if(isset($_SESSION['user_location'])):?>
        <p>user_email là: <?php echo $_SESSION['user_location']?></p>
    <?php endif;?>
</div>
</body>
</html>