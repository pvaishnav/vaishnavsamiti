<div style="margin:4px; border:#0099FF solid; padding:4px; vertical-align:top;">	
	<form action="admin.php?view=album&action=edit_album" name="edit_album" enctype="multipart/form-data" method="post">
	<table border="0" width="100%" >
	<tr class="form_tmpl_2"> 
	 	<td align="right" valign="top" width="15%"><strong> Title  </strong></td> 	
		<td valign="top" width="65%"> <input type="text" name="title" size="50" value="{$album_data[0].album_title}"  /> </td>
  	 	<td valign="top"><div id="title"></div></td>	 
	</tr>
	<tr class="form_tmpl_2"> 
		<td align="right" valign="top"><strong> Description </strong></td> 
		<td valign="top"> <textarea name="desc" rows="8" cols="75" >{$album_data[0].album_desc}</textarea> </td>
		<td valign="top"><div id="desc"></div></td>		
	</tr>
	<tr class="form_tmpl_2">	
		<td align="right" valign="top"><strong> Album Type </strong> </td> 
		<td valign="top"> <input type="text" name="type" size="50" value="{$album_data[0].cat_name}" readonly="1"  /> 
		</td>
		<td valign="top"><div id="type"></div></td>
	</tr>

	<tr class="form_tmpl_2">
		<td align="right" valign="top"><strong>  Album Image </strong></td> 
  	    <td valign="top"> <input type="file" size="50" name="image_browse" value="{$album_data[0].album_image} " /> 
		<td valign="top"><div id="image_browse"></div></td>
	</tr>

	<tr class="form_tmpl_2">
		<td valign="top" colspan="3" align="center"><div  style="background-image:url(album_images/{$album_data[0].album_image}); background-repeat:no-repeat; background-position:center; padding:2px; width:{$width}px; max-width:950px; height:{$height}px; ">&nbsp;</div></td>
	</tr>

	

	<tr class="form_tmpl_2">
	<td valign="top" colspan="3" align="center">
	<input type="hidden" name="album_id" value="{$album_data[0].album_id}" > 
	<input type="hidden" name="album_image" value="{$album_data[0].album_image}" > 
	 <input type="submit" name="submit" value="Save" onClick="return valid_edit_album(document.edit_album);" /> 
	 <input type="button" name="cancel" value="cancel" onClick="javascript:history.back();"  />
	</td> 
	</tr>
	</table>
	</form>
</div>	
