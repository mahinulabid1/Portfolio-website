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
    <link rel="stylesheet" href="./source/_modules/project_modules/project_page_navbar.css">

    <!-- project page component css -->
    <link rel="stylesheet" href="./source/css/project_page_component.css">
    
    <!-- loading section CSS -->
    <link rel="stylesheet" href="./source/css/loading_section.css">
</head>

<body>
    <!-- adding loading state -->
    <?php include "./source/_modules/loading_section.php"; ?>
    
    <div class="butter-js-container" id="butter">
        <?php
        // PROJECT PAGE TEXT CONTENT (--PUT CONTENT ACCORDING TO DIFFERENT PROJECT PAGES)
        $page_main_heading = 'Debuk Studio Rebrand';
        $page_sub_heading_one = "Brand Identity";
        $page_sub_heading_two = "Web Design";
        $page_main_para = "Design studio created for startup companies. Developing brand strategies and designing brand identities for web2 and web3 brands.";
        $characteristics_one_heading = "Goal";
        $characteristics_one_paragraph = "Providing a better experience for visitors and clients. Creat a brand
        identity that clients are going to trust. Fixing UX and UI for the easily navigate thru pages
        and more accessible design";
        $characteristics_two_heading = "Opportunity";
        $characteristics_two_paragraph = "By changing the brand tone of voice, brand identity, and providing better service, the design studio can become a premium brand";

        //source file path of the two flex image
        $source_to_image_1 = "./source/media/studio/image1.webp";
        $source_to_image_2 = "./source/media/studio/image2.webp";

        //source file path of video in different device
        $source_to_video_file = "./source/media/studio/video-desktop.webm";
        $source_to_video_file_tablet_version = "./source/media/studio/video-tablet.mp4";
        $source_to_video_file_mobile_version = "./source/media/studio/video-phone.mp4";

        // including the whole page with changeable content(content defined by php variables in above ↑)
        include "./source/_modules/project_modules/project_page_component.php";
        ?>

        <div class="full-width-image bound">
            <img class="characteristics-image c-image-margin" src="./source/media/studio/image3.webp" alt="" width="100%" height="auto">
        </div>

        <!-- INCLUDING FOOTER -->
        <?php
        $footer_heading_text = "Have a brand to build?";
        $footer_main_btn_text = "Say hello";
        include "./source/_modules/footer.php";
        ?>
    </div>




    <script src="./source/js/theme.js"></script>
    <script src="./source/js/loading.js"></script><!-- adding loading js -->

    <!-- implemented the butter.js library -->
    <?php include "./source/_modules/butter_js_implement.php" ?>
</body>


</html>