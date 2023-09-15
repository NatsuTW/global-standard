<?php
/*
Template Name: トップページ
*/
?>

<?php get_header(); ?>

<main>
  <!-- main-visual -->
  <div class="p-top-mv">
    <div class="p-top-mv__swiper swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() ?>/dist/img/sp/img-mv01_sp.jpg" />
            <img src="<?php echo get_template_directory_uri() ?>/dist/img/img-mv01_pc.jpg" alt="世界で活躍できるグローバルな人材を育てる" />
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() ?>/dist/img/sp/img-mv02_sp.jpg" />
            <img src="<?php echo get_template_directory_uri() ?>/dist/img/img-mv02_pc.jpg" alt="世界で活躍できるグローバルな人材を育てる" />
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() ?>/dist/img/sp/img-mv03_sp.jpg" />
            <img src="<?php echo get_template_directory_uri() ?>/dist/img/img-mv03_pc.jpg" alt="世界で活躍できるグローバルな人材を育てる" />
          </picture>
        </div>
      </div>
    </div>
    <div class="p-top-mv__text">
      <div class="p-top-mv__text-en-group">
        <div class="p-top-mv__text-en-row">
          <p class="p-top-mv__text-en u-font-en">
            YOU CAN <span class="u-hidden-sp">CHANGE</span>
          </p>
        </div>
        <!-- only for sp -->
        <div class="p-top-mv__text-en-row u-hidden-tab-up">
          <p class="p-top-mv__text-en u-font-en">CHANGE</p>
        </div><!-- /.only for sp -->
        <div class="p-top-mv__text-en-row">
          <p class="p-top-mv__text-en u-font-en">THE WORLD</p>
        </div>
      </div>
      <div class="p-top-mv__text-jp-row">
        <p class="p-top-mv__text-jp">
          世界で活躍できるグローバルな人材を育てる
        </p>
      </div>
    </div>
  </div><!-- /.main-visual -->
  <!-- p-top-company -->
  <section class="p-top-company">
    <div class="p-top-company__bg"></div>
    <div class="p-top-company__inner l-inner">
      <div class="c-top-heading">
        <h2 class="c-top-heading__title">
          <span class="c-top-heading__title-en u-font-en">ABOUT US</span>
          <span class="c-top-heading__title-jp">当社について</span>
        </h2>
        <a href="<?php echo esc_url(home_url('/about')); ?>" class="c-top-heading__link c-top-more-link u-hidden-sp">
          <span class="c-top-more-link__text--white u-font-en">View more</span>
          <span class="c-top-more-link__icon">
            <span class="c-top-more-link__circle--border"></span>
            <span class="c-top-more-link__arrow--white"></span>
          </span>
        </a>
      </div>
      <div class="p-top-company__content">
        <div class="p-top-company__text">
          <p class="p-top-company__paragraph">
            急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。
          </p>
          <p class="p-top-company__paragraph">
            コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。
          </p>
          <p class="p-top-company__paragraph">
            文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。
          </p>
        </div>
        <div class="p-top-company__img">
          <img src="<?php echo get_template_directory_uri() ?>/dist/img/img-company.png" width="681" height="426" alt="会社イメージ" />
        </div>
      </div>
      <a href="<?php echo esc_url(home_url('/about')); ?>" class="c-top-more-link u-hidden-tab-up">
        <span class="c-top-more-link__text--white u-font-en">View more</span>
        <span class="c-top-more-link__icon">
          <span class="c-top-more-link__circle--border"></span>
          <span class="c-top-more-link__arrow--white"></span>
        </span>
      </a>
    </div>
  </section><!-- /.p-top-company -->
  <!-- p-top-service-->
  <section class="p-top-service">
    <div class="l-inner">
      <div class="c-top-heading">
        <h2 class="c-top-heading__title">
          <span class="c-top-heading__title-en u-font-en">SERVICE</span>
          <span class="c-top-heading__title-jp">サービス</span>
        </h2>
        <a href="<?php echo esc_url(home_url('/service')); ?>" class="c-top-heading__link c-top-more-link u-hidden-sp">
          <span class="c-top-more-link__text u-font-en">View more</span>
          <span class="c-top-more-link__icon">
            <span class="c-top-more-link__circle"></span>
            <span class="c-top-more-link__arrow"></span>
          </span>
        </a>
      </div>
      <div class="p-top-service__items">
        <div class="p-top-service__item">
          <div class="p-top-service__item-head">
            <div class="p-top-service__item-num u-font-en">01</div>
            <div class="p-top-service__item-img">
              <img src="<?php echo get_template_directory_uri() ?>/dist/img/img-service01.png" width="320" height="427" alt="ビジネス英語研修" />
            </div>
            <h3 class="p-top-service__item-title">
              <span>ビジネス英語研修</span>
            </h3>
          </div>
          <div class="p-top-service__item-body">
            <p>
              ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。
            </p>
          </div>
        </div>
        <div class="p-top-service__item">
          <div class="p-top-service__item-head">
            <div class="p-top-service__item-num u-font-en">02</div>
            <div class="p-top-service__item-img">
              <img src="<?php echo get_template_directory_uri() ?>/dist/img/img-service02.png" width="320" height="427" alt="異文化コミュニケーション研修" loading="lazy" />
            </div>
            <h3 class="p-top-service__item-title">
              <span>異文化</span>
              <br />
              <span>コミュニケーション研修</span>
            </h3>
          </div>
          <div class="p-top-service__item-body">
            <p>
              急速にグローバル化が進んでおり、ビジネスの場面に限らず様々な文化的背景を持つ者同士の交流はもはや日常的な光景となりました。
              <br />
              言語や文化が異なる相手を理解することで世界が広がり、新たなビジネスチャンスに巡り会うことは少なくありません。
            </p>
          </div>
        </div>
        <div class="p-top-service__item">
          <div class="p-top-service__item-head">
            <div class="p-top-service__item-num u-font-en">03</div>
            <div class="p-top-service__item-img">
              <img src="<?php echo get_template_directory_uri() ?>/dist/img/img-service03.png" width="320" height="427" alt="ビジネス留学サポートプログラム" loading="lazy" />
            </div>
            <h3 class="p-top-service__item-title">
              <span>ビジネス留学</span>
              <br />
              <span>サポートプログラム</span>
            </h3>
          </div>
          <div class="p-top-service__item-body">
            <p>
              将来的に海外で働きたい方に向けた講座をご用意しております。一般的には3ヶ月〜1年の期間で基本的な英会話スキルと、海外でのビジネスマナー習得を目指します。
              <br />
              通常の語学留学では得られないビジネスの場で通用するコミュニケーションスキル習得に重点をおいておりますので、海外でビジネス展開する際に自信を持って活動することができるようになります。
            </p>
          </div>
        </div>
      </div>
      <a href="<?php echo esc_url(home_url('/service')); ?>" class="p-top-service__link c-top-more-link u-hidden-tab-up">
        <span class="c-top-more-link__text--main u-font-en">View more</span>
        <span class="c-top-more-link__icon">
          <span class="c-top-more-link__circle"></span>
          <span class="c-top-more-link__arrow--main"></span>
        </span>
      </a>
    </div>
  </section><!-- /.p-top-service -->
  <!-- p-top-case -->
  <section class="p-top-case">
    <div class="l-inner">
      <div class="c-top-heading--white">
        <h2 class="c-top-heading__title">
          <span class="c-top-heading__title-en u-font-en">CASE STUDY</span>
          <span class="c-top-heading__title-jp">導入事例</span>
        </h2>
        <a href="<?php echo esc_url(home_url('/case')); ?>" class="c-top-heading__link c-top-more-link u-hidden-sp">
          <span class="c-top-more-link__text--white u-font-en">View more</span>
          <span class="c-top-more-link__icon">
            <span class="c-top-more-link__circle--border"></span>
            <span class="c-top-more-link__arrow--white"></span>
          </span>
        </a>
      </div>
      <div class="p-top-case__items">
        <a href="<?php echo esc_url(home_url('/case#aaa')); ?>" class="p-top-case__item">
          <div class="p-top-case__item-head">
            <img src="<?php echo get_template_directory_uri() ?>/dist/img/img-case01.png" width="320" height="240" alt="AAA株式会社様のロゴ" loading="lazy" />
          </div>
          <div class="p-top-case__item-body">
            <h3 class="p-top-case__item-name">AAA株式会社　様</h3>
            <div class="p-top-case__item-label">
              <span class="p-top-case__item-cat">ビジネス英語研修</span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.25 29.25" class="p-top-case__item-icon">
                <g id="arrow-icon" transform="translate(-3.375 -3.375)">
                  <path id="パス_4104" data-name="パス 4104" d="M14.815,10.378a1.362,1.362,0,0,1,1.92,0l6.708,6.729a1.356,1.356,0,0,1,.042,1.87l-6.609,6.63a1.355,1.355,0,1,1-1.92-1.912l5.618-5.7-5.759-5.7A1.341,1.341,0,0,1,14.815,10.378Z" fill="#fff" />
                  <path id="パス_4105" data-name="パス 4105" d="M3.375,18A14.625,14.625,0,1,0,18,3.375,14.623,14.623,0,0,0,3.375,18Zm2.25,0A12.37,12.37,0,0,1,26.747,9.253,12.37,12.37,0,1,1,9.253,26.747,12.269,12.269,0,0,1,5.625,18Z" fill="#fff" />
                </g>
              </svg>
            </div>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/case#bbb')); ?>" class="p-top-case__item">
          <div class="p-top-case__item-head">
            <img src="<?php echo get_template_directory_uri() ?>/dist/img/img-case02.png" width="320" height="240" alt="合同会社BBB様のロゴ" loading="lazy" />
          </div>
          <div class="p-top-case__item-body">
            <h3 class="p-top-case__item-name">合同会社BBB　様</h3>
            <div class="p-top-case__item-label">
              <span class="p-top-case__item-cat">異文化コミュニケーション</span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.25 29.25" class="p-top-case__item-icon">
                <g id="arrow-icon" transform="translate(-3.375 -3.375)">
                  <path id="パス_4104" data-name="パス 4104" d="M14.815,10.378a1.362,1.362,0,0,1,1.92,0l6.708,6.729a1.356,1.356,0,0,1,.042,1.87l-6.609,6.63a1.355,1.355,0,1,1-1.92-1.912l5.618-5.7-5.759-5.7A1.341,1.341,0,0,1,14.815,10.378Z" fill="#fff" />
                  <path id="パス_4105" data-name="パス 4105" d="M3.375,18A14.625,14.625,0,1,0,18,3.375,14.623,14.623,0,0,0,3.375,18Zm2.25,0A12.37,12.37,0,0,1,26.747,9.253,12.37,12.37,0,1,1,9.253,26.747,12.269,12.269,0,0,1,5.625,18Z" fill="#fff" />
                </g>
              </svg>
            </div>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/case#ccc')); ?>" class="p-top-case__item">
          <div class="p-top-case__item-head">
            <img src="<?php echo get_template_directory_uri() ?>/dist/img/img-case03.png" width="320" height="240" alt="株式会社CCC様のロゴ" loading="lazy" />
          </div>
          <div class="p-top-case__item-body">
            <h3 class="p-top-case__item-name">株式会社CCC　様</h3>
            <div class="p-top-case__item-label">
              <span class="p-top-case__item-cat">ビジネス留学プログラム</span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.25 29.25" class="p-top-case__item-icon">
                <g id="arrow-icon" transform="translate(-3.375 -3.375)">
                  <path id="パス_4104" data-name="パス 4104" d="M14.815,10.378a1.362,1.362,0,0,1,1.92,0l6.708,6.729a1.356,1.356,0,0,1,.042,1.87l-6.609,6.63a1.355,1.355,0,1,1-1.92-1.912l5.618-5.7-5.759-5.7A1.341,1.341,0,0,1,14.815,10.378Z" fill="#fff" />
                  <path id="パス_4105" data-name="パス 4105" d="M3.375,18A14.625,14.625,0,1,0,18,3.375,14.623,14.623,0,0,0,3.375,18Zm2.25,0A12.37,12.37,0,0,1,26.747,9.253,12.37,12.37,0,1,1,9.253,26.747,12.269,12.269,0,0,1,5.625,18Z" fill="#fff" />
                </g>
              </svg>
            </div>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/case#ddd')); ?>" class="p-top-case__item">
          <div class="p-top-case__item-head">
            <img src="<?php echo get_template_directory_uri() ?>/dist/img/img-case04.png" width="320" height="240" alt="DDD株式会社様のロゴ" loading="lazy" />
          </div>
          <div class="p-top-case__item-body">
            <h3 class="p-top-case__item-name">DDD株式会社　様</h3>
            <div class="p-top-case__item-label">
              <span class="p-top-case__item-cat">異文化コミュニケーション</span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.25 29.25" class="p-top-case__item-icon">
                <g id="arrow-icon" transform="translate(-3.375 -3.375)">
                  <path id="パス_4104" data-name="パス 4104" d="M14.815,10.378a1.362,1.362,0,0,1,1.92,0l6.708,6.729a1.356,1.356,0,0,1,.042,1.87l-6.609,6.63a1.355,1.355,0,1,1-1.92-1.912l5.618-5.7-5.759-5.7A1.341,1.341,0,0,1,14.815,10.378Z" fill="#fff" />
                  <path id="パス_4105" data-name="パス 4105" d="M3.375,18A14.625,14.625,0,1,0,18,3.375,14.623,14.623,0,0,0,3.375,18Zm2.25,0A12.37,12.37,0,0,1,26.747,9.253,12.37,12.37,0,1,1,9.253,26.747,12.269,12.269,0,0,1,5.625,18Z" fill="#fff" />
                </g>
              </svg>
            </div>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/case#eee')); ?>" class="p-top-case__item">
          <div class="p-top-case__item-head">
            <img src="<?php echo get_template_directory_uri() ?>/dist/img/img-case05.png" width="320" height="240" alt="EEE株式会社様のロゴ" loading="lazy" />
          </div>
          <div class="p-top-case__item-body">
            <h3 class="p-top-case__item-name">EEE株式会社　様</h3>
            <div class="p-top-case__item-label">
              <span class="p-top-case__item-cat">ビジネス留学プログラム</span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.25 29.25" class="p-top-case__item-icon">
                <g id="arrow-icon" transform="translate(-3.375 -3.375)">
                  <path id="パス_4104" data-name="パス 4104" d="M14.815,10.378a1.362,1.362,0,0,1,1.92,0l6.708,6.729a1.356,1.356,0,0,1,.042,1.87l-6.609,6.63a1.355,1.355,0,1,1-1.92-1.912l5.618-5.7-5.759-5.7A1.341,1.341,0,0,1,14.815,10.378Z" fill="#fff" />
                  <path id="パス_4105" data-name="パス 4105" d="M3.375,18A14.625,14.625,0,1,0,18,3.375,14.623,14.623,0,0,0,3.375,18Zm2.25,0A12.37,12.37,0,0,1,26.747,9.253,12.37,12.37,0,1,1,9.253,26.747,12.269,12.269,0,0,1,5.625,18Z" fill="#fff" />
                </g>
              </svg>
            </div>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/case#fff')); ?>" class="p-top-case__item">
          <div class="p-top-case__item-head">
            <img src="<?php echo get_template_directory_uri() ?>/dist/img/img-case06.png" width="320" height="240" alt="FFF株式会社様のロゴ" loading="lazy" />
          </div>
          <div class="p-top-case__item-body">
            <h3 class="p-top-case__item-name">FFF株式会社　様</h3>
            <div class="p-top-case__item-label">
              <span class="p-top-case__item-cat">ビジネス英語研修</span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.25 29.25" class="p-top-case__item-icon">
                <g id="arrow-icon" transform="translate(-3.375 -3.375)">
                  <path id="パス_4104" data-name="パス 4104" d="M14.815,10.378a1.362,1.362,0,0,1,1.92,0l6.708,6.729a1.356,1.356,0,0,1,.042,1.87l-6.609,6.63a1.355,1.355,0,1,1-1.92-1.912l5.618-5.7-5.759-5.7A1.341,1.341,0,0,1,14.815,10.378Z" fill="#fff" />
                  <path id="パス_4105" data-name="パス 4105" d="M3.375,18A14.625,14.625,0,1,0,18,3.375,14.623,14.623,0,0,0,3.375,18Zm2.25,0A12.37,12.37,0,0,1,26.747,9.253,12.37,12.37,0,1,1,9.253,26.747,12.269,12.269,0,0,1,5.625,18Z" fill="#fff" />
                </g>
              </svg>
            </div>
          </div>
        </a>
      </div>
      <a href="<?php echo esc_url(home_url('/case')); ?>" class="p-top-case__more-link c-top-more-link u-hidden-tab-up">
        <span class="c-top-more-link__text--white u-font-en">View more</span>
        <span class="c-top-more-link__icon">
          <span class="c-top-more-link__circle--border"></span>
          <span class="c-top-more-link__arrow--white"></span>
        </span>
      </a>
    </div>
  </section><!-- /.p-top-case -->
  <!-- p-top-news -->
  <section class="p-top-news">
    <div class="l-inner">
      <div class="c-top-heading">
        <h2 class="c-top-heading__title">
          <span class="c-top-heading__title-en u-font-en">NEWS</span>
          <span class="c-top-heading__title-jp">新着情報</span>
        </h2>
        <a href="<?php echo esc_url(home_url('/news')); ?>" class="c-top-heading__link c-top-more-link u-hidden-sp">
          <span class="c-top-more-link__text u-font-en">View more</span>
          <span class="c-top-more-link__icon">
            <span class="c-top-more-link__circle"></span>
            <span class="c-top-more-link__arrow"></span>
          </span>
        </a>
      </div>
      <div class="p-top-news__content">
        <div class="p-top-news__items">
          <?php $top_news = new WP_Query(
            array(
              'post_type' => 'post',
              'posts_per_page' => 3,
            )
          ) ?>
          <?php if ($top_news->have_posts()) : ?>
            <?php while ($top_news->have_posts()) : ?>
              <?php $top_news->the_post() ?>
              <!-- p-top-news__item -->
              <a href="<?php the_permalink(); ?>" class="p-top-news__item">
                <div class="p-top-news__meta c-news-meta">
                  <?php $cat = get_the_category();
                  if ($cat[0]) : ?>
                    <span class="p-top-news__cat c-news-meta__cat"><?php echo $cat[0]->cat_name; ?></span>
                  <?php endif; ?>
                  <time class="c-news-meta__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d') ?></time>
                </div>
                <h3 class="p-top-news__item-title"><?php the_title() ?></h3>
              </a><!-- /.p-top-news__item -->
            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata() ?>
        </div>
      </div>
      <a href="<?php echo esc_url(home_url('/case')); ?>" class="c-top-more-link u-hidden-tab-up">
        <span class="c-top-more-link__text--main u-font-en">View more</span>
        <span class="c-top-more-link__icon">
          <span class="c-top-more-link__circle"></span>
          <span class="c-top-more-link__arrow--main"></span>
        </span>
      </a>
    </div>
  </section> <!-- /.p-top-news -->
</main>

<?php get_footer(); ?>