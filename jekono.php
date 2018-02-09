<div class="contentBox">
  <div class="innerBox">

<?php while(have_posts()):the_post();?>

    <div class="contentTitle"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
    <div class="contentText">


      <?php the_content();?>
     
    </div>

<?php endwhile;?>

  </div>
</div>