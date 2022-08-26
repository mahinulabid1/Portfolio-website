<?php
error_reporting(0);
ini_set('display_errors', 0);
?>

<?php
$arrow_icon = '<svg class="arrow-icon-normal" height="15" viewBox="0 0 74 62" fill="none">
<path d="M0 26.04V35.712H55.3767L36.3833 54.684L43.4133 61.752L74 30.876L43.4133 0L36.63 6.944L55.6233 26.04H0Z" fill="#070606"/>
</svg>
';
$arrow_icon_big = '<svg class="arrow-icon-big" width="32" viewBox="0 0 74 62" fill="none">
<path d="M0 26.04V35.712H55.3767L36.3833 54.684L43.4133 61.752L74 30.876L43.4133 0L36.63 6.944L55.6233 26.04H0Z" fill="#070606"/>
</svg>
';


$instagram_icon_footer = '<svg class="instagram-icon-footer" width="21" height="21" viewBox="0 0 21 21" fill="none">
<path d="M10.5 1.89263C13.3035 1.89263 13.636 1.90313 14.7438 1.95388C17.5893 2.08337 18.9184 3.4335 19.0479 6.258C19.0986 7.36487 19.1082 7.69738 19.1082 10.5009C19.1082 13.3053 19.0977 13.6369 19.0479 14.7438C18.9175 17.5656 17.5919 18.9184 14.7438 19.0479C13.636 19.0986 13.3053 19.1091 10.5 19.1091C7.6965 19.1091 7.364 19.0986 6.25712 19.0479C3.40462 18.9175 2.0825 17.5613 1.953 14.7429C1.90225 13.636 1.89175 13.3044 1.89175 10.5C1.89175 7.6965 1.90313 7.36487 1.953 6.25712C2.08338 3.4335 3.409 2.0825 6.25712 1.953C7.36487 1.90313 7.6965 1.89263 10.5 1.89263ZM10.5 0C7.64838 0 7.29138 0.01225 6.17137 0.063C2.35813 0.238 0.238875 2.35375 0.063875 6.1705C0.01225 7.29138 0 7.64838 0 10.5C0 13.3516 0.01225 13.7095 0.063 14.8295C0.238 18.6427 2.35375 20.762 6.1705 20.937C7.29138 20.9877 7.64838 21 10.5 21C13.3516 21 13.7095 20.9877 14.8295 20.937C18.6392 20.762 20.7638 18.6462 20.9361 14.8295C20.9877 13.7095 21 13.3516 21 10.5C21 7.64838 20.9877 7.29138 20.937 6.17137C20.7655 2.36162 18.6471 0.238875 14.8304 0.063875C13.7095 0.01225 13.3516 0 10.5 0V0ZM10.5 5.10825C7.52238 5.10825 5.10825 7.52238 5.10825 10.5C5.10825 13.4776 7.52238 15.8926 10.5 15.8926C13.4776 15.8926 15.8918 13.4785 15.8918 10.5C15.8918 7.52238 13.4776 5.10825 10.5 5.10825ZM10.5 14C8.56713 14 7 12.4338 7 10.5C7 8.56713 8.56713 7 10.5 7C12.4329 7 14 8.56713 14 10.5C14 12.4338 12.4329 14 10.5 14ZM16.1052 3.63563C15.4088 3.63563 14.8444 4.2 14.8444 4.89562C14.8444 5.59125 15.4088 6.15562 16.1052 6.15562C16.8009 6.15562 17.3644 5.59125 17.3644 4.89562C17.3644 4.2 16.8009 3.63563 16.1052 3.63563Z" fill="#070606"/>
</svg>
';

$twitter_icon_footer = '<svg class="twitter-icon-footer" width="24" height="21" viewBox="0 0 24 21" fill="none">
<path d="M24 2.48611C23.117 2.90817 22.168 3.19242 21.172 3.32055C22.189 2.66484 22.97 1.62582 23.337 0.387613C22.386 0.994873 21.332 1.43632 20.21 1.67427C19.313 0.643868 18.032 0 16.616 0C13.437 0 11.101 3.1935 11.819 6.50866C7.728 6.28794 4.1 4.1776 1.671 0.970109C0.381 3.35285 1.002 6.4699 3.194 8.04835C2.388 8.02035 1.628 7.7824 0.965 7.3851C0.911 9.84106 2.546 12.1387 4.914 12.6502C4.221 12.8526 3.462 12.9 2.69 12.7406C3.316 14.8466 5.134 16.3788 7.29 16.4219C5.22 18.1693 2.612 18.95 0 18.6183C2.179 20.1225 4.768 21 7.548 21C16.69 21 21.855 12.6868 21.543 5.23062C22.505 4.48231 23.34 3.54881 24 2.48611Z" fill="#070606"/>
</svg>
';
?>
<footer class="bound">
    <div class="footer-flex-container display-flex d-flex-space-between">
        <div class="footer-flex-item">
            <h1 class="big-heading"> <?php echo $footer_heading_text; ?> </h1>
            <a href="#" class="footer-link-take-action normal-heading" style="text-align: left;"> <?php echo $footer_main_btn_text;
                                                                                                    echo $arrow_icon_big; ?> </a>
            <?php
            $is_it_contact_footer;
            if ($is_it_contact_footer == true) {
                echo "<p class='normal-heading'>Email address</p>";
            }
            ?>

            <a class="footer-email " href="mailto:contact@debukstudio.com">contact@debukstudio.com</a>
        </div>

        <div class="footer-flex-item">
            <div class="fist_link-list">
                <a href="./index.php" class="display-block footer-links-a footer-link-border paragraph-text-regular">Home <?php echo $arrow_icon; ?></a>
                <a href="./About.php" class="display-block footer-links-a footer-link-border paragraph-text-regular">About <?php echo $arrow_icon; ?></a>
                <a href="project_page.php" class="display-block footer-links-a footer-link-border paragraph-text-regular">Project <?php echo $arrow_icon; ?></a>
                <a href="./services.php" class="display-block footer-links-a footer-link-border paragraph-text-regular">Services <?php echo $arrow_icon; ?></a>
                <a href="./contact.php" class="display-block footer-links-a footer-link-border paragraph-text-regular">Contact <?php echo $arrow_icon; ?></a>
            </div>

            <div class="second_link-list">
                <div class="display-flex Coming-soon-container footer-link-border d-flex-space-between">
                    <p class="footer-links-a comming-soon-text paragraph-text-regular">Coming Soon</p>
                    <a href="#" class="display-block footer-links-a paragraph-text-regular">Shop <?php echo $arrow_icon; ?></a>
                </div>

            </div>
        </div>

    </div>

    <div class="footer-copyright display-flex d-flex-space-between">
        <div class="footer-copyright-item">©2022 debukstudio</div>
        <div class="footer-copyright-item">
            <a href="#"><?php echo $instagram_icon_footer; ?> </a>
            <a href="#"><?php echo $twitter_icon_footer; ?> </a>

        </div>
    </div>
</footer>