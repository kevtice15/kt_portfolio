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
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="body-container" style= "background-color: rgba(<?php echo $r; ?> ,<?php echo $g; ?>, <?php echo $b; ?>, .4)">
	<a class="home-icon" href="<?php echo home_url(); ?>"><?php echo wp_get_attachment_image(55); ?></a>
	<hgroup class="portfolio-header">
		<h2 class="portfolio-title"><?php the_title(); ?></h2>
		<h3 class="portfolio-category"><?php get_the_category_by_ID($portfoliopost[category][0]); ?></h3>
		<h3 class="portfolio-blurb"><?php echo $mypost[blurb][0]; ?></h3>
		<!-- <h3 class="portfolio-collaborators">Collaborators: <?php echo $mypost[group_members][0]; ?></h3> -->
	</hgroup>
	<!-- Orbit Container 
	  <ul data-orbit="" class="orbit-slides-container">
	    <li>
	      <img src="<?php echo get_stylesheet_directory_uri(); ?>/foundation/img/cmured.png">
	      <div class="orbit-caption">...</div>
	    </li>
	    <li class="active">
	      <img src="<?php echo get_stylesheet_directory_uri(); ?>/foundation/img/notasteroids.png">
	      <div class="orbit-caption">...</div>
	    </li>
	    <li>
	      <img src="<?php echo get_stylesheet_directory_uri(); ?>/foundation/img/NSEW.png">
	      <div class="orbit-caption">...</div>
	    </li>
	  </ul> -->
	<article>
		<!-- <p class="portfolio-spiel"><?php echo $mypost[the_spiel][0]; ?></p> -->
		<p class="portfolio-spiel"><?php echo get_the_content(); ?></p>
		<div class="project-section">
			<div class="col-row">
				<div class="col-33">
					<div class="project-section-title">
						PROMPT
					</div>
					<hr />
					<div class="project-section-content">
						<p><?php echo get_field('prompt'); ?></p>
					</div>
				</div>
				<div class="col-33">
					<div class="project-section-title">
						DURATION
					</div>
					<hr />
					<div class="project-section-content">
						<p><?php echo get_field('duration'); ?></p>
					</div>
				</div>
				<div class="col-33">
					<div class="project-section-title">
						COLLABORATORS
					</div>
					<hr />
					<div class="project-section-content">
						<p><?php echo get_field('group_members'); ?></p>
						<!-- <ul>
							<li>Keqin Dou</li>
							<li><a href="http://jocelynehsia.net/">Joscelyn Hsia</a></li>
							<li><a href="http://www.jntran.com/">Jennifer Tran</a></li>
						</ul> -->
					</div>
				</div>
			</div>
		</div>
		<div style="clear: both;"></div>
		<div class="project-section">
			<div class="project-section-title">
				PROCESS
			</div>
			<hr />
			<div class="project-section-content">
				<p><?php echo get_field('process'); ?></p>
				<!-- <p>In this project, I worked on a team of developers and designers to redesign a food service website.
				<a href="http://kevonticer.com/wp/wp-content/uploads/2013/06/DIY_Takeout_Home.png"><img class="alignnone size-medium wp-image-19" alt="DIY_Takeout_Home" src="http://kevonticer.com/wp/wp-content/uploads/2013/06/DIY_Takeout_Home-300x161.png" width="300" height="161" /></a></p>-->

			</div>
		</div>
		<div class="project-section">
		<div class="project-section-title">
			PRODUCT
		</div>
		<hr />
		<div class="project-section-content">
		<p><?php echo get_field('product'); ?></p>
		</div>
	</div>

	</article>
<?php endwhile; ?>

</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>