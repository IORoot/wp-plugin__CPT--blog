<?php 


get_header();

while ( have_posts() ) :

	the_post();


	// -------------------------- TEMPLATE START ------------------------------
	?>

	<?php
	// ┌─────────────────────────────────────────────────────────────────────────┐
	// │                                                                         │
	// │                                VIDEO                                    │
	// │                                                                         │
	// └─────────────────────────────────────────────────────────────────────────┘
	?>
	<?php include( __DIR__ . '/single-parts/youtube_lite.php');  ?> 	

	<article class="max-w-screen-xl mx-4 xl:m-auto block pb-40 relative">
		<?php
		// ┌─────────────────────────────────────────────────────────────────────────┐
		// │                                                                         │
		// │                                BREADCRUMBS                              │
		// │                                                                         │
		// └─────────────────────────────────────────────────────────────────────────┘
		?>
		<?php include( __DIR__ . '/single-parts/breadcrumbs.php');  ?> 





		<div class="flex flex-col-reverse lg:flex-row w-full gap-10 lg:gap-20 mb-20  pt-10 lg:pt-0">
			<div class="w-full lg:w-2/3">
				<?php
				// ┌─────────────────────────────────────────────────────────────────────────┐
				// │                                                                         │
				// │                                TITLE                                    │
				// │                                                                         │
				// └─────────────────────────────────────────────────────────────────────────┘
				?>
				<?php include( __DIR__ . '/single-parts/title.php');  ?> 
				
			</div>

			<div class="w-full lg:w-1/3">
				<?php
				// ┌─────────────────────────────────────────────────────────────────────────┐
				// │                                                                         │
				// │                                METADATA                                 │
				// │                                                                         │
				// └─────────────────────────────────────────────────────────────────────────┘
				?>
				<?php include( __DIR__ . '/single-parts/metadata.php');  ?>  
			</div>		
		</div>
		


		<div class="flex gap-10 lg:gap-20 items-start mb-40">

			<?php
			// ┌─────────────────────────────────────────────────────────────────────────┐
			// │                                                                         │
			// │                                THE CONTENT                              │
			// │                                                                         │
			// └─────────────────────────────────────────────────────────────────────────┘
			?>
			<?php include( __DIR__ . '/single-parts/content.php');  ?>  

			<?php
			// ┌─────────────────────────────────────────────────────────────────────────┐
			// │                                                                         │
			// │                            TABLE OF CONTENTS                            │
			// │                                                                         │
			// └─────────────────────────────────────────────────────────────────────────┘
			?>
			<?php include( __DIR__ . '/single-parts/toc.php');  ?>  
		</div>



		<?php
		// ┌─────────────────────────────────────────────────────────────────────────┐
		// │                                                                         │
		// │                              RELATED ARTICLES                           │
		// │                                                                         │
		// └─────────────────────────────────────────────────────────────────────────┘
		?>
		<div class="flex flex-col md:flex-row mb-4 gap-4">
			<?php include( __DIR__ . '/generic-parts/related.php');  ?>  
		</div>

		<?php
		// ┌─────────────────────────────────────────────────────────────────────────┐
		// │                                                                         │
		// │                        =TUTORIALS / DEMO / BLOG                         │
		// │                                                                         │
		// └─────────────────────────────────────────────────────────────────────────┘
		?>
		<?php include( __DIR__ . '/generic-parts/tutorials_demos_blog.php');  ?>  

	</article>


	<?php
	// -------------------------- TEMPLATE END --------------------------------


endwhile;

get_footer();