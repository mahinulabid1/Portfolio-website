<!DOCTYPE html>
<html lang="en-US">

<head>

    <!-- REUSEABLE HEADER INFO -->
    <?php
    // Specify the current page to update info in header
    $current_page_head = "Services";
    $location_to_logo_icon = "./source/media/web_title_icon.png";
    include "./source/_modules/head_info.php";
    ?>

    <!-- main stylesheet -->
    <link rel="stylesheet" href="./source/css/services.css">

    <!-- navigation bar -->
    <link rel="stylesheet" href="./source/css/navigation_bar.css">
    
    <!-- loading section CSS -->
    <link rel="stylesheet" href="./source/css/loading_section.css">

</head>

<body>
    <!-- adding loading state -->
    <?php include "./source/_modules/loading_section.php"; ?>
    
    <!-- all the elements/contents should be inside of this container otherwise butter.js won't work -->
    <div class="butter-js-container" id="butter">
        <header class="bound">

            <!-- REUSEABLE NAVIGATION BAR -->
            <?php
            // SETTING UP REUSEABLE NAVIGATION BAR AND ITS PATH
            $nav_first_link_text = "About";
            $nav_first_link_path = "./About.php";

            $nav_second_link_text = "Project";
            $nav_second_link_path = "./project_page.php";

            $nav_third_link_text = "Contact";
            $nav_third_link_path = "./contact.php";
            include "./source/_modules/navigation_bar.php";
            ?>



            <!-- HERO CONTENT -->
            <div class="hero-content-container">
                <h1 class="big-heading hero-heading">Services</h1>
                <div class="display-flex d-flex-space-between d-flex-wrap-true hero-flex-container">

                    <div class="flex-item-hero">
                        <!-- putting in another container to make image stay at bottom-->
                        <div class="hero-container-relative">
                            <h2 class="hero-flex-item__header normal-heading">Branding Identity</h2>
                            <p class="paragraph-text">Branding</p>
                            <p class="paragraph-text">Branding Strategy</p>
                            <p class="paragraph-text">Branding style guide</p>
                            <p class="paragraph-text">Visual Identity System</p>
                            <img class="hero-flex-image" src="./source/media/service/brand.webp" alt="" width="100%" height="196" style="object-fit:cover ;">
                        </div>
                    </div>

                    <div class="flex-item-hero">
                        <div class="hero-container-relative">
                            <h2 class="hero-flex-item__header normal-heading">Online appearance</h2>
                            <p class="paragraph-text">Web Development</p>
                            <p class="paragraph-text">Web Design</p>
                            <p class="paragraph-text">UI / UX</p>
                            <p class="paragraph-text">Social Media Design</p>
                            <img class="hero-flex-image" src="./source/media/service/online.webp" alt="" width="100%" height="196" style="object-fit:cover ;">
                        </div>

                    </div>

                    <div class="flex-item-hero">
                        <div class="hero-container-relative">
                            <h2 class="hero-flex-item__header normal-heading">Printed Media</h2>
                            <p class="paragraph-text">Packaging</p>
                            <p class="paragraph-text">Graphic Design</p>
                            <p class="paragraph-text">Printed Collateral</p>
                            <img class="hero-flex-image" src="./source/media/service/print.webp" alt="" width="100%" height="196" style="object-fit:cover ;">
                        </div>

                    </div>

                    <div class="flex-item-hero">
                        <div class="hero-container-relative">
                            <h2 class="hero-flex-item__header normal-heading">Brand Consultancy</h2>
                            <p class="paragraph-text">Consulting about your brand</p>
                            <img class="hero-flex-image" src="./source/media/service/consultancy.webp" alt="" width="100%" height="196" style="object-fit:cover ;">
                        </div>

                    </div>
                </div>
            </div>

        </header>





        <!-- INCLUDE FOOTER -->
        <?php
        $footer_heading_text = "Have a brand to build";
        $footer_main_btn_text = "Say hello";
        include "./source/_modules/footer.php";
        ?>

    </div> 
    <!-- butterjs container ended here -->




    <script src="./source/js/theme.js"></script>
    <script src="./source/js/loading.js"></script> <!-- adding loading js -->

    <!-- implemented the butter.js library -->
    <?php include "./source/_modules/butter_js_implement.php" ?>
</body>


</html>