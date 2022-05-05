<?php
require 'connection.php';
if(isset($_POST["save"])){
    $sku = $_POST["sku"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $productType = $_POST["productType"];
    $size = $_POST["size"];
    $weight = $_POST["weight"];
    $height = $_POST["height"];
    $width = $_POST["width"];
    $length = $_POST["length"];

    $query = "INSERT INTO product(sku, name, price, productType, size, weight, height, width, length)
        VALUES (
        '$sku',
        '$name',
        '$price',
        '$productType',
        '$size',
        '$weight',
        '$height',
        '$width',
        '$length')";
    $result = mysqli_query($conn,$query);
    if ($result) {
        header("Location:index.php");
        return mysqli_affected_rows($conn);        
    } else {
        echo "error";
    }

}
?>
