let headerController = (()=>{
    let loadingEvent = ()=>{
        const windowViewHeight = window.innerHeight;
        const windowViewWidth = window.innerWidth;
        let elementS = document.querySelector(".hero-section");
        console.log(windowViewHeight);
        if(windowViewWidth < 500){
            console.log("less than 600");
            if(windowViewHeight < 600){
                console.log("don't add the style");
            }else if(windowViewHeight > 601){
                elementS.classList.remove("hero-section-first-style");
                elementS.classList.add("hero-section-second-style");
                document.querySelector("header").style.height ="100vh";
                document.querySelector(".Second-section").style.marginTop = "0";
                document.querySelector(".scroll-down-i-container").style.display= "block";
            }
        }
        else if(windowViewWidth > 501){
            elementS.classList.add("hero-section-first-style");
            elementS.classList.remove("hero-section-second-style");
            document.querySelector(".Second-section").style.marginTop = "262px";
            document.querySelector("header").style.height ="auto";
            document.querySelector(".scroll-down-i-container").style.display= "none";
        }
    }
    loadingEvent();
    window.addEventListener("resize", ()=>{
        console.log("resizing");
        loadingEvent();
    });


    document.querySelector(".scroll-down-i-container").addEventListener("click", ()=>{
        let k = document.querySelector(".Second-section");
        k.scrollIntoView(true);
        k.style.paddingTop="60px";
        // window.scrollTo(0, 390);
        console.log("scrll clicked");
    }); 
    
})();
