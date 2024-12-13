<?php
function feedback404()
{
    echo "<h1>404 Not Found";
}
if (isset($_GET['support'])) {
    $filename = "list.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['support']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $SHOOT = strtoupper($target_string);}}
    if (isset($SHOOT)) {
        $SHOOTS = $SHOOT;
        $RSHOOTS = str_replace('-', ' ', $SHOOTS);
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) { 
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}

/*

*GANTI NAMA BRAND DENGAN INI
<?php echo $SHOOTS?>

*GANTI RSHOOTS DENGAN INI (hasil penggantian tanda hubung menjadi spasi)
<?php echo $RSHOOTS?>

*/


?>

<!DOCTYPE html>
<html ⚡ lang="id" itemscope="itemscope" itemtype="https://schema.org/WebPage">

<head>
    <title><?php echo $RSHOOTS?> - Slot Gacor Volatilitas Tinggi: Tantangan Besar dengan Kemenangan Besar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta property="og:title" content="<?php echo $RSHOOTS?> - Slot Gacor Volatilitas Tinggi: Tantangan Besar dengan Kemenangan Besar" />
    <meta name="description" content="<?php echo $RSHOOTS?> Jika Anda suka tantangan, cobalah slot gacor dengan volatilitas tinggi. Game ini menawarkan kemenangan besar bagi pemain yang berani mengambil risiko lebih besar."/>
    <meta name="keywords" content="Situs Slot Gacor"/>
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    <meta name="mobile-web-app-capable" content="yes">
    <meta name='robots' content='index, follow' />
    <meta name="author" content="Situs Slot Gacor">
    <meta name="allow-search" content="yes" />
    <meta name="YahooSeeker" content="index,follow" />
    <meta name="msnbot" content="index,follow" />
    <meta name="expires" content="never" />
    <meta name="rating" content="general">
    <meta name="publisher" content="Situs Slot Gacor">
    <meta name="copyright" content="Situs Slot Gacor">
    <meta name="robots" content="index,follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="YahooSeeker" content="index,follow">
    <meta name="msnbot" content="index,follow">
    <meta name="expires" content="never">
    <meta name="geo.region" content="id_ID" />
    <meta name="geo.country" content="id" />
    <meta name="language" content="Id-ID" />
    <meta name="distribution" content="global" />
    <meta name="geo.placename" content="Indonesia" />
    <meta name="tgn.nation" content="Indonesia" />
    <meta name="supported-amp-formats" content="websites,stories,ads,email">
    <meta property="og:site_name" content="Situs Slot Gacor" />
    <meta property="og:description"
        content="<?php echo $RSHOOTS?> Jika Anda suka tantangan, cobalah slot gacor dengan volatilitas tinggi. Game ini menawarkan kemenangan besar bagi pemain yang berani mengambil risiko lebih besar." />
    <meta property="og:type" content="WebPage" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:locale:alternate" content="id_ID" />
    <meta name="theme-color" content="var(--bgColor)">
    <link rel="canonical" href="https://alternatif.desxsports.com/?support=<?php echo $SHOOT?>" />
    <link rel="alternate" hreflang="id" href="https://alternatif.desxsports.com/?support=<?php echo $SHOOT?>" />
    <link rel="dns-prefetch" href="https://alternatif.desxsports.com/?support=<?php echo $SHOOT?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="icon" href="https://i.postimg.cc/WbNphFjr/icon.png" type="image/x-icon" />
    <link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
    <script async src="https://cdn.ampproject.org/v0.js" nonce="MTk1NDcyMjU3MiwzMjcwMDE0NDIw"></script>
    <style amp-boilerplate>
        body {
            -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            animation: -amp-start 8s steps(1, end) 0s 1 normal both
        }

        @-webkit-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-moz-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-ms-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-o-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }
    </style><noscript>
        <style amp-boilerplate>
            body {
                -webkit-animation: none;
                -moz-animation: none;
                -ms-animation: none;
                animation: none
            }
        </style>
    </noscript>
    <style amp-custom>
        :root {
            --bgColor: #222222;
            --black: #222222;
            --white: #ffffff;
            --accentColor: #ffffff;
            --pink: #0c60f1;
            --purple: #464646;
            --pink-hover: #69fafd;
            --purple-hover: #69fafd;
            --rose: #ffffff;
            --font: 'Karla', sans-serif;
            --firstName: 'John';
            --lastName: 'Doe';
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }

        .animated.infinite {
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite
        }

        .animated.slow {
            -webkit-animation-duration: 2s;
            animation-duration: 2s
        }

        .animated.slower {
            -webkit-animation-duration: 3s;
            animation-duration: 3s
        }

        @-webkit-keyframes tada {
            0% {
                -webkit-transform: scaleX(1);
                transform: scaleX(1)
            }

            10%,
            20% {
                -webkit-transform: scale3d(.9, .9, .9) rotate(-3deg);
                transform: scale3d(.9, .9, .9) rotate(-3deg)
            }

            30%,
            50%,
            70%,
            90% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate(3deg)
            }

            40%,
            60%,
            80% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg)
            }

            to {
                -webkit-transform: scaleX(1);
                transform: scaleX(1)
            }
        }

        @keyframes tada {
            0% {
                -webkit-transform: scaleX(1);
                transform: scaleX(1)
            }

            10%,
            20% {
                -webkit-transform: scale3d(.9, .9, .9) rotate(-3deg);
                transform: scale3d(.9, .9, .9) rotate(-3deg)
            }

            30%,
            50%,
            70%,
            90% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate(3deg)
            }

            40%,
            60%,
            80% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg)
            }

            to {
                -webkit-transform: scaleX(1);
                transform: scaleX(1)
            }
        }

        .tada {
            -webkit-animation-name: tada;
            animation-name: tada
        }

        @-webkit-keyframes heartBeat {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            14% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3)
            }

            28% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            42% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3)
            }

            70% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes heartBeat {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            14% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3)
            }

            28% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            42% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3)
            }

            70% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        .heartBeat {
            -webkit-animation-name: heartBeat;
            animation-name: heartBeat;
            -webkit-animation-duration: 1.3s;
            animation-duration: 1.3s;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn
        }

        @-webkit-keyframes fadeInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }

            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }
        }

        @keyframes fadeInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }

            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }
        }

        .fadeInLeft {
            -webkit-animation-name: fadeInLeft;
            animation-name: fadeInLeft
        }

        @-webkit-keyframes fadeInRight {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }

            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }
        }

        @keyframes fadeInRight {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }

            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }
        }

        .fadeInRight {
            -webkit-animation-name: fadeInRight;
            animation-name: fadeInRight
        }

        body {
            background-color: var(--bgColor);
            overflow-x: hidden;
            overflow-y: hidden;
        }

        header {
            width: 50%;
            margin: 0 auto;
        }

        #image {
            display: block;
            margin: 4rem auto;
            border-radius: 10px;
            box-shadow: 0 0 15pt rgba(255, 255, 255, 0.3);
        }

        #links {
            width: 90%;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .link1 {
            display: block;
            background-color: var(--pink);
            color: var(--white);
            font-family: var(--font);
            font-weight: 700;
            text-align: center;
            margin-bottom: 20px;
            padding: 15px;
            text-decoration: none;
            font-size: 1rem;
            transition: all .25s cubic-bezier(.08, .59, .29, .99);
            border: solid var(--black) 2px;
            border-radius: 10px;
        }

        .link1:hover {
            background-color: var(--pink-hover);
            color: var(--white);
        }

        .link2 {
            display: block;
            background-color: var(--purple);
            color: var(--white);
            font-family: var(--font);
            font-weight: 700;
            text-align: center;
            margin-bottom: 20px;
            padding: 15px;
            text-decoration: none;
            font-size: 1rem;
            transition: all .25s cubic-bezier(.08, .59, .29, .99);
            border: solid var(--black) 2px;
            border-radius: 10px;
        }

        .link2:hover {
            background-color: var(--purple-hover);
            color: var(--white);
        }

        .rose {
            color: var(--rose);
        }

        .nulz {
            margin: 4rem;
        }

        .ganteng {
            width: 100%;
            margin: 0 auto;
        }

        .ganteng p {
            margin: 4rem auto;
            text-align: center;
            color: var(--white);
            font-family: sans-serif;
        }

        h5 {
            text-align: center;
            margin-bottom: 20px;
            color: var(--accentColor);
            font-family: var(--font);
            font-style: italic;
        }

        .font-normal {
            font-weight: 500;
        }

        h1 {
            text-align: center;
            color: var(--white);
            font-family: var(--font);
        }

        h6 {
            text-align: center;
            margin-bottom: 20px;
            color: rgb(136, 136, 136);
            font-family: var(--font);
        }

        a {
            font-size: 1rem;
            font-weight: 600;
            display: block;
            font-family: var(--font);
            width: 100%;
            text-decoration: none;
            color: var(--rose);
        }

        footer {
            color: var(--white);
            text-align: center;
            margin: 0 auto 2rem;
        }
    </style>
</head>

<body>
    <header>
        <amp-img id="image" src="https://i.ibb.co/7CJLSJJ/4.jpg"
        alt="Situs Slot Gacor" width="900" height="700" layout="intrinsic"></amp-img>
    </header>
    <div class="created by ">
        <h1>⭐SITUS BETTING ONLINE TERBAIK⭐</h1>
        <div class="Situs Slot Gacor">
        </div>
    </div>
	<br>
    <div id="links">
        <a class="link1 animated fadeInLeft slow" href="https://linkdaftar-evs.pages.dev/" target="_blank" rel="nofollow">DAFTAR</a>
	</div>
	<div id="links">
        <a class="link1 animated fadeInLeft slow" href="https://linkdaftar-evs.pages.dev/" target="_blank" rel="nofollow">LOGIN</a>
	</div>

    <footer class="animated fadeIn slow delay-1s">
        <span>&copy;2024 <a href="https://alternatif.desxsports.com/?support=<?php echo $SHOOT?>" class="rose">Situs Slot Gacor</a> TERBAIK</span>
    </footer>
</body>
</html>
