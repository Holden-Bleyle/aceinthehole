<!DOCTYPE html>
<html lang="en">
<!--HEAD SECTION-->

<head>
    <meta charset="utf-8">
    <!--IMPORT LINKS-->
    <!--BOOTSTRAP-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--MAIN STYLE-->
    <link href="assets/css/style.css" rel="stylesheet">
    <!--GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Days+One|Ubuntu+Condensed" rel="stylesheet">
</head>
    
    <!-- Runs a js file that checks the width of the window, then determines if it should show/hide parts of the page.-->
<body onload="contentCheck();" onresize="contentCheck();">
<!--HEADER STARTS HERE-->
    <header>
        <!--NAVIGATION STARTS HERE-->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="#">Ace in the Hole</a> </div>
                <!--/.navbar-header-->
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li class="togglablecontent"><a href="about.php">About</a></li>
                        <li class="togglablecontent"><a href="events.php">Events</a></li>
                        <li class="togglablecontent"><a href="faq.php">FAQ</a></li>
                        <li class="active"><a href="#">Contact</a></li>
                        <li><a href="registration.php">Registration</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-fluid-->
        </nav>
        <!--NAVIGATION ENDS HERE-->
        <!--HEADER CONTENT STARTS HERE-->
        <article id="heroheader">
            <div class="container-fluid">
                    <h1>Ace in the Hole</h1>
                    <p>MultiSport Weekend</p>
            </div>
            <!--/.container-fluid-->
        </article>
        <!--/.heroheader-->
        </header>
        <!--HEADER CONTENT ENDS HERE-->
<h2 id="contactheader">Contact Us Here!</h2>
    
<form id="contact" action="contact_action.php" method="post" class="formcontrol">
    Name: <br>
    <input class="notradio" type="text" name="name"><br>
    Email: <br>
    <input class="notradio" type="email" name="email"><br>
    What is your interest? <br>
    <input class="radio-inline" type="radio" name="contacttype" value="athlete"><label>  Athlete</label><br>
    <input class="radio-inline" type="radio" name="contacttype" value="volunteer"><label>  Volunteer</label><br>
    Any Question/Comments?<br>
    <textarea class="notradio" class="formcontrol" name="response" form="contact">Enter text here...</textarea><br>
    <input type="submit" name="submit" value="Click here to submit your completed form.">
</form>

<?php include 'footer.php'; ?>