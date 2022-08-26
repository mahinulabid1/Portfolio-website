<?php  ?>
<script src="./butter.js/src/butter.js"></script>
<script>
    const butterInitialize = () => {
        butter.init({
            cancelOnTouch: false
        });
    };

    if (window.screen.width > 834) {
        butterInitialize();
    }
    window.addEventListener("resize", () => {
        if (window.screen.width > 834) {
            butterInitialize();
        }
    });
</script>