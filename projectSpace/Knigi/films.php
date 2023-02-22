<?php 
include "./pageComponent/variableNDPath.php";
$style_sheet= "./app/scss/dist/film.css";
$page_title="Knigi - Films";
include $head;
?>
<body>
    <?php include $nav; ?>

    <section class="films">
        <div class="video-section">
            <video controls class="center-horizontally">
                <source src="./app/img/videoplayback.mp4" type="video/mp4">
            </video>
        </div>
    </section>

    <?php include $footer; ?>
    
</body>
</html>