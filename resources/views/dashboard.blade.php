<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Dashboard | Portfolio Marijn</title>
    <link rel="icon" href="images/icon.ico" type="image/x-icon">
    <meta name="description" content="Current study progress at HZ University of Applied Sciences.">
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
                <a class="activenav" href="/dashboard">Dashboard</a>
                <a href="/faq">FAQ</a>
            </nav>
        </div>
    </nav>
</header>

<main>
    <div class="divmain">
        <article>
            <h2>Dashboard</h2>

            <div class="table-dashboard" role="region" tabindex="0">
                <table>
                    <tr>
                        <th>Quarter</th>
                        <th>Course</th>
                        <th>Exams</th>
                        <th>EC</th>
                        <th>Grade</th>
                    </tr>

                    <!--Row ONE-->
                    <tr>
                        <td rowspan="4">1</td>
                        <td>Program- & Career Orientation</td>
                        <td>Portfolio website</td>
                        <td>2.5 EC</td>
                        <td>Passed</td>
                    </tr>
                    <tr>
                        <td>Computer Science Basics</td>
                        <td>Written Exam</td>
                        <td>5 EC</td>
                        <td>Passed</td>
                    </tr>
                    <tr>
                        <td>Programming Basics</td>
                        <td>Written Exam</td>
                        <td>5 EC</td>
                        <td>Failed</td>
                    </tr>
                    <tr>
                        <td>Personal Proffesional Development</td>
                        <td>Criterion- referenced assessment</td>
                        <td>12.5 EC</td>
                        <td>In Progress...</td>
                    </tr>

                    <!--Row TWO-->
                    <tr>
                        <td rowspan="3">2</td>
                        <td>IT Personality</td>
                        <td>Portfolio</td>
                        <td>2.5 EC (1.25 EC)</td>
                        <td>In Progress...</td>
                    </tr>
                    <tr>
                        <td rowspan="2">Object Oriented Programming</td>
                        <td>Presentation</td>
                        <td>5 EC</td>
                        <td>Passed</td>
                    </tr>
                    <tr>
                        <td>Written Exam</td>
                        <td>5 EC</td>
                        <td>Passed</td>
                    </tr>

                    <!--Row THREE-->
                    <tr>
                        <td rowspan="5">3</td>
                        <td>Business IT Consultant Basics</td>
                        <td>Assignment</td>
                        <td>2.5 EC</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td rowspan="4">Framework Project 1</td>
                        <td>Written Exam</td>
                        <td>5 EC</td>
                        <td>In Progress...</td>
                    </tr>
                    <tr>
                        <td>Database Exam</td>
                        <td>1.25 EC</td>
                        <td>In Progress...</td>
                    </tr>
                    <tr>
                        <td>Group presentation</td>
                        <td>2.5 EC</td>
                        <td>In Progress...</td>
                    </tr>
                    <tr>
                        <td>Individual requirements</td>
                        <td>1.25 EC</td>
                        <td>In Progress...</td>
                    </tr>

                    <!--Row FOUR-->
                    <tr>
                        <td rowspan="3">4</td>
                        <td rowspan="3">Framework Project 2</td>
                        <td>Delivery</td>
                        <td>2.5 EC</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Assessment report</td>
                        <td>2.5 EC</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>IT Development Portfolio</td>
                        <td>5 EC</td>
                        <td>-</td>
                    </tr>
                    <!--Row FIVE-->
                    <tr>
                        <td rowspan="1">5 (Extra)</td>
                        <td rowspan="1">Indoor ski- of snowboarden</td>
                        <td>>>></td>
                        <td>0.15 EC</td>
                        <td>Done</td>
                    </tr>
                    <!--TOTAL-->
                    <tr>
                        <td><b>Total</b></td>
                        <td></td>
                        <td></td>
                        <td><b>17.50 / 60 EC (+ 1.40)</b></td>
                        <td></td>
                </table>
            </div>

            <div class="div-20px">
                <progress alt="passed" value="18.9" max="60" style="--value: 0; --max: 60;"></progress>
                <progress alt="in-progress" value="42.65" max="60"
                          style="--value: 0; --max: 60;bottom: 15px;"></progress>
                <progress alt="soon" value="0" max="60" style="--value: 0; --max: 60;bottom: 30px;"></progress>
            </div>
        </article>
        <div class=" divmain">
        </div>
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
