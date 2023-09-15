<?php
/*
 * Template Name: 当社について
 */
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/sub-main-visual') ?>

<?php get_template_part('template-parts/breadcrumbs') ?>

<main>
  <!-- p-company-msg -->
  <section class="p-company-msg">
    <div class="l-inner">
      <div class="p-company-msg__content">
        <div class="p-company-msg__item">
          <div class="p-company-msg__heading p-company-msg__heading--mission">
            <h2 class="p-company-msg__title">
              <span class="p-company-msg__title-en u-font-en">MISSION</span>
              <span class="p-company-msg__title-jp">社会的使命</span>
            </h2>
          </div>
          <div class="p-company-msg__body">
            <h4 class="p-company-msg__body-title">
              人財育成を通じて、<br class="u-hidden-tab-up" />豊かな世界を創造する
            </h4>
            <p class="p-company-msg__body-text">
              急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。
            </p>
          </div>
        </div>
        <div class="p-company-msg__item">
          <div class="p-company-msg__heading p-company-msg__heading--vision">
            <h2 class="p-company-msg__title">
              <span class="p-company-msg__title-en u-font-en">VISION</span>
              <span class="p-company-msg__title-jp">企業理念</span>
            </h2>
          </div>
          <div class="p-company-msg__body">
            <h4 class="p-company-msg__body-title">
              文化の垣根を越えた<br class="u-hidden-sp" />人と人との<br class="u-hidden-tab-up" />つながりが新しい価値を生む
            </h4>
            <p class="p-company-msg__body-text">
              コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- p-company-info -->
  <section class="p-company-info">
    <div class="l-inner">
      <div class="p-company-info__wrapper">
        <h2 class="p-company-info__title">会社概要</h2>
        <table class="p-company-info__table">
          <tr class="p-company-info__table-row">
            <th class="p-company-info__table-head">代表</th>
            <td class="p-company-info__table-text">波瑠　慶太</td>
          </tr>
          <tr class="p-company-info__table-row">
            <th class="p-company-info__table-head">事業内容</th>
            <td class="p-company-info__table-text">
              ・ビジネス英会話教育事業<br />
              ・異文化交流サポート事業<br />
              ・ビジネス留学事業
            </td>
          </tr>
          <tr class="p-company-info__table-row">
            <th class="p-company-info__table-head">設立</th>
            <td class="p-company-info__table-text">2012年10月03日</td>
          </tr>
          <tr class="p-company-info__table-row">
            <th class="p-company-info__table-head">所在地</th>
            <td class="p-company-info__table-text">
              〒550-1000<br />
              大阪市西区土佐堀9-5-5
            </td>
          </tr>
          <tr class="p-company-info__table-row">
            <th class="p-company-info__table-head">TEL</th>
            <td class="p-company-info__table-text"><a href="tel:06-123-4568">06-123-4567</a>（代表）</td>
          </tr>
          <tr class="p-company-info__table-row">
            <th class="p-company-info__table-head">FAX</th>
            <td class="p-company-info__table-text">06-123-4568（代表）</td>
          </tr>
          <tr class="p-company-info__table-row">
            <th class="p-company-info__table-head">E-mail</th>
            <td class="p-company-info__table-text">
              <a href="mailto:globalstandard@example.com">
                globalstandard@example.com
              </a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>
  <!-- p-company-directors -->
  <section class="p-company-directors">
    <div class="l-inner">
      <h2 class="p-company-directors__title">役員紹介</h2>
      <div class="p-company-directors__items">
        <div class="p-company-directors__item">
          <div class="p-company-directors__img">
            <img src="<?php echo get_template_directory_uri() ?>/dist/img/img-directors01.png" width="240" height="320" alt="photo of director" loading="lazy" />
          </div>
          <div class="p-company-directors__info">
            <div class="p-company-directors__info-heading">
              <p class="p-company-directors__position">代表取締役社長</p>
              <h4 class="p-company-directors__name">波瑠　慶太</h4>
            </div>
            <p class="p-company-directors__info-text">
              20年間外資系企業に勤務し、世界17カ国でビジネスを展開。
              <br />様々な文化に触れ、コミュニケーションスキルを磨き、同時にその必要性を実感する。
              <br />自身も講師を務め、実体験から得られた知見を皆様に還元し、グローバルなビジネス展開をサポートいたします。
            </p>
            <div class="p-company-directors__info-sns">
              <a href="#" target="_blank" class="p-company-directors__sns-link"><img class="p-company-directors__sns-icon" src="<?php echo get_template_directory_uri() ?>/dist/img/icon-twitter.png" alt="" /></a>
              <a href="#" target="_blank" class="p-company-directors__sns-link"><img class="p-company-directors__sns-icon" src="<?php echo get_template_directory_uri() ?>/dist/img/icon-facebook.png" alt="" /></a>
              <a href="#" target="_blank" class="p-company-directors__sns-link"><img class="p-company-directors__sns-icon" src="<?php echo get_template_directory_uri() ?>/dist/img/icon-instagram.png" alt="" /></a>
            </div>
          </div>
        </div>
        <div class="p-company-directors__item">
          <div class="p-company-directors__img">
            <img src="<?php echo get_template_directory_uri() ?>/dist/img/img-directors02.png" width="240" height="320" alt="photo of director" loading="lazy" />
          </div>
          <div class="p-company-directors__info">
            <div class="p-company-directors__info-heading">
              <p class="p-company-directors__position">取締役</p>
              <h4 class="p-company-directors__name">ジャック・スミス</h4>
            </div>
            <p class="p-company-directors__info-text">
              オーストラリア出身。<br />英会話の講師として13年のキャリアがあります。<br />
              翻訳業務も担当しており、外国映画の日本版DVDの字幕やテレビ番組の英語をヒヤリングなども行なっております。<br />皆様に「より気持ちの伝わる英会話」を習得していただくサポートをいたします。
            </p>
            <div class="p-company-directors__info-sns">
              <a href="#" target="_blank" class="p-company-directors__sns-link"><img class="p-company-directors__sns-icon" src="<?php echo get_template_directory_uri() ?>/dist/img/icon-twitter.png" alt="" /></a>
              <a href="#" target="_blank" class="p-company-directors__sns-link"><img class="p-company-directors__sns-icon" src="<?php echo get_template_directory_uri() ?>/dist/img/icon-facebook.png" alt="" /></a>
              <a href="#" target="_blank" class="p-company-directors__sns-link"><img class="p-company-directors__sns-icon" src="<?php echo get_template_directory_uri() ?>/dist/img/icon-instagram.png" alt="" /></a>
            </div>
          </div>
        </div>
        <div class="p-company-directors__item">
          <div class="p-company-directors__img">
            <img src="<?php echo get_template_directory_uri() ?>/dist/img/img-directors03.png" width="240" height="320" alt="photo of director" loading="lazy" />
          </div>
          <div class="p-company-directors__info">
            <div class="p-company-directors__info-heading">
              <p class="p-company-directors__position">取締役</p>
              <h4 class="p-company-directors__name">
                メアリー・ジャクソン
              </h4>
            </div>
            <p class="p-company-directors__info-text">
              アメリカ出身。<br />メジャーリーグ球団「ニューヨークヤンキース」の通訳担当として7年間チームに在籍。<br />数多くの契約交渉の経験を活かし、国際ビジネスにおけるコミュニケーションのマナーから応用までお伝えいたします。
            </p>
            <div class="p-company-directors__info-sns">
              <a href="#" target="_blank" class="p-company-directors__sns-link"><img class="p-company-directors__sns-icon" src="<?php echo get_template_directory_uri() ?>/dist/img/icon-twitter.png" alt="" /></a>
              <a href="#" target="_blank" class="p-company-directors__sns-link"><img class="p-company-directors__sns-icon" src="<?php echo get_template_directory_uri() ?>/dist/img/icon-facebook.png" alt="" /></a>
              <a href="#" target="_blank" class="p-company-directors__sns-link"><img class="p-company-directors__sns-icon" src="<?php echo get_template_directory_uri() ?>/dist/img/icon-instagram.png" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>