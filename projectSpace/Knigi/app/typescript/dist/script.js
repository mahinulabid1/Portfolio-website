"use strict";
const hambar = document.querySelector(".dekstop-ham-container");
const mobile_navigation = document.querySelector(".nav-in-ham");
const mobile_navClose = document.getElementById("close-nav-in-ham");
const shopButton = document.querySelector(".shop-btn");
const bookShopNav = document.querySelector(".book-shop-separate");
const bookShopnavClose = document.querySelector(".empty-space-close");
const cartOpen = document.querySelectorAll("#cart-open");
const cartMenu = document.querySelector(".cart-holder");
const cartClose = document.getElementById("cart-close");
const searchOpenBtn = document.querySelector(".search-icon");
const searchCloseBtn = document.querySelector(".search-close-btn");
const searchSection = document.querySelector(".search-display");
const classAnimation = ["slideDown", "slideUp", "d-none"];
(() => {
    hambar.addEventListener("click", () => {
        for (let i = 0; i < classAnimation.length; i++) {
            mobile_navigation.classList.toggle(classAnimation[i]);
        }
    });
    mobile_navClose.addEventListener("click", () => {
        for (let i = 0; i < classAnimation.length; i++) {
            if (i == 2) {
                setTimeout(() => {
                    mobile_navigation.classList.toggle("d-none");
                }, 370);
            }
            else {
                mobile_navigation.classList.toggle(classAnimation[i]);
            }
        }
    });
})();
(() => {
    let duration = 0;
    let selectorArr = [shopButton, bookShopnavClose];
    let x;
    for (let i = 0; i < selectorArr.length; i++) {
        selectorArr[i].addEventListener("mouseenter", () => {
            let eventEnterTime = Date.now();
            x = setInterval(() => {
                let eventDurationCounter = Date.now();
                duration = eventDurationCounter - eventEnterTime;
                console.log(duration);
            }, 200);
        });
        selectorArr[i].addEventListener("mouseleave", () => {
            clearInterval(x);
            duration = 0;
        });
    }
    selectorArr[0].addEventListener("mouseenter", () => {
        setTimeout(() => {
            if (duration > 400) {
                bookShopNav.classList.remove('d-none');
                bookShopNav.classList.remove("slideUp");
                bookShopNav.classList.add("slideDown");
            }
        }, 500);
    });
    selectorArr[1].addEventListener("mouseenter", () => {
        console.log("shop nav close");
        setTimeout(() => {
            if (duration > 200) {
                bookShopNav.classList.add("slideUp");
                bookShopNav.classList.remove("slideDown");
                setTimeout(() => {
                    bookShopNav.classList.add('d-none');
                }, 390);
            }
        }, 300);
    });
})();
(() => {
    for (let i = 0; i < cartOpen.length; i++) {
        cartOpen[i].addEventListener("click", () => {
            cartMenu.classList.remove("d-none");
            console.info("cart button clicked");
        });
    }
    cartClose.addEventListener('click', () => {
        cartMenu.classList.add("d-none");
    });
})();
(() => {
    const searchSectionOperation = (op) => {
        if (op == "open") {
            for (let i = 0; i < classAnimation.length; i++) {
                if (i == 0) {
                    searchSection.classList.add(classAnimation[i]);
                }
                else {
                    searchSection.classList.remove(classAnimation[i]);
                }
            }
        }
        else if (op == "close") {
            for (let i = 0; i < classAnimation.length; i++) {
                if (i == 0) {
                    searchSection.classList.remove(classAnimation[i]);
                }
                else if (i == 1) {
                    searchSection.classList.add(classAnimation[i]);
                }
                else if (i == 2) {
                    setTimeout(() => {
                        searchSection.classList.add(classAnimation[i]);
                    }, 380);
                }
            }
        }
    };
    searchOpenBtn.addEventListener("click", () => {
        searchSectionOperation("open");
    });
    window.addEventListener("keydown", (event) => {
        if (event.key == "Escape") {
            searchSectionOperation("close");
        }
    });
    searchCloseBtn.addEventListener("click", () => {
        searchSectionOperation("close");
    });
})();
//# sourceMappingURL=script.js.map