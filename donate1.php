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
    $reason = $_POST['reason'];
    $amount = $_POST['amount'];

    $filename= $_FILES["uploadfile"]["name"];
    $tempname= $_FILES["uploadfile"]["tmp_name"];
    $image= "images/".$filename;
    //echo $image;
    move_uploaded_file($tempname, $image);

    //echo "<img src='$image'  height='100px' width='100px'>";

    // Insert data into the database
    $sql = "INSERT INTO donate (name, phone, email, date, reason, amount, image)
            VALUES ('$name', '$phone', '$email', '$date', '$reason', '$amount','$image')";

    if ($conn->query($sql) === TRUE) {
        // Display success popup
        echo "<script>";
        echo "alert('Thankyou for the Donation');

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
