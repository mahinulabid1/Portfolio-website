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
            }
        }
        else if(windowViewWidth > 501){
            elementS.classList.add("hero-section-first-style");
            elementS.classList.remove("hero-section-second-style");
            document.querySelector(".Second-section").style.marginTop = "262px";
            document.querySelector("header").style.height ="auto";
        }
    }
    loadingEvent();
    window.addEventListener("resize", ()=>{
        console.log("resizing");
        loadingEvent();
    });

})();


let hamBergerFunction= (()=>{
    let openHam = document.querySelector(".js-ham-btn-open");
    let closeHam = document.querySelector(".js-ham-close-btn")
    let hamSection = document.querySelector(".js-ham-berger-navigation");


    let hamCloseFunction = ()=>{
        hamSection.style.display= "none";
        document.querySelector("html").style.overflowY = "visible";
        document.querySelector("body").style.overflowY = "visible";
    }
    let hamOpenFunction = ()=>{
        hamSection.style.display= "flex";
        document.querySelector("html").style.overflowY = "hidden";
        document.querySelector("body").style.overflowY = "hidden";
    }

    openHam.addEventListener("click", ()=>{
        hamOpenFunction();
        
    });
    closeHam.addEventListener("click", ()=>{
        hamCloseFunction();
    });

})();