<!DOCTYPE html>
<html lang="en-US">

<?php
$arrow_icon = '<svg class="arrow-icon-normal" height="15" viewBox="0 0 74 62" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 26.04V35.712H55.3767L36.3833 54.684L43.4133 61.752L74 30.876L43.4133 0L36.63 6.944L55.6233 26.04H0Z" fill="#070606"/>
</svg>
';
$arrow_icon_big = '<svg class="arrow-icon-big" width="32" viewBox="0 0 74 62" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 26.04V35.712H55.3767L36.3833 54.684L43.4133 61.752L74 30.876L43.4133 0L36.63 6.944L55.6233 26.04H0Z" fill="#070606"/>
</svg>
';
?>

<head>

    <!-- REUSEABLE HEADER INFO -->
    <?php
    // Specify the current page to update info in header
    $current_page_head = "Project";
    $location_to_logo_icon = "./source/media/web_title_icon.png";
    include "./source/_modules/head_info.php";
    ?>

    <!-- main stylesheet -->
    <link rel="stylesheet" href="./source/css/project_page.css">

    <!-- navigation bar -->
    <link rel="stylesheet" href="./source/css/navigation_bar.css">

    <!-- loading section CSS -->
    <link rel="stylesheet" href="./source/css/loading_section.css">

</head>

<body>
    <!-- adding loading state -->
    <?php include "./source/_modules/loading_section.php"; ?>

    <div class="butter-js-container" id="butter">
        <header class="bound">

            <!-- REUSEABLE NAVIGATION BAR -->
            <?php
            // navbar link's text content and its path
            $nav_first_link_text = "Services";
            $nav_first_link_path = "./services.php";

            $nav_second_link_text = "About";
            $nav_second_link_path = "./About.php";

            $nav_third_link_text = "Contact";
            $nav_third_link_path = "./contact.php";

            // navigation-bar link
            include "./source/_modules/navigation_bar.php";
            ?>



            <!-- HERO CONTENT -->
            <div class="hero-content-container">
                <h1 class="big-heading hero-heading">Projects</h1>
            </div>

        </header>



        <section class="project-container-section bound">
            <div class="project-list-container">

                <!-- project list start -->
                <div class="project-list display-flex d-flex-space-between">

                    <div class="project-flex-item">

                        <!-- video container as link: clicking the video will route to the project page -->
                        <a href="./studio.php" class="project-list__video-container">
                            <img class="project-list__video-container__image" src="./source/media/project/studio.webp" alt="" height="100%" width="100%">
                            <video class="project-list__video-container__video" autoplay muted loop playsinline>
                                <source src="./source/media/project/studio.webm" type="video/webm">
                                <source src="./source/media/project/studio.mp4" type="video/mp4">
                            </video>
                        </a>
                    </div>

                    <div class="project-flex-item">
                        <p class="project-category__category-name">Brand Identity</p>
                        <p class="project-category__category-name">Web Design</p>
                        <a href="./studio.php" class="project-category-title paragraph-text">Debuk Studio Rebrand <?php echo $arrow_icon ?></a>

                    </div>
                </div>

                <hr>

                <div class="project-list display-flex d-flex-space-between">

                    <div class="project-flex-item">
                        <!-- video container as link: clicking the video will route to the project page -->
                        <a href="./conway.php" class="project-list__video-container">
                            <img class="project-list__video-container__image" src="./source/media/project/conway.webp" alt="" height="100%" width="100%">
                            <video class="project-list__video-container__video" autoplay muted loop playsinline>
                                <source src="./source/media/project/conway.webm" type="video/webm">
                                <source src="./source/media/project/conway.mp4" type="video/mp4">
                            </video>
                        </a>
                    </div>

                    <div class="project-flex-item">
                        <p class="project-category__category-name"> Brand Identity</p>
                        <p class="project-category__category-name">Web Design</p>
                        <a href="./conway.php" class="project-category-title paragraph-text">Conway <?php echo $arrow_icon ?></a>

                    </div>
                </div>

                <hr>


                <div class="project-list display-flex d-flex-space-between">

                    <div class="project-flex-item">
                        <!-- video container as link: clicking the video will route to the project page -->
                        <a href="./luxio.php" class="project-list__video-container">
                            <img class="project-list__video-container__image" src="./source/media/project/luxio.webp" alt="" height="100%" width="100%">
                            <video class="project-list__video-container__video" autoplay muted loop playsinline>
                                <source src="./source/media/project/luxio.webm" type="video/webm">
                                <source src="./source/media/project/luxio.mp4" type="video/mp4">
                            </video>
                        </a>
                    </div>

                    <div class="project-flex-item">
                        <p class="project-category__category-name"> Brand Identity</p>
                        <p class="project-category__category-name">Web Design</p>
                        <a href="./luxio.php" class="project-category-title paragraph-text">Hotel Luxio <?php echo $arrow_icon ?></a>

                    </div>
                </div>

                <hr>


                <div class="project-list display-flex d-flex-space-between">

                    <div class="project-flex-item">
                        <!-- video container as link: clicking the video will route to the project page -->
                        <a href="./gallery.php" class="project-list__video-container">
                            <img class="project-list__video-container__image" src="./source/media/project/gallery.webp" alt="" height="100%" width="100%">
                            <video class="project-list__video-container__video" autoplay muted loop playsinline>
                                <source src="./source/media/project/gallery.webm" type="video/webm">
                                <source src="./source/media/project/gallery.mp4" type="video/mp4">
                            </video>
                        </a>
                    </div>

                    <div class="project-flex-item">
                        <p class="project-category__category-name"> Brand Identity</p>
                        <p class="project-category__category-name">Web Design</p>
                        <a href="./gallery.php" class="project-category-title paragraph-text">Borrasude Gallery <?php echo $arrow_icon ?></a>

                    </div>
                </div>

                <hr class="project-list__last-hr">

            </div>
        </section>

        <!-- make video play  automatically on mobile: --since phone doesn't support autoplay -->
        <script>
            let video_init = document.querySelectorAll("video");
            for (let counter = 0; counter < video_init.length; counter++) {
                let video = video_init[counter];
                window.addEventListener("load", () => {
                    video.play();
                    video.controls=false;
                });
            }
        </script>


        <!-- INCLUDE FOOTER -->
        <?php
        $footer_heading_text = "Have a brand to build?";
        $footer_main_btn_text = "Say hello";
        include "./source/_modules/footer.php";
        ?>

    </div>
    <!-- butter.js container ended -->




    <script src="./source/js/theme.js"></script>
    <script src="./source/js/loading.js"></script> <!-- adding loading js -->

    <!-- implemented the butter.js library -->
    <?php include "./source/_modules/butter_js_implement.php" ?>
</body>


</html>