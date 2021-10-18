<?php

include_once 'dbh.php';

$Name = $_POST['name'];
$Email = $_POST['email'];
$Msg = $_POST['message'];

$sql = "INSERT INTO form (name, email, message) VALUES (?,?,?);";

$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
     echo "SQL failed";
} 
else {
    mysqli_stmt_bind_param($stmt, "sss", $Name, $Email, $Msg);
    mysqli_stmt_execute($stmt);
}

header("Location: ../index.php?contact=success")

?>