<div >
	
		<div >
		<h4>Welcome Guest Book</h4>
      <form action="index.php?view=rd_home&action=guest_book" name="frm_guest_book" enctype="multipart/form-data" method="post">
	<table border="0" width="400" cellpadding="0" cellspacing="3" style="padding-left:25px;" >
    <tr><td colspan="3" align="center">{$guestquery}</td></tr>
	<tr > 
	 	<td align="left" valign="top" width="18%"><strong> Name </strong></td> 	
		<td valign="top" width="52%"> <input type="text" class="textfield" size="53"  name="gname" value=""  /> </td>
  	 	<td valign="top"></td>	 
	</tr>
    <tr > 
	 	<td align="left" valign="top" width="18%"><strong> Email  </strong></td> 	
		<td valign="top" width="52%"> <input type="text" class="textfield" size="53"  name="email" value=""  /> </td>
  	 	<td valign="top"></td>	 
	</tr>
	<tr> 
		<td align="left" valign="top"><strong> Description </strong></td> 
		<td valign="top"><textarea name="descript" class="textarea" rows="8" cols="40" >{$news_data[0].descript}</textarea> </td>
		<td valign="top"></td>		
	</tr>
    <tr><td>&nbsp;</td></tr>
     <tr > 
	 	<td align="left" valign="top" width="18%"><strong>{$one} + {$two} = </strong></td> 	
		<td valign="top" width="52%"> <input type="text" class="textfield" size="8"  name="val" value=""  /> </td>
  	 	<td valign="top"></td>	 
	</tr>   
     <tr > 
		<td colspan="3" align="center">  <input type="submit" name="submit" value="Submit" class="button" /> </td>
     </tr>
      </table>
      </form>
</div>
</div>
