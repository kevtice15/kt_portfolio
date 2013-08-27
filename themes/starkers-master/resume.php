<?php
/*
Template Name: Resume
*/
$resume_page_id = 31;
$page_data = get_page(31);
$page_content = $page_data->post_content;
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div class="body-container">
    <a class="home-icon" href="<?php echo home_url(); ?>"><?php echo wp_get_attachment_image(55); ?></a>
    <div class="resume-container">
    	<?php echo $page_content ?>
    </div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>