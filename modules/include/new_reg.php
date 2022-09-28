<?php
require"../require/config.php";

//define y inicializa las variables que se van a usar del formulario.
$name = $email = $phone = $street = $city = $state = $zip = $other = $news = $newscheck="";

//Si (llega datos)Entonces

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(!empty($_POST["name"]) || !empty($_POST["email"]) || !empty($_POST["phone"])){
    echo "<br><strong>name post hay datos</strong><br>";
    }
}
?>