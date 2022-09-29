<?php
require"../require/config.php";

//define y inicializa las variables que se van a usar del formulario.
$name = $email = $phone = $street = $city = $state = $zip = $other = $news = $newscheck="";

function limpiar_dato($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    function validar_name($name){
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            return false;
            }else{
                return true;
            }
    function validar_email($email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
            }else{
                return true;
                }
        }
        
        function validar_phone($phone){
            if(preg_match('(/^[0-9]{10}+$/)',$phone)) {
                echo"valid phone number";
            } else {
                echo "invalid phone number";
            }
        }
    }




//Si (llega datos)Entonces

if($_SERVER["REQUEST_METHOD"] == "POST"){
    print_r ($_POST);
    
    if(!empty($_POST["name"]) || !empty($_POST["email"]) || !empty($_POST["phone"])){
    echo "<br><strong>name post hay datos</strong><br>";

    $name = limpiar_dato($_POST["name"]);
    echo"$name <br>";
    $email = limpiar_dato($_POST["email"]);
    echo"$email <br>";
    $phone = limpiar_dato($_POST["phone"]);
    echo"$phone<br>";
    $street = limpiar_dato($_POST["street"]);
    $city = limpiar_dato($_POST["city"]);
    $state = limpiar_dato($_POST["state"]);
    $zip = limpiar_dato($_POST["zip"]);
    $other =limpiar_dato($_POST["other"]);
    $news = limpiar_dato($_POST["news"]);
    $newscheck = limpiar_dato($_POST["newscheck"]);

    

        //nombre , email y nº telefono.
        function validar_name($name){
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                return false;
                }else{
                    return true;
                }
        function validar_email($email){
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
                }else{
                    return true;
                    }
            }
            
            function validar_phone($phone){
                if(preg_match('(/^[0-9]{10}+$/)',$phone)) {
                    echo"valid phone number";
                } else {
                    echo "invalid phone number";
                }
            }
        }
    }
   

?>