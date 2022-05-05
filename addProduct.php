<?php
require 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#productType").change(function() {
                var inputVal = $(this).val();
                var eleBox = $("." + inputVal);
                $(".type").hide();
                $(eleBox).show();
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <div class="title">
            <h1>
                Add Product
            </h1>
        </div>
        <div class="actbutton">
            <button type="submit" name="save" class="btn btn-light" form="product_form" id="save">Save</button>
            <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
    </div>
    <div class="container"">
        <hr>
    </div>
    <div class="container">
        <form action="save.php" method="POST" id="product_form" name="product_form" autocomplete="off" onsubmit="return validateForm()">
            <div class=" form-group row mb-3">
                <label for="sku" class="col-sm-2 col-form-label">SKU</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="sku" id="sku" placeholder="SKU">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="price" class="col-sm-2 col-form-label">Price ($)</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="price" id="price" placeholder="Price" onkeypress="javascript:return isNumber(event)">
                </div>
            </div>

            <div class="form-group row mb-2">
                <label for="productType" class="col-sm-2 col-form-label">Type Switcher</label>
                <div class="col-sm-7">
                    <select id="productType" name="productType">
                        <option value="" disabled selected hidden>Type Switcher</option>
                        <option value="DVD">DVD-disc</option>
                        <option value="Book">Book</option>
                        <option value="Furniture">Furniture</option>
                    </select>
                </div>
            </div>
            <div class="container">
                <div class="DVD type" style="display:none" id="divDVD">
                    <div class="form-group row mb-3">
                        <label for="size" class="col-sm-5 col-form-label">Size (MB) </label>
                        <div class="col-sm-4">
                            <input type="text" name="size" id="size" class="form-control inp" placeholder="#size" onkeypress="javascript:return isNumber(event)">
                        </div>
                    </div>
                    <strong>Please, provide size</strong>
                </div>

                <div class="Book type" style="display:none" id="divBook">
                    <div class="form-group row mb-3">
                        <label for="weight" class="col-sm-5 col-form-label">Weight (KG) </label>
                        <div class="col-sm-4">
                            <input type="text" name="weight" id="weight" class="form-control inp" placeholder="#weight" onkeypress="javascript:return isNumber(event)">
                        </div>
                    </div>
                    <strong>Please, provide weight</strong>
                </div>

                <div class="Furniture type" style="display:none" id="divFurniture">
                    <div class="form-group row mb-3">
                        <label for="height" class="col-sm-5 col-form-label">Height (Cm) </label>
                        <div class="col-sm-4">
                            <input type="text" name="height" id="height" class="form-control inp" placeholder="#height"  onkeypress="javascript:return isNumber(event)">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="width" class="col-sm-5 col-form-label">Width (Cm) </label>
                        <div class="col-sm-4">
                            <input type="text" name="width" id="width" class="form-control inp" placeholder="#width" onkeypress="javascript:return isNumber(event)">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="length" class="col-sm-5 col-form-label">Length (Cm) </label>
                        <div class="col-sm-4">
                            <input type="text" name="length" id="length" class="form-control inp" placeholder="#length" onkeypress="javascript:return isNumber(event)">
                        </div>
                    </div>
                    <strong>Please, provide dimensions</strong>
                </div>
            </div>
    </div>
    </form>
    </div>

</body>

<?php 
        //print_r($_POST);
        // Si estos campos están vacios
        if(empty($_POST["sku"]) || empty($_POST["name"]) || empty($_POST["price"]) || empty($_POST["productType"]) || empty($_POST["size"]) || empty($_POST["weight"]) || empty($_POST["height"]) || empty($_POST["width"]) || empty($_POST["length"])){
            //echo 'Error, please submit required data.';
          //  header('Location: index.php?=msg=errormissingdata');
        }
?>

<?php include 'footer.php' ?>
</html>
