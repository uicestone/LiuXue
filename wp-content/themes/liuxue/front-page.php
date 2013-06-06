<?get_header()?>
	<div class="extend-header shadow">
		<section class="tiles">
			<div class="tile"><a href="/category/留学美国/特色内容-留学美国/" target="_blank"><img src="/wp-content/uploads/2013/03/tile_1.png"></a></div>
			<div class="tile"><a href="/category/服务项目/后续服务/" target="_blank"><img src="/wp-content/uploads/2013/03/tile_2.png"></a></div>
			<div class="tile"><a href="/category/服务项目/合作办学/" target="_blank"><img src="/wp-content/uploads/2013/03/tile_3.png"></a></div>
		</section>
	</div>
	<section class="tiles">
		<div class="tile"><a href="/category/案例分享/" target="_blank"><img src="/wp-content/uploads/2013/03/tile_4.png"></a></div>
		<div class="tile"><a href="/category/海外生活/" target="_blank"><img src="/wp-content/uploads/2013/03/tile_5.png"></a></div>
		<div class="tile"><a href="/免费评估/" target="_blank"><img src="/wp-content/uploads/2013/03/tile_6.png"></a></div>
		<hr>
	</section>
	<section>
		<div class="widget column-3-1 news">
			<h2>资讯</h2>
			<ul>
				<?query_posts('tag=资讯')?>
				<?while(have_posts()):the_post();?>
				<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
				<?endwhile;?>
			</ul>
			<button class="read-more"><a href="/tag/资讯/" target="_blank">Read more</a></button>
		</div>
		<div class="widget column-3-1 discount">
			<h2>优惠活动</h2>
			<ul>
				<?query_posts('tag=优惠活动')?>
				<?while(have_posts()):the_post();?>
				<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
				<?endwhile;?>
			</ul>
			<button class="read-more"><a href="/tag/优惠活动/" target="_blank">Read more</a></button>
		</div>
		<div class="widget column-3-1 project">
			<h2>特色项目</h2>
			<ul>
				<?query_posts('tag=特色项目')?>
				<?while(have_posts()):the_post();?>
				<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
				<?endwhile;?>
			</ul>
			<button class="read-more"><a href="/tag/特色项目/" target="_blank">Read more</a></button>
		</div>
		<hr>
	</section>
	<section>
		<div class="widget column-1 partner">
			<h2><a href="/留学美国/美国大学/">合作伙伴</a></h2>
			<ul class="column-2-1">
				<?query_posts('category_name=留学美国/美国大学&posts_per_page=5')?>
				<?while(have_posts()):the_post();?>
				<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
				<?endwhile;?>
			</ul>
			<ul class="column-2-1">
				<?query_posts('category_name=留学美国/美国大学&posts_per_page=5&paged=2')?>
				<?while(have_posts()):the_post();?>
				<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
				<?endwhile;?>
			</ul>
		</div>
		<hr>
	</section>
<?get_footer()?>