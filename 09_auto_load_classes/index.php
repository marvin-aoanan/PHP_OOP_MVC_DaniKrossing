<?php
    include 'includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $person =  new Person\Person("Marvin", "", 21);
        echo $person->getName();
        echo "<br>";
        $house =  new House("Cavite");
        echo $house->getHouse();
    ?>
</body>
</html>