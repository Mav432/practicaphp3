<?php
// Recuperar datos 
$nombre = $_POST["name"];
$edad = $_POST["edad"];
$email = $_POST["email"];
echo "Binevenido ".$nombre . "...tu correo es: ..." .$email;
if ($edad>=18)
    echo "<p> Puede votar </p>";
else
    echo "<p> No puede votar </p>";
?>

<style>
    p{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        text-align: center;
        font-size: 50px;
    }
</style>