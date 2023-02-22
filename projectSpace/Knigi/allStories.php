<?php
$style_sheet = "./app/scss/dist/style.css";
$page_title = "KNIGI- Home";
include "./pageComponent/_head.php";

?>


<body>
    <?php
    include "./pageComponent/_navigation.php";
    echo "<br> <br> <br>";
    include "./pageComponent/_stories.php";
    ?>

    <?php 
    include "./pageComponent/_blogPost_summary.php";
    include "./pageComponent/_footer.php" 
    ?>
    
</body>

</html>