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

    <div style="height: 113px;"></div>

    <div class="site-blocks-cover overlay" style="background-image: url('images/bg1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12" data-aos="fade">
            <h1>Search Land</h1>
            <form action="#" method="post">
              <div class="row mb-3">
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-9 mb-3 mb-md-0">
                      <select name="category" id="category" class="form-control" required>
                        <option>--All--</option>
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
                      </select>
                    </div>
                    <div class="col-md-3">
                      <input type="submit" class="btn btn-search  btn-block" value="Search" name="btn" style="background-color: rgb(130, 32, 117);color:white">
                    </div>
                  </div>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Hot Places</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-md-4 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <a href="#" class="h-100 feature-item">
              <span class="d-block icon flaticon-worker mb-4 text-primary"></span>
              <h2>Arkanas</h2>
            </a>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="h-100 feature-item">
              <span class="d-block icon flaticon-worker mb-4 text-primary"></span>
              <h2>Florida</h2>
            </a>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <a href="#" class="h-100 feature-item">
              <span class="d-block icon flaticon-worker mb-4 text-primary"></span>
              <h2>Kentuck</h2>
            </a>
          </div>
        
         
         
          
        </div>

      </div>
    </div>
    <div class="site-section bg-light">
      <div class="container">
        <div class="col-md-12 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
          <h2 class="mb-5 h3"><B>Who We Are!</B></h2>
          <div class="row">
            <div class="col-md-8">
              <h4><a href="#">CommonLots.Net</a> was created for anyone who has had the passion and desire to own at some point in their life a part of the American Dream, Land & Property. Never before has it been so easy to purchase vacant land online. Finding your perfect property has never been easier!<br><br>
                Your New Private Land is available for your New Residential Living, Weekend Getaway, Camping or just a Simple Investment is Available by Registering with <a href="#">CommonLots.Net</a>!<br><br>
                <a href="#">CommonLots.Net</a> offers you the Consumer the ability to purchase Land by One Click Away<br><br>
                <ul><li>No Credit Check</li>
                <li>No Realtor Fees</li>
                <li>No Middle Commission Fees</li>
                <li>Owner Financing Options you can afford</li></ul><br><br><br>
                <?php if (!isset($_SESSION['signup'])) {
                ?>
                  <b>Signup Now and Own Your Lot!</b><br>
                <?php
                }
                ?>
              </h4>
            </div>
            <div class="col-md-4" style="border: 10px solid transparent;border-left-color:black;"><img src="images/logo1.png" width="400px" height="300px"></div>
          </div>
        </div>
      </div>
    </div>
    <?php

 $con = mysqli_connect("markg18140.domaincommysql.com", "real_state", "2439123Mm!", "real_state");
    // Check if image file is a actual image or fake image
    if (isset($_POST["signup"])) {
      $name = $_POST['name'];
      $address = $_POST['address'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $zip = $_POST['zip'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];

      $_SESSION['signup'] = $name;


      $sql = "INSERT INTO `signup`(`Name`, `Address`, `City`, `State`, `Zip`, `Phone`, `Email`) VALUES ('$name','$address','$city','$state','$zip','$phone','$email')";
      $res = mysqli_query($con, $sql);
      if ($res == TRUE) {
        echo "<script>alert('SignUp Successfull')</script>";
      } else {

        echo "<script>alert('SignUp Failed')</script>";
      }
    }


    if (!isset($_SESSION['signup'])) {
    ?>

      <div class="site-section bg-light">
        <div class="container">
          <div class="col-md-12 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <h2 class="mb-5 h3"><B>Signup Form</B></h2>
            <div class="row">
              <div class="col-md-3">
              </div>
              <div class="col-md-6">
                <form action="index.php" class="p-6 bg-white" method="post" style="padding:50px;">

                  <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="font-weight-bold" for="title">Name</label>
                      <input type="text" id="title" class="form-control" name="name" placeholder="User Name" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="font-weight-bold" for="title">Address</label>
                      <input type="text" id="title" class="form-control" name="address" placeholder="Address" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="font-weight-bold" for="title">City</label>
                      <input type="text" id="title" class="form-control" name="city" placeholder="City" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="font-weight-bold" for="title">State</label>
                      <input type="text" id="title" class="form-control" name="state" placeholder="State" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="font-weight-bold" for="title">Zip</label>
                      <input type="text" id="title" class="form-control" name="zip" placeholder="Zip Code" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="font-weight-bold" for="title">Phone</label>
                      <input type="text" id="title" class="form-control" name="phone" placeholder="Phone" required>
                    </div>
                  </div>

                  <div class="row form-group mb-5">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="font-weight-bold" for="company">Email</label>
                      <input type="text" id="company" class="form-control" name="email" placeholder="Email" required>
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-md-12">
                      <input type="submit" name="signup" value="Signup" class="btn btn-primary  py-2 px-5 " style="background-color: rgb(130, 32, 117);border:purple">
                    </div>
                  </div>


                </form>
              </div>
              <div class="col-md-3"></div>
            </div>

<br><br><br><br><br>
<img src="images/01-01.jpg" width="100%">
          </div>
        </div>
      </div>

    <?php
    } else {
    ?>

      <div class="site-section bg-light">
        <div class="container">
          <div class="col-md-12 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <h2 class="mb-5 h3"><B>Already Signed Up</B></h2>
            <div class="row">
              <div class="col-md-3">

              </div>
              <div class="col-md-6">
                <h2 style="color:green">ThankYou! For The Subscription</h2>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
      </div>

    <?php
    }
    ?>


    <div class="site-section bg-light">
      <div class="container">
        <div class="col-md-12 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
          <h2 class="mb-5 h3">Recent On Sale!</h2>
          <div class="property-list row">
            <?php

            $con = mysqli_connect("markg18140.domaincommysql.com", "real_state", "2439123Mm!", "real_state") or die("Query Failed!!!");
            $query = "SELECT * FROM `land`";
            $res = mysqli_query($con, $query);

            while ($row = mysqli_fetch_assoc($res)) {
            ?>
              <div class="col-sm-6 col-md-4" style="width: 400px;">
                <a href="land-details.php?id=<?php echo $row['Id'] ?>">
                  <div class="property-image">
                    <span class="property-type-heading">Land For Sale</span>
                    <img src="<?php echo $row['Image'] ?>" alt="Property Image" loading="lazy" style="width: 300px;">
                    <ul class="property-details list-inline">
                      <li class="lead"><b><?php echo $row['Price'] ?></b></li>
                    </ul>
                  </div>
                  <h2 class="property-title card-title"><?php echo $row['Description'] ?></h2>
                </a>
              </div>

            <?php
            }
            ?>
          </div>

        </div>
      </div>
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