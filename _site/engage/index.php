

<?php 
if(isset($_POST['submit'])){
    $to = "timon.forrer@gmail.com";
    $from = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = $first_name . " " . $last_name . " möchte Voltage Arc Buchen!";
    $subject2 = "Kopie deiner Buchungsanfrage";
    $message = $first_name . " " . $last_name . " schrieb folgendes:" . "\n\n" . $_POST['message'];
    $message2 = "Hallo " . $first_name . ". Hier ist eine Kopie deiner Anfrage bei Voltage Arc " . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail versendet. Danke " . $first_name . ", wir werden Sie zeitnah kontaktieren.";
    }
?>



<!DOCTYPE HTML>
<html lang="de">
    <head>
        
        
        <meta property="og:image" content="http://www.voltagearc.com/uploads/drums.jpg"/>
        
        <meta property="og:title" content="Buchen" />
        <meta property="og:url" content="http://www.voltagearc.com/engage/index.php" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Buchen – Voltage Arc Website</title>
        <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat:400,700" rel="stylesheet">
        <link href="/css/bootstrap.css" rel="stylesheet">
        <link href="/css/custom.css" rel="stylesheet">
        <link rel="icon" href="/uploads/icon192x192.png">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v2.8";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
             })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-86605317-2', 'auto');
            ga('send', 'pageview');
        </script>
        
        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="/">Voltage Arc</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li ><a href="/">Start</a></li>
                <li ><a href="/events/">Veranstaltungen</a></li>
                <li ><a href="/gallery/">Galerie</a></li>
                <li ><a href="/blog/">Blog</a></li>
                <li class="active"><a href="/engage/">Buchen</a></li>
            </ul>
        </div>
    </div>
</nav>

        
                <div class="fullscreen-image" style="background-image:url(/uploads/drums.jpg)" title="">
            <div id="backgroundOverlay">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="material-shadow-1 material-section col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                    <h1>Buchen</h1>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <form id="bookingForm" action="" method="post">
        <div class="form-group">
            <label>Vorname</label>
            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Vorname" required>
        </div>
        <div class="form-group">
            <label>Nachname</label>
            <input type="text" class="form-control" name="last_name" placeholder="Nachname" required>
        </div>
        <div id="email_validate" class="form-group">
            <label>E-Mail Adresse</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="E-Mail">
            <span id="result" class="help-block"></span>
        </div>
        <div class="form-group">
            <label>Hier hast du Platz, den Anlass zu beschreiben und das gewünschten Datum anzugeben.</label>
            <textarea rows="5" class="form-control" name="message" cols="30" placeholder="Bemerkung" required></textarea>
        </div>
        <input type="submit" id="validate" value="Absenden" class="btn btn-default pull-right">
    </form>
    <p class="label label-default"><span class="glyphicon glyphicon-exclamation-sign"></span> Alle Felder müssen ausgefüllt sein.</p>
</div>
                </div>
            </div>
        </div>

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/custom.js"></script>
        <script type="text/javascript">
        ;( function( $ ) {
            
            $( '.swipebox' ).swipebox();
            
        } )( jQuery );
        </script>
        
        <div class="dark-background">
  <footer class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h1>Voltage Arc</h1>
        <p><a href="https://maps.google.com/?q=Luzernerstrasse+14,+5712+Beinwil+am+See" target="_blank">Luzernerstrasse 14 / Postfach 50</a></p>
        <p><a href="https://maps.google.com/?q=Luzernerstrasse+14,+5712+Beinwil+am+See" target="_blank">5712 Beinwil am See</a></p>
      </div>
      <div class="social col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <h1>Folge uns!</h1>
        <p><a href="https://fb.me/VoltageArc" target="_blank">Facebook</a></p>
        <p><a href="https://www.instagram.com/voltage_arc/" target="_blank">Instagram</a></p>
        <p><a href="https://www.youtube.com/channel/UCdARchfQvlOBcMNZynTPRCg" target="_blank">YouTube</a></p>
      </div>
    </div>
  </footer>
</div>

        
    </body>
</html>
