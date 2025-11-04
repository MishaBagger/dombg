<?php
	get_header();
	get_filename();
?>

<div id="main">

	<div id="content"><?php get_template_part( 'loop', 'index' ); ?></div>
	<div id="sidebar"><?php get_sidebar(); ?></div>

</div>

<?php
	get_filename();
	get_footer();
?>