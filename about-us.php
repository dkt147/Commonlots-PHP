<?php
ob_start();
session_start();
 $con = mysqli_connect("markg18140.domaincommysql.com", "real_state", "2439123Mm!", "real_state");
// Check if image file is a actual image or fake image
if (isset($_POST["searchland"])) {

    $area = $_POST['area'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `search-land`(`State`, `Name`, `Phone`, `Email`) VALUES('$area','$fname','$phone','$email')";
    $res = mysqli_query($con, $sql);
    if ($res == TRUE) {

        header("Location: http://www.commonlots.net/index.php");
    } else {

        echo "<script>alert('Search Failed')</script>";
    }
}

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
                <div class="col-md-8">
                    <h1><b>CommonLots.Net!</b></h1><br>
                    <video width="750" height="515" controls>
                        <source src="Final.mp4" type="video/mp4">
                    </video>
                    <br><br>

                    <br>
                    <br>
                    <h1><b>How To Buy Land with Cash – this is the Fastest Way to Make the Property Yours!</b></h1><br>
                    <p>
                        <ol>
                            <li>We send you a Land Sale Contract for your review through an electronic signing service called SignNow.</li>
                            <li>You review and sign the documents – everyone is automatically sent a signed copy.</li>
                            <li>We sign and notarize a Warranty Deed granting the property to you, evidenced by a picture or video.</li>
                            <li>Your payment (Cash price and Documentation Fee) is processed via credit/debit card.</li>
                            <li>When payment is received we immediately send the deed to be recorded. Most counties will finish recording within 2 days. We will send you the recorded deed for your records.</li>

                        </ol>
                    </p><br><br><br>
                    <hr><br><br>
                    <div style="margin-left:150px" class="wp-block-media-text alignwide is-stacked-on-mobile is-image-fill has-white-background-color has-background" style="grid-template-columns:38% auto">
                    </div><br>
                        <img width="150%"  src="images/03-01.jpg">
<br><br><br>

                        If you decide you want another property in our inventory within 90 days, we will move your previous payments to that new property. If, within 90 days of signing, you aren’t satisfied with your property purchase, let us know.<br><br>

                        We will refund you all the money paid for your property, AND grant you a $100 credit towards your next land purchase with us.<br><br>

                        <b>No risk! Satisfaction guaranteed!</b><br><br>

                        Note that if you purchase our property through a title company, this Guarantee does not apply. The Guarantee applies for direct cash or owner financing purchases only.<br><br>

                        <h3>Have Questions About How to Buy Land? Contact Us</h3>
                        <h3 style="text-align:center; color:blue"><b>sales@commonlots.net</b></h3>
                    </p>
                </div>
                <div class="col-md-4">
                    <h3 style="margin-left: 50px;"><b>Testimonials</b></h3><br>
                    <h6 style="width: 350px;margin-left: 50px;"><strong>Professional and no problems that you would usually encounter purchasing land</strong>. I checked the land to the state and county parcels and all was in order. The method Compass Land uses to secure payment and documents so that you have <strong>no fear of being done wrong</strong> is outstanding and <strong>I wish more businesses would use these standards</strong>.</h6><br><br>
                    <h6 style="margin-left: 50px;"><em>— David Reynolds, Colorado Land Buyer</em></h6><br>
                    <figure class="alignleft is-resized" style="margin-left: 50px;"><img loading="lazy" src="https://cdn.carrot.com/uploads/sites/42930/2020/01/5StarsYellow-e1578680404274.png" alt="5 Star Review" class="wp-image-1725" width="188" height="45"></figure><br><br> <img src="images/brand.jpeg" style="border: 0;margin-left: 50px;" alt="International Compass Land BBB Business Review"><br><br>
                    <br>
                    <section class="widget module gform_widget-3 gform_widget" style="margin-left: 50px;width:350px">
                        <h3>Are You Looking for Land?</h3>
                        <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_1">
                            <div id="gf_1" class="gform_anchor" tabindex="-1"></div>
                            <form method="post" enctype="multipart/form-data" id="gform_1" action="about-us.php"><input type="hidden" name="gform_return_access" value="true">
                                <div class="gform_heading">
                                    <span class="gform_description">New properties are added weekly. Fill out the short form below to see all properties and get your exclusive weekly land deals.</span>
                                </div><br>
                                <div class="gform_body">
                                    <ul id="gform_fields_1" class="gform_fields top_label form_sublabel_below description_below">
                                        <li id="field_1_7" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_7">State You're Interested In<span class="gfield_required">*</span></label>
                                            <div class="ginput_container ginput_container_select">
                                                <select name="area" id="input_1_7" class="medium gfield_select" aria-required="true" aria-invalid="false">
                                                    <option value="...">...</option>
                                                    <?php

                                                     $con = mysqli_connect("markg18140.domaincommysql.com", "real_state", "2439123Mm!", "real_state")  or die("Query Failed!!!");
                                                    $query = "SELECT * FROM `category`";
                                                    $res = mysqli_query($con, $query);

                                                    while ($row = mysqli_fetch_assoc($res)) {
                                                    ?>
                                                        <option value="<?php echo $row['Name'] ?>"><?php echo $row['Name'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select></div>
                                        </li>
                                        <li id="field_1_4" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label gfield_label_before_complex">Name<span class="gfield_required">*</span></label>
                                            <div class="ginput_complex ginput_container no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name" id="input_1_4">

                                                <span id="input_1_4_3_container" class="name_first">
                                                    <input type="text" name="fname" id="input_1_4_3" value="" aria-label="First name" aria-required="true" aria-invalid="false">
                                                    <label for="input_1_4_3">First</label>
                                                </span>

                                                <span id="input_1_4_6_container" class="name_last">
                                                    <input type="text" name="lname" id="input_1_4_6" value="" aria-label="Last name" aria-required="true" aria-invalid="false">
                                                    <label for="input_1_4_6">Last</label>
                                                </span>

                                            </div>
                                        </li>
                                        <li id="field_1_2" class="gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_2">Phone (opt.)</label>
                                            <div class="ginput_container ginput_container_text">
                                                <input name="phone" id="input_1_2" type="text" value="" class="small" aria-invalid="false"></div>
                                        </li>
                                        <li id="field_1_3" class="gfield gf_right_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_3">Email<span class="gfield_required">*</span></label>
                                            <div class="ginput_container ginput_container_email">
                                                <input name="email" id="input_1_3" type="email" value="" class="small" aria-required="true" aria-invalid="false">
                                            </div>
                                        </li>
                                        <br>
                                    </ul>
                                </div>
                                <div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_1" name="searchland" class="gform_button button btn btn-info" style="margin-left: 40px;" value="Show Me Available Land ››">
                                    <input type="hidden" class="gform_hidden" name="is_submit_1" value="1">
                                    <input type="hidden" class="gform_hidden" name="gform_submit" value="1">

                                    <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
                                    <input type="hidden" class="gform_hidden" name="state_1" value="WyJbXSIsIjU2MTVjN2VlOTYzMzE4OGM5YWIwOGM4MzBiODdkYmM5Il0=">
                                    <input type="hidden" class="gform_hidden" name="gform_target_page_number_1" id="gform_target_page_number_1" value="0">
                                    <input type="hidden" class="gform_hidden" name="gform_source_page_number_1" id="gform_source_page_number_1" value="1">
                                    <input type="hidden" name="gform_field_values" value="">

                                </div>
                            </form>
                        </div>
                        <script type="text/javascript">
                            jQuery(document).bind('gform_post_render', function(event, formId, currentPage) {
                                if (formId == 1) {}
                            });
                            jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit) {});
                        </script>
                        <script type="text/javascript">
                            jQuery(document).ready(function() {
                                jQuery(document).trigger('gform_post_render', [1, 1])
                            });
                        </script>
                    </section>
                </div>
            </div>
        </div>

        <div class="site-section bg-light">

        </div>

        <?php include 'footer.php' ?>
    </div>
<?php 
ob_flush();
?>
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