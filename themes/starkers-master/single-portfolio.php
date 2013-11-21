<?php
/*
Template Name: Portfolio
 */
$mypost = get_post_custom(get_the_id());

// $type = 'portfolio';
//     	//echo $mypost[name][0];
// $args = array(
//     'post_type' => $type,
//     'meta_query' => array(
//     	array(
//     		'value' => "' . get_the_ID() . '",
//     		'compare' => 'LIKE'
//     		)
// 		)
//     );
// $query = null;
// $portfolio = new WP_Query($args);
$color = get_field('background_color');
$r = hexdec(substr($color, 1, 2));
$g = hexdec(substr($color, 3, 2));
$b = hexdec(substr($color, 5, 2));
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/single-portfolio-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="navbar">
    <nav>
        <h1 class="myname"><a href="<?php echo home_url(); ?>">KeVon Ticer</a></h1>
        <ul>
        	<!-- <li><a class="home-icon" href="<?php echo home_url(); ?>"><?php echo wp_get_attachment_image(55); ?></a></li> -->
            <li><a href="<?php echo home_url(); ?>">Portfolio</a></li>
            <li><a href="<?php echo get_permalink(31); ?>">Resume</a></li>
            <li><a href="<?php echo get_permalink(33); ?>">About Me</a></li>
        </ul>
    </nav>
</div>
<div class="portfolio-marquee">
	<?php echo wp_get_attachment_image($mypost[marquee_image][0], 'full');?>
	<hgroup class="portfolio-header">
		<h2 class="portfolio-title"><?php the_title(); ?></h2>
		<h3 class="portfolio-category"><?php get_the_category_by_ID($portfoliopost[category][0]); ?></h3>
		<h3 class="portfolio-blurb"><?php echo $mypost[blurb][0]; ?></h3>
	</hgroup>
</div>
<div class="body-container-portfolio" style= "background-color: rgba(<?php echo $r; ?> ,<?php echo $g; ?>, <?php echo $b; ?>, .4)">
	<p class="portfolio-spiel"><?php echo get_the_content(); ?></p>
	<div class="project-section">
		<div class="col-row">
			<div class="col-40 left">
				<div class="project-section-title">
					<p>PROMPT</p>
				</div>
				<div class="project-section-content">
					<p><?php echo get_field('prompt'); ?></p>
				</div>
				<div class="project-section-title">
					<p>DURATION</p>
				</div>
				<div class="project-section-content">
					<p><?php echo get_field('duration'); ?></p>
				</div>
				<div class="project-section-title">
					<p>COLLABORATORS</p>
				</div>
				<div class="project-section-content collabs">
					<p><?php echo get_field('group_members'); ?></p>
				</div>
			</div>
			<div class="col-80">
				<div class="project-section-title">
					<p>PRODUCT</p>
				</div>
				<div class="project-section-content">
					<p><?php echo get_field('product'); ?></p>
				</div>
				<div class="project-section-title">
					<p>PROCESS</p>
				</div>
				<div class="project-section-content">
					<p><?php echo get_field('process'); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div style="clear: both;"></div>
<?php endwhile; ?>
</div>
<div class="footer">
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