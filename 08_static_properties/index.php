<?php
    include 'includes/person.inc.php';
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
        $person =  new Person("Marvin", "Black", 18);
        echo $person->getDrinkingAge();
        //echo Person::getDrinkingAge();
        // echo Person::$drinkingAge;  
        // Person::setDrinkingAge(18);
        // echo Person::$drinkingAge;
    ?>
</body>
</html>