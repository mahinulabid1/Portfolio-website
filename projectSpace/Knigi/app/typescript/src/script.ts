const hambar: any = document.querySelector(".dekstop-ham-container");
const mobile_navigation: any = document.querySelector(".nav-in-ham");
const mobile_navClose: any = document.getElementById("close-nav-in-ham");
const shopButton: any = document.querySelector(".shop-btn");
const bookShopNav: any = document.querySelector(".book-shop-separate");
const bookShopnavClose: any = document.querySelector(".empty-space-close");
const cartOpen:any=document.querySelectorAll("#cart-open");
const cartMenu:any= document.querySelector(".cart-holder");
const cartClose:any = document.getElementById("cart-close");
const searchOpenBtn:any = document.querySelector(".search-icon");
const searchCloseBtn:any =document.querySelector(".search-close-btn");
const searchSection:any = document.querySelector(".search-display");
const classAnimation: string[] = ["slideDown", "slideUp", "d-none"];
// mobile navigation bar 
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
            } else {
                mobile_navigation.classList.toggle(classAnimation[i]);
            }
        }
    });
})();





// shop menu open and close
(() => {
    // I want duration
    let duration: number = 0;
    let selectorArr: any[] = [shopButton, bookShopnavClose];
    let x: any;

    for (let i = 0; i < selectorArr.length; i++) {
        selectorArr[i].addEventListener("mouseenter", () => {
            let eventEnterTime: any = Date.now();
            x = setInterval(() => {
                let eventDurationCounter: any = Date.now();
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
        setTimeout(()=>{
            if (duration > 400) {
                bookShopNav.classList.remove('d-none');
                bookShopNav.classList.remove("slideUp");
                bookShopNav.classList.add("slideDown");
            }
        }, 500);
       
    });

    selectorArr[1].addEventListener("mouseenter", () => {
        console.log("shop nav close");
        setTimeout(()=>{

            if (duration > 200) {
                
                bookShopNav.classList.add("slideUp");
                bookShopNav.classList.remove("slideDown");
                setTimeout(()=>{
                    bookShopNav.classList.add('d-none');
                }, 390);
            }
        }, 300);
       
    });

})();



// CART BUTTON FUNCTION
(()=>{
    for(let i=0; i < cartOpen.length; i++){
        cartOpen[i].addEventListener("click",()=>{
            cartMenu.classList.remove("d-none");
            console.info("cart button clicked");
        });
    }

    cartClose.addEventListener('click', ()=>{
        cartMenu.classList.add("d-none");
    });

    
})();


// SEARCH FUNCTIONALITIES
(()=>{
    // REUSEABLE SEARCHBAR OPEN AND CLOSE OPERATION
    const searchSectionOperation =(op:string):void=>{
        if(op == "open"){
            for(let i =0; i <classAnimation.length; i++){
                if(i == 0){
                    searchSection.classList.add(classAnimation[i]);
                }else{
                    searchSection.classList.remove(classAnimation[i]);
                }
            }
            
        }else if(op == "close"){
            for(let i =0; i <classAnimation.length; i++){
                if(i == 0){
                    searchSection.classList.remove(classAnimation[i]);
                }else if(i ==1){
                    searchSection.classList.add(classAnimation[i]);
                }else if(i ==2){
                    setTimeout(()=>{
                        searchSection.classList.add(classAnimation[i]);
                    }, 380)
                }
            }
        }  
    }
    searchOpenBtn.addEventListener("click",()=>{
        searchSectionOperation("open");
    });

    window.addEventListener("keydown", (event)=>{
        if(event.key== "Escape"){
            searchSectionOperation("close");
        }
    });

    searchCloseBtn.addEventListener("click", ()=>{
        searchSectionOperation("close");
    }); 



    
})();