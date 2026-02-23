<?php ?>
<html lang="ja">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133698749-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-133698749-1');
    </script>
	<!--google adsense-->
	<script data-ad-client="ca-pub-2505998696096341" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <title>Tech embodyer's note</title>
	<meta charset="UTF-8">
	<meta name="description" content="ふと浮かんだアイデアをプログラミングで形にする">
	<meta name="keywords" content="プログラミング">
    <meta name="viewport" content="width=device-width">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa|Yellowtail|Yu_mincho|SimSun" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css">
    <link rel="icon" href="wp-content/themes/Memo1.1/wingpen.ico">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

	<?php wp_head(); ?>
</head>
<body style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/images/desk.jpg' ); ?>');" <?php body_class(); ?>>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id= UA-133698749-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-133698749-1');
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
        var topBtn = $('#page-top');

        // 「ページトップへ戻るボタン」の要素を隠します
        topBtn.hide();

        // スクロールした場合のアクションが記されています
        $(window).scroll(function(){
            // スクロール位置が800pxを超えた場合に「ページトップへ戻るボタン」をフェードインで出現させる
            if ($(this).scrollTop() > 800) {
                topBtn.fadeIn();
            }
            // スクロール位置が800px以下の場合は「ページトップへ戻るボタン」を消しておく（フェードアウトで消える）
            else {
                topBtn.fadeOut();
            }
        });
        // 「ページトップへ戻るボタン」をクリックした場合のページトップへ戻るスピードの速さが記されています
        $('#page-top').click(function(){
            $('html,body').animate({
                scrollTop: 0 }, 800);
            return false;
        });
    });
</script>
<!--ここからヘッダー-->
<div id="header">

	<section id="logo">
		<h><a href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a></h>
		<p id="logo_description"><?php bloginfo('description')?></p>
	</section>

</div><!--header-->
