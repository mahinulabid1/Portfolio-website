<?php 
include "./pageComponent/variableNDPath.php";
$page_title= "Kingi - Shop";
$style_sheet= "./app/scss/dist/shop_all.css";
include $head;
?>
<body>
    <?php
    include $nav;
    ?>

    <header>
        <div class="checkout-product">
            <div class="hero-text-container center-middle">
                <h1 class="hero-header">future &dash; past</h1>
                <a class="hero-link transition" href="./productDescription.php">CHECK IT OUT</a>
            </div>
            <div class="text-corner-1">WHOLE SALE AVAILABLE</div>
            <div class="text-corner-2">SHIPS WORLDWIDE</div>
        </div>
    </header>

    <section class="books-item">
        <div class="books-nav">
            <div class="books-nav-item">WOVEN GOODS</div>
            <div class="books-nav-item"><span class="individual-btn category-activated">INDIVIDUAL</span> / <span class="wholesale-btn">WHOLESALE</span></div>
        </div>
        <div class="books-item-flex-container individual">
            <a href="./productDescription.php" class="product-item">
                <div class="product-image-container">
                    <img class="center-middle" src="./app/img/product/individual/product1.jpg" alt="">
                </div>
                <div class="product-text">
                    <p class="product-name">Woven Issue Four – Seconds Sale</p>
                    <p class="product-price"><span class="discounted-regular-price">$18 USD</span><span class="discounted-price"> $9 USD</span> <span class="regular-price"></span></p>
                </div>
            </a>
            <a href="./productDescription.php" class="product-item">
                <div class="product-image-container">
                    <img class="center-middle" class="center-middle" src="./app/img/product/individual/product2.jpg" alt="">
                </div>
                <div class="product-text">
                    <p class="product-name">Earl of East London – Strand</p>
                    <p class="product-price"><span class="discounted-regular-price"></span><span class="discounted-price"></span> <span class="regular-price"> $24 USD</span></p>
                </div>
            </a>
            <a href="./productDescription.php" class="product-item">
                <div class="product-image-container">
                    <img class="center-middle" src="./app/img/product/individual/product3.jpg" alt="">
                </div>
                <div class="product-text">
                    <p class="product-name">Earl of East London – Strand</p>
                    <p class="product-price"><span class="discounted-regular-price"></span><span class="discounted-price"></span> <span class="regular-price"> $14 USD</span></p>
                </div>
            </a>
            <a href="./productDescription.php" class="product-item">
                <div class="product-image-container">
                    <img class="center-middle" src="./app/img/product/individual/product4.jpg" alt="">
                </div>
                <div class="product-text">
                    <p class="product-name">Earl of East London – Strand</p>
                    <p class="product-price"><span class="discounted-regular-price">$24 USD</span><span class="discounted-price">$12 USD</span> <span class="regular-price"> </span></p>
                </div>
            </a>
            <a href="./productDescription.php" class="product-item">
                <div class="product-image-container">
                    <img class="center-middle" src="./app/img/product/individual/product5.jpg" alt="">
                </div>
                <div class="product-text">
                    <p class="product-name">Earl of East London – Strand</p>
                    <p class="product-price"><span class="discounted-regular-price"></span> <span class="discounted-price"></span><span class="regular-price"> $44 USD</span></p>
                </div>
            </a>
            <a href="./productDescription.php" class="product-item">
                <div class="product-image-container">
                    <img class="center-middle" src="./app/img/product/individual/product6.jpg" alt="">
                </div>
                <div class="product-text">
                    <p class="product-name">Earl of East London – Strand</p>
                    <p class="product-price"><span class="discounted-regular-price"></span><span class="discounted-price"></span> <span class="regular-price"> $22 USD</span></p>
                </div>
            </a>
        </div>


        <div class="books-item-flex-container wholesale">
            <a href="./productDescription.php" class="product-item">
                <div class="product-image-container">
                    <img class="center-middle" src="./app/img/product/wholesale/stack1.jpg" alt="">
                </div>
                <div class="product-text">
                    <p class="product-name">Earl of East London – Strand</p>
                    <p class="product-price"><span class="discounted-regular-price"></span><span class="discounted-price"></span> <span class="regular-price"> $24 USD</span></p>
                </div>
            </a>
            <a href="./productDescription.php" class="product-item">
                <div class="product-image-container">
                    <img class="center-middle" src="./app/img/product/wholesale/stack2.jpg" alt="">
                </div>
                <div class="product-text">
                    <p class="product-name">Earl of East London – Strand</p>
                    <p class="product-price"><span class="discounted-regular-price"></span><span class="discounted-price"></span> <span class="regular-price"> $24 USD</span></p>
                </div>
            </a>
            <a href="./productDescription.php" class="product-item">
                <div class="product-image-container">
                    <img class="center-middle" src="./app/img/product/wholesale/stack3.jpg" alt="">
                </div>
                <div class="product-text">
                    <p class="product-name">Earl of East London – Strand</p>
                    <p class="product-price"><span class="discounted-regular-price"></span><span class="discounted-price"></span> <span class="regular-price"> $24 USD</span></p>
                </div>
            </a>
            <a href="./productDescription.php" class="product-item">
                <div class="product-image-container">
                    <img class="center-middle" src="./app/img/product/wholesale/stack4.jpg" alt="">
                </div>
                <div class="product-text">
                    <p class="product-name">Earl of East London – Strand</p>
                    <p class="product-price"><span class="discounted-regular-price"></span><span class="discounted-price"></span> <span class="regular-price"> $24 USD</span></p>
                </div>
            </a>
            <a href="./productDescription.php" class="product-item">
                <div class="product-image-container">
                    <img class="center-middle" src="./app/img/product/wholesale/stack5.jpg" alt="">
                </div>
                <div class="product-text">
                    <p class="product-name">Earl of East London – Strand</p>
                    <p class="product-price"><span class="discounted-regular-price"></span><span class="discounted-price"></span> <span class="regular-price"> $24 USD</span></p>
                </div>
            </a>
            <a href="./productDescription.php" class="product-item">
                <div class="product-image-container">
                    <img class="center-middle" src="./app/img/product/wholesale/stack6.jpg" alt="">
                </div>
                <div class="product-text">
                    <p class="product-name">Earl of East London – Strand</p>
                    <p class="product-price"><span class="discounted-regular-price"></span><span class="discounted-price"></span> <span class="regular-price"> $24 USD</span></p>
                </div>
            </a>
        </div>

    </section>

    <?php 
    include $blogPostSummary;
    include $footer; 
    ?>

</body>
</html>
