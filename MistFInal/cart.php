<?php session_start();
      require "Templates/Header.php";
      include_once "data/config.php";
      include_once "data/functions.php";


      $pageTitle = "Cart";
?>


<html>
<head>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/contact.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="icon" href="Images/Mists%20favicon-01.png">
    <title>Shopping Site: <?= $pageTitle?></title>
</head>
<!--
    - Code taken from the example given to us on moodle from Matt Smiiths PHP Book
-->

<body>
    <img src="Images/david-lezcano-Lv1di_d7tso-unsplash.jpg" width="100%" height="700px">

    <div class="hotDeals">
        <h2>Your Items Will Appear Here</h2>
    </div>

    <div class="row border-top">
        <div class="col product text-center">
            <img src="/images/small/<?= $product['image'] ?>" alt="<?= $product['image'] ?>">
        </div>

        <div class="col">
            <h4><?= $product['name'] ?></h4>
            <?= $product['description'] ?></div>
        <div class="col price text-rightalign-self-center">
            <?= $price ?>
        </div>

        <div class="col text-center align-self-center">
            <form action="/?action=changeCartQuantity&id=<?= $id?>" method="post">
                <button type="submit" name="amount" value="reduce" class="btn btn-primary btn-sm">
                    <span class="glyphicon glyphicon-minus"></span>
                </button>
                <?= $quantity ?>

                <button type="submit" name="amount" value="increase" class="btn btn-primary btn-sm">
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
            </form>
        </div>

        <div class="col price text-rightalign-self-center">
            <?= $subtotal ?></div>
        <div class="col align-self-center">
            <form action="/?action=removeFromCart&id=<?= $id ?>" method="post">
                <button class="btn btn-dangerbtn-sm">
                    <span class="glyphicon glyphicon-remove">
                    </span>Remove
                </button>
            </form>
        </div>
    </div>

    <?php //endforeach; ?>

    <?php
    if (!empty($cartItems)) {
        foreach ($cartItems as $id => $quantity);
    }
            $product = $products[$id];
            $subtotal = $quantity * $price;

    $total = '';
    $total += $subtotal;

            $price = number_format($price, 2);
            $subtotal= number_format($subtotal, 2);
    ?>



<?php
    $page = 'Templates/list.php';
    $action = filter_input(INPUT_GET, 'action');

    if('cart' == $action){
        $page = 'cart.php';
    }

?>


<?php
$action = filter_input(INPUT_GET, 'action');
    switch ($action){
        case 'cart':
            displayCart();
            break;

        case 'addToCart':
            $id = filter_input(INPUT_GET, 'id');
            addItemToCart($id);
            displayCart();
            break;

        case 'removeFromCart':
            $id = filter_input(INPUT_GET, 'id');
            removeItemFromCart();
            break;

        case 'changeCartQuantity':
            $id = filter_input(INPUT_GET, 'id');
            $amount = filter_input(INPUT_POST, 'amount');

            if($amount == 'increase'){
                increaseCartQuantity($id);
            } else {
                reduceCartQuantity($id);
            }

            displayCart();
            break;

        default:
            displayProducts();
    }

?>




    <div class="checkoutDiv">
     <a href="checkout.php"> <center><button class="cAcc">Checkout</button></center><br></a>
    </div>
</body>
<?php require "Templates/Footer.php"?>

</html>