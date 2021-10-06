<!DOCTYPE html>
<html <?php language_attributes(); ?> class='only'>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="shortcut icon" type="image/x-icon" href="<?= THEME_IMG; ?>favicon/favicon.ico">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(67835368, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/67835368" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<div class="site__wrapper">
<div class="site__inner">
<header class="header__wrapper">
	<div class="header container">
		<div class="header__inner">
			<div class="header__logo">
				<?php $logo = get_post( get_field( 'logo_header', 'options' ) ); ?>
				<a href="/" ><img src="<?= $logo->guid; ?>" title="<?= $logo->post_title; ?>" alt="<?= get_post_meta( $logo->ID, '_wp_attachment_image_alt', true ); ?>"></a>
			</div>

			<span class="burger js-toggle-btn" data-toggle-container="header__menu"></span>
			<nav class="header__menu">
				<?php wp_nav_menu( [
					'theme_location' => 'main',
					'container'      => false
				] ); ?>
			</nav>
		</div>
	</div>
</header>

<?php get_template_part( 'template-parts/banner' ); ?>
