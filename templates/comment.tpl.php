<?php
/**
 * Template for comments.
 */

  // Create classes for new-link span.
  $this_link_clases = 'this-link';
  if ($new != '') {
    $this_link_clases = ' new';
  }

  // Build href for comment ID.
  $href = '#comment-' . $comment->cid;

?>
<div class="<?php print $classes ?>" <?php print $attributes; ?>>
  <?php if ($user_picture) { print $picture; } ?>

  <span class="submitted"><?php print $created; ?> &mdash; <?php print $author; ?></span>&nbsp;
  <span class="<?php print $this_link_clases ?>"><a href="<?php print $href ?>">#</a></span>

  <?php if ($new) : ?>
    <span class="new"><?php print backdrop_ucfirst($new) ?></span>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the links now so that we can render them later.
      hide($content['links']);
      print render($content);
    ?>
    <?php if ($signature): ?>
      <div class="clearfix">
        <div>&mdash;</div>
        <?php print $signature ?>
      </div>
    <?php endif; ?>
  </div>

  <div class="links-comment"><?php print render($content['links']) ?></div> &nbsp;
</div>
