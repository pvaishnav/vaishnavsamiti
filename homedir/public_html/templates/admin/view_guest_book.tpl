	
<div class="dv_data">
		<table border="0" cellpadding="2" cellspacing="2" width="100%" >
		<tr class="header" > <th width="6%"> # </th> 
        <th width="20%">Student Name</th>
        <th width="20%"> Father Name </th>
         <th> Address </th>
		<th width="10%"> Created </th>  
		<th width="10%"> Action </th>
		</tr>
		{section name=data loop=$guest_detail}		
		<tr class="data"> 
			<td valign="top"> {$smarty.section.data.index+1}</td> 
			<td valign="top"> {$guest_detail[data].sname|truncate:30:'...':TRUE}</td> 
			<td valign="top"> {$guest_detail[data].fname|truncate:30:'...':TRUE}</td> 
			<td valign="top"> {$guest_detail[data].current_address|strip_tags|truncate:50:'...':TRUE}</td> 
			<td valign="top"> {$guest_detail[data].entry_date}</td> 
			<td valign="top" > 
			<a href="admin.php?view=admin_home&action=view_guest&view_id={$guest_detail[data].id}">View</a> 
				| 
		 <a href="admin.php?view=admin_home&action=view_guest_book&del={$guest_detail[data].id}">Del</a>

		 	</td> 
		</tr>
		{/section}
		{if $smarty.section.data.total == 0}
		<tr class="data"> 
		<td valign="top" colspan="10"> No Current Record </td></tr>
		{/if}					
		
		</table>
		</div>	
