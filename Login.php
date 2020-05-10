<?php
session_start();
$_SESSION["username"]="fajrian00";
$_SESSION["password"]="12345678";
if (isset($_POST["login"])){
    if ($_POST["username"]=="fajrian00" && $_POST["password"]=="12345678"){
        header("location:home.php");
    }else{
        echo "Maaf Username Atau Password Salah !";
    }
}
?>