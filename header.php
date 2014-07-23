<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('title'); ?></title>
        <meta name="description" content="<?php bloginfo('description') ?>" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	
    	<!-- <link rel="Shortcut Icon" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/favicon.ico"> -->

        <?php wp_head(); ?>
        
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    </head>
    <body>
        <div id="wrap">
            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <img class="header-logo" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" />
                        </div>
                        <div class="col-sm-6">
                            <span class="header-phone">333-444-5555</span>
                        </div>
                    </div>
                </div>
            </header>