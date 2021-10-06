<?php
$thumb     = get_post( get_post_thumbnail_id() );
$image_alt = get_post_meta( $thumb->ID, '_wp_attachment_image_alt', true );
$link      = get_field( 'home_link' ) ? get_field( 'home_link' ) : get_field( 'game_link_default', 'options' );
?>
<article class="slot">
	<div class="slot__inner">
		<div class="slot__thumb">
			<img src="<?= kama_thumb_src( "w=270 &h=165", get_post_thumbnail_id() ); ?>" title="Игровой автомат <?php echo $thumb->post_title; ?>" alt="Игровой автомат <?php echo $image_alt; ?>">

			<div class="slot__btns">
				<a href="<?php the_permalink(); ?>" class="btn btn-white" title="Бесплатная игра в <?php echo $thumb->post_title; ?>">Бесплатно</a>
				<a href="<?= $link; ?>" class="btn btn-blue" title="Сыграть на деньги">На деньги</a>
			</div>
		</div>
		<a href="<?php the_permalink(); ?>" class="slot__title"><?php the_title(); ?></a>
	</div>
</article>


