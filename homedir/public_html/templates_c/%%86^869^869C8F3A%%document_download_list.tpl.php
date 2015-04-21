<?php /* Smarty version 2.6.22, created on 2014-03-01 16:08:58
         compiled from document_download_list.tpl */ ?>
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
		<tr class="data" style="border:1px solid #CCC"> 
			<td valign="top" style="padding-left:25px"> <?php echo $this->_sections['data']['index']+1; ?>
</td> 
			<td valign="top"> <?php echo $this->_tpl_vars['filedata'][$this->_sections['data']['index']]['title']; ?>
</td> 
            <td><a href="<?php echo $this->_tpl_vars['site_url']; ?>
/upload_document/<?php echo $this->_tpl_vars['filedata'][$this->_sections['data']['index']]['file_path']; ?>
">Download</a></td>
			
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
	
      <div class="clear"></div>
    </div>
     
    </div>  
    </div>
    <?php if ($this->_tpl_vars['show_page']): ?>
    <div  align="center">
      <div > <?php echo $this->_tpl_vars['page_links']; ?>
</div>
    </div>
    <?php endif; ?> 
   </div>
  
  

