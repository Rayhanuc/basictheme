<?php get_header();?>

<div class="contentBox">
  <div class="innerBox">
	<h2 style="font-size: 60px; text-align: center; margin: 100px 0; color: red;">404 Page Not Found</h2>

	<h2  style="font-size: 40px; text-align: center; margin: 100px 0; color: red;"><a href="<?php echo home_url();?>">Back To Home Page</a></h2>
	
	<?php get_search_form();?>

	<form class="search" action="<?php echo home_url();?>" method="GET">
		<input type="text" name="s" placeholder="Search">
	</form>

  </div>
</div>

<?php get_footer();?>

