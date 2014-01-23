<?php
/**
* The Sidebar containing the primary and secondary widget areas.
*/
?>
<section id="sidebar-content">
<div id="primary" class="widget-area" role="complementary">
<ul class="xoxo">

<?php
/* When we call the dynamic_sidebar() function, it'll spit out
* the widgets for that widget area. If it instead returns false,
* then the sidebar simply doesn't exist, so we'll hard-code in
* some default sidebar stuff just in case.
*/
if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

<li id="search" class="widget-container widget_search">
<?php get_search_form(); ?>
</li>

<li id="archives" class="widget-container">
<h3 class="widget-title">Files</h3>
<ul>
<?php wp_get_archives( 'type=monthly' ); ?>
</ul>
</li>

<li id="meta" class="widget-container">
<h3 class="widget-title">Meta</h3>
<ul>
<?php wp_register(); ?>
<li><?php wp_loginout(); ?></li>
<?php wp_meta(); ?>
</ul>
</li>

<?php endif; // end primary widget area ?>
</ul>
</div><!-- #primary .widget-area -->

<h3>Categories</h3>
<?php  wp_nav_menu(array('menu' => 'Secondary' ));?>

<div id="secondary" class="widget-area" role="complementary">
<ul class="xoxo">

<?php
/* When we call the dynamic_sidebar() function, it'll spit out
* the widgets for that widget area. If it instead returns false,
* then the sidebar simply doesn't exist, so we'll hard-code in
* some default sidebar stuff just in case.
*/
if ( ! dynamic_sidebar( 'secondary-widget-area' ) ) : ?>

<li id="search" class="widget-container widget_search">
<?php get_search_form(); ?>
</li>

<li id="archives" class="widget-container">
<h3 class="widget-title">Archives</h3>
<ul>
<?php wp_get_archives( 'type=monthly' ); ?>
</ul>
</li>

<li id="meta" class="widget-container">
<h3 class="widget-title">Meta</h3>
<ul>
<?php wp_register(); ?>
<li><?php wp_loginout(); ?></li>
<?php wp_meta(); ?>
</ul>
</li>

<?php endif; // end secondary widget area ?>
<!--li class="widget-container"><a href="<?php bloginfo('rss2_url'); ?>" class="rss-link">RSS feed</a></li-->
</ul>

</div><!-- #secondary .widget-area -->
</section>
<div class="advice">
	<!--Advices-->
</div>
