<?php
/*
Template Name: 導入事例
*/
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/sub-main-visual') ?>

<?php get_template_part('template-parts/breadcrumbs') ?>

<main class="p-case">
  <div class="l-inner">
    <!-- p-case__genre-links -->
    <div class="p-case__genre-links">
      <?php
      $business_cats = get_terms('business', array(
        'hide_empty' => false,
        'orderby' => 'id',
        'order' => 'ASC'
      ));
      foreach ($business_cats as $business_cat) :
      ?>
        <a href="#<?php echo $business_cat->slug ?>" class="p-case__genre-link"><?php echo $business_cat->name ?></a>
      <?php endforeach; ?>
    </div><!-- /.p-case__genre-links -->

    <?php foreach ($business_cats as $business_cat) : ?>
      <?php $business_slug = $business_cat->slug; ?>
      <?php $cases = new WP_Query(
        array(
          'post_type' => 'case',
          'tax_query' => array(
            array(
              'taxonomy' => 'business',
              'field' => 'slug',
              'terms' => $business_slug,
            )
          ),
          'order' => 'ASC'
        )
      ) ?>
      <?php if ($cases->have_posts()) : ?>
        <!-- p-case-section -->
        <section id="<?php echo $business_cat->slug ?>" class="p-case-section">
          <!-- p-case-section__title -->
          <h2 class="p-case-section__title">
            <span class="p-case-section__title-jp"><?php echo $business_cat->name ?></span>
            <span class="p-case-section__title-en u-font-en"><?php echo $business_cat->description ?></span>
          </h2><!-- /.p-case-section__title -->
          <div class="p-case-section__items">
            <?php while ($cases->have_posts()) : ?>
              <?php $cases->the_post() ?>
              <!-- p-case-section__item -->
              <article id="<?php echo $post->post_name; ?>" class="p-case-section__item">
                <!-- p-case-section__item-head -->
                <div class="p-case-section__item-head">
                  <div class="p-case-section__item-title">
                    <p class="p-case-section__business"><?php the_field('business_field'); ?></p>
                    <h3 class="p-case-section__company">
                      <?php the_field('company'); ?><span>様</span>
                    </h3>
                  </div>
                  <div class="p-case-section__logo">
                    <img src="<?php the_field('logo'); ?>" width="320" height="420" alt="<?php the_field('company'); ?>のロゴ" />
                  </div>
                </div><!-- /.p-case-section__item-head -->
                <!-- p-case-section__item-body -->
                <div class="p-case-section__item-body">
                  <p class="p-case-section__service">
                    研修コース：<span><?php echo nl2br(get_field('plan')) ?></span>
                  </p>
                  <div class="p-case-section__detail">
                    <div class="p-case-section__detail-item">
                      <p class="p-case-section__detail-title">研修の目的</p>
                      <p class="p-case-section__detail-text">
                        <?php echo nl2br(get_field('before')) ?>
                      </p>
                    </div>

                    <div class="p-case-section__detail-item">
                      <p class="p-case-section__detail-title">選んだ理由</p>
                      <p class="p-case-section__detail-text">
                        <?php echo nl2br(get_field('reason')) ?>
                      </p>
                    </div>
                    <div class="p-case-section__detail-item">
                      <p class="p-case-section__detail-title">
                        導入後の成果・効果
                      </p>
                      <p class="p-case-section__detail-text">
                        <?php echo nl2br(get_field('after')) ?>
                      </p>
                    </div>
                  </div>
                </div><!-- /.p-case-section__item-body -->
              </article><!-- /.p-case-section__item -->
            <?php endwhile; ?>
          </div><!-- /.p-case-section__items -->
          <!-- p-case-section__btn-wrapper -->
          <div class="p-case-section__btn-wrapper">
            <a href="<?php echo esc_url(home_url('/service')) . '#' . $business_slug; ?>" class="c-btn c-btn--main p-case-section__btn">
              <?php echo $business_cat->name ?>の詳細
              <svg class="c-btn__arrow c-btn__arrow--main" xmlns="http://www.w3.org/2000/svg" width="20" height="13" viewBox="0 0 20 13">
                <path fill="#fff400" d="M12.909.258a.919.919 0 0 0-.007 1.294l4.275 4.282H.907a.914.914 0 0 0 0 1.828H17.17l-4.275 4.286a.925.925 0 0 0 .007 1.294.91.91 0 0 0 1.287-.007l5.794-5.836a1.026 1.026 0 0 0 .19-.288.872.872 0 0 0 .07-.352.916.916 0 0 0-.26-.64L14.189.283a.9.9 0 0 0-1.28-.025Z" />
              </svg>
            </a>
          </div><!-- /.p-case-section__btn-wrapper -->
        </section><!-- /.p-case-section -->
      <?php endif; ?>
      <?php wp_reset_postdata() ?>
    <?php endforeach; ?>
  </div>
</main>

<?php get_footer(); ?>