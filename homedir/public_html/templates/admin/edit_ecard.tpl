<div class="dv_header">Edit E-card Gallery</div>
<div style="margin:4px; border:#0099FF solid; padding:4px; vertical-align:top;">	
	<form action="admin.php?view=ecard_gallery&action=edit_gallery" name="edit_gallery" enctype="multipart/form-data" method="post">
	<table border="0" width="100%" >
	<tr class="form_tmpl_2"> 
	 	<td align="right" valign="top" width="18%"><strong> Title  </strong></td> 	
		<td valign="top" width="52%"> <input type="text" size="50"  name="title" value="{$gallery_data[0].ad_title}"  /> </td>
  	 	<td valign="top"><div id="title"></div></td>	 
	</tr>
	<tr class="form_tmpl_2"> 
		<td align="right" valign="top"><strong> Description </strong></td> 
		<td valign="top"> <textarea name="desc" rows="8" cols="75" >{$gallery_data[0].ad_desc}</textarea> </td>
		<td valign="top"><div id="desc"></div></td>		
	</tr>
	<tr class="form_tmpl_2">	
		<td align="right" valign="top"><strong>Album Name </strong> </td> 
		<td valign="top"> <input type="text" name="type" size="50" value="{$gallery_data[0].album_title}"  readonly="1" /> 	</td>
		<td valign="top"><div id="type"></div></td>
	</tr>

	<tr class="form_tmpl_2">
		<td align="right" valign="top"><strong>  {$browse_title}</strong></td> 
  	    <td valign="top"> <input type="file" size="50" name="image_browse" value="" /> 
		<td valign="top"><div id="image_browse"></div></td>
	</tr>
	<tr class="form_tmpl_2">
	<td valign="top" colspan="3" align="center">
	<input type="hidden" name="ad_id" value="{$gallery_data[0].ad_id}" > 
	<input type="hidden" name="gal_type" value="{$gal_title}" > 
	<input type="hidden" name="ad_data" value="{$gallery_data[0].ad_data}" > 
	 <input type="submit" name="submit" value="Save" onClick="return valid_edit_gallery(document.edit_gallery);" /> 
	 <input type="button" name="cancel" value="cancel" onClick="javascript:history.back();"  />
	</td> 
	</tr>
	</table>
	</form>
</div>	
