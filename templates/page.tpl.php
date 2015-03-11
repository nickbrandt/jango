<div id="docWrap" class="has-off-nav">

  <!-- off-canvas menu -->
  <nav class="off-canvas-menu effect-1" id="mobileNav">
    <?php if (!empty($page['offcanvas'])): ?>
      <?php print render($page['offcanvas']); ?>
    <?php endif; ?>
  </nav>

  <?php if (!empty($page['search_panel'])): ?>
    <div id="searchReveal">
      <div class="search-wrap">
        <?php print render($page['search_panel']); ?>
        <button class="close"><i class="fa fa-times"></i></button>
      </div>
    </div>
  <?php endif; ?>

  <!--.page -->
  <div id="pageWrap" role="document" class="page nav-pusher">

    <header role="banner" id="header">
      <?php if (!empty($page['navigation']) || !empty($linked_logo)): ?>
        <div class="row">
          <section id="navbar" class="large-12 columns group">
            <div id="logo">
              <?php print $linked_logo; ?>
            </div>
            <nav id="mainNav">
              <?php print render($page['navigation']); ?>
              <button data-effect="effect-1" class="menu-button"><i class="fa fa-bars"></i></button>
            </nav>
          </section>
        </div>
      <?php endif; ?>
    </header>

    <?php if (!empty($page['featured_top'])): ?>
      <section id="featureTop" class="group">
        <div class="row">
          <div class="large-12 columns">
            <?php print render($page['featured_top']); ?>
          </div>
        </div>
      </section>
    <?php endif; ?>

    <?php if (!empty($page['sub_nav'])): ?>
      <section id="subNav">
          <div class="row">
            <div class="large-12">
              <button class="small toggle-side"><i class="fa fa-bars"></i> In This Section</button>
              <div class="content group">
                <?php print render($page['sub_nav']); ?>
              </div>
            </div>
          </div>
      </section>
    <?php endif; ?>

    <?php if ($messages && !$fett_messages_modal): ?>
      <!--.l-messages -->
      <section id="messages">
        <?php if ($messages): print $messages; endif; ?>
      </section>
      <!--/.l-messages -->
    <?php endif; ?>

    <!--.l-main-->
    <?php $views_page = views_get_page_view(); ?>
    <?php if (is_object($views_page)): ?>
      <main role="main" id="main">
    <?php else : ?>
      <main role="main" id="main">
        <div class="main-content">
          <?php if (!empty($page['featured_middle'])): ?>
            <section id="featureMiddle" class="group">
                <?php print render($page['featured_middle']); ?>
            </section>
          <?php endif; ?>
          <div class="row">
            <div class="<?php print $main_grid; ?> main columns">
    <?php endif; ?>

          <a id="main-content"></a>

          <?php if (!empty($tabs)): ?>
            <div id="admin-tabs">
              <?php print render($tabs); ?>
              <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
            </div>
          <?php endif; ?>

          <?php if ($action_links): ?>
            <ul class="action-links">
              <?php print render($action_links); ?>
            </ul>
          <?php endif; ?>

          <?php if (!empty($page['content_top'])): ?>
            <section id="contentTop">
              <?php print render($page['content_top']); ?>
            </section>
          <?php endif; ?>

          <?php print render($page['content']); ?>

          <?php if (!empty($page['content_bottom'])): ?>
            <section id="contentBottom">
              <?php print render($page['content_bottom']); ?>
            </section>
          <?php endif; ?>

        <?php if (!is_object($views_page)): ?>   
        </div>
        <!--/.main .columns -->

        <?php endif; ?>

        <?php if (!empty($page['sidebar_first'])): ?>
          <aside role="complementary" id="sidebarFirst" class="<?php print $sidebar_first_grid; ?> columns sidebar">
            <div class="content">
              <?php print render($page['sidebar_first']); ?>
            </div>
          </aside>
        <?php endif; ?>

        <?php if (!empty($page['sidebar_second'])): ?>
          <aside role="complementary" id="sidebarSecond" class="<?php print $sidebar_sec_grid; ?> columns sidebar">
            <?php print render($page['sidebar_second']); ?>
          </aside>
        <?php endif; ?>

    <?php if (is_object($views_page)): ?>    
      </main>  
    <?php else : ?>
          </div>
        </div>

        <?php if (!empty($page['sub_nav'])): ?>
          <aside id="offCanvasMain">
            <?php print render($page['sub_nav']); ?>
          </aside>
        <?php endif; ?>

      </main>
    <?php endif; ?>
    <!--/.l-main-->

    <?php if (!empty($page['featured_bottom'])): ?>
      <section id="featureBottom">
        <?php print render($page['featured_bottom']); ?>
      </section>
    <?php endif; ?>

    <footer id="footer" class="group" role="contentinfo">
      <?php print render($page['footer']); ?>
      <div class="row">
        <div class="copyright small-12 columns">
          <small>&copy; <?php print date('Y') . ' ' . check_plain($site_name) . '. ' . t('All rights reserved.'); ?> <span class="credit">Website by <a href="http://www.augustash.com/" class="aai"><img src="/sites/all/themes/custom/he/assets/images/aai-logo.png" alt="August Ash Logo" /> August Ash</a></span></small>
        </div>
      </div>
    </footer>
    <!--/.footer-->

    <?php if ($messages && $fett_messages_modal): print $messages; endif; ?>
  </div>

  <!-- /page -->
  <div class="spinner"></div>

</div><!-- /#st-container -->

<?php if (!empty($page['hidden'])): ?>
  <div id="hidden">
    <?php print render($page['hidden']); ?>
  </div>
<?php endif; ?>