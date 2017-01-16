<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);

$username = $_GET["username"];
$password = $_GET["password"];

if($username == ""){
    echo "Username Missing!";
}
else if($password == ""){
    echo "Password Missing!";
}
else if($username !== "Rhino" || $password !== "Milo"){
    echo "Access Denied!";
}
else{
    echo "Welcome Rhino";
}

?>