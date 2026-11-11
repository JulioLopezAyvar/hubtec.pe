<?php
    date_default_timezone_set('America/Lima');

	$config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/.env", true);
    extract($config);

    $domain = "hubtec.pe";

    $header_gtag = '
        <!-- Google Tag Manager -->
        <script async src="https://www.googletagmanager.com/gtm.js?id=GTM-MWSG82DD"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag("js", new Date());
        </script>
        <!-- End Google Tag Manager -->
    ';

    $header_public = ($MASTER_ENVIRONMENT == "prod" ? $header_gtag : null) . '
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>HubTec - Tecnología estratégica, resultados reales</title>

        <meta name="description" content="Con más de 25 años de trayectoria, ofrecemos soluciones para diferentes necesidades. Somos el centro de la transformación digital que necesitas">
        <meta name="keywords" content="hubtec, tecnologia, infraestructura, sistemas, erp, ciberseguridad, monitoreo, soc, soporte, cloud, nube, soluciones, digitalizacion, transformacion digital, consultoria, servicios it">
        <meta name="robots" content="index, follow">

        <!-- Open Graph Tags -->
        <meta property="og:title" content="Tecnología estratégica, resultados reales.">
        <meta property="og:description" content="Con más de 25 años de trayectoria, ofrecemos soluciones para diferentes necesidades. Somos el centro de la transformación digital que necesitas.">
        <meta property="og:image" content="https://' . $domain . '/assets/img/HubTec-LogoWEB.png">
        <meta property="og:url" content="https://' . $domain . '">
        <meta property="og:type" content="website">

        <!-- X/Twitter Graph Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Tecnología estratégica, resultados reales.">
        <meta name="twitter:description" content="Con más de 25 años de trayectoria, ofrecemos soluciones para diferentes necesidades. Somos el centro de la transformación digital que necesitas.">
        <meta name="twitter:image" content="https://' . $domain . '/assets/img/HubTec-LogoWEB.png">

        <!-- Favicons -->
        <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico" />
        <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon-96x96.png" />

        <link rel="apple-touch-icon" sizes="57x57" href="/img/apple-57x57-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="60x60" href="/img/apple-60x60-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="/img/apple-72x72-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-76x76-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="/img/apple-114x114-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="/img/apple-120x120-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="/img/apple-144x144-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="/img/apple-152x152-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-180x180-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="196x196" href="/img/android-chrome-196x196.png" />
        <link rel="icon" type="image/png" href="/img/android-chrome-192x192.png" sizes="192x192" type="image/png">
        <link rel="icon" type="image/png" href="/img/android-chrome-256x256.png" sizes="256x256" type="image/png">
        <link rel="icon" type="image/png" href="/img/android-chrome-384x384.png" sizes="384x384" type="image/png">
        <link rel="icon" type="image/png" href="/img/android-chrome-512x512.png" sizes="512x512" type="image/png">

        <meta name="theme-color" content="#e7d8b1" />
        
        <meta name="msapplication-TileColor" content="#e7d8b1" />
        <meta name="msapplication-TileImage" content="/img/windows-tile.png">
        <meta name="msapplication-square70x70logo" content="/img/windows-small-tile.png" />
        <meta name="msapplication-square150x150logo" content="/img/windows-medium-tile.png" />
        <meta name="msapplication-wide310x150logo" content="/img/windows-wide-tile.png" />
        <meta name="msapplication-square310x310logo" content="/img/windows-large-tile.png" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" integrity="sha512-rd0qOHVMOcez6pLWPVFIv7EfSdGKLt+eafXh4RO/12Fgr41hDQxfGvoi1Vy55QIVcQEujUE1LQrATCLl2Fs+ag==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Main CSS File -->
        <link href="/css/main.css" rel="stylesheet">
    ';
