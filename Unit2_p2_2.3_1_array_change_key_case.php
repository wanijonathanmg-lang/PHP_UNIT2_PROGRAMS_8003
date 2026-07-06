<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        echo "<h3>array_change_key_case</h3>";
        $ar = array("name"=>"Jonah","city"=>"Rajkot","course"=>"computer science");
        
        
        echo "<h3>lower case array</h3>";
        print_r(array_change_key_case($ar,CASE_LOWER));
         echo "<h3>upper case array</h3>";
        print_r(array_change_key_case($ar,CASE_UPPER));
    ?>
</body>
</html>