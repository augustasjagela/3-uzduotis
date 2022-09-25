<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index5.php" method="post">
        <input type="text" name="spalva" placeholder="black, red or blue?">
        <button type="submit" name="nuspalvink">Nuspalvink</button>
    </form>

    <?php 
        if(isset($_POST["spalva"])){
            $color = $_POST["spalva"];
            if($color == "black") {
                $color = "black";
            } else if($color == "red") {
                $color = "red";
            } else if($color == "blue") {
                $color = "blue";
            } else {
                $color = "white";
            }
        }
    ?>

        <style>
            body {
                background-color: <?php echo $color ?>;
            }
        </style>

</body>
</html>