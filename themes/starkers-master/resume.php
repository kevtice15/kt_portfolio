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
    <div class="resume-container">
    	<?php echo $page_content ?>
    </div>
		
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>