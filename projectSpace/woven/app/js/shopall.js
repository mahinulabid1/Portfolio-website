//category-activated
// document.querySelector(".individual-btn").
let classChecker = (inputClass)=>{
    let checkerResult =inputClass.classList.contains("category-activated");
    return checkerResult;
}
let selector1=document.querySelector(".individual-btn");
let selector2 = document.querySelector(".wholesale-btn");
document.querySelector(".individual-btn").addEventListener("click", ()=>{
    let checkingUltimateResult =classChecker(selector1);
    console.log(checkingUltimateResult);
    if(!checkingUltimateResult){
        document.querySelector(".wholesale").style.display= " none";
        document.querySelector(".individual-btn").classList.add("category-activated");
        document.querySelector(".wholesale-btn").classList.remove("category-activated");
        document.querySelector(".individual").style.display= "flex";
    }else{
        console.log("everything is fine");
    }
});

document.querySelector(".wholesale-btn").addEventListener("click", ()=>{
    let checkingUltimateResult =classChecker(selector2);
    console.log(checkingUltimateResult);
    if(!checkingUltimateResult){
        document.querySelector(".wholesale").style.display= "flex";
        document.querySelector(".individual").style.display= "none";
        document.querySelector(".individual-btn").classList.remove("category-activated");
        document.querySelector(".wholesale-btn").classList.add("category-activated");
    }else{
        console.log("everything is fine");
    }
});