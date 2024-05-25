<?php
/* sorry.php
This is the sorry page, indicating that the requested page is not yet activated or temporarily deactivated.
*/
session_start();
include("../common/header.html");
?>

<!DOCTYPE html>
<html lang="en">

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
            <h1 class="w3-margin w3-center">Sorry!</h1>
            <h2 class="w3-margin w3-center">This page has not yet been activated, or has been temporarily deactivated.</h2>
        </article>
    </div>
</main>

<?php include("../common/footer.html"); ?>

</body>
</html>




