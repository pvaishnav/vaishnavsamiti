<div class="box_data" >
	<div class="dv_header">We are in Uploda Document File </div>

<div style="margin:4px; border:#0099FF solid; padding:4px; vertical-align:top;">	
	<form name="upload_file" method="post" action="#" enctype="multipart/form-data">
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr>
<td width="30%" align="center" valign="top" style="padding-top:40px;" >
<table  border="0" width="100%" align="center" cellspacing="0" cellpadding="0">
  <tr> <td align="right">Title:</td> <td>&nbsp;<input type="text" name="title"> </td><td><div id="alert_title"></div></td> </tr>
  <tr><td>&nbsp;</td></tr>
  <tr> <td align="right">Uploda File:</td> <td>&nbsp; <input type="file" name="upfile"> </td> <td><div id="alert_upfile"></div></td> </tr>
  <tr><td>&nbsp;</td></tr>
  <tr> <td colspan="2" align="center"><input type="submit" name="submit" value="upload file" onClick="return Valid_upload_document(document.upload_file);"></td>  </tr>
</table></td>
</tr>
</table>

</form>
</div>	

		<div class="dv_data">
		<table border="0" cellpadding="2" cellspacing="2" width="100%" >
		<tr class="header" > <th width="6%"> Sno </th>
        	 <th width="25%"> Title</th>
			<th width="10%"> Download </th> 
		 	<th width="10%"> Action </th>
		</tr>
		{section name=data loop=$filedata}		
		<tr class="data"> 
			<td valign="top"> {$smarty.section.data.index+1}</td> 
			<td valign="top"> {$filedata[data].title}</td> 
            <td><a href="{$site_url}/upload_document/{$filedata[data].file_path}">Download</a></td>
			<td valign="top"> 
			 <a href="admin.php?view=user&action=upload_document&del={$filedata[data].id}">Del</a>
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
