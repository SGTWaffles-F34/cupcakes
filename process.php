<!--
Description: cupcake confirmation
-->
<?php

/*function getFlavor()
{
    $flavor = array('Chocolate', 'Vanilla', 'Tiramisu', 'Whiskey Maple Bacon', 'Red Velvet', 'Carrot Cake');
    return $flavor;
}*/

$isValid = true;

//check if a name was given
if(empty($_GET['name'])){
    $isValid = false;
}

$name = $_POST['name'];


$flavor = implode("<li>", $_GET['flavor']);

define("Cupcake_Cost", 3.50);

$numCupcakes = sizeof($_GET['flavor']);
$price = 0.0;
$price += $numCupcakes * Cupcake_Cost;
//$price += $flavor * Cupcake_Cost;

$price = number_format($price, 2);

if($isValid == false){
    echo "Sorry you didn't provide a name for your order! try again please!";
}
else {
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

    thanks($name);
    echo '<h3>Order Summary:</h3>';
    echo "<p><li>$flavor</li></p>";
    echo "<p>Order Total: $price</p>";


}
?>