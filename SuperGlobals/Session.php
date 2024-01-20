<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>
    <p>========</p>
    <h3>SESSION</h3>
    <p>========</p>
    <a target="_blank" href="https://www.php.net/manual/en/ref.session.php">PHP Session Documentation</a>
    <h3>Session are more preferred than cookies because session are stored in server side unlike cookies that is stored in client side which leads to security vulnerability.</h3>
    <h2>!!!Note: calling session_start() method is a must! to properly use the php session.</h2>
    <h2>Setting the key value pair in $_SESSION["myCustomKey"] = "myCustomValue" <?php  $_SESSION["myCustomKey"] = "MyCustomerValue"; ?> </h2>
    <h2>Getting the value of our prevoiusly set key value pair using $_SESSION["myCustomKey"] value fetched: <?php echo $_SESSION["myCustomKey"] ?> </h2>
    <h2>Unsetting/ Removing specific key value pair in session session_unset() <?php  session_unset() ?></h2>
    <h2>Getting the value of our prevoiusly set key value pair using $_SESSION["myCustomKey"] value fetched: <?php echo $_SESSION["myCustomKey"] ?> </h2>
</body>

</html>