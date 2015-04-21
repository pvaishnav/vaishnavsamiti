<div class="dv_header">Edit Menu</div>
<div style="margin:4px; border:#0099FF solid; padding:4px; vertical-align:top;">	
	<form action="admin.php?view=menu&action=edit_menu" name="edit_menu" enctype="multipart/form-data" method="post">
	<table border="0" width="100%" >
	<tr class="form_tmpl_2"> 
	 	<td align="right" valign="top" width="15%"><strong> Title  </strong></td> 	
		<td valign="top" width="65%"> <input type="text" size="50" name="title" value="{$menu_data[0].menu_title}"  /> </td>
  	 	<td valign="top"><div id="title"></div></td>	 
	</tr>
	<tr class="form_tmpl_2"> 
		<td align="right" valign="top"><strong> Description </strong></td> 
		<td valign="top"> <textarea name="desc" rows="8" cols="75" >{$menu_data[0].menu_desc}</textarea> </td>
		<td valign="top"><div id="desc"></div></td>		
	</tr>
	{*<tr class="form_tmpl_2">	
		<td align="right" valign="top"><strong>Image Position </strong> </td> 
		<td valign="top"> 
			<input type="radio" value="L" name="imagePosition" checked="checked" />Left
	<input type="radio" value="R" name="imagePosition" 
	{if $menu_data[0].image_position=='R'} checked="checked" {/if} />Right	
 
		</td>
		<td valign="top"><div id="type"></div></td>
	</tr>*}

	<tr class="form_tmpl_2">
		<td align="right" valign="top"><strong>  Menu Image </strong></td> 
  	    <td valign="top"> <input type="file" size="50" name="image_browse" value="" /> 
		<td valign="top"><div id="image_browse"></div></td>
	</tr>
	
		<tr class="form_tmpl_2">
		<td valign="top" colspan="3" align="center"><div  style="background-image:url(menu_images/{$menu_data[0].menu_image}); background-repeat:no-repeat; background-position:center; padding:2px; width:{$width}px; max-width:950px; height:{$height}px; ">&nbsp;</div></td>
	</tr>



	<tr class="form_tmpl_2">
	<td valign="top" colspan="3" align="center">
	<input type="hidden" name="menu_id" value="{$menu_data[0].menu_id}" >
	<input type="hidden" name="menu_image" value="{$menu_data[0].menu_image}" > 
 
	 <input type="submit" name="submit" value="Save" onClick="return valid_edit_menu(document.edit_menu);" /> 
	 <input type="button" name="cancel" value="cancel" onClick="javascript:history.back();"  />
	</td> 
	</tr>
	</table>
	</form>
</div>	
