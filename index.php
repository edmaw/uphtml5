<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>">
    <h2 class="entry-title"><a title="<?php printf( esc_attr__( 'Permalink to %s', 'compass' ), the_title_attribute( 'echo=0' ) ); ?>" href="<?php the_permalink(); ?>" rel="bookmark">
    <?php the_title(); ?>
</a></h2>
    
    <section class="entry-content"><?php the_content(); ?></section><!-- .entry-content -->
    
    Posted on <?php the_date(); ?> by <?php the_author(); ?>
    
    <section class="entry-meta"><?php if ( count( get_the_category() ) ) : ?>
    <span class="cat-links">
        Categories: <?php echo get_the_category_list( ', ' ); ?>
    </span>
<?php endif; ?></section><!-- .entry-meta -->
    
</article>
<?php endwhile; ?>


<!-- Signup Form -->
			<form id="signup-form" method="post" action="#">
				<input type="email" name="email" id="email" placeholder="Email Address" />
				<input type="submit" value="Sign Up" />
			</form>


<?php get_footer(); ?>