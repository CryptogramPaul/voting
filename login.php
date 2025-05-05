<?php 
    session_start();
    require_once 'conn/connection.php';
    
    if (isset($_COOKIE['userid'])) {
        header("Location: index.php");
    }

 ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <!-- <title>SSC Online Voting WVSU-LC - LOGIN</title> -->
    <title>LOGIN</title>
    <!-- <link href="bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="bootstrap-5.0.2-dist/css/style.css" rel="stylesheet" type="text/css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="Javascript/jquery-3.0.0.min.js" type="text/x-javascript"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
/* .spinner-border {
    width: 1rem;
    height: 1rem;
    display: none;
} */
</style>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card">
            <div class="card-body login-card-body">
                <h3 class="login-box-msg">Login</h3>
                <form id="FormLogin">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Username" id="username" autocomplete
                            required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Password" id="password" autocomplete
                            required>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-primary btn-block" id="loginBtn" type="submit">
                                <span id="btnText">Login</span>
                                <!-- <div id="spinner" class="spinner-border spinner-border-sm text-light" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div> -->
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<script>
$(document).ready(function(data) {
    $("#FormLogin").on("submit", function(e) {
        e.preventDefault();
        UserLogin();
    });
});

function UserLogin() {
    // const username = $("#username").val();
    // const password = $("#password").val();
    $.post(
        "actions/login-action.php", {
            username: $("#username").val(),
            password: $("#password").val(),
        },
        function(data) {
            if (jQuery.trim(data) == "success") {
                alert("Login Successfully");
                window.location.href = "index.php";
            } else {
                alert(data);
            }
        }
    );
}
</script>