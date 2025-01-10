<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="canonical" href="https://burgessgroup.org<?php echo $_SERVER['REQUEST_URI']; ?>">

    <meta name="description" content="Burgess Group. The team that delivers.">
    <meta name="keywords" content="">

    <!--Social Media Display-->
    <meta property="og:title" content="Burgess Group" />
    <meta property="og:description" content="The team that delivers." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://burgessgroup.org" />
    <!-- <meta property="og:image" content="XXX" />
    <meta property="og:image:secure_url" content="XXX" /> -->

    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/icons/favicon-16x16.png">
    <link rel="manifest" href="/images/icons/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!--Preload-->
    <link rel="preload" as="image" href="/images/burgess_logob.png">
    <!-- for mobile background -->
    <!-- what is this -->
    <!-- <link rel="preload" as="image" href="XXX"> -->
    <link rel="preload" as="font" type="font/woff2" href="/fonts/inter-v7-latin-700.woff2" crossorigin>
    <link rel="preload" as="font" type="font/woff2" href="/fonts/raleway-v26-latin-regular.woff2" crossorigin>

    <!-- CSS -->
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" media="print"
        onload="this.media='all'; this.onload=null;">
    <link rel="stylesheet" href="/styles/dark.css">
    <?php
    if (isset($page_css)) {
        foreach ($page_css as $css_file) {
            if (is_string($css_file)) {
                // Simple inclusion for string CSS file
                echo '<link rel="stylesheet" href="' . $css_file . '">' . PHP_EOL;
            } elseif (is_array($css_file)) {
                // Construct tag with attributes for array CSS file
                $href = $css_file['href'];
                unset($css_file['href']); // Remove href to loop through other attributes
                $attributes = '';
                foreach ($css_file as $key => $value) {
                    $attributes .= ' ' . $key . '="' . htmlspecialchars($value, ENT_QUOTES) . '"';
                }
                echo '<link rel="stylesheet" href="' . $href . '"' . $attributes . '>' . PHP_EOL;
            }
        }
    }
    ?>


    <!--Title-->
    <title><?php
            $title = basename($_SERVER['SCRIPT_FILENAME'], '.php');
            $title = str_replace('_', ' ', $title);
            if ($title == 'index') {
                $title = 'Home';
            }
            if ($title == 'about') {
                $title = 'About';
            }
            if ($title == 'contact') {
                $title = 'Contact';
            }
            if ($title == 'project') {
                $title = 'Projects';
            }
            $title = ucwords($title);
            echo $title;
            ?> | Burgess Group</title>

</head>

<body>

    <a class="skip" aria-label="skip to main content" href="#main">Click To Skip To Main</a>

    <button class="dark-mode-button top-dark-mode-button" aria-label="dark mode toggle">
        <img class="moon white" aria-hidden="true" src="/images/moon.svg" alt="moon" width="24" height="24">
        <img class="moon remove" aria-hidden="true" src="/images/moon.svg" alt="moon" width="24" height="24">
        <img class="sun" aria-hidden="true" src="/images/sun.svg" alt="sun" width="24" height="24">
    </button>
    <header>

        <!-- Mobile Nav Strip -->
        <div class="mobile-wrapper">
            <div class="mobile-nav container mobile-nav-container">
                <a aria-label="click to go to home page" href="/index.php">
                    <img class="light" src="/images/burgess_logob.png" alt="mobile_company_logo" width="110"
                        height="32">
                    <img class="dark" src="/images/burgess_logob_dual.png" alt="mobile_company_logo" width="110"
                        height="32">
                </a>

                <!-- Hamburger Menu -->
                <button aria-label="open the menu" id="menu-button" class="hamburger hamburger--spring"
                    onclick="toggleNav()" type="button">
                    <span aria-hidden="true" class="hamburger-box">
                        <span aria-hidden="true" class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>


        <!-- ============================================ -->
        <!--                   NAVIGATION                 -->
        <!-- ============================================ -->

        <nav>
            <div class="navbar-menu">
                <div id="side-menu" class=" side-nav">
                    <a aria-label="click to go to home page" class="nav-logo" href="/index.php">
                        <img class="light" aria-hidden="true" decoding="async" src="/images/burgess_logob.png"
                            alt="company logo" height="80">
                        <img class="dark" loading="lazy" aria-hidden="true" decoding="async"
                            src="/images/burgess_logob_dual.png" alt="company logo" height="80">
                    </a>
                    <ul id="on-top" class="navbar-links">
                        <li class="nav-li">
                            <a class="link <?php echo ($_SERVER['PHP_SELF'] === '/index.php' ? 'active-menu' : ''); ?>" href="/index.php">Home</a>
                        </li>
                        <li class="nav-li">
                            <a class="link <?php echo ($_SERVER['PHP_SELF'] === '/about.php' ? 'active-menu' : ''); ?>" href="/about.php">About</a>
                        </li>
                        <li class="nav-li">
                            <a class="link <?php echo ($_SERVER['PHP_SELF'] === '/projects.php' ? 'active-menu' : ''); ?>" href="/projects.php">Projects</a>
                        </li>
                        <li class="nav-li">
                            <a class="link <?php echo ($_SERVER['PHP_SELF'] === '/opportunities.php' ? 'active-menu' : ''); ?>" href="/opportunities.php">Opportunities</a>
                        </li>
                    </ul>

                    <a href="/opportunities.php#contact-form" class="contact-button button-solid">Contact Us</a>
                </div>
            </div>
        </nav>
    </header>