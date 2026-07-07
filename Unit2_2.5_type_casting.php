<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $var = "123456";
    echo "<h3>Type Casting</h3>";
    echo "Original Value: $var <br>";
    echo "Original Data Type: " . gettype($var) . "<br><br>";

    settype($var, "double");
    echo "<b>After Converting to Double:</b>".$var . "<br>";
    echo "<b>Data Type:</b>" .gettype($var) . "<br><br>";

    settype($var, "integer");
    echo "<b>After settype() to Integer:<br></b>";
    echo "Value: $var <br>";
    echo "<b>Data Type: </b>" . gettype($var) . "<br><br>";

   
    settype($var, "boolean");
    echo "<b>After settype() to Boolean:<br></b>";
    echo "Value: ";
    var_dump($var); 
    echo "<b><br>Data Type: </b>" . gettype($var);
    ?>
</body>

</html>