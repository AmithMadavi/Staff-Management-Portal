<?php include_once('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Staff Management Portal</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class=" bg-dark d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
 <?php include_once('includes/header.php');?>
            <!-- Header-->
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Bengaluru City University Staff Recruitment Portal</h1></br>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start" style="margin-top:5%;">
                                    <a class="btn btn-danger btn-lg px-4 me-sm-3" href="teacher/signup.php">Teacher Registration</a>
                                    <a class="btn btn-danger btn-lg px-4 me-sm-3" href="teacher/index.php">Teacher Login</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="images/campus.jpg" alt="campus_photo" /></div>
                    </div>
                </div>
            </header>


            <!-- Blog preview section-->
           
        <!-- Footer-->
<?php include_once('includes/mainfooter.php'); ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
