<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $laptops = array(
        "Dell" => array("company" => "DELL", "price" => 65000),
        "HP" => array("company" => "Hp co", "price" => 56000),
        "Lenovo" => array("company" => "Slavokia", "price" => 72000)
    );
    ?>

    <form action="" method="get">
        <h3>Enter any 3 brands of Laptop</h3>
        <input type="text" name="laptop[]"><br>
        <input type="text" name="laptop[]"><br>
        <input type="text" name="laptop[]"><br>

        <input type="submit" value="Enter">
    </form>
    <?php
    if (isset($_GET['laptop'])) {
        foreach ($_GET['laptop'] as $name) {
            if (isset($laptops[$name])) {
                echo "<h4>Laptop Details</h4>";
                echo "Laptop Name: " . $name . "<br>";
                echo "Company: " . $laptops[$name]['company'] . "<br>";
                echo "Price: " . $laptops[$name]['price'] . "<br><br>";
            }
        }
    }
    ?>
</body>

</html>