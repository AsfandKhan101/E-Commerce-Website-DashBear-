<?php
// Include header
include("../common/header.html");
?>

<!DOCTYPE html>
<html lang="en">
<body class="body w3-auto">

<header class="w3-container">
    <?php
    // Include banner
    include("../common/banner.php");
    ?>

    <!-- menus.html -->
    <?php
    // Include menus
    include("../common/menus.html");
    ?>
</header>

<main class="w3-container">
    <div class="w3-container w3-border-left w3-border-right w3-border-black w3-light-grey">
        <div class="w3-half w3-border w3-border-black">
            <ul class="w3-ul">
                <li><h4 class="w3-wide"><a href="index.php">Home</a></h4></li>
                <li><h4 class="w3-wide">e-store</h4></li>
                <li><a href="pages/estore.php">e-store Options</a></li>
                <li><a title="Not yet active" href="pages/sorry.php">Product Catalog</a></li>
                <li><a href="pages/formRegistration.php">Register</a></li>
                <li><a href="pages/formLogin.php">Login</a></li>
                <li><a title="Not yet active" href="pages/sorry.php">View Shopping Cart</a></li>
                <li><a title="Not yet active" href="pages/sorry.php">Checkout</a></li>
                <li><a href="pages/logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="w3-half w3-border w3-border-black">
            <ul class="w3-ul">
                <li><h4 class="w3-wide">Events</h4></li>
                <li><a href="pages/events_recurring.php">Recurring</a></li>
                <li><a href="pages/events_oneoff.php">Upcoming One-Offs</a></li>
                <li><a href="pages/events_archived.php">Archived</a></li>
            </ul>
            <ul class="w3-ul w3-border-top w3-border-black">
                <li><h4 class="w3-wide">About Us</h4></li>
                <li><a href="pages/vision.php">Vision and Mission</a></li>
                <li><a href="pages/locations.php">Locations</a></li>
                <li><a href="pages/formFeedback.php">Feedback Form</a></li>
            </ul>
            <ul class="w3-ul w3-border-top w3-border-black">
                <li><h4 class="w3-wide"><a href="pages/sitemap.php">Site Map</a></h4></li>
            </ul>
        </div>
    </div>
</main>

<?php
// Include footer
include("../common/footer.html");
?>

</body>
</html>





