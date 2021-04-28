<?php
    session_status();

    //include 'data/functions.php';
    include 'data/config.php';

    //$userDate = checkLogin($conn);

    require "Templates/Header.php"?>

<html>
<head>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/contact.css">
    <link rel="icon" href="Images/Mists%20favicon-01.png">

    <title>Home</title>
</head>

<body>
<div class="indexFlex">
    <h2 class = "welcometoM">Welcome to MISTS</h2>

    <div class="lorumIpsumIndex">
        <hr>
        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum
            interdum venenatis. Orci varius natoque penatibus et magnis dis parturient
            montes, nascetur ridiculus mus. Morbi ac sem lacinia.
            fringilla mi non, aliquam nunc. Nunc sit amet efficitur arcu. Phasellus consectetur
            eget sem ac dictum. Aliquam lacinia viverra ullamcorper. Sed euismod nunc orci, nec mattis
            augue accumsan vitae. Suspendisse non posuere turpis.<br>

            Vivamus euismod tincidunt felis in venenatis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Aenean tristique dictum tempus. Donec rutrum sollicitudin velit, fermentum feugiat libero pharetra ac.
            Morbi laoreet pulvinar efficitur. Morbi pharetra felis in est aliquam, et aliquet metus posuere.<br>


            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tortor sem, vehicula a imperdiet id,
            commodo sit amet ante. Morbi non lectus iaculis, maximus magna eu, sollicitudin risus. Donec quis finibus
            erat. Donec tincidunt nibh nibh, ac porta arcu gravida sed. Praesent consequat purus sed lorem varius
            ullamcorper quis viverra diam.
        </h3>
    </div>

    <div class="hotDeals">
        <h2>Hot Deals</h2>
        <h3>Right now you can get these for €210 each just hop over to the store page to add to cart</h3>
        <div class="hotDealsPic">
            <img src="Images/leon-skibitzki-BrDBqpsbITE-unsplash.jpg" style="padding-left: 6rem">
            <img src="Images/leon-skibitzki-mHUk4Se7peY-unsplash.jpg" style="padding-left: 6rem">
            <img src="Images/leon-skibitzki-NMyuo1hoCAA-unsplash.jpg" style="padding-left: 6rem">
            <img src="Images/leon-skibitzki-TjbedCFPQdc-unsplash.jpg" style="padding-left: 6rem">
        </div>
    </div>
</div>
</div> <br>
</body>
<?php require "Templates/Footer.php"?>
</html>
