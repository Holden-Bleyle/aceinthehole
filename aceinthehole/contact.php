<?php include 'header1.php'; ?>
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
<?php include 'header2.php'; ?>

<h2 id="contactheader">Contact Us</h2>

<form id="contact" action="contact_action.php" method="post" class="formcontrol">
    Name: <br>
    <input type="text" name="name"><br>
    Email: <br>
    <input type="email" name="email"><br>
    What is your interest? (etc. Volunteering)<br>
    <textarea class="formcontrol" name="reason" form="contact">Enter text here...</textarea><br>
    <input type="submit" name="submit" value="Click here to submit your completed form.">
</form>

<?php include 'footer.php'; ?>