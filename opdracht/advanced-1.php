<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>letterkleur:</h3>
    <form action="radio">
        <select name="tekstkleur" id="tekstkleur">
        <?php $kleuren = array("red ", "blue ", "green ", "black ", "brown");
    foreach ($kleuren as $tekstkleur) {
        echo "<option value=$tekstkleur>$tekstkleur>";
    }?>
    <br>
        </select>
        <input type="text" name="border">
    </form>
    
</body>
</html>