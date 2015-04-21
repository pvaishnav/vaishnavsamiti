<?php /* Smarty version 2.6.22, created on 2014-03-01 16:15:21
         compiled from admin/index.tpl */ ?>
<HTML>
<HEAD>
<TITLE></TITLE>
<script type="text/javascript" src="templates/admin/js/validation.js"> </script>
<script type="text/javascript" src="templates/admin/js/nicEdit.js"> </script>
<style type="text/css" >@import url("<?php echo $this->_tpl_vars['site_url']; ?>
templates/admin/css/styles.css"); </style>
<?php echo '
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
'; ?>

</HEAD>

<BODY >
<div  align="center" >
	<div  class="wrapper" >
    <?php if ($this->_tpl_vars['page2'] != 'print_view_guest'): ?>
	 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
	 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/".($this->_tpl_vars['page']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
	
	</div>
</div>	
</BODY>
</HTML>
