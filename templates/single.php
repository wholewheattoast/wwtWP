<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<header class="row">
						<h1 class="span8 entry-title"><a href="<?php $permalink = get_permalink( $id ); ?>"><?php the_title(); ?></a></h1>
					</header>
					
					<div class="entry-content row">
						<div class="span8">
							<?php the_content(); ?>
						</div>
						
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'boilerplate' ), 'after' => '' ) ); ?>
					</div>
					<!-- .entry-content -->					
					
					<div class="entry-meta row">
						<div class="span2">
							<?php wholewheattoast_posted_on(); ?>
						</div>
						<div class="span6">
							<?php wholewheattoast_posted_in(); ?>
						</div>
					</div><!-- .entry-meta -->
					

					<footer class="entry-utility row">
						<div class="span12">
							<?php edit_post_link( __( 'Edit', 'boilerplate' ), '<span class="edit-link">', '</span>' ); ?>
						</div>
					</footer><!-- .entry-utility -->
					
				</article><!-- #post-## -->
				
				<nav id="nav-below" class="navigation row">
					<div class="nav-previous span3 alpha"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'boilerplate' ) . '</span> %title' ); ?></div>
					<div class="nav-next span3"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'boilerplate' ) . '</span>' ); ?></div>
				</nav><!-- #nav-below -->
				
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
