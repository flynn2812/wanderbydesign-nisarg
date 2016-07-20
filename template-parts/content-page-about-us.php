<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Nisarg
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-content'); ?>>

	<?php nisarg_featured_image_disaplay(); ?>

	<header class="entry-header">
		<span class="screen-reader-text"><?php the_title();?></span>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta"></div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nisarg' ),
				'after'  => '</div>',
			) );
		?>
		
		<div class="about-us-flex-wrapper">
			<div class="about-us-flex-column about-brady">
				<h1>
					<a href="http://www.wanderbydesign.co/bradylambert/">
 						Brady
 					</a>
				</h1>
				<div class="aspect-ratio-wrapper">
					<a href="http://www.wanderbydesign.co/bradylambert/">
 						<div class="aspect-ratio"></div>
 					</a>
				</div>
				<p>
					My name’s Brady. After a whopping year at my first job out of college, I decided I needed to take a step back from the standard world of work and school to test out some different options. So I quit my job and decided to travel across South America!	
				</p>		
				<p>
					Why, you may ask? For starters, I’m restless and I love to learn. Travelling full-time sounds like a great way to pursue my own changing interests.
				</p>
				<p>
					However, I’m also terrified of uncertainty. My hope is that by purposefully placing myself in new situations I can make uncertainty more predictable in order to feel content amidst chaos.
				</p>
				<p>
					Feel free to follow along as I work to build confidence in the unknown.
				</p>
			</div>
			<div class="about-us-flex-column about-michael">
				<h1>
					<a href="http://www.wanderbydesign.co/michaelbianchi/">
						Michael
					</a>
				</h1>
				<div class="aspect-ratio-wrapper">
					<a href="http://www.wanderbydesign.co/michaelbianchi/">
						<div class="aspect-ratio"></div>
					</a>
				</div>
				<p>
					Hey! I'm Michael. 
					I recently left my career at a healthcare software company in order to do away with the conventional 9-5 (really it was 7:30-5:30, but let's just say I'm glad to be out of it) and wander throughout South America for the next year or so. 
				</p>
				<p>
					I'm travelling to try out a life where my day-to-day is not strictly controlled by the tick of the clock or someone else's needs and demands.

				</p>
				<p>
					I hope to find a balance between comfort and chaos, where there is change enough to keep me on my toes as well as enough familiarity to not feel constantly anxious about the next stage in my life.
				</p>
				<p>
					Let's see how that goes!
				</p>
			</div>
		</div><!-- .about-us-flex -->
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'nisarg' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

