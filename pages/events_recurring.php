<?php
session_start();
include("../common/header.html");
?>
<!DOCTYPE html>
<html lang="en">
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
        <h3>Recurring Events</h3>
        <p>
          Here are some typical kinds of events that we sponsor on a
          recurring (but not regular or even frequent) basis:
        </p>
        <ul>
          <li>Talks on exotic locations where you can find exotic items.</li>
          <li>Talks on the history and uses of exotic items with which you may not be familiar.</li>
          <li>Live demos of exotic musical instruments.</li>
          <li>Live demos of useless personal skills, such as these:
            <ul>
              <li>How to perform with a hula hoop</li>
              <li>How to blow bubbles with bubble gum</li>
              <li>How to blow a sharp whistle using your fingers</li>
              <li>How to blow smoke rings (becoming less popular, fortunately)</li>
            </ul>
          </li>
        </ul>
      </article>
    </div>
  </main>
  <?php include("../common/footer.html"); ?>
</body>
</html>

