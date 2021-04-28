<?php //require_once('../template/header.php');
require_once('data/config.php');

    session_start();

    if (isset($_POST['submit'])) {
        if (($_POST['username'] == $username) || $_POST['password'] == $password) {
            $_SESSION['username'] = $username;
            $_SESSION['Active'] == true;

            echo "Success";
            header("location:home.php");
            exit;
        } else
            echo 'Incorrect Username or password';
    }
?>


<html>
<head
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/contact.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="icon" href="Images/Mists%20favicon-01.png">
</head>



<body>
<div class="nPlain">
    <img src="Images/Mists-01.png" height="90px">
</div>

<div class ="loginDiv">
    <img src="Images/george-pagan-iii-PsifAN6_z-k-unsplash.jpg">
    <h1>Hello and Welcome Back to Mist</h1>
    <h3>You must sign in in order to create an account. If you don't have an account you can register one with us.
        Just click the link and sign up.</h3>
</div>


<div class = "container">
<form method="post">
    <h2>Log in </h2>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Username..." name="Username" required><br>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Password..." name="Password" required size="146"><br><br>
    <input type="submit" value="Login" name="submit">
</form>
    <a href="createAcc.php"><button class="cAcc">Create Account</button></a>
</div><br><br>

</body>


<?php require "Templates/Footer.php"?>
</html>
