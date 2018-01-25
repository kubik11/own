<?php
	if (is_active_sidebar( 'gunter_sidebar' )) { // есть ли какие то активные виджеты в панеле виджетов
		dynamic_sidebar('gunter_sidebar'); // выводим виджеты если есть хотя бы один активный в наличие
	}
	if (is_active_sidebar( 'gunter_sidebar_2' )) { // есть ли какие то активные виджеты в панеле виджетов
		dynamic_sidebar('gunter_sidebar_2'); // выводим виджеты если есть хотя бы один активный в наличие
	}
?>