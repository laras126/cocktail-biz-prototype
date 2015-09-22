<?php 

// ----
// Function to print blog posts
// ----

// Method 1 - printing markup within PHP
// function printBlogPost($title, $excerpt) {
// 	echo '<h4>' . $title . '</h4>';
// 	echo '<p>' . $excerpt . '</p>';
// }


// Method 2 - WINNER
// Include the markup included in a separate partial. Function arguments can be accessed inside the partial.
function printBlogPost($title, $excerpt, $slug) {
	include('blog-post.php');
}


// Method 3 - Close PHP, write markup in between, open again to close the bracket. 
// GROSS. But sometimes reasonable.
//function printBlogPost($title, $excerpt) { ?>
	<!-- <h4><?php echo $title ?></h4>
	<p><?php echo $excerpt; ?></p> -->
<?php //}


// Quick function to print markup for an image
function printGallery($path) {
	echo '<img class="nice-class" src="' . $path . '">';
}


// You can use an array to store data, but keep it to one key/value pair. Multidimensional arrays get super hairy in PHP.
// Used in blog.php
$blog_posts = array(
		'Facebook Party' => 'Facebook party was fun.',
		'Tumblr Party' => 'The Tumblr party was SUPER great!',
		'Urban Compass Party' => 'The Urban Compass party was SUPER DUPER DUPER great!'
	);
