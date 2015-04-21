<div class="box_data" >
	<div class="dv_header">Menu</div>

<div style="margin:4px; border:#0099FF solid; padding:4px; vertical-align:top;">	
	<form action="admin.php?view=menu&action=add_menu" name="add_menu" enctype="multipart/form-data" method="post">
	<table border="0" >
	 <tr>
           <td valign="top"  colspan="4"><span align="left" style="vertical-align:top">Description</span> <textarea name="desc" rows="4" cols="70" ></textarea> </td><td valign="top"><div id="desc"></div></td>
           </tr>
    <tr> 
		<th align="left"> Title  </th> 
		<th align="left" >&nbsp; </th> 
		<th align="left"> Menu Image </th> <th align="left">&nbsp;  </th> </tr>
	<tr>
	<td valign="top"><div id="title"></div></td>
	<td valign="top"><div id="image_browse"></div></td>
	</tr>	
	<tr>
	<td valign="top"> <input type="text" name="title" value=""  /> </td>
	
	<td valign="top"> 
	
	<input type="hidden" value="L" name="imagePosition" checked="checked" />
	<input type="hidden" value="R" name="imagePosition"  />	
	</td>
	 <td valign="top"> <input type="file" name="image_browse" value="" /> 
	 </td>
	<td valign="top"> 
	<input type="hidden" name="article_type" value="{$article_type}"  />
	<input type="submit" name="submit" value="Add Menu" onClick="return valid_add_menu(document.add_menu);" /> </td> </tr>
	</table>
	</form>
</div>	

		<div class="dv_data">
		<table border="0" cellpadding="2" cellspacing="2" width="100%" >
		<tr class="header" > <th width="6%"> # </th> <th width="25%"> Title</th> <th> Description </th>
		<th width="10%"> Created </th> 
		<th width="8%">Show </th>
		<th width="8%">Status </th>  <th width="10%"> Action </th>
		</tr>
		{section name=data loop=$menu_detail}		
		<tr class="data"> 
			<td valign="top"> {$smarty.section.data.index+1}</td> 
			<td valign="top"> {$menu_detail[$smarty.section.data.index].article_title|truncate:30:'...':TRUE}</td> 
			<td valign="top"> {$menu_detail[$smarty.section.data.index].article_desc|truncate:50:'...':TRUE}</td> 
			<td valign="top"> {$menu_detail[$smarty.section.data.index].article_created}</td> 
			
			<td valign="top"> 
			<a href="admin.php?view=menu&action=set_show&menu_id={$menu_detail[$smarty.section.data.index].article_id}&set=
			{if $menu_detail[$smarty.section.data.index].article_show=='Y'}N{else}Y{/if}">
			{if $menu_detail[$smarty.section.data.index].article_show=='Y'}Y{else}N{/if}</a> 
			</td> 
			
			<td valign="top"> 
			<a href="admin.php?view=menu&action=set_menu&menu_id={$menu_detail[$smarty.section.data.index].article_id}&set=
			{if $menu_detail[$smarty.section.data.index].article_status=='Y'}N{else}Y{/if}">
			{if $menu_detail[$smarty.section.data.index].article_status=='Y'}Y{else}N{/if}</a> </td> 
			
			
			<td valign="top"> 
			<a href="admin.php?view=menu&action=edit_menu&menu_id={$menu_detail[$smarty.section.data.index].article_id}">Edit</a> 
			
			|<a href="admin.php?view=menu&action=del_menu&menu_id={$menu_detail[$smarty.section.data.index].article_id}">Del</a></td> 
		</tr>
		{/section}	
			{if $smarty.section.data.total ==0}
	<tr class="data"> 
		<td valign="top" colspan="7"> No Current Record </td></tr>
	{/if}					
	
		</table>
		</div>
	{if $show_page}
	<div class="dv_footer"> {$page_links}</div>
	{/if}
	
	
</div>
