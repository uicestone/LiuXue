<?get_header()?>
<section>
	<article>
		<h1><?=get_category_parents($cat, true, ' &raquo; ')?></h1>
		<div class="content shadow">
			<?while (have_posts()) :the_post();?>
			<div class="item">
				<h2><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></h2>
				<summary><?the_excerpt()?>
					<a href="<?the_permalink()?>">【查看全文】</a>
				</summary>
			</div>
			<?endwhile;?>
			<div class="pagination">
<?php
			global $wp_query;
			echo paginate_links(array(
				'base' => str_replace( 99999, '%#%', esc_url( get_pagenum_link( 99999 ) ) ),
				'format'=>'/%n%/page/%#%',
				'total'=>2,
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages)
			);
?>
			</div>
		</div>
	</article>
	<?get_sidebar()?>
</section>
<?get_footer()?>