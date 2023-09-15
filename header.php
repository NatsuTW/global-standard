<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex , nofollow" />

  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/site.webmanifest">

  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <!-- style & script -->
  <?php wp_head(); ?>
</head>

<body>
  <!-- header -->
  <header class="l-header">
    <div class="p-header">
      <div class="l-header__inner p-header__inner">
        <!-- p-header__logo-->
        <?php if (is_front_page()) : ?>
          <h1 class="p-header__logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 282 53">
              <a href="<?php echo home_url('/'); ?>">
                <text id="logo01" transform="translate(0 42)" fill="#023e78" font-size="40" font-family="Roboto-BoldItalic, Roboto" font-weight="700" font-style="italic">
                  <tspan x="0" y="0">Global Standard</tspan>
                </text>
              </a>
            </svg>
          </h1><!-- p-header__logo- -->
        <?php else : ?>
          <div class="p-header__logo">
            <a href="<?php echo home_url('/'); ?>">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 282 53">
                <text id="logo01" transform="translate(0 42)" fill="#023e78" font-size="40" font-family="Roboto-BoldItalic, Roboto" font-weight="700" font-style="italic">
                  <tspan x="0" y="0">Global Standard</tspan>
                </text>
              </svg>
            </a>
          </div>
        <?php endif; ?><!-- /.p-header__logo -->

        <!-- p-gnav -->
        <nav class="p-gnav">
          <?php
          wp_nav_menu(
            array(
              'depth' => 1,
              'theme_location' => 'global',
              'container' => '',
              'menu_class' => 'p-gnav__list'
            )
          );
          ?>
          <div class="p-gnav__btns">
            <div class="p-gnav__btn-wrapper">
              <a href="<?php echo esc_url(home_url('/download')); ?>" class="p-gnav__btn c-btn c-btn--main">資料ダウンロード</a>
            </div>
            <div class="p-gnav__btn-wrapper">
              <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-gnav__btn c-btn c-btn--secondary">お問い合わせ</a>
            </div>
          </div>
        </nav><!-- /.p-gnav -->

        <!-- p-drawer -->
        <div class="p-drawer u-hidden-pc">
          <div class="p-drawer__icon js-drawer-icon">
            <div class="p-drawer__icon-bar p-drawer__icon-bar-1"></div>
            <div class="p-drawer__icon-bar p-drawer__icon-bar-2"></div>
            <div class="p-drawer__icon-bar p-drawer__icon-bar-3"></div>
          </div>
          <nav class="p-drawer__menu js-drawer-menu">
            <?php
            wp_nav_menu(
              array(
                'depth' => 1,
                'theme_location' => 'drawer',
                'container' => '',
                'menu_class' => 'p-drawer__list'
              )
            );
            ?>
            <div class="p-drawer__btns">
              <div class="p-drawer__btn-wrapper">
                <a href="<?php echo esc_url(home_url('/download')); ?>" class="p-drawer__btn p-drawer__btn--download">資料ダウンロード</a>
              </div>
              <div class="p-drawer__btn-wrapper">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-drawer__btn p-drawer__btn--contact">お問い合わせ</a>
              </div>
            </div>
          </nav>
        </div><!-- /.p-drawer -->
      </div>
    </div>
  </header><!-- /header -->