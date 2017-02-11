<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fav-icon.png" rel="shortcut icon" />

        <?php wp_head(); ?>
    </head>
    
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">mario ernesto</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <?php
                    wp_nav_menu( array(
                        'theme_location'  => 'menu-1',
                        'menu_class'      => 'page-scroll',
                        'items_wrap'      => '<ul class="nav navbar-nav">%3$s</ul>',
                        'walker'          => '',
                    ) );
                    ?>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
