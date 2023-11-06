<?php
include("../connection.php");
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sel = "select * from admin where username='$username'";

    $qu = mysqli_query($conn, $sel);
    $fetch = mysqli_fetch_array($qu, MYSQLI_BOTH);
    if ($fetch['username'] == $username or $fetch['password'] == $password) {

        session_start();
       $_SESSION['admin']=$username;
     
        echo "<script>window.location.href='indexadmin.php'</script>";
    } else {
        echo "<script>alert('username or password wrong');window.location.href='login.php'</script>";
    }
}
