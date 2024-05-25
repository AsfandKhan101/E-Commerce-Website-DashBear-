<?php
/* vision.php
This is our page describing our vision and mission.
*/
session_start();
include("../common/header.html");
?>
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
        <h3>About DashBear: Our Vision and Mission</h3>
        <p>DashBear is a new business, and this is how it got started.
            In the process of traveling the world, we and some of our friends
            had come across many amazing products, and in the process of
            sharing stories about the things we had seen, we somehow got
            the idea that bringing these products back home and making them
            available to others might be a good idea and even, we hoped, a
            good business model.
        </p>
        <p>
            Of course, it is well known that, "One man's treasure is another
            man's garbage." Thus we cannot expect that everything we find
            amazing, or even interesting, will excite the same level of
            admiration in others. However, we think that each of the items
            we present is "objectively amazing" at some level, and we hope
            that you will agree.
        </p>
      </article>
      </div>
    </main>
    <?php
     include("../common/footer.html");
     ?>
  </body>
</html>


