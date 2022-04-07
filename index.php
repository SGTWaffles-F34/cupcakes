<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcake Form</title>
</head>
<body>
<h1>Cupcake Fundraiser</h1>

<form id="cupcake-form" action="process.php" method="post">
    <p>Your Name:</p>
<input type="text" id="name" placeholder="Enter your name!" name="name">
    <br>
    <p>Cupcake Flavors</p>

    <ul style="list-style-type: none">
        <li><input type="checkbox" name="flavor[]" value="Chocolate"> Chocolate</li>
        <li><input type="checkbox" name="flavor[]" value="Vanilla"> Vanilla</li>
        <li><input type="checkbox" name="flavor[]" value="Tiramisu"> Tiramisu</li>
        <li><input type="checkbox" name="flavor[]" value="Whiskey Maple Bacon"> Whiskey Maple Bacon</li>
        <li><input type="checkbox" name="flavor[]" value="Red Velvet"> Red Velvet</li>
        <li><input type="checkbox" name="flavor[]" value="Carrot Cake"> Carrot Cake</li>
    </ul>

    <button type="submit" id="submit">Submit</button>
</form>
</body>
</html>
