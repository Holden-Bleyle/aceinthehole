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
                        <li class="active"><a href="#">About</a></li>
                        <li><a href="events.php">Events</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="contact.php">Contact</a></li>
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
    <main>
    <div class="row">
            <div id="content2" class="col-lg-6">
                <h2>SCHEDULE</h2>
                <table>
                    <tr><th class="day" colspan="2">Saturday</th></tr>
                    <tr>
                        <th>Long Course&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <td>7:00 AM</td>
                    </tr>
                    <tr>
                        <th>10K Marathon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <td>7:15 AM</td>
                    </tr>
                    <tr>
                        <th>Half Marathon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <td>7:15AM</td>
                    </tr>
                    <tr>
                        <th>Olympic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <td>7:30 AM</td>
                    </tr>
                    <tr><th class="day" colspan="2">Sunday</th></tr>
                    <tr>
                        <th>Sprint&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <td>8:00 AM</td>
                    </tr>
                    <tr>
                        <th>Try-a-Tri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <td>8:20 AM</td>
                    </tr>
                    <tr>
                        <th>Splash n Dash&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <td>12:00 PM</td>
                    </tr>
                </table>
                <p></p>
            </div>
            <div id="content3" class="col-lg-6">
                
                <h2>WHAT TO BRING</h2>
                <p>Watch the weather closely.  The show goes on no matter what the weather is doing.<br><br>

                    You must wear your chip timing piece during the entire event.  You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.<br><br>

                    Swim:  Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries.  We will provide you with a swim cap but you will want to bring your own goggles.<br><br>

                    Bike:  A biking helmet is mandatory.  You will also receive 2 stickers in your package with your race number on them.  The small sticker should go on the front of your helmet.  The bigger sticker will wrap around your bike frame.  Road or mountain bikes are acceptable.  For safety reasons, be sure to have end-caps on the end of your handle-bars.<br><br>

                    Run:  You must finish the race with your bib number on the front of you.  Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don’t have to worry about it.  Others pin it on a singlet that they put on once they finish the swim before they head out for the bike.  Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run.  Use whatever option feels best for you.<br><br>

                    Remember to bring a change of clothing so you can enjoy the post-event festivities.</p>
            </div>
            <!--/.content3-->
        </div>
    </main>
    
    
    <!--FOOTER STARTS HERE-->
    <?php include 'footer.php'; ?>