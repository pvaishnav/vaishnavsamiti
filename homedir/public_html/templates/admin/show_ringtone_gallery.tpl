<div class="box_data" >
	<div class="dv_header">Ringtone Gallery</div>
		<div style="margin:4px; border:#0099FF solid; padding:4px; vertical-align:top;">	
			<form action="admin.php?view=ringtone_gallery&action=add_ringtone_gallery" name="add_ringtone" 
			enctype="multipart/form-data" method="post">
			<table border="0" >
			 
            <tr> 
				<td align="left"> Title :  <input type="text" name="title" value=""  />  </td> 
				
				<td align="left"> Album Name : 
				<select name="album_id" style="width:175px;" >
				<option value="0" >--Select--</option>
				{section name=data loop=$rintoneAlbums}
					<option value="{$rintoneAlbums[$smarty.section.data.index][0]}"   >
						{$rintoneAlbums[$smarty.section.data.index][1]|truncate:25:'...'}
					</option>
				{/section} 
		
			</select> 
				</td> 
				<td align="left"> Album Ringtone : <input type="file" name="music_browse"  /> </td>
			</tr>
			<tr>
			<td ><div id="title"></div></td>
			
			<td ><div id="album_id"></div></td>
			<td ><div id="music_browse"></div></td>
			</tr>	
			<tr>
			<tr>
           <td valign="top"  colspan="4">Description <textarea name="desc" rows="10" cols="75" ></textarea> </td><td valign="top"><div id="desc"></div></td>
           </tr> 
			<td colspan="3" align="center"> <input type="submit" name="submit" value="Add Ringtone" onClick="return valid_add_ringtone(document.add_ringtone);" /> </td> </tr>
			</table>
			</form>
		</div>	

		<div class="dv_data">
		<table border="0" cellpadding="2" cellspacing="2" width="100%" >
			<tr class="header" > 
			<th width="4%"> # </th> 
			<th width="20%"> Song </th>
			<th width="20%"> Title</th> 
			<th > Description </th> 
			<th width="20%"> Album </th> 
			<th>Status </th> 
			<th width="10%"> Action </th>
			</tr>
		
	{section name=data loop=$ringtone_album_detail}		
	<tr class="data"> 
		<td valign="top"> {$smarty.section.data.index+1}</td> 
		<td valign="top"> {$ringtone_album_detail[$smarty.section.data.index].ad_data}</td> 
		<td valign="top"> {$ringtone_album_detail[$smarty.section.data.index].ad_title|truncate:50:'...':TRUE}</td> 
		<td valign="top"> {$ringtone_album_detail[$smarty.section.data.index].ad_desc|truncate:30:'...':TRUE}</td> 
		<td valign="top"> {$ringtone_album_detail[$smarty.section.data.index].album_title|truncate:30:'...':TRUE}</td> 
		
				<td valign="top"> 
			<a href="admin.php?view=ringtone_gallery&action=set_gallery&ringtone_id={$ringtone_album_detail[$smarty.section.data.index].ad_id}&set=
			{if $ringtone_album_detail[$smarty.section.data.index].ad_status=='Y'}N{else}Y{/if}">
			{if $ringtone_album_detail[$smarty.section.data.index].ad_status=='Y'}Y{else}N{/if}</a> </td> 

		<td valign="top"> 
	<form name="del_form" method="post" enctype="multipart/form-data" action="admin.php?view=ringtone_gallery&action=del_gallery" >
				 <a href="admin.php?view=ringtone_gallery&action=edit_gallery&ringtone_id={$ringtone_album_detail[$smarty.section.data.index].ad_id}">Edit</a> 

		| 
		<input type="hidden" name="del_id" id="del_id" value="" />
		
		 <a href="#" onclick="del_gallery({$ringtone_album_detail[$smarty.section.data.index].ad_id});">Del</a>
		 </form>
		</td> 

		
		
	</tr>
	{/section}		
	{if $smarty.section.data.total ==0}
	<tr class="data"> 
		<td valign="top" colspan="10"> No Current Record </td></tr>
	{/if}					
		</table>
		</div>
	{if $show_page}
	<div class="dv_footer"> {$page_links}</div>
	{/if}
	
	
</div>
