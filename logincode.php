<?php
include("connection.php");

if (isset($_POST['call'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $course = $_POST['course'];
    $location = $_POST['location'];
    $sel = "select * from signup where email='$email' or contact='$contact'";
    $qu = mysqli_query($conn, $sel);
    $fetch = mysqli_fetch_array($qu, MYSQLI_BOTH);
    if ($fetch['email'] != $email) {
        if ($fetch['contact'] != $contact) {
            $ins = "insert into signup (name,email,contact,course,location)values('$name','$email','$contact','$course','$location')";
            if (mysqli_query($conn, $ins)) {
                echo "<script>alert('Thanks For Calling Course');window.location.href='home.php'</script>";
            } else {
                echo "<script>alert('data not inserted');window.location.href='home.php'</script>";
            }
        } else {
            echo "<script>alert('contact already exists');window.location.href='home.php'</script>";
        }
    } else {
        echo "<script>alert('email already exists');window.location.href='home.php'</script>";
    }
}
