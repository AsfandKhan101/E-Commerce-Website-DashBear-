<?php
session_start();
include("../common/header.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width initial-scale=1">
  <base href="http://ps.cs.smu.ca/~u24/submissions/submission04/">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="css/my_css.css">
  <script src="https://www.w3schools.com/lib/w3.js"></script>
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="scripts/carousel.js"></script>
  <title>Registration Response</title>
</head>
<body class="body w3-auto">
  <header class="w3-container">
    <?php
    echo '<div class="w3-border w3-border-black w3-light-grey">';
    include("../common/banner.php");
    include("../common/menus.html");
    echo '</div>';
   ?> 
  </header>
  <main class="w3-container">
    <div class="w3-container w3-border-left w3-border-right
                 w3-border-black w3-light-grey">
      <article>
        <?php
        if(isset($_GET['success']) && $_GET['success'] == 'true') {
            echo '<h3>Registration Successful</h3>';
            echo '<p>You have been successfully registered!<br>Your username is ' . $_GET['username'] . '.<br>Please store your username and password securely, as we cannot reset them.</p>';
        } else {
            echo '<h3>Registration Failed</h3>';
            echo '<p>There was an error processing your registration. Please try again later.</p>';
        }
        ?>
      </article>
    </div>
  </main>
  <?php include("../common/footer.html"); ?>
</body>
</html>


