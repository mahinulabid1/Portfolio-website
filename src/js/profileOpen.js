let ProfileFunction= (()=>{
    let btnOne = document.querySelector(".m-b-pro");
    let aboutmeTopbtn = document.querySelector(".aboutme-top-nav-btn");
    let closeBtn = document.getElementById("close-btn");
    let OpenFunction= ()=>{
        console.log("open fucntion executed");
        document.querySelector(".full-profile-section").style.display= "block";
    }
    let CloseFunction= ()=>{
        console.log("open fucntion executed");
        document.querySelector(".full-profile-section").style.display= "none";
    }
    aboutmeTopbtn.addEventListener("click", OpenFunction);
    btnOne.addEventListener("click", OpenFunction);
    closeBtn.addEventListener("click", CloseFunction);
})();