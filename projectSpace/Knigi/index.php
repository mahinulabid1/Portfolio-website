<?php 
$style_sheet = "./app/scss/dist/style.css";
$page_title="KNIGI- Home";
include "./pageComponent/_head.php";

?>


<body>
    <?php include "./pageComponent/_navigation.php"; ?>
    <header>
        <div class="header-image-container">
            <img src="./app/img/headerImg1.jpg" alt="books">
            <img src="./app/img/headerImg2.jpg" alt="books">
            <img src="./app/img/headerImg3.jpg" alt="books">
        </div>
        
        <div class="hero-text-container">
            <h1>Buy Books, Anywhere</h1>
            <a href="./shopall.php">Shop Now</a>
        </div>

    </header>

    <section class="flex flex-wrap about-us-section">
        <div class="about-u-s-item">
            <h1>design <span class="design-span">and</span> travel</h1>
        </div>
        <div class="about-u-s-item">
            <h4>ABOUT US</h4>
            <p class="about-us-p">Woven Magazine celebrates artists, designers, and entrepreneurs while exploring the history of design through travel.</p>
        </div>
    </section>

    <?php include "./pageComponent/_stories.php"; ?>


    <?php 
        include "./pageComponent/_blogPost_summary.php" ;
        include "./pageComponent/_footer.php"; 
    ?>
    
</body>
</html>