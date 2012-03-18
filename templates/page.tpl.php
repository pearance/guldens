  <!-- HEADER -->
  <div id="header">
    <div id="header-lining">
      <div id="header-content" class="container-12 clearfix">

        <div id="branding" class="grid-4">
          <?php if ($logo_img || $site_name): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
              <?php print $logo_img; ?>

              <?php if ($site_name): ?>
                <span id="site-name"><?php print $site_name; ?></span>
              <?php endif; ?>
            </a>
          <?php endif ?>

          <?php if ($site_slogan): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div><!--branding-->

        <div id="header1" class="prefix-2 grid-3 ">
          <?php if ($page['header1']): ?>
              <?php print render($page['header1']); ?>
          <?php endif; ?>
        </div><!--header1-->

        <div id="header2" class="<?php if (empty($page['header1'])) { print 'prefix-5 grid-3'; } else { print 'grid-3';} ?>">
          <?php if ($page['header2']): ?>
              <?php print render($page['header2']); ?>
          <?php endif; ?>
        </div><!--header2-->

      </div><!--header-content-->
    </div><!--header-lining-->
  </div><!--header-->

  <!-- NAVIGATION -->
  <div id="navigation">
    <div id="navigation-lining">
      <div id="navigation-content" class="container-12 clearfix">
        <?php if ($main_menu_links): ?>
          <div id="site-menu" class="grid-8">
            <?php print $main_menu_links; ?>
          </div><!--site-menu-->
        <?php endif; ?>

        <?php if ($page['search_box']): ?>
          <div id="search-box" class="grid-4"><?php print render($page['search_box']); ?></div>
        <?php endif; ?>
      </div><!--navigation-content-->
    </div><!--navigation-lining-->
  </div><!--navigation-->

  <div id="body">
    <div id="body-lining">
      <div id="body-content" class="container-12 clearfix">

        <?php if ($page['feature']): ?>
          <div id="feature" class="clearfix prefix-1 suffix-1">
            <?php print render($page['feature']); ?>
          </div><!--feature-->
        <?php endif; ?>

        <div id="main" class="column <?php print ns('grid-12', $page['sidebar_first'], 4); ?>">
          <?php // System Messages ?>
          <?php if ($messages): ?>
            <div id="messages">
              <?php print $messages; ?>
            </div>
          <?php endif; ?>

          <?php // Title and Contextual Links ?>
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1 class="title" id="page-title">
              <?php print $title; ?>
            </h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>

          <?php // Sub Tabs ?>
          <?php if ($tabs['#primary']): ?>
            <div class="tabs">
              <?php print render($tabs); ?>
            </div>
          <?php endif; ?>

          <?php // Help ?>
          <?php print render($page['help']); ?>

          <?php // Hightlighted Content ?>
          <?php if ($page['highlighted']): ?>
            <div id="highlighted" class="clearfix">
              <?php print render($page['highlighted']); ?>
            </div><!--highlighted-->
          <?php endif; ?>

          <?php // Content ?>
          <div id="content" class="clearfix">
            <?php print render($page['content']); ?>
          </div><!--content-->

          <?php print $feed_icons; ?>
        </div><!--main-->

        <?php if ($page['sidebar_first']): ?>
          <div id="sidebar-first">
            <div id="sidebar-first-lining" class="column sidebar grid-4">
              <?php print render($page['sidebar_first']); ?>
            </div>
          </div>
        <?php endif; ?>

      </div><!--body-content-->
    </div><!--body-lining-->
  </div><!--body-->

  <div id="footer" class="clear clearfix prefix-1 suffix-1">
    <?php if ($page['footer']): ?>
      <div id="footer-region" class="grid-14">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>
    <div id="user-menu">
      <?php if ($secondary_menu_links): ?>
          <?php print $secondary_menu_links; ?>
      <?php endif; ?>
    </div><!--user-menu-->
  </div><!--footer-->
