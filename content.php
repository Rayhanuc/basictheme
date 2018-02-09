<div class="contentBox">
  <div class="innerBox">

<?php while(have_posts()):the_post();?>

    <div class="contentTitle"><a href="<?php the_permalink();?>"><?php the_title();?></a>
		<h6 style="color: <?php echo get_post_meta(get_the_id(), 'sub_color',true);?>;  ">Subtitle: <?php echo get_post_meta(get_the_id(),'sub-title', true);?></h6>
    </div>

    <div class="contentText">


      <?php echo wp_trim_words(get_the_content(),40,' <a href="'.get_permalink().'">Read More</a>');?>
     
    </div>

<?php endwhile;?>

  </div>
</div>