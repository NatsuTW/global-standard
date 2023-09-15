<?php
function my_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
}
add_action("after_setup_theme", "my_setup");

// application of style & script
function my_script_init()
{
  wp_enqueue_style("google-fonts", "https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,500&family=Noto+Sans+JP:wght@400;500;600;700&family=Roboto:ital,wght@1,700&display=swap", array(), null, "all");
  wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css", array(), "5.8.2", "all");
  wp_enqueue_style("swiper", "https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css", array(), "9", "all");
  wp_enqueue_style("my", get_template_directory_uri() . "/dist/css/style.css", array(), filemtime(get_theme_file_path('/dist/css/style.css')), "all");
  wp_enqueue_script("swiperjs", "https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js", array(), "9", true);
  wp_enqueue_script("jQuery", "https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js", array(), "3.6.4", true);
  wp_enqueue_script("my", get_template_directory_uri() . "/dist/js/script.js", array(), filemtime(get_theme_file_path('/dist/js/script.js')), true);
}
add_action("wp_enqueue_scripts", "my_script_init");

// menu
function my_menu_init()
{
  register_nav_menus(
    array(
      'global' => 'ヘッダーメニュー',
      'drawer' => 'ドロワーメニュー',
    )
  );
}
add_action('init', 'my_menu_init');

// archive title
function my_archive_title($title)
{

  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_post_type_archive()) {
    $title = post_type_archive_title('', false);
  } elseif (is_tax()) {
    $title = single_term_title('', false);
  } elseif (is_author()) {
    $title = get_the_author();
  } elseif (is_date()) {
    $title = '';
    if (get_query_var('year')) {
      $title .= get_query_var('year') . '年';
    }
    if (get_query_var('monthnum')) {
      $title .= get_query_var('monthnum') . '月';
    }
    if (get_query_var('day')) {
      $title .= get_query_var('day') . '日';
    }
  }
  return $title;
};

add_filter('get_the_archive_title', 'my_archive_title');

// error message of contact form
function wpcf7_error_msg_position($items, $result)
{
  $class = 'input-error-msg';
  $names = array(
    "your-purpose",
  );
  // 入力エラーがある場合
  if (isset($items['invalid_fields'])) {
    foreach ($items['invalid_fields'] as $k => $v) {
      $orig = $v['into'];
      $name = substr($orig, strrpos($orig, ".") + 1);
      if (in_array($name, $names)) {
        $items['invalidFields'][$k]['into'] = ".{$class}.{$name}";
      }
    }
  }
  return $items;
}
add_filter('wpcf7_ajax_json_echo', 'wpcf7_error_msg_position', 10, 2);


