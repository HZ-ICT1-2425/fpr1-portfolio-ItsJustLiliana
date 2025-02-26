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
        <article style="float:left">
            <h2>Programming Experience</h2>
            <p class="blogpagetext">My experience lies a little within Java, HTML, Python and C+/C#. I continue
                <br />learning more languages over the coming years. I've done a few excersizes in the past like
                <br />finding bugs within lines of code on certain websites, messing around with the schoolwebsite
                <br />locally and some breakjail software which I use for some consoles. This is the first time
                <br />making a full website, but I think it looks good. How to make it better readable on mobile
                <br />is still something I need to figure out, but that can wait till the very end.
            </p>
            <div class="divblog"></div>
            <a class="readmore" href="/blog"><b>Go back</b></a>
        </article>
        <img class="blogimg" src="images/blogpics/experience.jpg"
             alt="programming-xp" />
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
