<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Blog | Portfolio Marijn</title>
    <link rel="icon" href="images/icon.ico" type="image/x-icon">
    <meta name="description" content="More info regarding my study and business areas.">
</head>

<body class="bg-main">
<header>
    <nav>
        <div class="topnav">
            <img id="hz-logo" src="images/hz-logo.png" alt="hz-logo" />
            <nav>
                <a href="/">Home</a>
                <a href="/profile">Profile</a>
                <a href="/games">Games</a>
                <a class="activenav" href="blog">Blog</a>
                <a href="/dashboard">Dashboard</a>
                <a href="/faq">FAQ</a>
            </nav>
        </div>
    </nav>
</header>

<main>
    <div class="divfloat">
        <article style="float: left;">
            <h2>Personal SWOT Analysis</h2>
            <p class="blogpagetext">I am willing to give this study my all and keep working till I really can't
                <br />anymore. I have high hopes considering my past and I am very sure that I will make it
                <br />till the end.
            </p>
            <div class="divblog"></div>
            <a class="readmore" href="/blog"><b>Go back</b></a>
        </article>
        <img class="blogimg" src="images/blogpics/swot.jpg" alt="swotanalysis" />
    </div>

</main>

<footer>
    <div class="bottomnav">
        <a style="padding-left: 27px;">Marijn Verheijden</a>
        <a>|</a>
        <a href="https://www.linkedin.com/in/marijn-verheijden" target=”_blank”>LinkedIn</a>
        <a>|</a>
        <a href="https://github.com/itsjustliliana" target=”_blank”>GitHub</a>
    </div>
</footer>
</body>

</html>
