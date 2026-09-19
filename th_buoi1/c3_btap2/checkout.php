<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirm = $_POST["confirm"];
        $email = $_POST["email"];
        if ($confirm == $password) {
            echo "thanks $username, pleaer confirm your email ai $email";
        }
        else {
            echo "<font color = red>incorrect password confirmation</font>";
        }
    ?>
</body>
</html> 