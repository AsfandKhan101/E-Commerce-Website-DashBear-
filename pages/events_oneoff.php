<?php
/* events_oneoff.php
This is our page for displaying upcoming one-off events.
*/
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
  <title>Upcoming Events</title>
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
  <div class="w3-container w3-border-left w3-border-right w3-border-black w3-light-grey">
    <article>
      <h3>Upcoming One-Off Events</h3>
      <p>Here is a current list of our upcoming one-off events for this year:</p>
      <dl>
        <dt>Monday, April 1, 2024</dt>
          <dd>A talk on some of the more interesting "April Fool" jokes of the last 50 years.</dd>
        <dt>Saturday, April 20, 2024</dt>
          <dd>A talk on the ins, outs, ups, and downs of 4/20.</dd>
        <dt>Wednesday, May 1, 2024</dt>
          <dd>A video presentation of various "May Day" celebrations, demonstrations and riots over the years.</dd>
      </dl>
      <p>
        Note that all events will be held at our location at 7pm, unless otherwise noted on this page at least 24 hours before the event in question. Further details on each event may also appear here from time to time as the event approaches.
      </p>
    </article>
  </div>
</main>
<?php include("../common/footer.html"); ?>
</body>
</html>

