<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', '/resources/js/slideshow.js'])
    <title>Games | Portfolio Marijn</title>
    <link rel="icon" href="images/icon.ico" type="image/x-icon">
    <meta name="description" content="One of my biggest hobby's is gaming. Whenever I get the time, I boot up
    something. I'm not a big shooter guy, but more fan of a relaxing gaming experience.">
</head>

<body class="bg-main">
<header>
    <div class="topnav">
        <img id="hz-logo" src="images/hz-logo.png" alt="hz-logo" />
        <nav>
            <a href="/">Home</a>
            <a href="/profile">Profile</a>
            <a class="activenav" href="/games">Games</a>
            <a href="/blog">Blog</a>
            <a href="/dashboard">Dashboard</a>
            <a href="/faq">FAQ</a>
        </nav>
    </div>
</header>

<main>
    <div class="divmain">
        <article>
            <h2>Games</h2>
            <p class="text">One of my biggest hobby's is gaming. Whenever I get the time, I boot up
                something.
                <br /> I'm not a big shooter guy, but more fan of a relaxing gaming experience.
            </p>
            <!--Sky: Children of the Light-->
            <div class="divspace"></div>
            <div class="box-games">
                <b class="title">Sky: Children of the Light</b>
                <p class="text">My domain where I really feel like I am home is Sky: Children of the Light.
                    <br />A multiplayer roleplay adventure game made by <b>Thatgamecompany</b> with
                    <br />beautifull art all around. Get to know people from all around the world while
                    <br />collecting cosmetics and exploring different worlds. This game gave me the
                    <br />opportunity to get to know alot of kind and amazing people whom I've come to
                    <br />love dearly and still speak today.
                </p>
            </div>
            <div class="slideshow-container">
                <div class="mySlides1">
                    <img src="images/sky/sky1.jpg" style="width:100%" alt="skycotl-1" />
                </div>
                <div class="mySlides1">
                    <img src="images/sky/sky2.jpg" style="width:100%" alt="skycotl-2" />
                </div>
                <div class="mySlides1">
                    <img src="images/sky/sky3.jpg" style="width:100%" alt="skycotl-3" />
                </div>
                <div class="mySlides1">
                    <img src="images/sky/sky4.jpg" style="width:100%" alt="skycotl-4" />
                </div>
                <div class="mySlides1">
                    <img src="images/sky/sky5.jpg" style="width:100%" alt="skycotl-5" />
                </div>
                <div class="mySlides1">
                    <img src="images/sky/sky6.jpg" style="width:100%" alt="skycotl-6" />
                </div>
                <div class="mySlides1">
                    <img src="images/sky/sky7.jpg" style="width:100%" alt="skycotl-7" />
                </div>
                <div class="mySlides1">
                    <img src="images/sky/sky8.jpg" style="width:100%" alt="skycotl-8" />
                </div>
                <div class="mySlides1">
                    <img src="images/sky/sky9.jpg" style="width:100%" alt="skycotl-9" />
                </div>
                <div class="mySlides1">
                    <img src="images/sky/sky10.jpg" style="width:100%" alt="skycotl-10" />
                </div>
                <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
                <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
            </div>
        </article>

        <!--Honkai: Star Rail-->
        <article style="position: relative; bottom: 150px;">
            <div class="div-20px"></div>
            <div class="box-games" style="position: relative; bottom: 20px;">
                <b class="title">Honkai: Star Rail</b>
                <p class="text">One of the multiple <b>Hoyoverse</b> games I play daily and have been playing since
                    <br />it came out. The story is simply amazing, especially with the latest main update
                    <br />containing Penacony. Sadly there is no co-op in the main world, but all the
                    <br />possible ways to interact with the characters truly make up for that.
                </p>
            </div>
            <div class="slideshow-container">
                <div class="mySlides2">
                    <img src="images/hsr/hsr1.jpg" style="width:100%" alt="hsr-1" />
                </div>
                <div class="mySlides2">
                    <img src="images/hsr/hsr2.jpg" style="width:100%" alt="hsr-2" />
                </div>
                <div class="mySlides2">
                    <img src="images/hsr/hsr3.jpg" style="width:100%" alt="hsr-3" />
                </div>
                <div class="mySlides2">
                    <img src="images/hsr/hsr4.jpg" style="width:100%" alt="hsr-4" />
                </div>
                <div class="mySlides2">
                    <img src="images/hsr/hsr5.jpg" style="width:100%" alt="hsr-5" />
                </div>
                <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
            </div>
        </article>

        <!--Wuthering Waves-->
        <article style="position: relative; bottom: 322px; max-height: 0px;">
            <div class=" div-20px"></div>
            <div class="box-games">
                <b class="title">Wuthering Waves</b>
                <p class="text">A fairly new game that came out at the end of May 2024 and became an instant
                    <br />hit due to it's incredible graphics created in Unreal Engine 5. <b>Kuro Games</b>
                    <br />being the masters behind it. Up until now it has a very good storyline with loads
                    <br />of characters. My favorite at the moment being Changli who has fire powers. The
                    <br />game spoke to me because I also play Genshin Impact. Loving the anime style art
                    <br />like in Honkai: Star Rail.
                </p>
            </div>
            <div class="slideshow-container" style="max-height: 0px;">
                <div class="mySlides3">
                    <img src="images/wuwa/wuwa1.jpg" style="width:100%;" alt="wuwa-1" />
                </div>
                <div class="mySlides3">
                    <img src="images/wuwa/wuwa2.jpg" style="width:100%;" alt="wuwa-2" />
                </div>
                <div class="mySlides3">
                    <img src="images/wuwa/wuwa3.jpg" style="width:100%;" alt="wuwa-3" />
                </div>
                <div class="mySlides3">
                    <img src="images/wuwa/wuwa4.jpg" style="width:100%;" alt="wuwa-4" />
                </div>
                <div class="mySlides3">
                    <img src="images/wuwa/wuwa5.jpg" style="width:100%;" alt="wuwa-5" />
                </div>
                <a class="prev" style="bottom: 16px;" onclick="plusSlides(-1, 2)">&#10094;</a>
                <a class="next" style="bottom: 16px;" onclick="plusSlides(1, 2)">&#10095;</a>
            </div>
        </article>
{{--        @vite('resources/js/slideshow.js')--}}
        <div class="divmain"></div>
        <p style="color: rgba(240, 248, 255, 0);">-</p>
    </div>
</main>

<footer>
    <div class="bottomnav"/>
        <a style="padding-left: 27px;">Marijn Verheijden</a>
        <a>|</a>
        <a href="https://www.linkedin.com/in/marijn-verheijden" target=”_blank”>LinkedIn</a>
        <a>|</a>
        <a href="https://github.com/itsjustliliana" target=”_blank”>GitHub</a>
        <a class="secret" style="color: rgba(0, 0, 0, 0); position: sticky; left: 100%;"
           href="geistige/verwirrung.html">???</a>
</footer>

<script>
    let slideIndex = [1, 1, 1];
    let slideId = ["mySlides1", "mySlides2", "mySlides3"]
    showSlides(1, 0);
    showSlides(1, 1);
    showSlides(1, 2);

    function plusSlides(n, no) {
        showSlides(slideIndex[no] += n, no);
    }

    function showSlides(n, no) {
        let i;
        const x = document.getElementsByClassName(slideId[no]);
        if (n > x.length) { slideIndex[no] = 1 }
        if (n < 1) { slideIndex[no] = x.length }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex[no] - 1].style.display = "block";
    }
</script>
</body>

</html>
