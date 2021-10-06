<?php get_header(); ?>

<?php get_template_part( 'template-parts/page-header' ); ?>

<div class="content__wrapper">
	<div class="content container">
		<div class="content__inner">

			<div class="content__main">

				<div class="the_content"><?php the_field( 'top_text' ); ?></div>

				<?php get_template_part( 'template-parts/slots' ); ?>

				<?php if ( $cat_desc = category_description() ) { ?>
					<div class="the_content the_content-bg">
						<?= $cat_desc; ?>
					</div>
				<?php } ?>

			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>
