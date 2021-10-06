<?php
$thumb     = get_post( get_post_thumbnail_id() );
$image_alt = get_post_meta( $thumb->ID, '_wp_attachment_image_alt', true );
$link      = get_field( 'home_link' ) ? get_field( 'home_link' ) : get_field( 'game_link_default', 'options' );
?>
<article class="slot">
	<div class="slot__inner">
		<a href="<?php the_permalink(); ?>" class="slot__thumb">
			<img src="<?= kama_thumb_src( 'w=280 &h=152', get_post_thumbnail_id() ); ?>" title="Игровой автомат <?php echo $thumb->post_title; ?>" alt="Игровой автомат <?php echo $image_alt; ?>">
		</a>

		<p class="slot__title"><?php the_title(); ?></p>

		<div class="slot__info">
			<p class="slot__descr">
				<?php
				$term_list = wp_get_post_terms( get_the_ID(), 'developer', array('fields' => 'names') );
				echo implode(', ', $term_list);
				?>
			</p>

			<?php if ( function_exists( 'the_ratings' ) ) the_ratings(); ?>
		</div>

		<div class="slot__btns">
			<a href="<?php the_permalink(); ?>" class="btn btn-demo" title="Бесплатная игра в <?php echo $thumb->post_title; ?>">Бесплатно</a>
			<a href="<?= $link; ?>" class="btn btn-play" title="Сыграть на деньги">На деньги</a>
		</div>
	</div>
</article>







