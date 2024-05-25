<?php
include("common/header.html");
?>

<!DOCTYPE html>
<html lang="en">
<body class="body w3-auto" onload="carousel()">
<header class="w3-container">
    <?php include("common/banner.php"); ?>
    <?php include("common/menus.html"); ?>
</header>

<main class="w3-container">
    <div class="w3-container w3-border-left w3-border-right w3-border-black w3-light-grey"
         style="padding-right:0">
        <article class="w3-half">
            <h3>DashBear: The new e-store giant!</h3>
            <p>
                Founded in 2023, DashBear was created to rival e-commerce giants
                like Amagon and provide immaculate services for the people. DashBear
                has everything you could want, from electronics to cookware, from
                hardware to accessories, you name it! In just a year, DashBear has
                got more than 150 million customers worldwide! We can't wait to
                have you on board too!
            </p>
            <p>
                Just search from millions of products we have to offer and order at a
                click of a button! Premium users will also be provided a guaranteed
                2-day delivery!
            </p>
        </article>

        <div class="w3-half w3-padding w3-center">
            <!-- images -->
            <img class="mySlides" src="images/products/AppleWatch3.jpeg" alt="Apple Watch">
            <img class="mySlides" src="images/products/earphones.jpg" alt="Airpods">
            <img class="mySlides" src="images/products/Garminquatix3.jpg" alt="Garmin" width=500 height=320>
            <img class="mySlides" src="images/products/Headphones.avif" alt="Xm5">
            <img class="mySlides" src="images/products/iPhone15.jpg" alt="iPhone 15" width=500 height=320>
            <img class="mySlides" src="images/products/RareSaperoBook.webp" alt="Book" width=500 height=320>
            <img class="mySlides" src="images/products/Samsungs23ultra.jpg" alt="Samsung Phone" width=500 height=320>
            <img class="mySlides" src="images/products/SamsungWatch.webp" alt="Watch" width=500 height=320>

            <!-- labels -->
            <footer class="myLabels w3-container w3-blue">
                <h5>The Apple Watch Series 3</h5>
            </footer>
            <footer class="myLabels w3-container w3-blue">
                <h5>The Airpods Pro</h5>
            </footer>
            <footer class="myLabels w3-container w3-blue">
                <h5>The Garmin Quatix 3</h5>
            </footer>
            <footer class="myLabels w3-container w3-blue">
                <h5>The Sony Xm5 Headphones</h5>
            </footer>
            <footer class="myLabels w3-container w3-blue">
                <h5>The Brand New iPhone 15 Pro</h5>
            </footer>
            <footer class="myLabels w3-container w3-blue">
                <h5>A Rare Sapero Book</h5>
            </footer>
            <footer class="myLabels w3-container w3-blue">
                <h5>The Samsung s23 Ultra</h5>
            </footer>
            <footer class="myLabels w3-container w3-blue">
                <h5>The Samsung Watch</h5>
            </footer>
        </div>

    </div>
</main>

<?php include("common/footer.html"); ?>

</body>
</html>
