<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="profile" href="https://gmpg.org/xfn/11" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll">

<?php wp_body_open(); ?>


<!-- header -->

<header class="en">

    <?php
    if (is_front_page()) {
        $slash = '';
    } else {
        $slash = '/';
    }
    ?>

    <nav class="container navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="<?php echo $slash; ?>#">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="SWINDLER">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $slash; ?>#section-about">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $slash; ?>#section-services">SKILLSET</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $slash; ?>#section-portfolio">PORTFOLIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $slash; ?>#section-news">NEWS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $slash; ?>#section-contact">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav>

<!--
    <?php //if (is_front_page()) : ?>

        <nav class="container navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="SWINDLER">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#section-about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section-services">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section-portfolio">PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section-news">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section-contact">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>

    <?php //else : ?>

        <nav class="container navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="SWINDLER">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/#section-about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#section-services">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#section-portfolio">PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#section-news">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#section-contact">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>

    <?php //endif; ?>
 -->

</header>

<article>
