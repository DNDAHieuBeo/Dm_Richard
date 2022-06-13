<?php header("Access-Control-Allow-Origin: http://127.0.0.1:5500"); ?>
<?php
/*  
    Account details:
    -----------------
    https://www.awardspace.com
    richard.sharp@vnuk.edu.vn
    heqnof-kaSpiq-wezbe2

    FTP details:
    -----------------
    host: vnuk007.atwebpages.com
    username: 4109052
    password: fnziliM*6K!CbI]K

    Database details:
    -----------------
    phpMyAdmin: https://supportindeed.com/phpMyAdmin4/
    host/server: fdb32.awardspace.net
    user name: 4109052_vnuk
    database: 4109052_vnuk
    password: 3Mpqe6gcDdan
*/

// MySQLi 
$servername = "fdb32.awardspace.net";
$username = "4109052_vnuk";
$database = "4109052_vnuk";
$password = "3Mpqe6gcDdan";

// create a connection
$conn = new mysqli(
    $servername, 
    $username, 
    $password, 
    $database);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    error_log("Connected!");
}

?>