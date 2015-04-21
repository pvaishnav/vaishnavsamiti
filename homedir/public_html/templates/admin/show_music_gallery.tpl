<div class="box_data" >
	<div class="dv_header">Music Gallery</div>
		<div style="margin:4px; border:#0099FF solid; padding:4px; vertical-align:top;">	
			<form action="admin.php?view=music_gallery&action=add_music_gallery" name="add_song" 
			enctype="multipart/form-data" method="post">
			<table border="0 " >
			 
            <tr> 
				<td> Title : <input type="text" name="title" value=""  /> </td> 
				<td > Album Name : 
				<select name="album_id" style="width:175px;" >
				<option value="0" >--Select--</option>
				{section name=data loop=$musicAlbums}
					<option value="{$musicAlbums[$smarty.section.data.index][0]}"   >
						{$musicAlbums[$smarty.section.data.index][1]|truncate:25:'...'}
					</option>
				{/section} 
		
				</select> 
			</td> 
				<td > Album Song : <input type="file" name="music_browse"  /> </td> 
			</tr>
			<tr>
			<td ><div id="title"></div></td>
			<td ><div id="album_id"></div></td>
			<td ><div id="music_browse"></div></td>
			</tr>	

		<tr>
           <td valign="top"  colspan="4">Description  <textarea name="desc" rows="10" cols="75" ></textarea> </td>
		   <td valign="top"><div id="desc"></div></td>
           </tr>
		   
		   
			<tr>
			<td  colspan="3" align="center"> <input type="submit" name="submit" value="Add Song" onClick="return valid_add_song(document.add_song);" /> </td> </tr>
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
		
	{section name=data loop=$music_album_detail}		
	<tr class="data"> 
		<td valign="top"> {$smarty.section.data.index+1}</td> 
		<td valign="top"> {$music_album_detail[$smarty.section.data.index].ad_data}</td> 
		<td valign="top"> {$music_album_detail[$smarty.section.data.index].ad_title|truncate:50:'...':TRUE}</td> 
		<td valign="top"> {$music_album_detail[$smarty.section.data.index].ad_desc|strip_tags|truncate:30:'...':TRUE}</td> 
		<td valign="top"> {$music_album_detail[$smarty.section.data.index].album_title|truncate:30:'...':TRUE}</td> 
		<td valign="top"> 
			<a href="admin.php?view=music_gallery&action=set_gallery&song_id={$music_album_detail[$smarty.section.data.index].ad_id}&set=
			{if $music_album_detail[$smarty.section.data.index].ad_status=='Y'}N{else}Y{/if}">
			{if $music_album_detail[$smarty.section.data.index].ad_status=='Y'}Y{else}N{/if}</a> </td> 

		<td valign="top"> 
		<form name="del_form" method="post" enctype="multipart/form-data" action="admin.php?view=music_gallery&action=del_gallery">
		 <a href="admin.php?view=music_gallery&action=edit_gallery&song_id={$music_album_detail[$smarty.section.data.index].ad_id}">Edit</a> 
		| 
		<input type="hidden" name="del_id" id="del_id" value="" />
		
		 <a href="#" onclick="del_gallery({$music_album_detail[$smarty.section.data.index].ad_id});">Del</a>
		 </form>

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
