<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>
</head>

<body>
    <p>========</p>
    <h3>FILES</h3>
    <p>========</p> 
    <h2>Only available with method of post and with enctype="multipart/form-data" in form tag</h2>

    <h1>If theres an error just ignore it upload a file and should work!</h1>

    <form action="./UploadAttachment.php" method="post" enctype="multipart/form-data">
        <label for="attachment">Attachment: </label>
        <input type="file" name="attachment" id="attachment" /><br>
        <input type="submit" value="Upload"/>
    </form>
</body>
</html>