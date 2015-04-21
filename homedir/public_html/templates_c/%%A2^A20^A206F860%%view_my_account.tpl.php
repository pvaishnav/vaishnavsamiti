<?php /* Smarty version 2.6.22, created on 2013-06-28 11:08:28
         compiled from admin/view_my_account.tpl */ ?>
	<form action="admin.php?view=admin_home&action=edit_my_account" name="edit_article" enctype="multipart/form-data" method="post">
	<table border="0" width="100%" >
	<tr class="form_tmpl_2"> 
	 	<td align="right" valign="top" width="18%"><strong> User Name  </strong></td> 	
		<td valign="top" width="52%"> <?php echo $this->_tpl_vars['account_detail'][0]['user_name']; ?>
</td>
  	 	<td valign="top"><div id="title"></div></td>	 
	</tr>
    
    <tr class="form_tmpl_2"><td colspan="3">&nbsp;</td></tr>
    
    <tr class="form_tmpl_2"> 
	 	<td align="right" valign="top" width="18%"><strong> Banner  </strong></td> 	
		<td valign="top" align="center">
			<img src="other_images/<?php echo $this->_tpl_vars['account_detail'][0]['head_image']; ?>
" width="80px" height="80px" alt="<?php echo $this->_tpl_vars['account_detail'][0]['head_image']; ?>
" />
			</td> 
  	 	<td valign="top"><div id="title"></div></td>	 
	</tr>
     
    <tr class="form_tmpl_2"><td colspan="3">&nbsp;</td></tr>
    
    <tr class="form_tmpl_2"> 
	 	<td align="right" valign="top" width="18%"><strong> Top Ad Image  </strong></td> 	
		<td valign="top" align="center">
			<img src="other_images/<?php echo $this->_tpl_vars['account_detail'][0]['head_top_image']; ?>
" width="80px" height="80px" alt="<?php echo $this->_tpl_vars['account_detail'][0]['head_image']; ?>
" />
			</td> 
  	 	<td valign="top"><div id="title"></div></td>	 
	</tr> 
    <tr class="form_tmpl_2"><td colspan="3">&nbsp;</td></tr>
    
    <tr class="form_tmpl_2"> 
	 	<td align="right" valign="top" width="18%"><strong> Bottom Ad Image  </strong></td> 	
		<td valign="top" align="center">
			<img src="other_images/<?php echo $this->_tpl_vars['account_detail'][0]['head_bot_image']; ?>
" width="80px" height="80px" alt="<?php echo $this->_tpl_vars['account_detail'][0]['head_image']; ?>
" />
			</td> 
  	 	<td valign="top"><div id="title"></div></td>	 
	</tr>
	<tr class="form_tmpl_2">
	<td valign="top" colspan="3" align="center">
	<input type="hidden" name="user_id" value="<?php echo $this->_tpl_vars['account_detail'][0]['user_id']; ?>
" > 
	 <input type="submit" name="submit" value="Edit"  /> 
	</td> 
	</tr>
	</table>
	</form>
