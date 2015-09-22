<?php include('partials/header.php'); ?>

<?php 
	// Get the query string i.e. the $slug argument
	$post = $_GET['post']; 
	echo $post;
?>

<section class="theme--<?php echo $post ?>">	
	
	<!-- Keep it to two or so representations - don't want this to get too soupy! -->
	<h2>Welcome
		<?php if ($post == 'facebook') { ?>
			Facebook
		<?php } elseif ($post == 'tumblr') {?>
			Tumblr
		<?php } ?>
	!</h2>

	<!-- More content here -->

</section>

<?php include('partials/footer.php'); ?>