//ADD TO CART COUNTER OPTION

document.querySelector(".plus").addEventListener("click", ()=>{
    let numberCounterCart = document.querySelector(".number-counter").textContent;
    console.log("clicked");
    NumberCounter = parseInt(numberCounterCart);
    NumberCounter = NumberCounter + 1;
    console.log(NumberCounter);
    document.querySelector(".number-counter").textContent = NumberCounter;
});
document.querySelector(".minus").addEventListener("click", ()=>{
    let numberCounterCart = document.querySelector(".number-counter").textContent;
    console.log("clicked");
    if(numberCounterCart =="1"){
        document.querySelector(".number-counter").textContent = "1";
    }else{
        NumberCounter = parseInt(numberCounterCart);
        NumberCounter = NumberCounter - 1;
        console.log(NumberCounter);
        document.querySelector(".number-counter").textContent = NumberCounter;
    }
    
});
