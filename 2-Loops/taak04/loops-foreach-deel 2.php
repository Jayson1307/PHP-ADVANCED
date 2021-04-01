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
    foreach($klassen as $klas) { ?>
      <option value="<?php echo $klas; ?>">klas: <?php echo $klas; ?> </option>
  <?php
    } ?>
</select>
<input type="submit" value="versturen">
</form>
</body>
</html>