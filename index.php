<?php
include "index.html";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    echo '<center>';
    echo '<div class="card" style="width: 400px;">';
    echo '<img class="card-img" src="img1.png">';
    echo '<div class="card-body">';
    echo '<h4 class="card-title">';
        echo $name;
    echo '</h4>';
    echo '<p class="card-text">' ;
            echo $email;
    echo '</p>';
    echo '<p class="card-text">' ;
            echo $gender;
    echo '</p>';
    echo '</div>';
    echo '</div>';
    echo '</center>';

    
}