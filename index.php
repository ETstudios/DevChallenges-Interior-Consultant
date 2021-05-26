<?php
   
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Eric Thomas">
	<meta name="description" content="Eric Thomas recreation of the DevChallenges Interior Consultant challenge">
	<title> Modern Interior </title>
	<link rel="shortcut icon" href="img/icon.png">    
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/interior.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
    <header>
        <div class="col-xs-6">
            <span class="showcase"> This interior </span>
        </div>
        <div class="col-xs-6">
            <nav id="menu">
                <span class="material-icons" id="menu-toggle" onclick="MenuToggle()">menu</span>
                <ul>
                    <li>
                        <a href="#" class="active"> Home </a>
                    </li>
                    <li>
                        <a href="#"> Collection </a>
                    </li>
                    <li>
                        <a href="#"> About </a>
                    </li>
                    <li>
                        <a href="#"> Contact </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="clear lg"> &nbsp; </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-5">
                <h1> Modern Interior </h1>
                <br>
                <p class="col-sm-12 col-md-8">
                    A full-service residential &amp; commercial interior design and staging company offering professional organizing &amp; eco-services.
                </p>
                <br>
                <a href="#" class="more">
                    Read more <span class="material-icons">trending_flat</span>
                </a>
                <div class="clear"> &nbsp; </div>
            </div>
            <div class="col-xs-12 col-md-7 interior">
                <img src="img/photo1.png" class="hero">
                <span class="designer">
                    <div class="row">
                        <div class="col-xs-2 col-sm-2 col-md-3 col-lg-2 center-text">
                            <img src="img/photo2.png" class="icon">
                        </div>
                        <div class="col-xs-4 col-sm-6 col-md-7 col-lg-6">
                            <span class="name"> 
                                Aliza Webber 
                            </span>
                            <br>
                            <span class="position">
                                Interior Designer
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-sm-7 col-md-8 col-lg-8">
                            <br>
                            <h3>
                                Designed in 2020 by Aliza Webber
                            </h3>
                        </div>
                    </div>
                </span>
                <div class="clear lg"> &nbsp; </div>
            </div>
        </div>
    </div>
    <div class="clear"> &nbsp; </div>
    <footer>
        Created by <a href="https://github.com/ETstudios" target="_blank">Eric Thomas</a> - <a href="https://devchallenges.io/" target="_blank">devChallenges.io</a>
    </footer>
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mobile-nav.js"></script>
</body>
</html>