<head>

    <?php wp_head(); 
    //$clickid = $_GET('clickTrack');
    ?>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                ‘
                gtm.start’: new Date().getTime(),
                event: ‘gtm.js’
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != ‘dataLayer’ ? ‘ & l = ‘+l : ‘’;
            j.async = true;
            j.src = ’https: //www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window, document, ‘script’, ‘dataLayer’, ‘GTM - MNNVHFG’);
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src=“https://www.googletagmanager.com/ns.html?id=GTM-MNNVHFG” height=“0" width=“0” style=“display:none;visibility:hidden”></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

     <!-- Fav icon -->
    <link rel="icon" href="https://codespread-assets.s3.us-west-2.amazonaws.com/wordpress/favicon_bg.webp">
    <title>CodeSpread</title>
</head>

<body>

    <!-- Header -->
    <header>

        <section id="header-container">

            <div class="navbar">
                <a href="<?php echo site_url() ?>">
                    <img src="https://codespread-assets.s3.us-west-2.amazonaws.com/wordpress/Logo-white.svg?clickid=$clickid" id="logo">
                </a>
            </div>

            <div class="navbar" id="desktop-menu">

                <nav>

                    <?php wp_nav_menu(array('theme_location' => 'headerMenu')); ?>

                </nav>

            </div>

            <div class="navbar">

                <div id="signlog">
                    <a href="https://app.codespread.io/auth/login" target="_blank" id="login">Log In</a>
                    <a href="https://app.codespread.io/auth/login" target="_blank" id="signup">Sign Up</a>

                </div>

            </div>

        </section>

    </header>
    <!-- Header -->

    <section class="mobile-nav">

        <div class="mobile-column">
            <a href="<?php echo site_url() ?>">
                <img src="https://codespread-assets.s3.us-west-2.amazonaws.com/wordpress/Logo-white.svg" id="logo-mobile">
            </a>
        </div>

        <div class="mobile-column icon">
            <div class="openmenu"><i class="fa-solid fa-bars"></i></div>
            <div class="closemenu"><i class="fa-solid fa-xmark"></i></div>
        </div>


    </section>

    <section class="sub-menu">

        <ul class="mainmenu">
            <!--  <div class="closemenu"><i class="fas fa-times"></i></div> -->
            <?php wp_nav_menu(array('theme_location' => 'headerMenu')); ?>
            <!-- <li><a href="index.html">About Us</a></li>
                <li><a href="nosotros.html">For Developers</a></li>
                <li><a href="servicios.html">For Clients</a></li>
                <li><a href="servicios.html">Contact Us</a></li> -->
            <li><a href="https://app.codespread.io/auth/login" target="_blank">Log In</a></li>
            <li><a href="https://app.codespread.io/auth/login" target="_blank">Sign Up</a></li>
        </ul>

    </section>

</body>

</html>