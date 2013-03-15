<?get_header()?>
<section>
	<article>
		<h1><?single_cat_title()?></h1>
		<div class="content shadow">
			<?while (have_posts()) :the_post();?>
			<div class="item">
				<h2><a href="<?the_permalink()?>"><?the_title()?></a></h2>
				<summary><?the_excerpt()?></summary>	
			</div>
			<?endwhile;?>
		</div>
	</article>
	<?get_sidebar()?>
</section>
<?get_footer()?>