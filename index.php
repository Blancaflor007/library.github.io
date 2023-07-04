<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/cvsulogo.png"/>

    <title>LMS-BS Member Log In | CvSU Imus</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom1.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">


    <script src="js/jquery.min.js"></script>

<style>

.btn-primary {
    color: #fff;
    background-color: #017F01 ;
    border-color:#017F01 ;
}
.btn-primary:hover{
    color: black;
    border-color: #EBAF01;
    background-color: #EBAF01;
}


.blink_text {
-webkit-animation-name: blinker;
-webkit-animation-duration: 1s;
-webkit-animation-timing-function: linear;
-webkit-animation-iteration-count: infinite;

-moz-animation-name: blinker;
-moz-animation-duration: 1s;
-moz-animation-timing-function: linear;
-moz-animation-iteration-count: infinite;

 animation-name: blinker;
 animation-duration: 1s;
 animation-timing-function: linear;
 animation-iteration-count: infinite;

 color:white;
 font-size:16px;
}

@-moz-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@-webkit-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }
</style>
</head>

<body style="background-image: url(images/loginbg.jpg); background-size: 100%;">
    <div class="">

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <form action="" method="post">
                        <h1><img src="images/lmsbslogo.png" width="300px" height="95px"></h1>
                        <div>
                            <input type="text" class="form-control" name="member_id" placeholder="Member ID" autofocus='autofocus' required />
                        </div>
                        <div>
                            <input type="password" class="form-control" name="password" placeholder="Password" required />
                        </div>
                       
                        <br>
                        <div>
								<button class="btn btn-primary " type="submit" name="login"><i class="fa fa-check"></i> Log in</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
						
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <?php
include('include/dbcon.php');

if (isset($_POST['login'])){

$member_id=$_POST['member_id'];
$password=$_POST['password'];

$login_query=mysqli_query($con,"select * from user where member_id='$member_id' and password='$password'");

$count=mysqli_num_rows($login_query);
$row=mysqli_fetch_array($login_query);

if ($count > 0){
session_start();
$_SESSION['id']=$row['user_id'];

echo "<script>window.location='home.php'</script>";
}else{ ?>
<div class="alert alert-danger"><h3 class="blink_text">Invalid member ID or password.</h3></div>     
<?php
}
}
?>
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />  
                                <br />
                                <br />
                                <br />
                                <br />
                                <h2> Library Management System <br> with Barcode Scanner</h2>

                                <p>© <?php echo date('Y'); ?> &nbsp; <i class="fa fa-university"> &nbsp;Cavite State University - Imus Campus</i></p>
                            </div>
                        </div>

                    </form>

                    <!-- form -->
                </section>
                <!-- content -->
            </div>
        </div>
    </div>

</body>

</html>