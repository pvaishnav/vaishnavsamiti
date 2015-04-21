<div class="box_data" >
	<div class="dv_header">Upload Other Image</div>

<div style="margin:4px; border:#0099FF solid; padding:4px; vertical-align:top;">	
	<form action="admin.php?view=other_image&action=show_other_image" name="add_image" enctype="multipart/form-data" method="post">
	<table border="0" >
  
	 <tr> 
	<th align="left"> Other Image </th> <th align="left">&nbsp;  </th> </tr>
	
	<tr>
	 <td valign="top"> <input type="file" name="image_browse" value="" /> 
	 </td>
	<td valign="top"> 
	<input type="hidden" name="article_type" value="{$article_type}"  />
	<input type="submit" name="submit" value="Save" onClick="return valid_add_other_image(document.add_image);" /> </td>
     </tr>
     
    <tr>
	<td valign="top"><div id="image_browse"></div></td>
	</tr>	
	</table>
	</form>
</div>	

		<div class="dv_data">
		<table border="0" cellpadding="2" cellspacing="2" width="100%" >
		<tr class="header" > <th width="6%"> # </th> <th width="30%"> Image </th> <th> Image Name </th>
		<th width="10%"> Action </th>
		</tr>
		{section name=data loop=$other_img}		
		<tr class="data"> 
			<td valign="top"> {$smarty.section.data.index+1}</td> 
			<td valign="top" align="center">
			<img src="otherimages/{$other_img[data].img_path}" width="80px" height="80px" />
			</td> 
			<td valign="top">{$other_img[data].img_path|truncate:50:'...':TRUE} </td> 

			<td valign="top">
		<form name="del_form" method="post" enctype="multipart/form-data" action="admin.php?view=other_image&action=del_other_image">
		<input type="hidden" name="del_id" id="del_id" value="" />
		
		 <a href="#" onclick="del_gallery({$other_img[$smarty.section.data.index].id});">Delete</a>
		 </form>

			
		{*	<a href="admin.php?view=other_image&action=del_other_image&id={$other_img[data].id}">Delete</a> *}
			
			</td> 
		</tr>
		{/section}	
			{if $smarty.section.data.total ==0}
	<tr class="data"> 
		<td valign="top" colspan="6"> No Current Record </td></tr>
	{/if}					
	
		</table>
		</div>
	{if $show_page}
	<div class="dv_footer"> {$page_links}</div>
	{/if}
	
	
</div>
