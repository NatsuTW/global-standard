<?php get_header(); ?>

<main>
  <div class="p-not-found">
    <div class="l-inner">
      <h1 class="p-not-found__title">404 Page Not Found</h1>
      <div class="p-not-found__text">
        <p class=>お探しのページは見つかりませんでした。</p>
        <p>お探しのページはアドレスが変更になったか、削除された可能性があります。</p>
      </div>
      <p class="p-not-found__link">→
        <a href="<?php echo esc_url(home_url('/')); ?>">トップへ戻る</a>
      </p>
    </div>
  </div>
</main>

<?php get_footer(); ?>