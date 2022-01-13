<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Details</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <!-- Style CSS -->
    <!--
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="css/styles.css" rel="stylesheet">
    -->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo site_url('Home')?>">CERENITY STUDIO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo site_url('Home')?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Intro</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Introduction</a></li>
                            <li><a class="dropdown-item" href="#">News</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Business Introduction</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Business Area</a></li>
                            <li><a class="dropdown-item" href="#">Our Game</a></li>
                            <li><a class="dropdown-item" href="<?php echo site_url('JobDetails')?>">Job Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Contact</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?= base_url('/submit-proposal') ?>">Submit
                                    Proposal</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/proposal-status') ?>">Proposal Status</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="mt-5 text-center">JOB DETAILS</h1>
    <br>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <i class="fas fa-phone-alt h1"></i>
                <h3>Operating & Support</h3>
                Customer Service Operator, Game Master, Operation Planner, Event Planner.
            </div>
            <div class="col-md-4">
                <i class="fas fa-palette h1"></i>
                <h3>Art & Design</h3>
                Artwork Designer, 2D Artist, 3D Artist, Animation Maker, Effect Maker, Web Designer, UI/UX Designer.
            </div>
            <div class="col-md-4">
                <i class="fas fa-laptop-code h1"></i>
                <h3>Programmer</h3>
                Server Programmer, Client Programmer, Mobile Application Developer, Platform Programmer, Web Publisher,
                Database Engineer, System Engineer.
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <i class="fas fa-briefcase h1"></i>
                <h3>Business Planning</h3>
                Business Planner, Game Planner, Service Planner, Data Analyst, Proposal Businessman.
            </div>
            <div class="col-md-4">
                <i class="fas fa-chart-line h1"></i>
                <h3>Marketing</h3>
                Marketer, Advertise Maker, Proposal Salesman, Event Planner.
            </div>
            <div class="col-md-4">
                <i class="fas fa-cogs h1"></i>
                <h3>Administration</h3>
                HR Staff, Accounting Staff, Legal Staff, Administrator.
            </div>
        </div>
    </div>
</body>

<!-- Footer -->
<footer class="footer">
    <div class="col-12 text-center copyright mt-5 pt-5">
        <p><small>&copy; 2019-2021 All Rights Reserved.</small></p>
    </div>
</footer>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  -->

</html>