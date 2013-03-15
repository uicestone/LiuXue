	<footer>
		<div class="service">
			<section>
				<div class="widget column-1 service">
					<h2>服务项目</h2>
					<div class="service-content">
						<ul class="column-5-1">
							<h3>个人留学</h3>
							<?query_posts('category_name=study-abroad')?>
							<?while(have_posts()):the_post();?>
							<li><a href="<?the_permalink()?>"><?the_title()?></a></li>
							<?endwhile;?>
						</ul>
						<ul class="column-5-1">
							<h3>培训项目</h3>
							<?query_posts('category_name=training')?>
							<?while(have_posts()):the_post();?>
							<li><a href="<?the_permalink()?>"><?the_title()?></a></li>
							<?endwhile;?>
						</ul>
						<ul class="column-5-1">
							<h3>合作办学</h3>
							<?query_posts('category_name=cooperation')?>
							<?while(have_posts()):the_post();?>
							<li><a href="<?the_permalink()?>"><?the_title()?></a></li>
							<?endwhile;?>
						</ul>
						<ul class="column-5-1">
							<h3>后续服务</h3>
							<?query_posts('category_name=supplement')?>
							<?while(have_posts()):the_post();?>
							<li><a href="<?the_permalink()?>"><?the_title()?></a></li>
							<?endwhile;?>
						</ul>
						<ul class="column-5-1">
							<h3>考察与夏令营</h3>
							<?query_posts('category_name=investigation')?>
							<?while(have_posts()):the_post();?>
							<li><a href="<?the_permalink()?>"><?the_title()?></a></li>
							<?endwhile;?>
						</ul>
					</div>
				</div>
			</section>
		</div>
		<section>
			<hr>
			<div class="copy">Copyright by 上海星瀚律师事务所 &copy; 2010-2013</div>
			<nav>
				<ul>
					<li>首页</li>
					<li>FAQ</li>
					<li>联系我们</li>
					<li>回到顶部</li>
				</ul>
			</nav>
		</section>
	</footer>
<?wp_footer()?>
</body>
</html>