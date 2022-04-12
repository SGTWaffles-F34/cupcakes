<!--
Description: cupcake confirmation
-->
<?php

/*function getFlavor()
{
    $flavor = array('Chocolate', 'Vanilla', 'Tiramisu', 'Whiskey Maple Bacon', 'Red Velvet', 'Carrot Cake');
    return $flavor;
}*/

$name = $_GET['name'];
$flavor = implode("<li>", $_GET['flavor']);

define("Cupcake_Cost", 3.50);

$numCupcakes = sizeof($_GET['flavor']);

$price = 0.0;
$price += $numCupcakes * Cupcake_Cost;
//$price += $flavor * Cupcake_Cost;

$price = number_format($price, 2);


thanks($name);
echo '<h3>Order Summary:</h3>';
echo"<p><li>$flavor</li></p>";
echo"<p>Order Total: $price</p>";

function thanks($name = "")
{
    $msg = "<h1> Thank you, $name, for your order!";
    /*if($name != "")
    {
        $msg .= ", $name";
    }
    $msg .= "!</h1>";*/
    echo $msg;
}


?>