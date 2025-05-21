<?php
    require_once '../conn/connection.php';
    
    $schoolyear = $_COOKIE['schoolyear'];

    $result = $conn->prepare("SELECT * FROM tb_students WHERE schoolyear = ? ");    
    $result->execute([$schoolyear]);
    $count_students = $result->rowCount();
    
    $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE schoolyear = ?");    
    $vote->execute([$schoolyear]);
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
            <div class="stat-title">No. of Students Votes</div>
            <div class="stat-value"><?php echo $count_vote ?></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-6 ">
        <div class="card p-4">
            <h2 class="card-title mb-2">Percentage of Votes</h2>
            <?php
               
                $overall = ($count_students > 0) ? ($count_vote / $count_students) * 100 : 0;

            ?>
            <h4 class="mb-2 fw-semibold">Overall: <?php echo round($overall, 2) . "%" ?></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-secondary" style="width: <?php echo round($overall, 2) . "%" ?>">
                    <?php echo round($overall, 2) . "%" ?></div>
            </div>

            <?php
                $get_course = $conn->prepare("SELECT 'Education' AS group_name, COUNT(*) AS student_count
                    FROM tb_students
                    WHERE (course = 'BSED' OR course = 'BTVTED' OR course = 'BEED')
                    AND schoolyear = ?");
                $get_course->execute([$schoolyear]);
                
                foreach($get_course->fetchAll() as $key => $value){
                
                    $education = $conn->prepare("SELECT count(*) as vote
                                                FROM tb_vote a 
                                                LEFT JOIN tb_students b ON a.studid = b.studid 
                                                WHERE b.course = 'BSED' OR b.course = 'BTVTED' OR b.course = 'BEED' AND a.schoolyear = ? ");
                    $education->execute([$schoolyear]);
                    $education_count = $education->fetchColumn(0);
                    
                    
                    $sql_total_students = $conn->prepare("SELECT COUNT(*) FROM tb_students WHERE course = 'BSED' OR course = 'BTVTED' OR course = 'BEED' AND schoolyear = ? ");
                    $sql_total_students->execute([$schoolyear]);
                    $total_students = $sql_total_students->fetchColumn();

                    $bsed_percentage = ($total_students > 0) ? ($education_count / $total_students) * 100 : 0;
            ?>
            <p class="program-label">EDUCATION</p>

            <div class="progress mb-3">
                <div class="progress-bar bg-bsed" style="width: <?php echo round($bsed_percentage, 2) . "%" ?>">
                    <?php echo round($bsed_percentage, 2) . "%" ?></div>
            </div>
            <?php
                }
            ?>
            <?php
                $get_course = $conn->prepare("SELECT course
                    FROM tb_students
                    WHERE course = 'BSICT' || course = 'BSCJE' || course = 'BSIT' || course = 'BSHM'
                    AND schoolyear = ?");
                $get_course->execute([$schoolyear]);

                foreach ($get_course->fetchAll() as $key => $value) {
                   
         
                    $course = '';
                    $progress_bar = '';
                    switch ($value['course']) {
                        case 'BSICT':
                           $course = 'INFORMATION TECHNOLOGY';
                           $progress_bar = 'bg-bsict';
                            break;
                        case 'BSCJE':
                           $course = 'CRIMINOLOGY';
                           $progress_bar = 'bg-bscje';
                            break;
                        case 'BSIT':
                           $course = 'INDUSTRIAL TECHONOLOGY';
                           $progress_bar = 'bg-bsit';
                            break;
                        case 'BSHM':
                           $course = 'HOSPITALITY MANAGEMENT';
                           $progress_bar = 'bg-bshm';
                            break;
                    }
                    
                    $othercourse = $conn->prepare("SELECT count(*) as vote
                                                FROM tb_vote a 
                                                LEFT JOIN tb_students b ON a.studid = b.studid 
                                                WHERE b.course = ? AND a.schoolyear = ? ");
                    $othercourse->execute([$value['course'], $schoolyear]);
                    $othercourse_count = $othercourse->fetchColumn(0);
                    
                    
                    $sql_total_students = $conn->prepare("SELECT COUNT(*) FROM tb_students WHERE course = ? AND schoolyear = ? ");
                    $sql_total_students->execute([$value['course'], $schoolyear]);
                    $total_students = $sql_total_students->fetchColumn();

                    $other_course_percentage = ($total_students > 0) ? ($othercourse_count / $total_students) * 100 : 0;
            ?>
            <p class="program-label"><?php echo $course ?></p>
            <div class="progress mb-3">
                <div class="progress-bar <?php echo $progress_bar ?>"
                    style="width: <?php echo round($other_course_percentage, 2) . "%" ?>">
                    <?php echo round($other_course_percentage, 2) . "%" ?></div>
            </div>

            <?php
                } 
            ?>

        </div>
    </div>
    <div class="col-12 col-xl-6 ">
        <div class="card p-4">
            <h2 class="card-title mb-2 text-center">Voting Result</h2>
            <div>
                <?php
                    $candidates = $conn->prepare("SELECT * FROM tb_candidates GROUP BY position ORDER BY 
                    CASE position
                        WHEN 'CHAIRMAN' THEN 1
                        WHEN 'VICE CHAIRMAN' THEN 2
                        WHEN 'SECRETARY' THEN 3
                        WHEN 'ASSISTANT SECRETARY' THEN 4
                        WHEN 'TREASURER' THEN 5
                        WHEN 'ASSISTANT TREASURER' THEN 6
                        WHEN 'AUDITOR' THEN 7
                        WHEN 'ASSISTANT AUDITOR' THEN 8
                        WHEN 'ASSISTANT BUSINESS MANAGER' THEN 9
                        WHEN 'BUSINESS MANAGER' THEN 10
                        WHEN 'PIO' THEN 11
                        ELSE 999
                    END; ");    
                    $candidates->execute();
                    
                    foreach ($candidates->fetchAll() as $key => $value) {
                        $position = $value['position'];
                        
                    ?>
                <h3 class="bg-secondary text-white p-1"><?php echo $position ?></h3>
                <?php
                    $candidates = $conn->prepare("SELECT * FROM tb_candidates WHERE position = ? AND sy = ? ");    
                    $candidates->execute([$position, $schoolyear]);

                    foreach ($candidates->fetchAll() as $key => $value) {
                    $fname = $value['fname'];
                    $mname = $value['mname'];
                    $lname = $value['lname'];

                    $candidate = $fname. ' ' . $mname. ' ' . $lname; 
                    
                    $count_vote = 0 ;

                    switch ($position) {
                        case 'CHAIRMAN':
                            $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE schoolyear= ? AND cm = ? ");    
                            $vote->execute([$schoolyear, $candidate]);
                            $count_vote = $vote->fetchColumn(0);

                        break;
                        case 'VICE CHAIRMAN':
                            $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE schoolyear= ? AND vcm = ? ");    
                            $vote->execute([$schoolyear, $candidate]);
                            $count_vote = $vote->fetchColumn(0);

                        break;
                        case 'SECRETARY':
                            $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE schoolyear= ? AND sec = ? ");    
                            $vote->execute([$schoolyear, $candidate]);
                            $count_vote = $vote->fetchColumn(0);

                        break;
                        case 'ASSISTANT SECRETARY':
                            $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE schoolyear= ? AND assec = ? ");    
                            $vote->execute([$schoolyear, $candidate]);
                            $count_vote = $vote->fetchColumn(0);

                        break;
                        case 'TREASURER':
                            $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE schoolyear= ? AND tre = ? ");    
                            $vote->execute([$schoolyear, $candidate]);
                            $count_vote = $vote->fetchColumn(0);

                        break;
                        case 'ASSISTANT TREASURER':
                            $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE schoolyear= ? AND astre = ? ");    
                            $vote->execute([$schoolyear, $candidate]);
                            $count_vote = $vote->fetchColumn(0);

                        break;
                        case 'AUDITOR':
                            $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE schoolyear= ? AND aud = ? ");    
                            $vote->execute([$schoolyear, $candidate]);
                            $count_vote = $vote->fetchColumn(0);

                        break;
                        case 'ASSISTANT AUDITOR':
                            $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE schoolyear= ? AND asaud = ? ");    
                            $vote->execute([$schoolyear, $candidate]);
                            $count_vote = $vote->fetchColumn(0);

                        break;
                        case 'BUSINESS MANAGER':
                            $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE schoolyear= ? AND bm = ? ");    
                            $vote->execute([$schoolyear, $candidate]);
                            $count_vote = $vote->fetchColumn(0);

                        break;
                        case 'ASSISTANT BUSINESS MANAGER':
                            $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE schoolyear= ? AND abm = ? ");    
                            $vote->execute([$schoolyear, $candidate]);
                            $count_vote = $vote->fetchColumn(0);

                        break;
                        case 'PIO':
                            $vote = $conn->prepare("SELECT count(voteid) FROM tb_vote WHERE schoolyear= ? AND pio = ? ");    
                            $vote->execute([$schoolyear, $candidate]);
                            $count_vote = $vote->fetchColumn(0);

                        break;
                        
                       
                    }
                    
                  
                    
                ?>
                <div class="px-4 d-flex justify-content-between">
                    <h5 class="fw-bold text-capitalize"><?php echo $candidate?></h5>
                    <p class="fw-bold text-capitalize"><?php echo $count_vote?></p>
                </div>
                <?php }} ?>
            </div>
        </div>
    </div>
</div>