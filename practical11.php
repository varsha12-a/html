<!DOCTYPE html>
<html>
<head>
    <title>String Manipulation</title>

    <style>

        body{
            font-family: Arial;
            background-color: #f4f4f4;
            padding: 40px;
        }

        .box{
            background-color: white;
            width: 450px;
            padding: 30px;
            border-radius: 10px;
            margin: auto;
        }

        h2{
            color: blue;
        }

    </style>

</head>

<body>

<div class="box">

    <h2>PHP String Manipulation</h2>

<?php

$str = "Welcome to PHP";

echo "<b>Original String:</b> " . $str . "<br><br>";

echo "<b>String Length:</b> " .
strlen($str) . "<br><br>";

echo "<b>Reverse String:</b> " .
strrev($str) . "<br><br>";

echo "<b>Substring:</b> " .
substr($str, 0, 7);

?>

</div>

</body>
</html>