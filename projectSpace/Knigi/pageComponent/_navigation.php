<nav>
    <div class="flex flex-align-center">
        <div class="dekstop-ham-container">
            <div class="dekstop-ham-relative">
                <div></div>
                <div></div>
                <div></div>
            </div>

        </div>
        <div class="shop-btn flex flex-align-center">SHOP <img src="./app/img/icons/arrowdown.png" alt="" height="20" width="20"></div>
    </div>

    <div>
        <a title="Home Page" class="nav-logo" href="index.php">Knigi</a>
    </div>

    <div class="flex flex-s-b flex-align-center">
        <!-- search icon class -->
        <div class="search-icon"><img src="./app/img/icons/search.png" alt="search anything" height="20" width="20"></div>
        <div class="cart-btn cart-text-responsive" id="cart-open">CART</div>
        <div class="cart-btn cart-icon" id="cart-open"><img src="./app/img/icons/cart.png" alt="Shopping Cart" height="20" width="20"></div>
    </div>
</nav>



<!-- HAM NAVIGATION -->
<div class="nav-in-ham d-none slideUp">
    <div class="nav-in-ham-content-container">
        <a href="./allStories.php" class="nav-in-ham-content">STORIES</a>
        <a href="./films.php" class="nav-in-ham-content">FILMS</a>
        <a href="./shopall.php" class="nav-in-ham-content">SHOP</a>
        <a href="./allBlogs.php" class="nav-in-ham-content">BLOG</a>
        <a href="./contactUs.php" class="nav-in-ham-content">ABOUT</a>
        <a href="./contactUs.php" class="request-interview-btn">REQUEST INTERVIEW</a>
        <div class="ham-close-btn" id="close-nav-in-ham">
            <img src="./app/img/icons/close.png" alt="" height="20" width="20">
        </div>
    </div>
</div>
<!-- HAM NAVIGATION END -->





<!-- SHOP NAVIGATION MENU -->
<!-- START -->
<div class="book-shop-separate d-none slideUp">
    <div class="bs-container flex flex-wrap flex-s-a">
        <a href="./productDescription.php" class="b-s-item">
            <div class="b-s-image-container">
                <img class="" src="./app/img/product/individual/product1.jpg" alt="">
                <div>
                    <p>Woven Issue Four</p>
                    <p><span class="discounted-regular-price">$18 USD</span><span class="discounted-price"> $9 USD</span> <span class="regular-price"></span></p>
                </div>
            </div>

        </a>

        <a href="./productDescription.php" class="b-s-item">
            <div class="b-s-image-container">
                <img class="" src="./app/img/product/individual/product2.jpg" alt="">
                <div>
                    <p>Earl of East London</p>
                    <p><span class="discounted-regular-price"></span><span class="discounted-price"></span> <span class="regular-price"> $24 USD</span></p>
                </div>
            </div>

        </a>

        <a href="./productDescription.php" class="b-s-item">
            <div class="b-s-image-container">
                <img class="" src="./app/img/product/individual/product3.jpg" alt="">
                <div>
                    <p>Earl of East London</p>
                    <p><span class="discounted-regular-price"></span><span class="discounted-price"></span> <span class="regular-price"> $14 USD</span></p>
                </div>
            </div>

        </a>

        <a href="./productDescription.php" class="b-s-item">
            <div class="b-s-image-container">
                <img class="" src="./app/img/product/individual/product4.jpg" alt="">
                <div>
                    <p>Earl of East London</p>
                    <p><span class="discounted-regular-price">$24 USD</span><span class="discounted-price">$12 USD</span> <span class="regular-price"> </span></p>
                </div>
            </div>

        </a>

    </div>
    <a class="shop-btn-shop-all-link transition" href="./shopall.php">SHOP ALL <i style="padding-left: 20px;" class="fas fa-chevron-right"></i></a>



    <div class="empty-space-close">

    </div>
</div>
<!-- SHOP NAVIGATION MENU END -->






<!--++++++++++++ SEARCH ENGINE(just kidding) ++++++++++++++++++++++  -->
<div class="search-display d-none">

    <!-- text container div -->
    <div>
        <form action="">
            <div class="flex flex-wrap flex-s-b">
                <input type="text" placeholder="Search Woven + Hit Enter">
                <button><img src="./app/img/icons/search.png" alt="search anything" height="20" width="20"> </button>
            </div>

            <p>PRESS <span>[ESC]</span> TO CLOSE</p>
        </form>
    </div>

    <div class="search-close-btn flex flex-align-center flex-s-a">
        <img src="./app/img/icons/close.png" alt="" height="20" width="20">
    </div>
</div>



<!-- +++++++ CART HOLDER  ++++++++++++++++++-->
<div class="cart-holder d-none"> <!-- d-none class will be here -->
    <div class="flex flex-s-b search-box">
        <div>Your Cart <span>$35 USD</span></div>
        <div id="cart-close"><img src="./app/img/icons/close.png" alt="" height="20" width="20"></div>
    </div>

    <div class="items-in-cart-container">
        <!-- first static item in the cart -->
        <div>
            <div>Woven Issue 4</div>
            <div>$ 20 USD</div>
            <div class="flex flex-align-center">
                <img src="./app/img/icons/delete.png" alt="delete from the queue" height="20" width="20">
            </div>
        </div>

        <!-- second static item in the cart -->
        <div>
            <div>As you like it</div>
            <div>$ 15 USD</div>
            <div class="flex flex-align-center">
                <img src="./app/img/icons/delete.png" alt="delete from the queue" height="20" width="20">
            </div>
        </div>

    </div>

    <div class="proceed-to-checkout"><a href="#">CHECKOUT</a></div>

</div>