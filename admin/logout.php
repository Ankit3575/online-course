<?php
include("../connection.php");
session_start();
if(!isset($_SESSION['admin'])){
    echo "<script>alert('not logout')</script>";
}
session_destroy();
echo "<script>alert('successfully logout')window.location.href='login.php'</script>";

?>