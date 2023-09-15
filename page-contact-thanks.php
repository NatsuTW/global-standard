<?php
/*
Template Name: お問い合わせ完了
*/
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/sub-main-visual') ?>

<?php get_template_part('template-parts/breadcrumbs') ?>

<!-- p-contact -->
<main class="p-contact">
  <div class="l-inner--narrow">
    <p class="p-contact__msg">
      お問い合わせありがとうございました。<br />2日以内に担当者からメールにてご連絡いたしますので、しばらくお待ちいただけますと幸いです。
    </p>
    <p class="p-contact__to-top-link">→
      <a href="<?php echo esc_url(home_url('/')); ?>">トップへ戻る</a>
    </p>
  </div>
</main><!-- /.p-contact -->

<?php get_footer(); ?>