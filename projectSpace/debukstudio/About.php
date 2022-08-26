<!DOCTYPE html>
<html lang="en-US">

<head>

    <!-- REUSEABLE HEADER INFO -->
    <?php
    // Specify the current page to update info in header
    $current_page_head = "About";
    $location_to_logo_icon = "./source/media/web_title_icon.png";
    include "./source/_modules/head_info.php";
    ?>

    <!-- main stylesheet -->
    <link rel="stylesheet" href="./source/css/about.css">


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
            $nav_first_link_text = "Home";
            $nav_first_link_path = "./index.php";

            $nav_second_link_text = "Services";
            $nav_second_link_path = "./services.php";

            $nav_third_link_text = "About";
            $nav_third_link_path = "./About.php";
            include "./source/_modules/navigation_bar.php";
            ?>

            <!-- hero image -->
            <img src="./source/media/about/about-bar.webp" alt="about-bar" class="hero-image">

            <!-- HERO CONTENT -->
            <div class="hero-content-container">
                <h1 class="big-heading hero-heading">About Debuk Studio</h1>
                <h2 class="normal-heading hero-sub-heading">Brand and Web design studio created to solve your problems with design</h2>
            </div>

        </header>

        <section class="about-section bound">

            <div class="display-flex about-flex-container">
                <div class="about-me-flex-item ">
                    <img src="./source/media/about/person.webp" alt="" height="564" width="700">
                </div>

                <div class="about-me-flex-item">
                    <h1 class="normal-heading about-me-heading">Hi, I’m Matija! 👋</h1>
                    <p class="paragraph-text">
                        Europian-based Brand and Web(UX/UI) Designer and founder of Debuk Studio. I am inspired by the modern brand
                        design and how they work. I create brands with you so your audience can see your full potential.
                    </p>
                </div>

            </div>

        </section>

        <!-- INCLUDE FOOTER -->
        <?php
        $footer_heading_text = "Have a brand to build?";
        $footer_main_btn_text = "Say hello";
        include "./source/_modules/footer.php";
        ?>

    </div>
    <!-- butter.js container ended here -->


    <script src="./source/js/theme.js"></script>
    <script src="./source/js/loading.js"></script> <!-- adding loading js -->

    <!-- implemented the butter.js library -->
    <?php include "./source/_modules/butter_js_implement.php" ?>
</body>


</html>