<?php
/**
 * Template Name: About
 *
 * The template for displaying pages with sidebar.
 *
* @package marioernestoms
 */

get_header(); ?>

<section id="about" class="about-section">
    <div class="container">
        <div class="row">
            <h1>About Me</h1>
            <div class="about-us row" style="padding-top: 5%;">
                <div class="col-sm-7 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms" style="border-right: 1px dotted #ccc">
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/eu.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h3 class="top-zero">Hi, I'm Mario Ernesto!</h3>
                            <p>Front-end Developer from Rio de Janeiro, Brazil. I work with all kinds of projects from simple to complex, always seeking the best experience of interaction with the users.</p>
                            <p>Full domain of HTML5, CSS3, JavaScript, Performance, SEO. My objective is working with clean coding that's use the best code standards practices.</p>
                            <p>Front-end Development is my specialty and WordPress is my passion. I build themes for WordPress with a perfect balance between code standard and best performance.</p>
                            <div class="ui stacked spaced segment">
                                <p class="available-frelancer btn btn-success"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Available for Freelance</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="our-skills">
                        <h3 class="top-zero">My skills</h3>
                        <p>► 8+ YEARS BUILDING WEBSITES AND WEB SYSTEMS</p>
                        <ul>
                            <li class="single-skill">
                                Planning Front-end infrastructures
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  data-transition="100">8+ Years</div>
                                </div>
                            </li>
                            <li class="single-skill">
                                WordPress Themes and Plugins development
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  data-transition="50">4+ Years</div>
                                </div>
                            </li>
                            <li class="single-skill">
                                PHP Back-end development
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  data-transition="40">3+ Years</div>
                                </div>
                            </li>
                        </ul>

                        <p>► SPECIALTIES</p>
                        <ul>
                            <li class="single-skill">Full domain with HTML/CSS/JS</li>
                            <li class="single-skill">Preprocessor (Sass)</li>
                            <li class="single-skill">Task Runners (Gulp/Grunt)</li>
                            <li class="single-skill">Package Managers (Bower)</li>
                            <li class="single-skill">Source Control (Git, Bitbucket)</li>
                            <li class="single-skill">PHP development with MySQL</li>
                            <li class="single-skill">Responsive and Cross-browser sites and systems</li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>