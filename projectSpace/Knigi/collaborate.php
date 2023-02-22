<?php 
$style_sheet="./app/scss/dist/collaborate.css";
$page_title="Knigi- Collaborate With Us";
include "./pageComponent/_head.php";  
?>
<body>
    <?php include "./pageComponent/_navigation.php"; ?>

    
    <section>
        <h1 class="section-header">SHARE YOUR <br> PASSION</h1>

        <div class="section-flex-container">
            <div class="section-flex-item">
                <h3 class="section-flex-h3">HEY CREATIVES</h3>
                <p class="section-flex-item-p">
                    Here at Woven we understand and gladly acknowledge that we can’t do everything ourselves. We welcome the opportunity to work with fellow creatives, photographers, and film makers. As a result, many of the articles and videos here rely heavily on the skills of fellow collaborators. If you have an interest in working together or a skill you’d like to offer, please reach out to us.
                </p>
                <h3 class="section-flex-h3">GET FAMILIAR</h3>
                <p class="section-flex-item-p">
                    Take some time to familiarize yourself with the editorial tone and visual aesthetic of Woven to see if it relates with your own. We would relish the opportunity to establish a relationship with you, look at your work, and perhaps collaborate on an article or creative experiment of sorts.
                </p>
            </div>
            <div class="section-flex-item">
                <h3 class="section-flex-h3">Tell us a bit about yourself</h3>
                <form action="">
                    <input class="section-form name" type="text" placeholder="FIRST + LAST NAME">
                    <input class="section-form location" type="text" placeholder="LOCATION(CITY + STATE/ COUNTRY)">
                    <input class="section-form website" type="text" placeholder="WEBSITE (OPTIONAL)">
                    <input class="section-form email" type="email" placeholder="YOUR EMAIL">
                    <textarea placeholder="DESCRIBE YOURSELF"></textarea>
                    <input class="request-inter-btn" type="submit" value="REQUEST AN INTERVIEW">
                </form>
            </div>
        </div>
    </section>


    
    <?php include "./pageComponent/_footer.php"; ?>
    
</body>
</html>