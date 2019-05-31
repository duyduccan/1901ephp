<?php
//nạp kết nối csdl vào file này
include_once "config.php";

if(isset($_POST['id']) && isset($_POST['name'])&& isset($_POST['address'])&& isset($_POST['salary'])) {

    if ($_POST['name'] && $_POST['address'] && $_POST['salary'] > 0) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];

        $sqlUpdate = "UPDATE employees SET name='$name',address='$address',salary='$salary' WHERE id = ". (int)$_POST['id'];
        if (mysqli_query($connection, $sqlUpdate)) {
            echo "Update thành công";
            // hàm header dùng để chuyển hướng url
            header('Location: index.php');
            exit;
        } else {
            echo "Update thất bại";
        }
    }
}
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
