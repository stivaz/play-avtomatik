<?php

/* ACF Options page */
if ( function_exists( 'acf_add_options_page' ) ) {
	$option_page = acf_add_options_page( array(
		'page_title' => 'Настройки сайта',
		'menu_title' => 'Настройки сайта',
		'menu_slug'  => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect'   => false
	) );
}

/* Функция вывода пагинации */
function pagination() {

	global $wp_query;
	$big = 999999999;

	if ( $wp_query->max_num_pages > 1 ) :
		?>
		<div class="pagination">
			<?php echo paginate_links( array(
				'base'               => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ), // что заменяем в формате ниже
				'format'             => '?paged=%#%', // формат, %#% будет заменено
				'current'            => max( 1, get_query_var( 'paged' ) ), // текущая страница, 1, если $_GET['page'] не определено
				'type'               => 'list', // ссылки в ul
				'prev_text'          => '<span>Предыдущая</span>', // текст назад
				'next_text'          => '<span>Следующая</span>', // текст вперед
				'total'              => $wp_query->max_num_pages, // общие кол-во страниц в пагинации
				'show_all'           => false, // не показывать ссылки на все страницы, иначе end_size и mid_size будут проигнорированны
				'end_size'           => 2, //  сколько страниц показать в начале и конце списка (12 ... 4 ... 89)
				'mid_size'           => 2, // сколько страниц показать вокруг текущей страницы (... 123 5 678 ...).
				'add_args'           => false, // массив GET параметров для добавления в ссылку страницы
				'add_fragment'       => '', // строка для добавления в конец ссылки на страницу
				'before_page_number' => '', // строка перед цифрой
				'after_page_number'  => '' // строка после цифры
			) ); ?>
		</div>
	<?php
	endif;
}

/**
 * Склонение слова после числа.
 *
 * Примеры вызова:
 * num_decline( $num, 'книга,книги,книг' )
 * num_decline( $num, [ 'книга','книги','книг' ] )
 * num_decline( $num, 'книга', 'книги', 'книг' )
 * num_decline( $num, 'книга', 'книг' )
 *
 * @param  int|string    $number  Число после которого будет слово. Можно указать число в HTML тегах.
 * @param  string|array  $titles  Варианты склонения или первое слово для кратного 1.
 * @param  string        $param2  Второе слово, если не указано в параметре $titles.
 * @param  string        $param3  Третье слово, если не указано в параметре $titles.
 *
 * @return string 1 книга, 2 книги, 10 книг.
 *
 * @version 2.0
 */
function num_decline( $number, $titles, $param2 = '', $param3 = '' ){

	if( $param2 )
		$titles = [ $titles, $param2, $param3 ];

	if( is_string($titles) )
		$titles = preg_split( '/, */', $titles );

	if( empty($titles[2]) )
		$titles[2] = $titles[1]; // когда указано 2 элемента

	$cases = [ 2, 0, 1, 1, 1, 2 ];

	$intnum = abs( intval( strip_tags( $number ) ) );

	return "<span>$number</span> ". $titles[ ($intnum % 100 > 4 && $intnum % 100 < 20) ? 2 : $cases[min($intnum % 10, 5)] ];
}

/* Кнопка в текстовом редакторе */
add_action( 'init', 'rndm_button' );
function rndm_button() {
	if ( current_user_can( 'edit_posts' ) && current_user_can( 'edit_pages' ) ) {
		add_filter( 'mce_external_plugins', 'rndm_plugin' );
		add_filter( 'mce_buttons_2', 'rndm_register_button' );
	}
}

function rndm_plugin( $plugin_array ) {
	$plugin_array['rndm'] = get_bloginfo( 'template_url' ) . '/assets/js/newbuttons.js';

	return $plugin_array;
}

function rndm_register_button( $buttons ) {
	array_push( $buttons, "screen" );

	return $buttons;
}
