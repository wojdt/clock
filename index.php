<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Charset -->
    <meta charset="utf-8">

    <!-- Style Sheets -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width">

    <!-- Title -->
    <title>Nice analog clock</title>

    <!-- Description -->
    <meta name="description" content="Website with nice analog clock.">

    <!-- Author -->
    <meta name="author" content="BelKed, Online Tutorials">


    <!-- Icon -->
    <link rel="icon" type="image/png" href="icon.png">

    <!-- Apple touch icon -->
    <link rel="apple-touch-icon" href="icon.png">

    <!-- Theme color -->
    <meta name="theme-color" content="#63d7a5">
    <meta name="msapplication-TileColor" content="#63d7a5">
    <meta name="msapplication-navbutton-color" content="#63d7a5">
    <meta name="apple-mobile-web-app-status-bar-style" content="#63d7a5">


    <!-- ===================== -->
    <!-- ===== OpenGraph ===== -->
    <!-- ===================== -->

    <!-- Url -->
    <meta property="og:url" content="https://BelKed.github.io">

    <!-- Title -->
    <meta property="og:title" content="Nice analog clock">

    <!-- Description -->
    <meta property="og:description" content="Website with nice analog clock.">

    <!-- Icon -->
    <meta property="og:image" content="https://BelKed.github.io/icon-1200x630.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <meta property="og:type" content="page">


    <!-- ===================== -->
    <!-- ====== Twitter ====== -->
    <!-- ===================== -->

    <!-- Twitter type of showed banner -->
    <meta property="twitter:card" content="summary_large_image">

    <!-- Title -->
    <meta property="twitter:title" content="Nice analog clock">

    <!-- Description -->
    <meta property="twitter:description" content="Website with nice analog clock.">

    <!-- Icon -->
    <meta property="twitter:image:src" content="https://BelKed.github.io/icon-1200x630.png">
    <meta property="twitter:image:width" content="1200">
    <meta property="twitter:image:height" content="630">
</head>

<body>
    <div class="clock">
        <div class="hour">
            <div class="hr" id="hr"></div>
        </div>
        <div class="min">
            <div class="mn" id="mn"></div>
        </div>
        <div class="sec">
            <div class="sc" id="sc"></div>
        </div>
    </div>
    <script type="text/javascript">
        const deg = 6;
        const hr = document.querySelector('#hr');
        const mn = document.querySelector('#mn');
        const sc = document.querySelector('#sc');

        setInterval(() => {
            let day = new Date();

            let hh = day.getHours();
            let mm = day.getMinutes();
            let ss = day.getSeconds();
            let ms = day.getMilliseconds();

            hr.style.transform = `rotateZ(${(hh*30)+(mm/2)}deg`;
            mn.style.transform = `rotateZ(${(mm*6)+(ss/10)}deg`;
            sc.style.transform = `rotateZ(${(ss*6)+(ms/1000*6)}deg`;
        })
    </script>
</body>

</html>
