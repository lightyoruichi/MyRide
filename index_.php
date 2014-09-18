<!DOCTYPE html>
<html>
<head>
    <title>My Rides</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="jquery.form.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>    
    <script charset="utf-8" src="geolocation.js" type="text/javascript"></script>
    <script src="spin.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
    <meta content=
    "My Ride estimates for popular ridesharing services in Malaysia such as Uber, MyTeksi, and EasyTaxi to help you get the best price and fastest service."
    name="description">
    <meta content=
    "My Ride estimates for popular ridesharing services in Malaysia such as Uber, MyTeksi, and EasyTaxi to help you get the best price and fastest service."
    name="og:description">
    <meta content="My Ride">
    <meta content="http://lightyoruichi.com/myride">
    <meta content="website">
    <meta content="http://lightyoruichi.com/myride/logo.png">
    <meta content=
    "width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no"
    name="viewport">
</head>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html"><span><img style="height:auto; width:auto; max-width:40px; max-height:40px;" class=
                "nav-icon" src="img/wtf-header-icon.png"> <img style="height:auto; width:auto; max-width:40px; max-height:40px;"  class=
                "nav-icon-2x" src="img/wtf-header-icon-2x.png"></span>
                <span style="font-family: 'Shadows Into Light', cursive; font-size:1.5em">My Rides</span></a>
            </div>
        </div>
    </nav>

    <div class="container-fluid hero-container">
        <div class="container inner-container hero-inner-container">
            <div class="row hero-row">
                <div class=
                "col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 hero-section">
                <div class="hero-content">
                        <div class="hero-img-wrapper">
                            <div id="map" style=
                            "display:none; width: 100%; height: 100%; font-family: Montserrat, sans-serif;">
                            </div>
                        </div>

                        <div class="hero-tagline">
                            Compare for the Best Fare
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid main-form-container">
        <div class="container inner-container">
            <div class="main-form">
                <form action="index_.php" id="Address" method="post" name=
                "Address">
                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" id="start" name="start"
                            placeholder="PICKUP LOCATION" tabindex="1" type=
                            "text"> <span class=
                            "input-group-btn"><button onclick="getLocation()" class="btn btn-default location-btn">
                            <span class="input-group-btn"></span>
                            </button></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" id="end" name="end"
                            placeholder="DROPOFF LOCATION" tabindex="2" type=
                            "text"> <span class=
                            "input-group-btn"><button class="btn btn-default location-btn">
                            <span class="input-group-btn"></span>
                            </button></span>
                        </div>
                    </div>

                    <div class="submit-button-wrapper">
                        <button class="btn btn-get-estimates" tabindex="3">GET
                        ESTIMATES</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="feedback-link">
        <a href="javascript:void(0)">Help Us Make This Estimate Better</a>
    </div>

    <div class="disclaimers">
        <p><br></p>

        <div id="duration"></div>
        <p><?php 

        ini_set('display_errors', 'On');
        error_reporting(E_ALL);

        $apicars='https://api.uber.com/v1/estimates/time?server_token=HVv64WNdUrkhdnd4MZUghrZ8NXrhXphleQzTx8Uc&start_longitude=101.71&start_latitude=3.1545487999999997';
        $carsJ = file_get_contents($apicars);
        $assoc = true;
        $carsJx = json_decode($carsJ, $assoc);

        foreach ($carsJx['times'] as $items)
        {
            $sectoloc = $items['estimate'];
            $timetoloc = gmdate("i:s", $sectoloc);
            echo "ETA for ". $items['localized_display_name'] .": ". $timetoloc ."</br>";

        };
        ?>

        <div id="distance"></div>

        <div id="distance11"></div>

        <div id="distance12"></div>

        <div id="distance2"></div>

        <div id="distance3"></div><script src="calculate.js" type=
        'text/javascript'></script><br>

        <div id="OpenApp"></div><button class="SeeMore2">Get Uber to send
        you?</button> <script>
$('.SeeMore2').click(function(){
        var $this = $(this);
        $this.toggleClass('SeeMore2');
        if($this.hasClass('SeeMore2')){
        $this.text('Get Uber to send you?');         
        } else {
        $this.text('Uber Promo Code (gdpgr)');
        }
        });
        </script>
    </div>




    <div class="social-widgets">
        <span class="widget fb-widget"></span>

        <div class="fb-like" data-action="like" data-href=
        "ttp://lightyoruichi.com/myride/" data-layout="button_count"
        data-share="true" data-show-faces="false">
            <span class="widget fb-widget"></span>
        </div><span class="widget"><a class="twitter-share-button" data-lang=
        "en" href=
        "https://twitter.com/share?url=http://lightyoruichi.com/myride&text=An+easy+way+to+compare+fares+across+different+ride+services&hashtags=whatsthefare">Tweet</a>
        <script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
        </script></span>
    </div>
</body>
</html>