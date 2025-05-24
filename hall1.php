<?php
if(isset($_POST['submit'])){ // Check if the form is submitted

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
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $eventname = $_POST['eventname'];
    $amount = $_POST['amount'];

    $filename= $_FILES["uploadfile"]["name"];
    $tempname= $_FILES["uploadfile"]["tmp_name"];
    $image= "images/".$filename;
    //echo $image;
    move_uploaded_file($tempname, $image);

    // Check if the slot is already booked
    $check_sql = "SELECT * FROM hall_booking WHERE date='$date' AND time='$time'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        // Slot already booked, display error message
        echo "<script>";
        echo "alert('This slot is already Booked ');

        window.location.href='homepage.html';";
        echo "</script>";
    } else {
        // Insert data into the database
        $sql = "INSERT INTO hall_booking (name, phone, email, date, time, eventname, amount, image)
                VALUES ('$name', '$phone', '$email', '$date', '$time', '$eventname', '$amount','$image')";
        
        if ($conn->query($sql) === TRUE) {
            // Display success popup
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
    }

    $conn->close();
}
?>
