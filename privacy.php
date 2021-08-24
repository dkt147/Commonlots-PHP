<?php
include("DB_connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Common Lots</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">



    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="fonts/neo fobia/stylefont.css" />

    <style>
        @media only screen and (max-width: 768px) {

            /* For mobile phones: */
            .abc {
                font-size: 12px;
            }
        }

        .bg-primary {
            background-color: rgb(130, 32, 117);
        }

        .section-heading h2:before,
        .section-heading h2:after {

            background: rgb(130, 32, 117);
        }

        .feature-item:hover {

            background: rgb(130, 32, 117);
        }

        .text-primary {
            color: rgb(130, 32, 117) !important;
        }

        .widget.gform_widget {
            padding: 1rem;
        }

        .main form,
        .widget.gform_widget,
        .wp-block-search {
            margin: 2rem auto;
            background: #e9ecef;
            clear: both;
        }

        .card-body,
        .main form,
        .widget.gform_widget,
        .wp-block-search {
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 auto;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1.25rem;
        }

        .card,
        .main form,
        .widget.gform_widget,
        .wp-block-search {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .sidebar .widget {
            margin-bottom: 2rem;
        }

        article,
        aside,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        nav,
        section {
            display: block;
        }

        *,
        :after,
        :before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        user agent stylesheet section {
            display: block;
        }

        body {
            font-family: var(--font-primary);
            overflow-x: hidden;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff;
        }

        :root {
            --body-color: #373a3c;
            --font-primary: 'Lato', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            --font-headings: 'Lato', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            --color-brand-primary: #146414;
            --color-brand-primary-hover: #0c3a0c;
            --color-brand-primary-lighter: #21a421;
            --color-brand-primary-darker: #072407;
            --color-brand-primary-islight: #146414;
            --color-brand-primary-isdark: #e4e4e4;
            --color-link: #0f33e2;
            --color-link-hover: #0c28b2;
            --color-link-lighter: #4a67f3;
            --color-link-darker: #0a239a;
            --color-button: #63b94b;
            --color-button-hover: #4f963b;
            --color-button-lighter: #93ce82;
            --color-button-darker: #458433;
            --color-text-on-primary: #ffffff;
        }

        :root {
            --wp-admin-theme-color: #007cba;
            --wp-admin-theme-color-darker-10: #006ba1;
            --wp-admin-theme-color-darker-20: #005a87;
        }

        :root {
            --color-black: #212529;
            --color-white: #fff;
            --color-gray-100: #f7f7f9;
            --color-gray-300: #dee2e6;
        }

        :root {
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #007bff;
            --secondary: #6c757d;
            --success: #28a745;
            --info: #17a2b8;
            --warning: #ffc107;
            --danger: #dc3545;
            --light: #f8f9fa;
            --dark: #343a40;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        *,
        :after,
        :before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        *,
        :after,
        :before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
    </style>

</head>

<body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->


        <?php include 'navbar.php' ?>

        <div style="height: 113px;"></div><br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-1">

                </div>
                <div class="col-md-9">
                    <h2>Privacy Policy</h2><br>
                    <div><a href="#">CommonLots.Net</a>, operates <a href="http://www.CommonLots.Net"> http://www.CommonLots.Net </a> (the “Site”). This page informs you of our policies regarding the collection, use, and disclosure of Personal Information we receive from users of the Site.<br><br> What information do we collect?<br><br> We collect information from you when you subscribe to our newsletter, fill out a form or submit property information.<br> While using our Site, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you.<br> Personally identifiable information may include but is not limited to your name, email, phone number, and investment area of interest (“Personal Information”). We collect your Personal Information when you subscribe to our newsletter or fill out a form on our website. These forms are not mandatory, and you may choose to visit the site as an anonymous user.<br><br> What do we use your information for?<br> Any of the information we collect from you may be used in one of the following ways:<br><br> • To process transactions<br> • To send periodic emails<br><br> The email address you provide may be used to send you information, respond to inquiries, and/or other requests or questions.<br><br> How do we protect your information?<br><br> We implement a variety of security measures to maintain the safety of your Personal Information when you enter, submit, or access your personal information. We adhere to strict security measures to ensure the safety of your personal information. While we strive to use commercially acceptable means to protect your Personal Information, we cannot guarantee its absolute security.<br> Our Secure Sockets Layer (SSL) software is the industry standard and among the best software available today for secure commerce transactions. It encrypts all of your personal information, including credit card number, name, and address, so that it cannot be read over the internet.<br><br> Do we disclose any information to outside parties?<br><br> We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others rights, property, or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses. Cookies<br><br> Cookies are files with a small amount of data, which may include an anonymous unique identifier. Cookies are sent to your browser from a web site and stored on your computer’s hard drive.<br> Like many sites, we use “cookies” to collect information. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Site.<br><br> Log Data<br><br> Like many site operators, we collect information that your browser sends whenever you visit our Site (“Log Data”).<br> This Log Data may include information such as your computer’s Internet Protocol (“IP”) address, browser type, browser version, the pages of our Site that you visit, the time and date of your visit, the time spent on those pages and other statistics.<br> In addition, we may use third party services such as Google Analytics and Facebook Pixel that collect, monitor and analyze this data to help us better understand our customers.<br><br> Third-party links<br><br> Occasionally, at our discretion, we may include or offer third-party products or services on our website. These third-party sites have separate and independent privacy policies. We, therefore, have no responsibility or liability for the content and activities of these linked sites. Nonetheless, we seek to protect the integrity of our site and welcome any feedback about these sites. Re-marketing<br> We may use third-party vendor re-marketing cookies, including but not limited to Facebook Pixel and Google Adwords tracking cookies. This may mean that we will show ads to you across the internet. We respect your privacy and are not collecting any of our information through the use of Facebook and Google’s re-marketing system.<br> Third-party vendors use cookies in web browsers to display ads based on past visitors to our website, and other similar websites. This allows us to provide special offers and continue to market our products and services to those who have shown interest.<br> We may also permit third-party vendors to help us create and manage our advertisements. These third-party vendors will not have access to your personal information. They may monitor ads and track user behavior. This website uses Google AdWords<br> We use Google AdWords on our website to re-market our products and services to previous users. This could be in the form of an advertisement on Google’s search page, or on any site in the Google Display Network. Google uses cookies to display ads based on past visits of this site and others similar to it. Any data collected by Google in this way is subject to our personal Privacy Policy and Google’s privacy policy.<br> California Online Privacy Protection Act Compliance Because we value your privacy we have taken the necessary precautions to be in compliance with the California Online Privacy Protection Act. We, therefore, will not distribute your personal information to outside parties without your consent.<br><br> Children’s Online Privacy Protection Act Compliance<br><br> We are in compliance with the requirements of COPPA (Children’s Online Privacy Protection Act), we do not collect any information from anyone under 13 years of age. Our website, products, and services are all directed to people who are at least 13 years old or older.<br><br> Personal, Financial, And Property Information<br><br> We are a real estate services firm that may require you to provide certain Personal Information so we can help you. This information may include your full name, address, phone number, and Social Security Number (specifically for tax-filing purposes) when purchasing a property from us. This information may include information about your finances to help us analyze and create a custom owner finance plan for you. This information is for our own use only, and will not be shared with any third parties unless it is required to help us solve your real estate problem and gain your permission.<br><br> Refund Policy<br><br> All Purchases are Non Refundable. It is the responsibility of the Purchaser “Buyer” to perform their own due diligence when purchasing property. All properties are Sold As Is without any warranties or representations of any kind or character, express or implied, with respect to the property represented or sold. CommonLots.Net does purchase their lots from private and whole sellers and in many cases these properties are purchased without verification of the previous ownership or status of the stated property sold. We always encourage our buyers to visit and vet each property by contacted the County where the property is located.<br><br> Online Privacy Policy Only<br><br> This online Privacy Policy applies only to information collected through our website and not to information collected offline.<br><br> Changes to our Privacy Policy<br><br> If we decide to change our Privacy Policy, we will post those changes on this page. We reserve the right to update or change our Privacy Policy at any time and you should check this Privacy Policy periodically. Your continued use of the Service after we post any modifications to the Privacy Policy on this page will constitute your acknowledgment of the modifications and your consent to abide and be bound by the modified Privacy Policy.<br><br> Contacting Us<br><br> If there are any questions regarding this privacy policy you may contact us with the information on our contact page.<br><br> How the Purchasing Process works with Our Properties:<br><br> A Buyer can either purchase one of our Lots for Cash Sale as shown or option to Purchase a Lot with a simple down payment and simple terms. Each Lot is sold differently with different terms. Any Buyer who options to purchase using our special financing terms will sign a Purchase Agreement and the terms and conditions outlined in the Purchase Agreement defines the amount of the sale of such property and the payment plan. The Buyer must submit the non refundable down payment first to reserve the property of choice. The Purchase Agreement will be sent to Buyer within 3 Business Days for Signature. First Payment is due either on the 1st or 15th of each month.<br><br> How To Buy Land with Owner Financing – No Credit Checks or Prepayment Fees!<br> Your Down payment and Documentation Fee is processed via credit/debit card.<br> We send you a Promissory Note, Contract for Deed, and a Land Sale Contract for your review through an electronic signing service called SignNow.<br> You review and sign the documents – everyone is automatically sent a signed copy.<br> We set up automatic monthly payments.<br> Your property is deeded to you with a Deed within 30 days of the property being paid in full. We will record the deed with the county, and send you the recorded deed for your records.<br><br> I think the key to the home page is Buying Affordable Land that is Easy, No Credit Check, Great Financing<br><br> I am going to get a few testimonials from some of my past customers too<br><br> This land is sold as-is and all information provided is to the best of the seller’s knowledge. We always recommend that the buyer perform their own due diligence to make sure the property meets their needs. Our properties move fast so contact us
                        quickly if there is a property you want to purchase.<br><br> <b>© 2020 <a href="#">CommonLots.Net</a><b></b>
                    </div><br><br>
<form>
                   <input type="checkbox" id="privacy" name="privacy" value="privacy" required>
<label for="privacy"> I have a read the privacy policy and agree to terms and condition</label><br>

     </form>         
 <?php
$id = $_GET['id'];
            $con = mysqli_connect("markg18140.domaincommysql.com", "real_state", "2439123Mm!", "real_state") or die("Query Failed!!!");
            $query = "SELECT * FROM `land` WHERE Id=$id";
            $res = mysqli_query($con, $query);

            while ($row = mysqli_fetch_assoc($res)) {
 echo $row['Price']; 
echo $row['Description'];
            ?>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="dk720820@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Land">
<input type="hidden" name="amount" value="320">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="rm" value="1">
<input type="hidden" name="return" value="http://www.commonlots.net/thankyou.php">
<input type="hidden" name="cancel_return" value="http://www.commonlots.net/index.php">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
<input type="hidden" name="notify_url" value="http://www.commonlots.net/listner.php">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

<?php
}
?>
  </div>
                <div class="col-md-2">

                </div>
            </div>
        </div>

        <div class="site-section bg-light">

        </div>

        <?php include 'footer.php' ?>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>


    <script src="js/mediaelement-and-player.min.js"></script>

    <script src="js/main.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var mediaElements = document.querySelectorAll('video, audio'),
                total = mediaElements.length;

            for (var i = 0; i < total; i++) {
                new MediaElementPlayer(mediaElements[i], {
                    pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                    shimScriptAccess: 'always',
                    success: function() {
                        var target = document.body.querySelectorAll('.player'),
                            targetTotal = target.length;
                        for (var j = 0; j < targetTotal; j++) {
                            target[j].style.visibility = 'visible';
                        }
                    }
                });
            }
        });
    </script>


    <script>
        // This example displays an address form, using the autocomplete feature
        // of the Google Places API to help users fill in the information.

        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

        var placeSearch, autocomplete;
        var componentForm = {
            street_number: 'short_name',
            route: 'long_name',
            locality: 'long_name',
            administrative_area_level_1: 'short_name',
            country: 'long_name',
            postal_code: 'short_name'
        };

        function initAutocomplete() {
            // Create the autocomplete object, restricting the search to geographical
            // location types.
            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */
                (document.getElementById('autocomplete')), {
                    types: ['geocode']
                });

            // When the user selects an address from the dropdown, populate the address
            // fields in the form.
            autocomplete.addListener('place_changed', fillInAddress);
        }

        function fillInAddress() {
            // Get the place details from the autocomplete object.
            var place = autocomplete.getPlace();

            for (var component in componentForm) {
                document.getElementById(component).value = '';
                document.getElementById(component).disabled = false;
            }

            // Get each component of the address from the place details
            // and fill the corresponding field on the form.
            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }
        }

        // Bias the autocomplete object to the user's geographical location,
        // as supplied by the browser's 'navigator.geolocation' object.
        function geolocate() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var geolocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    var circle = new google.maps.Circle({
                        center: geolocation,
                        radius: position.coords.accuracy
                    });
                    autocomplete.setBounds(circle.getBounds());
                });
            }
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete" async defer></script>

</body>

</html>