<?get_header()?>
<section>
	<article>
		<?php while ( have_posts() ) : the_post(); ?>
		<h1><?the_title()?></h1>
		<div class="content single shadow">
			<?the_content()?>
		</div>
		<?php endwhile; // end of the loop. ?>
	</article>
	<?get_sidebar()?>
</section>
<?get_footer()?>