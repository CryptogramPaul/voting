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

    $login = $conn->prepare(query: "SELECT studid FROM tb_students WHERE username = ? AND password = ? ");
    $login->execute([$_username, $_password]);
    $fetch_login = $login->fetch();
	
    $sql = $conn->prepare("SELECT * FROM tb_schoolyear WHERE isActive = 1 ");    
    $sql->execute();
    $schoolyear = $sql->fetch();

    // echo $login->rowCount();
    // exit();
    if ($login->rowCount() > 0) {
        $user_id = $fetch_login['studid'];
	

        setcookie('userid', $user_id, strtotime('+30 days'), "/");
        setcookie('schoolyear', $schoolyear['sy'], strtotime('+30 days'), "/");
        // setcookie('user_role', $user_role, strtotime('+30 days'), "/");

		// $_SESSION['oid'] = rand();
        echo "success";
    } else {
        echo "Invalid Credentials!";
        exit();
    }

} catch (PDOException $e) {
    echo "Error!<br>Please Contact Our System Developer" . $e->getMessage();
    exit();
}

?>