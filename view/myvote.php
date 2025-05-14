<?php
    require_once '../conn/connection.php';
    $studid = $_COOKIE['userid'];
?>
<style>
.vote-summary {
    max-width: 600px;
    margin: 50px auto;
    background: linear-gradient(135deg, #e0f7fa, #ffffff);
    border-radius: 20px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    padding: 40px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    transition: transform 0.3s ease;
}

.vote-summary:hover {
    transform: scale(1.02);
}

.vote-summary h1 {
    font-size: 30px;
    margin-bottom: 20px;
    color: #00695c;
    text-align: center;
}

.vote-summary p {
    font-size: 17px;
    margin: 10px 0;
    color: #333;
    padding: 10px;
    background: #ffffff;
    border-left: 4px solid #26a69a;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
}

.vote-summary .thank-you {
    margin-top: 30px;
    font-weight: bold;
    color: #2e7d32;
    text-align: center;
    font-size: 18px;
}


.no-summary:hover {
    transform: scale(1.02);
}

.no-summary p {
    font-size: 17px;
    margin: 10px 0;
    color: #333;
    padding: 10px;
    background: #ffffff;
    border-left: 4px solid rgb(194, 24, 12);
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
}

.no-summary {
    color: rgb(194, 24, 12);
    text-align: center;
    max-width: 600px;
    margin: 50px auto;
    background: linear-gradient(135deg, #e0f7fa, #ffffff);
    border-radius: 20px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    padding: 40px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    transition: transform 0.3s ease;
}

.no-summary .no-vote {
    margin-top: 30px;
    font-weight: bold;
    color: rgb(194, 24, 12);
    text-align: center;
    font-size: 18px;
}
</style>
<?php
    $vote = $conn->prepare("SELECT * FROM tb_vote WHERE studid = ? ");
    $vote->execute([$studid]);
    $result = $vote->fetch();
    if ($vote->rowCount() > 0) {
?>
<div class="vote-summary">
    <h1>Voting Summary</h1>
    <p><strong>Chairman:</strong> <?php echo $result["cm"];?></p>
    <p><strong>Vice Chairman:</strong> <?php echo $result["vcm"];?></p>
    <p><strong>Secretary:</strong> <?php echo $result["sec"];?></p>
    <p><strong>Assistant Secretary:</strong><?php echo $result["assec"];?></p>
    <p><strong>Treasurer:</strong> <?php echo $result["tre"];?></p>
    <p><strong>Assistant Treasurer:</strong> <?php echo $result["astre"];?></p>
    <p><strong>Auditor:</strong> <?php echo $result["aud"];?></p>
    <p><strong>Assistant Auditor:</strong> <?php echo $result["asaud"];?></p>
    <p><strong>Business Manager:</strong> <?php echo $result["bm"];?></p>
    <p><strong>Assistant Business Manager:</strong> <?php echo $result["abm"];?></p>
    <p><strong>PIO:</strong> <?php echo $result["pio"];?></p>
    <p class="thank-you">✅ Thank you for your participation! Your vote has been recorded successfully.</p>
</div>
<?php
    }else{
?>
<div class="no-summary">
    <h1>Voting Summary</h1>
    <p class="no-vote">Please vote first to see your voting summary.</p>
</div>
<?php
    }
?>