<?php /* Smarty version 2.6.22, created on 2014-03-05 14:52:43
         compiled from admin/upload_document.tpl */ ?>
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
		<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['loop'] = is_array($_loop=$this->_tpl_vars['filedata']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['data']['show'] = true;
$this->_sections['data']['max'] = $this->_sections['data']['loop'];
$this->_sections['data']['step'] = 1;
$this->_sections['data']['start'] = $this->_sections['data']['step'] > 0 ? 0 : $this->_sections['data']['loop']-1;
if ($this->_sections['data']['show']) {
    $this->_sections['data']['total'] = $this->_sections['data']['loop'];
    if ($this->_sections['data']['total'] == 0)
        $this->_sections['data']['show'] = false;
} else
    $this->_sections['data']['total'] = 0;
if ($this->_sections['data']['show']):

            for ($this->_sections['data']['index'] = $this->_sections['data']['start'], $this->_sections['data']['iteration'] = 1;
                 $this->_sections['data']['iteration'] <= $this->_sections['data']['total'];
                 $this->_sections['data']['index'] += $this->_sections['data']['step'], $this->_sections['data']['iteration']++):
$this->_sections['data']['rownum'] = $this->_sections['data']['iteration'];
$this->_sections['data']['index_prev'] = $this->_sections['data']['index'] - $this->_sections['data']['step'];
$this->_sections['data']['index_next'] = $this->_sections['data']['index'] + $this->_sections['data']['step'];
$this->_sections['data']['first']      = ($this->_sections['data']['iteration'] == 1);
$this->_sections['data']['last']       = ($this->_sections['data']['iteration'] == $this->_sections['data']['total']);
?>		
		<tr class="data"> 
			<td valign="top"> <?php echo $this->_sections['data']['index']+1; ?>
</td> 
			<td valign="top"> <?php echo $this->_tpl_vars['filedata'][$this->_sections['data']['index']]['title']; ?>
</td> 
            <td><a href="<?php echo $this->_tpl_vars['site_url']; ?>
/upload_document/<?php echo $this->_tpl_vars['filedata'][$this->_sections['data']['index']]['file_path']; ?>
">Download</a></td>
			<td valign="top"> 
			 <a href="admin.php?view=user&action=upload_document&del=<?php echo $this->_tpl_vars['filedata'][$this->_sections['data']['index']]['id']; ?>
">Del</a>
			</td> 
		</tr>
		<?php endfor; endif; ?>	
			<?php if ($this->_sections['data']['total'] == 0): ?>
	<tr class="data"> 
		<td valign="top" colspan="10"> No Current Record </td></tr>
	<?php endif; ?>					
	
		</table>
		</div>
	<?php if ($this->_tpl_vars['show_page']): ?>
	<div class="dv_footer"> <?php echo $this->_tpl_vars['page_links']; ?>
</div>
	<?php endif; ?>
	
	
</div>