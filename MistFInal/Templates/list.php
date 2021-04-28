<!DOCTYPE HTML>
<html>
<?php require_once "Header.php";
      require_once "../data/products.php";
      require_once "../data/config.php";
      require_once "../data/functions.php";

      $pageTitle = "List of Products";
?>

<!--
    - Code taken from the example given to us on moodle from Matt Smiiths PHP Book
-->


<head>
    <title>Shopping site: Product List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <style>
        @import '../style/product.css';
    </style>
</head>

<body class="container ">
<h1>List of Products</h1><div class="row">
   <?php foreach($products as $id => $product):
        $price = number_format($product['price'], 2);?>
        <div class="product col-md-2 text-center">
        <?= starsHtml($product['stars']) ?>
        <h4><?= $product['name'] ?></h4>
        <div class="price">
            <?= $price ?>
            <form method="post" action="/?action=addToCart&id=<?= $id ?>" style="display: inline">
                <button class="btn btn-primary btn-sm">Add To Cart</button>
            </form>
        </div
        <?= $product['description'] ?></div><?php endforeach; ?></div></body></html