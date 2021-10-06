<?php get_header(); ?>
<?php the_post(); ?>

<?php get_template_part( 'template-parts/page-header' ); ?>

<div class="content__wrapper">
	<div class="content container">
		<div class="content__inner">

			<main class="content__main">
				<article>
			<?php if (0) : ?>
					<h1><?= get_field( 'slot_single_title', 'options' ) ? get_field( 'slot_single_title', 'options' ) : get_the_title(); ?></h1>
			<?php endif; ?>

					<div class="the_content">
						<?php the_field( 'seo_text' ); ?>
					</div>

					<?php
					$home_link         = get_field( 'home_link' );
					$slot_rating_title = get_field( 'slot_rating_title', 'options' );
					$slot_btn_text     = get_field( 'slot_btn_text', 'options' );
					?>
					<div class="main-slot__wrapper">
						<div class="main-slot js-slot">
							<div class="main-slot__inner">
								<iframe src="<?php the_field( 'iframe' ) ?>" width="100%" height="477"></iframe>

								<div class="main-slot__nav">
									<a href="#popup" class="main-slot__nav-feedback open-popup"><i class="fas fa-exclamation-triangle"></i></a>

									<div class="main-slot__nav-rating">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M17.0711 12.9289C15.9819 11.8398 14.6855 11.0335 13.2711 10.5454C14.786 9.50199 15.7812 7.75578 15.7812 5.78125C15.7812 2.59348 13.1878 0 10 0C6.81223 0 4.21875 2.59348 4.21875 5.78125C4.21875 7.75578 5.21402 9.50199 6.72898 10.5454C5.31453 11.0335 4.01813 11.8398 2.92895 12.9289C1.0402 14.8177 0 17.3289 0 20H1.5625C1.5625 15.3475 5.34754 11.5625 10 11.5625C14.6525 11.5625 18.4375 15.3475 18.4375 20H20C20 17.3289 18.9598 14.8177 17.0711 12.9289ZM10 10C7.67379 10 5.78125 8.1075 5.78125 5.78125C5.78125 3.455 7.67379 1.5625 10 1.5625C12.3262 1.5625 14.2188 3.455 14.2188 5.78125C14.2188 8.1075 12.3262 10 10 10Z" fill="#818584"/>
										</svg>
										<p>Сейчас играет <?= num_decline( rand( 3, 30 ), 'человек, человека, человек' ); ?></p>
									</div>

									<div class="main-slot__nav-maximize btn-maximize"></div>
								</div>
							</div>
							<div class="main-slot__btn">
								<a href="/gocasino/slots" class="btn btn-main btn-fullwidth"><span><?= $slot_btn_text; ?></span></a>
							</div>
						</div>
					</div>

					<div class="the_content the_content-bg">
						<?php the_content(); ?>
					</div>
				</article>
			</main>

			<?php get_sidebar(); ?>

		</div>
	</div>
</div>

<div id="popup" class="popup mfp-hide">
	<?= do_shortcode( '[contact-form-7 id="142" title="Контактная форма"]' ); ?>
</div>

<?php get_footer(); ?>
