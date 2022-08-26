
// dekstop ham bar
let dekstopHamContainer =document.querySelector(".dekstop-ham-container");
dekstopHamContainer.addEventListener("click", ()=>{
    let hamStatus = dekstopHamContainer.classList.contains("activated-ham");
    if(!hamStatus){
        document.querySelector(".dekstop-ham-container").classList.add("activated-ham");
        document.querySelector(".nav-in-ham").style.animation= "hamBarShow 0.5s ease-in";
        setTimeout(()=>{
            document.querySelector(".nav-in-ham").style.display= "block";
        }, 500);
        document.querySelector(".ham-bar-2").style.animation="bar2Hide 0.3s ease-out";
        document.querySelector(".ham-bar-2").style.transform = "translateX(-200px)";
        document.querySelector(".ham-bar-2").style.opacity="0";
        let allBar =document.querySelectorAll(".dekstop-ham-bar");
        for(i = 0; i < allBar.length; i++){
            let selectedAllBar= allBar[i];
            selectedAllBar.style.position = "absolute";
        }
        document.querySelector(".ham-bar-1").style.animation="bar1Rotate 0.4s ease-in";
        document.querySelector(".ham-bar-1").style.transform = "rotate(45deg)";
        document.querySelector(".ham-bar-3").style.animation="bar3Rotate 0.4s ease-in";
        document.querySelector(".ham-bar-3").style.transform = "rotate(319deg)";
        document.querySelector(".dekstop-ham-container").style.width = "28px";
    }else if(hamStatus){
        document.querySelector(".dekstop-ham-container").classList.remove("activated-ham");
        document.querySelector(".nav-in-ham").style.animation= "hamBarHide 0.5s ease-in";
        setTimeout(()=>{
            document.querySelector(".nav-in-ham").style.display= "none";
        }, 500);
        document.querySelector(".ham-bar-2").style.transform = "translateX(0px)";
        document.querySelector(".ham-bar-2").style.opacity="1";
        let allBar =document.querySelectorAll(".dekstop-ham-bar");
        for(i = 0; i < allBar.length; i++){
            let selectedAllBar= allBar[i];
            selectedAllBar.style.position = "static";
        }
        document.querySelector(".ham-bar-1").style.animation="bar1AntiRotate 0.4s ease-in";
        document.querySelector(".ham-bar-1").style.transform = "rotate(0deg)";
        document.querySelector(".ham-bar-3").style.animation="bar3AntiRotate 0.4s ease-in";
        document.querySelector(".ham-bar-3").style.transform = "rotate(0deg)";
    }
});



// nav shop btn event
let shopBtnOpenFunction= ()=>{
    document.querySelector(".book-shop-separate").style.display="block";
    document.querySelector(".book-shop-separate").style.animation="navShopMenuComingAnimation 0.5s linear";
    setTimeout(()=>{
        document.querySelector(".book-shop-separate").style.transform="translateY(0)";
    },500);
}
let shopBtnCloseFunction= ()=>{
    document.querySelector(".book-shop-separate").style.animation="navShopMenuFadeUpAnimation 0.5s linear";
    setTimeout(()=>{
        document.querySelector(".book-shop-separate").style.transform="translateY(-100vh)";
        document.querySelector(".book-shop-separate").style.display="none";
    },500);
}

document.querySelector(".shop-btn").addEventListener("mouseenter", ()=>{
    document.querySelector(".book-shop-separate").style.display="block";
    document.querySelector(".book-shop-separate").style.animation="navShopMenuComingAnimation 0.5s linear";
    setTimeout(()=>{
        document.querySelector(".book-shop-separate").style.transform="translateY(0)";
    },500);
});
document.querySelector(".bs-container").addEventListener("mouseenter", ()=>{
    document.querySelector(".book-shop-separate").style.display="block";  
});
document.querySelector(".shop-btn-shop-all-link").addEventListener("mouseenter", ()=>{
    document.querySelector(".book-shop-separate").style.display="block";  
});
document.querySelector(".empty-space-close").addEventListener("mouseenter", ()=>{
    shopBtnCloseFunction();
});
document.querySelector(".menu-2").addEventListener("mouseenter", ()=>{
    shopBtnCloseFunction();
});
document.querySelector(".dekstop-ham-container").addEventListener("mouseenter", ()=>{
    shopBtnCloseFunction();
});
document.querySelector(".menu-3").addEventListener("mouseenter", ()=>{
    shopBtnCloseFunction();
});


// search box show
document.querySelector(".search-icon-close").classList.add('search-icon-close-display-none');
document.querySelector(".search-icon-normal").addEventListener("click", ()=>{
    document.querySelector(".search-icon-close").classList.remove('search-icon-close-display-none');
    document.querySelector(".search-icon-close").classList.add('search-icon-close-display-block');
    
    document.querySelector(".search-icon-normal").style.display= "none";
    document.querySelector(".search-display").style.display= "block";
    document.querySelector(".search-display").style.animation= "navShopMenuComingAnimation 0.5s linear";
    setTimeout(()=>{
        document.querySelector(".book-shop-separate").style.transform="translateY(0)";
    }, 100);
});
document.querySelector(".search-icon-close").addEventListener("click", ()=>{
    document.querySelector(".search-icon-normal").style.display= "inline-block";
    document.querySelector(".search-icon-close").classList.add('search-icon-close-display-none');
    document.querySelector(".search-icon-close").classList.remove('search-icon-close-display-block');
    document.querySelector(".search-display").style.animation= "navShopMenuFadeUpAnimation 0.5s linear";
    setTimeout(()=>{
        document.querySelector(".search-display").style.display= "none";
    }, 500)
});
document.addEventListener("keydown", (event)=>{
 
    if(event.key === "Escape"){
        console.log("escape");
        document.querySelector(".search-icon-normal").style.display= "inline-block";
        document.querySelector(".search-icon-close").classList.add('search-icon-close-display-none');
        document.querySelector(".search-icon-close").classList.remove('search-icon-close-display-block');
        document.querySelector(".search-display").style.animation= "navShopMenuFadeUpAnimation 0.5s linear";
        setTimeout(()=>{
            document.querySelector(".search-display").style.display= "none";
        }, 500);
    }
});







// //  NAV BAR CART BTN FUNCTION
// let  cartBTNfunction=()=>{
//     console.log("clicked");
//     document.querySelector('.cart-holder').style.display= "block";
//     document.querySelector(".cross-btn").addEventListener("click", ()=>{
//         document.querySelector('.cart-holder').style.display= "none";
//     });
// }
// document.querySelector(".cart-text-responsive").addEventListener("click", ()=>{
//     cartBTNfunction();
// });
// document.querySelector(".cart-icon").addEventListener("click", ()=>{
//     cartBTNfunction();
// });

// let cautionEvent = (()=>{
//     document.querySelector(".caution-btn").addEventListener("click", ()=>{
//         document.querySelector(".caution").style.display= 'none';
//     });
// }) ();