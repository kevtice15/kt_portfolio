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
    <div class="sidebar col-40">
        <h1>KeVon Ticer</h1>
        <h2>Front-end developer and prototyper</h2>
        <h3>What I can do:</h3>
        <ul class="skill-list">
            <li>front-end prototyping, </li>
            <li>web development, </li>
            <li>responsive web design, </li>
            <li>cross-platform mobile web dev, </li>
            <li>user-centered research and evaluation, </li>
            <li>contextual design, </li>
            <li>interaction design, </li>
            <li>usability testing, </li>
            <li>storyboarding</li>
        </ul>
        <h3>Where I've worked:</h3>
        <ul>
            <li class="in-50"><a href="http://www.libertymutual.com"><img src="<?php echo wp_get_attachment_url(69); ?>"></a></li>
            <li class="in-50"><a href="http://www.cisco.com"><img src="<?php echo wp_get_attachment_url(72); ?>"></a></li>
        </ul>
        <h3>Where I've studied:</h3>
        <ul>
            <li class="in-50"><a href="http://www.scs.howard.edu/"><img src="<?php echo wp_get_attachment_url(81); ?>"></a></li>
            <li class="in-50"><a href="http://www.hcii.cmu.edu"><img src="<?php echo wp_get_attachment_url(70); ?>"></a></li>
        </ul>
        <h3>Contact Me!</h3>
        <ul>
            <li class="in-16"><a href="mailto:k.j.ticer@gmail.com"><img src="<?php echo wp_get_attachment_url(75); ?>"></a></li>
            <li class="in-16"><a href="http://www.github.com/kevtice15"><img src="<?php echo wp_get_attachment_url(77); ?>"></a></li>
            <li class="in-16"><a href="http://www.linkedin.com/profile/view?id=61742293"><img src="<?php echo wp_get_attachment_url(79); ?>"></a></li>
            <li class="in-16"><a href="http://www.plus.google.com/u/0/108593794409934626051/posts"><img src="<?php echo wp_get_attachment_url(78); ?>"></a></li>
            <li class="in-16"><a href="http://www.facebook.com/kevonticer"><img src="<?php echo wp_get_attachment_url(76); ?>"></a></li>
            <li class="in-16"><a href="http://www.twitter.com/CallMeKeV_"><img src="<?php echo wp_get_attachment_url(80); ?>"></a></li>
        </ul>
        <p>Made in 2013 by KeVon Ticer.</p>
    </div>
    <div class="col-row">
        <ul class="skip-50">
            <li class="col-33">
                <a href="<?php echo get_permalink(31); ?>">Resume</a>
            </li>
            <li class="col-33">
                <a href="<?php echo get_permalink(33); ?>">About Me</a>
            </li>
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
                    // if(($i % 2) == 0){
                    //     echo '<div>';
                    // }
                    echo'
                        <li class="col-33">
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
                    // if(($i % 2) != 0){
                    //     echo '</div>';
                    // }
                    // $i++;
                    endwhile;
                    // if(($i % 2) == 0){
                    //     echo '</div>';
                    // }
                    }
                    wp_reset_query();
                    wp_reset_postdata();
            ?>
        </ul>
    </div>
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