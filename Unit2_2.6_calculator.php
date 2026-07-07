<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Value 1:<input type="number" name="no1" required><br><br>
        Value 2:<input type="number" name="no2" required><br><br>
        Operator: <select name="op" id="" required>
            <option value="add">Addition(+)</option>
            <option value="sub">Subtract(-)</option>
            <option value="mult">Multiply(*)</option>
            <option value="div">Division(/)</option>
            </select><br><br>
        <input type="submit" name="submit" value="calculate"><br><br>
        
    </form>

    <?php
        function calculate($no1,$no2,$op){
            switch($op){
                case 'add':
                    return $no1 + $no2;
                case 'sub':
                    return $no1 - $no2;
                case 'mult':
                    return $no1 * $no2;
                case 'div':
                    return $no2!=0? $no1 / $no2: "Can not divide by zero";
                default:
                return "Invalid Operation";
            }
        }
        if (isset($_POST['submit'])){
            $num1 = $_POST['no1'];
            $num2 = $_POST['no2'];
            $op = $_POST['op'];

            $result = calculate($num1,$num2,$op);
            echo "<h3> Answer: $result</h3>";
        }
    ?>
</body>
</html>