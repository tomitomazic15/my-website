<?php

 $dbhost = "localhost";
 $dbuser = "tomi_user";
 $dbpass = "";
 $db = "tomi_spletna";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
?>