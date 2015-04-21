<div class="box_data" >
	<div class="dv_header">Menu</div>

<div style="margin:4px; border:#0099FF solid; padding:4px; vertical-align:top;">	
	<form action="admin.php?view=menu&action=add_menu" name="add_menu" enctype="multipart/form-data" method="post">
	<table border="0" >
	 
    <tr> 
		<td > Title : <input type="text" name="title" value=""  />  </td> 
		<td >&nbsp; </td> 
		<td > Menu Image :  <input type="file" name="image_browse" value="" /> </td>
		</tr>
	<tr>
	<td ><div id="title"></div></td>
	<td ><div id="image_browse"></div></td>
	</tr>	
	
	<tr>
           <td valign="top"  colspan="4">Description <textarea name="desc" rows="10" cols="75" ></textarea> </td><td valign="top"><div id="desc"></div></td>
    </tr>
		   
	<tr>
	<td align="center" colspan="3"> 
	
	<input type="hidden" value="L" name="imagePosition" checked="checked" />
	<input type="hidden" value="R" name="imagePosition"  />	
	<input type="hidden" name="article_type" value="{$article_type}"  />
	<input type="submit" name="submit" value="Add Menu" onClick="return valid_add_menu(document.add_menu);" /> </td> </tr>
	</table>
	</form>
</div>	

		<div class="dv_data">
		<table border="0" cellpadding="2" cellspacing="2" width="100%" >
		<tr class="header" > <th width="6%"> # </th> <th width="25%"> Title</th> <th> Description </th>
		<th width="10%"> Created </th> 
		<th width="5%" colspan="2">Position</th>
		<th width="8%">Show </th>
		{* <th width="8%">Status </th>   *}
		<th width="10%"> Action </th>
		</tr>
		{section name=data loop=$menu_detail}		
		<tr class="data"> 
			<td valign="top"> {$smarty.section.data.index+1}</td> 
			<td valign="top"> {$menu_detail[$smarty.section.data.index].menu_title|truncate:30:'...':TRUE}</td> 
			<td valign="top"> {$menu_detail[$smarty.section.data.index].menu_desc|strip_tags|truncate:50:'...':TRUE}</td> 
			<td valign="top"> {$menu_detail[$smarty.section.data.index].menu_created}</td> 

			<td valign="middle"> 
			{if !$smarty.section.data.first}
			<a href="admin.php?view=menu&action=change_menu_pos&change=dec&menu_id={$menu_detail[$smarty.section.data.index].menu_id}">
			<img src="templates/admin/rd-images/sort0.png" alt="{$menu_detail[$smarty.section.data.index].menu_position}" style="border:none;" />
			</a>
			{/if}
			</td> 
			<td valign="middle"> 
			{if !$smarty.section.data.last}
			<a href="admin.php?view=menu&action=change_menu_pos&change=inc&menu_id={$menu_detail[$smarty.section.data.index].menu_id}">
			<img src="templates/admin/rd-images/sort1.png" alt="{$menu_detail[$smarty.section.data.index].menu_position}" style="border:none;" />
			</a>
			{/if}
			</td> 
									
			<td valign="top"> 
			<a href="admin.php?view=menu&action=set_show&menu_id={$menu_detail[$smarty.section.data.index].menu_id}&set=
			{if $menu_detail[$smarty.section.data.index].menu_show=='Y'}N{else}Y{/if}">
			{if $menu_detail[$smarty.section.data.index].menu_show=='Y'}Y{else}N{/if}</a> 
			</td> 
			
{*			<td valign="top"> 
			<a href="admin.php?view=menu&action=set_menu&menu_id={$menu_detail[$smarty.section.data.index].menu_id}&set=
			{if $menu_detail[$smarty.section.data.index].menu_status=='Y'}N{else}Y{/if}">
			{if $menu_detail[$smarty.section.data.index].menu_status=='Y'}Y{else}N{/if}</a> </td>  *}
			
			
			<td valign="top"> 
			<a href="admin.php?view=menu&action=edit_menu&menu_id={$menu_detail[$smarty.section.data.index].menu_id}">Edit</a> 
			
			|<a href="admin.php?view=menu&action=del_menu&menu_id={$menu_detail[$smarty.section.data.index].menu_id}">Del</a></td> 
		</tr>
		{/section}	
			{if $smarty.section.data.total ==0}
	<tr class="data"> 
		<td valign="top" colspan="10"> No Current Record </td></tr>
	{/if}					
	
		</table>
		</div>
	
	
	
</div>
