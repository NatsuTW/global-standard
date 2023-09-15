<?php get_header(); ?>

<div class="c-sub-mv">
  <div class="c-sub-mv__bg c-sub-mv__bg--news"></div>
  <h1 class="c-sub-mv__heading">
    <div class="c-sub-mv__title-row">
      <span class="c-sub-mv__title-en u-font-en">NEWS</span>
    </div>
    <div class="c-sub-mv__title-row">
      <span class="c-sub-mv__title-jp">ニュース</span>
    </div>
  </h1>
</div>

<?php get_template_part('template-parts/breadcrumbs') ?>

<div class="l-two-column">
  <div class="l-inner">
    <div class="l-two-column__inner">
      <main class="p-news l-two-column__main">
        <h2 class="p-news__cat-title"><?php the_archive_title() ?></h2>
        <div class="p-news__cards">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
              <?php the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="p-news__card">
                <div class="p-news__card-thumbnail">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri() ?>/dist/img/eyecatch-news.png" alt="no image" />
                  <?php endif; ?>
                </div>
                <div class="p-news__card-body">
                  <div class="p-news__card-meta c-news-meta">
                    <div class="p-news__card-label c-news-meta__label">
                      <?php $cat = get_the_category();
                      if ($cat[0]) : ?>
                        <span class="p-news__card-cat c-news-meta__cat"><?php echo $cat[0]->cat_name; ?></span>
                      <?php endif; ?>
                      <?php
                      $latest_post_ids = array();
                      $latest_posts = get_posts('posts_per_page=2');
                      foreach ($latest_posts as $latest_post) {
                        $last_post_ids[] = $latest_post->ID;
                      }
                      ?>
                      <?php if (in_array($post->ID, $last_post_ids)) : ?>
                        <span class="c-news-meta__new">NEW</span>
                      <?php endif; ?>
                    </div>
                    <time class="c-news-meta__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j') ?></time>
                  </div>
                  <h3 class="p-news__card-title">
                    <?php
                    if (mb_strlen($post->post_title) > 40) {
                      $title = mb_substr($post->post_title, 0, 40);
                      echo $title . '...';
                    } else {
                      echo $post->post_title;
                    }
                    ?>
                  </h3>
                </div>
              </a>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <?php get_template_part('template-parts/pagination') ?>
      </main>
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>