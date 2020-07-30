<?php
define('TITLE','Change Password');
define('PAGE','Requesterchangepass');

include('includes/header.php');
include('../dbConnection.php');

session_start();
if($_SESSION['is_login']){
 $rEmail = $_SESSION['rEmail'];
} else {
 echo "<script> location.href='RequesterLogin.php'</script>";
}

if(isset($_REQUEST['passupdate'])){

    if($_REQUEST['rpassword']==""){
        $passmsg = '<div class="alert alert-warning col-sm-6  mt-2">*Fill All Fields</div>';
    }
    else{
        $rPass = $_REQUEST['rpassword'];
         $sql = "Update requesterlogin_tb Set r_password = '$rPass' Where r_email = '$rEmail'";

        if($conn ->query($sql)== TRUE){
              $passmsg = '<div class="alert alert-warning col-sm-6  mt-2">*Password Updated Successfully.</div>';
        }

    }
}


?>

<!-- Start change password second column -->
<div class="col-sm-9 col-md-10 ">
  <form class="mt-5 mx-5" action ="" method ="POST">
     <div class="form-group">
      <label for="inputEmail" >Email</label>
      <input type="email" class="form-control" id="inputEmail" value="<?php echo $rEmail ?>" readonly > 
     </div>
     <div class="form-group">
      <label for="inputnewpassword" >New Password</label>
      <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="rpassword" > 
     </div>
     <button type="submit" class="btn btn-danger mt-4 mr-4" name = "passupdate">Update</button>
     <button type="reset" class="btn btn-secondary mt-4 " >Reset</button>
     <?php if(isset($passmsg)){echo $passmsg;} ?>
  </form>
  
</div>



<!-- End change password second column -->

<?php
include('includes/footer.php');
?>