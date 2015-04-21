<div class="box_data" >
	<div class="dv_header">News</div>

<div style="margin:4px; border:#0099FF solid; padding:4px; vertical-align:top;">	
	<form action="admin.php?view=news&action=add_news" name="add_news" enctype="multipart/form-data" method="post">
	<table border="0" >
	 
    <tr> 
		<td align="left"> Title : <input type="text" size="30" name="title" value=""  />  </td> 
		<td align="left"> News Image : <input type="file" name="image_browse" value="" /></td>  </tr>
	<tr>
	<td valign="top"><div id="title"></div></td>
	<td valign="top" colspan="3"><div id="image_browse"></div></td>
	</tr>	
	<tr>
           <td valign="top"  colspan="4">Description <textarea name="desc" rows="10" cols="75" ></textarea> </td><td valign="top"><div id="desc"></div></td>
     </tr>
	<tr>
	<td align="center" colspan="3" > 
	<input type="hidden" value="L" name="imagePosition" checked="checked" />
	<input type="hidden" value="R" name="imagePosition"  />	
	<input type="hidden" name="article_type" value="{$article_type}"  />
	<input type="submit" name="submit" value="Add News" onClick="return valid_add_news(document.add_news);" /> </td> </tr>
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
		{section name=data loop=$news_detail}		
		<tr class="data"> 
			<td valign="top"> {$smarty.section.data.index+1}</td> 
			<td valign="top"> {$news_detail[$smarty.section.data.index].article_title|truncate:30:'...':TRUE}</td> 
			<td valign="top"> {$news_detail[$smarty.section.data.index].article_desc|strip_tags|truncate:50:'...':TRUE}</td> 
			<td valign="top"> {$news_detail[$smarty.section.data.index].article_created}</td> 
			
			<td valign="top"> 
			<a href="admin.php?view=news&action=set_show&news_id={$news_detail[$smarty.section.data.index].article_id}&set=
			{if $news_detail[$smarty.section.data.index].article_show=='Y'}N{else}Y{/if}">
			{if $news_detail[$smarty.section.data.index].article_show=='Y'}Y{else}N{/if}</a> 
			</td> 
			
			<td valign="top"> 
			<a href="admin.php?view=news&action=set_news&news_id={$news_detail[$smarty.section.data.index].article_id}&set=
			{if $news_detail[$smarty.section.data.index].article_status=='Y'}N{else}Y{/if}">
			{if $news_detail[$smarty.section.data.index].article_status=='Y'}Y{else}N{/if}</a> </td> 
			
			
			<td valign="top"> 
			<form name="del_form" method="post" enctype="multipart/form-data" action="admin.php?view=news&action=del_news">
			<a href="admin.php?view=news&action=edit_news&news_id={$news_detail[$smarty.section.data.index].article_id}">Edit</a> 
			 |
		<input type="hidden" name="del_id" id="del_id" value="" />
		 <a href="#" onclick="del_gallery({$news_detail[$smarty.section.data.index].article_id});">Del</a>
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
