<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="invoer" action="advanced-2.php" method="get">
achtergrondkleur:
<select name="achtergrond" id="achtergrond">
<?php
$kleuren = array("red", "blue", "green", "black", "brown");
for ($i=0; $i < count($kleuren) ; $i++) { 
    echo "<option value=$kleuren[$i]>$kleuren[$i]</option>";
}
    

?>
</select>
<br>
<br>

<a>tekst kleur</a>
<select name="tekstkleur" id="tekstkleur">
<?php
$kleuren = array("red", "blue", "green", "black", "brown");
foreach($kleuren as $colors){
    echo "<a><option value=$colors>$colors</option></a>";
}
?>
</select>
<br>
<br>

<a>border</a>
<input type= "text" name="border">
<br>
<br>

<a>padding</a>
<input type= "text" name= "padding">
<br> 
<br>
<a> margin </a>

<input type="submit"name="submit"value="verstuur">
</form>
</body>
</html>