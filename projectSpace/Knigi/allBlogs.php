<?php 
$page_title="Knigi- Blogs";
$style_sheet = "./app/scss/dist/all_blogs.css";
include "./pageComponent/_head.php";
?>
<body>
    <?php include "./pageComponent/_navigation.php"; ?>



    <section class="all-blogs-section">
        <h3 class="blog-section-header">THE BLOG</h3>
        <div class="all-blog-flex-container"> <!--flex container 1-->
            <div class="all-blog-flex-item"><!--main flex item 1-->
                <div class="all-blog-sub-flex-container"><!--flex container 2-->
                    <div class="all-blog-sub-flex-item"> <!--sub-flex item 1-->
                        <div class="center-vertically all-blog-sub-positioning">
                            <a href="./stories.html" class="sub-flex-a-1">MIDDLE OF NOWHERE</a>
                            <p class="sub-flex-para">Exploring a West Texas must-see, firmly planted at the crossroads of Art and Myth.</p>
                            <a href="./stories.html" class="sub-flex-a-2">DO GO ON <i class="fas fa-chevron-right"></i></a>
                        </div>
                        
                    </div>
                    <div class="all-blog-sub-flex-item"><img src="./app/img/singleStories/stories2.jpg" alt=""></div><!--sub flex item 2-->
                </div>
                <br>
                <hr>
                <br>
                <div class="all-blog-sub-flex-container"><!--flex container 2-->
                    <div class="all-blog-sub-flex-item"> <!--sub-flex item 1-->
                        <div class="center-vertically all-blog-sub-positioning">
                            <a href="./stories.html" class="sub-flex-a-1">CELINA MUIRE</a>
                            <p class="sub-flex-para">Austin-based woodworker Celina Muire talks to us about process, pyrography, and the perfectly imperfect nature of making by hand.</p>
                            <a href="./stories.html" class="sub-flex-a-2">DO GO ON <i class="fas fa-chevron-right"></i></a>
                        </div>
                        
                    </div>
                    <div class="all-blog-sub-flex-item"><img src="./app/img/singleStories/stories3.jpg" alt=""></div><!--sub flex item 2-->
                </div>

                <br>
                <hr>
                <br>
                <div class="all-blog-sub-flex-container"><!--flex container 2-->
                    <div class="all-blog-sub-flex-item"> <!--sub-flex item 1-->
                        <div class="center-vertically all-blog-sub-positioning">
                            <a href="./stories.html" class="sub-flex-a-1">COOKFIRE</a>
                            <p class="sub-flex-para">A meal out-of-doors in Mt. Hood, OR with two of Portland’s finest foodies.</p>
                            <a href="./stories.html" class="sub-flex-a-2">DO GO ON <i class="fas fa-chevron-right"></i></a>
                        </div>
                        
                    </div>
                    <div class="all-blog-sub-flex-item"><img src="./app/img/singleStories/stories4.jpg" alt=""></div><!--sub flex item 2-->
                </div>

                <br>
                <hr>
                <br>
                <div class="all-blog-sub-flex-container"><!--flex container 2-->
                    <div class="all-blog-sub-flex-item"> <!--sub-flex item 1-->
                        <div class="center-vertically all-blog-sub-positioning">
                            <a href="./stories.html" class="sub-flex-a-1">LA JUICE SHOP</a>
                            <p class="sub-flex-para">Thoughts on juicing and the place to go for the best fresh, local, and organic beverages in West Hollywood.</p>
                            <a href="./stories.html" class="sub-flex-a-2">DO GO ON <i class="fas fa-chevron-right"></i></a>
                        </div>
                        
                    </div>
                    <div class="all-blog-sub-flex-item"><img src="./app/img/singleStories/stories5.jpg" alt=""></div><!--sub flex item 2-->
                </div>

                

            </div>
            <div class="all-blog-flex-item"><!--main flex item 2-->
                <h3 class="section-flex-h3">COLLABORATE WITH US</h3>
                <p class="section-flex-item-p">
                    We also provide opportunities to collaborate on video, photography, and writing.
                </p>
                <a href="./collaborate.php" class="btn-in-sidebar">COLLABORATE</a>
                <h3 class="section-flex-h3">REQUEST AN INTERVIEW</h3>
                <p class="section-flex-item-p">
                    Have a story, tattoo, or dwelling, you’d like to share with us, then request an interview.
                </p>
                <a href="./collaborate.html" class="btn-in-sidebar">REQUEST AN INTERVIEW</a>
            </div> 
        </div>

        <div class="page-counter-all-blogs">
            <div class="page-counter-center-container center-horizontally">
                <div class="page-counter-total-pages"> PAGE 1 OF 1</div>
                <div class="current-page-page-counter">1</div>
            </div>
            
        </div>
    </section>


    <?php include "./pageComponent/_footer.php"; ?>

    
</body>
</html>