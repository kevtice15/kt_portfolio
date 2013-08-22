<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
$resume_page_id = 31;
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


<div class="body-container">
		<header>
            <hgroup class="front-page-header">
                <h1 class="headline-name">KeVon Ticer</h1>
                <h2 class="headline-title"> Interaction Developer and Designer</h2>    
                <nav>
                    <ul class="navbar">
                        <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
                        <li><a href="<?php echo get_permalink( $resume_page_id ); ?>">Resume</a></li>
                        <li><a href="">About</a></li>
                    </ul>
                </nav>
            </hgroup>
		</header>
		<ul>
    		<?php
                $i = 0;
    			$type = 'portfolio';
    			$args = array(
    				'post_type' => $type,
    				'post_status' => 'publish',
    				'posts_per_page' => -1,
    				'caller_get_posts' => 1
    			);
    			$query = null;
    			$query = new WP_Query($args);
    			if($query->have_posts()){
    				while($query->have_posts()) : $query->the_post(); ?>
    				<?php
                    $portfoliopost = get_post_custom(get_the_id());	
    				// echo '<li><a href=' . get_permalink() . '><div class="order-outer"><div class="round"><img class="nnationpic">' . wp_get_attachment_image($portfoliopost[image][0]) . '</img></div><span>' . get_the_title() . '</span></div></a></li>';
    				//print_r($portfoliopost);
                    if(($i % 2) == 0){
                        echo '<div class="col-row">';
                    }
                    echo'
                        <li class="col-50">
    						<div class="project-unit">
                                <a href=' . get_permalink() . '>
                                    <div class="project-marquee">
                                        ' . wp_get_attachment_image($portfoliopost[marquee_image][0], 'full') . '
                                    </div>
                                </a>
                                <div class="portfolio-text">
                                    <p class="project-category">' . get_the_category_by_ID($portfoliopost[category][0]) . '</p>
                                    <p class="project-blurb">' . $portfoliopost[blurb][0] . '</p>
                                </div>
                            </div>
    					</li>';
                    if(($i % 2) != 0){
                        echo '</div>';
                    }
                    $i++;
    				endwhile;
                    if(($i % 2) == 0){
                        echo '</div>';
                    }
    				}
    				wp_reset_query();
    				wp_reset_postdata();
    		?>
        </ul>
	</div>
<!--	
<?php if ( have_posts() ): ?>
 <h2>Latest Posts</h2>	
<ol>
<?php while ( have_posts() ) : the_post(); ?>
	<li>`
		<article>
			<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
			<?php the_content(); ?>
		</article>
	</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>No posts to display</h2>
<?php endif; ?> 
-->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>