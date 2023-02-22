<?php 
include "./pageComponent/variableNDPath.php";
$style_sheet="./app/scss/dist/FAQ.css";
$page_title="Knigi - FAQ";
include $head;

?>
<body>
    <?php include $nav; ?>

    
    <section>
        <h1 class="section-header">FAQ</h1>
        <div class="FAQ-item center-horizontally">
            <h3 class="FAQ-h3">SHIPPING</h3>
            <p class="FAQ-p">
                Shipments are batched twice a week from our fulfillment center in Burnaby, BC. Orders received by
                9am on Monday and Wednesday mornings will ship the following day. All orders received after 9am 
                on Wednesday mornings will ship on Tuesday morning of the following week. Please allow 3-10 days
                for orders shipping within the United States, and 2-3 weeks for international orders.For more 
                information regarding shipping policies please see our TERMS & CONDITIONS. <br> <br> Tracking is included for
                all orders within the US and to the following countries internationally: Australia, Belgium, 
                Brazil, Croatia, Denmark, Estonia, Finland, France, Gibraltar, Germany, Hungary, Israel, Italy,
                Latvia, Lebanon, Lithuania, Luxembourg, Malaysia, Malta, Netherlands, New Zealand, Norway, 
                Portugal, Singapore, Slovak Republic, Spain, Switzerland, Turkey, Great Britain, and Northern 
                Ireland.
            </p>
            <h3 class="FAQ-h3">BECOMING A STOCK LIST</h3>
            <p class="FAQ-p">
                We’re thrilled you would like to carry Woven! Orders can be made directly from our Wholesale Shop, 
                or contact us at <span class="FAQ-link">STOCKISTS@WOVENMAGAZINE.COM</span> with questions.
            </p>
            <hr>
            <br>
            <p class="FAQ-p">
                For any questions or comments you may have please contact: <br> <span class="FAQ-link">STOCKISTS@WOVENMAGAZINE.COM</span> 
            </p>
        </div>
    </section>


    <?php include $footer; ?>
    
</body>
</html>