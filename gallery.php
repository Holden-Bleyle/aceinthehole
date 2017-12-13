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
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="registration.php">Registration</a></li>
                        <li class="active"><a href="#">Gallery</a></li>
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
        <main>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="responsive">
                        <div class="gallery">
                            <a target="_blank" href="assets/img/runnersbeach.jpg">
                            <img src="assets/img/runnersbeach.jpg" alt="Enjoy a beautiful day!" width="300" height="200">
                            </a>
                        <div class="desc">Enjoy a beautiful day!</div>
                        </div>
                    </div>
                    <div class="responsive">
                        <div class="gallery">
                            <a target="_blank" href="assets/img/runnerscompete.jpg">
                            <img src="assets/img/runnerscompete.jpg" alt="Be the best." width="300" height="200">
                            </a>
                        <div class="desc">Be the best.</div>
                        </div>
                    </div>
                    <div class="responsive">
                        <div class="gallery">
                            <a target="_blank" href="assets/img/runnerskeepgoing.jpg">
                            <img src="assets/img/runnerskeepgoing.jpg" alt="Whatever it takes to make it through." width="300" height="200">
                            </a>
                        <div class="desc">Whatever it takes to make it through.</div>
                        </div>
                    </div>
                    <div class="responsive">
                        <div class="gallery">
                            <a target="_blank" href="assets/img/runnerspaint.jpg">
                            <img src="assets/img/runnerspaint.jpg" alt="If you're not having a blast, what's the point?" width="300" height="200">
                            </a>
                        <div class="desc">If you're not having a blast, what's the point?</div>
                        </div>
                    </div>
                    <div class="responsive">
                        <div class="gallery">
                            <a target="_blank" href="assets/img/runnerspride.jpg">
                            <img src="assets/img/runnerspride.jpg" alt="Let's have fun together!" width="300" height="200">
                            </a>
                        <div class="desc">Let's have fun together!</div>
                        </div>
                    </div>
                    <div class="responsive">
                        <div class="gallery">
                            <a target="_blank" href="assets/img/runnersstart.jpg">
                            <img src="assets/img/runnerspride.jpg" alt="1... 2... 3... Go!" width="300" height="200">
                            </a>
                        <div class="desc">1... 2... 3... Go!</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </main>
        <!--FOOTER STARTS HERE-->
        <?php include 'footer.php'; ?>