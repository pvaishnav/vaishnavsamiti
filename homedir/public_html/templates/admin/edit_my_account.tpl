<div style="margin:4px;  padding:4px; vertical-align:top;">
<form action="admin.php?view=admin_home&action=view_my_account" name="edit_account" enctype="multipart/form-data" method="post">
	<table border="0" width="100%" >

	<tr class="form_tmpl_2"> 
	 	<td align="right" valign="top" width="18%"><strong> Title  </strong></td> 	
		<td valign="top" width="40%"> 
		<input type="text" name="title" readonly="1" size="30"  value="{$account_detail[0].user_name}"  /> 
		</td>
  	 	<td valign="top"><div id="title"></div></td>	 
	</tr>

	<tr class="form_tmpl_2"> 
	 	<td align="right" valign="top" width="18%"><strong> Old Password</strong></td> 	
		<td valign="top" width="40%"> <input type="text" size="30"  name="old_pass"  value=""  /> </td>
  	 	<td valign="top"><div id="old_pass">{$err}</div></td>	 
	</tr>

	<tr class="form_tmpl_2"> 
	 	<td align="right" valign="top" width="18%"><strong> New Password </strong></td> 	
		<td valign="top" width="40%"> <input type="text" size="30"  name="new_pass"  value=""  /> </td>
  	 	<td valign="top"><div id="new_pass"></div></td>	 
	</tr>
	<tr class="form_tmpl_2"> 
	 	<td align="right" valign="top" width="18%"><strong> Confirm Password </strong></td> 	
		<td valign="top" width="40%"> <input type="text" size="30"  name="conf_pass"  value=""  /> </td>
  	 	<td valign="top"><div id="conf_pass"></div></td>	 
	</tr>
    
   
	<tr class="form_tmpl_2">
	<td valign="top" colspan="3" align="center">
	<input type="hidden" name="user_id" value="{$account_detail[0].user_id}" > 
	 <input type="submit" name="submit" value="Save" onClick="return valid_edit_account(document.edit_account);" /> 
	 <input type="button" name="cancel" value="cancel" onClick="javascript:history.back();"  />
	</td> 
	</tr>
	</table>
	</form>


<form action="admin.php?view=admin_home&action=view_my_account" name="image_account" enctype="multipart/form-data" method="post">
	<table border="0" width="100%" >

<tr class="form_tmpl_2">
    <td align="right" valign="top" width="18%"><strong> Banner </strong></td> 
    <td colspan="2"> <input type="file" size="30"  name="image_browse" value="" /> (470 * 146) </td>
    </tr>
	<tr class="form_tmpl_2">
	<td valign="top" colspan="3" align="center">
	<input type="hidden" name="head_image" value="{$account_detail[0].head_image}" > 
	 <input type="submit" name="submit_image" value="Save" /> 
	</td> 
	</tr>
	</table>
	</form>

<form action="admin.php?view=admin_home&action=view_my_account" name="edit_account" enctype="multipart/form-data" method="post">
	<table border="0" width="100%" >

	<tr class="form_tmpl_2">
    <td align="right" valign="top" width="18%"><strong> Ad Banner Top </strong></td> 
    <td colspan="2"> <input type="file" size="30"  name="adtop" value="" /> (430 * 115) </td>
    </tr>
    <tr class="form_tmpl_2">
    <td align="right" valign="top" width="18%"><strong> Ad Banner Bottom </strong></td>  
    <td colspan="2"> <input type="file" size="30"  name="adbottom" value="" /> (728 * 90) </td>
    </tr>
	   
	<tr class="form_tmpl_2">
	<td valign="top" colspan="3" align="center">
	<input type="hidden" name="head_top_image" value="{$account_detail[0].head_top_image}" > 
    <input type="hidden" name="head_bot_image" value="{$account_detail[0].head_bot_image}" > 
	 <input type="submit" name="submit_ad" value="Save Ad" onClick="return valid_edit_account(document.edit_account);" /> 
	</td> 
	</tr>
	</table>
	</form>
	
   <form action="admin.php?view=admin_home&action=view_my_account" name="image_account" enctype="multipart/form-data" method="post">
	<table border="0" width="100%" >

	<tr class="form_tmpl_2">
    <td align="right" valign="top" width="18%"><strong> Google Ad On </strong></td> 
    <td colspan="2"> <input type="checkbox"  name="chkgoogle" value="" {if $account_detail[0].googlead==1} checked="checked" {/if} /></td>
    </tr>
    
    <tr class="form_tmpl_2">
    <td align="right" valign="top" width="18%"><strong> Ad Banner Contant Top </strong></td> 
    <td colspan="2"> <input type="file" size="30"  name="adleft" value="" /> (468 * 60) </td>
    </tr>
    <tr class="form_tmpl_2">
    <td align="right" valign="top" width="18%"><strong> Ad Banner Right </strong></td>  
    <td colspan="2"> <input type="file" size="30"  name="adright" value="" /> (width:170 * height:choice) </td>
    </tr>
    
	<tr class="form_tmpl_2">
	<td valign="top" colspan="3" align="center">
    <input type="hidden" name="head_left_image" value="{$account_detail[0].head_left_image}" > 
    <input type="hidden" name="head_right_image" value="{$account_detail[0].head_right_image}" > 
	 <input type="submit" name="submit_google" value="google Ad" /> 
	</td> 
	</tr>
	</table>
	</form>

</div>