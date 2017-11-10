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
    <?php include 'header.php'; ?>
    <!--HEADER ENDS HERE-->
    <!--MAIN CONTENT STARTS HERE-->
    <main>
        <div class="row">
            <div id="content1" class="col-lg-6">
                <h2>Here's some non-copy content for now!</h2>
                <p>Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! </p>
            </div>
            <!--/.content1-->
            <div id="content2" class="col-lg-6">
                <h2>Here's some non-copy content for now!</h2>
                <p>Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now! Here's some non-copy content for now!</p>
            </div>
            <!--/.content2-->
        </div>
        <!--/.row-->
    </main>
    <!--MAIN CONTENT ENDS HERE-->
    <!--FOOTER STARTS HERE-->
    <?php include 'footer.php'; ?>
    <!--JAVASCRIPT IMPORT-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>