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

    <!-- navigation bar -->
    <!-- <link rel="stylesheet" href="./source/css/navigation_bar.css"> -->
    <link rel="stylesheet" href="./source/_modules/project_modules/project_page_navbar.css">

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
        $page_main_heading = 'Borrasude Gallery';
        $page_sub_heading_one = "Brand Identity";
        $page_sub_heading_two = "";
        $page_main_para = "The art gallery filled up with vintage paintings.";
        $characteristics_one_heading = "Goal";
        $characteristics_one_paragraph = "Attract people to see vintage paintings in Vienna, Austria.";
        $characteristics_two_heading = "Opportunity";
        $characteristics_two_paragraph = "Design is minimal and made for people who loves art.";

        //source file's path of the two flexed image
        $source_to_image_1 = "./source/media/gallery/image1.webp";
        $source_to_image_2 = "./source/media/gallery/image2.webp";

        //source file's path of the video
        $source_to_video_file = "./source/media/gallery/video-desktop.webm";
        $source_to_video_file_tablet_version = "./source/media/gallery/video-tablet.mp4";
        $source_to_video_file_mobile_version = "./source/media/gallery/video-phone.mp4";


        //including the whole project page with changeable content(content defined by php variables in above ↑)
        include "./source/_modules/project_modules/project_page_component.php";
        ?>

        <div class="full-width-image bound">
            <img class="characteristics-image c-image-margin" src="./source/media/gallery/image3.webp" alt="" width="100%" height="auto">
            <img class="characteristics-image c-image-margin" src="./source/media/gallery/image4.webp" alt="" width="100%" height="auto">
        </div>


        <!-- INCLUDING FOOTER -->
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