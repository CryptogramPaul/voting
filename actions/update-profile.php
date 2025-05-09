<?php
    if ( !(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') ) { 
        // header("location:../../../error.html");
        header('HTTP/1.1 403 Forbidden');
        die();
    }
    require_once "../conn/connection.php";

    $studid         = $_COOKIE['userid'];
    $username       = $_POST['username'];
    $current_pass       = $_POST['current_pass'];
    $new_password   = $_POST['new_password'];

    $checkpass = $conn->prepare("SELECT * FROM tb_students WHERE username = ? and password = ? ");
    $checkpass->execute([$username, $current_pass]);

    if ($checkpass->rowCount() == 0) {
        echo "Incorrect current password.";
        exit();
    }

    try {
        $conn->beginTransaction();


        $update_profile = $conn->prepare("UPDATE tb_students SET password = ? WHERE studid = ? ");
        $update_profile->execute(params: [$new_password, $studid]);
        
        $conn->commit();
        echo "success";
        
    } catch (PDOException $e) {
        $conn->rollBack();
        echo "Please Contact System Administrator" . $e->getMessage();
    }

?>