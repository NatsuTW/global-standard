<?php
/*
Template Name: お問い合わせ
*/
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/sub-main-visual') ?>

<?php get_template_part('template-parts/breadcrumbs') ?>

<!-- p-contact -->
<main class="p-contact">
  <div class="l-inner--narrow">
    <p class="p-contact__desc">
      研修のお申し込み、その他お問い合わせは、下記のフォームからお問い合わせ内容をご記入ください。<br />
      2日以内に担当者からメールにてご連絡いたします。
    </p>
    <div class="p-contact__form">
      <h2 class="p-contact__form-title">お問い合わせ</h2>
      <div class="p-contact__form-body">
        <?php echo do_shortcode('[contact-form-7 id="222" title="お問い合わせ"]'); ?>
      </div>
    </div>
  </div>
</main><!-- /.p-contact -->

<?php get_footer(); ?>