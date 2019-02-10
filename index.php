<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/general.css">
    <!--<link rel="stylesheet" href="../css/index.css">-->
    <link rel="stylesheet" href="../../css/pages.css">
    <link rel="stylesheet" href="../../css/fontawesome.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../favicon.ico"/>
    <!--Used from https://fontawesome.com under license https://fontawesome.com/license-->
    <title>Games - Platforms</title>
</head>

<header class="title-box">
    <div class="nav-bar">
        <div class="links-bar">
            <a href="../../" class="nav-home nav-button">Home</a>
            <a href="../" class="nav-link nav-button">Projects</a>
            <a href="https://paypal.me/noodlewrecker" class="nav-link nav-button">Donate</a>
        </div>
        <?php
        $socialBarResponse = file_get_contents("../../../hidden/social-bar.html");
        echo $socialBarResponse;
        ?>
    </div>

    <h1 class="title">
        Platforms
    </h1>
    <h2 class="sub-heading">
        Beta
    </h2>
</header>

<body>
<div class="page-chunk scoresDef" style="background-color: whitesmoke">
    <p style="font-family: 'Montserrat', sans-serif; font-size: large ">This is just a mini-project, there's no objective.</p>
</div>
<div class="page-chunk canvasContainer">
    <canvas id="gameCanvas" width="800" height="600">Loading...</canvas>
    <script src="platforms.js"></script>
</div>
</body>
<div class="foot">
    <p class="credit">Designed by Adam Hodgkinson</p>
</div>
</html>
