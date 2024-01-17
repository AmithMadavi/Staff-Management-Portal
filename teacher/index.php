<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login'])) 
  {
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $sql ="SELECT ID,Name FROM tblteacher WHERE (Email=:username || MobileNumber=:username) and password=:password";
    $query=$dbh->prepare($sql);
    $query-> bindParam(':username', $username, PDO::PARAM_STR);
    $query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
{
foreach ($results as $result) 
{
$_SESSION['trmsuid']=$result->ID;
$_SESSION['trmstname']=$result->Name;
}

echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
} else{
echo "<script>alert('Invalid Details');</script>";
}
}
?>
    
<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Teacher Login</title>
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="stylesheet" href="../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="../assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <style>
      body {
  height: 100%;
}

.bg {
  background-image: url("images/clktower.jpg");
  height: 100vh;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
    </style>
</head>

<body class="bg">
    <div class="sufee-login d-flex align-content-center flex-wrap" >
        <div class="container">
            <div class="login-content">
                <div class="login-logo"></br>
                    <h3 style="color:crimson">TEACHER LOGIN </h3></br>
                    
                </div>
                <div class="login-form">
                    <form action="" method="post" name="login">
                        
                        <div class="form-group">
                            <label>Email Id / Mobile Number</label>
                            <input type="text" class="form-control" placeholder="Email id / Mobile Number" required="true" name="username" required pattern="[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,4}" title="Enter a valid email address with specified '.' and '@' positions">
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                        </div>
                                <div class="checkbox">
                                    <label class="pull-left">
                                <a href="../index.php">Home</a>
                                    <label class="pull-right">
                                <a href="forgot-password.php" style="padding-left: 250px">Forgot Password?</a>
                            </label>

                                </div>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="login">LOGIN</button>
                                <hr />
                                <p style="color:blue">Not Registered Yet? <a href="signup.php">Signup</a></p>   
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="../vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>
