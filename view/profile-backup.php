<?php 
session_start();
require_once '../conn/connection.php';
$sid = $_SESSION['studid'];
$fn=$_SESSION['fname'];
$mn=$_SESSION['mname'];
$ln=$_SESSION['lname'];
$course=$_SESSION['course'];
$un=$_SESSION['username'];
$pwd=$_SESSION['password'];
 ?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>SSC Online Voting WVSU-LC</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/styles.css" rel="stylesheet" type="text/css">
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../js/jquery-3.7.1.min.js"></script>
</head>

<body>

    <div id="wrapper">

        <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

                <h1 class="logo me-auto me-lg-0"><a href="../index.php">SSC Online Voting WVSU-LC</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto " href="../index.php">Home</a></li>
                        <li><a class="nav-link scrollto" href="vc.php">Voting Center</a></li>
                        <li><a class="nav-link scrollto" href="myvote.php">View Vote</a></li>
                        <li><a class="nav-link scrollto active">Profile</a></li>
                        <li><a class="nav-link scrollto" href="#" onclick="Logout()">Logout</a></li>
                    </ul>
                </nav><!-- .navbar -->

            </div>
        </header>

        <div style="color:black; margin-top:150px; margin-left:100px;">
            <form action="action.php" method="post">

                <?php
                    $qq = $conn->prepare("SELECT * FROM `tb_students` WHERE studid = ?");
                    $qq->execute([$sid]);
                    foreach($qq->fetchAll() as $key => $value){
		        ?>
                <input type="hidden" name="sid" value="<?php echo $value["studid"];?>" />
                Name : <?php echo $fn;?> <?php echo $mn;?> <?php echo $ln;?> <br>

                Course: <?php echo $course;?> <br>

                Username: <?php echo $value["username"];?> <br>
                <input type="hidden" name="cpwd" value="<?php echo $value["password"];?>" />
                Input Current Password: <input type="password" name="cpwd2" /> <br>

                New Password: <input type="text" name="npwd" /> <br> <br>

                <?php } ?>
                <button type="submit" name="updatepwd" class="btn-primary">UPDATE RECORD</button>
            </form>
        </div>
        <br><br>
        <center>
            <div style="width:800px; height:auto; border: 1px solid grey; border-radius:3px; color:black;">
                <h3>Application for Candidacy</h3>
                <br>
                First Name: <input type="text" name="fn" value="<?php echo $fn;?>"><br><br>
                Middle Name: <input type="text" name="fn" value="<?php echo $mn;?>"><br><br>
                Last Name: <input type="text" name="fn" value="<?php echo $ln;?>"><br><br>
                Course: <input type="text" name="fn" value="<?php echo $course;?>"><br><br>

                <button type="submit" name="sub_coc">SUBMIT</button>

            </div>
        </center>
</body>

</html>
<script src="../js/authentication.js"></script>