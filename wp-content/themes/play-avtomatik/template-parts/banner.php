<?php $banner = get_field( 'banner', 'options' ); ?>
<?php if ( $banner ) : ?>
	<div class="banner__wrapper">
		<div class="banner container">
			<div class="banner__header">
				<p class="banner__title"><?php the_field( 'banner_title', 'options' ); ?></p>
				<p class="banner__descr"><?php the_field( 'banner_descr', 'options' ); ?></p>
			</div>
			<div class="banner__inner">
				<?php foreach ( $banner as $item ) : ?>
					<?php
					$item_img_id = $item['banner_img'];
					$item_img    = get_post( $item_img_id );
					$item_link   = $item['banner_link'];
					?>
					<div class="banner__item">
						<a href="<?= $item_link; ?>" class="banner__item-inner" target="_blank">
							<img src="<?= kama_thumb_src( 'w=270 &h=168', $item_img_id ); ?>" class="banner__item-thumb"
							     title="<?= $item_img->post_title; ?>"
							     alt="<?= get_post_meta( $item_img->ID, '_wp_attachment_image_alt', true ); ?>">
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
<?php endif; ?>
