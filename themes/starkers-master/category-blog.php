<?php
/**
 * The template for displaying Category Archive pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div class="navbar blog-navbar">
  <nav>
    <h1 class="back-to-port">
    	<a href="<?php echo home_url(); ?>">&larr; Portfolio</a>
    </h1>
  </nav>
</div>
<?php if ( have_posts() ): ?>
<div class="body-container">
<h2 class="title-of-blog">KeVon's Blog</h2>
<ol class="post-list">
<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<article>
			<h2 class="blog-title"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<time class="blog-date" datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <span class="comment-link"><?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></span>
			<div class="blog-content">
				<?php the_excerpt(); ?>
			</div>
		</article>
	</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>
<?php endif; ?>
</div>
<div class="footer blog-footer">
	<p>&copy KeVon Ticer 2013</p>
	<div class="mobile-contact">
    <ul class="contact-list">
      <li class="in-16"><a href="mailto:k.j.ticer@gmail.com"><img src="<?php echo wp_get_attachment_url(75); ?>"></a></li>
      <li class="in-16"><a href="http://www.github.com/kevtice15"><img src="<?php echo wp_get_attachment_url(77); ?>"></a></li>
      <li class="in-16"><a href="http://www.linkedin.com/profile/view?id=61742293"><img src="<?php echo wp_get_attachment_url(79); ?>"></a></li>
      <li class="in-16"><a href="http://www.plus.google.com/u/0/108593794409934626051/posts"><img src="<?php echo wp_get_attachment_url(78); ?>"></a></li>
      <li class="in-16"><a href="http://www.facebook.com/kevonticer"><img src="<?php echo wp_get_attachment_url(76); ?>"></a></li>
      <li class="in-16"><a href="http://www.twitter.com/CallMeKeV_"><img src="<?php echo wp_get_attachment_url(80); ?>"></a></li>
    </ul>
  </div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>