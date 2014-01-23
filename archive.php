<?php get_header(); ?>


<article class="wrap" id="lab">
	<h1>Lab</h1>	
	<?php if (have_posts()) :?>
			<?php while (have_posts()) : the_post(); ?>
	<section class="post post-in-list">		
		<header class="header-post clearfix">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="category">
				Category: <?php the_category(', '); ?>					
			</div>
		</header>
		<div class="content">
			<?php the_content('Read more'); ?>
		</div>
	</section>	   
	<?php endwhile; ?>
	<?php else :?>
	<section class="post">		
		<header class="header-post clearfix">
			<h2>Sorry, posts not found!</h2>
		</header>
		<div class="content">
			<p>There aren't experiments here :-(</p>
		</div>
	</section>
	<?php endif; ?>
	<?php if (show_posts_nav()) : ?>
	<nav class="navPages">		
		<?php global $wp_query;
		$big = 999999999; // need an unlikely integer		
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'prev_text' => 'Prev',
			'next_text' => 'Next'
		) );
		?>
	</nav>
	<?php endif; ?>
	<?php //get_sidebar(); ?>	
</article>
<?php get_footer(); ?>