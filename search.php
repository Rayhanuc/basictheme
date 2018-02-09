<?php get_header();?>
<div class="contentBox">
  <div class="innerBox">
		<?php while(have_posts()):the_post();?>
			<h2><?php the_title();?></h2>
			<?php the_content();?>
		<?php endwhile;?>
  	</div>
</div>
<?php get_footer();?>