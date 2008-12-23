<?php
// $Id$
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $language->language ?>" xml:lang="<?php echo $language->language ?>" dir="<?php echo $language->dir ?>">

<head>
  <title><?php echo $head_title ?></title>
  <?php echo $head ?>
  <?php echo $styles ?>
  <?php echo $scripts ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>

<body>
	
	
<!-- / make-it-center --><div class="make-it-center">

<div class="top-menu clear-block">
  <?php if ($mission): ?>
    <span class="mission"><?php echo $mission ?></span>
  <?php endif; ?>  
  
  <!-- >>>>>>>> REMOVE THIS IF YOU WANT TO GET RID OF TOP LINKS (RSS, LOGIN, REGISTER | PROFILE) start-->  
  
  <div id="top-links">
    <ul class="top-links-ul">
    <? if(!$user->uid): ?>	
    	<li><?php echo l(t("Log in"), "user");?></li>
    	<li><?php echo l(t("Register now"), "user/register");?></li>
    <? else: ?> 
       <li><?php echo t("You are logged in as <strong>!user</strong>", array('!user' => l($user->name, "user"))); ?></li>
    	<li><?php echo l(t("Edit profile"), "user/" . $user->uid . "/edit");?></li>
    	<li><? echo l(t("Log out"), "logout"); ?></li>
    <? endif; ?>
    <li><a href="<?php echo url("rss.xml"); ?>"><img src="<?php echo base_path() . path_to_theme() ?>/images/rss.gif"  alt="RSS" /></a></li>
    </ul>
  </div>
  
  <!-- <<<<<<<< REMOVE THIS IF YOU WANT TO GET RID OF TOP LINKS (RSS, LOGIN, REGISTER) end -->

</div>


<!-- logo-container -->
<div id="logo-container">
  <div id="money-bg" class="clear-block">
  <div id="logo">
  
  <?php if ($site_name): ?>
    <h1><a href="<?php echo $front_page; ?>" title="<?php echo t('Home') ?>"><?php echo $site_name ?></a></h1>
  <?php endif; ?>
  
  <?php if ($site_slogan): ?>
    <strong><?php echo $site_slogan; ?></strong>
  <?php endif; ?>
  </div>
  </div>
</div>
<!-- /logo-container -->


<!-- primary menu -->
<div class="rws-primary-menu clear-block">
  <?php if ($place_for_search): ?><?php echo $place_for_search ?><?php endif; ?>
  
  
  
   <?php if (isset($primary_links)) : ?>
     <?php echo theme('links', $primary_links, array('class' => 'links primary-links')) ?>
   <?php endif; ?>
  
  
  <!-- admin edit   -->
  <? if($user->uid == 1): ?>
    <?php echo l(t("Edit this menu"), "admin/build/menu-customize/primary-links", array("attributes" => array("class" => "edit-this-link"))); ?>
  <? endif; ?>
  <!-- admin edit   -->
  
  
  
  <!-- admin panel   -->
   <? if($user->uid == 1): ?>
    <ul id="rws-uni-tabs" class="clear-block">
      <li><?php echo l("Admin panel", "admin"); ?></li>
      <li><?php echo l("Blocks", "admin/build/block"); ?></li>
      <li><?php echo l("Menus", "admin/build/menu"); ?></li>
      <li><?php echo l("Modules", "admin/build/modules"); ?></li>
      <li><?php echo l("Translation", "admin/build/translate/search"); ?></li>
    </ul>
  <? endif; ?>
  <!-- / admin panel -->

</div>
<!--  /primary menu -->


<?php if ($left): ?>
<!-- column-1 -->
<div class="column-1"><?php echo $left ?></div>
<!-- / column-1 -->
<?php endif; ?>



<!-- column-2 --><div class="column-2 
<?php if (!$right&&!$left): ?>no-right-and-left-columns
<? elseif(!$left): ?>
no-left-column
<? elseif(!$right): ?>
no-right-column
<? endif; ?>
">

        


<!-- PRINTING BLOCK BLOCKS THE CONTENT -->
<?php if ($top_content_block_left || $top_content_block_right): ?>
  <!-- column-2-blocks -->
  <div id="block-top" class="column-2-blocks clear-block 
  <?php if (!$right&&!$left): ?>column-2-blocks-no-right-and-left-columns
  <? elseif(!$left): ?>
  column-2-blocks-no-left-column
  <? elseif(!$right): ?>
  column-2-blocks-no-right-column
  <? endif; ?>
  ">
  <!-- /column-2-blocks-left --><div class="column-2-blocks-left">
  <?php if ($top_content_block_left): ?><?php echo $top_content_block_left ?><?php endif; ?>
  <?php if (!$top_content_block_left): ?>&nbsp<?php endif; ?>
  <!-- /column-2-blocks-left --></div>
  <!-- /column-2-blocks-right --><div class="column-2-blocks-right">
  <?php if ($top_content_block_right): ?><?php echo $top_content_block_right ?><?php endif; ?>
  <!-- /column-2-blocks-right --></div>
  <!-- /column-2-blocks --></div>
<?php endif; ?>
<!-- END PRINTING BLOCK BLOCKS THE CONTENT -->

<?php if ($content_top): ?><div id="content-top"><?php echo $content_top ?></div><?php endif; ?>



		<?php echo $breadcrumb ?>
		<?php if ($show_messages): ?>
      <?php echo $messages; ?>
    <? endif; ?>
		<?php echo $help ?>



		<?php if ($title): ?><h1 class="title"><?php echo $title ?></h1><?php endif; ?>
		<?php if ($tabs): ?><div class="tabs"><?php echo $tabs; ?></div><?php endif; ?>
		<!-- main-content-block --><div class="main-content-block"> 
		<?php echo $content; ?>
		<?php echo $feed_icons; ?>
		<!-- /main-content-block --></div>
		
<?php if ($content_bottom): ?><?php echo $content_bottom ?><?php endif; ?>
        



<!-- PRINTING BLOCK AFTER THE CONTENT -->

<?php if ($content_block_left || $content_block_right): ?>

  <!-- column-2-blocks -->
  <div class="column-2-blocks clear-block 
  <?php if (!$right && !$left): ?>column-2-blocks-no-right-and-left-columns
  <? elseif(!$left): ?>
  column-2-blocks-no-left-column
  <? elseif(!$right): ?>
  column-2-blocks-no-right-column
  <? endif; ?>
  ">
  <!-- /column-2-blocks-left --><div class="column-2-blocks-left">
  <?php if ($content_block_left): ?><?php echo $content_block_left ?><?php endif; ?>
  <?php if (!$content_block_left): ?>&nbsp<?php endif; ?>
  <!-- /column-2-blocks-left --></div>
  
  
  
  <!-- /column-2-blocks-right --><div class="column-2-blocks-right">
  <?php if ($content_block_right): ?><?php print $content_block_right ?><?php endif; ?>
  <!-- /column-2-blocks-right --></div>
  <!-- /column-2-blocks --></div>

<?php endif; ?>


<div class="content_after_blocks"><?php if ($content_after_blocks): ?><?php echo $content_after_blocks ?><?php endif; ?></div>



<!-- / column-2 --></div>



<?php if ($right): ?>
<!-- column-3 -->
<div class="column-3"><?php echo $right ?></div>
<!-- / column-3 -->
<?php endif; ?>



<!-- footer -->
<div id="footer" class="clear-block">
 
  <?php echo $footer ?>

<div class="clear-both">
  <?php echo $footer_message ?>
  <?php echo $closure ?>
</div>

</div>
<!-- /footer -->



</div>
<!-- / make-it-center -->

	</body>
</html>

