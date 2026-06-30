<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arr = array(
            "blue",
            "orange",
            "white",
            "green",
            "pink",
            "yello",
            "purple",
            "gray"
        );

        echo "<h3> Original Array</h3>";
        foreach($arr as $ar){
            echo $ar."<br>";
        }
        echo "<h3>Sorted Array</h3>";
        sort($arr);
        foreach($arr as $ar){
            echo $ar."<br>";
        }
        

    ?>
</body>
</html>