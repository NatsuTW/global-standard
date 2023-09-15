<!-- p-sidebar -->
<aside class="p-sidebar l-two-column__side">
  <!-- p-sidebar-new -->
  <section class="p-sidebar-new">
    <h3 class="p-sidebar__section-title">新着記事</h3>
    <div class="p-sidebar-new__cards">
      <?php $latest_query = new WP_Query(
        array(
          'post_type' => 'post',
          'posts_per_page' => 5,
        )
      ) ?>
      <?php if ($latest_query->have_posts()) : ?>
        <?php while ($latest_query->have_posts()) : ?>
          <?php $latest_query->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="p-sidebar-new__card">
            <div class="p-sidebar-new__card-thumbnail">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri() ?>/dist/img/noimg.png" alt="no image" />
              <?php endif; ?>
            </div>
            <div class="p-sidebar-new__card-body">
              <div class="p-sidebar-new__card-meta c-news-meta">
                <div class="p-sidebar-new__card-label c-news-meta__label">
                  <?php $cat = get_the_category();
                  if ($cat[0]) : ?>
                    <span class="p-sidebar-new__card-cat c-news-meta__cat"><?php echo $cat[0]->cat_name; ?></span>
                  <?php endif; ?>
                </div>
                <time class="c-news-meta__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d') ?></time>
              </div>
              <p class="p-sidebar-new__card-title">
                <?php
                if (mb_strlen($post->post_title) > 32) {
                  $title = mb_substr($post->post_title, 0, 32);
                  echo $title . '...';
                } else {
                  echo $post->post_title;
                }
                ?>
              </p>
            </div>
          </a>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  </section><!-- /.p-sidebar-new -->
  <!-- p-sidebar-cat -->
  <section class="p-sidebar-cat">
    <h3 class="p-sidebar__section-title">カテゴリ</h3>
    <ul class="p-sidebar-cat__items">
      <?php $cats = get_categories();
      if ($cats) : ?>
        <?php foreach ($cats as $cat) : ?>
          <li class="p-sidebar-cat__item"><a href="<?php echo get_category_link($cat->term_id); ?>" class="p-sidebar-cat__link"><?php echo $cat->name ?></a></li>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>
  </section><!-- /.p-sidebar-cat -->
</aside><!-- /.p-sidebar -->