<?php
    session_start();
    session_destroy();
    unset($_SESSION['uid']);
    // header("location:../index.php");
    
   echo "<script>alert('Logout Successful');
   window.location.href='admin.php';</script>";

?>