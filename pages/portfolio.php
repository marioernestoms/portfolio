<?php
/**
 * Template Name: Portfolio
 *
 * The template for displaying pages with sidebar.
 *
* @package marioernestoms
 */

get_header(); ?>

<section id="portfolio" class="portfolio-section">
    <div class="container">
        <h1>Portfolio</h1>
        <div class="row">
            <div class="tab-base tab-stacked-left"> 
               <div class="col-md-9 col-sm-8">
                    <!--Tabs Content-->
                    <div class="tab-content">
                        <div id="demo-stk-lft-tab-1" class="tab-pane fade active in">
                            <?php include( get_template_directory() . '/template-parts/portfolio-html.php'); ?>
                        </div>
                        <div id="demo-stk-lft-tab-2" class="tab-pane fade">
                            <?php include( get_template_directory() . '/template-parts/portfolio-wordpress.php'); ?>
                        </div>
                        <div id="demo-stk-lft-tab-3" class="tab-pane fade">\
                            <?php include( get_template_directory() . '/template-parts/portfolio-wordpress.php'); ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4">
                    <!--Nav tabs-->
                    <div class="sidebar portfolio-sidebar">
                        <div class="sidebar-item categories">
                            <h4>Project Categories</h4>
                            <ul class="nav navbar-stacked">
                                <li class="active">
                                    <a data-toggle="tab" href="#demo-stk-lft-tab-1">HTML/CSS/JS<span class="pull-right">(1)</span></a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#demo-stk-lft-tab-2">Php<span class="pull-right">(2)</span></a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#demo-stk-lft-tab-3">Wordpress<span class="pull-right">(8)</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
