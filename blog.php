<?php include('partials/header.php'); ?>


<section class="post-feed">
	
	<header>
		<h2>Blog feed</h2>
	</header>

	<?php
		printBlogPost('Tumblr', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.', 'tumblr');

		// A potentially nicer way to format the function call
		printBlogPost(
				'Facebook', 
				'Praesent commodo cursus magna, vel scelerisque nisl consectetur et.', 
				'facebook');  

	?>

	<footer>
		<p>Like our posts? Get in touch!</p>
	</footer>

</section>

<?php include('partials/footer.php'); ?>