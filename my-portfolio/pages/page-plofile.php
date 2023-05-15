<?php
/*
Template Name: profile
*/
?>
<?php get_header('profile'); ?>

	
<main>
	<h2>
		<p class="pro-name">P</p>
		<p class="pro-name">r</p>
		<p class="pro-name">o</p>
		<p class="pro-name">f</p>
		<p class="pro-name">i</p>
		<p class="pro-name">l</p>
		<p class="pro-name">e</p>
	</h2>
	<section class="section profile-main">
		<div class="container">
			<div class="photo wrapper2">
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon.jpg" alt="写真">
				</div>
				<div class="name wrapper2-inner">
					<div class="name-set">
						<h3>サカモト リョウタ<br>
							<span>Ryota Sakamoto</span>
						</h3>
						<p class="profile-text">26/Miyazaki.</p>
						<p class="profile-text">趣味：映画鑑賞、ドライブ、サッカー</p>
					</div>
					<p class="profile">
						小学校3年生の頃からサッカーを始めて約10年間続けました。<br>
						今でも、地元のフットサルに週1回、社会人サッカーにも練習参加してます。<br>
						高校卒業後、親が経営している介護施設で介護士として約7年間勤めました。
						ただ中学生の頃からIT業界に興味があったのですが、
						どのようにして学んでいいのか分からずにいた時に職業訓練で学べることを知り、
						今、職業訓練に通って学んでます。
					</p>
					<p class="skill">skill<br>
						<span>・HTML・CSS・PHP・Java Script</span>
					</p>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer('profile'); ?>