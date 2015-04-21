	<table border="0" width="90%" align="center" >
    <tr><td><a href="admin.php?view=admin_home&action=print_view_guest&view_id={$guest_detail[0].id}" target="_new" style="font-size:20px">Print</a></td></tr>
    <tr><td colspan="3" height="30px"></td></tr>
	<tr>
        <td align="right" colspan="3"><img src="{$site_url}user_images/{$guest_detail[0].image}" width="100px" height="100px" /></td>
    </tr>
    <tr>
    	<td width="18%" style="padding-left:25px">Name</td>
        <td width="5%">:</td>
        <td>{$guest_detail[0].sname}</td>
    </tr>
     <tr>
    	<td  style="padding-left:25px">Father Name</td>
        <td >:</td>
        <td>{$guest_detail[0].fname}</td>
    </tr>
     <tr>
    	<td  style="padding-left:25px">Mother Name</td>
        <td >:</td>
        <td>{$guest_detail[0].mname}</td>
    </tr>
     <tr>
    	<td  style="padding-left:25px">Mobile</td>
        <td >:</td>
        <td>{$guest_detail[0].mobile}</td>
    </tr>
     <tr>
    	<td  style="padding-left:25px">Current Address</td>
        <td >:</td>
        <td>{$guest_detail[0].current_address}</td>
    </tr>
     <tr>
    	<td  style="padding-left:25px">Fixed Address</td>
        <td >:</td>
        <td>{$guest_detail[0].fixed_address}</td>
    </tr>
     <tr><td colspan="3" height="20px"></td></tr>
     <tr>
    	<td style="padding-left:25px"><strong>Secondary</strong></td>
        <td ></td>
        <td></td>
    </tr>
     <tr>
    	<td  style="padding-left:25px" colspan="3">
        <table border="1" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        	<td>Bord</td>
            <td>Total Markds</td>
            <td>Obtained Marks</td>
            <td>Percentage</td>
            <td>Year</td>
            <td>Division</td>
        </tr>
   {if $guest_detail[0].sbord!='' || $guest_detail[0].stot_mark!='' || $guest_detail[0].sobt_mark!='' || $guest_detail[0].spercen!='' || $guest_detail[0].syear!='' || $guest_detail[0].sdivision!=''}               
         <tr>
        	<td>{$guest_detail[0].sbord}</td>
            <td>{$guest_detail[0].stot_mark}</td>
            <td>{$guest_detail[0].sobt_mark}</td>
            <td>{$guest_detail[0].spercen}</td>
            <td>{$guest_detail[0].syear}</td>
            <td>{$guest_detail[0].sdivision}</td>
        </tr>
        {/if}
        </table>
        </td>
     </tr>
      <tr><td colspan="3" height="20px"></td></tr>
     <tr>
    	<td  style="padding-left:25px"><strong>Senior Secondary</strong></td>
        <td width="5%"></td>
        <td></td>
    </tr>
     <tr>
    	<td  style="padding-left:25px" colspan="3">
        <table border="1" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        	<td>Bord</td>
            <td>Total Markds</td>
            <td>Obtained Marks</td>
            <td>Percentage</td>
            <td>Year</td>
            <td>Division</td>
        </tr>
   {if $guest_detail[0].ssbord!='' || $guest_detail[0].sstot_mark!='' || $guest_detail[0].ssobt_mark!='' || $guest_detail[0].sspercen!='' || $guest_detail[0].ssyear!='' || $guest_detail[0].ssdivision!=''}              
         <tr>
        	<td>{$guest_detail[0].ssbord}</td>
            <td>{$guest_detail[0].sstot_mark}</td>
            <td>{$guest_detail[0].ssobt_mark}</td>
            <td>{$guest_detail[0].sspercen}</td>
            <td>{$guest_detail[0].ssyear}</td>
            <td>{$guest_detail[0].ssdivision}</td>
        </tr>
        {/if}
        </table>
        </td>
     </tr>
      <tr><td colspan="3" height="20px"></td></tr>
     <tr>
    	<td  style="padding-left:25px"><strong>Graduation</strong></td>
        <td width="5%"></td>
        <td></td>
    </tr>
     <tr>
    	<td  style="padding-left:25px" colspan="3">
        <table border="1" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        	<td>Collage</td>
            <td>Total Markds</td>
            <td>Obtained Marks</td>
            <td>Percentage</td>
            <td>Year</td>
            <td>Division</td>
        </tr>
  {if $guest_detail[0].gcollage!='' || $guest_detail[0].gtot_mark!='' || $guest_detail[0].gobt_mark!='' || $guest_detail[0].gpercen!='' || $guest_detail[0].gyear!='' || $guest_detail[0].gdivision!=''}        
         <tr>
        	<td>{$guest_detail[0].gcollage}</td>
            <td>{$guest_detail[0].gtot_mark}</td>
            <td>{$guest_detail[0].gobt_mark}</td>
            <td>{$guest_detail[0].gpercen}</td>
            <td>{$guest_detail[0].gyear}</td>
            <td>{$guest_detail[0].gdivision}</td>
        </tr>
    {/if}    
        </table>
        </td>
     </tr>
      <tr><td colspan="3" height="20px"></td></tr>
     <tr>
    	<td  style="padding-left:25px"><strong>Post Graduation</strong></td>
        <td width="5%"></td>
        <td></td>
    </tr>
     <tr>
    	<td  style="padding-left:25px" colspan="3">
        <table border="1" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        	<td>Collage</td>
            <td>Total Markds</td>
            <td>Obtained Marks</td>
            <td>Percentage</td>
            <td>Year</td>
            <td>Division</td>
        </tr>
       {if $guest_detail[0].pgcollage!='' || $guest_detail[0].pgtot_mark!='' || $guest_detail[0].pgobt_mark!='' || $guest_detail[0].pgpercen!='' || $guest_detail[0].pgyear!='' || $guest_detail[0].pgdivision!=''}  
         <tr>
        	<td>{$guest_detail[0].pgcollage}</td>
            <td>{$guest_detail[0].pgtot_mark}</td>
            <td>{$guest_detail[0].pgobt_mark}</td>
            <td>{$guest_detail[0].pgpercen}</td>
            <td>{$guest_detail[0].pgyear}</td>
            <td>{$guest_detail[0].pgdivision}</td>
        </tr>
        {/if}
        </table>
        </td>
     </tr>
      <tr><td colspan="3" height="20px"></td></tr>
       <tr>
    	<td  style="padding-left:25px"><strong>Sports Games</strong></td>
        <td width="5%"></td>
        <td></td>
    </tr>
     <tr>
    	<td  style="padding-left:25px" colspan="3">
        <table border="1" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        	<td>Name</td>
            <td>Local National International Grade</td>
            <td>Achievement</td>
        </tr>
        {if $guest_detail[0].spf_name!='' || $guest_detail[0].spf_grade!='' || $guest_detail[0].spf_achivment!=''}
         <tr>
        	<td>{$guest_detail[0].spf_name}</td>
            <td>{$guest_detail[0].spf_grade}</td>
            <td>{$guest_detail[0].spf_achivment}</td>
        </tr>
        {/if}
        {if $guest_detail[0].sps_name!='' || $guest_detail[0].sps_grade!='' || $guest_detail[0].sps_achivment!=''}
        <tr>
        	<td>{$guest_detail[0].sps_name}</td>
            <td>{$guest_detail[0].sps_grade}</td>
            <td>{$guest_detail[0].sps_achivment}</td>
        </tr>
        {/if}
        </table>
        </td>
     </tr>
     
     
      <tr><td colspan="3" height="20px"></td></tr>
       <tr>
    	<td  style="padding-left:25px"><strong>Goverment Service Achievement</strong></td>
        <td width="5%"></td>
        <td></td>
    </tr>
     <tr>
    	<td  style="padding-left:25px" colspan="3">
        <table border="1" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        	<td>Name</td>
            <td>Local National International Grade</td>
            <td>Achievement</td>
        </tr>
           {if $guest_detail[0].spt_name!='' || $guest_detail[0].spt_grade!='' || $guest_detail[0].spt_achivment!=''}
        <tr>
        	<td>{$guest_detail[0].spt_name}</td>
            <td>{$guest_detail[0].spt_grade}</td>
            <td>{$guest_detail[0].spt_achivment}</td>
        </tr>
        {/if}
        </table>
        </td>
     </tr>
     
     <tr><td colspan="3" height="40px"></td></tr>
     
     <tr>
     	<td align="left">Date</td>
        <td></td>
        <td align="right">Signature</td>
     </tr>
    <tr><td colspan="3" height="20px"></td></tr>
	</table>