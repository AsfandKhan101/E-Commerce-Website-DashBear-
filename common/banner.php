<?php
/*banner.php
This file handles the "banner display" of our DashBear website,
which includes the logo and welcome message. The logo is just HTML,
but the welcome message "Welcome" is now followed by the date and time.
Thus this file now has a PHP extension because it contains a PHP script
to display this information. Eventually the Welcome message will be
personalized if the user has logged in. Also, a JavaScript script using 
AJAX and a second PHP script will be used to update the time every 60
seconds and the date at midnight.
*/
?>
<div id="logo" class="w3-half">
  <img src="https://images-platform.99static.com//cTANeLvHk_EibhtgJcTQG_HMyko=/0x599:601x1200/fit-in/500x500/99designs-contests-attachments/101/101270/attachment_101270547" alt="DashBear Logo" style="width: 100%;">
</div>

<div class="w3-half w3-right-align">
  <div class="w3-panel">
    <?php
    // Ensure that session_start() is called at the beginning of any
    // file that includes this script and needs to make use of the
    // $_SESSION array. Also, because Logout.php destroys the session
    // before its final display, it is necessary here to check that
    // the $_SESSION values are actually set and available before
    // using them.
    $loggedIn = isset($_SESSION['customer_id']) ? true : false;
    if ($loggedIn) {
        $salutation = isset($_SESSION['salutation']) ? $_SESSION['salutation'] : "";
        $firstName = isset($_SESSION['first_name']) ? $_SESSION['first_name'] : "";
        $middleInitial = isset($_SESSION['middle_initial']) ? $_SESSION['middle_initial'] : "";
        $lastName = isset($_SESSION['last_name']) ? $_SESSION['last_name'] : "";
        $loginName = isset($_SESSION['login_name']) ? $_SESSION['login_name'] : "";

        echo "<h6>Welcome, $loginName!<br>
                $salutation $firstName $middleInitial $lastName
                </h6>"; // Changed from $firstName 3/30/2022 9:47 PM
    } else {
        echo "<h5>Welcome!</h5>";
    }
    echo "<h6 id='datetime'>It's " . date("l, F jS") . " and our time is " . date('g:ia') . ".</h6>";
    
    if ($loggedIn) {
        echo "<a class='w3-button w3-blue w3-round w3-small' href='pages/logout.php'>Log out</a>";
    } else {
        echo "<a class='w3-button w3-blue w3-round w3-small' href='pages/formLogin.php'>Log in</a>";
    }
    ?>
    <p class="quote w3-left-align">
      <?php
      include('/home/course/u24/public_html/submissions/submission04/scripts/get_quote_from_mongodb.php');
      ?>
    </p>
  </div>
</div>
<script>
// This script sets up the AJAX infrastructure for
// requesting time updates from the server.
var request = null;
function getCurrentTime() {
    request = new XMLHttpRequest();
    var url = "scripts/time.php";
    request.open("GET", url, true);
    request.onreadystatechange = updatePage;
    request.send(null);
}
function updatePage() {
    if (request.readyState == 4) {
        var dateDisplay = document.getElementById("datetime");
        dateDisplay.innerHTML = request.responseText;
    }
}
getCurrentTime();
setInterval('getCurrentTime()', 60000);
</script>
