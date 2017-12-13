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
                        <li class="active"><a href="#">Home</a></li>
                        <li class="togglablecontent"><a href="about.php">About</a></li>
                        <li class="togglablecontent"><a href="events.php">Events</a></li>
                        <li class="togglablecontent"><a href="faq.php">FAQ</a></li>
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
    <!--MAIN CONTENT STARTS HERE-->
    <main>
        <div class="row">
            <div id="content1" class="col-lg-6">
                <h2>ABOUT THE EVENT</h2>
                <p>The Annual Ace in the Hole MultiSport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.<br><br>

                There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>
            </div>
            <!--/.content1-->
            <div id="content2" class="col-lg-6 togglablecontent2">
                <h2>SCHEDULE</h2>
                <table>
                    <tr><th colspan="2">Saturday</th></tr>
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
                    <tr><th colspan="2">Sunday</th></tr>
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
            <!--/.content2-->
        </div>
        <!--/.row-->
        <div class="row">
            <div id="content3" class="col-lg-6 togglablecontent2">
                <h2>WHAT TO BRING</h2>
                <p>Watch the weather closely.  The show goes on no matter what the weather is doing.<br><br>

                    You must wear your chip timing piece during the entire event.  You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.<br><br>

                    Swim:  Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries.  We will provide you with a swim cap but you will want to bring your own goggles.<br><br>

                    Bike:  A biking helmet is mandatory.  You will also receive 2 stickers in your package with your race number on them.  The small sticker should go on the front of your helmet.  The bigger sticker will wrap around your bike frame.  Road or mountain bikes are acceptable.  For safety reasons, be sure to have end-caps on the end of your handle-bars.<br><br>

                    Run:  You must finish the race with your bib number on the front of you.  Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don’t have to worry about it.  Others pin it on a singlet that they put on once they finish the swim before they head out for the bike.  Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run.  Use whatever option feels best for you.<br><br>

                    Remember to bring a change of clothing so you can enjoy the post-event festivities.</p>
            </div>
            <!--/.content3-->
            <div id="content4" class="col-lg-6 togglablecontent2">
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
            <!--/.content4-->
        </div>
        <!--/.row-->
        <div class="row">
            <div id="content5" class="col-lg-6 togglablecontent2">
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
            <div id="content5" class="col-lg-6 togglablecontent2">
                <h2>FREQUENTLY ASKED QUESTIONS</h2>
                <p>What are the Rules? We currently adhere to the USAT Rules for Triathlon & Duathlon.  Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.</p><br>

                <p>Can I use a personal music device while cycling? Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</p><br>

                <p>Can I use a personal music device while running? During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.</p><br>

                <p>If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice…music or awards/points/rankings.</p><br>
    
                <p>If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don’t want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.
                We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</p><br>

                <p>Do I need to wear a wetsuit?  No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor. 
                Do I have to use a road or racing bike?  No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</p><br>
            </div>
        </div>
        <div class="row togglablecontent">
            <p>
                <br>
            <a href="about.php">SCHEDULE AND WHAT TO BRING ></a><br><br>
            <a href="events.php">EVENT DETAILS AND REGISTRATION ></a><br><br>
            <a href="faq.php">FREQUENTLY ASKED QUESTIONS > </a><br><br>
            </p>
        </div>
    </main>
    <!--MAIN CONTENT ENDS HERE-->
    <!--FOOTER STARTS HERE-->
    <?php include 'footer.php'; ?>