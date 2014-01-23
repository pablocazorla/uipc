<?php
/*
Template Name: About me
*/
?>

<?php get_header(); ?>
<article id="about-me" class="page">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="wrap clearfix">	
		<h1><?php the_title(); ?></h1>		
		<?php the_content(); ?>		
	</section>
	<?php endwhile; endif; ?>
</article>
<?php get_footer(); ?>