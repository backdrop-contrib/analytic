<?php
/**
 * Template for nodes.
 */
?>
<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($display_submitted): ?>
    <?php // No <footer> tags as in Backdrop. ?>
    <?php // Removed user picture. ?>
    <?php // This is a <p> in Backdrop. ?>
    <span class="submitted"><?php print $date; ?> &mdash; <?php print $name; ?></span>
  <?php endif; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page && !empty($title)) { ?>
    <h2 class="title"><a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title?></a></h2>
  <?php }; ?>
  <?php print render($title_suffix); ?>


  <div class="content clearfix"<?php print $content_attributes; ?>>
    <?php
      // We hide the links now so that we can render them later.
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <?php if (!empty($links)): ?>
    <div class="links"><?php print '&raquo; ' . $links; ?></div>
  <?php endif; ?>

  <?php // print render($content['comments']); ?>
  <?php if ($comments): ?>
    <section class="comments" id="comments">
      <?php if ($comments['comments']): ?>
        <h2 class="title"><?php print t('Comments'); ?></h2>
        <?php print render($comments['comments']); ?>
      <?php endif; ?>

      <?php if ($comments['comment_form']): ?>
        <h2 class="title comment-form"><?php print t('Add comment'); ?></h2>
        <?php print render($comments['comment_form']); ?>
      <?php endif; ?>
    </section>
  <?php endif; ?>
</div>





