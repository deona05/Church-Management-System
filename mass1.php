<?php
// PHP code to handle form submission and database insertion
if(isset($_POST['submit'])) { // Check if the form is submitted

    // Establish connection to your database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch data from the form
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $place = $_POST['place'];
    $mtype = $_POST['mtype'];
    $amount = $_POST['amount'];

    $filename= $_FILES["uploadfile"]["name"];
    $tempname= $_FILES["uploadfile"]["tmp_name"];
    $image= "images/".$filename;
    //echo $image;
    move_uploaded_file($tempname, $image);

    // Insert data into the database
    $sql = "INSERT INTO mass_booking (name, phone, date, time, place, mtype, amount, image)
            VALUES ('$name', '$phone', '$date', '$time', '$place', '$mtype', '$amount','$image')";

    if ($conn->query($sql) === TRUE) {
        // If insertion is successful, return a success message
        echo "<script>";
        echo "alert('Booking Successful');

        window.location.href='homepage.html';";
        echo "document.addEventListener('DOMContentLoaded', function() {";
        echo "    var dialog = document.getElementById('successPopup');";
        echo "    dialog.showModal();";
        echo "    setTimeout(function(){ dialog.close(); }, 3000);"; // Close dialog after 3 seconds
        echo "});";
        echo "</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
