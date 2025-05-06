<?php 
session_start();
require_once '../conn/connection.php';

$sid = $_SESSION['studid'];
$fn=$_SESSION['fname'];
$mn=$_SESSION['mname'];
$ln=$_SESSION['lname'];
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

                <h1 class="logo me-auto me-lg-0"><a href="../index.php">SSC Online Voting WVSU-LC <?php
                
                ?></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto " href="../index.php">Home</a></li>
                        <li><a class="nav-link scrollto" href="vc.php">Voting Center</a></li>
                        <li><a class="nav-link scrollto active">View Vote</a></li>
                        <li><a class="nav-link scrollto" href="profile.php">Profile</a></li>
                        <li><a class="nav-link scrollto" href="#" onclick="Logout()">Logout</a></li>
                    </ul>
                </nav><!-- navbar -->
            </div>
        </header>

        <div style="color:black; margin-top:150px; margin-left:100px;">
            <?php
            $vote = $conn->prepare("SELECT * FROM tb_vote WHERE studid = ? ");
            $vote->execute([$sid]);
            foreach($vote->fetchAll() as $key => $value){
		?>
            Chairman : <?php echo $value["cm"];?> <br>
            Vice Chairman : <?php echo $value["vcm"];?> <br>
            Secretary : <?php echo $value["sec"];?> <br>
            Assistant Secretary : <?php echo $value["assec"];?> <br>
            Treasurer : <?php echo $value["tre"];?> <br>
            Assistant Treasurer : <?php echo $value["astre"];?> <br>
            Auditor : <?php echo $value["aud"];?> <br>
            Assistant Auditor : <?php echo $value["asaud"];?> <br>
            Business Manager : <?php echo $value["bm"];?> <br>
            Assistant Business Manager : <?php echo $value["abm"];?> <br>
            PIO : <?php echo $value["pio"];?> <br>
            <?php } ?>
        </div>
</body>

</html>
<script src="../js/authentication.js"></script>