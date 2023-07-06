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
        $obj = new NewCLass("",  "",  "");
        unset($obj); //unset or destroy an object after we create them.
        echo $obj->getProperty();
        echo $obj->setProperty("This is new set data...");
        echo $obj->getProperty();
        
    ?>
</body>
</html>