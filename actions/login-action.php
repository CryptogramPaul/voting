<?php
if ( !(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') ) { 
    // header("location:../../../error.html");
    header('HTTP/1.1 403 Forbidden');
    die();
}
require_once "../conn/connection.php";

$_username = $_POST['username'];
$_password = $_POST['password'];

try {

    $login = $conn->prepare(query: "SELECT * FROM tb_students WHERE username = ? and password = ? ");
    $login->execute([$_username, $_password]);
    $fetch_login = $login->fetch();
	
    if ($login->rowCount() > 0) {
		session_start();
        $user_id = $fetch_login['studid'];
		$_SESSION['studid']= $fetch_login['studid'];
		$_SESSION['schoolid']= $fetch_login['schoolid'];
		$_SESSION['fname']= $fetch_login['fname'];
		$_SESSION['mname']= $fetch_login['mname'];
		$_SESSION['lname']= $fetch_login['lname'];
		$_SESSION['course']= $fetch_login['course'];
		$_SESSION['username']= $fetch_login['username'];
		$_SESSION['password']= $fetch_login['password'];

        setcookie('userid', $user_id, strtotime('+30 days'), "/");
        // setcookie('user_role', $user_role, strtotime('+30 days'), "/");

		// $_SESSION['oid'] = rand();
        echo "success";
    } else {
        echo "Invalid Credentials!";
    }

} catch (PDOException $e) {
    echo "Error!<br>Please Contact Our System Developer" . $e->getMessage();
}

?>