<?php
    if ( !(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') ) { 
        // header("location:../../../error.html");
        header('HTTP/1.1 403 Forbidden');
        die();
    }
    require_once "../conn/connection.php";

    $studid         = $_COOKIE['userid'];
    $chairman       = $_POST['chairman'];
    $vice_chairman  = $_POST['vice_chairman'];
    $sec            = $_POST['sec'];
    $ass_sec        = $_POST['ass_sec'];
    $tre            = $_POST['tre'];
    $ass_tre        = $_POST['ass_tre'];
    $aud            = $_POST['aud'];
    $ass_aud        = $_POST['ass_aud'];
    $bm             = $_POST['bm'];
    $ass_bm         = $_POST['ass_bm'];
    $pio            = $_POST['pio'];

    try {
        $conn->beginTransaction();

        $sql_insert = $conn->prepare("INSERT INTO tb_vote (studid, cm, vcm, sec, assec, tre, astre, aud, asaud, bm, abm, pio)VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
        $sql_insert->execute(params: [$studid, $chairman, $vice_chairman, $sec, $ass_sec, $tre, $ass_tre, $aud, $ass_aud, $bm, $ass_bm, $pio]);
        
        $conn->commit();
        echo "success";
        
    } catch (PDOException $e) {
        $conn->rollBack();
        echo "Please Contact System Administrator" . $e->getMessage();
    }

?>