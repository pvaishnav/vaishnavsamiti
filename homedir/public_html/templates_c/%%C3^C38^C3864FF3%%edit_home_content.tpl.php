<?php /* Smarty version 2.6.22, created on 2014-03-17 19:01:02
         compiled from admin/edit_home_content.tpl */ ?>
	<form action="admin.php?view=admin_home&action=<?php echo $this->_tpl_vars['action']; ?>
" name="edit_article" enctype="multipart/form-data" method="post">
	<table border="0" width="100%" >
	<tr class="form_tmpl_2"> 
	 	<td align="right" valign="top" width="18%"><strong> Title  </strong></td> 	
		<td valign="top" width="52%"> <input type="text" size="50" name="title" value="<?php echo $this->_tpl_vars['article_detail'][0]['article_title']; ?>
"  /> </td>
  	 	<td valign="top"><div id="title"></div></td>	 
	</tr>
	<tr class="form_tmpl_2"> 
		<td align="right" valign="top"><strong> Description </strong></td> 
		<td valign="top"> <textarea name="desc" rows="10" cols="75" ><?php echo $this->_tpl_vars['article_detail'][0]['article_desc']; ?>
</textarea> </td>
		<td valign="top"><div id="desc"></div></td>		
	</tr>
	
	<tr class="form_tmpl_2">
		<td align="right" valign="top"><strong> Current Image </strong></td> 
  	    <td valign="top"> <input type="text" size="50" name="cur_image" readonly="1" value="<?php echo $this->_tpl_vars['article_detail'][0]['article_image']; ?>
 " /> 
		<td valign="top"><div id="cur_image"></div></td>
	</tr>

	<tr class="form_tmpl_2">
		<td align="right" valign="top"><strong>  New Image </strong></td> 
  	    <td valign="top"> <input type="file" size="50" name="image_browse" value="" /> 
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
	<input type="hidden" name="article_id" value="<?php echo $this->_tpl_vars['article_detail'][0]['article_id']; ?>
" > 
	<input type="hidden" name="article_image" value="<?php echo $this->_tpl_vars['article_detail'][0]['article_image']; ?>
" >
	 <input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
" > 
	 <input type="submit" name="submit" value="Save" onClick="return valid_edit_article(document.edit_article);" /> 
	 <input type="button" name="cancel" value="cancel" onClick="javascript:history.back();"  />
	</td> 
	</tr>
	</table>
	</form>
