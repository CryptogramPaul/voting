<?php 
    session_start();
    require_once 'conn/connection.php';
    
    if (!isset($_COOKIE['userid'])) {
        header("Location: login.php");
    }

 ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>SSC Online Voting WVSU-LC</title>
    <!-- <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link href="assets/css/styles.css" rel="stylesheet" type="text/css"> -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark px-3">
        <div class="container">
            <a class="navbar-brand" href="#">SSC ONLINE VOTING WVSU-LC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" onclick="home()" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="votingcenter()" href="#">Voting Center</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="viewvote()" href="#">View Vote</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="profile()" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="Logout()">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-3" id="LoadDetails">

    </div>

</body>

</html>

<script src="js/script.js"></script>
<script src="js/authentication.js"></script>