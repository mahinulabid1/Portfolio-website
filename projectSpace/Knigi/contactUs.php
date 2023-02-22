<?php 
include "./pageComponent/variableNDPath.php";
$style_sheet= "./app/scss/dist/contact_Us.css";
$page_title="Knigi - Contact Us";
include $head;
?>
<body>
    <?php include $nav; ?>

    
    <section>
        <h1 class="section-header">TELL US YOUR <br> THOUGHTS</h1>

        <div class="section-flex-container">
            <div class="section-flex-item">
                <h3 class="section-flex-h3">GENERAL QUESTIONS</h3>
                <p class="section-flex-item-p">
                    For any questions, press inquiries, requests, or comments you may have please contact: <span class="contactus-mail">HELLO@WOVENMAGAZINE.COM</span> 
                </p>
                <h3 class="section-flex-h3">JOIN OUR COMMUNITY</h3>
                <p class="section-flex-item-p">
                    Show Woven some social love. Like us on <a href="facebook.com" class="community-link">FACEBOOK</a> , tweet us on <a href="facebook.com" class="community-link">TWITTER</a>, or follow us around on <a href="facebook.com" class="community-link">INSTAGRAM</a>.
                </p>
            </div>
            <div class="section-flex-item">
                <h3 class="section-flex-h3">COLLABORATE WITH US</h3>
                <p class="section-flex-item-p">
                    We also provide opportunities to collaborate on video, photography, and writing.
                </p>
                <a href="./collaborate.php" class="btn-in-sidebar">COLLABORATE</a>
                <h3 class="section-flex-h3">REQUEST AN INTERVIEW</h3>
                <p class="section-flex-item-p">
                    Have a story, tattoo, or dwelling, you’d like to share with us, then request an interview.
                </p>
                <a href="./collaborate.php" class="btn-in-sidebar">REQUEST AN INTERVIEW</a>
            </div>
        </div>
    </section>


    <?php include $footer; ?>

    
</body>
</html>