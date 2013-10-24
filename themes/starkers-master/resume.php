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
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>