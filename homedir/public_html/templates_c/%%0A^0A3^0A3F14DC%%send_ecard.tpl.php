<?php /* Smarty version 2.6.22, created on 2014-10-03 03:28:57
         compiled from send_ecard.tpl */ ?>
<div id="testMain">
	<p class="testtop"></p>
		<div id="test">
		<h2><span>Welcome Bikaner E-card Gallery</span></h2>
<table width="550" border="0">
  <?php if ($this->_tpl_vars['image'][0]['ad_data'] != ''): ?>
   <tr>
     <td style="padding-left:20px;" align="center">
     <span style="padding:0 10px 0 0px;"><img src="<?php echo $this->_tpl_vars['site_url']; ?>
album_ecard_gallery/<?php echo $this->_tpl_vars['image'][0]['ad_data']; ?>
"  style="max-width:510px; max-height:550px; border:2px solid #B5B35B;"  alt="<?php echo $this->_tpl_vars['image'][0]['ad_data']; ?>
" /></span>
      </td>
   </tr>
  <?php endif; ?>
  <tr><td colspan="2">&nbsp;</td></tr>
  <tr><td colspan="2" class="seprate2">&nbsp;</td></tr>
  
 <tr><td colspan="2" align="left" style="color:#990; padding-left:12px;">Use link for show this E-card in your site</td></tr>
 <tr><td colspan="2" style="padding-left:12px;"><textarea name="simg" rows="3" cols="63"><?php echo $this->_tpl_vars['img_show']; ?>
</textarea></td></tr>
  
 <tr><td align="center">
  <form action="<?php echo $this->_tpl_vars['site_url']; ?>
index.php?page=rd_ecard&action=send_ecard&id=<?php echo $this->_tpl_vars['ecid']; ?>
" method="post" enctype="multipart/form-data" name="send_ecard"><br>
  
  <table width="520" cellpadding="0" cellspacing="3" class="table_boder">
  <tr>
 	<td colspan="4" align="center" bgcolor="#D6D88B">Send E-card To Your Friend</td>
  </tr>
       <tr><td style="line-height:10px;">&nbsp;</td></tr>
  <tr>
    <td>Name</td>
    <td>:&nbsp;<input name="uname" type="text" value=""></td>
    <td>Email Id</td>
     <td>:&nbsp;<input name="uemail" type="text" value=""></td>
  </tr>
  <tr><td style="line-height:5px;">&nbsp;</td></tr>
   <tr>
    <td>Friend Name</td>
    <td>:&nbsp;<input name="fname" value="" type="text"></td>
    <td>Friend Email Id</td>
     <td>:&nbsp;<input name="femail" value="" type="text"></td>
  </tr>
       <tr><td style="line-height:5px;">&nbsp;</td></tr>
     <?php if ($this->_tpl_vars['success'] != ''): ?>
     <tr><td colspan="4" style="line-height:20px; text-align:center; color:#989649;"><?php echo $this->_tpl_vars['success']; ?>
</td></tr>
     <?php endif; ?>
  <tr>
  <td colspan="4" align="center">  <input type="submit" name="submit" value="Submit" class="subm" /> </td>
 </tr>
</table>
</form>
  
  </td></tr>
</table>

    <br class="spacer" />
  
<p class="testBot"></p>
	<br class="spacer" />
</div>
<br class="spacer" />
</div>
<br class="spacer" />