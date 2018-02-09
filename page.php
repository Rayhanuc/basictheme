<?php get_header();?>

<div id="mainPicture">
  <div class="picture" style="background-image: url('<?php header_image();?>')">
    <div id="headerTitle"><?php bloginfo('name');?><i class="fa fa-shower" aria-hidden="true"></i></div>
    <div id="headerSubtext"><?php bloginfo('description');?></div>
  </div>
</div>

<?php get_template_part('template-part/content','page');?>

<?php get_footer();?>