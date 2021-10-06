<div class="page-header__wrapper">
	<div class="page-header container">
		<div class="page-header__inner">
			<?php get_template_part( 'template-parts/breadcrumbs' ); ?>

			<?php
			if ( is_category() ) :
				$title = single_cat_title('', 0);
			elseif ( is_archive() ) :
				$title = single_term_title('', 0);
			elseif ( is_search() ) :
				$title = 'Поиск по строке: ' . get_search_query();
			elseif ( is_singular('post') ) :
				$title = get_field( 'slot_single_title', 'options' ) ? get_field( 'slot_single_title', 'options' ) : get_the_title();
			elseif ( is_singular('casino') ) :
				$title = get_field( 'casino_single_title', 'options' ) ? get_field( 'casino_single_title', 'options' ) : get_the_title();
			else :
				$title = get_the_title();
			endif;
			?>
			<h1><?= $title; ?></h1>
		</div>
	</div>
</div>
