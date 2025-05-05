<?php
    require_once '../conn/connection.php';

    $result = $conn->prepare("SELECT count(studid) FROM tb_students");    
    $result->execute();
    $count_students = $result->fetchColumn(0);
    

    $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote");    
    $vote->execute();
    $count_vote = $vote->fetchColumn(0);

?>
<div class="row g-4 py-4">
    <div class="col-md-6">
        <div class="stat-card p-4 bg-light-red text-center">
            <div class="stat-title">Total No. of Students</div>
            <div class="stat-value"><?php echo $count_students ?></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="stat-card p-4 bg-light-green text-center">
            <div class="stat-title">No. of Votes</div>
            <div class="stat-value"><?php echo $count_vote ?></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-6 ">
        <div class="card p-4">
            <h2 class="card-title mb-2">Percentage of Votes</h2>

            <h4 class="mb-2 fw-semibold">Overall: 0%</h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-secondary" style="width: 23%">23%</div>
            </div>

            <p class="program-label">BSED</p>
            <div class="progress mb-3">
                <div class="progress-bar bg-bsed" style="width: 10%">10%</div>
            </div>
            <p class="program-label">BSICT</p>
            <div class="progress mb-3">
                <div class="progress-bar bg-primary" style="width: 20%">20%</div>
            </div>

            <p class="program-label">BSCJE</p>
            <div class="progress mb-3">
                <div class="progress-bar bg-bscje" style="width: 23%">23%</div>
            </div>

            <p class="program-label">BSIT</p>
            <div class="progress mb-3">
                <div class="progress-bar bg-bsit" style="width: 15%">15%</div>
            </div>

            <p class="program-label">BSHM</p>
            <div class="progress mb-3">
                <div class="progress-bar bg-bshm" style="width: 16%">16%</div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-6 ">
        <div class="card p-4">
            <h2 class="card-title mb-2 text-center">Voting Result</h2>
            <div>
                <h3 class="bg-secondary text-white p-1">CHAIRMAN</h3>
                <?php
                            $candidates = $conn->prepare("SELECT * FROM tb_candidates WHERE position = 'CHAIRMAN' ");    
                            $candidates->execute();
    
                            foreach ($candidates->fetchAll() as $key => $value) {
                            $fname = $value['fname'];
                            $mname = $value['mname'];
                            $lname = $value['lname'];
    
                            $candidate = $fname. ' ' . $mname. ' ' . $lname; 
    
                            $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE cm = ? ");    
                            $vote->execute([$candidate]);
                            $count_vote = $vote->fetchColumn(0);
                        ?>
                <div class="px-4 d-flex justify-content-between">
                    <h5 class="fw-bold text-capitalize"><?php echo $candidate?></h5>
                    <p class="fw-bold text-capitalize"><?php echo $count_vote?></p>
                    <!-- <div class="progress mb-3">
                                <div class="progress-bar bg-primary" style="width: 10%">10%</div>
                            </div> -->
                </div>
                <?php } ?>
            </div>
            <div>
                <h3 class="bg-secondary text-white p-1"> VICE CHAIRMAN</h3>
                <?php
                            $candidates = $conn->prepare("SELECT * FROM tb_candidates WHERE position = 'VICE CHAIRMAN' ");    
                            $candidates->execute();
    
                            foreach ($candidates->fetchAll() as $key => $value) {
                            $fname = $value['fname'];
                            $mname = $value['mname'];
                            $lname = $value['lname'];
    
                            $candidate = $fname. ' ' . $mname. ' ' . $lname; 
    
                            $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE vcm = ? ");    
                            $vote->execute([$candidate]);
                            $count_vote = $vote->fetchColumn(0);
                        ?>
                <div class="px-4 d-flex justify-content-between">
                    <h5 class="fw-bold text-capitalize"><?php echo $candidate?></h5>
                    <p class="fw-bold text-capitalize"><?php echo $count_vote?></p>
                    <!-- <div class="progress mb-3">
                                <div class="progress-bar bg-info" style="width: 10%">10%</div>
                            </div> -->
                </div>
                <?php } ?>
            </div>
            <div>
                <h3 class="bg-secondary text-white p-1"> SECRETARY</h3>
                <?php
                            $candidates = $conn->prepare("SELECT * FROM tb_candidates WHERE position = 'SECRETARY' ");    
                            $candidates->execute();
    
                            foreach ($candidates->fetchAll() as $key => $value) {
                            $fname = $value['fname'];
                            $mname = $value['mname'];
                            $lname = $value['lname'];
    
                            $candidate = $fname. ' ' . $mname. ' ' . $lname; 
    
                            $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE sec = ? ");    
                            $vote->execute([$candidate]);
                            $count_vote = $vote->fetchColumn(0);
                        ?>
                <div class="px-4 d-flex justify-content-between">
                    <h5 class="fw-bold text-capitalize"><?php echo $candidate?></h5>
                    <p class="fw-bold text-capitalize"><?php echo $count_vote?></p>
                    <!-- <div class="progress mb-3">
                                <div class="progress-bar bg-success" style="width: 10%">10%</div>
                            </div> -->
                </div>
                <?php } ?>
            </div>
            <div>
                <h3 class="bg-secondary text-white p-1"> ASSISTANT SECRETARY</h3>
                <?php
                            $candidates = $conn->prepare("SELECT * FROM tb_candidates WHERE position = 'ASSISTANT SECRETARY' ");    
                            $candidates->execute();
    
                            foreach ($candidates->fetchAll() as $key => $value) {
                            $fname = $value['fname'];
                            $mname = $value['mname'];
                            $lname = $value['lname'];
    
                            $candidate = $fname. ' ' . $mname. ' ' . $lname; 
    
                            $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE assec = ? ");    
                            $vote->execute([$candidate]);
                            $count_vote = $vote->fetchColumn(0);
                        ?>
                <div class="px-4 d-flex justify-content-between">
                    <h5 class="fw-bold text-capitalize"><?php echo $candidate?></h5>
                    <p class="fw-bold text-capitalize"><?php echo $count_vote?></p>
                    <!-- <div class="progress mb-3">
                                <div class="progress-bar bg-success" style="width: 10%">10%</div>
                            </div> -->
                </div>
                <?php } ?>
            </div>
            <div>
                <h3 class="bg-secondary text-white p-1"> TREASURER</h3>
                <?php
                            $candidates = $conn->prepare("SELECT * FROM tb_candidates WHERE position = 'TREASURER' ");    
                            $candidates->execute();
    
                            foreach ($candidates->fetchAll() as $key => $value) {
                            $fname = $value['fname'];
                            $mname = $value['mname'];
                            $lname = $value['lname'];
    
                            $candidate = $fname. ' ' . $mname. ' ' . $lname; 
    
                            $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE tre = ? ");    
                            $vote->execute([$candidate]);
                            $count_vote = $vote->fetchColumn(0);
                               
                        ?>
                <div class="px-4 d-flex justify-content-between">
                    <h5 class="fw-bold text-capitalize"><?php echo $candidate?></h5>
                    <p class="fw-bold text-capitalize"><?php echo $count_vote?></p>
                    <!-- <div class="progress mb-3">
                                <div class="progress-bar bg-secondary" style="width: 10%">10%</div>
                            </div> -->
                </div>
                <?php } ?>
            </div>
            <div>
                <h3 class="bg-secondary text-white p-1"> ASSISTANT TREASURER</h3>
                <?php
                            $candidates = $conn->prepare("SELECT * FROM tb_candidates WHERE position = 'ASSISTANT TREASURER' ");    
                            $candidates->execute();
    
                            foreach ($candidates->fetchAll() as $key => $value) {
                            $fname = $value['fname'];
                            $mname = $value['mname'];
                            $lname = $value['lname'];
    
                            $candidate = $fname. ' ' . $mname. ' ' . $lname; 
    
                            $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE astre = ? ");    
                            $vote->execute([$candidate]);
                            $count_vote = $vote->fetchColumn(0);
                                // echo $count_vote;
                        ?>
                <div class="px-4 d-flex justify-content-between">
                    <h5 class="fw-bold text-capitalize"><?php echo $candidate?></h5>
                    <p class="fw-bold text-capitalize"><?php echo $count_vote?></p>
                    <!-- <div class="progress mb-3">
                                <div class="progress-bar bg-secondary" style="width: 10%">10%</div>
                            </div> -->
                </div>
                <?php } ?>
            </div>
            <div>
                <h3 class="bg-secondary text-white p-1"> AUDITOR</h3>
                <?php
                            $candidates = $conn->prepare("SELECT * FROM tb_candidates WHERE position = 'AUDITOR' ");    
                            $candidates->execute();
    
                            foreach ($candidates->fetchAll() as $key => $value) {
                            $fname = $value['fname'];
                            $mname = $value['mname'];
                            $lname = $value['lname'];
    
                            $candidate = $fname. ' ' . $mname. ' ' . $lname; 
    
                            $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE aud = ? ");    
                            $vote->execute([$candidate]);
                            $count_vote = $vote->fetchColumn(0);
                                // echo $count_vote;
                        ?>
                <div class="px-4 d-flex justify-content-between">
                    <h5 class="fw-bold text-capitalize"><?php echo $candidate?></h5>
                    <p class="fw-bold text-capitalize"><?php echo $count_vote?></p>
                    <!-- <div class="progress mb-3">
                                <div class="progress-bar bg-danger" style="width: 10%">10%</div>
                            </div> -->
                </div>
                <?php } ?>
            </div>
            <div>
                <h3 class="bg-secondary text-white p-1"> ASSISTANT AUDITOR</h3>
                <?php
                            $candidates = $conn->prepare("SELECT * FROM tb_candidates WHERE position = 'ASSISTANT AUDITOR' ");    
                            $candidates->execute();
    
                            foreach ($candidates->fetchAll() as $key => $value) {
                            $fname = $value['fname'];
                            $mname = $value['mname'];
                            $lname = $value['lname'];
    
                            $candidate = $fname. ' ' . $mname. ' ' . $lname; 
    
                            $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE asaud = ? ");    
                            $vote->execute([$candidate]);
                            $count_vote = $vote->fetchColumn(0);
                                // echo $count_vote;
                        ?>
                <div class="px-4 d-flex justify-content-between">
                    <h5 class="fw-bold text-capitalize"><?php echo $candidate?></h5>
                    <p class="fw-bold text-capitalize"><?php echo $count_vote?></p>
                    <!-- <div class="progress mb-3">
                                <div class="progress-bar bg-danger" style="width: 10%">10%</div>
                            </div> -->
                </div>
                <?php } ?>
            </div>
            <div>
                <h3 class="bg-secondary text-white p-1"> BUSINESS MANAGER</h3>
                <?php
                            $candidates = $conn->prepare("SELECT * FROM tb_candidates WHERE position = 'BUSINESS MANAGER' ");    
                            $candidates->execute();
    
                            foreach ($candidates->fetchAll() as $key => $value) {
                            $fname = $value['fname'];
                            $mname = $value['mname'];
                            $lname = $value['lname'];
    
                            $candidate = $fname. ' ' . $mname. ' ' . $lname; 
    
                            $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE bm = ? ");    
                            $vote->execute([$candidate]);
                            $count_vote = $vote->fetchColumn(0);
                                // echo $count_vote;
                        ?>
                <div class="px-4 d-flex justify-content-between">
                    <h5 class="fw-bold text-capitalize"><?php echo $candidate?></h5>
                    <p class="fw-bold text-capitalize"><?php echo $count_vote?></p>
                    <!-- <div class="progress mb-3">
                                <div class="progress-bar bg-info" style="width: 10%">10%</div>
                            </div> -->
                </div>
                <?php } ?>
            </div>
            <div>
                <h3 class="bg-secondary text-white p-1"> ASSISTANT BUSINESS MANAGER</h3>
                <?php
                            $candidates = $conn->prepare("SELECT * FROM tb_candidates WHERE position = 'ASSISTANT BUSINESS MANAGER' ");    
                            $candidates->execute();
    
                            foreach ($candidates->fetchAll() as $key => $value) {
                            $fname = $value['fname'];
                            $mname = $value['mname'];
                            $lname = $value['lname'];
    
                            $candidate = $fname. ' ' . $mname. ' ' . $lname; 
    
                            $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE abm = ? ");    
                            $vote->execute([$candidate]);
                            $count_vote = $vote->fetchColumn(0);
                                // echo $count_vote;
                        ?>
                <div class="px-4 d-flex justify-content-between">
                    <h5 class="fw-bold text-capitalize"><?php echo $candidate?></h5>
                    <p class="fw-bold text-capitalize"><?php echo $count_vote?></p>
                    <!-- <div class="progress mb-3">
                                <div class="progress-bar bg-info" style="width: 10%">10%</div>
                            </div> -->
                </div>
                <?php } ?>
            </div>
            <div>
                <h3 class="bg-secondary text-white p-1"> PIO</h3>
                <?php
                            $candidates = $conn->prepare("SELECT * FROM tb_candidates WHERE position = 'PIO' ");    
                            $candidates->execute();
    
                            foreach ($candidates->fetchAll() as $key => $value) {
                            $fname = $value['fname'];
                            $mname = $value['mname'];
                            $lname = $value['lname'];
    
                            $candidate = $fname. ' ' . $mname. ' ' . $lname; 
    
                            $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE pio = ? ");    
                            $vote->execute([$candidate]);
                            $count_vote = $vote->fetchColumn(0);
                                // echo $count_vote;
                        ?>
                <div class="px-4 d-flex justify-content-between">
                    <h5 class="fw-bold text-capitalize"><?php echo $candidate?></h5>
                    <p class="fw-bold text-capitalize"><?php echo $count_vote?></p>
                    <!-- <div class="progress mb-3">
                                <div class="progress-bar bg-info" style="width: 10%">10%</div>
                            </div> -->
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>