<?php

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "lan_demo";
$conn = new mysqli($localhost, $username, $password, $dbname);

if (isset($_POST['submit'])) {




    $content = $_POST['article-content'];
    $hello = "ashfg";
    $insert = "insert into language(id,content,lan_type,remarks) values('11','$content','English','hello world')";

    $execute = mysqli_query($conn, $insert);

    if ($execute == true) {
        echo "ok";
    } else {
        echo "not";
    }
    // var_dump($content);
} else {

    echo "not";
}