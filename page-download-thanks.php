<?php
/*
Template Name: 資料ダウンロード完了
*/
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/sub-main-visual') ?>

<?php get_template_part('template-parts/breadcrumbs') ?>

<main class="p-download">
  <div class="l-inner p-download__inner">
    <!-- p-download__intro -->
    <div class="p-download__intro">
      <h2 class="p-download__intro-title">
        世界で活躍できるグローバルな人材を育てる３つの研修プログラムをご用意しております。
      </h2>
      <div class="p-download__intro-img">
        <img src="<?php echo get_template_directory_uri() ?>/dist/img/pamphlet.png" alt="ダウンロード資料のイメージ" />
      </div>
      <div class="p-download__intro-text">
        <p>
          急速にグローバルに活躍できる企業が生き残る時代と移り変わりました。<br />
          ビジネス英語や経営学を効率よく学びながら、世界各国から集まるビジネスパーソンと交流し、世界レベルでの人脈を構築する研修をご用意しております。
        </p>
        <p>
          英語に苦手意識のある方でもご安心ください。<br />
          ビジネスで必要なコミュニケーションが取れるようになるまで実績豊富な講師陣がサポートいたします。<br />
          まずはこちらの資料をごらんください。
        </p>
      </div>
    </div><!-- /.p-download__intro -->
    <!-- p-download__form -->
    <div class="p-download__form">
      <h2 class="p-download__form-title">
        資料請求いただき<br />ありがとうございました！
      </h2>
      <div class="p-download__form-body">
        <p class="p-download__doc-link-guide">資料は以下のリンクよりダウンロードください。</p>
        <p class="p-download__doc-link">
          →<a href="<?php echo esc_url(home_url('/wp-content/uploads/2023/08/demo-file.pdf')); ?>" download="demo-file.pdf">
            資料のダウンロードリンクはこちら</a>
        </p>
        <p class="p-download__msg">
          また、ご入力いただいたメールアドレスの方へもダウンロードリンクを送付しておりますので、ご確認いただけますと幸いです。
        </p>
      </div>
    </div>
    <!-- /.p-download__form -->
  </div>
  <!-- /.l-inner -->
</main>

<?php get_footer(); ?>