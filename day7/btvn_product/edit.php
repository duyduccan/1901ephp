<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<?php

include_once "config.php";
$name = '';
$price='';
$inventory = '';
$supplier = '';
$date_created = '';
if(isset($_GET['id'])){
    $product_id = (int) $_GET['id'];
    $sqlSelect = "SELECT * FROM product WHERE id = ". $product_id;
    $result = mysqli_query($connection, $sqlSelect);
    $row = mysqli_fetch_assoc($result);

    // cú pháp rút gon của if else ( condition ? câu lênh chạy khi đc la true : câu lệnh chạy khi dc = false
    $name = isset($row['name'])? $row['name']:'';
    $price = isset($row['price'])? $row['price']:'';
    $inventory = isset($row['inventory'])? $row['inventory']:'';
    $supplier = isset($row['supplier'])? $row['supplier']:'';
    $date_created = isset($row['date_created'])? $row['date_created']:'';
}
?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Tạo nhân viên mới</h1>

            <div>
                <form name="edit" action="update.php" method="post">
                    <input type="hidden" name="id" value="<?php echo (int)$_GET['id'] ?>">
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input type="text" class="form-control" name="price" value="<?php echo $price ?>">
                    </div>
                    <div class="form-group">
                        <label>Tồn kho</label>
                        <input type="text" class="form-control" name="inventory" value="<?php echo $inventory ?>">
                    </div>
                    <div class="form-group">
                        <label>Nhà cung cấp</label>
                        <input type="text" class="form-control" name="supplier" value="<?php echo $supplier ?>">
                    </div>
                    <div class="form-group">
                        <label>Ngày tạo</label>
                        <input type="text" class="form-control" name="date_created" value="<?php echo $date_created ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>