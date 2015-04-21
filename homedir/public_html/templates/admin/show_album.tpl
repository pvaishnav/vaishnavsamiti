<div class="box_data" >
	<div class="dv_header">Show Gallery</div>

<div style="margin:4px; border:#0099FF solid; padding:4px; vertical-align:top;">	
	<form action="admin.php?view=album&action=add_album" name="add_album" enctype="multipart/form-data" method="post">
	<table  border="0" >
    <tr> 
		<td >Gallery Title : <input type="text" name="title" value=""   /> </td>
		<td >{* Album Type : 
		 <select name="type" style="width:175px;" >
		<option value="0" >--Select--</option>
		{section name=type loop=$data}
			<option value="{$data[$smarty.section.type.index][0]}"   >
				{$data[$smarty.section.type.index][1]}
			</option>
		{/section} 

	</select> *}<input type="hidden" name="type" value="2" />   </td>		
		<td > Gallery Image :  <input type="file" name="image_browse" value="" />  </td>

	</tr>
	<tr> 
		<td ><div id="title"></div> </td>   
		<td > <div id="type"></div> </td>	
		<td > <div id="image_browse"></div> </td>
	</tr>
	 <tr>
           <td valign="top" colspan="3" >Description 		   
		    <textarea name="desc" rows="10" cols="75" ></textarea> </td>

    </tr>

	<tr>	
		

</tr>

	<tr>


	</tr>
	
		
	<tr> 
	<td valign="top" colspan="3" align="center"> 
	<input type="submit" name="submit" value="Add Gallery" onClick="return valid_add_album(document.add_album);" /> </td> 
	</tr>
	</table>
	</form>
</div>	

		<div class="dv_data">
		<table border="0" cellpadding="2" cellspacing="2" width="100%" >
		<tr class="header" > <th width="6%"> # </th> <th width="25%"> Title</th> <th> Description </th>
		<th width="10%"> Created </th> <th width="14%"> Type </th> <th>Status </th> <th width="10%"> Action </th>
		</tr>
		{section name=data loop=$album_detail}		
		<tr class="data"> 
			<td valign="top"> {$smarty.section.data.index+1}</td> 
			<td valign="top"> {$album_detail[$smarty.section.data.index].album_title|truncate:30:'...':TRUE}</td> 
			<td valign="top"> {$album_detail[$smarty.section.data.index].album_desc|strip_tags|truncate:50:'...':TRUE}</td> 
			<td valign="top"> {$album_detail[$smarty.section.data.index].album_created}</td> 
			<td valign="top"> {$album_detail[$smarty.section.data.index].cat_name}</td> 
			<td valign="top"> 
			<a href="admin.php?view=album&action=set_album&album_id={$album_detail[$smarty.section.data.index].album_id}&set=
			{if $album_detail[$smarty.section.data.index].album_status=='Y'}N{else}Y{/if}">
			{if $album_detail[$smarty.section.data.index].album_status=='Y'}Y{else}N{/if}</a> </td> 
			
			<td valign="top" > 
		<form name="del_form" method="post" enctype="multipart/form-data" action="admin.php?view=album&action=del_album"> 
		<a href="admin.php?view=album&action=edit_album&album_id={$album_detail[$smarty.section.data.index].album_id}">Edit</a> 
		| 
		<input type="hidden" name="del_id" id="del_id" value="" />
		 <a href="#" onclick="del_album(document.del_form,{$album_detail[$smarty.section.data.index].album_id});">Del</a>
		 </form>
		 {*
		 <a href="admin.php?view=album&action=del_album&album_id={$album_detail[$smarty.section.data.index].album_id}">Del</a>
		*}
		 	</td> 
		</tr>
		{/section}
		{if $smarty.section.data.total == 0}
		<tr class="data"> 
		<td valign="top" colspan="10"> No Current Record </td></tr>
		{/if}					
		
		</table>
		</div>
	{if $show_page}
	<div class="dv_footer"> {$page_links}</div>
	{/if}
	
</div>
