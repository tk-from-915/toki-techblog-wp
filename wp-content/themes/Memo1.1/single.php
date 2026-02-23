<?php get_header();?>

<!--ここからメインコンテンツ-->
<div id="wrapper">
	<div id="mein">
		<h1><?php echo esc_html( get_the_title() ); ?></h1>

        <div class = "category_description">
            <div id ="Breadcrumb">
                <?php if(function_exists("the_breadcrumb")){the_breadcrumb();} ?>
                /<?php echo esc_html( get_the_title() ); ?>
            </div>
            作成日時：<?php the_time('Y/m/j');?>
            　タグ：<?php the_tags(' ',',');?>
        </div>

		<div class ="adsense_single_sita">
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- yokonaga -->
		<ins class="adsbygoogle"
		     style="display:inline-block;width:720px;height:90px"
		     data-ad-client="ca-pub-2754652535674903"
		     data-ad-slot="5556345131"></ins>
		<script>
		     (adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		</div>

			 <?php if (have_posts()) :
				while (have_posts()) : the_post(); ?>
					<div id = "single">
						<?php the_content('');?>
					</div><!--single-->
				<?php endwhile;?>

			<?php else:?>
				<p>記事が見つかりませんでした</p>
			<?php endif?>
			<br>

        <div id="simple_ga_Relation_posts">
            <?php if(function_exists("relation_posts")){relation_posts();} ?>
        </div><!--/relation_posts-->
		

        <!--ここからページャー-->
        <div class="nav_below">
            <span class="leftnav"><?php previous_post_link('%link', '%title');?></span>
            <span class="rightnav"><?php next_post_link('%link', '%title');?></span>
        </div><!--/nav_below-->

		
		<div class ="adsense_single_sita">
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- yokonaga -->
		<ins class="adsbygoogle"
		     style="display:inline-block;width:720px;height:90px"
		     data-ad-client="ca-pub-2754652535674903"
		     data-ad-slot="5556345131"></ins>
		<script>
		     (adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		</div>


		<!--ここから関連記事-->
		<div id ="related-posts-area">
		<h2>こちらの記事も読まれてます</h2>
		<?php
		$tags = get_the_tags();

		if($tags){
			$first_tag = $tags[0]->term_id;
			$args = array(
				'tag__in'        => $first_tag,
				'post__not_in' => array($post->ID),
				'order'          => 'DESC',
				'posts_per_page' => 4,
				'post_type'      => 'any'
			);
		
			$my_posts = get_posts( $args );
			foreach ( $my_posts as $post ):setup_postdata( $post );?>

				<h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4><br>
			<?php endforeach;
				wp_reset_postdata();

		 } ?>
		</div>
		<!--ここまで関連記事-->

		<!--category_area-->
        <div id="category_area">
            <h2>カテゴリー</h2>
            <?php dynamic_sidebar('widget-red');?>
            <?php dynamic_sidebar('widget-orange');?>
            <?php dynamic_sidebar('widget-brightyellow');?>
            <?php dynamic_sidebar('widget-remonyellow');?>
            <?php dynamic_sidebar('widget-olive');?>
            <?php dynamic_sidebar('widget-deepgreen');?>
            <?php dynamic_sidebar('widget-mintgreen');?>
            <?php dynamic_sidebar('widget-rightblue');?>
            <?php dynamic_sidebar('widget-blue');?>
    		<?//php dynamic_sidebar('widget-parple');?>
            <?php dynamic_sidebar('widget-pink');?>
            <div id = "tags">
                <?php dynamic_sidebar('widget-magenta');?>
            </div>
        </div><!--/category_area-->



<?php get_footer();?>
