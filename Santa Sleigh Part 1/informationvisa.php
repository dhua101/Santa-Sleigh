<?php
    error_reporting(E_ALL ^ E_DEPRECATED);
    $file = fopen('ordersmastercard.txt', 'a');

    //$servername = "127.0.0.1:3306";
    $servername = "localhost";
    $username = "dhua3";
    $password = "OpTicGen101";

    // Create the connection
    $connection = mysql_connect($servername, $username, $password);

    // Check the connection
    if(!$connection) {
        die("Connection Failed");
    }

    mysql_select_db("santasleigh_db");

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
    $date = date("M d, Y H:i:sa");

    $sqlinsert = "INSERT INTO information_tbl(first_name, last_name, address_first, address_second, city, province, country, postal_zip, email, phone, extra, date_info) VALUES('$firstname', '$lastname', '$address1', '$address2', '$city', '$province', '$country', '$postalzip', '$email', '$phone', '$extra', '$date')";

    if(!mysql_query($sqlinsert)) {
        die("New Record Creation Failed");
    }

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
    mysql_close($connection);

    header('Location: visa.php');
?>