<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <title>Ride Cheaper</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet">
    <script src="http://maps.google.com/maps/api/js?sensor=true" type=
    "text/javascript"></script>
    <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script charset="utf-8" src="geolocation.js" type="text/javascript"></script>
</head>

<body>
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="masthead clearfix">
                    <div class="inner">
                        <h3 class="masthead-brand">MyUber</h3>

                        <ul class="nav masthead-nav">
                            <li class="active">
                                <a href="index.html">Home</a>
                            </li>

                            <li></li>
                        </ul>
                    </div>
                </div>

                <div class="inner cover">
                    <h1 class="cover-heading">Ride cheap.</h1>

                    <p class="lead">"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>

                    <p><input class="btn btn-lg btn-default" id="getLocation"
                    onclick="getLocation()" type="button" value="find me"></p>

                    <p></p>

                    <form action="index.html" id="Address" method="post" name=
                    "Address">
                        <p>from address:</p>

                        <p><input class="textbox" id="start" name="start" type=
                        "text"></p>

                        <p>to address:</p>

                        <p><input class="textbox" id="end" name="end" type=
                        "text"></p><br>
                        <input class="btn btn-lg btn-default" id="submit" name=
                        "submit" type="submit" value="submit">
                        <p>
                    </form>

                    <div id="map" style=
                    "display:none; width: 250px; height: 200px; font-family: Montserrat, sans-serif;">
                    </div><br>

                    <div id="duration"></div>

                    <div id="distance"></div>

                    <div id="distance2"></div>

                    <div id="distance3"></div><br>
                    <script src="calculate.js" type='text/javascript'></script>
                </div>

                <div class="mastfoot">
                    <div class="inner">
                        <div style="margin-left: 2em">
                            &nbsp;Harinder Singh
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/docs.min.js"></script>
    <script src="ga.js" type="text/javascript"></script>
</body>
</html>