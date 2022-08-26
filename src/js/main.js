


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


// greeting
(function(){
// GREETING FUNCTION

    let GreetingText = document.querySelector(".hero-job-title");
    let date = new Date();
    let time = date.getHours();
    if(time >= 5 && time<=11){
        GreetingText.textContent="Good Morning !";
    }else if(time >= 12 && time<=17){
        GreetingText.textContent="Good Afternoon !";
    }else if(time >= 18 && time<=21){
        GreetingText.textContent="Good Evening !";
    }else if(time >= 22 && time<=23){
        GreetingText.textContent="How was your day?";
    }else if(time >= 0 && time<=4){
        GreetingText.textContent="Good Night !";
    }

})();
