<!-- p-footer-links -->
<div class="p-footer-links">
  <div class="p-footer-links__item--download">
    <div class="p-footer-links__text">
      <p class="p-footer-links__en u-font-en">DOWNLOAD</p>
      <p class="p-footer-links__jp">資料ダウンロード</p>
    </div>
    <div class="p-footer-links__btn-wrapper">
      <a href="<?php echo esc_url(home_url('/download')); ?>" class="c-btn c-btn--accent p-footer-links__btn u-font-en">
        View more
        <svg class="c-btn__arrow c-btn__arrow--accent" xmlns="http://www.w3.org/2000/svg" width="20" height="13" viewBox="0 0 20 13">
          <path fill="#fff400" d="M12.909.258a.919.919 0 0 0-.007 1.294l4.275 4.282H.907a.914.914 0 0 0 0 1.828H17.17l-4.275 4.286a.925.925 0 0 0 .007 1.294.91.91 0 0 0 1.287-.007l5.794-5.836a1.026 1.026 0 0 0 .19-.288.872.872 0 0 0 .07-.352.916.916 0 0 0-.26-.64L14.189.283a.9.9 0 0 0-1.28-.025Z" />
        </svg>
      </a>
    </div>
  </div>
  <div class="p-footer-links__item--contact">
    <div class="p-footer-links__text">
      <p class="p-footer-links__en u-font-en">CONTACT</p>
      <p class="p-footer-links__jp">お問い合わせ</p>
    </div>
    <div class="p-footer-links__btn-wrapper">
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-btn c-btn--accent p-footer-links__btn u-font-en">
        View more
        <svg class="c-btn__arrow c-btn__arrow--accent" xmlns="http://www.w3.org/2000/svg" width="20" height="13" viewBox="0 0 20 13">
          <path fill="#fff400" d="M12.909.258a.919.919 0 0 0-.007 1.294l4.275 4.282H.907a.914.914 0 0 0 0 1.828H17.17l-4.275 4.286a.925.925 0 0 0 .007 1.294.91.91 0 0 0 1.287-.007l5.794-5.836a1.026 1.026 0 0 0 .19-.288.872.872 0 0 0 .07-.352.916.916 0 0 0-.26-.64L14.189.283a.9.9 0 0 0-1.28-.025Z" />
        </svg>
      </a>
    </div>
  </div>
</div><!-- /.p-footer-links -->

<footer class="l-footer">
  <div class="p-footer">
    <div class="l-inner p-footer__inner">
      <div class="p-footer__logo">
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 368 68">
            <text id="logo02" transform="translate(0 42)" fill="#ffffff" font-size="52" font-family="Roboto-BoldItalic, Roboto" font-weight="700" font-style="italic">
              <tspan x="0" y="0">Global Standard</tspan>
            </text>
          </svg></a>
      </div>
      <div class="p-footer__info">
        <p>〒550-1000　大阪市西区土佐堀9-5-5</p>
        <p>TEL　06-123-4567</p>
        <p>FAX　06-123-4568</p>
      </div>
      <div class="p-footer__copyright">
        ©︎2021 Global Standard. All Rights Reserved.
      </div>
      <a href="#" class="c-to-top-btn js-to-top-btn">
        <img src="<?php echo get_template_directory_uri() ?>/dist/img/icon-top.svg" alt="to top button" /></a>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>