<?php
$conn=new mysqli("localhost","root","","gift");
 if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
?>