<!DOCTYPE html>
<html>

<head>
    <title>Tugas MVC</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>

<body style="background-image: url('<?php echo base_url("assets/img/nature.jpg") ?>'); background-size: 100% 100%; background-attachment: fixed;">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top ">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="<?php echo base_url('home'); ?>">CI3 dan Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="<?php echo base_url('home'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo base_url('home/about'); ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo base_url('home/contact'); ?>">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid pt-5">
        <div class="container " style="padding-top: 20px;">