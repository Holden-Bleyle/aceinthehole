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
                        <li><a href="about.php">About</a></li>
                        <li class="active"><a href="#">Events</a></li>
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
            <div id="content4" class="col-lg-6">
                <h2>REGISTRATION</h2>
                <table>
                    <tr>
                        <th>Long Course&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <td>$240</td>
                    </tr>
                    <tr>
                        <th>10K Marathon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <td>$110</td>
                    </tr>
                    <tr>
                        <th>Half Marathon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <td>$75</td>
                    </tr>
                    <tr>
                        <th>Olympic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <td>$110</td>
                    </tr>
                    <tr>
                        <th>Sprint&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <td>$90</td>
                    </tr>
                    <tr>
                        <th>Try-a-Tri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <td>$65</td>
                    </tr>
                </table><br>
                <li>
                <ul>Cost Includes:</ul>
                <ul>Food & Beer</ul>
                <ul>Access to the weekend’s live entertainment & Fitness Expo</ul>
                <ul>Commemorative Finisher medal</ul>
                <ul>Accurate Chip Timing for competitive races</ul>
                <ul>Ace in the Hole MultiSport Weekend Tech Shirt</ul>
                <ul>Post-event party & entertainment</ul>
                </li><br>
                <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up. </p>
            </div>
            <div id="content5" class="col-lg-6">
                <h2>COURSE DETAILS</h2>
                <p>WATER TEMPERATURE is expected to be between 62 – 66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.</p><br>
                <p>Long Course SWIM – 1.2mi - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p><br>
                <p>Long Course BIKE – 58 Miles: A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you. </p><br>
                <p>Long Course RUN – 13.1mi - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).</p><br>
                <p>OLYMPIC SWIM – 1,500 meters - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p><br>
                <p>OLYMPIC BIKE – 28mi - A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections. </p><br>
                <p>OLYMPIC RUN – 10K - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).</p><br>
                <p>Sprint: Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.</p><br>
                <p>Try-A-Tri: This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).</p><br>
                <p>Half Marathon COURSE: Half-Marathon (13.1-miles): Half-Marathon event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports & Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified.</p><br>
                <p>10k COURSE: The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.</p><br>
            </div>
        </div>
    </main>
    
    
    <!--FOOTER STARTS HERE-->
    <?php include 'footer.php'; ?>