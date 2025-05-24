<?php
    session_start();
    session_destroy();
    unset($_SESSION['uid']);
    // header("location:../index.php");
    
   echo "<script>alert('logout successfull');
   window.location.href='../index.php';</script>";

?>