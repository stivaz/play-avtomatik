<?php get_header(); ?>

<?php get_template_part( 'template-parts/page-header' ); ?>

<div class="content__wrapper">
	<div class="content container">
		<div class="content__inner">
			<main class="content__main">

				<h1><?= ( get_field( 'news_title', 'options' ) ) ? get_field( 'news_title', 'options' ) : 'Новости'; ?></h1>

				<div class="row">

					<?php if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/loop-news' );
						endwhile;
					else :
						get_template_part( 'template-parts/loop-none' );
					endif; ?>

				</div>

				<?php if ( function_exists( 'pagination' ) ) {
					pagination();
				} ?>
			</main>

			<?php get_sidebar( 'slots' ); ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>
