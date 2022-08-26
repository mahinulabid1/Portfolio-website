// the state of the theme
let readThemeStatus = localStorage.getItem("Debuk_theme_state");
// console.log(readThemeStatus);
if (readThemeStatus == null) {
    console.log("local storage is null");
    localStorage.setItem("Debuk_theme_state", "white");
}
// localStorage.setItem("Debuk_theme_state", "white");


// REUSEABLE FUNCTIONS
const body = document.querySelector("body");
const AddClassToElements = (element, classToAdd) => {
    let SelectorInit = document.querySelectorAll(element);
    for (let counter = 0; counter < SelectorInit.length; counter++) {
        let Selector = SelectorInit[counter];
        Selector.classList.add(classToAdd);
    }
}

const RemoveClassElements = (element, classToRemove) => {
    let SelectorInit = document.querySelectorAll(element);
    for (let counter = 0; counter < SelectorInit.length; counter++) {
        let Selector = SelectorInit[counter];
        Selector.classList.remove(classToRemove);
    }
}

// REUSEABLE FUNCTIONS
const ElementSourceChange = (SingleSelector, source) => {
    document.querySelector(SingleSelector).src = source;
}

const Run_black_theme = () => {
    // DARK THEME SETUP
    // js_color_white
    AddClassToElements("body, .logo-text, .cookie-ham-para, .footer-copyright-item a, .footer-email, input[type='text'], input[type='email'],input[type='number'], textarea, select", "js_color_white");

    // js_link_color
    AddClassToElements(".ham-header-nav__first-section__links, .nav-menu-item a, .footer-links-a, .footer-link-take-action, .project-category-title", "js_link_color");

    // js_background_black
    AddClassToElements(".cookie-ham-notif, .hamberger-navigation-container, body, .flex-item-hero, input[type='text'], input[type='email'],input[type='number'], textarea, select", "js_background_black");

    // js-fill-white
    AddClassToElements(".ham-close-notification-btn path, .website-logo-icon path, .theme-change-btn path, .arrow-icon-normal path, .arrow-icon-big path, .twitter-icon-nav_bar path, .instagram-icon-nav_bar path, .instagram-icon-footer path,.twitter-icon-footer path", "js-fill-white");

    // js_box_shadow_one
    AddClassToElements(".cookie-ham-notif, .flex-item-hero", "js_box_shadow_one");
    

    AddClassToElements(".footer-link-take-action", "js-after-pseudo-background");    
    AddClassToElements(".footer-link-border", "js_border_bottom_white");
    AddClassToElements(".ham-bar", "js_background_white");
    AddClassToElements("input[type='text'], input[type='email'],input[type='number'], textarea, select", "js_form_border");
    AddClassToElements("input[type='submit']", "js_submit_black_theme");
    AddClassToElements(".cookie-ham-para", "js_border_bottom"); //border
    AddClassToElements(".close-ham-bar-btn", "js_ham_close_btn");
    AddClassToElements(".text-slider-container span", "text-stroke-white");

}


















const Run_white_theme = () => {
    // DARK THEME SETUP
    // js_color_white
    RemoveClassElements("body, .logo-text, .cookie-ham-para, .footer-copyright-item a, .footer-email, input[type='text'], input[type='email'],input[type='number'], textarea, select", "js_color_white");

    // js_link_color
    RemoveClassElements(".ham-header-nav__first-section__links, .nav-menu-item a, .footer-links-a, .footer-link-take-action, .project-category-title", "js_link_color");

    // js_background_black
    RemoveClassElements(".cookie-ham-notif, .hamberger-navigation-container, body, .flex-item-hero, input[type='text'], input[type='email'], input[type='number'], textarea, select", "js_background_black");

    // js-fill-white
    RemoveClassElements(".ham-close-notification-btn path, .website-logo-icon path, .theme-change-btn path, .arrow-icon-normal path, .arrow-icon-big path, .twitter-icon-nav_bar path, .instagram-icon-nav_bar path, .instagram-icon-footer path,.twitter-icon-footer path", "js-fill-white");

    // js_box_shadow_one
    RemoveClassElements(".cookie-ham-notif, .flex-item-hero", "js_box_shadow_one");
    

    RemoveClassElements(".footer-link-take-action", "js-after-pseudo-background");    
    RemoveClassElements(".footer-link-border", "js_border_bottom_white");
    RemoveClassElements(".ham-bar", "js_background_white");
    RemoveClassElements("input[type='text'], input[type='email'],input[type='number'], textarea, select", "js_form_border");
    RemoveClassElements("input[type='submit']", "js_submit_black_theme");
    RemoveClassElements(".cookie-ham-para", "js_border_bottom"); //border
    RemoveClassElements(".close-ham-bar-btn", "js_ham_close_btn");
    RemoveClassElements(".text-slider-container span", "text-stroke-white");
};



// initial theme setup 
if (readThemeStatus == "black") {
    Run_black_theme();
}else{
    console.log("initial theme is set to white");
}




// get theme state

document.querySelector(".theme-change-btn").addEventListener("click", () => {
    console.log("clicked theme changer button");
    let theme_state = localStorage.getItem("Debuk_theme_state");
    if (theme_state == "white") {
        localStorage.setItem("Debuk_theme_state", "black");
        Run_black_theme();
    } else if (theme_state == "black") {
        localStorage.setItem("Debuk_theme_state", "white");
        Run_white_theme();
    }
});





// THEME BTN ANIMATION
document.querySelector(".theme-change-btn").addEventListener("click", () => {
    document.querySelector(".theme-change-btn").style.animation ="theme_btn_animation 0.6s ease-out";
    setTimeout(()=>{
        document.querySelector(".theme-change-btn").style.animation ="";
    }, 600);
});