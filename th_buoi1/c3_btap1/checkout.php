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
        if ($username == "admin" && $password = "123456") {
            echo "<font color=red>Welcome to, ".$username."</font>";
        }
        else {
            echo "<font color = red>Username or password is incorrect!, vui long danng nhap lai</font>";
        }
    ?>
</body>
</html> 