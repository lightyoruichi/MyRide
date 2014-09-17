<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="jquery.form.js"></script> 
<script type="text/javascript" charset="utf-8" src="geolocation.js"></script>
<script type="text/javascript" src="spin.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places"></script>
    <title>Ride Cheaper</title>
</head>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="spin.js"></script>
<body>


<div id="body">
<div id="top">
  <div id="top"><p id="toploc">Current Location: Kuala Lumpur City Centre, Kuala Lumpur, Federal Territory of Kuala Lumpur, Malaysia</p></div><div id="spin" style="display:none;"></div><p id="header">MyRide</p>
  <input type="button" class="Button" id="getLocation" onclick="getLocation()" value="find me"/>
  <form action="index.php" method="post" id="Address">
    <p>start address: 
        <input type="text" name="start" id="start">
        <br>
        end address:
        <input type="text" name="end" id="end">
  <br><br>
        <input type="submit" class="Button" name="submit" id="submit" value="submit">
    </p>
</form>
<div id="map" style="display:none; width: 250px; height: 200px; font-family: Montserrat, sans-serif;"></div> 
<br><div id="duration"></div> 
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
    $timetoloc = gmdate("H:i:s", $sectoloc);
    echo "ETA for ". $items['localized_display_name'] .": ". $timetoloc ."</br>";

};
?>
<div id="distance"></div> 
<div id="distance11"></div> 
<div id="distance12"></div> 
<div id="distance2"></div> 
<div id="distance3"></div>
<script type='text/javascript' src="calculate.js"></script>
<p class="taxibuttonwrapper"><a href="uber://?action=setPickup&pickup=my_location&dropoff[nickname]=Harinder&dropoff[formatted_address]=KLCC&dropoff[latitude]=3.1539280&dropoff[longitude]=101.7135290" class="taximebutton">uber</a></p>
<div id="top">
</div>
</div>
</body> 
<script type="text/javascript" src="ga.js"></script>
</html>
