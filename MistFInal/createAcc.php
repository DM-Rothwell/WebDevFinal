<?php
    session_start();

    require_once 'data/config.php';

    $status = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $status = "All fields are compulsory.";
    } else {
        if (strlen($username) >= 255 || !preg_match("/^[a-zA-Z-'\s]+$/", $username)) {
            $status = "Please enter a valid name";
        } else {

            $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";

            $stmt = $pdo->prepare($sql);

            $stmt->execute(['username' => $username, 'password' => $password]);

            $status = "Your message was sent";
            $username = "";
            $password = "";
        }
    }
}


?>




<html>
<head
<link rel="stylesheet" href="style/main.css">
<link rel="stylesheet" href="style/contact.css">
<link rel="stylesheet" href="style/footer.css">
<link rel="icon" href="Images/Mists%20favicon-01.png">

    <title>Create Account</title>
</head>



<body>
<div class="nPlain">
    <img src="Images/Mists-01.png" height="90px">
</div>

<div class ="loginDiv">
    <img src="Images/george-pagan-iii-PsifAN6_z-k-unsplash.jpg">
    <h1>Hello and Welcome to Mist</h1>
    <h3>Here you can create an account so you can login to access our shop!</h3>
</div>

<div class = "container">
    <form method="post">
        <h2>Create an Account</h2>

        <label>Username</label><br>
        <input type="text"  name="username" required>

        <label>Password</label><br>
        <input type="password" value="password" name="password" required size="146">

        <input type="submit" value="Sign Up">
        <br>

    </form>

    <a href="index.php"><button class="cAcc">Login</button></a>
</div><br><br>

</body>


<?php require "Templates/Footer.php"?>
</html>
