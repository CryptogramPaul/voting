<?php
session_start();
date_default_timezone_set('Asia/Manila');
include_once('connection.php');
$aaa = $_SESSION['oid'];




if(isset($_POST['vote'])){
	
	$sid    =  $_POST['sid'];
	$cm     =  $_POST['cm'];
	$vcm    =  $_POST['vcm'];
	$sec      =  $_POST['sec'];
	$assec       =  $_POST['assec'];
	$tre       =  $_POST['tre'];
	$astre       =  $_POST['astre'];
	$aud=  $_POST['aud'];
	$asaud       =  $_POST['asaud'];
	$bm       =  $_POST['bm'];
	$abm       =  $_POST['abm'];
	$pio       =  $_POST['pio'];

$query = mysql_query("INSERT INTO tb_vote (studid,cm,vcm,sec,assec,tre,astre,aud, asaud, bm, abm,pio)values('$sid','$cm','$vcm','$sec','$assec','$tre','$astre','$aud','$asaud','$bm','$abm','$pio'");
	
$query2 = 	mysql_query("UPDATE `tb_students` SET `status` = 'Voted' WHERE `studid` = '$sid'");
	
	echo '<script type="text/javascript">';
	
	echo 'alert("Vote Submitted.")';
	
	echo '</script>';
	
	
	echo '<script>window.location="vc.php"</script>';
	
	};
	
	
	if(isset($_POST['updatepwd'])){
	
	$sid    =  $_POST['sid'];
	$cpwd    =  $_POST['cpwd'];
	$cpwd2    =  $_POST['cpwd2'];
	$npwd      =  $_POST['npwd'];
	$assec       =  "";


	if($cpwd==$cpwd2){
$query2 = 	mysql_query("UPDATE `tb_students` SET `password` = '$npwd' WHERE `studid` = '$sid'");
	
	echo '<script type="text/javascript">';
	
	echo 'alert("Password Changed! Please log in.")';
	
	echo '</script>';
	
	echo '<script>window.location="index.php"</script>';
	}else{
			echo '<script type="text/javascript">';
	
	echo 'alert("Password dont match.")';
	
	echo '</script>';
	echo '<script>window.location="profile.php"</script>';
		}
	
	
	};
	
	
	

?>