<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (strlen(preg_replace("/[^a-z]/i", "", $_POST['item'])) >= 3) {
        $_SESSION['shop'][] = ['item' => $_POST['item'], 'category' => $_POST['category']];
    }


    header("Location: ./index.php");
    die;
}



if (!isset($_SESSION['shop'])) {
    $_SESSION['shop'] = [];
}


?>
