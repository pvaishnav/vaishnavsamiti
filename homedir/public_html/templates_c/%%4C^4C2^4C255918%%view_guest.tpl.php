<?php /* Smarty version 2.6.22, created on 2013-07-03 12:07:47
         compiled from admin/view_guest.tpl */ ?>
	<table border="0" width="90%" align="center" >
    <tr><td><a href="admin.php?view=admin_home&action=print_view_guest&view_id=<?php echo $this->_tpl_vars['guest_detail'][0]['id']; ?>
" target="_new" style="font-size:20px">Print</a></td></tr>
    <tr><td colspan="3" height="30px"></td></tr>
	<tr>
        <td align="right" colspan="3"><img src="<?php echo $this->_tpl_vars['site_url']; ?>
user_images/<?php echo $this->_tpl_vars['guest_detail'][0]['image']; ?>
" width="100px" height="100px" /></td>
    </tr>
    <tr>
    	<td width="18%" style="padding-left:25px">Name</td>
        <td width="5%">:</td>
        <td><?php echo $this->_tpl_vars['guest_detail'][0]['sname']; ?>
</td>
    </tr>
     <tr>
    	<td  style="padding-left:25px">Father Name</td>
        <td >:</td>
        <td><?php echo $this->_tpl_vars['guest_detail'][0]['fname']; ?>
</td>
    </tr>
     <tr>
    	<td  style="padding-left:25px">Mother Name</td>
        <td >:</td>
        <td><?php echo $this->_tpl_vars['guest_detail'][0]['mname']; ?>
</td>
    </tr>
     <tr>
    	<td  style="padding-left:25px">Mobile</td>
        <td >:</td>
        <td><?php echo $this->_tpl_vars['guest_detail'][0]['mobile']; ?>
</td>
    </tr>
     <tr>
    	<td  style="padding-left:25px">Current Address</td>
        <td >:</td>
        <td><?php echo $this->_tpl_vars['guest_detail'][0]['current_address']; ?>
</td>
    </tr>
     <tr>
    	<td  style="padding-left:25px">Fixed Address</td>
        <td >:</td>
        <td><?php echo $this->_tpl_vars['guest_detail'][0]['fixed_address']; ?>
</td>
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
   <?php if ($this->_tpl_vars['guest_detail'][0]['sbord'] != '' || $this->_tpl_vars['guest_detail'][0]['stot_mark'] != '' || $this->_tpl_vars['guest_detail'][0]['sobt_mark'] != '' || $this->_tpl_vars['guest_detail'][0]['spercen'] != '' || $this->_tpl_vars['guest_detail'][0]['syear'] != '' || $this->_tpl_vars['guest_detail'][0]['sdivision'] != ''): ?>               
         <tr>
        	<td><?php echo $this->_tpl_vars['guest_detail'][0]['sbord']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['stot_mark']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['sobt_mark']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['spercen']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['syear']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['sdivision']; ?>
</td>
        </tr>
        <?php endif; ?>
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
   <?php if ($this->_tpl_vars['guest_detail'][0]['ssbord'] != '' || $this->_tpl_vars['guest_detail'][0]['sstot_mark'] != '' || $this->_tpl_vars['guest_detail'][0]['ssobt_mark'] != '' || $this->_tpl_vars['guest_detail'][0]['sspercen'] != '' || $this->_tpl_vars['guest_detail'][0]['ssyear'] != '' || $this->_tpl_vars['guest_detail'][0]['ssdivision'] != ''): ?>              
         <tr>
        	<td><?php echo $this->_tpl_vars['guest_detail'][0]['ssbord']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['sstot_mark']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['ssobt_mark']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['sspercen']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['ssyear']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['ssdivision']; ?>
</td>
        </tr>
        <?php endif; ?>
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
  <?php if ($this->_tpl_vars['guest_detail'][0]['gcollage'] != '' || $this->_tpl_vars['guest_detail'][0]['gtot_mark'] != '' || $this->_tpl_vars['guest_detail'][0]['gobt_mark'] != '' || $this->_tpl_vars['guest_detail'][0]['gpercen'] != '' || $this->_tpl_vars['guest_detail'][0]['gyear'] != '' || $this->_tpl_vars['guest_detail'][0]['gdivision'] != ''): ?>        
         <tr>
        	<td><?php echo $this->_tpl_vars['guest_detail'][0]['gcollage']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['gtot_mark']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['gobt_mark']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['gpercen']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['gyear']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['gdivision']; ?>
</td>
        </tr>
    <?php endif; ?>    
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
       <?php if ($this->_tpl_vars['guest_detail'][0]['pgcollage'] != '' || $this->_tpl_vars['guest_detail'][0]['pgtot_mark'] != '' || $this->_tpl_vars['guest_detail'][0]['pgobt_mark'] != '' || $this->_tpl_vars['guest_detail'][0]['pgpercen'] != '' || $this->_tpl_vars['guest_detail'][0]['pgyear'] != '' || $this->_tpl_vars['guest_detail'][0]['pgdivision'] != ''): ?>  
         <tr>
        	<td><?php echo $this->_tpl_vars['guest_detail'][0]['pgcollage']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['pgtot_mark']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['pgobt_mark']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['pgpercen']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['pgyear']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['pgdivision']; ?>
</td>
        </tr>
        <?php endif; ?>
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
        <?php if ($this->_tpl_vars['guest_detail'][0]['spf_name'] != '' || $this->_tpl_vars['guest_detail'][0]['spf_grade'] != '' || $this->_tpl_vars['guest_detail'][0]['spf_achivment'] != ''): ?>
         <tr>
        	<td><?php echo $this->_tpl_vars['guest_detail'][0]['spf_name']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['spf_grade']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['spf_achivment']; ?>
</td>
        </tr>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['guest_detail'][0]['sps_name'] != '' || $this->_tpl_vars['guest_detail'][0]['sps_grade'] != '' || $this->_tpl_vars['guest_detail'][0]['sps_achivment'] != ''): ?>
        <tr>
        	<td><?php echo $this->_tpl_vars['guest_detail'][0]['sps_name']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['sps_grade']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['sps_achivment']; ?>
</td>
        </tr>
        <?php endif; ?>
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
           <?php if ($this->_tpl_vars['guest_detail'][0]['spt_name'] != '' || $this->_tpl_vars['guest_detail'][0]['spt_grade'] != '' || $this->_tpl_vars['guest_detail'][0]['spt_achivment'] != ''): ?>
        <tr>
        	<td><?php echo $this->_tpl_vars['guest_detail'][0]['spt_name']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['spt_grade']; ?>
</td>
            <td><?php echo $this->_tpl_vars['guest_detail'][0]['spt_achivment']; ?>
</td>
        </tr>
        <?php endif; ?>
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