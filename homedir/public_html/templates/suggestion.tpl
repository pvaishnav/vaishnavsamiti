<div id="testMain">
<p class="testtop"></p>
<div id="test">
<h2><span>Welcome Suggestion</span></h2>
     <form action="index.php?view=rd_home&action=suggestion" name="frm_guest_book" enctype="multipart/form-data" method="post">
	<table border="0" width="500" >
    <tr><td colspan="3" align="center">{$suggequery}</td></tr>
	<tr class="form_tmpl_2"> 
	 	<td align="left" valign="top" width="18%"><strong> Name  </strong></td> 	
		<td valign="top" width="52%"> <input type="text" size="53"  name="gname" value=""  /> </td>
  	 	<td valign="top"><div id="gname"></div></td>	 
	</tr>
    <tr class="form_tmpl_2"> 
	 	<td align="left" valign="top" width="18%"><strong> Email  </strong></td> 	
		<td valign="top" width="52%"> <input type="text" size="53"  name="email" value=""  /> </td>
  	 	<td valign="top"><div id="email"></div></td>	 
	</tr>
	<tr class="form_tmpl_2"> 
		<td align="left" valign="top"><strong> Description </strong></td> 
		<td valign="top"> <textarea name="descript" rows="8" cols="40" ></textarea> </td>
		<td valign="top"><div id="descript"></div></td>		
	</tr>
     <tr class="form_tmpl_2"> 
	 	<td align="left" valign="top" width="18%"><strong>{$one} + {$two} = </strong></td> 	
		<td valign="top" width="52%"> <input type="text" size="8"  name="val" value=""  /> </td>
  	 	<td valign="top"><div></div></td>	 
	</tr>
      
     <tr class="form_tmpl_2"> 
		<td colspan="3" align="center">  <input type="submit" name="submit" value="Submit" /> </td>
     </tr>
      </table>
      </form>
      
  </div>	
			
<p class="testBot"></p>
	<br class="spacer" />
</div>
<br class="spacer" />