<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "shopdb";

    // create connection
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM shopclients WHERE id=$id";
    $connection->query($sql);

}

header("location: /myshop/index.php");
exit;
?>