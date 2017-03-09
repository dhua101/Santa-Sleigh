<?php
    $file = fopen('orders.txt', 'a');

    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $address1 = $_GET['address1'];
    $address2 = $_GET['address2'];
    $city = $_GET['city'];
    $province = $_GET['province'];
    $country = $_GET['country'];
    $postalzip = $_GET['postalzip'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $extra = $_GET['extra'];

    $breaks = "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=";

    fputs($file, $firstname . PHP_EOL);
    fputs($file, $lastname. PHP_EOL);
    fputs($file, $address1. PHP_EOL);
    fputs($file, $address2. PHP_EOL);
    fputs($file, $city. PHP_EOL);
    fputs($file, $province. PHP_EOL);
    fputs($file, $country. PHP_EOL);
    fputs($file, $postalzip. PHP_EOL);
    fputs($file, $email. PHP_EOL);
    fputs($file, $phone. PHP_EOL);
    fputs($file, $extra. PHP_EOL);
    
    fputs($file, $breaks . PHP_EOL);

    fclose($file);

    header('Location: shoppingcart.php');
?>