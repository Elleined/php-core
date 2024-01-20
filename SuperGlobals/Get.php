<?php
    $email = isset($_GET["email"]) ? $_GET["email"] : "";
    $password = isset($_GET["password"]) ? $_GET["password"] : "";
    
    if (isset($_SESSION["myCustomKey"])) {
        echo "Accessing the session key value in different file. this file: " . $_SESSION["myCustomKey"];
    }
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>  
        <p>=====</p>
        <h3>GET</h3>
        <p>=====</p>
        <h1>Remember that get method is not secure and the data you can pass is limted because it shows the data in address bar</h1>
    
        <form action="./Get.php" method="get">
            <input type="email" name="email"/>
            <input type="password" name="password"/>
            <input type="submit" value="Register"/>

            <h4><?echo "You're email: $email <br>";?></h4>
            <h4><?echo "You're password: $password <br>";?></h4>
        </form>
        <hr>
    </body>
    </html>