<?php get_header('');?>

<!--ここからメインコンテンツ-->
<div id="wrapper">
	<div id="mein">
		<h1><?php echo esc_html(get_post_type_object(get_post_type())->label); ?>に関する記事一覧</h1>
        <div class = "category_description">
            <div id ="Breadcrumb">
                <?php if(function_exists("the_breadcrumb")){the_breadcrumb();} ?>
            </div>
            <?php echo term_description();?>
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

		<div id="contents">
			 <?php if (have_posts()) : 
				while (have_posts()) : the_post(); ?>
					<div class="post">
						<h5><a href="<?php the_permalink();?>"><?php the_title();?></h5>

						<div class="thumbnail">
						<?php if(has_post_thumbnail()) { echo get_the_post_thumbnail(); } ?>
						</div>

						<div class="snippet"><?php the_excerpt();?>
							<span class="read-continue">続きを読む ≫</a></span>
						</div>
						<p class="blog_info">
							<span class="post_date"><?php the_time('Y/m/j');?></span>
							<span class="tags"><?php the_tags('Tag :',',');?></span>
						</p>
					</div><!--post-->
				<?php endwhile;?>

                 <div class="nav_below">
                     <span class="leftnav"><?php previous_posts_link('prav-page');?></span>
                     <span class="rightnav"><?php next_posts_link('next-page');?></span>
                 </div><!--/nav_below-->

			<?php else:?>
				<p>まだ記事を筆記中です。m(_ _)m</p>
			<?php endif?>

        </div><!--/contents-->

<?php get_sidebar();?>

<?php get_footer();?>
