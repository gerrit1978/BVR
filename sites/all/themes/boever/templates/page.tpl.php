<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

  <header class="header clearfix" id="header" role="banner">
    <?php print render($page['header']); ?>
    <?php print render($page['navigation']); ?>
  </header>

  <?php if ($page['highlighted']): ?>
    <div id="carrousel">
      <?php print render($page['highlighted']); ?>
    </div>
  <?php endif; ?>

<div id="page">

  <div id="main">

    <div id="content" class="column" role="main">
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (($title) && !($is_front)): ?>
        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  </div>

</div>

<?php if ($page['content_center']): ?>
  <div id="content-center">
   <div class="inner">
    <?php print render($page['content_center']); ?>
   </div> 
  </div>
<?php endif; ?>

<div id="content-bottom">
	<?php print render($page['footer']); ?>
	<?php print render($page['bottom']); ?>
</div>
