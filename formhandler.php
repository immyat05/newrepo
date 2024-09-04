<?php

if($_SERVER["REQUEST_METHOD"]) == "POST" {

    $username = htmlspecialchars($_POST["username"]);
    $lastname = htmlspecialchars(["lastname"]);
    $favoritepet = htmlspecialchars($_POST["favoritepet"]);

    echo "Hello " . $username . $lastname . 

}