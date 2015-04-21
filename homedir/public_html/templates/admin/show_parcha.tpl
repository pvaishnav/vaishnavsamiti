<div class="box_data" >
	<div class="dv_header">Parcha</div>

<div style="margin:4px; border:#0099FF solid; padding:4px; vertical-align:top;">	
	<form action="admin.php?view=parcha&action=add_parcha" name="add_parcha" enctype="multipart/form-data" method="post">
	<table border="0" >
	 
    <tr> 
		<td > Title : <input type="text" name="title" value=""  /> </td> 
		<td >&nbsp; </td> 
		<td > Parcha Image : <input type="file" name="image_browse" value="" /></td> 
		</tr>
	<tr>
	<td ><div id="title"></div></td>
	<td ><div id="desc"></div></td>
	<td ><div id="image_browse"></div></td>
	</tr>	
	
	<tr>
        <td valign="top"  colspan="4">Description <textarea name="desc" rows="10" cols="75" ></textarea> </td>
    </tr>
	<tr>
	
	<td align="center" colspan="3"> 
	
	<input type="hidden" value="L" name="imagePosition" checked="checked" />
	<input type="hidden" value="R" name="imagePosition"  />	
	<input type="hidden" name="article_type" value="{$article_type}"  />
	<input type="submit" name="submit" value="Add Parcha" onClick="return valid_add_parcha(document.add_parcha);" /> </td> </tr>
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
		{section name=data loop=$parcha_detail}		
		<tr class="data"> 
			<td valign="top"> {$smarty.section.data.index+1}</td> 
			<td valign="top"> {$parcha_detail[$smarty.section.data.index].article_title|truncate:30:'...':TRUE}</td> 
			<td valign="top"> {$parcha_detail[$smarty.section.data.index].article_desc|strip_tags|truncate:50:'...':TRUE}</td> 
			<td valign="top"> {$parcha_detail[$smarty.section.data.index].article_created}</td> 
			
			<td valign="top"> 
			<a href="admin.php?view=parcha&action=set_show&parcha_id={$parcha_detail[$smarty.section.data.index].article_id}&set=
			{if $parcha_detail[$smarty.section.data.index].article_show=='Y'}N{else}Y{/if}">
			{if $parcha_detail[$smarty.section.data.index].article_show=='Y'}Y{else}N{/if}</a> 
			</td> 
			
			<td valign="top"> 
			<a href="admin.php?view=parcha&action=set_parcha&parcha_id={$parcha_detail[$smarty.section.data.index].article_id}&set=
			{if $parcha_detail[$smarty.section.data.index].article_status=='Y'}N{else}Y{/if}">
			{if $parcha_detail[$smarty.section.data.index].article_status=='Y'}Y{else}N{/if}</a> </td> 
			
			
			<td valign="top"> 
		<form name="del_form" method="post" enctype="multipart/form-data" action="admin.php?view=parcha&action=del_parcha">
			<a href="admin.php?view=parcha&action=edit_parcha&parcha_id={$parcha_detail[$smarty.section.data.index].article_id}">Edit</a> 
			|
		<input type="hidden" name="del_id" id="del_id" value="" />
		 <a href="#" onclick="del_gallery({$parcha_detail[$smarty.section.data.index].article_id});">Del</a>
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
