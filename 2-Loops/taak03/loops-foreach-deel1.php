<html>
<head></head>
<style></style>
<body>
    <?php
        $dagen = array("maandag", "dinsadg", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag");
        foreach ($dagen as $key => $value) {
            echo "<ul> $value is een dag van de week </ul>";
        }
    ?>
</body>


</html>