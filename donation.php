<?php
$admin='';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin |Donations</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- JQVMap -->
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!--<link rel="stylesheet" href="homepage.css">-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->

  <?php  

 include 'sidebar.php';
  
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Donations</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          

                <table class="table">
                    <thead class="thead-dark">
                        <tr> 
                        <th scope="col">Slno</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Phone No</th>
                        <th scope="col">Email-ID</th>                 
                        <th scope="col">Date</th>
                        <th scope="col">Reason</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Transaction</th>
                                              
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    

                    $hostname="localhost";
                    $dbUser="root";
                    $dbPass="";
                    $dbName="project1";

                      $conn=mysqli_connect($hostname,$dbUser,$dbPass,$dbName);
                      if(!$conn){
                        die("Connection is not successfull");
                      }

                      $sql="SELECT * from donate";
                      $result=mysqli_query($conn, $sql);
                      while($row=mysqli_fetch_array($result)){
                        $id=$row['id'];
                        $name=$row['name'];
                        $ph=$row['phone'];
                        $em= $row['email'];              
                        $da= $row['date'];
                        $reas= $row['reason'];
                        $am= $row['amount'];
                        $img = $row['image']; // Fetching the image path from the database

                        echo "<tr>
                          <td>$id</td>
                          <td>$name</td>
                          <td>$ph</td>
                          <td>$em</td>
                          <td>$da</td>
                          <td>$reas</td>
                          <td>$am</td>
                          <td><img src='".$img."' height='100px' width='100px'></td>
                        </tr>";
                      }
                      ?>
                        
                    

                    
                    </tbody>
                </table>     
     
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script>
function enlargeImg(img) {
    img.style.width = "60%";
    img.style.height = "auto";
    img.style.transition = "width 0.5s ease";
}
</script>


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
</body>
</html>
