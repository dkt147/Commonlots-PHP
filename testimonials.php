<?php
ob_start();
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
                <div class="col-md-8">
                    <h2>HEAR FROM OUR CUSTOMERS!</h2><br>
<h3>Please take a moment to review some of our customer testimonials.!</h3>
                    <p>It’s important to us that land investors and buyers we work with have a great experience with us. In the end, we’re not happy if we’re not able to provide you with the solution you want. So, check out our testimonials to see what others have said about us.
Want to share your own experience with us? Send us a note to let us know what working with Compass Land USA has been like for you.<br>

                        Want to share your own experience with us? Send us a note to let us know what working with Compass Land USA has been like for you.</p><br>
                   <br>
<hr>
                    <br>
                    <blockquote class="blockquote">

                        <p>Enjoy the whole process! It was so easy to do all the paperwork. <strong>Andrew took care of everything!</strong> Thank you Andrew.</p>



                        <p><em>— Vicky Grantham, Colorado Land Buyer</em></p>



                        <div class="wp-block-image">
                            <figure class="alignleft is-resized"><img loading="lazy" src="https://cdn.carrot.com/uploads/sites/42930/2020/01/5StarsYellow-e1578680404274.png" alt="5 Star Review" class="wp-image-1725" width="188" height="45"></figure>
                        </div>



                        <p></p>
                        <footer class="text-right">
                            <small>
                                <span>Vicky Grantham</span>
                            </small>
                        </footer>
                    </blockquote><br><br>
                    <blockquote class="blockquote">

                        <p>Enjoy the whole process! It was so easy to do all the paperwork. <strong>Andrew took care of everything!</strong> Thank you Andrew.</p>



                        <p><em>— Vicky Grantham, Colorado Land Buyer</em></p>



                        <div class="wp-block-image">
                            <figure class="alignleft is-resized"><img loading="lazy" src="https://cdn.carrot.com/uploads/sites/42930/2020/01/5StarsYellow-e1578680404274.png" alt="5 Star Review" class="wp-image-1725" width="188" height="45"></figure>
                        </div>



                        <p></p>
                        <footer class="text-right">
                            <small>
                                <span>Vicky Grantham</span>
                            </small>
                        </footer>
                    </blockquote><br><br>
                    <blockquote class="blockquote">

                        <p>Enjoy the whole process! It was so easy to do all the paperwork. <strong>Andrew took care of everything!</strong> Thank you Andrew.</p>



                        <p><em>— Vicky Grantham, Colorado Land Buyer</em></p>



                        <div class="wp-block-image">
                            <figure class="alignleft is-resized"><img loading="lazy" src="https://cdn.carrot.com/uploads/sites/42930/2020/01/5StarsYellow-e1578680404274.png" alt="5 Star Review" class="wp-image-1725" width="188" height="45"></figure>
                        </div>



                        <p></p>
                        <footer class="text-right">
                            <small>
                                <span>Vicky Grantham</span>
                            </small>
                        </footer>
                    </blockquote><br><br>
                    <blockquote class="blockquote">

                        <p>Enjoy the whole process! It was so easy to do all the paperwork. <strong>Andrew took care of everything!</strong> Thank you Andrew.</p>



                        <p><em>— Vicky Grantham, Colorado Land Buyer</em></p>



                        <div class="wp-block-image">
                            <figure class="alignleft is-resized"><img loading="lazy" src="https://cdn.carrot.com/uploads/sites/42930/2020/01/5StarsYellow-e1578680404274.png" alt="5 Star Review" class="wp-image-1725" width="188" height="45"></figure>
                        </div>



                        <p></p>
                        <footer class="text-right">
                            <small>
                                <span>Vicky Grantham</span>
                            </small>
                        </footer>
                    </blockquote><br><br>
                    <blockquote class="blockquote">

                        <p>Enjoy the whole process! It was so easy to do all the paperwork. <strong>Andrew took care of everything!</strong> Thank you Andrew.</p>



                        <p><em>— Vicky Grantham, Colorado Land Buyer</em></p>



                        <div class="wp-block-image">
                            <figure class="alignleft is-resized"><img loading="lazy" src="https://cdn.carrot.com/uploads/sites/42930/2020/01/5StarsYellow-e1578680404274.png" alt="5 Star Review" class="wp-image-1725" width="188" height="45"></figure>
                        </div>



                        <p></p>
                        <footer class="text-right">
                            <small>
                                <span>Vicky Grantham</span>
                            </small>
                        </footer>
                    </blockquote><br><br>
                    <blockquote class="blockquote">

                        <p>Enjoy the whole process! It was so easy to do all the paperwork. <strong>Andrew took care of everything!</strong> Thank you Andrew.</p>



                        <p><em>— Vicky Grantham, Colorado Land Buyer</em></p>



                        <div class="wp-block-image">
                            <figure class="alignleft is-resized"><img loading="lazy" src="https://cdn.carrot.com/uploads/sites/42930/2020/01/5StarsYellow-e1578680404274.png" alt="5 Star Review" class="wp-image-1725" width="188" height="45"></figure>
                        </div>



                        <p></p>
                        <footer class="text-right">
                            <small>
                                <span>Vicky Grantham</span>
                            </small>
                        </footer>
                    </blockquote><br><br>
                    <hr><br><br>
<img src="images/05-01.jpg" width="140%"><br><br>
                    <h1>Frequently Asked Questions (FAQ)</h1>
                    <h3>Questions to Ask When Buying Land</h3><br><br>
                    You probably have some questions. That’s okay, a lot of people do. Here is a collection of questions that we get asked regularly, along with our answers.<br><br>

                    If your question isn’t listed below, don’t hesitate to contact us or call us at support@commonlots.net. We’ll be happy to answer any questions you have.<br><br>

                    <b>Q: How do I make an offer on a property?</b><br><br>

                    A: You can use the ‘Buy Now’ button on the listing page to buy the property with cash. You can use the ‘Buy With Financing’ button on the listings page to submit the down payment and Documentation Fee for owner financing. Otherwise, you can email support@commonlots.net All offers are on a first come first served basis, so don’t wait!<br><br>

                    <b>Q: What is the ‘Buy Now’ button?</b><br><br>

                    A: This allows you to purchase the property at the listed cash price immediately through our website with a safe and secure checkout. Click this button, and you will be directed to the checkout page where you will submit the total cash price of the property with your debit or credit card. If you would like to pay with a different method you can contact support@commonlots.net<br><br>

                    <b>Q: How do I buy the property with cash?</b><br><br>

                    A: This is the quickest way to make the property yours. It goes like this: 1) We send you a Land Sale Contract for your review through an electronic signing service called SignNow. 2) Buyer and Seller will review and sign the documents. 3) We sign and notarize a Warranty Deed deeding the property to you and let you know when this is done ) Your payment is processed (credit/debit card, direct wire, PayPal, regular check or electronic check). 5) When payment is received we immediately send the deed to be recorded. Most counties will finish recording within 7-14 days<br><br>

                    <b>Q: What is the ‘Buy With Financing’ button?</b><br><br>

                    A: Similar to the ‘Buy Now’ button, this allows you to purchase the property at the listed owner financing plan immediately through our website via the safe and secure checkout page. Click this button to go to the checkout page where you will submit the listed down payment and Documentation Fee with your debit or credit card to secure your property and make sure it can’t get sold to someone else.<br><br>

                    <b>Q: How do I buy the property with owner financing?</b><br><br>

                    A: Here are the steps:<br><br> 1) We send you a Promissory Note, Contract for Deed, and a Land Sale Contract for your review through an electronic signing service called SignNow.<br> 2) Buyer & Seller will review and sign the documents.<br> 3) Your down payment and Documentation Fee is processed (credit/debit card).<br> 4) We set you up for automatic monthly payments with our payment<br> 5) Your property is deeded to you within 30 days of the property being paid in full.<br>

                    <br><b>Q: Why is the cash price less than the terms price?</b><br><br>

                    A: We charge simple low interest on top of the listed monthly payments. But yes, since we’re getting paid for the property over a number of years, we do charge a higher price overall. This allows you to skip applying for funding from banks, and build equity in your property with easy monthly payments. And you can prepay at any time without penalty. Interest varies per each lot sold and interest rate will not exceed more than 3%<br><br>

                    <b>Q: How long after submitting a down payment until the sale is closed?</b><br><br>

                    A: After your down payment and Documentation Fee has been received, we will email you the required documents through an electronic signing service called SignNow. This will include a Promissory Note, Contract for Deed, and a Land Sale Contract. After reviewing, you will electronically sign the documents. Felicia and Andrew will also electronically sign the documents at this time. We then get you set up with automatic monthly payments. This whole process only takes a day or two!<br><br>

                    <b>Q: What can I do when I have the property under contract?</b><br><br>

                    A: Unfortunately, due to a couple of bad experiences, we don’t allow any structures or buildings to be constructed on the property while it is under contract. You can, however, visit and recreationally enjoy the property whenever you want! If there is a modification you would like to make to the property while it is under contract, you must receive written consent from us first.<br><br>

                    <b>Q: When does the property get deeded to me?</b><br><br>

                    A: If you purchased the property with cash, you will get deeded the property within 5 business days after payment is received. This allows us time to draft the deed and sign it in front of a notary. If you purchased the property with owner financing, you will get deeded the property within 30 days of the property being paid for in full.<br><br>

                    <b>Q: Can I visit the property before I purchase it?</b><br><br>

                    A: Yes! Just keep in mind that our properties are sold on a first-come-first-served basis. If you want to make sure no one else buys the property before you visit it, you can submit the down payment and Documentation Fee to reserve it.<br><br>

                    <b>Q: How do I find the property?</b><br><br>

                    A: Each property listing on our page has the corner coordinates, an address, and what type of road access it has.<br><br>

                    <b>Q: What kind of land do you have for sale?</b><br><br>

                    A: We specialize in vacant and undeveloped land. These properties can be zoned as recreational, residential, open use, or agricultural. Some of the residential lots have utilities, but it’s not a guarantee. We try to keep a variety of properties in our inventory, to accommodate investors who want different things. We will clearly state on the property listing page what is and isn’t available with each property.<br><br>

                    <b>Q: What is this property zoned?</b><br><br>

                    A: The zoning of the property is listed on the property listing page on our website. You can also call the County to confirm (you will need the parcel number – found on the property listing page).<br><br>

                    <b>Q: How often do you add new properties to the website and VIP list?</b><br><br>

                    A: We are always acquiring new properties, and add them to our website on a continual basis. Be sure to check back often and let us know where you’re interested in buying land so you don’t miss any new properties!<br><br>

                    <b>Q: When I look up the property on the County’s database, I see it’s in someone else’s name. Why is that?</b><br><br>

                    A: It can often take a County months to update when a property changes owners. We move property very quickly, so it often happens that we move quicker than the County can update their database. We can easily provide proof of ownership by sending you a copy of our deed and the documents we used to purchase the property.<br><br>

                    <b>Q: Why purchase from Commonlots.net instead of other online sources like Craigslist and eBay?</b><br><br>

                    A: All of our properties have all been hand-selected by us, and we’re open with you about all of their features and qualities. We only sell quality land , at a fair price, with a safe and simple purchasing process. properties come a 100% Satisfaction Guarantee!<br><br>


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
                            <form method="post" enctype="multipart/form-data" id="gform_1" action="testimonials.php"><input type="hidden" name="gform_return_access" value="true">
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

                                                    $con = mysqli_connect("markg18140.domaincommysql.com", "real_state", "2439123Mm!", "real_state") or die("Query Failed!!!");
                                                    $query = "SELECT * FROM `category`";
                                                    $res = mysqli_query($con, $query);

                                                    while ($row = mysqli_fetch_assoc($res)) {
                                                    ?>
                                                        <option value="<?php echo $row['Id'] ?>"><?php echo $row['Name'] ?></option>
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
<?php
ob_flush();
?>
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