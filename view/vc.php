<?php 
    session_start();
    require_once '../conn/connection.php';
    $sid = $_SESSION['studid'];
    $fn=$_SESSION['fname'];
    $mn=$_SESSION['mname'];
    $ln=$_SESSION['lname'];
 ?>
<style>
.list-group-item input[type="radio"] {
    border: 1px solid black;
}

.card {
    height: 250px;
    width: 20rem;
    background-color: lightcyan;
}

.card-body {
    /* height: 250px; */
    /* width: 20rem; */
}

.Liberal {
    background-color: lightblue;
    padding: 5px;

}

.Smart {
    background-color: aqua;
    padding: 5px;
}
</style>



<div class="container">
    <form id="FrmVoting">
        <div class="row">
            <?php
                    $party = $conn->prepare("SELECT party FROM `tb_candidates` group by party ");
                    $party->execute();
                    ?>
            <div class="d-flex align-items-center pt-2">
                <?php 
                        foreach ($party->fetchAll() as $key => $value) {
                    ?>
                <h5 class="<?php echo $value['party'] ?>"><?php echo $value['party'] ?></h5>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <?php } ?>
            </div>
            <hr>
            <p class="">Please choose one per candidate.</p>

            <input type="hidden" value="<?php echo $sid;?>" name="sid" />
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
                ?>

            <div class="col-12 col-md-4 col-xl-3 py-2">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title"><?php echo $value['position'] ?></h6>
                    </div>
                    <div class="card-body">
                        <?php
                                $chairman = $conn->prepare("SELECT *, concat_ws(' ', fname,mname,lname) as candidate FROM `tb_candidates` WHERE position = ? ");
                                $chairman->execute([$value['position']]);
                                $position = $value['position'];
		                    ?>

                        <?php
                                foreach($chairman->fetchAll() as $key => $value){                   
                                    $candidate = $value['candidate']; 
                                    
                                if($position == 'CHAIRMAN'){
                            ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="<?php echo $value['canid'] ?>"
                                value="<?php echo $value['canid'] ?>">
                            <label class="form-check-label" for="<?php echo $value['canid'] ?>">
                                <?php echo $candidate ?>
                            </label>
                        </div>
                        <?php }  ?>
                        <?php }  ?>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="py-4">
                <center>
                    <button type="submit" name="vote" class="btn btn-primary fw-bold text-white">SUBMIT</button>
                </center>
            </div>
        </div>
    </form>
</div>