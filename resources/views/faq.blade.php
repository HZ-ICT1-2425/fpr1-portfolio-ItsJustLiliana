<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', '/resources/js/dropdown.js'])
    <title>FAQ | Portfolio Marijn</title>
    <link rel="icon" href="images/icon.ico" type="image/x-icon">
    <meta name="description" content="Provides answers to your general questions!">
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
                <a href="/blog">Blog</a>
                <a href="/dashboard">Dashboard</a>
                <a class="activenav" href="/faq">FAQ</a>
            </nav>
        </div>
    </nav>
</header>

<main>
    <div class="divmain">
        <article>
            <h2>Frequently Asked Questions</h2>
            <b>
                <p class="text" style="font-size: 20px;">Provides answers to your general questions!</p>
            </b>
            <div class="div-faq"></div>
        </article>

        <summary class="summary-faq">
            <button class="accordion" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">How can
                you <b>print a document</b> from
                your laptop at HZ?</button>
            <div class="panel">
                <p>You have to connect your laptop to "HZ printer" by going to <a href="https://hz.mynetpay.nl/"
                                                                                  style="color: white;" target="blank"><b>hz.mynetpay.nl</b></a>. After which you will have to
                    log in with your HZ-account, and then you can use the printer.</p>
                <br />
            </div>
            <button class="accordion">How can you <b>scan a document and</b> send it to your laptop at HZ?</button>
            <div class="panel">
                <p>Open Windows Fax or MacOS and place your document faced down on the scanner bed of the HZ
                    printer. After that select scan and the document should appear on your device. From there you
                    can save it.</p>
                <br />
            </div>
            <button class="accordion">How can I <b>buy something</b> on the HZ web shop?</button>
            <div class="panel">
                <p>You first have to log into the HZ webshop with your HZ account. After that you can add your
                    desired item to
                    your shopping cart by clicking "Order". Go to your shopping cart and click on
                    "Pay". After the payment has been completed, you will get a order confirmation.</p>
                <br />
            </div>
            <button class="accordion">How can you <b>book a project space</b> in one of the wings?</button>
            <div class="panel">
                <p>You have to go to <a href="https://portal.hz.nl/" style="color: white;"
                                        target="blank"><b>portal.hz.nl</b></a> and then select "Selfservice Portal". Click on "Make
                    a reservation" where you can book a room by selecting a timeframe.</p>
                <br />
            </div>
            <button class="accordion" style="border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;">What
                are the instructions
                if you want to <b>park your car</b> at the HZ
                parking
                lot?</button>
            <div class="panel">
                <p>To enter the parking lot, you must have your HZ-card with you to be admitted. After that you
                    follow the signs pointing towards the HZ parking spaces where you can park your car.
                    <br />
                    <br />
                    <br />
                </p>
            </div>
        </summary>
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
