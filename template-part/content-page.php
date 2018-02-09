<div class="contentBox">
  <div class="innerBox">

<?php while(have_posts()):the_post();?>

    <div class="contentTitle"><a href="<?php the_permalink();?>"><?php the_title();?></a>
		<h6 style="color: <?php echo get_post_meta(get_the_id(), 'sub_color',true);?>;  ">Subtitle: <?php echo get_post_meta(get_the_id(),'sub-title', true);?></h6>
    </div>

    <div class="contentText">


      <?php the_content();?>
     
    </div>
<?php endwhile;?>

	<?php

	$testimonial = new WP_Query(array(
		'post_type' => 'basic-testimonial',
		'post_per_page' => 1,
	));

	?>
	<?php while($testimonial->have_posts()):$testimonial->the_post();?>

	<h2><?php the_title();?></h2>
	<p><?php the_post_thumbnail();?></p>
	<p><?php echo get_post_meta(get_the_id(),'desig',true);?></p>
	<p><?php echo get_post_meta(get_the_id(),'text-box',true);?></p>

	<?php endwhile;?>

  </div>
</div>
