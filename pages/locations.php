<?php
/* locations.php
This page displays information about the company's locations.
*/

include("../common/header.html");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="http://ps.cs.smu.ca/~u24/submissions/submission04/">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/my_css.css">
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="scripts/carousel.js"></script>
    <title>DashBear 4.0</title>
</head>

<body class="body w3-auto">
    <header class="w3-container">
        <div class="w3-border w3-border-black w3-light-grey">
            <?php include("../common/banner.php"); ?>
            <?php include("../common/menus.html"); ?>
        </div>
    </header>

    <main class="w3-container">
        <div class="w3-container w3-border-left w3-border-right w3-border-black w3-light-grey">
            <article>
                <h3>Our Locations</h3>
                <p>
                    As our company grows, we hope to expand worldwide. Eventually, we will provide here a list of all our store locations. Each location will be accompanied by contact information and a link to a map showing how to find us.
                </p>
                <p>
                    In the meantime, here are a few details (just the address and telephone number) for our current (and only) location:
                </p>
                <p>
                    DashBear, Inc.<br>
                    1234 Main Street<br>
                    Halifax, NS<br>
                    Canada B3H 8X8<br>
                    Tel: 902.423.1234
                </p>
            </article>
        </div>
    </main>

    <?php include("../common/footer.html"); ?>

</body>

</html>


