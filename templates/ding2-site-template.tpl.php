<div id="page<?php print $css_id ? " $css_id" : ''; ?>" class="<?php print $classes; ?>">
  <?php if (!empty($content['branding']) || !empty($content['header']) || !empty($content['navigation'])): ?>
    <header class="site-header">

      <div class="secondary-submenu">
         <?php //var_dump($content['navigation']['1']);die(); ?>
      </div>

      <?php if (!empty($content['branding'])): ?>
        <section class="topbar">
          <div class="topbar-inner">
            <?php print render($content['branding']); ?>
          </div>
        </section>
      <?php endif; ?>

      <?php if (!empty($content['navigation'])): ?>
        <section class="navigation-wrapper js-topbar-menu">
          <div class="navigation-inner">
            <?php print render($content['navigation']); ?>
          </div>
        </section>
      <?php endif; ?>

      <?php if (!empty($content['header'])): ?>
        <section class="header-wrapper">
          <div class="header-inner">
            <?php print render($content['header']); ?>
          </div>
        </section>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <div class="content-wrapper">
    <div class="content-inner">
      <?php print render($content['content']); ?>
    </div>
  </div>

  <?php if (!empty($content['bottom'])): ?>
    <div class="bottom-wrapper">
      <div class="bottom-bg"></div>
      <div class="bottom">

        <?php if (!empty($content['footer'])): ?>
          <footer class="footer">
            <div class="footer-inner">
              <?php print render($content['footer']); ?>
            </div>
          </footer>
        <?php endif; ?>
        <?php print render($content['bottom']); ?>
      </div>
    </div>
  <?php endif; ?>

</div>
