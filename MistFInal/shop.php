<?php
require "Templates/Header.php";
      require "data/config.php";
$conn = $pdo;

?>

<html>
<head>
    <link rel="icon" href="Images/Mists%20favicon-01.png">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/contact.css">
    <link rel="stylesheet" href="style/shop.css">
    <link rel="stylesheet" href="style/main.css">
    <title>Shop</title>
</head>
<body>

<div class="hotDealsOne">
    <h2>Our Products</h2>
        <h3>Here You Can See All Our Products We Have To Offer</h3>
    <div class="hotDealsPicOne">

        <div class="card">
            <img src="Images/erik-mclean-ByjIzFupcHo-unsplash.jpg" style="width: 100%"></a>
            <h1><?php $sql = "SELECT * FROM data WHERE id = 1"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["shoe"];
                    }
                }
                $conn == null;
                ?>
            </h1>
            <p class="price">€<?php $sql = "SELECT * FROM data WHERE id = 1"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["price"];
                    }
                }
                $conn == null;
                ?></p>
            <p><?php $sql = "SELECT * FROM data WHERE id = 1"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["shoedesc"];
                    }
                }
                $conn == null;
                ?></p>
            <p><button>Add to Cart</button></p>
        </div>

        <div class="card">
            <img src="Images/leon-skibitzki-mHUk4Se7peY-unsplash.jpg" style="width: 100%"></a>
            <h1><?php $sql = "SELECT * FROM data WHERE id = 2"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["shoe"];
                    }
                }
                $conn == null;
                ?>
            </h1>
            <p class="price">€<?php $sql = "SELECT * FROM data WHERE id = 2"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["price"];
                    }
                }
                $conn == null;
                ?></p>
            <p><?php $sql = "SELECT * FROM data WHERE id = 2"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["shoedesc"];
                    }
                }
                $conn == null;
                ?></p>
            <p><button>Add to Cart</button></p>
        </div>

        <div class="card">
            <img src="Images/leon-skibitzki-BrDBqpsbITE-unsplash.jpg" style="width: 100%"></a>
            <h1><?php $sql = "SELECT * FROM data WHERE id = 3"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["shoe"];
                    }
                }
                $conn == null;
                ?>
            </h1>
            <p class="price">€<?php $sql = "SELECT * FROM data WHERE id = 3"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["price"];
                    }
                }
                $conn == null;
                ?></p>
            <p><?php $sql = "SELECT * FROM data WHERE id = 3"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["shoedesc"];
                    }
                }
                $conn == null;
                ?></p>
            <p><button value ="button3">Add to Cart</button></p>
        </div>


        <div class="card">
            <img src="Images/leon-skibitzki-TjbedCFPQdc-unsplash.jpg" style="width: 100%"></a>
            <h1><?php $sql = "SELECT * FROM data WHERE id = 4"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["shoe"];
                    }
                }
                $conn == null;
                ?>
            </h1>
            <p class="price">€<?php $sql = "SELECT * FROM data WHERE id = 4"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["price"];
                    }
                }
                $conn == null;
                ?></p>
            <p><?php $sql = "SELECT * FROM data WHERE id = 4"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["shoedesc"];
                    }
                }
                $conn == null;
                ?></p>
            <p><button>Add to Cart</button></p>
        </div>

        <div class="card">
            <img src="Images/leon-skibitzki-tRaq_7NaxHo-unsplash.jpg" style="width: 100%"></a>
            <h1><?php $sql = "SELECT * FROM data WHERE id = 5"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["shoe"];
                    }
                }
                $conn == null;
                ?>
            </h1>
            <p class="price">€<?php $sql = "SELECT * FROM data WHERE id = 5"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["price"];
                    }
                }
                $conn == null;
                ?></p>
            <p><?php $sql = "SELECT * FROM data WHERE id = 5"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["shoedesc"];
                    }
                }
                $conn == null;
                ?></p>
            <p><button>Add to Cart</button></p>
        </div>

        <div class="card">
            <img src="Images/travis-essinger-iOv3CqiZLtE-unsplash.jpg" style="width: 100%"></a>
            <h1><?php $sql = "SELECT * FROM data WHERE id = 6"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["shoe"];
                    }
                }
                $conn == null;
                ?>
            </h1>
            <p class="price">€<?php $sql = "SELECT * FROM data WHERE id = 6"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["price"];
                    }
                }
                $conn == null;
                ?></p>
            <p><?php $sql = "SELECT * FROM data WHERE id = 6"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["shoedesc"];
                    }
                }
                $conn == null;
                ?></p>
            <p><button>Add to Cart</button></p>
        </div>

        <div class="card">
            <img src="Images/leon-skibitzki-NMyuo1hoCAA-unsplash.jpg" style="width: 100%"></a>
            <h1><?php $sql = "SELECT * FROM data WHERE id = 7"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["shoe"];
                    }
                }
                $conn == null;
                ?>
            </h1>
            <p class="price">€<?php $sql = "SELECT * FROM data WHERE id = 7"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["price"];
                    }
                }
                $conn == null;
                ?></p>
            <p><?php $sql = "SELECT * FROM data WHERE id = 7"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["shoedesc"];
                    }
                }
                $conn == null;
                ?></p>
            <p><button>Add to Cart</button></p>
        </div>

        <div class="card">
            <img src="Images/raoul-croes-94KcLYsihLY-unsplash.jpg" style="width: 100%"></a>
            <h1><?php $sql = "SELECT * FROM data WHERE id = 8"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["shoe"];
                    }
                }
                $conn == null;
                ?>
            </h1>
            <p class="price">€<?php $sql = "SELECT * FROM data WHERE id = 8"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["price"];
                    }
                }
                $conn == null;
                ?></p>
            <p><?php $sql = "SELECT * FROM data WHERE id = 8"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["shoedesc"];
                    }
                }
                $conn == null;
                ?></p>
            <button>Add to Cart</button>
        </div>
    </div>
</div>


</body>

</html>



<?php require "Templates/Footer.php"?>