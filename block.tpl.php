<?php
// $Id$
?>
  <div class="block block-<?php print $block->module; ?> clearfix" id="block-<?php print $block->module; ?>-<?php print $block->delta; ?>">
   <?php if ($block->subject) { ?><h2 class="title"><?php print $block->subject; ?></h2><?php } ?>
    <div class="content clearfix"><?php print $content; ?></div>
 </div>
