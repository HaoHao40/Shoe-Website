<?php
    $db = mysqli_connect("localhost", "root", "" , "web dev");
		
    if(!$db) {
        die("Connection faied: " . mysqli_connect_error());
    }
?>