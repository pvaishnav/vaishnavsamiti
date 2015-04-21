<?php /* Smarty version 2.6.22, created on 2014-12-11 20:44:52
         compiled from admin/view_guest_book.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'admin/view_guest_book.tpl', 14, false),array('modifier', 'strip_tags', 'admin/view_guest_book.tpl', 16, false),)), $this); ?>
	
<div class="dv_data">
		<table border="0" cellpadding="2" cellspacing="2" width="100%" >
		<tr class="header" > <th width="6%"> # </th> 
        <th width="20%">Student Name</th>
        <th width="20%"> Father Name </th>
         <th> Address </th>
		<th width="10%"> Created </th>  
		<th width="10%"> Action </th>
		</tr>
		<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['loop'] = is_array($_loop=$this->_tpl_vars['guest_detail']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<td valign="top"> <?php echo ((is_array($_tmp=$this->_tpl_vars['guest_detail'][$this->_sections['data']['index']]['sname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, '...', 'TRUE') : smarty_modifier_truncate($_tmp, 30, '...', 'TRUE')); ?>
</td> 
			<td valign="top"> <?php echo ((is_array($_tmp=$this->_tpl_vars['guest_detail'][$this->_sections['data']['index']]['fname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, '...', 'TRUE') : smarty_modifier_truncate($_tmp, 30, '...', 'TRUE')); ?>
</td> 
			<td valign="top"> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['guest_detail'][$this->_sections['data']['index']]['current_address'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 50, '...', 'TRUE') : smarty_modifier_truncate($_tmp, 50, '...', 'TRUE')); ?>
</td> 
			<td valign="top"> <?php echo $this->_tpl_vars['guest_detail'][$this->_sections['data']['index']]['entry_date']; ?>
</td> 
			<td valign="top" > 
			<a href="admin.php?view=admin_home&action=view_guest&view_id=<?php echo $this->_tpl_vars['guest_detail'][$this->_sections['data']['index']]['id']; ?>
">View</a> 
				| 
		 <a href="admin.php?view=admin_home&action=view_guest_book&del=<?php echo $this->_tpl_vars['guest_detail'][$this->_sections['data']['index']]['id']; ?>
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