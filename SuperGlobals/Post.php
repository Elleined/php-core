    <? 
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>  
        <p>======</p>
        <h3>POST</h3>
        <p>======</p>
        <h1>Remember that post method is more secure and the data you can pass is not limited because it does not show the data in address bar unlike get method</h1>
        <form action="./Post.php" method="post">
            <input type="email" name="email"/>
            <input type="password" name="password"/>
            <input type="submit" value="Register"/>

            <h4><?echo "You're email: $email <br>";?></h4>
            <h4><?echo "You're password: $password <br>";?></h4>
        </form>
        <hr>
    </body>
    </html>