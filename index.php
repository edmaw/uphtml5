<?php get_header(); ?>

<!-- Work -->
<div class="wrapper style2">
	<header>
	<article id="work">

		<!-- #content-->
		<div id="content">
				
			<?php // start the loop ?> 
			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<h2 class="entry-title">
					<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'compass' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
						<?php the_title(); ?>
					</a>
				</h2>

<!-- featured image --> 
<?php if ( has_post_thumbnail() ) { ?>
    <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail( 'medium', array( 'class' => 'left',
            'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) )
        ) ); ?>
    </a>
<?php } ?>

				<section class="entry-meta">
					<p>Posted on <?php the_date(); ?> by <?php the_author(); ?></p>
				</section><!-- .entry-meta -->

				<section class="entry-content">
					<?php the_content(); ?>
				</section><!-- .entry-content -->
		
				<section class="entry-meta">
					<?php if ( count( get_the_category() ) ) : ?>
						<span class="cat-links">
							Categories: <?php echo get_the_category_list( ', ' ); ?>
						</span>
					<?php endif; ?>	
				</section><!-- .entry-meta -->
				
			</article><!-- #01-->
			
			<?php endwhile; ?>
			<?php // ends the loop ?> 
		</div><!-- #content-->

	</article>
</header>
					
					<div class="container">
						<div class="row">
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<span class="icon featured fa-comments-o"></span>
									<h3>Consequat lorem</h3>
									<p>Ornare nulla proin odio consequat sapien vestibulum ipsum primis sed amet consequat lorem dolore.</p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<span class="icon featured fa-camera-retro"></span>
									<h3>Lorem dolor tempus</h3>
									<p>Ornare nulla proin odio consequat sapien vestibulum ipsum primis sed amet consequat lorem dolore.</p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<span class="icon featured fa-thumbs-o-up"></span>
									<h3>Feugiat posuere</h3>
									<p>Ornare nulla proin odio consequat sapien vestibulum ipsum primis sed amet consequat lorem dolore.</p>
								</section>
							</div>
						</div>
					</div>
					<footer>
						<p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
						<a href="#portfolio" class="button big scrolly">See some of my recent work</a>
					</footer>
				</article>
			</div>

	<!-- Portfolio -->

			<div class="wrapper style3">

			<div class="container" id="testimonials">
<!-- Testimonials -->
		<header>
			<h2>Testimonials</h2>
			<p>Here's what people have said about us</p>
		</header>

<div class="row">

<?php
	$args = array(
		 'cat' => 1, // Only source posts from a specific category
		'posts_per_page' => 20 // Specify how many posts you'd like to display
	);
	$latest_posts = new WP_Query( $args );
	if ( $latest_posts->have_posts() ) {
		while ( $latest_posts->have_posts() ) {
			$latest_posts->the_post(); ?>

<div class="4u 12u(mobile)">
<article class="box style2">
    	<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	<?php if ( has_post_thumbnail() ) { ?>
			<span class="post_thumbnail"><?php the_post_thumbnail(medium); ?></span><br/>
	<?php } ?>
			<span class="post_title"><?php the_title(); ?></span>
		</a></h3>
		<span class="post_time">Posted on <?php the_time('l jS F, Y') ?></span><br/>
		<?php the_excerpt(); ?>
	</article>
	</div>
<? }
		} else {
		echo '<p>There are no posts available</p>';
	}
	wp_reset_postdata();
?>


</div></div>

<?php get_footer(); ?>
