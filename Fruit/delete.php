<?php
    if (isset($_GET["id"])) {
       $id=$_GET["id"];
    }
?>
 <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testphp";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "DELETE FROM fruit WHERE id=$id";
    $result = $conn->query($sql);
    header("location:getdata.php");
?>