<?php /* Smarty version 2.6.22, created on 2014-03-01 16:24:31
         compiled from index.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php echo '<?php'; ?>
 if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); <?php echo '?>'; ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['site_url']; ?>
/templates/images/icon.png">
<title>Vaishnav samaj - Bikaner</title>
<!--<link href="<?php echo $this->_tpl_vars['site_url']; ?>
templates/css/styles.css" rel="stylesheet" type="text/css" />-->

<!-- stylesheet -->
<style media="all" type="text/css">@import "<?php echo $this->_tpl_vars['site_url']; ?>
templates/css/nivo-slider.css";</style>
<style media="all" type="text/css">@import "<?php echo $this->_tpl_vars['site_url']; ?>
templates/css/style.css";</style>
<!--
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['site_url']; ?>
templates/css/style-blue.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['site_url']; ?>
templates/css/style-brown.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['site_url']; ?>
templates/css/style-dark.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['site_url']; ?>
templates/css/style-grey.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['site_url']; ?>
templates/css/style-orange.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['site_url']; ?>
templates/css/style-pink.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['site_url']; ?>
templates/css/style-purple.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['site_url']; ?>
templates/css/style-red.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['site_url']; ?>
templates/css/style-darkblue.css" />
-->
<style rel="stylesheet" type="text/css" media="screen,all" id="noscript">@import "<?php echo $this->_tpl_vars['site_url']; ?>
templates/css/noscript.css";</style>
<style media="all" type="text/css">@import "<?php echo $this->_tpl_vars['site_url']; ?>
templates/css/colorpicker.css";</style>
<style media="all" type="text/css">@import "<?php echo $this->_tpl_vars['site_url']; ?>
templates/css/style-switcher.css";</style>

<!--Gallery big image on click css start-->
<style media="all" type="text/css">@import "<?php echo $this->_tpl_vars['site_url']; ?>
templates/css/css_page.css";</style>
<style media="all" type="text/css">@import "<?php echo $this->_tpl_vars['site_url']; ?>
templates/css/css_style.css";</style>
<!--Gallery big image on click css end-->

<!--Gallery big image on click js start-->
<script language="javascript" src="<?php echo $this->_tpl_vars['site_url']; ?>
templates/js/jquery.min.js"></script>
<script language="javascript" src="<?php echo $this->_tpl_vars['site_url']; ?>
templates/js/piroBox.1_2.js"></script>
<!--Gallery big image on click js end-->

<!--Gallery big image on click script start-->
<?php echo '
<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 600, //animation speed
			bg_alpha: 0.5, //background opacity
			radius: 4, //caption rounded corner
			scrollImage : false, // true == image follows the page, false == image remains in the same open position
			pirobox_next : \'piro_next\', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
			pirobox_prev : \'piro_prev\',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
			close_all : \'.piro_close\',// add class .piro_overlay(with comma)if you want overlay click close piroBox
			slideShow : \'slideshow\', // just delete slideshow between \'\' if you don\'t want it.
			slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)
	});
});
</script>
'; ?>

<!--Gallery big image on click script end-->

<!-- javascripts
<script type="text/javascript" src="<?php echo $this->_tpl_vars['site_url']; ?>
/templates/js/jquery.js"></script> -->
<script type="text/javascript" src="<?php echo $this->_tpl_vars['site_url']; ?>
/templates/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['site_url']; ?>
/templates/js/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['site_url']; ?>
/templates/js/fonts/TitilliumText14L_400.font.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['site_url']; ?>
/templates/js/jqueryslidemenu.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['site_url']; ?>
/templates/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['site_url']; ?>
/templates/js/colorpicker.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['site_url']; ?>
/templates/js/switcher.js"></script>
<!-- javascripts end -->

<?php echo '
<!-- javascripts end -->
<script type="text/javascript">
  $(window).load(function() {
    $(\'#slider\').nivoSlider({
     effect:\'random\',
     animSpeed:500, 
     pauseTime:3000,
     directionNav:true,
     directionNavHide:true,
     controlNav:true
    });
  });
</script>
<script type="text/javascript">
  Cufon.replace(\'h1, h2, h3, h4, h5,h6\',{hover:true})(\'.jqueryslidemenu li a\',{hover:true})(\'.button\',{hover:true})(\'.big-button\',{hover:true})(\'#phone h4\',{textShadow: \'#555555 1px 1px\'});
</script>
'; ?>


</head>



<!-- stylesheet end -->

<body>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="body">


<div class="col_10">&nbsp;
</div>

<!--leftMain end -->
<!--mid start -->

<div class="col_34">

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['contentBody'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        
</div>
<div class="col_14 ">


	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "right_menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

</div>

</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	

</body>
</html>