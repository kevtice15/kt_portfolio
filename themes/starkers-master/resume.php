<?php
/*
Template Name: Resume
*/
$resume_page_id = 31;
$page_data = get_page(31);
$page_content = $page_data->post_content;
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
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
<div class="body-container">
    <div class="resume-container">
    	<?php echo $page_content ?>
    </div>
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
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>