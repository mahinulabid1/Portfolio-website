<!DOCTYPE html>
<html lang="en-US">

<head>
    <?php
    // Specify the current page to update info in header
    $current_page_head = "Home";
    $location_to_logo_icon = "./source/media/web_title_icon.png";
    include "./source/_modules/head_info.php";
    ?>

    <!-- main stylesheet -->
    <link rel="stylesheet" href="./source/css/style.css">

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
            // SETTING UP REUSEABLE NAVIGATION BAR
            $nav_first_link_text = "Services";
            $nav_first_link_path = "./services.php";

            $nav_second_link_text = "Project";
            $nav_second_link_path = "./project_page.php";

            $nav_third_link_text = "Contact";
            $nav_third_link_path = "./contact.php";
            include "./source/_modules/navigation_bar.php";
            ?>

            <!-- HERO CONTENT -->
            <div class="hero-container display-flex d-flex-space-between">
                <div class="hero-flex-item">
                    <h1 class="hero-heading big-heading">
                        404 the header is missing.. dont let your brand be missed too
                    </h1>
                    <h2 class="hero-sub-heading normal-heading">welcome to debuk studio</h2>

                    <p class="hero-description paragraph-text">
                        Excite your audience with the quality of your <span style="font-family: font-bold">brand</span> <br>
                        Raise your brand to professional level. Build a brand with a logo that means something to your audience.
                    </p>

                </div>
                <div class="hero-flex-item">
                    <div class="hero-video-placeholder">
                        <!-- a video will be here -->
                        <video loop muted autoplay width="100%" height="100%" style="object-fit: cover;" class="hero-video" playsinline>
                            <!-- the source of video file will be injected by Javascript since chrome doesn't support changeable source by media query -->
                            <!-- the javascript code is below ↓↓↓ -->
                        </video>
                        <script>
                            // SINCE CHROME DOESN'T SUPPORT THE VIDEO SOURCE MEDIA QUERIES, THIS SCRIPT IS CREATED TO CHANGE VIDEO SOURCEC ACCORDING TO THE VIEW WIDTH
                            var video = document.querySelector(".hero-video");
                            const index_video_src = () => {
                                var WindowWidth = window.screen.width;

                                if (WindowWidth < 834 && WindowWidth > 600) {
                                    //TABLET VERSION VIDEO
                                    video.innerHTML = `<source src="./source/media/home/video-tablet.mp4" type='video/mp4' >`;
                                } else if (WindowWidth < 600) {
                                    //MOBILE VERSION VIDEO
                                    video.innerHTML = `<source src="./source/media/home/video-phone.mp4" type='video/mp4' >`;
                                } else {
                                    //BIG SCREEN VIDEO
                                    video.innerHTML = `<source src="./source/media/home/video-desktop.webm" type='video/webm' >`;
                                }
                            }
                            window.addEventListener("load", ()=>{
                                index_video_src();
                                video.play();
                                video.controls = false;
                            });
                            window.addEventListener("resize", ()=>{
                                index_video_src();
                            });
                        </script>
                    </div>
                </div>
            </div>


        </header>


        <section class="banner-section bound">
            <div class="banner-flex-container display-flex d-flex-space-between d-flex-wrap-true">
                <div class="banner-flex-item">
                    <img src="./source/media/home/image1.webp" alt="" class="display-block banner-flex-image" style="object-fit: cover;" height="auto" width="100%">
                    <p class="paragraph-text banner-para">
                        Strong branding makes an impact in the market
                    </p>
                </div>

                <div class="banner-flex-item">
                    <img src="./source/media/home/image2.webp" alt="" class="display-block banner-flex-image" style="object-fit: cover;" height="auto" width="100%">
                    <p class="paragraph-text banner-para">
                        Stands out from the crowd
                    </p>
                </div>

                <div class="banner-flex-item">
                    <img src="./source/media/home/image3.webp" alt="" class="display-block banner-flex-image" style="object-fit: cover;" height="auto" width="100%">
                    <p class="paragraph-text banner-para">
                        Filters out improper leads
                    </p>
                </div>

                <div class="banner-flex-item">
                    <img src="./source/media/home/image4.webp" alt="" class="display-block banner-flex-image" style="object-fit: cover;" height="auto" width="100%">
                    <p class="paragraph-text banner-para">
                        Brand identity supports product launches.
                    </p>
                </div>
            </div>

            <h1 class="banner-heading normal-heading">Everything your customer wants to see from their favorite brand.</h1>
        </section>

        <section class="text-slider-section">
            <div class="text-slider-container">
                <span> BRAND IDENTITY | WEB DESIGN | BRAND IDENTITY | WEB DESIGN | BRAND IDENTITY | WEB DESIGN | BRAND IDENTITY | WEB DESIGN | BRAND IDENTITY | WEB DESIGN | BRAND IDENTITY | WEB DESIGN | BRAND IDENTITY | WEB DESIGN | BRAND IDENTITY | WEB DESIGN |BRAND IDENTITY | WEB DESIGN |BRAND IDENTITY | WEB DESIGN |
            </div>
        </section>


        <p class="paragraph-text text-slider-paragraph  bound">
            Logo is not just a drawing or a shape, brand strategy is not a waste of time. Don’t let your time and lack of experience be your excuse
            for not creating a good brand. Brands without proper planning, strategy, and with bad design decay in a hidden
            market and stay on the same level without making a step forward.
        </p>
        </section>


        <!-- INCLUDE FOOTER -->
        <?php
        $footer_heading_text = "Let’s talk about your next big brand.";
        $footer_main_btn_text = "Take action";
        include "./source/_modules/footer.php";
        ?>



        <script src="./source/js/theme.js"></script>
        <script src="./source/js/loading.js"></script> <!-- adding loading js -->

        <!-- implemented the butter.js library -->
        <?php include "./source/_modules/butter_js_implement.php" ?>
    </div>
    <!-- butter.js container ended here -->

</body>


</html>