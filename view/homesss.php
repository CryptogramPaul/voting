<?php 
    session_start();
    require_once '../conn/connection.php';
    
    if (!isset($_COOKIE['userid'])) {
        header("Location: ../login.php");
    }

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
    <link href="../bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../bootstrap-5.0.2-dist/css/style.css" rel="stylesheet" type="text/css">
    <link href="../bootstrap-5.0.2-dist/css/styles.css" rel="stylesheet" type="text/css">
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</head>

<body>

    <div id="wrapper">

        <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

                <h1 class="logo me-auto me-lg-0"><a href="home.php">SSC Online Voting WVSU-LC</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto active" href="home.php">Home</a></li>
                        <li><a class="nav-link scrollto" href="vc.php">Voting Center</a></li>
                        <li><a class="nav-link scrollto" href="myvote.php">View Vote</a></li>
                        <li><a class="nav-link scrollto" href="profile.php">Profile</a></li>
                        <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>
                    </ul>
                </nav><!-- .navbar -->

            </div>
        </header>

        <div id="result">
            <div class="bx1">





                <label id="tt">Total No. Of Students</label><br>
                <center><label id="tt-no"><?php
				
			
            $result = $conn->prepare("SELECT count(studid) FROM tb_students");    
            $result->execute();
            $count_students = $result->fetchColumn(0);

            // $result = mysql_query("SELECT count(studid) AS sid FROM tb_students");
			// $data = mysql_fetch_assoc($result);
			
			
			echo $count_students;
			
			?></label></center>


            </div>
            <div class="bx2">
                <label id="tt">No. Of Votes</label><br>
                <center><label id="tt-no"><?php
				
			$vote = $conn->prepare("SELECT count(voteid) FROM tb_vote");    
            $vote->execute();
            $count_vote = $vote->fetchColumn(0);
			echo $count_vote;

            // $result = mysql_query("SELECT count(voteid) AS vid FROM tb_vote");
			// $data = mysql_fetch_assoc($result);
			
			
			?></label></center>
            </div>
        </div>

        <div id="result-per">

            <label class="cent"><strong>Percentage of Vote(Total)</strong>
                <?php
				
			$vote = $conn->prepare("SELECT count(voteid) FROM tb_vote");    
            $vote->execute();
            $count_vote = $vote->fetchColumn(0);
			echo $count_vote;
            // $result = mysql_query("SELECT count(voteid) AS vid FROM tb_vote");
			// $data = mysql_fetch_assoc($result);
			
			
			// echo $data['vid'];
			
			?>

                %</label><br>
            <label class="cent"><strong>Percentage of Votes In</strong></label><br>
            <label class="cent">BS ED -
                <?php
				
			$percentage_vote = $conn->prepare("SELECT count(studid) FROM tb_students WHERE course = 'BSED' AND status = 'VOTED' ");    
            $percentage_vote->execute();
            $count_percentage_vote = $percentage_vote->fetchColumn(0);
			echo $count_percentage_vote;	
            // $result = mysql_query("SELECT count(studid) AS sid FROM `tb_students` WHERE `course` = 'BSED' AND `status` = 'VOTED'");
			// $data = mysql_fetch_assoc($result);
			
			
			// echo $data['sid'];
			
			?>



                %</label><br>
            <label class="cent">BS ICT -
                <?php
				
			$percentage_vote = $conn->prepare("SELECT count(studid) FROM tb_students WHERE course = 'BSICT' AND status = 'VOTED' ");    
            $percentage_vote->execute();
            $count_percentage_vote = $percentage_vote->fetchColumn(0);
			echo $count_percentage_vote;
            // $result = mysql_query("SELECT count(studid) AS sid FROM `tb_students` WHERE `course` = 'BSICT' AND `status` = 'VOTED'");
			// $data = mysql_fetch_assoc($result);
			
			
			// echo $data['sid'];
			
			?>

                %</label><br>
            <label class="cent">BS CJE -
                <?php
				
			$percentage_vote = $conn->prepare("SELECT count(studid) FROM tb_students WHERE course = 'BSCJE' AND status = 'VOTED' ");    
            $percentage_vote->execute();
            $count_percentage_vote = $percentage_vote->fetchColumn(0);
			echo $count_percentage_vote;	
            // $result = mysql_query("SELECT count(studid) AS sid FROM `tb_students` WHERE `course` = 'BSCJE' AND `status` = 'VOTED'");
			// $data = mysql_fetch_assoc($result);
			
			
			// echo $data['sid'];
			
			?>

                %</label><br>
            <label class="cent">BS IT -
                <?php
				
			$percentage_vote = $conn->prepare("SELECT count(studid) FROM tb_students WHERE course = 'BSIT' AND status = 'VOTED' ");    
            $percentage_vote->execute();
            $count_percentage_vote = $percentage_vote->fetchColumn(0);
			echo $count_percentage_vote;		
            // $result = mysql_query("SELECT count(studid) AS sid FROM `tb_students` WHERE `course` = 'BSIT' AND `status` = 'VOTED'");
			// $data = mysql_fetch_assoc($result);
			
			
			// echo $data['sid'];
			
			?>


                %</label><br>
            <label class="cent">BS HM -
                <?php
				
			$percentage_vote = $conn->prepare("SELECT count(studid) FROM tb_students WHERE course = 'BSHM' AND status = 'VOTED' ");    
            $percentage_vote->execute();
            $count_percentage_vote = $percentage_vote->fetchColumn(0);
			echo $count_percentage_vote;	
            // $result = mysql_query("SELECT count(studid) AS sid FROM `tb_students` WHERE `course` = 'BSHM' AND `status` = 'VOTED'");
			// $data = mysql_fetch_assoc($result);
			
			
			// echo $data['sid'];
			
			?>

                %</label>

        </div>
        <!-- chairman
        vice chairman
        Secretary
        Assistant Secretary
        Treasurer
        Assistant Treasurer
        Auditor
        Assistant Auditor
        Business Manager
        Assistant Business Manager
        PIO
        Counsilor
         -->
        <!-- <div class="progress">
            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10"
                aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%"
                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%"
                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%"
                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%"
                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div> -->
        <div id="vote-res">
            <center><label id="votres">Voting Result</label></center>
            <label class="position">Chairman</label><br>
            <label class="name">
                <?php

                
                    $candidates = $conn->prepare("SELECT * FROM tb_candidates WHERE position = 'CHAIRMAN' ");    
                    $candidates->execute();

                    foreach ($candidates->fetchAll() as $key => $value) {
                       $fname = $value['fname'];
                       $mname = $value['mname'];
                       $lname = $value['lname'];

                       $chairman = $fname. '' . $mname. '' . $lname; 

                        $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE cm = ? ");    
                        $vote->execute([$chairman]);
                        $count_vote = $vote->fetchColumn(0);
                        echo $count_vote;
		        ?>
                <div style="width:100px; height:30px;">
                    <input type="text" name="cid"
                        value="<?php echo $fname;?> <?php echo $mname;?> <?php echo $lname;?>" />
                </div>
                <?php } ?>
            </label>
            <br> <br>
            <label class="position">Vice Chairman</label><br>
            <label class="name">
                <?php

                
                    $candidates = $conn->prepare("SELECT * FROM tb_candidates WHERE position = 'VICE CHAIRMAN' ");    
                    $candidates->execute();

                    foreach ($candidates->fetchAll() as $key => $value) {
                       $fname = $value['fname'];
                       $mname = $value['mname'];
                       $lname = $value['lname'];

                       $chairman = $fname. '' . $mname. '' . $lname; 

                        $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE vcm = ? ");    
                        $vote->execute([$chairman]);
                        $count_vote = $vote->fetchColumn(0);
                        echo $count_vote;
		        ?>
                <div style="width:100px; height:30px;">
                    <input type="text" name="cid"
                        value="<?php echo $fname;?> <?php echo $mname;?> <?php echo $lname;?>" />
                </div>
                <?php } ?>
            </label>

        </div>
    </div>
</body>

</html>