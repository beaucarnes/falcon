<?php
/**
 * @package Falcon
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/favicon.png"  type="image/png" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="total-wrapper">
	<header class="header-wrapper" role="banner">
        <div class="grid">
        <div class="grid__item two-fifths primary-wrapper">
            <?php wp_nav_menu( array(
                'container_class'   => 'menu-header',
                'menu_class'        => 'nav nav--top nav--primary',
                'theme_location'    => 'primary_nav'
            ) ); ?>
        </div><!--
     --><div class="grid__item one-fifth icon-wrapper">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <h1 class="site-icon"><?php echo strtolower(substr(get_bloginfo('name'),0,1)); ?></h1>
            </a>
        </div><!--
     --><div class="grid__item two-fifths external-wrapper">
            <?php wp_nav_menu( array(
                'container_class'   => 'menu-header',
                'menu_class'        => 'nav nav--top nav--external',
                'theme_location'    => 'external_nav'
            ) ); ?>
        </div>
        </div>
    </header>

	<div class="site-content">
