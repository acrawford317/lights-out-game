<?php

$json = [];

$rows = $_GET["rows-num"];
$columns = $_GET["columns-num"];
$length = $_GET["columns-num"] * $_GET["rows-num"];

if($length<=5){
    $json = [1, 2, 3, 4, 5];
}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">  
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Ashley Crawford">
        <meta name="description" content="Lights Out Game - setup">  
        <title>Lights Out Game Setup</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 

        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    </head>
    <body>

    <?php
        echo $length;
    ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>