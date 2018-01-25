<?php

	function herr_enqueue(){
		wp_register_style('herr_style', get_template_directory_uri() . '/style.css');
		wp_register_style('fonts1', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700&amp;subset=cyrillic');
		wp_register_style('fonts2', 'https://fonts.googleapis.com/css?family=Poppins:400,500" rel="stylesheet');
		wp_enqueue_style('fonts1');
		wp_enqueue_style('fonts2');
		wp_enqueue_style('herr_style');
		
		// wp_enqueue_script('jquery'); // подключения jquery c ядра сайта, желательно не переопределять вордпресовские скрипты 
		// wp_register_script('jQuery', get_template_directory_uri() . '/js/jquery.min.js', array(), false, true);
		// wp_enqueue_script('jQuery');
		// отменяем зарегистрированный jQuery
		// вместо "jquery-core", можно вписать "jquery", тогда будет отменен еще и jquery-migrate
		wp_deregister_script( 'jquery-core' );
		wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
		wp_enqueue_script( 'jquery' );
		
		wp_register_script('herr_script', get_template_directory_uri() . '/js/app.js', array('jquery'), false, true);
		 // - первый параметр 'название', второй 'путь', третий 'зависимости', четвертый 'учет версий', пятый ' будет ли размещен в футере или нет true - в футере'
		wp_enqueue_script('herr_script');

		// awesome font
		wp_register_script('awesome', 'https://use.fontawesome.com/24e0d8b0ae.js', array(), false, true);
		wp_enqueue_script('awesome');
	}

?>