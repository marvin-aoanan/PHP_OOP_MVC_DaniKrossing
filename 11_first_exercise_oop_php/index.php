<?php
    declare(strict_types = 1);
    include 'includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
   <div>
    <form action="includes/calc.inc.php" method="POST">
        <h2>My PHP Basic Calculator!</h2>
        <input type="number" name="num1" placeholder="Enter first number">
        <select name="operator">
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="div">Division</option>
            <option value="mul">Multiplication</option>
        </select>
        <input type="number" name="num2" placeholder="Enter second number">
        <button type="submit" name"submit">Calculate</button>
    </form>
   </div>
</body>
</html>