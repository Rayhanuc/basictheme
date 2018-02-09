<?php

/*

Template Name:  Right Sidebar

*/
get_header();
?>
<div class="contentBox">
  <div class="innerBox">
	<div class="content-area">
		<?php while(have_posts()):the_post();?>
			<h2><?php the_title();?></h2>
			<?php the_content();?>
		<?php endwhile;?>
	</div>
	<div class="sidebar-area">
		<?php dynamic_sidebar('right-sidebar');?>
	</div>
	</div>
</div>
<?php get_footer();?>
