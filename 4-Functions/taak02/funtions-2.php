<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function rekenUit(int $a, int $b, int $c) {
            echo "<li>De som $a + $b + $c komt uit op: ";
            return $a + $b + $c ."<br> </li>";
        }
        echo rekenUit(4, 5, 10);
        echo rekenUit(9, 73, 900000);
        echo rekenUit(420, 69, 666);
    ?>
</body>
</html>