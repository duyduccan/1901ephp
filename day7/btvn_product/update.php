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

        $sqlUpdate = "UPDATE product SET name='$name', price=$price, inventory = $inventory,
supplier='$supplier', date_created ='$date_created' WHERE id = " .(int) $_POST['id'];
        if(mysqli_query($connection,$sqlUpdate)){
            echo "Update thành công";
            header ('Location: index.php');
            exit;
        }else{
            echo "Update thất bại";
        }
    }
}