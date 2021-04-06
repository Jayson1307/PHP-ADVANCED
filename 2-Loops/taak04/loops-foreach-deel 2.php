<!DOCTYPE html>
<html>
<body>
 
<?php
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
 
?>
<form method="post">
<select name="Klasnaam">
    <option value="">--Please choose an option--</option>
    <?php
    foreach($klassen as $value) { ?>
      <option value="<?php echo $value; ?>">klas: <?php echo $value; ?> </option>
  <?php
    } ?>
</select>
<input type="submit" value="versturen">
</form>
</body>
</html>