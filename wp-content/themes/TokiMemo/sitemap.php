<?php
/*Template Name: サイトマップ用固定ページ*/
?>


<?php get_header();?>


<!--ここからメインコンテンツ-->
<div id="wrapper">
<!div id="wrapper" background ="/home/www/wp/wordpress/wp-content/themes/TokiMemo/images/ringnote-middle.png">
	<div id="mein">
        <h1><?php the_title();?></h1>
        <div class = "category_description">
            <div id ="Breadcrumb">
                <a href="/index.php"><span class ="home">   </span></a>
                /sitemap<br>
            </div>
        </div>
		<div id="page">
			<h2>All Page</h2>
				<h4><p>Auther</p></h4>

            <br>
			<h2>All Posts</h2>

			<?php
			$args1 = array(
  		        'post_type' => 'development_and_tool', /* カスタム投稿名が「development_and_tool」の場合 */
                'posts_per_page' => -1 /* 表示する数 */
			);

			$args2 = array(
  		        'post_type' => 'web_and_aplication', /* カスタム投稿名が「web_and_aplication」の場合 */
                'posts_per_page' => -1
			);

			$args3 = array(
  		        'post_type' => 'infrastructure', /* カスタム投稿名が「infrastructure」の場合 */
                'posts_per_page' => -1
			);
			?>

			<?php $my_query1 = new WP_Query( $args1 ); ?>
			<?php $my_query2 = new WP_Query( $args2 ); ?>
			<?php $my_query3 = new WP_Query( $args3 ); ?>

			<p>開発する際のツールや環境などのまとめ</p>
			  <ul class ="sitemap">
				 <?php while ( $my_query1->have_posts() ) : $my_query1->the_post(); ?>
  				<li class ="title">
    				<h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
  				</li>
				 <?php endwhile; ?>
			  </ul>
		  	<?php wp_reset_postdata(); ?>

			  <p>作成したアプリのまとめ</p>
			  <ul class ="sitemap">
				 <?php while ( $my_query2->have_posts() ) : $my_query2->the_post(); ?>
					<li class ="title">
						<h4 class='remonyellow'><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
					</li>
				 <?php endwhile; ?>
			  </ul>
			  <?php wp_reset_postdata(); ?>

			  <p>サーバなどのインフラのまとめ</p>
		  	<ul class ="sitemap">
				  <?php while ( $my_query3->have_posts() ) : $my_query3->the_post(); ?>
					<li class ="title">
						<h4 class='rightblue'><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
					</li>
				  <?php endwhile; ?>
			  </ul>
		  	<?php wp_reset_postdata(); ?>

		</div><!--page-->
<?php get_footer();?>
