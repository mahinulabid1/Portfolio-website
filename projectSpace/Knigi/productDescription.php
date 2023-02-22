<?php 
include "./pageComponent/variableNDPath.php";
$style_sheet = "./app/scss/dist/product_description.css";
$page_title= "Knigi - Product Description";
include $head;
?>
<body>
    <?php include $nav; ?>
    <header>
        <div class="content-in-header">
            <div class="header-item">
                <h2 class="content-header">Woven Issue Four</h2>
                <p class="price-tag">$18 USD</p>
                <p class="product-content">
                    Issue 4 explores the paradoxes at play in our world: death and rebirth, old and new, past and 
                    future. We take on a mindset of endless growth and the many catalysts we encounter in the 
                    creative process: setbacks, loss, imagination, and serendipity. From poetry to plants, this 
                    issue looks intently into the face of the immeasurable forces that propel us forward, and 
                    meditates on our role in designing the future. <br> <br> From Manly, Australia to Victoria, British 
                    Columbia, from Long Beach, California to Jersey City, New Jersey, we share the stories of
                    nine artists, designers, and entrepreneurs who are holding the tension between the past,
                    present, and future. You’ll meet modern day poet Joekenneth Museau who channelled the loss
                    of his mother to cancer into a guidebook for grief, Julianne Ahn who took up ceramics as
                    a meditation, and photographer Cody Cobb whose solo expeditions take us back in time.
                    We study the cosmology of city planning at Arcosanti, an experimental architecture 
                    site in the Arizona desert, and glimpse the mythical symbols of Antelope Canyon through 
                    the eyes of Navajo guides.
                </p>

                <div class="cart-option">
                    <p class="content-note">*US orders only</p>
                    <div class="cart-function">
                        <a class="add-cart-btn" href="">ADD TO CART</a>
                        <div class="numberFunction"><span class="plus">+</span> <span class="number-counter">1</span>  <span class="minus">-</span></div>
                    </div>
                </div>
            </div>
            <div class="header-item">
                <div class="book-preview-container">
                    <img src="./app/img/book1.jpg" alt="">
                </div>
            </div>
        </div>        
                
</header>

<section>
    <div class="specs-of-books">
        <div class="specs-item">
            <h3 class="specs-item-header">SPECS</h3>
            <p class="specs-content-1">144 pages, offset-printed and perfect bound, full color on uncoated and coated paper. Printed in Germany.</p>
            <p class="specs-content-2">Dimensions: 8.5 x 11.3 in</p>
        </div>
        <div class="specs-item">
            <h3 class="specs-item-header">SHIPPING & HANDLING</h3>
            <p class="specs-content-1">Shipping & handling is added at checkout. For more information please visit our <a href="./FAQ.php" class="faq-link">FAQ</a> and <a href="./termsandCondition.php" class="terms-and-condition">Terms & Conditions.</a></p>
        </div>
    </div>
    <a href="" class="subscribe-btn transition">Subscribe to print <i class="fas fa-arrow-right"></i></a>
</section>



<?php include $footer; ?>

</body>
</html>