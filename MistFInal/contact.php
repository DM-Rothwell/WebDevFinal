<?php require "Templates/Header.php"; ?>

<?php
 session_start();

 include_once "data/config.php";

$status = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name) || empty($email) || empty($message)) {
        $status = "All fields are compulsory.";
    } else {
        if (strlen($name) >= 255 || !preg_match("/^[a-zA-Z-'\s]+$/", $name)) {
            $status = "Please enter a valid name";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $status = "Please enter a valid email";
        } else {

            $sql = "INSERT INTO contactinfo (name, email, message) VALUES (:name, :email, :message)";

            $stmt = $pdo->prepare($sql);

            $stmt->execute(['name' => $name, 'email' => $email, 'message' => $message]);

            $status = "Your message was sent";
            $name = "";
            $email = "";
            $message = "";
        }
    }
}


?>


<!--
    I used the following youtube video to help me make with the php code to get my contact form to write to the database.
    https://www.youtube.com/watch?v=aaeDe8l1eFY&t=168s

-->


<html>
<head>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/contact.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="icon" href="Images/Mists%20favicon-01.png">

    <title>Contact</title>
</head>

<body>
<div class="hotDeals">
    <h2>Let Us Know Whats on Your Mind</h2>
</div>

    <form action="" method="POST" class="main-form">
    <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" name="name" id="name" class="gt-input"
               value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $name ?>">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="gt-input"
               value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $email ?>">
    </div>

    <div class="form-group">
        <label for="message">Your Message</label>
        <textarea name="message" id="message" cols="30" rows="10"
                  class="gt-input gt-text"><?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $message ?></textarea>
    </div>

    <input type="submit" class="gt-button" value="Submit">

    <div class="form-status">
        <?php echo $status ?>
    </div>

<div id="map"></div>

<div class="mapStyle">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d8004.549870319391!2d-6.360018997025701!3d53.383219843958955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sie!4v1617113875053!5m2!1sen!2sie"
        width="56%" height="450" style="border:0;" allowfullscreen="" loading="lazy" align="middle"></iframe>
</div>




</body>
<?php require "Templates/Footer.php"?>

</html>