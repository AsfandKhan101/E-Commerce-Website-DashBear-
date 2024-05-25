<?php
/* events_archived.php
This page displays archived events.
*/
session_start();
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
  <title>Archived Events</title>
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
      <h3>Archived Events</h3>
      <p>Even before our founding, we held a couple of events leading up
        to the formal opening of DashBear at the beginning of 2020.
        Here are brief summaries of those two events:</p>
      <dl>
        <dt>Tuesday, December 5, 2023</dt>
        <dd>We hosted a visitor who claimed to have a piece of the
          Shroud of Apple, which he would auction off at the end of
          the evening. The evening did not go that well.</dd>
        <dt>Friday, December 29, 2023</dt>
        <dd>We first gathered at our new headquarters-to-be, but then
          the group repaired to the basement of an acquaintance who claimed
          to have in his possession the very first ball ever dropped on New
          Year's Eve in Times Square. Not all of those who attended were
          convinced.</dd>
      </dl>
      <p>
        Eventually we will have links on this page to those event details,
        as well as links to the details of any future events once they have
        occurred. So you will eventually be able to look through our past
        events and perhaps let us know if you think any of them should be
        repeated.
      </p>
    </article>
  </div>
</main>
<?php
include("../common/footer.html");
?>
</body>
</html>
