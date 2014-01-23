<?php get_header(); ?>
<article class="wrap" id="lab">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="post post-in-page">
		<header class="header-post clearfix">
			<h1><?php the_title(); ?></h2>
			<div class="category">
				Category: <?php the_category(', '); ?>					
			</div>
		</header>
		<div class="content">
			<?php the_content(); ?>
		</div>
		<?php comments_template(); ?>
		<?php endwhile; endif; ?>
		<div class="nav-post clearfix">
			<div class="prev"><?php previous_post_link('%link', '&lt; %title'); ?></div>			
			<div class="next"><?php next_post_link('%link', '%title &gt;'); ?></div>							
		</div>
	</section>
	<?php //get_sidebar(); ?>	
</article>
<?php get_footer(); ?>