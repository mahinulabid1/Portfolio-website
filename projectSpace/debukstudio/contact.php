<!DOCTYPE html>
<html lang="en-US">
<?php $nothing = '<svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.0022 22.3285C16.98 22.3285 21.8333 17.4752 21.8333 11.4973C21.8333 5.51949 16.98 0.667236 11.0022 0.667236C5.02542 0.667236 0.172089 5.51949 0.172089 11.4973C0.172089 17.4752 5.02542 22.3285 11.0022 22.3285ZM11.0022 20.7035C5.92134 20.7035 1.79709 16.5782 1.79709 11.4973C1.79709 6.41649 5.92134 2.29224 11.0022 2.29224C16.083 2.29224 20.2083 6.41649 20.2083 11.4973C20.2083 16.5782 16.083 20.7035 11.0022 20.7035ZM11.0022 13.6618C10.5537 13.6618 10.1897 13.2978 10.1897 12.8493V6.89099C10.1897 6.44249 10.5537 6.07849 11.0022 6.07849C11.4507 6.07849 11.8147 6.44249 11.8147 6.89099V12.8493C11.8147 13.2978 11.4507 13.6618 11.0022 13.6618ZM11 16.9118C11.598 16.9118 12.0833 16.4265 12.0833 15.8285C12.0833 15.2305 11.598 14.7452 11 14.7452C10.402 14.7452 9.91667 15.2305 9.91667 15.8285C9.91667 16.4265 10.402 16.9118 11 16.9118Z" fill="#EB5757"/>
</svg>
' ?>

<head>

    <!-- REUSEABLE HEADER INFO -->
    <?php
    // Specify the current page to update info in header
    $current_page_head = "Contact";
    $location_to_logo_icon = "./source/media/web_title_icon.png";
    include "./source/_modules/head_info.php";
    ?>

    <!-- main stylesheet -->
    <link rel="stylesheet" href="./source/css/contact.css">


    <!-- navigation bar -->
    <link rel="stylesheet" href="./source/css/navigation_bar.css">

    <!-- loading section CSS -->
    <link rel="stylesheet" href="./source/css/loading_section.css">

</head>

<body>
    <!-- adding loading state -->
    <?php include "./source/_modules/loading_section.php"; ?>

    <!-- butter.js container start here -->
    <div class="butter-js-container" id="butter">
        <header class="bound">

            <!-- REUSEABLE NAVIGATION BAR -->
            <?php
            // SETTING UP REUSEABLE NAVIGATION BAR AND ITS PATH
            $nav_first_link_text = "Home";
            $nav_first_link_path = "./index.php";

            $nav_second_link_text = "Services";
            $nav_second_link_path = "./services.php";

            $nav_third_link_text = "About";
            $nav_third_link_path = "./About.php";
            include "./source/_modules/navigation_bar.php";
            ?>



            <!-- HERO CONTENT -->
            <div class="hero-content-container">
                <h1 class="big-heading hero-heading">Contact</h1>
                <h2 class="normal-heading hero-sub-heading">Let’s talk about your next big brand.</h2>
            </div>

        </header>

        <section class="form-container bound">
            <form action="#" class="form-js" onsubmit=" return validateForm()">

                <div class="display-flex d-flex-space-between d-flex-wrap-true">

                    <div class="form-flex-item">
                        <label class="paragraph-text" for="full_name">Full name *</label>
                        <input class="paragraph-text full-name" type="text" id="full_name" name="full_name" placeholder="e.g. John Smith">
                    </div>

                    <div class="form-flex-item">
                        <label class="paragraph-text" for="Email">Email *</label>
                        <input class="paragraph-text js-email" type="text" id="Email" name="email" placeholder="you@company">
                    </div>

                </div>

                <div class="display-flex d-flex-space-between d-flex-wrap-true">

                    <div class="form-flex-item">
                        <label class="paragraph-text" for="subject">Subject *</label>
                        <input class="paragraph-text" type="text" list="subject_list" id="subject" name="subject" placeholder="Branding">
                        <datalist id="subject_list" class="paragraph-text">
                            <option value="Branding" class="paragraph-text">
                            <option value="Branding & Printed Media" class="paragraph-text">
                            <option value="Web Design & development" class="paragraph-text">
                            <option value="Branding, Printed Media & Web Design & Development" class="paragraph-text">
                            <option value="Brand Consultancy" class="paragraph-text">
                        </datalist>
                    </div>

                    <div class="form-flex-item">
                        <label class="paragraph-text" for="budget">Budget *</label>
                        <input class="paragraph-text js-budget" type="number" id="budget" name="budget" placeholder="6000e">
                    </div>

                </div>

                <label class="paragraph-text" for="message">Message *</label>
                <textarea class="paragraph-text" name="message" id="message" placeholder="Dear Debuk Studio,"></textarea>


                <input class="submit-btn paragraph-text" type="submit" value="Send →">
            </form>
        </section>


        <!-- form validation -->
        <script>
            const js_budget = document.querySelector(".js-budget");

            budget_validation = ()=>{
                let value = js_budget.value;
                if (value < 6000) {
                    js_budget.classList.add("js-form-error");
                    js_budget.style.background = "url('./source/media/Ex.png')";
                    js_budget.style.backgroundRepeat = "no-repeat";
                    js_budget.style.backgroundPosition = "98% center";
                    return false;
                } else if (value > 6000) {
                    return true;
                }
            }




            const inputFieldText_Number = document.querySelectorAll("input[type='number'], input[type='text'], textarea");
            let input_validation_status = "";

            const check_input_validation = () => {
                let array_of_input_validation = [];
                for (let counter = 0; counter < inputFieldText_Number.length; counter++) {
                    let selected_inputFieldText_Number = inputFieldText_Number[counter];
                    if (selected_inputFieldText_Number.value == "") {
                        selected_inputFieldText_Number.classList.add('js-form-error');
                        selected_inputFieldText_Number.style.background = "url('./source/media/Ex.png')";
                        selected_inputFieldText_Number.style.backgroundRepeat = "no-repeat";
                        selected_inputFieldText_Number.style.backgroundPosition = "98% center";
                        array_of_input_validation.push("false");
                    }
                }
                if (array_of_input_validation[0] == "false" || array_of_input_validation[1] == "false" || array_of_input_validation[2] == "false" || array_of_input_validation[3] == "false" || array_of_input_validation[4] == "false" || js_budget.value < 6000) {

                    input_validation_status = false;
                    console.log(input_validation_status);
                } else {
                    input_validation_status = true;
                    console.log(input_validation_status);
                }
                console.log(array_of_input_validation);
            }

            const check_email_validation = () => {
                let js_email = document.querySelector(".js-email")
                let email_value = document.querySelector(".js-email").value;
                let if_it_Contain_emailsMark = email_value.match("@");
                if (if_it_Contain_emailsMark == null) {
                    js_email.classList.add("js-form-error");
                    js_email.style.background = "url('./source/media/Ex.png')";
                    js_email.style.backgroundRepeat = "no-repeat";
                    js_email.style.backgroundPosition = "98% center";
                    return false;
                } else {
                    return true;
                }
            };

            const validateForm = () => {
                check_input_validation();
                let budget_status = budget_validation();
                console.log(budget_status);
                let emailValidation = check_email_validation();
                console.log(input_validation_status);
                if (input_validation_status == false && emailValidation == false) {
                    console.log("false and");
                    return false;
                } else if (input_validation_status == false || emailValidation == false || budget_status == false) {
                    console.log("false or");
                    return false;
                } else if (emailValidation == true && input_validation_status != false && budget_status == true) {
                    console.log("true and");
                    return true;
                }
            }
        </script>


        <!-- INCLUDE FOOTER -->
        <?php
        $is_it_contact_footer = true;
        $footer_heading_text = "";
        $footer_main_btn_text = "";
        include "./source/_modules/footer.php";
        ?>


    </div>
    <!-- butter.js container ended here -->


    <script src="./source/js/theme.js"></script>
    <script src="./source/js/loading.js"></script> <!-- adding loading js -->

    <!-- implemented the butter.js library -->
    <?php include "./source/_modules/butter_js_implement.php" ?>
</body>


</html>