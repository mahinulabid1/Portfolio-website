let counter = 1;

setInterval(() => {
    document.querySelector(`.image_${counter}`).style.animation = "fadeOut 2s linear";
    document.querySelector(`.image_${counter}`).style.opacity = "0";
    counter++;

    if (counter == 4) {
        counter = 1;
    }
    console.log("counter is" + counter);
    document.querySelector(`.image_${counter}`).style.opacity = "1";
    document.querySelector(`.image_${counter}`).style.animation = "fadeIn 2s linear";

}, 4000);