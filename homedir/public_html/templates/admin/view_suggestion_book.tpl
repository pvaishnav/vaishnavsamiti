	
<div class="dv_data">
		<table border="0" cellpadding="2" cellspacing="2" width="100%" >
		<tr class="header" > <th width="6%"> # </th> 
        <th width="20%"> Name</th>
        <th width="20%"> Email </th>
         <th> Description </th>
		<th width="10%"> Created </th>  
	{*	<th>Status </th>  *}
		
		<th width="10%"> Action </th>
		</tr>
		{section name=data loop=$sugge_detail}		
		<tr class="data"> 
			<td valign="top"> {$smarty.section.data.index+1}</td> 
			<td valign="top"> {$sugge_detail[$smarty.section.data.index].gname|truncate:30:'...':TRUE}</td> 
            <td valign="top"> {$sugge_detail[$smarty.section.data.index].email|truncate:30:'...':TRUE}</td> 
			<td valign="top"> {$sugge_detail[$smarty.section.data.index].descript|strip_tags|truncate:50:'...':TRUE}</td> 
			<td valign="top"> {$sugge_detail[$smarty.section.data.index].create_date}</td> 
{*			<td valign="top"> 
			<a href="admin.php?view=admin_home&action=view_guest_book&album_id={$album_detail[$smarty.section.data.index].album_id}&set=
			{if $album_detail[$smarty.section.data.index].album_status=='Y'}N{else}Y{/if}">
			{if $album_detail[$smarty.section.data.index].album_status=='Y'}Y{else}N{/if}</a> </td> 
*}			
			<td valign="top" > 
		<form name="del_form" method="post" enctype="multipart/form-data" action="admin.php?view=admin_home&action=del_suggestion"> 
		<a href="admin.php?view=admin_home&action=view_suggestion&book_id={$sugge_detail[$smarty.section.data.index].book_id}">View</a> 
		| 
		<input type="hidden" name="del_id" id="del_id" value="" />
		 <a href="#" onclick="del_suggestion({$sugge_detail[$smarty.section.data.index].book_id});">Del</a>
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
