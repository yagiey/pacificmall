<?php if ( ! is_front_page() ) : ?>
        </div>
      </div>
    </main>
  </div>
</div>
<?php endif; ?>

    <footer class="footer" id="footer">
      <div class="footerContents">
        <div class="footerContents-contact">
          <div class="enterprise-logo">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/logo-footer.svg" alt="PACIFIC MALL DEVELOPMENT" />
          </div>
          <div class="enterprise-detail">
            <p class="name">パシフィックモール開発株式会社</p>
            <p class="address">
              東京都千代田区大手町0-1-2<br />
              パシフィックモールビルディング18F 
            </p>
          </div>
        </div>
        <div class="footerContents-sitemap">
          <nav class="footer-nav">
<?php
wp_nav_menu([
  'theme_location' => 'place_footer',
  'container' => false,
]);
?>
          </nav>
        </div>
      </div>
      <p class="copyright">
        <small class="copyright-text">&#169; 2023 PACIFIC MALL DEVELOPMENT CO., LTD.</small>
      </p>
    </footer>
  </div><!-- /.container -->
<?php wp_footer(); ?>
</body>
</html>
