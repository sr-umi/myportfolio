<footer>
	<span>R.S</span>
	<nav>
		<ul class="footer-nav">
			<li><a href="<?php echo home_url(); ?>">Top</a></li>
			<li><a href="<?php bloginfo('url'); ?>/works">Works</a></li>
			<li><a href="<?php bloginfo('url'); ?>/profile">Profile</a></li>
		</ul>
	</nav>
	<small>© 2023 R.S inc.</small>
</footer>

<!---  Slick 読み込みコード  --->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo esc_url(get_theme_file_uri('/js/script.js')); ?>"></script>

<!---  GSAP 読み込みコード  --->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
<script src='https://cdn.jsdelivr.net/npm/gsap@3.7.0/dist/ScrollTrigger.min.js'></script>
<script src="<?php echo esc_url(get_theme_file_uri('/js/scroll.js')); ?>"></script>



<?php wp_footer(); ?>
</body>
</html>