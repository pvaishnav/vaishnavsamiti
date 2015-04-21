<?php /* Smarty version 2.6.22, created on 2014-03-01 16:15:21
         compiled from admin/view_home_content.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'admin/view_home_content.tpl', 10, false),)), $this); ?>
	<form action="admin.php?view=admin_home&action=<?php echo $this->_tpl_vars['action']; ?>
" name="edit_article" enctype="multipart/form-data" method="post">
	<table border="0" width="100%" >
	<tr class="form_tmpl_2"> 
	 	<td align="right" valign="top" width="18%"><strong> Title  </strong></td> 	
		<td valign="top" width="52%"> <?php echo $this->_tpl_vars['article_detail'][0]['article_title']; ?>
</td>
  	 	<td valign="top"><div id="title"></div></td>	 
	</tr>
	<tr class="form_tmpl_2"> 
		<td align="right" valign="top"><strong> Description </strong></td> 
		<td valign="top"><?php echo ((is_array($_tmp=$this->_tpl_vars['article_detail'][0]['article_desc'])) ? $this->_run_mod_handler('truncate', true, $_tmp, '150') : smarty_modifier_truncate($_tmp, '150')); ?>
</td>
		<td valign="top"><div id="desc"></div></td>		
	</tr>

	<tr class="form_tmpl_2">
		<td align="right" valign="top"><strong>  Image Name </strong></td> 
  	    <td valign="top"> <?php echo $this->_tpl_vars['article_detail'][0]['article_image']; ?>
 </td>
		<td valign="top"><div id="image_browse"></div></td>
	</tr>

	<tr class="form_tmpl_2">
		<td valign="top" colspan="3" align="center"><div  style="background-image:url(other_images/<?php echo $this->_tpl_vars['article_detail'][0]['article_image']; ?>
); background-repeat:no-repeat; background-position:center; padding:2px; width:<?php echo $this->_tpl_vars['width']; ?>
px; max-width:950px; height:<?php echo $this->_tpl_vars['height']; ?>
px; ">&nbsp;</div></td>
	</tr>

	

	<tr class="form_tmpl_2">
	<td valign="top" colspan="3" align="center">
	<input type="hidden" name="album_id" value="<?php echo $this->_tpl_vars['article_detail'][0]['album_id']; ?>
" > 
	<input type="hidden" name="article_image" value="<?php echo $this->_tpl_vars['article_detail'][0]['article_image']; ?>
" > 
	 <input type="submit" name="submit" value="Edit"  /> 
	</td> 
	</tr>
	</table>
	</form>
