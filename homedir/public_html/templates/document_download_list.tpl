<div >

  <div >
    <div><h3>We are in Documents</h3></div>

    <div>
    
     <div class="center"> 
      
      <div class="maincontent col_23">

		<table border="0" cellpadding="2" cellspacing="2" width="100%" >
		<tr class="header" style="border:1px solid #CCC"> <th width="6%" style="padding-left:20px"><strong> Sno </strong></th>
        	 <th width="25%"><strong> Title</strong></th>
			<th width="10%"> <strong>Download Links</strong> </th> 
		</tr>
      <tr><td colspan="3"></td></tr>
		{section name=data loop=$filedata}		
		<tr class="data" style="border:1px solid #CCC"> 
			<td valign="top" style="padding-left:25px"> {$smarty.section.data.index+1}</td> 
			<td valign="top"> {$filedata[data].title}</td> 
            <td><a href="{$site_url}/upload_document/{$filedata[data].file_path}">Download</a></td>
			
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
	
      <div class="clear"></div>
    </div>
     
    </div>  
    </div>
    {if $show_page}
    <div  align="center">
      <div > {$page_links}</div>
    </div>
    {/if} 
   </div>
  
  


