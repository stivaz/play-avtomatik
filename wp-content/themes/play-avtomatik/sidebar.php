<aside class="content__sidebar">

	<?php
	if ( is_home() ) :

		get_template_part( 'template-parts/widgets/developers' );
		get_template_part( 'template-parts/widgets/top-slots' );

	elseif ( is_page_template( 'template-casino.php' ) ) :

		get_template_part( 'template-parts/widgets/developers' );
		get_template_part( 'template-parts/widgets/top-slots' );

	elseif ( is_tax( 'developer' ) ) :

		get_template_part( 'template-parts/widgets/developers' );
		get_template_part( 'template-parts/widgets/top-slots' );

	else :

		get_template_part( 'template-parts/widgets/developers' );
		get_template_part( 'template-parts/widgets/top-slots' );
		//get_template_part( 'template-parts/widgets/related-slots' );
		//get_template_part( 'template-parts/widgets/slot-day' );
		//get_template_part( 'template-parts/widgets/top-casino' );
		//get_template_part( 'template-parts/widgets/news' );

	endif;
	?>

</aside>
