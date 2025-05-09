<?php
    require_once '../conn/connection.php';
    $studid = $_COOKIE['userid'];

    
    $profile = $conn->prepare("SELECT * FROM `tb_students` WHERE studid = ?");
    $profile->execute([$studid]);
    
    $value = $profile->fetch();

?>
<style>
.form-card {
    max-width: 700px;
    margin: 60px auto;
    background: #ffffff;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    padding: 40px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.form-card h3 {
    text-align: start;
    margin-bottom: 25px;
    color: #0d6efd;
}

.form-card .form-label {
    font-weight: 600;
}

.form-card .btn {
    width: 100%;
}
</style>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="form-card">
                <h3 class="text-uppercase">Update Profile</h3>
                <form id="FormUpdateProfile">
                    <input type="hidden" name="sid" value="<?php echo $value['studid'];?>">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control"
                            value="<?php echo $value['fname'] . ' ' . $value['mname'] . ' ' . $value['lname'];?>"
                            readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Course</label>
                        <input type="text" class="form-control" value="<?php echo $value['course'];?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" value="<?php echo $value['username'];?>"
                            readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Input Current Password</label>
                        <input type="password" id="current_pass" class="form-control"
                            placeholder="Enter current password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">New Password</label>
                        <input type="password" id="new_password" class="form-control" placeholder="Enter new password">
                    </div>
                    <button type="submit" id="updatepwd" class="btn btn-primary">Update Record</button>
                </form>
            </div>
        </div>
        <!-- <div class="col">
            <div class="form-card ">
                <h3 class="text-uppercase">Application for Candidacy</h3>
                <form id="FormApplicationCandidacy">
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" id="fname" class="form-control" value="<?php echo $value['fname'];?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Middle Name</label>
                        <input type="text" id="mname" class="form-control" value="<?php echo $value['mname'];?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" id="lname" class="form-control" value="<?php echo $value['lname'];?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Course</label>
                        <input type="text" id="course" class="form-control" value="<?php echo $value['course'];?>">
                    </div>
                    <button type="submit" id="sub_coc" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div> -->
    </div>
</div>
<script>
$("#FormUpdateProfile").on("submit", function(e) {
    e.preventDefault();
    UpdateProfile();
});
// $("#FormApplicationCandidacy").on("submit", function(e) {
//     e.preventDefault();
//     ApplicationCandidacy();
// });

function UpdateProfile() {
    let username = $("#username").val();
    let current_pass = $("#current_pass").val();
    let new_password = $("#new_password").val();

    $.post("actions/update-profile.php", {
        username: username,
        current_pass: current_pass,
        new_password: new_password,

    }, function(data) {
        if (jQuery.trim(data) === "success") {
            alert("Update Successfully");

        } else {
            alert(data);
        }
    });
}

// function ApplicationCandidacy() {
//     let fname = $("#fname").val();
//     let mname = $("#mname").val();
//     let lname = $("#lname").val();
//     let course = $("#course").val();

//     $.post("actions/application-candidacy.php", {
//         fname: fname,
//         mname: mname,
//         lname: lname,
//         course: course,

//     }, function(data) {
//         if (jQuery.trim(data) === "success") {
//             alert("Applied Successfully");
//         } else {
//             alert(data);
//         }
//     });
// }
</script>