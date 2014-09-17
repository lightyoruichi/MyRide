<?php 

ini_set('display_errors', 'On');
error_reporting(E_ALL);

$apicars='https://api.uber.com/v1/estimates/time?server_token=HVv64WNdUrkhdnd4MZUghrZ8NXrhXphleQzTx8Uc&start_longitude=101.71&start_latitude=3.1545487999999997';
$carsJ = file_get_contents($apicars);
$assoc = true;
$carsJx = json_decode($carsJ, $assoc);

foreach ($carsJx['times'] as $items)
{
    echo "Car Type:". $items['localized_display_name'] ."</br>";
    $sectoloc = $items['estimate'];
    $timetoloc = gmdate("H:i:s", $sectoloc);
    echo "Time to Your :". $timetoloc ."</br>";

};
?>