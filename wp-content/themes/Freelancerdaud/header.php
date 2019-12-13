<?php
// Get options
$options = get_option('freelancerdaud_theme'); // unique id of the framework
$fevicon = $options['site_icon'];  // id of the field
$sitetitle = $options['site_title'];  // id of the field
$sitesubtitle = $options['site_tagline'];  // id of the field
?>
<!DOCKTYPE html>
<html <?php language_attributes(); ?> lang="en" class="no_js">
  <head>
     <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $sitetitle ?> - <?php echo $sitesubtitle ?></title>
    <link rel="shortcut icon" href="<?php echo $fevicon['url']; ?>" type="image/x-icon" />
    <title><?php bloginfo( 'name' ) . ' : '. bloginfo( 'description' ); ?></title>
    <?php wp_head();?>
  </head>
  <body id="home" data-backgrund="/assets/images/background/computer-work - Copy.jpg">
    <!-- Header Section Start -->
    <header class=" <?php if (is_user_logged_in()) {
                      echo "top-30px";
                    } ?>">