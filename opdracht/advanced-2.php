<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: <?php echo $_POST["achtergrond"] ?>;
            color: <?php echo $_POST["tekstkleur"]?>;

        }
        table,tr,td,th {
                    padding: <?php echo $_POST["padding"] ?>px;
                    border: <?php echo $_POST["border"] ?>px solid grey;
                }

    </style>
</head>
<body>
    <table border="$info2" >
        <thead>
            <tr>
              <th>keys</th>
              <th>values</th>
            </tr>
            </thead>
            <tbody>
            <?php
                    $info1= array("naam"=>"Naam", "achternaam"=>"Achternaam", "klas"=>"Klas", "muziek"=>"Favorite music");
                     $info2= array("naam"=>"Jayson", "achternaam"=>"van Olffen", "klas"=>"0D", "muziek"=>"Only wanna be with you- Post malone");
                        function maakrij($info1){
                                return $info1;
                        }
                            foreach($info1 as $index => $ding){
                                echo "<a><tr><td> $ding </td><td> $info2[$index] </td></tr></a>";
                            }

                    ?>
  

</body>
</html>