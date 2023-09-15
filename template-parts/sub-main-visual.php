<?php
$mv_title_jp = [
  "about" => "当社について",
  "service" => "サービス",
  "case" => "導入事例",
  "news" => "ニュース",
  "download" => "資料ダウンロード",
  "contact" => "お問い合わせ"
];

$mv_title_en = [
  "about" => "ABOUT US",
  "service" => "SERVICE",
  "case" => "CASE STUDY",
  "news" => "NEWS",
  "download" => "DOWNLOAD",
  "contact" => "CONTACT"
];

// define if there is parent page
$parent_id = $post->post_parent;
$parent_slug = get_post($parent_id)->post_name;  ?>

<?php if (is_category() || is_single()) {
  $current_page = "news";
} elseif (is_page() && $parent_id) {
  $current_page = $parent_slug;
} else {
  $current_page = get_page_uri();
}
?>

<!-- c-sub-mv -->
<div class="c-sub-mv">
  <div class="c-sub-mv__bg c-sub-mv__bg--<?php echo $current_page ?>"></div>
  <h1 class="c-sub-mv__heading">
    <div class="c-sub-mv__title-row">
      <span class="c-sub-mv__title-en u-font-en"><?php echo $mv_title_en[$current_page]; ?></span>
    </div>
    <div class="c-sub-mv__title-row">
      <span class="c-sub-mv__title-jp"><?php echo $mv_title_jp[$current_page]; ?></span>
    </div>
  </h1>
</div><!-- /.c-sub-mv -->