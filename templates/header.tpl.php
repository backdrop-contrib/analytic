<?php
/**
 * @file
 * Display generic site information such as logo, site name, etc.
 *
 * Available variables:
 *
 * - $base_path: The base path of the Backdrop installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the home page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $front_page: The URL of the home page. Use this instead of $base_path, when
 *   linking to the home page. This includes the language domain or prefix.
 * - $site_name: The name of the site, empty when display has been disabled.
 * - $site_slogan: The site slogan, empty when display has been disabled.
 * - $menu: The menu for the header (if any), as an HTML string.
 */

  $logo_id = 'logo';
  if ($logo && !$site_name && !$site_slogan){
    $logo_id .= '-no-padding';
  }

  $site_name_class = '';
  if ($logo && !$site_slogan) {
    $site_name_class = 'logo-picture-true-slogan-false';
  }
  if ($logo) {
    $site_name_class = 'logo-picture-true';
  }

  $slogan_class = '';
  if ($logo) {
    $slogan_class = 'logo-picture-true';
  }
?>

<div class="top-menu clearfix">
  <!-- >>>>>>>> REMOVE THIS IF YOU WANT TO GET RID OF TOP LINKS (LOGIN, REGISTER | PROFILE) start-->
  <div id="top-links">
    <ul class="top-links-ul">
      <?php if (!$user->uid): ?>
        <li><?php print l(t('Log in'), 'user/login');?></li>
        <?php if (config_get('system.core', 'user_register') != 'admin_only'): ?>
          <li><?php print l(t('Create new account'), 'user/register');?></li>
        <?php endif; ?>
      <?php else: ?>
        <li><?php
        $substitutions = array('!user' => l($user->name, 'user'));
        print t('You are logged in as <strong>!user</strong>', $substitutions); ?>
        &nbsp;|&nbsp;<?php echo l(t('Edit'), 'user/' . $user->uid . '/edit');?>
        </li>
        <li><?php echo l(t('Log out'), 'user/logout'); ?></li>
      <?php endif; ?>
    </ul>
  </div>
  <!-- <<<<<<<< REMOVE THIS IF YOU WANT TO GET RID OF TOP LINKS (LOGIN, REGISTER) end -->
</div>

<!-- logo-container -->
<div id="logo-container">
  <div id="money-bg" class="clearfix">
    <div id=<?php print $logo_id; ?>>

    <?php if ($logo): ?>
      <div id="logo-picture">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      </div>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div class="name-and-slogan">
        <!-- if logo picture is defined, text is aligned to left -->
        <?php if ($site_name): ?>
          <h1 class="site-name <?php print $site_name_class; ?>">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>
        <!-- if logo defined, text is aligned to left -->
        <?php if ($site_slogan): ?>
          <strong class="site-slogan <?php print $slogan_class; ?>"><?php print $site_slogan; ?></strong>
        <?php endif; ?>

      </div> <!-- /#name-and-slogan -->
    <?php endif; ?>

    <?php if ($menu): ?>
      <nav class="header-menu">
        <?php print $menu; ?>
      </nav>
    <?php endif; ?>

    </div>
  </div>
</div>
<!-- /logo-container -->
