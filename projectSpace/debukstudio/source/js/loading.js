const window_loading = document.querySelector("body");
const loading_section = document.querySelector(".loading-section-container");
const loading_bar_fill = document.querySelector(".loading-bar__fill");
let barLoading_time = Math.floor(Math.random() * 3) + 1;  //gives output 1 to 4
//here should be bar loading animation selector
let barLoading_animation_selector =  Math.floor(Math.random() * 5) + 1;


window.addEventListener("load", ()=>{

    window_loading.classList.add("js-overflowY-hidden");
    let loading_animation_name = `loading_${barLoading_animation_selector} ${barLoading_time}s ease-in-out`;
    console.log(loading_animation_name);
    setTimeout(()=>{
        loading_bar_fill.style.width = "100%";
    }, (barLoading_time*400));
    loading_bar_fill.style.animation = loading_animation_name;
    setTimeout(()=>{
        loading_section.classList.add("js-display-none");
        window_loading.classList.remove("js-overflowY-hidden");
    }, (barLoading_time*1000)+600);
}); 