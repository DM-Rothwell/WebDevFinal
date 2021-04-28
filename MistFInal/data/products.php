<?php

//    - Code taken from the example given to us on moodle from Matt Smiiths PHP Book

require_once 'functions.php';

function getAllProducts()
{
    $products = [];

    $product['1'] = [
        'price' => '220',
        'shoe' => 'Yeezy 350',
        'shoedesc' => 'Sapien et ligula ullamcorper malesuada proin libero nunc consequat.'
    ];

    $product['2'] = [
        'price' => '210',
        'shoe' => 'Jordan 1',
        'shoedesc' => 'Tellis in hac habitasse platea dictumut vestibla commodo consequat. '
    ];

    $product['3'] = [
        'price' => '300',
        'shoe' => 'Jordan 1 Low',
        'shoedesc' => 'Magna fringilla urna porttitor rhoncus dolor purus non enim.'
    ];

    $product['4'] = [
        'price' => '150',
        'shoe' => 'SB Dunks',
        'shoedesc' => 'Alaoreet sit amet cursus sit amet dictum sit amet.'
    ];

    $product['5'] = [
        'price' => '100',
        'shoe' => 'Air Force 1',
        'shoedesc' => 'Electus nilla at volupat diam ut venenatis tellus in.'
    ];

    $product['6'] = [
        'price' => '450',
        'shoe' => 'Jordan 1 ',
        'shoedesc' => 'Eelit eget gravida um sociis penatibus et magnis.'
    ];

    $product['7'] = [
        'price' => '80',
        'shoe' => 'Kids - Air Presto',
        'shoedesc' => 'Utortor dignissim convallis aenean et tortor at risus viverra.'
    ];

    $product['8'] = [
        'price' => '85',
        'shoe' => 'Kids = Acne Studios',
        'shoedesc' => 'Venenatis urna cursus eget nunc scelerisque viverra mauris in.'
    ];

    return $products;
}
require_once '../Templates/list.php';