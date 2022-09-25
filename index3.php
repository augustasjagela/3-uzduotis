<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>3</h1>
    <form method="POST" action="index3.php">
        <input type="text" name="name" placeholder="Username">
        <input type="password" name="pass" placeholder="Password">
        <button type="submit" name="login">Login</button>
    </form>
    <?php
     


     if(isset($_POST["login"])) {
        $name = $_POST["name"];
        $password = $_POST["pass"];

        $trueName = "admin";
        $truePassword == "123456";

        if($name == $trueName && $password == $truePassword) {
            echo "<div> Prisijungėte sėkmingai </div>";
        } else {
            echo "<div> Neteisingi prisijungimo duomenys </div>";
        }
     }
        
     

    ?>
</body>
</html>