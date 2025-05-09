<?php 
    // session_start();
    require_once '../conn/connection.php';
    $studid = $_COOKIE['userid'];

    $checkvote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE studid = ? ");
    $checkvote->execute([$studid]);
    $countvote = $checkvote->fetchColumn(0);
    
    // $disabled = "";
    // if ($countvote > 0) {
    //   $disabled = "disabled";
    // }

 ?>
<style>
.tabs {
    display: flex;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.tab {
    padding: 0.5rem 1.5rem;
    border-radius: 999px;
    border: 2px solid #ccc;
    cursor: pointer;
    background: #fff;
    transition: background 0.3s, color 0.3s, border-color 0.3s;
    font-weight: 500;
}

.tab.active-liberal {
    background: #16a34a;
    color: #fff;
    border-color: #16a34a;
}

.tab.active-smart {
    background: #4f46e5;
    color: #fff;
    border-color: #4f46e5;
}

h2 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: #333;
}

/* .container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
    } */
.card {
    background: #fff;
    border-radius: 1rem;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    padding: 1rem;
    display: flex;
    flex-direction: column;
    height: 250px;
}

.card h3 {
    margin: 0 0 1rem;
    font-size: 1.2rem;
    color: #222;
}

.option {
    border-radius: 0.5rem;
    padding: 0.5rem 1rem;
    margin-bottom: 0.5rem;
    cursor: pointer;
    display: flex;
    align-items: center;
    transition: background 0.3s, transform 0.2s;
    border-left: 5px solid transparent;
    font-weight: 500;
}

.option[data-party="Liberal"] {
    border-left-color: #16a34a;
    background: #d1fae5;
    color: #065f46;
}

.option[data-party="Smart"] {
    border-left-color: #4f46e5;
    background: #e0e7ff;
    color: #312e81;
}

.option input[type="radio"] {
    margin-right: 0.5rem;
}

.option:hover {
    transform: scale(1.05);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.option input[type="radio"]:checked+span {
    font-weight: 700;
}

.submit-btn {
    margin: 2rem auto 0;
    display: block;
    background: linear-gradient(90deg, #4f46e5, #6366f1);
    color: white;
    border: none;
    padding: 0.75rem 2rem;
    border-radius: 2rem;
    font-size: 1rem;
    cursor: pointer;
    transition: transform 0.2s, box-shadow 0.2s;
}

.submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
}
</style>
<?php
    if($countvote == 0){
?>
<div class="row">
    <div class="col-12 pt-3">
        <div class="tabs">
            <?php 
                $party = $conn->prepare("SELECT party FROM `tb_candidates` group by party ");
                $party->execute();
                foreach ($party->fetchAll() as $key => $value) {
                    if ($value["party"] == "Liberal") {
                        $tab = "active-liberal";
                    } else {
                        $tab = "active-smart";
                    }
            ?>
            <div class="tab <?php echo $tab ?>"><?php echo $value['party'] ?></div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <h2>Please choose one per candidate. Liberal candidates are highlighted in green, Smart candidates in blue.</h2>
    </div>
</div>


<form id="FormVote">
    <div class="row">
        <?php
        $position = $conn->prepare("SELECT DISTINCT position FROM `tb_candidates` GROUP BY position ORDER BY 
            CASE
                WHEN 'CHAIRMAN' THEN 1
                WHEN 'VICE CHAIRMAN' THEN 2
                WHEN 'SECRETARY' THEN 3
                WHEN 'ASSISTANT SECRETARY' THEN 4
                WHEN 'TREASURER' THEN 5
                WHEN 'AUDITOR' THEN  6
                WHEN 'ASSISTANT AUDITOR' THEN 7
                WHEN 'BUSINESS MANAGER' THEN 8
                WHEN 'ASSISTANT BUSINESS MANAGER' THEN 9
                WHEN 'PIO' THEN 10
                ELSE 999
            END;
            ");
        $position->execute();
        
        foreach($position->fetchAll() as $key => $value){
            $position = $value['position'];
    ?>
        <div class="col-3 py-1">
            <div class="card ">
                <h3><?php echo $position ?></h3>

                <?php
                $chairman = $conn->prepare("SELECT *, concat_ws(' ', fname,mname,lname) as candidate FROM `tb_candidates` WHERE position = ? ");
                $chairman->execute([$value['position']]);
 
                foreach($chairman->fetchAll() as $key => $value){                   
                    $candidate = $value['candidate']; 

                    $checkvote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE studid = ? ");
                    $checkvote->execute([$studid]);
            ?>
                <label class="option" data-party="<?php echo $value['party'] ?>">
                    <input type="radio" name="<?php echo $position ?>" id="<?php echo $position ?>"
                        value="<?php echo $candidate ?>" required><span><?php echo $candidate ?></span>
                </label>
                <?php } ?>
            </div>
        </div>
        <?php 
            } 
        ?>
        <div class="mb-3"></div>

        <button class="submit-btn mb-3" type="submit">Submit</button>
    </div>
</form>
<?php
  }else{
?>

<div class="row p-5">
    <div class="col">
        <h1>You are done voting. Thank you for your participation!</h1>
    </div>
</div>

<?php
  }
?>
<script>
$("#FormVote").on("submit", function(e) {
    e.preventDefault();
    vote();
});

function vote() {
    let chairman = $("input[name='CHAIRMAN']:checked").val()
    let vice_chairman = $("input[name='VICE CHAIRMAN']:checked").val()
    let sec = $("input[name='SECRETARY']:checked").val()
    let ass_sec = $("input[name='ASSISTANT SECRETARY']:checked").val()
    let tre = $("input[name='TREASURER']:checked").val()
    let ass_tre = $("input[name='ASSISTANT TREASURER']:checked").val()
    let aud = $("input[name='AUDITOR']:checked").val()
    let ass_aud = $("input[name='ASSISTANT AUDITOR']:checked").val()
    let bm = $("input[name='BUSINESS MANAGER']:checked").val()
    let ass_bm = $("input[name='ASSISTANT BUSINESS MANAGER']:checked").val()
    let pio = $("input[name='PIO']:checked").val()

    $.post("actions/vote-action.php", {
        chairman: chairman,
        vice_chairman: vice_chairman,
        sec: sec,
        ass_sec: ass_sec,
        tre: tre,
        ass_tre: ass_tre,
        aud: aud,
        ass_aud: ass_aud,
        bm: bm,
        ass_bm: ass_bm,
        pio: pio
    }, function(data) {
        if (jQuery.trim(data) === "success") {
            alert("Voted Successfully");
            votingcenter();
        } else {
            alert(data);
        }
    });
}
</script>