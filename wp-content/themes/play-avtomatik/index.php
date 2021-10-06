<?php get_header(); ?>

<div class="content__wrapper">
	<div class="content container">
		<div class="content__inner">
			<div class="content__main">
				<h1><?php the_field( 'page_slots_title', 'options' ); ?></h1>

				<div class="page_descr the_content"><?php the_field( 'page_slots_text', 'options' ); ?></div>

				<?php get_template_part( 'template-parts/slots' ); ?>

				<?php if ( ! is_paged() ) { ?>
				<div class="the_content the_content-bg">
					<?php the_field( 'page_slots_content', 'options' ); ?>
				</div>
				<?php } ?>
			</div>

			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
