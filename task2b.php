<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <form method="post">

        <fieldset>
            <legend>Email</legend>
            <input type="text" name="email"><button title="exp:rahim@gmail.com">i</button><hr><br>
            <input type="submit" name="submit">
            
        </fieldset>
    </form>
    <br>
    
</body>
</html>
<?php
if (isset($_POST["submit"])){
    echo "Your Email is: {$_POST["email"]}";
}

?>