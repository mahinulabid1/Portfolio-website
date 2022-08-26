<header>

    <!-- REUSEABLE NAVIGATION BAR -->
    <?php
    // SETTING UP REUSEABLE NAVIGATION BAR AND ITS PATH
    $nav_first_link_text = "Services";
    $nav_first_link_path = "./services.php";

    $nav_second_link_text = "Project";
    $nav_second_link_path = "./project_page.php";

    $nav_third_link_text = "Contact";
    $nav_third_link_path = "./contact.php";
    include "./source/_modules/navigation_bar.php";
    ?>

</header>

<?php
// some values to set for dynamic information
$page_main_heading;
$page_sub_heading_one;
$page_sub_heading_two;
$page_main_para;

// video file source link
$source_to_video_file;
$source_to_video_file_tablet_version;
$source_to_video_file_mobile_version;

$characteristics_one_heading;
$characteristics_one_paragraph;
$characteristics_two_heading;
$characteristics_two_paragraph;
$source_to_image_1;
$source_to_image_2;
?>

<!-- hero video -->
<div class="hero-video-container">
    <video class="hero-video" preload="auto" autoplay muted loop playsinline>
        <!-- CODE WILL BE INJECTED BY THE SCRIPT BELOW -->
    </video>

    <script>
        // SINCE CHROME DOESN'T SUPPORT THE VIDEO SOURCE MEDIA QUERIES, THIS SCRIPT IS CREATED TO CHANGE VIDEO SOURCEC ACCORDING TO THE VIEW WIDTH
        var video = document.querySelector(".hero-video");

        const Project_changeVideoSource = () => {
            var WindowWidth = window.screen.width;
            if (WindowWidth < 835 && WindowWidth > 600) {
                //TABLET VERSION VIDEO
                video.innerHTML = `<source src=<?php echo $source_to_video_file_tablet_version; ?> type='video/webm' >`;
            } else if (WindowWidth < 600) {
                //MOBILE VERSION VIDEO
                video.innerHTML = `<source src=<?php echo $source_to_video_file_mobile_version; ?> type='video/mp4' >`;
            } else {
                //BIG SCREEN VIDEO
                video.innerHTML = `<source src=<?php echo $source_to_video_file; ?> type='video/mp4' >`;
            }
        }

        window.addEventListener("load", () => {
            Project_changeVideoSource();
            video.play();
            video.controls=false;
        });
        window.addEventListener("resize", () => {
            Project_changeVideoSource();
            video.play();
        });
    </script>
</div>




<!-- banner section -->
<section class="banner-section bound">
    <!-- HERO CONTENT -->
    <h1 class="big-heading banner-heading"><?php echo $page_main_heading; ?></h1>
    <h2 class="banner-sub-heading"><?php echo $page_sub_heading_one; ?></h2>
    <h2 class="banner-sub-heading"><?php echo $page_sub_heading_two; ?></h2>
    <p class="paragraph-text banner-para"><?php echo $page_main_para; ?></p>
</section>


<section class="characteristics-section bound">
    <div class="display-flex d-flex-space-between characteristics-flex-container">
        <div class="flex-item-characteristics">

            <h2 class="normal-heading characteristics-flex-heading"><?php echo $characteristics_one_heading; ?></h2>
            <p class="paragraph-text characteristics-flex-paragraph"><?php echo $characteristics_one_paragraph; ?></p>
        </div>

        <div class="flex-item-characteristics">
            <h2 class="normal-heading characteristics-flex-heading"><?php echo $characteristics_two_heading; ?></h2>
            <p class="paragraph-text characteristics-flex-paragraph"><?php echo $characteristics_two_paragraph; ?></p>
        </div>
    </div>

    <div class="display-flex d-flex-space-between characteristics-flex-container">
        <div class="flex-item-characteristics">
            <img class="characteristics-image" src=<?php echo $source_to_image_1; ?> alt="" height="auto" width="100%">
        </div>

        <div class="flex-item-characteristics">
            <img class="characteristics-image" src=<?php echo $source_to_image_2; ?> alt="" height="auto" width="100%">
        </div>
    </div>

</section>