<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta property="og:title" content="SpotifyNutzer.xyz | Impressum">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://spotifynutzer.xyz">
    <meta property="og:description" content="Hey, ich heiße Paul, bin 17 Jahre alt und kann die Sprachen Java, Kotlin und Python.">
    <meta property="og:image" content="https://images-ext-1.discordapp.net/external/YPZPC-4MDcjOZPgJCsigse9YtEV0B9w62imRPXLbq1s/https/cdn.discordapp.com/avatars/461917424631939092/a_621f4c2365b161fb7b911f980dfe59f6.gif">
    <meta name="theme-color" content="#454343">
    <title>SpotifyNutzer.xyz | Impressum</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        html, body{
	    height: 100%;
	    align: center;
        }
        .about{
            min-height: 100%;
	}
        .h1{
	    align: center;
	}

    </style>
</head>

<body>
<nav class="navbar navbar-light navbar-expand-md navigation" id="nav">
    <div class="container"><a class="navbar-brand" href="/">SpotifyNutzer</a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/#about" onclick="scrollToTarget('#about')">Über uns</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="/#projects"
                                        onclick="scrollToTarget('#projects')">Projekte</a></li>
                <li class="nav-item"><a class="nav-link" href="/#socials"
                                        onclick="scrollToTarget('#socials')">Präsenzen</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container about" id="about">
    <div class="row">
        <div class="col">
            <div>
		<div class='impressum'><h1>Impressum</h1>
			<p>Angaben gemäß § 55
			TMG</p>
			<p>Paul Weber <br>
                        Schönbrunner Straße 1<br>
                        84419 Obertaufkirchen <br>
                        </p><p> <strong>Vertreten durch: </strong><br>
                        Paul Weber<br>
                    </p><p><strong>Kontakt:</strong> <br>
                        Telefon: +0049-01754454022<br>
			E-Mail: <a href='mailto:spotifynutzer@pvptraining.eu'>spotifynutzer@pvptraining.eu</a></br></p>
		    <p><strong>Haftungshinweis:</strong><br>Trotz sorgfältiger inhaltlicher Kontrolle übernehmen wir keine Haftung für die Inhalte externer Links. Für den Inhalt der verlinkten Seiten sind ausschließlich deren Betreiber verantwortlich. </p>
                </div>            </div>
        </div>
    </div>
</div>



<footer class="footer">
    <ul class="list-inline">
        <li class="list-inline-item"><a href="/impressum">Impressum</a></li>
        <li class="list-inline-item"><a href="/datenschutz">Datenschutzerklärung</a></li>
    </ul>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/2226ce608c.js" crossorigin="anonymous"></script>
<script>
    function scrollToTarget(target) {
	            $('html,body').animate({
		                    scrollTop: $(target).offset().top
					                },
							            'slow');
		        }
    </script>
</body>

</html>

