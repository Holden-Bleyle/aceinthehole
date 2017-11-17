<?php include 'header1.php'; ?>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="togglablecontent"><a href="about.php">About</a></li>
            <li class="togglablecontent"><a href="events.php">Events</a></li>
            <li class="togglablecontent"><a href="faq.php">FAQ</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="active"><a href="#">Registration</a></li>
            <li><a href="gallery.php">Gallery</a></li>
        </ul>
    </div>
<?php include 'header2.php'; ?>

<h2 id="contactheader">Register now!</h2>

<form id="reg" action="reg_action.php" method="post" class="formcontrol">
    Name: <br>
    <input type="text" name="name"><br>
    Email: <br>
    <input type="email" name="email"><br>
    What event(s) are you interested in participating in?<br>
    <textarea class="formcontrol" name="events" form="reg">Enter text here...</textarea><br>
    <input type="submit" value="Click here to submit your completed form.">
</form>

<?php include 'footer.php'; ?>