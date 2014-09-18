<!doctype html>
<head>
  <title>My Rides</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <link rel="stylesheet" href="css/style.css"/>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="jquery.form.js"></script> 
<script type="text/javascript" charset="utf-8" src="geolocation.js"></script>
<script type="text/javascript" src="spin.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no"/>  
  <meta name="description" content="My Ride estimates for popular ridesharing services in Malaysia such as Uber, MyTeksi, and EasyTaxi to help you get the best price and fastest service."/>
  <meta name="og:description" content="My Ride estimates for popular ridesharing services in Malaysia such as Uber, MyTeksi, and EasyTaxi to help you get the best price and fastest service."/>
  <meta property="og:title" content="My Ride"/>
  <meta property="og:url" content="http://lightyoruichi.com/myride"/>
  <meta property="og:type" content="website"/>
  <meta property="og:image" content="http://lightyoruichi.com/myride/logo.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no"/>  

</head>
<body ng-controller="RootCtrl" fc-reset-scroll-top-on="pageState.showReportFeedback">
  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.html">
          <span>
            <img class="nav-icon" src="static/img/wtf-header-icon.png">
            <img class="nav-icon-2x" src="static/img/wtf-header-icon-2x.png">
          </span>
          <span>
            WHAT'S THE FARE
          </span>
        </a>
      </div>
    </div>
  </nav>

  <div class="container-fluid hero-container"
    ng-class="{'collapsed': pageState.hasHadResponse}"
    ng-controller="HeroCtrl" fc-freeze-height>
    <div class="container inner-container hero-inner-container">
      <div class="row hero-row">
        <div class="col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 hero-section">
          <div class="hero-content">
            <div class="hero-img-wrapper">
				<div id="map" style="display:none; width: 100%; height: 100%; font-family: Montserrat, sans-serif;"></div> 
            </div>
            <div class="hero-tagline">
              Compare for the Best Fare
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid main-form-container" ng-show="!pageState.showReportFeedback">
    <div class="container inner-container">
      <div ng-controller="MainFormCtrl" class="main-form">
        <form action="index.php" method="post" id="Address">
        <div class="form-group">
          <div class="input-group">
            <input name="start" id="start" type="text" class="form-control" placeholder="PICKUP LOCATION" tabindex="1" autofocus/>
            <span class="input-group-btn">
              <button class="btn btn-default location-btn" id="getLocation" onclick="getLocation()">
                <span class="glyphicon glyphicon-screenshot"></span>
              </button>
              
			  </input>
            </span>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <input name="end" id="end" type="text" class="form-control" placeholder="DROPOFF LOCATION" tabindex="2" autofocus/>
            <span class="input-group-btn">
              <button class="btn btn-default location-btn" >
              </button>
              
			  </input>
            </span>
          </div>
        </div>


        <div class="submit-button-wrapper">
          <button class="btn btn-get-estimates" ng-click="submit()" tabindex="3"
            ng-disabled="submitting">
            GET ESTIMATES         
          </button>
        </div>
      </div>
    </div>
  </div>



      <div class="feedback-link">
        <a ng-click="pageState.showReportFeedback = true" href="javascript:void(0)">
          Help Us Make This Estimate Better
        </a>
      </div>

      <div class="disclaimers">
        <p>
          <br><div id="duration"></div> 
        </p>
 <?php 

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
<div id="distance3"></div>
<script type='text/javascript' src="calculate.js"></script>
<br><div id="OpenApp"></div> 
<button class="SeeMore2">Get Uber to send you?</button>
<script>
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
    </div>
  </div>




  <div class="social-widgets">
    <span class="widget fb-widget">
      <div class="fb-like" data-href="ttp://lightyoruichi.com/myride/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
    </span>
    <span class="widget">
      <a href="https://twitter.com/share?url=http://lightyoruichi.com/myride&text=An+easy+way+to+compare+fares+across+different+ride+services&hashtags=whatsthefare"
        class="twitter-share-button" data-lang="en">Tweet</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </span>
  </div>

</body>
</html>