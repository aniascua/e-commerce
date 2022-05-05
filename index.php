<?php
require 'connection.php';
$product = query("SELECT * FROM product");
if (isset($_POST['delete'])) {
    $count = count($_POST['item']);

    for ($i = 0; $i < $count; $i++) {
        $id = $_POST['item'][$i];
        $delete = mysqli_query($conn, "DELETE FROM product WHERE sku = '" . $id . "' ");
    }
    if ($delete) {
        header("Refresh:0");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="title">
            <h1>
                Product List
            </h1>
        </div>
        <div class="actbutton">
            <a href="addProduct.php"><button class="btn btn-light" id="ADD">ADD</button></a>
            <button type="submit" name="delete" value="Delete" class="btn btn-danger" form="check">MASS DELETE</button>
        </div>
    </div>
    <div class="container">
        <hr>
    </div>
    <form action="" method="POST" id="check">
        <div class="container">
            <div class="row">
                <?php foreach ($product as $p) : ?>
                    <div class="col-sm-auto mb-3">
                        <div class="card" style="width: 13rem;">
                            <div class="card-body">
                                <input type="checkbox" name="item[]" value="<?= $p["sku"] ?>" class="delete-checkbox">
                                <h5 class="card-title text-center"><?= $p["sku"] ?></h5>
                                <p class="card-text text-center"><?= $p["name"] ?></p>
                                <p class="card-text text-center">$ <?= $p["price"] ?></p>
                                <?php if ($p["productType"] == "DVD") : ?>
                                    <p class="card-text text-center">Size : <?= $p["size"] ?> MB</p>
                                <?php elseif ($p["productType"] == "Book") : ?>
                                    <p class="card-text text-center">Weight : <?= $p["weight"] ?> KG</p>
                                <?php else : ?>
                                    <p class="card-text text-center">Dimension : <?= $p["height"] ?>x<?= $p["width"] ?>x<?= $p["length"] ?></p>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </form>
    <?php include 'footer.php' ?>

</body>

</html>
