<?php
    if ( !(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') ) { 
        // header("location:../../../error.html");
        header('HTTP/1.1 403 Forbidden');
        die();
    }
    require_once "../conn/connection.php";

    $studid         = $_COOKIE['userid'];
    $fname       = $_POST['fname'];
    $mname       = $_POST['mname'];
    $lname       = $_POST['lname'];
    $course       = $_POST['course'];

    // if ($checkpass->rowCount() == 0) {
    //     echo "Incorrect current password.";
    //     exit();
    // }

    try {
        $conn->beginTransaction();


        $insert = $conn->prepare("INSERT INTO tb_candidates (fname, mname, lname, course) VALUES(?,?,?,?)  ");
        $insert->execute(params: [$fname, $mname, $lname, $course]);
        
        $conn->commit();
        echo "success";
        
    } catch (PDOException $e) {
        $conn->rollBack();
        echo "Please Contact System Administrator" . $e->getMessage();
    }

?>