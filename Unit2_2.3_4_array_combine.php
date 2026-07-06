<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h3> Array combine</h3>";
    $keys=array("name","age","country");
    $values=array("Nathan",21,"S.Sudan");
    print_r(array_combine($keys,$values));

    ?>
</body>
</html>