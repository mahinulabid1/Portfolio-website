<!DOCTYPE html>
<html lang="en-US">

<head>

    <!-- REUSEABLE HEADER INFO -->
    <?php
    // Specify the current page to update info in header
    $current_page_head = "Studio";
    $location_to_logo_icon = "./source/media/web_title_icon.png";
    include "./source/_modules/head_info.php";
    ?>

    <!-- main stylesheet -->
    <link rel="stylesheet" href="./source/css/studio.css">

    <!-- fonts  -->
    <link rel="stylesheet" href="./source/css/fonts.css">

    <!-- navigation bar -->
    <link rel="stylesheet" href="./source/_modules/project_modules/project_page_navbar.css">

    <!-- UNIVERSAL CSS -->
    <link rel="stylesheet" href="./source/css/Universal_CSS.css">

    <!-- footer -->
    <link rel="stylesheet" href="./source/css/footer.css">

    <!-- project page component css -->
    <link rel="stylesheet" href="./source/css/project_page_component.css">
    
    <!-- loading section CSS -->
    <link rel="stylesheet" href="./source/css/loading_section.css">
</head>

<body>
    <!-- adding loading state -->
    <?php include "./source/_modules/loading_section.php"; ?>
    
    <!-- butter.js container start here -->
    <div class="butter-js-container" id="butter">

        <?php
        // PROJECT PAGE TEXT CONTENT (PUT CONTENT ACCORDING TO DIFFERENT PROJECT PAGES)
        $page_main_heading = 'Hotel Luxio';
        $page_sub_heading_one = "Brand Identity";
        $page_sub_heading_two = "Web Design";
        $page_main_para = "Hotel Luxio is a luxurious hotel with a brand purpose to provide hotel rooms and hosting business events for business owners and founders";
        $characteristics_one_heading = "Goal";
        $characteristics_one_paragraph = "Create a brand strategy for the most luxurious hotel targeted at business owners and founders. Brand identity with a sophisticated feel. Designing an online experience with clean UI and clear UX to understand. ";
        $characteristics_two_heading = "Opportunity";
        $characteristics_two_paragraph = "Inspire business owners and founders, giving them room to work and think like no other. Creating events and giving opportunities to business founders and owners to network with others.";

        //source file's path of image
        $source_to_image_1 = "./source/media/luxio/image1.webp";
        $source_to_image_2 = "./source/media/luxio/image2.webp";

        // source file's path of video
        $source_to_video_file = "./source/media/luxio/video-desktop.webm";
        $source_to_video_file_tablet_version = "./source/media/luxio/video-tablet.mp4";
        $source_to_video_file_mobile_version = "./source/media/luxio/video-phone.mp4";

        //including the whole project page with changeable content(content defined by php variables in above)
        include "./source/_modules/project_modules/project_page_component.php";
        ?>

        <div class="full-width-image bound">
            <img class="characteristics-image c-image-margin" src="./source/media/luxio/image3.webp" alt="" width="100%" height="auto">
            <img class="characteristics-image c-image-margin" src="./source/media/luxio/image4.webp" alt="" width="100%" height="auto">
        </div>

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