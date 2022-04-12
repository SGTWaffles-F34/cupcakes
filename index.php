<!--
Angel Campos
Gavin Sherman
April 7, 2022
https://acampos.greenriverdev.com/328sdev/team-programming/
Description: cupcake request form
-->
<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcake Form</title>
    <link rel="stylesheet" href="style/cupcake.css">

</head>
<body>

<h2>Cupcake Fundraiser</h2>

<div class="main">
<form id="cupcake-form" action="process.php" method="get">
    <div class="form-group">
        <p>Your Name:</p>
        <input type="text" id="name" placeholder="Please enter your name" name="name">
        <span class="err" id="err-name">Please Enter Name</span>
    </div>
    <br>
    <div class="form-group">
        <p>Cupcake Flavors:</p>

        <ul style="list-style-type: none">
            <li><input type="checkbox" name="flavor[]" value="Chocolate"> Chocolate</li>
            <li><input type="checkbox" name="flavor[]" value="Vanilla"> Vanilla</li>
            <li><input type="checkbox" name="flavor[]" value="Tiramisu"> Tiramisu</li>
            <li><input type="checkbox" name="flavor[]" value="Whiskey Maple Bacon"> Whiskey Maple Bacon</li>
            <li><input type="checkbox" name="flavor[]" value="Red Velvet"> Red Velvet</li>
            <li><input type="checkbox" name="flavor[]" value="Carrot Cake"> Carrot Cake</li>
        </ul>
        <span class="err" id="err-flavor">Please select a cupcake flavor</span>
    </div>

        <button type="submit" id="submit">Order</button>
</form>
</div>




<?php
?>
</body>
</html>
