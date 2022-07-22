<!DOCTYPE html>

<?php include("includes/info.php"); ?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $Lang_Code; ?>" xml:lang="<?php echo $Lang_Code; ?>">

<head>

    <!-- TWITTER -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="<?php echo $Host_Sitio; ?>">
    <meta name="twitter:title" content="<?php echo $Company_Name; ?>">
    <meta name="twitter:description" content="<?php echo $Description_Site; ?>">
    <meta name="twitter:creator" content="<?php echo $Company_Name; ?>">
    <meta name="twitter:image" content="/images/facebook/facebook.jpg">

    <!-- FACEBOOK -->
    <meta property="og:site_name" content="<?php echo $Company_Name; ?>" />
    <meta property="og:url" content="<?php echo $Host_Sitio; ?>" />
    <meta property="og:title" content="<?php echo $Company_Name; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="<?php echo $Description_Site; ?>" />
    <meta property="og:image" content="/images/facebook/facebook.jpg" />
    <meta property="og:image:width" content="1024" />
    <meta property="og:image:height" content="538" />

    <!-- METAS-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="<?php echo $Description_Site; ?>" />
    <meta name="keywords" content="<?php echo $Keywords_Site; ?>" />
    <meta name="autor" content="<?php echo $Company_Name; ?>" />

    <title><?php echo $Company_Name; ?></title>

    <!-- STYLES-->
    <link rel="stylesheet" type="text/css" href="./css/reset.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/root.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/main.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/navigation/navigation.css" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" />

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="57x57" href="./images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon/favicon-16x16.png">
    <link rel="manifest" href="./images/favicon/manifest.json">
    <meta name="msapplication-config" content="./images/favicon/browserconfig.xml" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <Link rel="shortcut icon" href="./images/favicon/favicon.ico" />

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- MANIFEST -->
    <link rel="manifest" href="./manifest.json">

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/61dcaa7bf7cf527e84d16d66/1fp2vjsso';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</head>
<body>

    <!-- ============================================== -->
    <!-- PRELOAD -->
    <!-- ============================================== -->

    <div class="preloader">
        <div class="logo-icon"></div>
    </div>

    <?php
        // switch($idioma){
        //     case 'english':
        //         include("popup.php");
        //         break;
        //     case 'spanish':
        //         include("popup.php");
        //         break;
        //     default:
        //         break;
        // }
        include("popup.php");
    ?>

    <!-- ============================================== -->
    <!-- NAVIGATION -->
    <!-- ============================================== -->

    <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script><div id="coinmarketcap-widget-marquee" coins="1,1027,825,1839,5426,1958,4687" currency="USD" theme="dark" transparent="false" show-symbol-logo="true"></div>

    <header class="header">
        <div class="d-flex jc-between ai-center">
            <div class="d-flex ai-center">
                <a href="./" class="logo"><img src="./images/logo/logo.svg"></a>
                <div class="button-menu lang">
                    <div onclick="myFunction()" class="btn language d-flex ai-center jc-center"><span><?php echo $Lang_Btn?></span></div>
                    <ul id="button-menu" class="button-menu-close">
                        <li><a href='?language=english' class="active">English</a></li>
                        <li><a href='?language=spanish'>Spanish</a></li>
                        <li><a href='?language=portuguese'>Portuguese</a></li>
                        <li><a href='?language=chinese'>Chinese</a></li>
                        <li><a href='?language=korean'>Korean</a></li>
                        <li><a href='?language=filipino'>Filipino</a></li>
                        <li><a href='?language=thailandes'>Thai</a></li>
                    </ul>
                </div>
            </div>

            <button class="menu-bars">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <nav id="nav-primary" class="nav">
                <a href="#hero" class="nav-item"><?php echo $Menu_Home; ?></a>
                <a href="#bonds" class="nav-item"><?php echo $Menu_Bonds; ?></a>
                <a href="#plans" class="nav-item"><?php echo $Menu_Plans; ?></a>
                <a href="https://my.cryptocnl.com/" class="nav-btn button-line" target="_blank"><?php echo $Menu_Login; ?></a>
                <a href="https://my.cryptocnl.com/join/<?php echo $_SESSION['user_replica']; ?>?locale=<?php echo $Conditions_Language; ?>" class="nav-btn button" target="_blank"><?php echo $Menu_Register; ?></a>
                <a href="https://cryptocnl.com/download/crypto_CNL.pdf" target="_blank" class="nav-btn button cta"><?php echo $Menu_Money; ?></a>
                <span class="rel coinmama-wrap">
                    <div id="coinmama" class="nav-btn button">Coinmama</div>
                    <div id="coinmama-ops" class="abs">
                        <a class="coinmama-links" href="https://go.coinmama.com/visit/?bta=67374&nci=5360" target="_Top"><?php echo $Coinmama1; ?></a>
                        <a class="coinmama-links" href="https://go.coinmama.com/visit/?bta=67374&nci=5383" target="_blank"><?php echo $Coinmama2; ?></a>
                        <a class="coinmama-links" href="https://go.coinmama.com/visit/?bta=67374&nci=5387" target="_blank"><?php echo $Coinmama3; ?></a>
                    </div>
                </span>
            </nav>
        </div>
    </header>

    <!-- ============================================== -->
    <!-- PAGE CONTENT -->
    <!-- ============================================== -->

    <main id="page-content">