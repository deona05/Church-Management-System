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
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              
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
                        <th scope="col">Approve/Deny</th>

                        
                        </tr>
                    </thead>
                    <tbody>

                    <?php 

                    $i = 0;
                        $stmt = $admin-> ret("SELECT * FROM `donation`");
                        while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){ 

                    ?>
                        <tr>

                        <th scope="row"><?= ++$i ?></th>
                     
                        <td><?= $row['f_name'] ?></td>
                        <td><?= $row['phone'] ?></td>
                        <td><?= $row['email'] ?></td>              
                        <td><?= $row['date'] ?></td>
                        <td><?= $row['reason'] ?></td>
                        <td><?= $row['amount'] ?></td>
                        </tr>
                        


                    <?php }?>
                    

                    
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

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
</body>
</html>
