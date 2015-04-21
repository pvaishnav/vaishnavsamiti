	<form action="admin.php?view=admin_home&action={$action}" name="edit_article" enctype="multipart/form-data" method="post">
	<table border="0" width="100%" >
	<tr class="form_tmpl_2"> 
	 	<td align="right" valign="top" width="18%"><strong> Title  </strong></td> 	
		<td valign="top" width="52%"> {$article_detail[0].article_title}</td>
  	 	<td valign="top"><div id="title"></div></td>	 
	</tr>
	<tr class="form_tmpl_2"> 
		<td align="right" valign="top"><strong> Description </strong></td> 
		<td valign="top">{$article_detail[0].article_desc|truncate:'150'}</td>
		<td valign="top"><div id="desc"></div></td>		
	</tr>

	<tr class="form_tmpl_2">
		<td align="right" valign="top"><strong>  Image Name </strong></td> 
  	    <td valign="top"> {$article_detail[0].article_image} </td>
		<td valign="top"><div id="image_browse"></div></td>
	</tr>

	<tr class="form_tmpl_2">
		<td valign="top" colspan="3" align="center"><div  style="background-image:url(other_images/{$article_detail[0].article_image}); background-repeat:no-repeat; background-position:center; padding:2px; width:{$width}px; max-width:950px; height:{$height}px; ">&nbsp;</div></td>
	</tr>

	

	<tr class="form_tmpl_2">
	<td valign="top" colspan="3" align="center">
	<input type="hidden" name="album_id" value="{$article_detail[0].album_id}" > 
	<input type="hidden" name="article_image" value="{$article_detail[0].article_image}" > 
	 <input type="submit" name="submit" value="Edit"  /> 
	</td> 
	</tr>
	</table>
	</form>

