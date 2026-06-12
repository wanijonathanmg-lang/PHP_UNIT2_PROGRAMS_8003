<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="txt[]"><br>
        <input type="text" name="txt[]"><br>
        <input type="text" name="txt[]"><br>
        <input type="text" name="txt[]"><br>
        <input type="text" name="txt[]"><br>
        <input type="submit" value="Enter">
    </form>

    <?php

    if (isset($_GET['txt'])) {
        $txt = $_GET['txt'];

        echo "<h3>User Entered</h3>";
        foreach ($txt as $tx) {
            echo $tx . "<br>";
        }

        sort($txt);

        echo "<h3>Sorted Array</h3>";
        foreach ($txt as $tx) {
            echo $tx . "<br>";
        }
    }
    ?>
</body>

</html>