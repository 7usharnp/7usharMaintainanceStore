<?php 
define('TITLE','Requester profile');
define('PAGE','Requesterprofile');

include ('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
  $rEmail = $_SESSION['rEmail'];
}
else{
    echo "<script> location.href ='RequesterLogin.php' </script>";
}
$sql = "SELECT  r_name ,r_email  from requesterlogin_tb 
where r_email = '$rEmail' ";
$result = $conn->query($sql);
if($result->num_rows==1){
    $row = $result ->fetch_assoc();
    $rName = $row['r_name'];    
}

if(isset($_REQUEST['nameupdate'])){

    if($_REQUEST['rName']==""){
        $passmsg = '<div class = "alert alert-warning col-sm-6 mt-2" role="alert" >*Fill All Fields</div>';
    }
    else{
        $rName = $_REQUEST['rName'];
        $sql = "UPDATE  requesterlogin_tb set r_name= '$rName' Where r_email = '$rEmail'  ";
        if($conn ->query($sql)== true){
            $passmsg = '<div class="alert alert-success col-sm-6 mt-2" role="alert" >Successfully updated.</div>';
        }
        else {
            $passmsg = '<div class="alert alert-success col-sm-6 mt-2" role="alert" >Unable to  update.</div>';

        }

    }


}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <!-- Bootstrap include -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="../css/custom.css">
    
</head>
<body>
<!-- Top Navigation bar -->
<nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowwrap p-0 shadow "><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="RequesterProfile.php">OSMS</a></nav>
    
<!-- Start container -->
<div class="container-fluid" style="margin-top:40px">
   <div class="row">
   <!--   Side Bar -->
        <nav class="col-sm-2 bg-light sidebar py-5">
            <div class="sidebar-sticky">
            <div>
              <ul class="nav flex-column">
                 <li class="nav-item"><a class="nav-link active" href="RequesterProfile.php"><i class="fa fa-user"></i>Profile</a></li>
                 <li class="nav-item"><a class="nav-link" href="SubmitRequest.php"><i class="fab fa-accessible-icon"></i>Submit Request</a></li>
                 <li class="nav-item"><a class="nav-link" href="CheckStatus.php"><i class="fas fa-align-center"></i>Services Status</a></li>
                 <li class="nav-item"><a class="nav-link" href="RequesterChangePass.php"><i class="fas fa-key"></i>Change Password</a></li>
                 <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
              </ul>
             </div>
            </div>
        </nav>
    <!-- End side bar -->
    <!-- Start profile Area -->
    <div class="col-sm-6 mt-5">
       <form action="" method="post" class="mx-5">
          <div class="form-group">
             <label for="rEmail" >Email</label>
             <input class="form-control" type="email" name="rEmail" id="rEmail" readonly  value=<?php echo $rEmail  ?> >
          </div>   
          <div class="form-group">
            <label for="rName">Name</label>
            <input class= "form-control" type="text"  name="rName" id="rName" value=<?php echo $rName  ?> >
          </div>     
          <button type="submit" class="btn btn-danger" name="nameupdate">Update</button>
          <?php if(isset($passmsg)){ echo $passmsg;}  ?>
       </form>
       
    </div>

    <!-- End profile Area -->
    </div>
</div>
<!-- end container -->


<!-- JavaScript File -->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>


</body>
</html>