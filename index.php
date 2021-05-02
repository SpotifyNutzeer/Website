<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Paul</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

</head>

<body>
<nav class="navbar navbar-light navbar-expand-md navigation" id="nav">
    <div class="container"><a class="navbar-brand" href="/">SpotifyNutzer & Mikka </a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#about" onclick="scrollToTarget('#about')">Über uns</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#projects"
                                        onclick="scrollToTarget('#projects')">Projekte</a></li>
                <li class="nav-item"><a class="nav-link" href="#socials"
                                        onclick="scrollToTarget('#socials')">Präsenzen</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container about" id="about">
    <div class="row">
        <div class="col">
            <div>
                <h1>Heyyy</h1>
            </div>
        </div>
        <div class="col-md-12">
            <div>
                <p></p>
                <p>Moin, ich bin Paul, 17 Jahre alt und komme aus Bayern.<br>Ich beherrsche die Sprachen Java, Kotlin, C#, Python und lerne aktuell noch Go und React.<br>Erreichen könnt ihr mich ganz leicht unter <a href=https://Discord.SpotifyNutzer.xyz>Discord</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container projects" id="projects">
    <div class="heading">
        <h1>Unsere Projekte</h1>
    </div>
    <div class="row">

        <div class="col-md-4">

            <div class="card-border">
                <div class="card-holder">
                    <div class="card-heading">
                        <h1>
                            HoodBot
                        </h1>
                        <div class="card-text">
                            <p>Ein DiscordBot, der von SpotifyNutzer und kxmpetentes geschrieben wird.</p>
                        </div>
                    </div>

                    <div class="card-link">
                        <a href="https://top.gg/bot/765850867508445215">
                            <button>Top.gg</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-border">
                <div class="card-holder">
                    <div class="card-heading">
                        <h1>
                            MinecraftCore
                        </h1>
                        <div class="card-text">
                            <p>Eine MinecraftCore API, in Kotlin geschrieben, um euch das Programmieren mit Spigot
                                leichter zu machen!</p>
                        </div>
                    </div>
                    <div class="card-link">
                        <a href="https://github.com/SpotifyNutzeer/MinecraftCore">
                            <button>GitHub</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-border">
                <div class="card-holder">

                    <div class="card-heading">
                        <h1>
                            DiscordCore
                        </h1>
                        <div class="card-text">
                            <p>Eine CoreApi, in Java geschrieben, um euch das Programmieren mit JDA zu erleichtern.</p>
                        </div>
                    </div>

                    <div class="card-link">
                        <a href="https://github.com/kxmpetentes/DiscordCore">
                            <button>Project</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="socials">
    <div class="container" id="socials">
        <div class="socials-heading">
            <h1>Besuche</h1>
        </div>
        <div class="row">

            <div class="col-md-6 socials-spotifynutzer">
                <div class="socials-innerheading">
                    <h2>SpotifyNutzer</h2>
                </div>
                <div class="socials-list">
                    <a href="https://github.com/SpotifyNutzeer" target="_blank">
                        <div class="socials-github socials-component">
                            <div class="github">
                                <i class="fab fa-github"><span>auf GitHub</span></i>
                            </div>
                        </div>
                    </a>

                    <a href="https://twitter.com/SpotifyNutzer" target="_blank">
                        <div class="socials-twitter socials-component">
                            <div class="twitter">
                                <i class="fab fa-twitter"><span>auf Twitter</span></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 socials-kxmpetentes">
                <div class="socials-innerheading">
                    <h2>kxmpetentes</h2>
                </div>
                <div class="socials-list">
                    <a href="https://github.com/kxmpetentes" target="_blank">
                        <div class="socials-github socials-component">
                            <div class="github">
                                <i class="fab fa-github"><span>auf GitHub</span></i>
                            </div>
                        </div>
                    </a>
                    <a href="https://twitter.com/kxmpetentes" target="_blank">
                        <div class="socials-twitter socials-component">
                            <div class="twitter">
                                <i class="fab fa-twitter"><span>auf Twitter</span></i>
                            </div>
                        </div>
                    </a>

                </div>

            </div>
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
