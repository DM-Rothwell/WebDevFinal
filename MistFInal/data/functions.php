<?php

//    - Code taken from the example given to us on moodle from Matt Smiiths PHP Book

function starsHtml($stars){
    switch ($stars){
        case 0;
            print '<span class="fa fa-star disabled"></span>';
            print '<span class="fa fa-star disabled"></span>';
            print '<span class="fa fa-star disabled"></span>';
            print '<span class="fa fa-star disabled"></span>';
            print '<span class="fa fa-star disabled"></span>';
            break;

    case 1;
        print '<span class="fa fa-star"></span>';
        print '<span class="fa fa-star disabled"></span>';
        print '<span class="fa fa-star disabled"></span>';
        print '<span class="fa fa-star disabled"></span>';
        print '<span class="fa fa-star disabled"></span>';
        break;

    case 2;
        print '<span class="fa fa-star"></span>';
        print '<span class="fa fa-star "></span>';
        print '<span class="fa fa-star disabled"></span>';
        print '<span class="fa fa-star disabled"></span>';
        print '<span class="fa fa-star disabled"></span>';
        break;

    case 3;
        print '<span class="fa fa-star"></span>';
        print '<span class="fa fa-star"></span>';
        print '<span class="fa fa-star"></span>';
        print '<span class="fa fa-star disabled"></span>';
        print '<span class="fa fa-star disabled"></span>';
        break;

    case 4;
        print '<span class="fa fa-star"></span>';
        print '<span class="fa fa-star"></span>';
        print '<span class="fa fa-star"></span>';
        print '<span class="fa fa-star"></span>';
        print '<span class="fa fa-star disabled"></span>';
        break;

    case 5;
        print '<span class="fa fa-star"></span>';
        print '<span class="fa fa-star"></span>';
        print '<span class="fa fa-star"></span>';
        print '<span class="fa fa-star"></span>';
        print '<span class="fa fa-star"></span>';
        break;
    }
}

function getShoppingCart(){
    $cartItems = [];

    $cartItems['1'] = 2;
    $cartItems['2'] = 4;

}

function removeItemFromCart(){
    $cartItems = getShoppingCart();
    unset($cartItems['id']);
    $_SESSION['cart'] = $cartItems;
}

function getQuantity($id, $cart){
    if(isset($cart[$id])){
        return$cart['$id'];
    } else {
        return 0;
    }
}

function increaseCartQuantity($id){
    $cartItems = getShoppingCart();
    $quantity = getQuantity($id, $cartItems);
    $newQuantity = $quantity + 1;
    $cartItems[$id] = $newQuantity;

    $_SESSION['cart'] = $cartItems;
}

function reduceCartQuantity($id){
    $cartItems = getShoppingCart();
    $quantity = getQuantity($id, $cartItems);
    $newQuantity = $quantity - 1;

    if($newQuantity < 1){
        unset($cartItems[$id]);
    } else {
        $cartItems[$id] = $newQuantity;
    }

    $_SESSION['cart'] = $cartItems;
}

function displayProducts(){
    $products = getAllProducts();
    require_once '../Templates/list.php';
}

function displayCart(){
    $products = getAllProducts();
    $cartItems = getShoppingCart();

    if(!empty($cartItems)){
        require_once '../cart.php';
    } else {
        require_once '../emptycart.php';
    }
}
