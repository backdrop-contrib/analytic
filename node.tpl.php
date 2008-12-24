<?php
// $Id$
?>
  <div class="node<?php if ($sticky&&$page == 0) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
    <?php if ($picture) {
      print $picture;
    }?>

 <span class="submitted"><?php print $submitted?></span>

    <?php if ($page == 0) { ?><h2 class="title"><a href="<?php print $node_url?>"><?php print $title?></a></h2><?php }; ?>
   
    
    <div class="content"><?php print $content?></div>
	<?php if ($terms): ?><div class="taxonomy"><?php print $terms?></div><?php endif; ?>
    <?php if ($links) { ?><div class="links">&raquo; <?php print $links?></div><?php }; ?>
  </div>
