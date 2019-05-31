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
if(isset($_POST['name']) && isset($_POST['price'])&& isset($_POST['inventory'])&&
isset($_POST['supplier'])&& isset($_POST['date_created'])){

    if($_POST['name'] && ($_POST['price'])>0 && $_POST['inventory'] && $_POST['supplier']
    && $_POST['date_created']){

    $name = $_POST['name'];
    $price = $_POST['price'];
    $inventory = $_POST['inventory'];
    $supplier = $_POST['supplier'];
    $date_created = $_POST['date_created'];

    $sqlInsert = "INSERT INTO product (name, price, inventory, supplier, date_created) VALUE
 ('$name',$price,$inventory,'$supplier','$date_created')";
    if(mysqli_query($connection,$sqlInsert)){
        echo "Insert thành công";
        header ('Location: index.php');
        exit;
    }else{
        echo "Insert thất bại";
    }
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Tạo sản phẩm mới</h1>
            <div>
                <form name="creat" action="" method="post">
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                    <div class="form-group">
                        <label>Tồn kho</label>
                        <input type="text" class="form-control" name="inventory">
                    </div>
                    <div class="form-group">
                        <label>Nhà cung cấp</label>
                        <input type="text" class="form-control" name="supplier">
                    </div>
                    <div class="form-group">
                        <label>Ngày tạo</label>
                        <input type="text" class="form-control" name="date_created">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>