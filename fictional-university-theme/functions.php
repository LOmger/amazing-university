<!-- Задаем Функии для добавления css and javascript через функции в php -->

<?php 

	function university_files(){
		wp_enqueue_script('university-main-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
		wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
		wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
	}
	// Здесь даем понять wordpress что мы добавляем action, первый элемент из wp, второй произвольный
	add_action('wp_enqueue_scripts', 'university_files');

	// Здесь мы добавляем и вызываем функцию для добавления title страницы

	function university_features() {
		add_theme_support('title-tag');
	}

	add_action('after_setup_theme', 'university_features')

 ?>