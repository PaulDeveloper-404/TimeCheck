<?php
include 'Includes/dbcon.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/attnlg.jpg" rel="icon">
    <title>TimeCheck</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ruang-admin.min.css" rel="stylesheet">
    <link href="css/ruang-admin.css" rel="stylesheet">


</head>


<div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    <!-- Login Content -->
    <div class="container-login">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card shadow-sm my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-form">
                                    <div class="text-center">
                                        <img src="img/logo/timecheck.png" style="width:250px;height:150px;margin-left:15px;">
                                        <br><br>
                                        <h1 class="h4 text-gray-900 mb-4">Signup Panel</h1>
                                    </div>
                                    <form class="user" method="Post" action="">
                                    <div class="form-group">
                                            <input type="text" class="form-control" required name="firstname" placeholder="Enter First Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" required name="lastname" placeholder="Enter Last Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" required name="phone" placeholder="Enter Phone Number">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" required name="email" placeholder="Enter Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" required class="form-control" placeholder="Enter Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success btn-block" value="Register" name="signup" />
                                        </div>
                                    </form>
                                    </div >

<?php
if(isset($_POST['signup'])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];

  $sql = "INSERT INTO tblclassteacher(firstName, lastName, emailAddress, password, phoneNo, dateCreated)
  VALUES ('$firstname','$lastname','$email','$password','$phone', now())";
  $success = $conn->query($sql);

  if($success){
    echo '<script language="javascript">';
    echo 'alert("information successfully sent")';
    echo '</script>';
    exit();
    header('Location: http://localhost/TimeCheck/index.php');
  }else{
    echo '<script language="javascript">';
    echo 'alert("information failed sent")';
    echo '</script>';
    exit();
  }
}
?>



                                    <div class="text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Content -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- <script src="js/ruang-admin.min.js"></script> -->
</body>

</html>
