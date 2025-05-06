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
</style>

<div class="vote-summary">
    <h1>Voting Summary</h1>
    <p><strong>Chairman:</strong> nn nn nn</p>
    <p><strong>Vice Chairman:</strong> hgb hjh hgh</p>
    <p><strong>Secretary:</strong> ddd jjj gfg</p>
    <p><strong>Assistant Secretary:</strong> Maria Santos Lopez</p>
    <p><strong>Treasurer:</strong> sample sample sample</p>
    <p><strong>Assistant Treasurer:</strong> sa sa sa</p>
    <p><strong>Auditor:</strong> add add add</p>
    <p><strong>Assistant Auditor:</strong> 12 12 12</p>
    <p><strong>Business Manager:</strong> b b b</p>
    <p><strong>Assistant Business Manager:</strong> aaaa aaa aaa</p>
    <p><strong>PIO:</strong> pio asdasdasd asdasdasd</p>
    <p class="thank-you">✅ Thank you for your participation! Your vote has been recorded successfully.</p>
</div>