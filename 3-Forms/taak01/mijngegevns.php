<?php $color = $_POST["kleurs"];
    echo $color;
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<style>
    body{
        background-color:<?php echo $color; ?>;
    }
</style>
</head>
<body>
<?php echo "naam is " . $_POST["voornaam"] . " " . $_POST["achternaam"] . ", " . "zit in klas: " . $_POST["klas"] . ", is ". $_POST["leeftijd"] . " jaar oud, woont in de " . 
$_POST['adres']  . ' in ' . $_POST['plaatsnaam'] . ' en luisterd graag naar ' . $_POST['muziek'] . ' en geslacht  is ' . $_POST["gender"];
?>
</body>
</html>

