	<table border="0" width="100%" >
	<tr class="form_tmpl_2"> 
	 	<td align="right" valign="top" width="18%"><strong> Name  </strong></td> 	
		<td valign="top" width="52%"> {$sugge_detail[0].gname}</td>
	</tr>
    
     <tr class="form_tmpl_2"> 
	 	<td align="right" valign="top" width="18%"><strong> Email  </strong></td> 	
		<td valign="top" width="52%"> {$sugge_detail[0].email}</td>
	</tr>
    
    <tr class="form_tmpl_2"> 
	 	<td align="right" valign="top" width="18%"><strong> Description  </strong></td> 	
		<td valign="top" width="52%"> {$sugge_detail[0].descript}</td>
	</tr>
    
	 <tr class="form_tmpl_2"> 
	 	<td align="right" valign="top" width="18%"><strong> Date of Created  </strong></td> 	
		<td valign="top" width="52%"> {$sugge_detail[0].create_date}</td>
	</tr>
	
	<tr class="form_tmpl_2">
	<td valign="top" colspan="3" align="center">
	<input type="hidden" name="user_id" value="{$account_detail[0].user_id}" > 
	 <input type="button" name="cancel" value="Back" onClick="javascript:history.back();"  />
	</td> 
	</tr>
	</table>


