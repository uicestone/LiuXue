<?get_header()?>
	<div class="extend-header">
		<section class="tiles">
			<div class="tile"><a href="/us/innovation/"><img src="/wp-content/uploads/2013/03/tile_1.png"></a></div>
			<div class="tile"><a href="/services/supplement/"><img src="/wp-content/uploads/2013/03/tile_2.png"></a></div>
			<div class="tile"><a href="/services/cooperation/"><img src="/wp-content/uploads/2013/03/tile_3.png"></a></div>
		</section>
	</div>
	<section class="tiles">
		<div class="tile"><a href="/cases/"><img src="/wp-content/uploads/2013/03/tile_4.png"></a></div>
		<div class="tile"><a href="/lifestyle/"><img src="/wp-content/uploads/2013/03/tile_5.png"></a></div>
		<div class="tile"><a href="/evaluation/"><img src="/wp-content/uploads/2013/03/tile_6.png"></a></div>
		<hr>
	</section>
	<section>
		<div class="widget column-3-1 news">
			<h2>资讯</h2>
			<ul>
				<?query_posts('tag=资讯')?>
				<?while(have_posts()):the_post();?>
				<li><a href="<?the_permalink()?>"><?the_title()?></a></li>
				<?endwhile;?>
			</ul>
			<button class="read-more"><a href="/tag/资讯/">Read more</a></button>
		</div>
		<div class="widget column-3-1 discount">
			<h2>优惠活动</h2>
			<ul>
				<?query_posts('tag=优惠活动')?>
				<?while(have_posts()):the_post();?>
				<li><a href="<?the_permalink()?>"><?the_title()?></a></li>
				<?endwhile;?>
			</ul>
			<button class="read-more"><a href="/tag/优惠活动/">Read more</a></button>
		</div>
		<div class="widget column-3-1 project">
			<h2>特色项目</h2>
			<ul>
				<?query_posts('tag=特色项目')?>
				<?while(have_posts()):the_post();?>
				<li><a href="<?the_permalink()?>"><?the_title()?></a></li>
				<?endwhile;?>
			</ul>
			<button class="read-more"><a href="/tag/特色项目/">Read more</a></button>
		</div>
		<hr>
	</section>
	<section>
		<div class="widget column-1 partner">
			<h2>合作伙伴</h2>
			<ul class="column-2-1">
				<li>
					<span class="en">Princedon University</span>
					<span class="cn">普林斯顿大学</span>
				</li>
				<li>
					<span class="en">Princedon University</span>
					<span class="cn">普林斯顿大学</span>
				</li>
				<li>
					<span class="en">Princedon University</span>
					<span class="cn">普林斯顿大学</span>
				</li>
				<li>
					<span class="en">Princedon University</span>
					<span class="cn">普林斯顿大学</span>
				</li>
			</ul>
			<ul class="column-2-1">
				<li>
					<span class="en">Princedon University</span>
					<span class="cn">普林斯顿大学</span>
				</li>
				<li>
					<span class="en">Princedon University</span>
					<span class="cn">普林斯顿大学</span>
				</li>
				<li>
					<span class="en">Princedon University</span>
					<span class="cn">普林斯顿大学</span>
				</li>
				<li>
					<span class="en">Princedon University</span>
					<span class="cn">普林斯顿大学</span>
				</li>
			</ul>
		</div>
		<hr>
	</section>
<?get_footer()?>