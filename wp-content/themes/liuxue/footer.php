	<footer>
		<div class="service">
			<section>
				<div class="widget column-1 service">
					<h2>服务项目</h2>
					<div class="service-content">
						<ul class="column-5-1">
							<h3><a href="/category/services/study-abroad/" target="_blank">个人留学</a></h3>
							<?query_posts('category_name=study-abroad')?>
							<?while(have_posts()):the_post();?>
							<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
							<?endwhile;?>
						</ul>
						<ul class="column-5-1">
							<h3><a href="/category/services/training/" target="_blank">培训项目</a></h3>
							<?query_posts('category_name=training')?>
							<?while(have_posts()):the_post();?>
							<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
							<?endwhile;?>
						</ul>
						<ul class="column-5-1">
							<h3><a href="/category/services/cooperation" target="_blank">合作办学</a></h3>
							<?query_posts('category_name=cooperation')?>
							<?while(have_posts()):the_post();?>
							<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
							<?endwhile;?>
						</ul>
						<ul class="column-5-1">
							<h3><a href="/category/services/supplement/" target="_blank">后续服务</a></h3>
							<?query_posts('category_name=supplement')?>
							<?while(have_posts()):the_post();?>
							<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
							<?endwhile;?>
						</ul>
						<ul class="column-5-1">
							<h3><a href="/category/services/investigation/" target="_blank">考察与夏令营</a></h3>
							<?query_posts('category_name=investigation')?>
							<?while(have_posts()):the_post();?>
							<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
							<?endwhile;?>
						</ul>
					</div>
				</div>
			</section>
		</div>
		<section>
			<hr>
			<div class="copy">Copyright by <a href="http://www.lawyerstars.com" target="_blank">上海星瀚律师事务所</a> &copy; 2010-2013</div>
			<nav>
				<?wp_nav_menu(array('menu'=>'底部导航','menu_class'=>'foot','container'=>false))?>
			</nav>
		</section>
	</footer>
<?wp_footer()?>
</body>
</html>