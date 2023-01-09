<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>


<?php //get_template_part( 'template-parts/header/site-header' ); ?>




<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <title>Nitro Network</title>



    <link rel="stylesheet" id="wp-block-library-css"
        href="<?php bloginfo('template_directory'); ?>/assets/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="classic-theme-styles-css"
        href="<?php bloginfo('template_directory'); ?>/assets/css/classic-themes.min.css" type="text/css" media="all">
    <style id="global-styles-inline-css" type="text/css">
    body {
        --wp--preset--color--black: #00153e;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--duotone--dark-grayscale: url('index_1.html#wp-duotone-dark-grayscale');
        --wp--preset--duotone--grayscale: url('index_1.html#wp-duotone-grayscale');
        --wp--preset--duotone--purple-yellow: url('index_1.html#wp-duotone-purple-yellow');
        --wp--preset--duotone--blue-red: url('index_1.html#wp-duotone-blue-red');
        --wp--preset--duotone--midnight: url('index_1.html#wp-duotone-midnight');
        --wp--preset--duotone--magenta-yellow: url('index_1.html#wp-duotone-magenta-yellow');
        --wp--preset--duotone--purple-green: url('index_1.html#wp-duotone-purple-green');
        --wp--preset--duotone--blue-orange: url('index_1.html#wp-duotone-blue-orange');
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
    }

    :where(.is-layout-flex) {
        gap: 0.5em;
    }

    body .is-layout-flow>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-flow>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-flow>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-constrained>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-constrained>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignwide {
        max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
        display: flex;
    }

    body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    body .is-layout-flex>* {
        margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
    }
    </style>
    <link rel="stylesheet" id="contact-form-7-css" href="<?php bloginfo('template_directory'); ?>/assets/css/styles.css"
        type="text/css" media="all">
    <style id="contact-form-7-inline-css" type="text/css">
    .wpcf7 .wpcf7-recaptcha iframe {
        margin-bottom: 0;
    }

    .wpcf7 .wpcf7-recaptcha[data-align="center"]>div {
        margin: 0 auto;
    }

    .wpcf7 .wpcf7-recaptcha[data-align="right"]>div {
        margin: 0 0 0 auto;
    }
    </style>
    <link rel="stylesheet" id="gdlr-core-google-font-css"
        href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&amp;subset=cyrillic%2Ccyrillic-ext%2Cgreek%2Cgreek-ext%2Clatin%2Clatin-ext%2Cvietnamese&amp;ver=6.1.1"
        type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-css"
        href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome_1.css" type="text/css" media="all">
    <link rel="stylesheet" id="fa5-css" href="<?php bloginfo('template_directory'); ?>/assets/css/fa5.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="elegant-font-css"
        href="<?php bloginfo('template_directory'); ?>/assets/css/elegant-font.css" type="text/css" media="all">
    <link rel="stylesheet" id="ionicons-css" href="<?php bloginfo('template_directory'); ?>/assets/css/ionicons.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="simple-line-icons-css"
        href="<?php bloginfo('template_directory'); ?>/assets/css/simpleline.css" type="text/css" media="all">
    <link rel="stylesheet" id="gdlr-core-plugin-css"
        href="<?php bloginfo('template_directory'); ?>/assets/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="gdlr-core-page-builder-css"
        href="<?php bloginfo('template_directory'); ?>/assets/css/page-builder.css" type="text/css" media="all">
    <link rel="stylesheet" id="bodhi-svgs-attachment-css"
        href="<?php bloginfo('template_directory'); ?>/assets/css/svgs-attachment.css" type="text/css" media="all">
    <link rel="stylesheet" id="seocrawler-style-core-css"
        href="<?php bloginfo('template_directory'); ?>/assets/css/style-core.css" type="text/css" media="all">
    <link rel="stylesheet" id="seocrawler-custom-style-css"
        href="<?php bloginfo('template_directory'); ?>/assets/css/seocrawler-style-custom.css" type="text/css"
        media="all">
    <link rel="stylesheet" id="pscrollbar-css"
        href="<?php bloginfo('template_directory'); ?>/assets/css/perfect-scrollbar.min.css" type="text/css"
        media="all">
    <link rel="stylesheet" id="owlcarousel-css"
        href="<?php bloginfo('template_directory'); ?>/assets/css/owl.carousel.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="quadmenu-normalize-css"
        href="<?php bloginfo('template_directory'); ?>/assets/css/quadmenu-normalize.min.css" type="text/css"
        media="all">
    <link rel="stylesheet" id="quadmenu-widgets-css"
        href="<?php bloginfo('template_directory'); ?>/assets/css/quadmenu-widgets.css" type="text/css" media="all">
    <link rel="stylesheet" id="quadmenu-css" href="<?php bloginfo('template_directory'); ?>/assets/css/quadmenu.min.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="quadmenu-locations-css"
        href="<?php bloginfo('template_directory'); ?>/assets/css/quadmenu-locations.css" type="text/css" media="all">
    <link rel="stylesheet" id="dashicons-css"
        href="<?php bloginfo('template_directory'); ?>/assets/css/dashicons.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="redux-google-fonts-quadmenu_seocrawler-css"
        href="https://fonts.googleapis.com/css?family=Roboto&amp;ver=1663421099" type="text/css" media="all">

    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"
        id="jquery-core-js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-migrate.min.js"
        id="jquery-migrate-js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/preloader-script.js"
        id="wptime-plugin-preloader-script-js"></script>

    <meta name="cdp-version" content="1.3.6">
    <style>
    @media only screen and (max-width: 999px) {
        #gdlr-core-wrapper-1.gdlr-core-pbf-wrapper {
            padding-top: 0px !important;
        }

        #gdlr-core-wrapper-1.gdlr-core-pbf-wrapper {}
    }

    @media only screen and (max-width: 767px) {
        #gdlr-core-wrapper-1.gdlr-core-pbf-wrapper {
            padding-top: 0px !important;
        }
    }

    #gdlr-core-column-1:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-1:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-1:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    @media only screen and (max-width: 767px) {
        #gdlr-core-wrapper-2.gdlr-core-pbf-wrapper {
            padding: 0px 0px 0px 0px !important;
        }

        #gdlr-core-wrapper-2.gdlr-core-pbf-wrapper {}
    }

    #gdlr-core-column-2:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-2:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-2:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    @media only screen and (max-width: 767px) {
        #gdlr-core-column-2 .gdlr-core-pbf-column-content-margin {
            margin: 0px 0px -10px 0px !important;
        }
    }

    #gdlr-core-column-3:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-3:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-3:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    #gdlr-core-column-4:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-4:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-4:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    #gdlr-core-button-id-1 {
        font-size: 16px;
        font-weight: 600;
        letter-spacing: 1px;
        color: #ffffff;
        padding: 13px 33px 15px 33px;
        text-transform: uppercase;
        border-radius: 35px;
        -moz-border-radius: 35px;
        -webkit-border-radius: 35px;
        background: #3fff61;
        background: linear-gradient(#3fff61, #15ffdb);
        -moz-background: linear-gradient(#3fff61, #15ffdb);
        -o-background: linear-gradient(#3fff61, #15ffdb);
        -webkit-background: linear-gradient(#3fff61, #15ffdb);
        border-width: 0px 0px 0px 0px;
    }

    #gdlr-core-button-id-1:hover {
        color: #0a0a0a;
    }

    #gdlr-core-column-5:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-5:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-5:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    @media only screen and (max-width: 767px) {
        #100percent .gdlr-core-title-item-title {
            font-size: 45px !important;
        }
    }

    #gdlr-core-column-6:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-6:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-6:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    #gdlr-core-column-7:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-7:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-7:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    #gdlr-core-column-8:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-8:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-8:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    #gdlr-core-column-9:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-9:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-9:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    #gdlr-core-column-10:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-10:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-10:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    #gdlr-core-column-11:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-11:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-11:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    #gdlr-core-column-12:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-12:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-12:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    #gdlr-core-button-id-2 {
        font-size: 16px;
        font-weight: 600;
        letter-spacing: 1px;
        color: #ffffff;
        padding: 13px 33px 15px 33px;
        text-transform: uppercase;
        border-radius: 40px;
        -moz-border-radius: 40px;
        -webkit-border-radius: 40px;
        background: #15ffdb;
        background: linear-gradient(#15ffdb, #3fff61);
        -moz-background: linear-gradient(#15ffdb, #3fff61);
        -o-background: linear-gradient(#15ffdb, #3fff61);
        -webkit-background: linear-gradient(#15ffdb, #3fff61);
        border-width: 0px 0px 0px 0px;
    }

    #gdlr-core-button-id-2:hover {
        color: #00153e;
    }

    @media only screen and (max-width: 999px) {
        #gdlr-core-wrapper-3.gdlr-core-pbf-wrapper {
            padding-top: 0px !important;
        }

        #gdlr-core-wrapper-3.gdlr-core-pbf-wrapper {}
    }

    @media only screen and (max-width: 767px) {
        #gdlr-core-wrapper-3.gdlr-core-pbf-wrapper {
            padding-top: 0px !important;
        }
    }

    #gdlr-core-column-13:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-13:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-13:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    @media only screen and (max-width: 767px) {
        #gdlr-core-wrapper-4.gdlr-core-pbf-wrapper {
            padding-top: 10px !important;
            padding-bottom: 20px !important;
        }

        #gdlr-core-wrapper-4.gdlr-core-pbf-wrapper {}
    }

    #gdlr-core-column-14:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-14:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-14:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    @media only screen and (max-width: 767px) {
        #gdlr-core-column-14 .gdlr-core-pbf-column-content-margin {
            padding-top: 50px !important;
        }
    }

    @media only screen and (max-width: 767px) {
        #gdlr-core-title-item-1 .gdlr-core-title-item-title {
            font-size: 26px !important;
        }
    }

    @media only screen and (max-width: 767px) {
        #gdlr-core-wrapper-5.gdlr-core-pbf-wrapper {
            padding-top: 10px !important;
            padding-bottom: 90px !important;
        }

        #gdlr-core-wrapper-5.gdlr-core-pbf-wrapper {}
    }

    #gdlr-core-column-15:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-15:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-15:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    @media only screen and (max-width: 767px) {
        #gdlr-core-column-15 .gdlr-core-pbf-column-content-margin {
            padding-top: 50px !important;
            padding-bottom: 50px !important;
        }
    }

    @media only screen and (max-width: 767px) {
        #gdlr-core-title-item-2 .gdlr-core-title-item-title {
            font-size: 26px !important;
        }
    }

    #gdlr-core-column-16:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-16:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-16:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    @media only screen and (max-width: 767px) {
        #gdlr-core-column-16 .gdlr-core-pbf-column-content-margin {
            margin-top: -70px !important;
            margin-right: 15px !important;
        }
    }

    #gdlr-core-column-17:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-17:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-17:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    #gdlr-core-column-18:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-18:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-18:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    #gdlr-core-column-19:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-19:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-19:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    #gdlr-core-column-20:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-20:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-20:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    @media only screen and (max-width: 767px) {
        #gdlr-core-wrapper-6.gdlr-core-pbf-wrapper {
            padding: 0px 0px 0px 0px !important;
        }

        #gdlr-core-wrapper-6.gdlr-core-pbf-wrapper {}
    }

    #gdlr-core-column-21:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-21:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-21:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    @media only screen and (max-width: 767px) {
        #gdlr-core-column-21 .gdlr-core-pbf-column-content-margin {
            margin: 0px 0px -10px 0px !important;
        }
    }

    @media only screen and (max-width: 767px) {
        #gdlr-core-wrapper-7.gdlr-core-pbf-wrapper {
            padding-top: 60px !important;
        }
    }

    #gdlr-core-column-22:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-22:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-22:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    @media only screen and (max-width: 767px) {
        #gdlr-core-column-22 .gdlr-core-pbf-column-content-margin {
            padding-bottom: 20px !important;
        }
    }

    #gdlr-core-column-23:hover .gdlr-core-pbf-column-content-margin,
    #gdlr-core-column-23:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-wrap,
    #gdlr-core-column-23:hover .gdlr-core-pbf-column-content-margin .gdlr-core-pbf-background-frame {
        border-color: #ffffff !important;
    }

    @media only screen and (max-width: 767px) {
        #gdlr-core-column-23 .gdlr-core-pbf-column-content-margin {
            padding-top: 10px !important;
            padding-bottom: 10px !important;
        }
    }
    </style>
    <style type="text/css">
    #wptime-plugin-preloader {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url(<?php bloginfo('template_directory');
        ?>/assets/images/preloader.GIF) no-repeat #FFFFFF 50%;
        -moz-background-size: 64px 64px;
        -o-background-size: 64px 64px;
        -webkit-background-size: 64px 64px;
        background-size: 64px 64px;
        z-index: 99998;
        width: 100%;
        height: 100%;
    }
    </style>
    <noscript>
        <style type="text/css">
        #wptime-plugin-preloader {
            display: none !important;
        }
        </style>
    </noscript>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    #quadmenu.quadmenu-is-horizontal .quadmenu-navbar-nav li.quadmenu-dropdown>.quadmenu-dropdown-menu.quadmenu-dropdown-stretch-dropdown>ul,
    #quadmenu.quadmenu-is-horizontal .quadmenu-navbar-nav li.quadmenu-dropdown>.quadmenu-dropdown-menu.quadmenu-dropdown-stretch-dropdown>.quadmenu-dropdown-background {
        margin-right: -50px;
    }

    #quadmenu .quadmenu-navbar-nav .col-lg-6 {
        background-color: black;
    }

    #quadmenu.quadmenu-is-horizontal .quadmenu-navbar-nav li.quadmenu-item.open>.quadmenu-dropdown-menu.quadmenu_fadeIn,
    #quadmenu.quadmenu-is-horizontal .quadmenu-navbar-nav li.quadmenu-item.open>.quadmenu-dropdown-menu.quadmenu_btt,
    #quadmenu.quadmenu-is-horizontal .quadmenu-navbar-nav li.quadmenu-item.open>.quadmenu-dropdown-menu.quadmenu_rtl,
    #quadmenu.quadmenu-is-horizontal .quadmenu-navbar-nav li.quadmenu-item.open>.quadmenu-dropdown-menu.quadmenu_ltr,
    #quadmenu.quadmenu-is-horizontal .quadmenu-navbar-nav li.quadmenu-item.open>.quadmenu-dropdown-menu.quadmenu_hinge,
    #quadmenu.quadmenu-is-horizontal .quadmenu-navbar-nav li.quadmenu-item.open>.quadmenu-dropdown-menu.quadmenu_flip {
        margin-right: -50px;
    }

    #quadmenu.quadmenu-default_theme.quadmenu-is-horizontal .quadmenu-navbar-nav .quadmenu-dropdown-menu>ul>li:last-child,
    #quadmenu.quadmenu-default_theme.quadmenu-is-horizontal .quadmenu-navbar-nav .quadmenu-dropdown-menu>ul>li:last-child>a {
        padding: 0px;
    }

    #quadmenu .quadmenu-navbar-nav .col-sm-8 {
        padding-left: 0px;
    }

    #quadmenu.quadmenu-is-horizontal .quadmenu-item-type-column>div>ul {
        padding-bottom: 0px;
    }

    #quadmenu img {
        margin-bottom: 0px;
    }

    #quadmenu.quadmenu-is-horizontal .quadmenu-navbar-nav li.quadmenu-dropdown>.quadmenu-dropdown-menu.quadmenu-dropdown-stretch-dropdown>ul,
    #quadmenu.quadmenu-is-horizontal .quadmenu-navbar-nav li.quadmenu-dropdown>.quadmenu-dropdown-menu.quadmenu-dropdown-stretch-dropdown>.quadmenu-dropdown-background {
        border-left: 990px solid transparent;
        border-right: 1000px solid transparent;
    }
    </style>
    <style type="text/css">
    .recentcomments a {
        display: inline !important;
        padding: 0 !important;
        margin: 0 !important;
    }
    </style>
    <meta name="generator"
        content="Powered by Slider Revolution 6.6.5 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface.">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/images/cropped-LOGO-01-2-32x32.png"
        sizes="32x32">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/images/cropped-LOGO-01-2-192x192.png"
        sizes="192x192">
    <link rel="apple-touch-icon"
        href="<?php bloginfo('template_directory'); ?>/assets/images/cropped-LOGO-01-2-180x180.png">
    <meta name="msapplication-TileImage" content="wp-content/uploads/2020/07/cropped-LOGO-01-2-270x270.png">
    <script>
    function setREVStartSize(e) {
        //window.requestAnimationFrame(function() {
        window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
        window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
        try {
            var pw = document.getElementById(e.c).parentNode.offsetWidth,
                newh;
            pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
            e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
            e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
            e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
            e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
            e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
            e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
            e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
            if (e.layout === "fullscreen" || e.l === "fullscreen")
                newh = Math.max(e.mh, window.RSIH);
            else {
                e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                for (var i in e.rl)
                    if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                for (var i in e.rl)
                    if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                var nl = new Array(e.rl.length),
                    ix = 0,
                    sl;
                e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                sl = nl[0];
                for (var i in nl)
                    if (sl > nl[i] && nl[i] > 0) {
                        sl = nl[i];
                        ix = i;
                    }
                var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
            }
            var el = document.getElementById(e.c);
            if (el !== null && el) el.style.height = newh + "px";
            el = document.getElementById(e.c + "_wrapper");
            if (el !== null && el) {
                el.style.height = newh + "px";
                el.style.display = "block";
            }
        } catch (e) {
            console.log("Failure at Presize of Slider:" + e)
        }
        //});
    };
    </script>
    <style type="text/css" id="wp-custom-css">
    .seocrawler-header-background,
    .seocrawler-sticky-menu-placeholder,
    .seocrawler-header-style-boxed.seocrawler-fixed-navigation {
        background-color: #00153e;
    }

    .seocrawler-footer-wrapper {
        background: rgb(63, 255, 97);
        background: linear-gradient(0deg, rgba(63, 255, 97, 1) 0%, rgba(19, 255, 219, 1) 68%);
        background-size: cover;
    }

    .seocrawler-copyright-wrapper {
        background-color: #3fff61;
    }

    .seocrawler-navigation .sf-menu>li>a,
    .seocrawler-navigation .sf-vertical>li>a {
        text-transform: none;
        font-weight: 300 !important;
        font-size: 15px;
        margin-bottom: 20px;
    }

    .gdlr-core-flexslider .flex-control-nav {
        list-style: none;
        line-height: 0;
        line-height: unset;
        margin-top: 30px;
        text-align: center;
        margin-left: 0px;
    }

    ul.gdlr-core-custom-menu-widget.gdlr-core-menu-style-plain li {
        margin-top: -15px;
    }

    .vmsstats .gdlr-core-counter-item {
        background-color: black !important;
    }

    .scheduleademoLP .gdlr-core-content,
    .scheduleademoLPTWO .gdlr-core-content {
        font-size: 30px;
    }

    .viewmoreservices .gdlr-core-content {
        font-size: 28px;
    }

    .site .ares.tparrows {
        z-index: 16000;
    }

    .ares .tp-bullet.selected:hover .tp-bullet-title {
        display: none;
    }

    .hundredpercent {
        text-shadow: 1px 1px 3px graytext;
    }

    .menu-item .menu-item-type-custom .menu-item-object-custom .menu-item-has-children .menu-item-14117 .seocrawler-normal-menu {
        margin-left: -70px !important;
        padding-left: -70px !important;
    }

    .seocrawler-mobile-header .seocrawler-logo-inner img {
        margin-bottom: -10px
    }

    .seocrawler-header-container.seocrawler-header-full {
        padding-left: 10px;
        padding-right: 40px;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    body .pressreleale #simple-translate>div>div.simple-translate-panel {
        display: none;
    }
    </style>
</head>

<body
    class="home page-template-default page page-id-5 gdlr-core-body seocrawler-body seocrawler-body-front seocrawler-full seocrawler-with-sticky-navigation gdlr-core-link-to-lightbox">
    <div class="seocrawler-mobile-header-wrap">
        <div class="seocrawler-mobile-header seocrawler-header-background seocrawler-style-slide"
            id="seocrawler-mobile-header">
            <div class="seocrawler-mobile-header-container seocrawler-container">
                <div class="seocrawler-logo seocrawler-item-pdlr">
                    <div class="seocrawler-logo-inner">
                        <a href="https://nitro.network"><img src="https://nitro.network/static/media/Logo.2a3c7d4a.png"
                                width="460" height="250" title="" /></a>
                    </div>
                </div>
                <div class="seocrawler-mobile-menu-right">
                    <div class="seocrawler-overlay-menu seocrawler-mobile-menu" id="seocrawler-mobile-menu">
                        <a class="seocrawler-overlay-menu-icon seocrawler-mobile-menu-button seocrawler-mobile-button-hamburger"
                            href="#"><span></span></a>
                        <div class="seocrawler-overlay-menu-content seocrawler-navigation-font">
                            <div class="seocrawler-overlay-menu-close"></div>
                            <div class="seocrawler-overlay-menu-row">
                                <div class="seocrawler-overlay-menu-cell">
                                    <nav id="quadmenu"
                                        class="quadmenu-default_theme quadmenu-v2.3.5 quadmenu-align-right quadmenu-divider-hide quadmenu-carets-show quadmenu-background-color quadmenu-mobile-shadow-show quadmenu-dropdown-shadow-show quadmenu-hover-ripple quadmenu-is-embed"
                                        data-template="embed" data-theme="default_theme" data-unwrap="1"
                                        data-breakpoint="768">
                                        <div class="quadmenu-container">
                                            <div id="quadmenu_0" class="quadmenu-navbar-collapse collapsed in">
                                                <ul class="quadmenu-navbar-nav">
                                                    <li id="menu-item-17137"
                                                        class="quadmenu-item-17137 igniteshield quadmenu-item quadmenu-item-object-mega quadmenu-item-has-children quadmenu-item-type-mega quadmenu-item-level-0 quadmenu-dropdown quadmenu-has-caret quadmenu-has-title quadmenu-has-link quadmenu-dropdown-right dropdown-maxheight">
                                                        <a href class="quadmenu-dropdown-toggle hoverintent">
                                                            <span class="quadmenu-item-content">
                                                                <span class="quadmenu-caret"></span>
                                                                <span class="quadmenu-text hover t_1000">Ignite
                                                                    Shield</span>
                                                            </span>
                                                        </a>
                                                        <div id="dropdown-17137"
                                                            class="quadmenu_btt t_300 quadmenu-dropdown-menu quadmenu-dropdown-stretch-dropdown">
                                                            <ul class="quadmenu-row">
                                                                <li id="menu-item-17140"
                                                                    class="quadmenu-item-17140 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-12 col-sm-4 col-lg-6">
                                                                    <div id="dropdown-17140" class>
                                                                        <ul>
                                                                            <li id="menu-item-17141"
                                                                                class="quadmenu-item-17141 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                                <div
                                                                                    class="quadmenu-item-widget widget widget_media_image">
                                                                                    <img width="1109" height="713"
                                                                                        src="<?php bloginfo('template_directory'); ?>/assets/images/ignite.jpg"
                                                                                        class="image wp-image-20285 attachment-full size-full"
                                                                                        alt="Ignite Shield Disrupt-X"
                                                                                        decoding="async" loading="lazy"
                                                                                        style="
                                                max-width: 100%;
                                                height: auto;
                                              " sizes="(max-width: 1109px) 100vw, 1109px" />
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li id="menu-item-17139"
                                                                    class="quadmenu-item-17139 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-3 col-lg-3">
                                                                    <div id="dropdown-17139" class>
                                                                        <ul>
                                                                            <li id="menu-item-18608"
                                                                                class="quadmenu-item-18608 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                                <div
                                                                                    class="quadmenu-item-widget widget widget_text">
                                                                                    <div class="textwidget">
                                                                                        <p>
                                                                                            <span style="
                                                    color: #3fff61;
                                                    font-size: 20px;
                                                  "><strong>Water Monitoring<br />
                                                                                                    ____________________</strong></span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="menu-item-18334"
                                                                                class="quadmenu-item-18334 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Swimming
                                                                                            Pool Monitoring</span>
                                                                                        <span
                                                                                            class="quadmenu-description">To
                                                                                            Monitor Water Quality of a
                                                                                            Swimming Pool Through
                                                                                            Sensors.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-18611"
                                                                                class="quadmenu-item-18611 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a href="page2.html">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Water
                                                                                            Tank Monitoring</span>
                                                                                        <span
                                                                                            class="quadmenu-description">To
                                                                                            Monitor The Water Quality Of
                                                                                            A Water Tank via Sensor
                                                                                            Readings
                                                                                            with Alarms</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-18667"
                                                                                class="quadmenu-item-18667 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Spa
                                                                                            Monitoring</span>
                                                                                        <span
                                                                                            class="quadmenu-description">IoT
                                                                                            Solution To Secure Safer
                                                                                            Water Quality In Spas By
                                                                                            Monitoring Sensor
                                                                                            Readings</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-17146"
                                                                                class="quadmenu-item-17146 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Water
                                                                                            Pressure Monitoring</span>
                                                                                        <span
                                                                                            class="quadmenu-description">IoT
                                                                                            Solution To Monitor Water
                                                                                            Pressure Through Bar
                                                                                            Readings
                                                                                            With Warnings.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-20087"
                                                                                class="quadmenu-item-20087 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Sewerage
                                                                                            Monitoring</span>
                                                                                        <span
                                                                                            class="quadmenu-description">IoT
                                                                                            Solution Which Uses Optical
                                                                                            Principle To Measure Degree
                                                                                            Of
                                                                                            Turbidity Of Water</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-19725"
                                                                                class="quadmenu-item-19725 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Smart
                                                                                            Water Monitoring</span>
                                                                                        <span
                                                                                            class="quadmenu-description">Designed
                                                                                            to handle leakage
                                                                                            detection with real-time
                                                                                            alerts.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li id="menu-item-17138"
                                                                    class="quadmenu-item-17138 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-4 col-lg-3">
                                                                    <div id="dropdown-17138" class>
                                                                        <ul>
                                                                            <li id="menu-item-17147"
                                                                                class="quadmenu-item-17147 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                                <div
                                                                                    class="quadmenu-item-widget widget widget_text">
                                                                                    <div class="textwidget">
                                                                                        <p>
                                                                                            <span style="
                                                    color: #00f4cf;
                                                    font-size: 20px;
                                                  "><strong>Air Quality Monitoring<br />
                                                                                                    ____________________</strong></span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="menu-item-19099"
                                                                                class="quadmenu-item-19099 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Indoor
                                                                                            Air Quality Monitoring
                                                                                            (IAQ)</span>
                                                                                        <span
                                                                                            class="quadmenu-description">IAQ
                                                                                            IoT Solution where Air
                                                                                            Quality Sensors plays an
                                                                                            important role to track
                                                                                            various
                                                                                            air sensors.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-17149"
                                                                                class="quadmenu-item-17149 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Outdoor
                                                                                            Air Quality Weather
                                                                                            Station</span>
                                                                                        <span
                                                                                            class="quadmenu-description">Outdoor
                                                                                            Air Quality IoT
                                                                                            Solution is designed to
                                                                                            monitor
                                                                                            various Air Quality Sensors
                                                                                            of
                                                                                            the Outdoor
                                                                                            environment.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-23081"
                                                                                class="quadmenu-item-23081 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Indoor
                                                                                            Air Quality Monitoring
                                                                                            (LoRaWAN)</span>
                                                                                        <span
                                                                                            class="quadmenu-description">Real-time
                                                                                            Air Quality
                                                                                            indoor-air-quality-monitoring
                                                                                            using LoRaWAN</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-19701"
                                                                                class="quadmenu-item-19701 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Cold
                                                                                            Storage Monitoring</span>
                                                                                        <span
                                                                                            class="quadmenu-description">Optimization
                                                                                            & proper
                                                                                            maintenance of the
                                                                                            goods/assets
                                                                                            that require well-balanced
                                                                                            temperature inside cold
                                                                                            storage.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-20289"
                                                                                class="quadmenu-item-20289 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                                <div
                                                                                    class="quadmenu-item-widget widget widget_text">
                                                                                    <div class="textwidget">
                                                                                        <p>
                                                                                            <span style="
                                                    color: #1e8d77;
                                                    font-size: 20px;
                                                  "><strong>Gas & Water Metering<br />
                                                                                                    ____________________</strong></span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="menu-item-20291"
                                                                                class="quadmenu-item-20291 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Smart
                                                                                            Gas Metering</span>
                                                                                        <span
                                                                                            class="quadmenu-description">IoT
                                                                                            Solution to monitor Gas
                                                                                            Meter remotely on a daily
                                                                                            basis.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-20293"
                                                                                class="quadmenu-item-20293 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Smart
                                                                                            Waste Management</span>
                                                                                        <span
                                                                                            class="quadmenu-description">IoT
                                                                                            Solution to monitor Water
                                                                                            Meter remotely on a daily
                                                                                            basis.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li id="menu-item-17322"
                                                        class="quadmenu-item-17322 quadmenu-item quadmenu-item-object-mega quadmenu-item-has-children quadmenu-item-type-mega quadmenu-item-level-0 quadmenu-dropdown quadmenu-has-caret quadmenu-has-title quadmenu-has-link quadmenu-dropdown-right dropdown-maxheight">
                                                        <a href class="quadmenu-dropdown-toggle hoverintent">
                                                            <span class="quadmenu-item-content">
                                                                <span class="quadmenu-caret"></span>
                                                                <span class="quadmenu-text hover t_1000">Metro
                                                                    Watch</span>
                                                            </span>
                                                        </a>
                                                        <div id="dropdown-17322"
                                                            class="quadmenu_btt t_300 quadmenu-dropdown-menu quadmenu-dropdown-stretch-dropdown">
                                                            <ul class="quadmenu-row">
                                                                <li id="menu-item-17324"
                                                                    class="quadmenu-item-17324 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-3 col-lg-3">
                                                                    <div id="dropdown-17324" class>
                                                                        <ul>
                                                                            <li id="menu-item-17327"
                                                                                class="quadmenu-item-17327 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                                <div
                                                                                    class="quadmenu-item-widget widget widget_text">
                                                                                    <div class="textwidget">
                                                                                        <p>
                                                                                            <span style="
                                                    color: #13ffdb;
                                                    font-size: 18px;
                                                  "><strong>Smart Parking Locks</strong></span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="menu-item-18466"
                                                                                class="quadmenu-item-18466 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Smart
                                                                                            2G/4G Parking Locks</span>
                                                                                        <span
                                                                                            class="quadmenu-description">Solving
                                                                                            Parking difficulties
                                                                                            for vehicle owners which
                                                                                            instantly improves parking
                                                                                            experience.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-18522"
                                                                                class="quadmenu-item-18522 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Smart
                                                                                            Bluetooth Parking
                                                                                            Locks</span>
                                                                                        <span
                                                                                            class="quadmenu-description">Smart
                                                                                            Bluetooth Parking Lock is
                                                                                            an IoT Solution designed for
                                                                                            an
                                                                                            easy use of a barrier to
                                                                                            secure
                                                                                            any parking space.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-19101"
                                                                                class="quadmenu-item-19101 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                                <div
                                                                                    class="quadmenu-item-widget widget widget_text">
                                                                                    <div class="textwidget">
                                                                                        <p>
                                                                                            <span style="
                                                    color: #1e8d77;
                                                    font-size: 18px;
                                                  "><strong><br />
                                                                                                    Secured
                                                                                                    Access</strong></span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="menu-item-19103"
                                                                                class="quadmenu-item-19103 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Asset
                                                                                            Tracking-IoT
                                                                                            Solution</span>
                                                                                        <span
                                                                                            class="quadmenu-description">Industry
                                                                                            Grade Asset Tracking
                                                                                            Solution for Indoor/Outdoor
                                                                                            Usage of any Assets.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-21184"
                                                                                class="quadmenu-item-21184 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Outdoor
                                                                                            Asset Tracker
                                                                                            2G/4G/NBIoT</span>
                                                                                        <span
                                                                                            class="quadmenu-description">Outdoor
                                                                                            Asset Tracker using
                                                                                            2G/4G/NBIoT designed for
                                                                                            asset
                                                                                            owners.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-21309"
                                                                                class="quadmenu-item-21309 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Outdoor
                                                                                            Sigfox / GPS
                                                                                            Tracker</span>
                                                                                        <span
                                                                                            class="quadmenu-description">A
                                                                                            global way of tracking
                                                                                            Outdoor Assets that ensures
                                                                                            awareness comes
                                                                                            first.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-21645"
                                                                                class="quadmenu-item-21645 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Personal
                                                                                            Tracker 4G / LTE /
                                                                                            NBIoT</span>
                                                                                        <span
                                                                                            class="quadmenu-description">From
                                                                                            pets to humans, designed
                                                                                            to track accurately through
                                                                                            IoT.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-22174"
                                                                                class="quadmenu-item-22174 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Smart
                                                                                            Solar Asset Tracker
                                                                                            4G</span>
                                                                                        <span
                                                                                            class="quadmenu-description">Prioritizing
                                                                                            sustainable
                                                                                            tracking of equipment,
                                                                                            machineries, &
                                                                                            assets.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-24055"
                                                                                class="quadmenu-item-24055 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Mobile
                                                                                            Cold Storage
                                                                                            (4G/NBIoT)</span>
                                                                                        <span
                                                                                            class="quadmenu-description">Designed
                                                                                            for a more flexible
                                                                                            tracking of asset
                                                                                            door/humidity/temp sensor
                                                                                            through IoT</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li id="menu-item-17323"
                                                                    class="quadmenu-item-17323 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-4 col-lg-3">
                                                                    <div id="dropdown-17323" class>
                                                                        <ul>
                                                                            <li id="menu-item-17326"
                                                                                class="quadmenu-item-17326 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                                <div
                                                                                    class="quadmenu-item-widget widget widget_text">
                                                                                    <div class="textwidget">
                                                                                        <p>
                                                                                            <span style="
                                                    color: #00f72c;
                                                    font-size: 20px;
                                                  "><strong>Smart Padlocks</strong></span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="menu-item-17329"
                                                                                class="quadmenu-item-17329 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Smart
                                                                                            Bluetooth Padlocks</span>
                                                                                        <span
                                                                                            class="quadmenu-description">Metro
                                                                                            Watch’s IoT Solution
                                                                                            using a Smart built
                                                                                            Bluetooth
                                                                                            Padlock that ensures
                                                                                            security in
                                                                                            homes, hospitality industry
                                                                                            and
                                                                                            more.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-17328"
                                                                                class="quadmenu-item-17328 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Smart
                                                                                            2G/Bluetooth/ NBIoT
                                                                                            Padlocks</span>
                                                                                        <span
                                                                                            class="quadmenu-description">Metro
                                                                                            Watch’s IoT Solution with
                                                                                            an intelligent 2G/
                                                                                            Bluetooth/
                                                                                            NBIoT Padlock allowing
                                                                                            consumers
                                                                                            to unlock remotely with
                                                                                            security.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-20921"
                                                                                class="quadmenu-item-20921 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Smart
                                                                                            BLE IoT Cable Lock</span>
                                                                                        <span
                                                                                            class="quadmenu-description">Metro
                                                                                            Watch’s IoT Solution with
                                                                                            Bluetooth connectivity
                                                                                            allowing
                                                                                            users to unlock their
                                                                                            assets/
                                                                                            property with practical
                                                                                            securuty.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-21050"
                                                                                class="quadmenu-item-21050 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Smart
                                                                                            4G Arm Locks</span>
                                                                                        <span
                                                                                            class="quadmenu-description">Securing
                                                                                            assets & premises
                                                                                            conveniently using Smart Arm
                                                                                            Locks through IoT.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-21474"
                                                                                class="quadmenu-item-21474 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Smart
                                                                                            4G/BLE/NBIoT
                                                                                            Padlocks</span>
                                                                                        <span
                                                                                            class="quadmenu-description">Metro
                                                                                            Watch’s IoT Solution with
                                                                                            a smart 4G/ BLE/ NBIoT
                                                                                            Padlock
                                                                                            device letting users to
                                                                                            unlock
                                                                                            remotely/bluetooth from
                                                                                            anywhere
                                                                                            in the world.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-21800"
                                                                                class="quadmenu-item-21800 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Smart
                                                                                            Cabinet Locks</span>
                                                                                        <span
                                                                                            class="quadmenu-description">Designed
                                                                                            for an easy
                                                                                            Lock/Unlock Bluetooth/NFC
                                                                                            IoT
                                                                                            Solution</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li id="menu-item-17325"
                                                                    class="quadmenu-item-17325 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-12 col-sm-4 col-lg-6">
                                                                    <div id="dropdown-17325" class>
                                                                        <ul>
                                                                            <li id="menu-item-17334"
                                                                                class="quadmenu-item-17334 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                                <div
                                                                                    class="quadmenu-item-widget widget widget_media_image">
                                                                                    <img width="1381" height="891"
                                                                                        src="<?php bloginfo('template_directory'); ?>/assets/images/Metro-Watch-Photo-for-Menu_uno-01.jpg"
                                                                                        class="image wp-image-17336 attachment-full size-full"
                                                                                        alt="Metro Watch Photo for Menu"
                                                                                        decoding="async" loading="lazy"
                                                                                        style="
                                                max-width: 100%;
                                                height: auto;
                                              " />
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li id="menu-item-18907"
                                                        class="quadmenu-item-18907 quadmenu-item quadmenu-item-object-mega quadmenu-item-has-children quadmenu-item-type-mega quadmenu-item-level-0 quadmenu-dropdown quadmenu-has-caret quadmenu-has-title quadmenu-has-link quadmenu-dropdown-right dropdown-maxheight">
                                                        <a href class="quadmenu-dropdown-toggle hoverintent">
                                                            <span class="quadmenu-item-content">
                                                                <span class="quadmenu-caret"></span>
                                                                <span class="quadmenu-text hover t_1000">Cognitive
                                                                    Neurons</span>
                                                            </span>
                                                        </a>
                                                        <div id="dropdown-18907"
                                                            class="quadmenu_btt t_300 quadmenu-dropdown-menu quadmenu-dropdown-stretch-dropdown">
                                                            <ul class="quadmenu-row">
                                                                <li id="menu-item-18908"
                                                                    class="quadmenu-item-18908 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-4 col-lg-3">
                                                                    <div id="dropdown-18908" class>
                                                                        <ul>
                                                                            <li id="menu-item-18911"
                                                                                class="quadmenu-item-18911 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                                <div
                                                                                    class="quadmenu-item-widget widget widget_text">
                                                                                    <div class="textwidget">
                                                                                        <p>
                                                                                            <span style="
                                                    color: #1e8d77;
                                                    font-size: 22px;
                                                  "><strong>Secured Parking<br />
                                                                                                    ____________________</strong></span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="menu-item-18912"
                                                                                class="quadmenu-item-18912 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Smart
                                                                                            ANPR</span>
                                                                                        <span
                                                                                            class="quadmenu-description">A
                                                                                            Smart Automatic Number Plate
                                                                                            Recognition Integrated
                                                                                            Device
                                                                                            through an IoT Solution made
                                                                                            for
                                                                                            a better Parking
                                                                                            Management.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li id="menu-item-18909"
                                                                    class="quadmenu-item-18909 quadmenu-item quadmenu-item-object-column quadmenu-item-type-column col-sm-3 col-lg-3">
                                                                </li>
                                                                <li id="menu-item-18910"
                                                                    class="quadmenu-item-18910 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-12 col-sm-4 col-lg-6">
                                                                    <div id="dropdown-18910" class>
                                                                        <ul>
                                                                            <li id="menu-item-18913"
                                                                                class="quadmenu-item-18913 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                                <div
                                                                                    class="quadmenu-item-widget widget widget_media_image">
                                                                                    <img width="1381" height="891"
                                                                                        src="<?php bloginfo('template_directory'); ?>/assets/images/Cognitive-Neurons-Display-Image-Compressed.jpg"
                                                                                        class="image wp-image-18914 attachment-full size-full"
                                                                                        alt="Artificial Intelligence Neurons- Disrupt-X IoT Platform"
                                                                                        decoding="async" loading="lazy"
                                                                                        style="
                                                max-width: 100%;
                                                height: auto;
                                              " />
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li id="menu-item-19412"
                                                        class="quadmenu-item-19412 quadmenu-item quadmenu-item-object-mega quadmenu-item-has-children quadmenu-item-type-mega quadmenu-item-level-0 quadmenu-dropdown quadmenu-has-caret quadmenu-has-title quadmenu-has-link quadmenu-dropdown-right dropdown-maxheight">
                                                        <a href class="quadmenu-dropdown-toggle hoverintent">
                                                            <span class="quadmenu-item-content">
                                                                <span class="quadmenu-caret"></span>
                                                                <span class="quadmenu-text hover t_1000">Defcon
                                                                    Patrols</span>
                                                            </span>
                                                        </a>
                                                        <div id="dropdown-19412"
                                                            class="quadmenu_btt t_300 quadmenu-dropdown-menu quadmenu-dropdown-stretch-dropdown">
                                                            <ul class="quadmenu-row">
                                                                <li id="menu-item-19413"
                                                                    class="quadmenu-item-19413 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-4 col-lg-3">
                                                                    <div id="dropdown-19413" class>
                                                                        <ul>
                                                                            <li id="menu-item-19416"
                                                                                class="quadmenu-item-19416 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                                <div
                                                                                    class="quadmenu-item-widget widget widget_text">
                                                                                    <div class="textwidget">
                                                                                        <p>
                                                                                            <span style="
                                                    color: #1e8d77;
                                                    font-size: 22px;
                                                  "><strong>Intelligent Security<br />
                                                                                                    ____________________</strong></span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="menu-item-19417"
                                                                                class="quadmenu-item-19417 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Intrusion
                                                                                            Alarms Services</span>
                                                                                        <span
                                                                                            class="quadmenu-description">An
                                                                                            IoT solution made to handle
                                                                                            professional security
                                                                                            preventing
                                                                                            the most common troubles and
                                                                                            dangers such as
                                                                                            intrusion.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-22039"
                                                                                class="quadmenu-item-22039 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Smart
                                                                                            Panic Button</span>
                                                                                        <span
                                                                                            class="quadmenu-description">an
                                                                                            intelligent solution that
                                                                                            combines GPS/Sigfox and BLE
                                                                                            technologies into one for
                                                                                            emergency and real-time
                                                                                            tracking</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li id="menu-item-19414"
                                                                    class="quadmenu-item-19414 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-3 col-lg-3">
                                                                    <div id="dropdown-19414" class>
                                                                        <ul>
                                                                            <li id="menu-item-24684"
                                                                                class="quadmenu-item-24684 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Manhole
                                                                                            Monitoring</span>
                                                                                        <span
                                                                                            class="quadmenu-description">IoT
                                                                                            Solution designed for the
                                                                                            monitoring of manhole
                                                                                            covers.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li id="menu-item-19415"
                                                                    class="quadmenu-item-19415 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-12 col-sm-4 col-lg-6">
                                                                    <div id="dropdown-19415" class>
                                                                        <ul>
                                                                            <li id="menu-item-19418"
                                                                                class="quadmenu-item-19418 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                                <div
                                                                                    class="quadmenu-item-widget widget widget_media_image">
                                                                                    <img width="1381" height="891"
                                                                                        src="<?php bloginfo('template_directory'); ?>/assets/images/Defcon-Patrols.jpg"
                                                                                        class="image wp-image-19419 attachment-full size-full"
                                                                                        alt="Defcon Patrols"
                                                                                        decoding="async" loading="lazy"
                                                                                        style="
                                                max-width: 100%;
                                                height: auto;
                                              " />
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li id="menu-item-19841"
                                                        class="quadmenu-item-19841 quadmenu-item quadmenu-item-object-mega quadmenu-item-has-children quadmenu-item-type-mega quadmenu-item-level-0 quadmenu-dropdown quadmenu-has-caret quadmenu-has-title quadmenu-has-link quadmenu-dropdown-right dropdown-maxheight">
                                                        <a href class="quadmenu-dropdown-toggle hoverintent">
                                                            <span class="quadmenu-item-content">
                                                                <span class="quadmenu-caret"></span>
                                                                <span class="quadmenu-text hover t_1000">Cloud
                                                                    Orbit</span>
                                                            </span>
                                                        </a>
                                                        <div id="dropdown-19841"
                                                            class="quadmenu_btt t_300 quadmenu-dropdown-menu quadmenu-dropdown-stretch-dropdown">
                                                            <ul class="quadmenu-row">
                                                                <li id="menu-item-19843"
                                                                    class="quadmenu-item-19843 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-4 col-lg-3">
                                                                    <div id="dropdown-19843" class>
                                                                        <ul>
                                                                            <li id="menu-item-19851"
                                                                                class="quadmenu-item-19851 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                                <div
                                                                                    class="quadmenu-item-widget widget widget_text">
                                                                                    <div class="textwidget">
                                                                                        <p>
                                                                                            <span style="
                                                    color: #1e8d77;
                                                    font-size: 22px;
                                                  "><strong>Rodent Management<br />
                                                                                                    ____________________</strong></span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="menu-item-19854"
                                                                                class="quadmenu-item-19854 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a href="smart-rodents-monitoring-iot/">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Smart
                                                                                            Rodents Monitoring</span>
                                                                                        <span
                                                                                            class="quadmenu-description">Smarter
                                                                                            monitoring, detection
                                                                                            and capture of real-time
                                                                                            data
                                                                                            for rodent movements 24/7
                                                                                            through IoT.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li id="menu-item-19845"
                                                                    class="quadmenu-item-19845 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-3 col-lg-3">
                                                                    <div id="dropdown-19845" class>
                                                                        <ul>
                                                                            <li id="menu-item-23049"
                                                                                class="quadmenu-item-23049 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                                <div
                                                                                    class="quadmenu-item-widget widget widget_text">
                                                                                    <div class="textwidget">
                                                                                        <p>
                                                                                            <span style="
                                                    color: #1e8d77;
                                                    font-size: 22px;
                                                  "><strong>Waste Management<br />
                                                                                                    ____________________</strong></span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="menu-item-23051"
                                                                                class="quadmenu-item-23051 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a href="smart-waste-management/">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Smart
                                                                                            Waste Management</span>
                                                                                        <span
                                                                                            class="quadmenu-description">IoT-powered
                                                                                            smart waste
                                                                                            management solutions focus
                                                                                            on
                                                                                            improving the total
                                                                                            efficiency
                                                                                            of waste collection and
                                                                                            recycling.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li id="menu-item-19847"
                                                                    class="quadmenu-item-19847 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-12 col-sm-4 col-lg-6">
                                                                    <div id="dropdown-19847" class>
                                                                        <ul>
                                                                            <li id="menu-item-19849"
                                                                                class="quadmenu-item-19849 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                                <div
                                                                                    class="quadmenu-item-widget widget widget_media_image">
                                                                                    <img width="1381" height="891"
                                                                                        src="<?php bloginfo('template_directory'); ?>/assets/images/Disrupt-X-Cloud-Orbit.jpg"
                                                                                        class="image wp-image-19850 attachment-full size-full"
                                                                                        alt="Disrupt-X Cloud Orbit-Menu"
                                                                                        decoding="async" loading="lazy"
                                                                                        style="
                                                max-width: 100%;
                                                height: auto;
                                              " />
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li id="menu-item-22407"
                                                        class="quadmenu-item-22407 quadmenu-item quadmenu-item-object-mega quadmenu-item-has-children quadmenu-item-type-mega quadmenu-item-level-0 quadmenu-dropdown quadmenu-has-caret quadmenu-has-title quadmenu-has-link quadmenu-dropdown-right dropdown-maxheight">
                                                        <a href class="quadmenu-dropdown-toggle hoverintent">
                                                            <span class="quadmenu-item-content">
                                                                <span class="quadmenu-caret"></span>
                                                                <span class="quadmenu-text hover t_1000">Urban AI</span>
                                                            </span>
                                                        </a>
                                                        <div id="dropdown-22407"
                                                            class="quadmenu_btt t_300 quadmenu-dropdown-menu quadmenu-dropdown-stretch-dropdown">
                                                            <ul class="quadmenu-row">
                                                                <li id="menu-item-22410"
                                                                    class="quadmenu-item-22410 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-12 col-sm-4 col-lg-6">
                                                                    <div id="dropdown-22410" class>
                                                                        <ul>
                                                                            <li id="menu-item-22411"
                                                                                class="quadmenu-item-22411 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                                <div
                                                                                    class="quadmenu-item-widget widget widget_media_image">
                                                                                    <img width="1381" height="891"
                                                                                        src="<?php bloginfo('template_directory'); ?>/assets/images/Disrupt-X-Urban-AI.jpg"
                                                                                        class="image wp-image-22412 attachment-full size-full"
                                                                                        alt decoding="async"
                                                                                        loading="lazy" />
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li id="menu-item-22408"
                                                                    class="quadmenu-item-22408 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-4 col-lg-3">
                                                                    <div id="dropdown-22408" class>
                                                                        <ul>
                                                                            <li id="menu-item-22413"
                                                                                class="quadmenu-item-22413 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                                <div
                                                                                    class="quadmenu-item-widget widget widget_text">
                                                                                    <div class="textwidget">
                                                                                        <p>
                                                                                            <span style="
                                                    color: #1e8d77;
                                                    font-size: 21px;
                                                  "><strong>Smart Room<br />
                                                                                                    ____________________</strong></span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="menu-item-23671"
                                                                                class="quadmenu-item-23671 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="smart-meeting-room-booking-with-iaq/">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Smart
                                                                                            Meeting Room Booking
                                                                                            (With IAQ)</span>
                                                                                        <span
                                                                                            class="quadmenu-description">Easily,
                                                                                            Efficiently Track and
                                                                                            Manage Meeting Room
                                                                                            Occupancy
                                                                                            Status and Bookings.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-22612"
                                                                                class="quadmenu-item-22612 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a href="smart-ac-outlet-and-switch/">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Smart
                                                                                            AC Outlet & Switch</span>
                                                                                        <span
                                                                                            class="quadmenu-description">Monitors
                                                                                            Energy Consumption
                                                                                            Including Voltage Reporting
                                                                                            Load
                                                                                            & Current Power
                                                                                            Reports.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li id="menu-item-22409"
                                                                    class="quadmenu-item-22409 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-3 col-lg-3">
                                                                    <div id="dropdown-22409" class>
                                                                        <ul>
                                                                            <li id="menu-item-22792"
                                                                                class="quadmenu-item-22792 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                                <div
                                                                                    class="quadmenu-item-widget widget widget_text">
                                                                                    <div class="textwidget">
                                                                                        <p>
                                                                                            <span style="
                                                    color: #20313b;
                                                    font-size: 21px;
                                                  "><strong>Parking Space Management<br />
                                                                                                    ____________________</strong></span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="menu-item-22794"
                                                                                class="quadmenu-item-22794 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="parking-space-management-on-ground/">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Parking
                                                                                            Space Management
                                                                                            (On-Ground)</span>
                                                                                        <span
                                                                                            class="quadmenu-description">Turns
                                                                                            the classic on-street
                                                                                            parking management into a
                                                                                            new
                                                                                            universe of functionality
                                                                                            and
                                                                                            efficiency.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-22825"
                                                                                class="quadmenu-item-22825 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="parking-space-management-flush/">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Parking
                                                                                            Space Management
                                                                                            (Flush)</span>
                                                                                        <span
                                                                                            class="quadmenu-description">Designed
                                                                                            to detect parking
                                                                                            space occupancy of parking
                                                                                            spots
                                                                                            that gets sent wirelessly to
                                                                                            cloud</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li id="menu-item-23657"
                                                        class="quadmenu-item-23657 quadmenu-item quadmenu-item-object-mega quadmenu-item-has-children quadmenu-item-type-mega quadmenu-item-level-0 quadmenu-dropdown quadmenu-has-caret quadmenu-has-title quadmenu-has-link quadmenu-dropdown-right dropdown-maxheight">
                                                        <a href="https://cloud.disrupt-x.io/global/core/market/main"
                                                            class="quadmenu-dropdown-toggle hoverintent">
                                                            <span class="quadmenu-item-content">
                                                                <span class="quadmenu-caret"></span>
                                                                <span
                                                                    class="quadmenu-text hover t_1000">Agrodroids</span>
                                                            </span>
                                                        </a>
                                                        <div id="dropdown-23657"
                                                            class="quadmenu_btt t_300 quadmenu-dropdown-menu quadmenu-dropdown-stretch-dropdown">
                                                            <ul class="quadmenu-row">
                                                                <li id="menu-item-23661"
                                                                    class="quadmenu-item-23661 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-12 col-sm-4 col-lg-6">
                                                                    <div id="dropdown-23661" class>
                                                                        <ul>
                                                                            <li id="menu-item-23668"
                                                                                class="quadmenu-item-23668 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                                <div
                                                                                    class="quadmenu-item-widget widget widget_media_image">
                                                                                    <img width="1381" height="891"
                                                                                        src="<?php bloginfo('template_directory'); ?>/assets/images/Disrupt-X-Agrodroids.jpg"
                                                                                        class="image wp-image-23622 attachment-full size-full"
                                                                                        alt="Disrupt-X-Agrodroids - Menu"
                                                                                        decoding="async" loading="lazy"
                                                                                        style="
                                                max-width: 100%;
                                                height: auto;
                                              " />
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li id="menu-item-23663"
                                                                    class="quadmenu-item-23663 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-4 col-lg-3">
                                                                    <div id="dropdown-23663" class>
                                                                        <ul>
                                                                            <li id="menu-item-23669"
                                                                                class="quadmenu-item-23669 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                                <div
                                                                                    class="quadmenu-item-widget widget widget_text">
                                                                                    <div class="textwidget">
                                                                                        <p>
                                                                                            <span style="
                                                    color: #1e8d77;
                                                    font-size: 21px;
                                                  "><strong>Smart Agriculture<br />
                                                                                                    ____________________</strong></span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="menu-item-23670"
                                                                                class="quadmenu-item-23670 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="smart-agriculture-sensor-soil-surface-mount/">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Smart
                                                                                            Agriculture Sensor (Soil
                                                                                            Surface Mount)</span>
                                                                                        <span
                                                                                            class="quadmenu-description">Smart
                                                                                            metrics for crops,
                                                                                            residential/ commercial
                                                                                            lawns
                                                                                            and gardens and golf
                                                                                            courses.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-23688"
                                                                                class="quadmenu-item-23688 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                                <a
                                                                                    href="smart-agriculture-sensor-elevated-mount/">
                                                                                    <span class="quadmenu-item-content">
                                                                                        <span
                                                                                            class="quadmenu-text hover t_1000">Smart
                                                                                            Agriculture Sensor
                                                                                            (Elevated Mount)</span>
                                                                                        <span
                                                                                            class="quadmenu-description">A
                                                                                            Smart Agriculture Solution
                                                                                            Providing real-time
                                                                                            monitoring
                                                                                            of the farm through IoT
                                                                                            sensors.</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li id="menu-item-23665"
                                                                    class="quadmenu-item-23665 quadmenu-item quadmenu-item-object-column quadmenu-item-type-column col-sm-3 col-lg-3">
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li id="menu-item-18102"
                                                        class="quadmenu-item-18102 quadmenu-item quadmenu-item-object-mega quadmenu-item-type-mega quadmenu-item-level-0 quadmenu-has-title quadmenu-has-link quadmenu-dropdown-right dropdown-maxheight">
                                                        <a title="IoT Cloud Platform" target="_blank" href="#">
                                                            <span class="quadmenu-item-content">
                                                                <span class="quadmenu-text hover t_1000">Log In</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li id="menu-item-18105"
                                                        class="quadmenu-item-18105 quadmenu-item quadmenu-item-object-mega quadmenu-item-type-mega quadmenu-item-level-0 quadmenu-has-title quadmenu-has-link quadmenu-dropdown-right dropdown-maxheight">
                                                        <a target="_blank" href="#">
                                                            <span class="quadmenu-item-content">
                                                                <span
                                                                    class="quadmenu-text hover t_1000">Marketplace</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="seocrawler-body-outer-wrapper ">
        <div class="seocrawler-body-wrapper clearfix  seocrawler-with-frame">
            <header
                class="seocrawler-header-wrap seocrawler-header-style-plain  seocrawler-style-menu-right seocrawler-sticky-navigation seocrawler-style-fixed">
                <div class="seocrawler-header-background"></div>
                <div class="seocrawler-header-container  seocrawler-header-full">
                    <div class="seocrawler-header-container-inner clearfix">
                        <div class="seocrawler-logo  seocrawler-item-pdlr">
                            <div class="seocrawler-logo-inner"><a href="<?php echo home_url(''); ?>"><img
                                        src="https://nitro.network/static/media/Logo.2a3c7d4a.png"
                                        alt="Disrupt-X-Main-Clear-BG-WHITE-wordmark-Optimized v2" width="460"
                                        height="250" title="Disrupt-X Logo"></a></div>
                        </div>
                        <div class="seocrawler-navigation seocrawler-item-pdlr clearfix ">
                            <div class="seocrawler-main-menu " id="seocrawler-main-menu">
                                <nav id="quadmenu"
                                    class="quadmenu-default_theme quadmenu-v2.3.5 quadmenu-align-right quadmenu-divider-hide quadmenu-carets-show quadmenu-background-color quadmenu-mobile-shadow-show quadmenu-dropdown-shadow-show quadmenu-hover-ripple quadmenu-is-embed"
                                    data-template="embed" data-theme="default_theme" data-unwrap="1"
                                    data-breakpoint="768">
                                    <div class="quadmenu-container">
                                        <div id="quadmenu_1" class="quadmenu-navbar-collapse collapsed in">
                                            <ul class="quadmenu-navbar-nav">
                                                <li id="menu-item-17137"
                                                    class="quadmenu-item-17137 igniteshield quadmenu-item quadmenu-item-object-mega quadmenu-item-has-children quadmenu-item-type-mega quadmenu-item-level-0 quadmenu-dropdown quadmenu-has-caret quadmenu-has-title quadmenu-has-link quadmenu-dropdown-right dropdown-maxheight">
                                                    <a href class="quadmenu-dropdown-toggle hoverintent">
                                                        <span class="quadmenu-item-content">
                                                            <span class="quadmenu-caret"></span>
                                                            <span class="quadmenu-text  hover t_1000">Ignite
                                                                Shield</span>
                                                        </span>
                                                    </a>
                                                    <div id="dropdown-17137"
                                                        class="quadmenu_btt t_300 quadmenu-dropdown-menu quadmenu-dropdown-stretch-dropdown">
                                                        <ul class="quadmenu-row">
                                                            <li id="menu-item-17140"
                                                                class="quadmenu-item-17140 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-12 col-sm-4 col-lg-6">
                                                                <div id="dropdown-17140" class>
                                                                    <ul>
                                                                        <li id="menu-item-17141"
                                                                            class="quadmenu-item-17141 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                            <div
                                                                                class="quadmenu-item-widget widget widget_media_image">
                                                                                <img width="1109" height="713"
                                                                                    src="<?php bloginfo('template_directory'); ?>/assets/images/ignite.jpg"
                                                                                    class="image wp-image-20285  attachment-full size-full"
                                                                                    alt="Ignite Shield Disrupt-X"
                                                                                    decoding="async" loading="lazy"
                                                                                    style="max-width: 100%; height: auto;"
                                                                                    sizes="(max-width: 1109px) 100vw, 1109px">
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li id="menu-item-17139"
                                                                class="quadmenu-item-17139 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-3 col-lg-3">
                                                                <div id="dropdown-17139" class>
                                                                    <ul>
                                                                        <li id="menu-item-18608"
                                                                            class="quadmenu-item-18608 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                            <div
                                                                                class="quadmenu-item-widget widget widget_text">
                                                                                <div class="textwidget">
                                                                                    <p><span
                                                                                            style="color: #3fff61; font-size: 20px;"><strong>Water
                                                                                                Monitoring<br>
                                                                                                ____________________</strong></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li id="menu-item-18334"
                                                                            class="quadmenu-item-18334 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a
                                                                                href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Swimming
                                                                                        Pool Monitoring</span>
                                                                                    <span
                                                                                        class="quadmenu-description">To
                                                                                        Monitor Water Quality of a
                                                                                        Swimming Pool Through
                                                                                        Sensors.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-18611"
                                                                            class="quadmenu-item-18611 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a
                                                                                href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Water
                                                                                        Tank Monitoring</span>
                                                                                    <span
                                                                                        class="quadmenu-description">To
                                                                                        Monitor The Water Quality Of A
                                                                                        Water Tank via Sensor Readings
                                                                                        with Alarms</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-18667"
                                                                            class="quadmenu-item-18667 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a
                                                                                href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Spa
                                                                                        Monitoring</span>
                                                                                    <span
                                                                                        class="quadmenu-description">IoT
                                                                                        Solution To Secure Safer Water
                                                                                        Quality In Spas By Monitoring
                                                                                        Sensor Readings</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-17146"
                                                                            class="quadmenu-item-17146 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="water-pressure-monitoring/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Water
                                                                                        Pressure Monitoring</span>
                                                                                    <span
                                                                                        class="quadmenu-description">IoT
                                                                                        Solution To Monitor Water
                                                                                        Pressure Through Bar Readings
                                                                                        With Warnings.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-20087"
                                                                            class="quadmenu-item-20087 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="sewerage-monitoring/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Sewerage
                                                                                        Monitoring</span>
                                                                                    <span
                                                                                        class="quadmenu-description">IoT
                                                                                        Solution Which Uses Optical
                                                                                        Principle To Measure Degree Of
                                                                                        Turbidity Of Water</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-19725"
                                                                            class="quadmenu-item-19725 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="smart-water-monitoring/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Smart
                                                                                        Water Monitoring</span>
                                                                                    <span
                                                                                        class="quadmenu-description">Designed
                                                                                        to handle leakage detection with
                                                                                        real-time alerts.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li id="menu-item-17138"
                                                                class="quadmenu-item-17138 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-4 col-lg-3">
                                                                <div id="dropdown-17138" class>
                                                                    <ul>
                                                                        <li id="menu-item-17147"
                                                                            class="quadmenu-item-17147 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                            <div
                                                                                class="quadmenu-item-widget widget widget_text">
                                                                                <div class="textwidget">
                                                                                    <p><span
                                                                                            style="color: #00f4cf; font-size: 20px;"><strong>Air
                                                                                                Quality Monitoring<br>
                                                                                                ____________________</strong></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li id="menu-item-19099"
                                                                            class="quadmenu-item-19099 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="smart-indoor-air-analyzer/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Indoor
                                                                                        Air Quality Monitoring
                                                                                        (IAQ)</span>
                                                                                    <span
                                                                                        class="quadmenu-description">IAQ
                                                                                        IoT Solution where Air Quality
                                                                                        Sensors plays an important role
                                                                                        to track various air
                                                                                        sensors.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-17149"
                                                                            class="quadmenu-item-17149 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a
                                                                                href="outdoor-air-quality-weather-station-iot-solution/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Outdoor
                                                                                        Air Quality Weather
                                                                                        Station</span>
                                                                                    <span
                                                                                        class="quadmenu-description">Outdoor
                                                                                        Air Quality IoT Solution is
                                                                                        designed to monitor various Air
                                                                                        Quality Sensors of the Outdoor
                                                                                        environment.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-23081"
                                                                            class="quadmenu-item-23081 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a
                                                                                href="indoor-air-quality-monitoring-lorawan/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Indoor
                                                                                        Air Quality Monitoring
                                                                                        (LoRaWAN)</span>
                                                                                    <span
                                                                                        class="quadmenu-description">Real-time
                                                                                        Air Quality
                                                                                        indoor-air-quality-monitoring
                                                                                        using LoRaWAN</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-19701"
                                                                            class="quadmenu-item-19701 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="cold-storage-monitoring-iot/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Cold
                                                                                        Storage Monitoring</span>
                                                                                    <span
                                                                                        class="quadmenu-description">Optimization
                                                                                        & proper maintenance of the
                                                                                        goods/assets that require
                                                                                        well-balanced temperature inside
                                                                                        cold storage.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-20289"
                                                                            class="quadmenu-item-20289 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                            <div
                                                                                class="quadmenu-item-widget widget widget_text">
                                                                                <div class="textwidget">
                                                                                    <p><span
                                                                                            style="color: #1e8d77; font-size: 20px;"><strong>Gas
                                                                                                & Water Metering<br>
                                                                                                ____________________</strong></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li id="menu-item-20291"
                                                                            class="quadmenu-item-20291 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="smart-gas-metering/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Smart
                                                                                        Gas Metering</span>
                                                                                    <span
                                                                                        class="quadmenu-description">IoT
                                                                                        Solution to monitor Gas Meter
                                                                                        remotely on a daily
                                                                                        basis.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-20293"
                                                                            class="quadmenu-item-20293 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="smart-waste-management/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Smart
                                                                                        Waste Management</span>
                                                                                    <span
                                                                                        class="quadmenu-description">IoT
                                                                                        Solution to monitor Water Meter
                                                                                        remotely on a daily
                                                                                        basis.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li id="menu-item-17322"
                                                    class="quadmenu-item-17322 quadmenu-item quadmenu-item-object-mega quadmenu-item-has-children quadmenu-item-type-mega quadmenu-item-level-0 quadmenu-dropdown quadmenu-has-caret quadmenu-has-title quadmenu-has-link quadmenu-dropdown-right dropdown-maxheight">
                                                    <a href class="quadmenu-dropdown-toggle hoverintent">
                                                        <span class="quadmenu-item-content">
                                                            <span class="quadmenu-caret"></span>
                                                            <span class="quadmenu-text  hover t_1000">Metro Watch</span>
                                                        </span>
                                                    </a>
                                                    <div id="dropdown-17322"
                                                        class="quadmenu_btt t_300 quadmenu-dropdown-menu quadmenu-dropdown-stretch-dropdown">
                                                        <ul class="quadmenu-row">
                                                            <li id="menu-item-17324"
                                                                class="quadmenu-item-17324 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-3 col-lg-3">
                                                                <div id="dropdown-17324" class>
                                                                    <ul>
                                                                        <li id="menu-item-17327"
                                                                            class="quadmenu-item-17327 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                            <div
                                                                                class="quadmenu-item-widget widget widget_text">
                                                                                <div class="textwidget">
                                                                                    <p><span
                                                                                            style="color: #13ffdb; font-size: 18px;"><strong>Smart
                                                                                                Parking
                                                                                                Locks</strong></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li id="menu-item-18466"
                                                                            class="quadmenu-item-18466 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a
                                                                                href="smart-2g-4g-parking-locks-end-user/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Smart
                                                                                        2G/4G Parking Locks</span>
                                                                                    <span
                                                                                        class="quadmenu-description">Solving
                                                                                        Parking difficulties for vehicle
                                                                                        owners which instantly improves
                                                                                        parking experience.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-18522"
                                                                            class="quadmenu-item-18522 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="smart-bluetooth-parking-locks/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Smart
                                                                                        Bluetooth Parking Locks</span>
                                                                                    <span
                                                                                        class="quadmenu-description">Smart
                                                                                        Bluetooth Parking Lock is an IoT
                                                                                        Solution designed for an easy
                                                                                        use of a barrier to secure any
                                                                                        parking space.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-19101"
                                                                            class="quadmenu-item-19101 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                            <div
                                                                                class="quadmenu-item-widget widget widget_text">
                                                                                <div class="textwidget">
                                                                                    <p><span
                                                                                            style="color: #1e8d77; font-size: 18px;"><strong><br>
                                                                                                Secured
                                                                                                Access</strong></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li id="menu-item-19103"
                                                                            class="quadmenu-item-19103 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="asset-tracking-solution/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Asset
                                                                                        Tracking-IoT Solution</span>
                                                                                    <span
                                                                                        class="quadmenu-description">Industry
                                                                                        Grade Asset Tracking Solution
                                                                                        for Indoor/Outdoor Usage of any
                                                                                        Assets.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-21184"
                                                                            class="quadmenu-item-21184 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a
                                                                                href="outdoor-asset-tracker-2g-4g-nbiot/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Outdoor
                                                                                        Asset Tracker 2G/4G/NBIoT</span>
                                                                                    <span
                                                                                        class="quadmenu-description">Outdoor
                                                                                        Asset Tracker using 2G/4G/NBIoT
                                                                                        designed for asset
                                                                                        owners.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-21309"
                                                                            class="quadmenu-item-21309 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="outdoor-sigfox-gps-tracker/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Outdoor
                                                                                        Sigfox / GPS Tracker</span>
                                                                                    <span class="quadmenu-description">A
                                                                                        global way of tracking Outdoor
                                                                                        Assets that ensures awareness
                                                                                        comes first.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-21645"
                                                                            class="quadmenu-item-21645 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="personal-tracker-4g-lte-nbiot/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Personal
                                                                                        Tracker 4G / LTE / NBIoT</span>
                                                                                    <span
                                                                                        class="quadmenu-description">From
                                                                                        pets to humans, designed to
                                                                                        track accurately through
                                                                                        IoT.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-22174"
                                                                            class="quadmenu-item-22174 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="smart-solar-asset-tracker-4g/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Smart
                                                                                        Solar Asset Tracker 4G</span>
                                                                                    <span
                                                                                        class="quadmenu-description">Prioritizing
                                                                                        sustainable tracking of
                                                                                        equipment, machineries, &
                                                                                        assets.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-24055"
                                                                            class="quadmenu-item-24055 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="mobile-cold-storage-4g-nbiot/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Mobile
                                                                                        Cold Storage (4G/NBIoT)</span>
                                                                                    <span
                                                                                        class="quadmenu-description">Designed
                                                                                        for a more flexible tracking of
                                                                                        asset door/humidity/temp sensor
                                                                                        through IoT</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li id="menu-item-17323"
                                                                class="quadmenu-item-17323 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-4 col-lg-3">
                                                                <div id="dropdown-17323" class>
                                                                    <ul>
                                                                        <li id="menu-item-17326"
                                                                            class="quadmenu-item-17326 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                            <div
                                                                                class="quadmenu-item-widget widget widget_text">
                                                                                <div class="textwidget">
                                                                                    <p><span
                                                                                            style="color: #00f72c; font-size: 20px;"><strong>Smart
                                                                                                Padlocks</strong></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li id="menu-item-17329"
                                                                            class="quadmenu-item-17329 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="smart-bluetooth-padlocks/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Smart
                                                                                        Bluetooth Padlocks</span>
                                                                                    <span
                                                                                        class="quadmenu-description">Metro
                                                                                        Watch’s IoT Solution using a
                                                                                        Smart built Bluetooth Padlock
                                                                                        that ensures security in homes,
                                                                                        hospitality industry and
                                                                                        more.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-17328"
                                                                            class="quadmenu-item-17328 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a
                                                                                href="smart-2g-nbiot-bluetooth-padlocks/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Smart
                                                                                        2G/Bluetooth/ NBIoT
                                                                                        Padlocks</span>
                                                                                    <span
                                                                                        class="quadmenu-description">Metro
                                                                                        Watch’s IoT Solution with an
                                                                                        intelligent 2G/ Bluetooth/ NBIoT
                                                                                        Padlock allowing consumers to
                                                                                        unlock remotely with
                                                                                        security.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-20921"
                                                                            class="quadmenu-item-20921 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="smart-cable-lock-iot/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Smart
                                                                                        BLE IoT Cable Lock</span>
                                                                                    <span
                                                                                        class="quadmenu-description">Metro
                                                                                        Watch’s IoT Solution with
                                                                                        Bluetooth connectivity allowing
                                                                                        users to unlock their assets/
                                                                                        property with practical
                                                                                        securuty.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-21050"
                                                                            class="quadmenu-item-21050 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="smart-4g-arm-lock/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Smart
                                                                                        4G Arm Locks</span>
                                                                                    <span
                                                                                        class="quadmenu-description">Securing
                                                                                        assets & premises conveniently
                                                                                        using Smart Arm Locks through
                                                                                        IoT.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-21474"
                                                                            class="quadmenu-item-21474 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="smart-4g-ble-nbiot-padlocks/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Smart
                                                                                        4G/BLE/NBIoT Padlocks</span>
                                                                                    <span
                                                                                        class="quadmenu-description">Metro
                                                                                        Watch’s IoT Solution with a
                                                                                        smart 4G/ BLE/ NBIoT Padlock
                                                                                        device letting users to unlock
                                                                                        remotely/bluetooth from anywhere
                                                                                        in the world.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-21800"
                                                                            class="quadmenu-item-21800 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="smart-cabinet-locks/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Smart
                                                                                        Cabinet Locks</span>
                                                                                    <span
                                                                                        class="quadmenu-description">Designed
                                                                                        for an easy Lock/Unlock
                                                                                        Bluetooth/NFC IoT
                                                                                        Solution</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li id="menu-item-17325"
                                                                class="quadmenu-item-17325 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-12 col-sm-4 col-lg-6">
                                                                <div id="dropdown-17325" class>
                                                                    <ul>
                                                                        <li id="menu-item-17334"
                                                                            class="quadmenu-item-17334 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                            <div
                                                                                class="quadmenu-item-widget widget widget_media_image">
                                                                                <img width="1381" height="891"
                                                                                    src="<?php bloginfo('template_directory'); ?>/assets/images/Metro-Watch-Photo-for-Menu_uno-01.jpg"
                                                                                    class="image wp-image-17336  attachment-full size-full"
                                                                                    alt="Metro Watch Photo for Menu"
                                                                                    decoding="async" loading="lazy"
                                                                                    style="max-width: 100%; height: auto;">
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li id="menu-item-18907"
                                                    class="quadmenu-item-18907 quadmenu-item quadmenu-item-object-mega quadmenu-item-has-children quadmenu-item-type-mega quadmenu-item-level-0 quadmenu-dropdown quadmenu-has-caret quadmenu-has-title quadmenu-has-link quadmenu-dropdown-right dropdown-maxheight">
                                                    <a href class="quadmenu-dropdown-toggle hoverintent">
                                                        <span class="quadmenu-item-content">
                                                            <span class="quadmenu-caret"></span>
                                                            <span class="quadmenu-text  hover t_1000">Cognitive
                                                                Neurons</span>
                                                        </span>
                                                    </a>
                                                    <div id="dropdown-18907"
                                                        class="quadmenu_btt t_300 quadmenu-dropdown-menu quadmenu-dropdown-stretch-dropdown">
                                                        <ul class="quadmenu-row">
                                                            <li id="menu-item-18908"
                                                                class="quadmenu-item-18908 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-4 col-lg-3">
                                                                <div id="dropdown-18908" class>
                                                                    <ul>
                                                                        <li id="menu-item-18911"
                                                                            class="quadmenu-item-18911 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                            <div
                                                                                class="quadmenu-item-widget widget widget_text">
                                                                                <div class="textwidget">
                                                                                    <p><span
                                                                                            style="color: #1e8d77; font-size: 22px;"><strong>Secured
                                                                                                Parking<br>
                                                                                                ____________________</strong></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li id="menu-item-18912"
                                                                            class="quadmenu-item-18912 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="smart-anpr-iot/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Smart
                                                                                        ANPR</span>
                                                                                    <span class="quadmenu-description">A
                                                                                        Smart Automatic Number Plate
                                                                                        Recognition Integrated Device
                                                                                        through an IoT Solution made for
                                                                                        a better Parking
                                                                                        Management.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li id="menu-item-18909"
                                                                class="quadmenu-item-18909 quadmenu-item quadmenu-item-object-column quadmenu-item-type-column col-sm-3 col-lg-3">
                                                            </li>
                                                            <li id="menu-item-18910"
                                                                class="quadmenu-item-18910 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-12 col-sm-4 col-lg-6">
                                                                <div id="dropdown-18910" class>
                                                                    <ul>
                                                                        <li id="menu-item-18913"
                                                                            class="quadmenu-item-18913 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                            <div
                                                                                class="quadmenu-item-widget widget widget_media_image">
                                                                                <img width="1381" height="891"
                                                                                    src="<?php bloginfo('template_directory'); ?>/assets/images/Cognitive-Neurons-Display-Image-Compressed.jpg"
                                                                                    class="image wp-image-18914  attachment-full size-full"
                                                                                    alt="Artificial Intelligence Neurons- Disrupt-X IoT Platform"
                                                                                    decoding="async" loading="lazy"
                                                                                    style="max-width: 100%; height: auto;">
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li id="menu-item-19412"
                                                    class="quadmenu-item-19412 quadmenu-item quadmenu-item-object-mega quadmenu-item-has-children quadmenu-item-type-mega quadmenu-item-level-0 quadmenu-dropdown quadmenu-has-caret quadmenu-has-title quadmenu-has-link quadmenu-dropdown-right dropdown-maxheight">
                                                    <a href class="quadmenu-dropdown-toggle hoverintent">
                                                        <span class="quadmenu-item-content">
                                                            <span class="quadmenu-caret"></span>
                                                            <span class="quadmenu-text  hover t_1000">Defcon
                                                                Patrols</span>
                                                        </span>
                                                    </a>
                                                    <div id="dropdown-19412"
                                                        class="quadmenu_btt t_300 quadmenu-dropdown-menu quadmenu-dropdown-stretch-dropdown">
                                                        <ul class="quadmenu-row">
                                                            <li id="menu-item-19413"
                                                                class="quadmenu-item-19413 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-4 col-lg-3">
                                                                <div id="dropdown-19413" class>
                                                                    <ul>
                                                                        <li id="menu-item-19416"
                                                                            class="quadmenu-item-19416 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                            <div
                                                                                class="quadmenu-item-widget widget widget_text">
                                                                                <div class="textwidget">
                                                                                    <p><span
                                                                                            style="color: #1e8d77; font-size: 22px;"><strong>Intelligent
                                                                                                Security<br>
                                                                                                ____________________</strong></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li id="menu-item-19417"
                                                                            class="quadmenu-item-19417 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="intrusion-alarms-services/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Intrusion
                                                                                        Alarms Services</span>
                                                                                    <span
                                                                                        class="quadmenu-description">An
                                                                                        IoT solution made to handle
                                                                                        professional security preventing
                                                                                        the most common troubles and
                                                                                        dangers such as
                                                                                        intrusion.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-22039"
                                                                            class="quadmenu-item-22039 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a
                                                                                href="<?php echo home_url('swimming-pool-monitoring'); ?>">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Smart
                                                                                        Panic Button</span>
                                                                                    <span
                                                                                        class="quadmenu-description">an
                                                                                        intelligent solution that
                                                                                        combines GPS/Sigfox and BLE
                                                                                        technologies into one for
                                                                                        emergency and real-time
                                                                                        tracking</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li id="menu-item-19414"
                                                                class="quadmenu-item-19414 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-3 col-lg-3">
                                                                <div id="dropdown-19414" class>
                                                                    <ul>
                                                                        <li id="menu-item-24684"
                                                                            class="quadmenu-item-24684 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="manhole-monitoring/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Manhole
                                                                                        Monitoring</span>
                                                                                    <span
                                                                                        class="quadmenu-description">IoT
                                                                                        Solution designed for the
                                                                                        monitoring of manhole
                                                                                        covers.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li id="menu-item-19415"
                                                                class="quadmenu-item-19415 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-12 col-sm-4 col-lg-6">
                                                                <div id="dropdown-19415" class>
                                                                    <ul>
                                                                        <li id="menu-item-19418"
                                                                            class="quadmenu-item-19418 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                            <div
                                                                                class="quadmenu-item-widget widget widget_media_image">
                                                                                <img width="1381" height="891"
                                                                                    src="<?php bloginfo('template_directory'); ?>/assets/images/Defcon-Patrols.jpg"
                                                                                    class="image wp-image-19419  attachment-full size-full"
                                                                                    alt="Defcon Patrols"
                                                                                    decoding="async" loading="lazy"
                                                                                    style="max-width: 100%; height: auto;">
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li id="menu-item-19841"
                                                    class="quadmenu-item-19841 quadmenu-item quadmenu-item-object-mega quadmenu-item-has-children quadmenu-item-type-mega quadmenu-item-level-0 quadmenu-dropdown quadmenu-has-caret quadmenu-has-title quadmenu-has-link quadmenu-dropdown-right dropdown-maxheight">
                                                    <a href class="quadmenu-dropdown-toggle hoverintent">
                                                        <span class="quadmenu-item-content">
                                                            <span class="quadmenu-caret"></span>
                                                            <span class="quadmenu-text  hover t_1000">Cloud Orbit</span>
                                                        </span>
                                                    </a>
                                                    <div id="dropdown-19841"
                                                        class="quadmenu_btt t_300 quadmenu-dropdown-menu quadmenu-dropdown-stretch-dropdown">
                                                        <ul class="quadmenu-row">
                                                            <li id="menu-item-19843"
                                                                class="quadmenu-item-19843 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-4 col-lg-3">
                                                                <div id="dropdown-19843" class>
                                                                    <ul>
                                                                        <li id="menu-item-19851"
                                                                            class="quadmenu-item-19851 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                            <div
                                                                                class="quadmenu-item-widget widget widget_text">
                                                                                <div class="textwidget">
                                                                                    <p><span
                                                                                            style="color: #1E8D77; font-size: 22px;"><strong>Rodent
                                                                                                Management<br>
                                                                                                ____________________</strong></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li id="menu-item-19854"
                                                                            class="quadmenu-item-19854 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="smart-rodents-monitoring-iot/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Smart
                                                                                        Rodents Monitoring</span>
                                                                                    <span
                                                                                        class="quadmenu-description">Smarter
                                                                                        monitoring, detection and
                                                                                        capture of real-time data for
                                                                                        rodent movements 24/7 through
                                                                                        IoT.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li id="menu-item-19845"
                                                                class="quadmenu-item-19845 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-3 col-lg-3">
                                                                <div id="dropdown-19845" class>
                                                                    <ul>
                                                                        <li id="menu-item-23049"
                                                                            class="quadmenu-item-23049 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                            <div
                                                                                class="quadmenu-item-widget widget widget_text">
                                                                                <div class="textwidget">
                                                                                    <p><span
                                                                                            style="color: #1e8d77; font-size: 22px;"><strong>Waste
                                                                                                Management<br>
                                                                                                ____________________</strong></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li id="menu-item-23051"
                                                                            class="quadmenu-item-23051 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="smart-waste-management/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Smart
                                                                                        Waste Management</span>
                                                                                    <span
                                                                                        class="quadmenu-description">IoT-powered
                                                                                        smart waste management solutions
                                                                                        focus on improving the total
                                                                                        efficiency of waste collection
                                                                                        and recycling.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li id="menu-item-19847"
                                                                class="quadmenu-item-19847 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-12 col-sm-4 col-lg-6">
                                                                <div id="dropdown-19847" class>
                                                                    <ul>
                                                                        <li id="menu-item-19849"
                                                                            class="quadmenu-item-19849 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                            <div
                                                                                class="quadmenu-item-widget widget widget_media_image">
                                                                                <img width="1381" height="891"
                                                                                    src="<?php bloginfo('template_directory'); ?>/assets/images/Disrupt-X-Cloud-Orbit.jpg"
                                                                                    class="image wp-image-19850  attachment-full size-full"
                                                                                    alt="Disrupt-X Cloud Orbit-Menu"
                                                                                    decoding="async" loading="lazy"
                                                                                    style="max-width: 100%; height: auto;">
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li id="menu-item-22407"
                                                    class="quadmenu-item-22407 quadmenu-item quadmenu-item-object-mega quadmenu-item-has-children quadmenu-item-type-mega quadmenu-item-level-0 quadmenu-dropdown quadmenu-has-caret quadmenu-has-title quadmenu-has-link quadmenu-dropdown-right dropdown-maxheight">
                                                    <a href class="quadmenu-dropdown-toggle hoverintent">
                                                        <span class="quadmenu-item-content">
                                                            <span class="quadmenu-caret"></span>
                                                            <span class="quadmenu-text  hover t_1000">Urban AI</span>
                                                        </span>
                                                    </a>
                                                    <div id="dropdown-22407"
                                                        class="quadmenu_btt t_300 quadmenu-dropdown-menu quadmenu-dropdown-stretch-dropdown">
                                                        <ul class="quadmenu-row">
                                                            <li id="menu-item-22410"
                                                                class="quadmenu-item-22410 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-12 col-sm-4 col-lg-6">
                                                                <div id="dropdown-22410" class>
                                                                    <ul>
                                                                        <li id="menu-item-22411"
                                                                            class="quadmenu-item-22411 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                            <div
                                                                                class="quadmenu-item-widget widget widget_media_image">
                                                                                <img width="1381" height="891"
                                                                                    src="<?php bloginfo('template_directory'); ?>/assets/images/Disrupt-X-Urban-AI.jpg"
                                                                                    class="image wp-image-22412  attachment-full size-full"
                                                                                    alt decoding="async" loading="lazy"
                                                                                    style="max-width: 100%; height: auto;">
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li id="menu-item-22408"
                                                                class="quadmenu-item-22408 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-4 col-lg-3">
                                                                <div id="dropdown-22408" class>
                                                                    <ul>
                                                                        <li id="menu-item-22413"
                                                                            class="quadmenu-item-22413 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                            <div
                                                                                class="quadmenu-item-widget widget widget_text">
                                                                                <div class="textwidget">
                                                                                    <p><span
                                                                                            style="color: #1e8d77; font-size: 21px;"><strong>Smart
                                                                                                Room<br>
                                                                                                ____________________</strong></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li id="menu-item-23671"
                                                                            class="quadmenu-item-23671 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a
                                                                                href="smart-meeting-room-booking-with-iaq/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Smart
                                                                                        Meeting Room Booking (With
                                                                                        IAQ)</span>
                                                                                    <span
                                                                                        class="quadmenu-description">Easily,
                                                                                        Efficiently Track and Manage
                                                                                        Meeting Room Occupancy Status
                                                                                        and Bookings.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-22612"
                                                                            class="quadmenu-item-22612 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="smart-ac-outlet-and-switch/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Smart
                                                                                        AC Outlet & Switch</span>
                                                                                    <span
                                                                                        class="quadmenu-description">Monitors
                                                                                        Energy Consumption Including
                                                                                        Voltage Reporting Load & Current
                                                                                        Power Reports.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li id="menu-item-22409"
                                                                class="quadmenu-item-22409 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-3 col-lg-3">
                                                                <div id="dropdown-22409" class>
                                                                    <ul>
                                                                        <li id="menu-item-22792"
                                                                            class="quadmenu-item-22792 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                            <div
                                                                                class="quadmenu-item-widget widget widget_text">
                                                                                <div class="textwidget">
                                                                                    <p><span
                                                                                            style="color: #20313b; font-size: 21px;"><strong>Parking
                                                                                                Space Management<br>
                                                                                                ____________________</strong></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li id="menu-item-22794"
                                                                            class="quadmenu-item-22794 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a
                                                                                href="parking-space-management-on-ground/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Parking
                                                                                        Space Management
                                                                                        (On-Ground)</span>
                                                                                    <span
                                                                                        class="quadmenu-description">Turns
                                                                                        the classic on-street parking
                                                                                        management into a new universe
                                                                                        of functionality and
                                                                                        efficiency.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-22825"
                                                                            class="quadmenu-item-22825 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a href="parking-space-management-flush/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Parking
                                                                                        Space Management (Flush)</span>
                                                                                    <span
                                                                                        class="quadmenu-description">Designed
                                                                                        to detect parking space
                                                                                        occupancy of parking spots that
                                                                                        gets sent wirelessly to
                                                                                        cloud</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li id="menu-item-23657"
                                                    class="quadmenu-item-23657 quadmenu-item quadmenu-item-object-mega quadmenu-item-has-children quadmenu-item-type-mega quadmenu-item-level-0 quadmenu-dropdown quadmenu-has-caret quadmenu-has-title quadmenu-has-link quadmenu-dropdown-right dropdown-maxheight">
                                                    <a href="https://cloud.disrupt-x.io/global/core/market/main"
                                                        class="quadmenu-dropdown-toggle hoverintent">
                                                        <span class="quadmenu-item-content">
                                                            <span class="quadmenu-caret"></span>
                                                            <span class="quadmenu-text  hover t_1000">Agrodroids</span>
                                                        </span>
                                                    </a>
                                                    <div id="dropdown-23657"
                                                        class="quadmenu_btt t_300 quadmenu-dropdown-menu quadmenu-dropdown-stretch-dropdown">
                                                        <ul class="quadmenu-row">
                                                            <li id="menu-item-23661"
                                                                class="quadmenu-item-23661 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-12 col-sm-4 col-lg-6">
                                                                <div id="dropdown-23661" class>
                                                                    <ul>
                                                                        <li id="menu-item-23668"
                                                                            class="quadmenu-item-23668 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                            <div
                                                                                class="quadmenu-item-widget widget widget_media_image">
                                                                                <img width="1381" height="891"
                                                                                    src="<?php bloginfo('template_directory'); ?>/assets/images/Disrupt-X-Agrodroids.jpg"
                                                                                    class="image wp-image-23622  attachment-full size-full"
                                                                                    alt="Disrupt-X-Agrodroids - Menu"
                                                                                    decoding="async" loading="lazy"
                                                                                    style="max-width: 100%; height: auto;">
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li id="menu-item-23663"
                                                                class="quadmenu-item-23663 quadmenu-item quadmenu-item-object-column quadmenu-item-has-children quadmenu-item-type-column col-sm-4 col-lg-3">
                                                                <div id="dropdown-23663" class>
                                                                    <ul>
                                                                        <li id="menu-item-23669"
                                                                            class="quadmenu-item-23669 quadmenu-item quadmenu-item-object-widget quadmenu-item-type-widget">
                                                                            <div
                                                                                class="quadmenu-item-widget widget widget_text">
                                                                                <div class="textwidget">
                                                                                    <p><span
                                                                                            style="color: #1e8d77; font-size: 21px;"><strong>Smart
                                                                                                Agriculture<br>
                                                                                                ____________________</strong></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li id="menu-item-23670"
                                                                            class="quadmenu-item-23670 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a
                                                                                href="smart-agriculture-sensor-soil-surface-mount/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Smart
                                                                                        Agriculture Sensor (Soil Surface
                                                                                        Mount)</span>
                                                                                    <span
                                                                                        class="quadmenu-description">Smart
                                                                                        metrics for crops, residential/
                                                                                        commercial lawns and gardens and
                                                                                        golf courses.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="menu-item-23688"
                                                                            class="quadmenu-item-23688 quadmenu-item quadmenu-item-object-page quadmenu-item-type-post_type quadmenu-item-type-post_type quadmenu-item-level-2 quadmenu-has-description quadmenu-has-title quadmenu-has-link quadmenu-has-background quadmenu-dropdown-right">
                                                                            <a
                                                                                href="smart-agriculture-sensor-elevated-mount/">
                                                                                <span class="quadmenu-item-content">
                                                                                    <span
                                                                                        class="quadmenu-text  hover t_1000">Smart
                                                                                        Agriculture Sensor (Elevated
                                                                                        Mount)</span>
                                                                                    <span class="quadmenu-description">A
                                                                                        Smart Agriculture Solution
                                                                                        Providing real-time monitoring
                                                                                        of the farm through IoT
                                                                                        sensors.</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li id="menu-item-23665"
                                                                class="quadmenu-item-23665 quadmenu-item quadmenu-item-object-column quadmenu-item-type-column col-sm-3 col-lg-3">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li id="menu-item-18102"
                                                    class="quadmenu-item-18102 quadmenu-item quadmenu-item-object-mega quadmenu-item-type-mega quadmenu-item-level-0 quadmenu-has-title quadmenu-has-link quadmenu-dropdown-right dropdown-maxheight">
                                                    <a title="IoT Cloud Platform" target="_blank" href="#">
                                                        <span class="quadmenu-item-content">
                                                            <span class="quadmenu-text  hover t_1000">Log In</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li id="menu-item-18105"
                                                    class="quadmenu-item-18105 quadmenu-item quadmenu-item-object-mega quadmenu-item-type-mega quadmenu-item-level-0 quadmenu-has-title quadmenu-has-link quadmenu-dropdown-right dropdown-maxheight">
                                                    <a target="_blank"
                                                        href="https://cloud.disrupt-x.io/global/core/market/main">
                                                        <span class="quadmenu-item-content">
                                                            <span class="quadmenu-text  hover t_1000">Marketplace</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>