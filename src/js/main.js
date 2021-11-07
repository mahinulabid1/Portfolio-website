let headerController = (()=>{
    const windowViewHeight = window.innerHeight;
    const windowViewWidth = window.innerWidth;
    console.log(windowViewHeight);
    if(windowViewWidth < 500){
        console.log("less than 600");
        if(windowViewHeight < 400){
            console.log("don't add the style");
        }else if(windowViewHeight > 401){
            let elementS = document.querySelector(".hero-section");
            elementS.classList.remove("hero-section-first-style");
            elementS.classList.add("hero-section-second-style");
            document.querySelector("header").style.height ="100vh";
            document.querySelector(".Second-section").style.marginTop = "0";
        }
    }
})();