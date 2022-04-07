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

<form id="cupcake-form" action="#" method="post">
    <p>Your Name:</p>
<input type="text" id="name" placeholder="Enter your name!" name="name">
    <br>
    <p>Cupcake Flavors</p>
    <br>

    <ul>
        <li><input type="checkbox" name="flavor[]"> Chocolate</li>
        <li><input type="checkbox" name="flavor[]"> Vanilla</li>
        <li><input type="checkbox" name="flavor[]"> Tiramisu</li>
        <li><input type="checkbox" name="flavor[]"> Whiskey Maple Bacon</li>
        <li><input type="checkbox" name="flavor[]"> Red Velvet</li>
        <li><input type="checkbox" name="flavor[]"> Carrot Cake</li>
    </ul>

    <button type="submit" id="submit">Submit</button>
</form>
</body>
</html>
