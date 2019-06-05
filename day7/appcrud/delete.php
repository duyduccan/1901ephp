<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<?php
//nạp kết nối csdl vào file này
include_once "config.php";
$name = '';
$address='';
$salary = '';
if(isset($_GET['id'])){
    $employees_id = (int) $_GET['id'];
    $sqlSelect = "SELECT * FROM employees WHERE id = ". $employees_id;
    $result = mysqli_query($connection, $sqlSelect);
    $row = mysqli_fetch_assoc($result);

    // cú pháp rút gon của if else ( condition ? câu lênh chạy khi đc la true : câu lệnh chạy khi dc = false
    $name = isset($row['name'])? $row['name']:'';
}
if(isset($_POST['action'])&& ($_POST['action'] == 'delete')){
    if(isset($_POST['id'])&&($_POST['id'] > 0)){
        $id = (int)$_POST['id'];
        $sqlDelete = "DELETE FROM employees WHERE id = $id ";
        if(mysqli_query($connection,$sqlDelete)){
            // hàm header dùng để chuyển hướng url
            header('Location: index.php');
            exit;
        } else {
            echo "Xóa nhân viên thất bại";
        }
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Tạo nhân viên mới</h1>

            <div>
                <form name="edit" action="" method="post">
                    <input type="hidden" name="id" value="<?php echo (int)$_GET['id'] ?>">
                    <input type="hidden" name="action" value="delete">
                    <div class="form-group">
                        <label>Tên: <?php echo $name ?></label>
                    </div>
                    <button type="submit" class="btn btn-danger">Xóa nhân viên</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>