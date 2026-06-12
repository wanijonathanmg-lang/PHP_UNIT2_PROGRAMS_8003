<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        error_reporting(0)
    ?>
    <?php
    $emp = array(
        array(1,"John","CEO"),
        array(2,"Nathan","Manager")
    );

    for($row=0;$row<3;$row++){
        for($col=0;$col<3;$col++){
            echo $emp[$row][$col]." ";
        }
        echo "<br>";
    }
    ?>
</body>
</html>