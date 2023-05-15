<?php get_header('works'); ?>

<main>

    <h2>
        <p class="wok-title">W</p>   
        <p class="wok-title">o</p>   
        <p class="wok-title">r</p>   
        <p class="wok-title">k</p>   
        <p class="wok-title">s</p>  
    </h2>

<section class="section sec-works">
    <div class="container">
	<ul class="row works">
		<?php
    	$args = array(
            'post_type' => 'works', // 投稿タイプのスラッグを指定
            'post_status' => 'publish', // 公開済の投稿を指定
            'posts_per_page' => 6, // 投稿件数の指定
            'order' => 'ASC',  // ASC昇順、 DESC降順
            );
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ):
                ?>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
				<li class="col-12 col-md-6 col-lg-4 p-3"><a href="<?php bloginfo('template_url'); ?>/demo/demo<?php echo $the_query->current_post + 1; ?>/index.html">
                <div class="img-wrap">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                </div>
                    <p class="work-name">作品名 <?php echo get_the_title(); ?></p>
                </a> </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else: ?>
            <?php echo '更新された記事はありません。'; ?>
            <?php endif; ?>
	</ul>
    </div>
</section>
</main>
<?php get_footer('works'); ?>