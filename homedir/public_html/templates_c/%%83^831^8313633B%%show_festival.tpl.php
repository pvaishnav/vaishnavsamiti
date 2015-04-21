<?php /* Smarty version 2.6.22, created on 2014-03-05 14:52:36
         compiled from admin/show_festival.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'admin/show_festival.tpl', 51, false),array('modifier', 'strip_tags', 'admin/show_festival.tpl', 52, false),)), $this); ?>
<div class="box_data" >
	<div class="dv_header">We are in news </div>

<div style="margin:4px; border:#0099FF solid; padding:4px; vertical-align:top;">	
	<form action="admin.php?view=festival&action=add_festival" name="add_festival" enctype="multipart/form-data" method="post">
	<table border="0" >
	 <tr> 
		<td align="left"> Title : <input type="text" size="30" name="title" value=""  /> </td> 
		<td align="left">&nbsp;  </td> 
		<td align="left"> News Cover Image : 
		  <input type="file" name="image_browse" value="" /> </td> 
		</tr>
    <tr>
	<td ><div id="title"></div></td>
	<td ><div id="desc"></div></td>
	<td ><div id="image_browse"></div></td>
	</tr>	
	
     <tr>
       <td valign="top"  colspan="4">Description
		<textarea name="desc" rows="10" cols="75" ></textarea> 
       </td><td valign="top"><div id="desc"></div></td>
       
     </tr>

	<tr>
	<td valign="top"> 
	
	<input type="hidden" value="L" name="imagePosition" checked="checked" />
	<input type="hidden" value="R" name="imagePosition"  />	
	</td>


	<td colspan="3" align="center"> 
	<input type="hidden" name="article_type" value="<?php echo $this->_tpl_vars['article_type']; ?>
"  />
	<input type="submit" name="submit" value="Add News" onClick="return valid_add_festival(document.add_festival);" /> </td> </tr>
	</table>
	</form>
</div>	

		<div class="dv_data">
		<table border="0" cellpadding="2" cellspacing="2" width="100%" >
		<tr class="header" > <th width="6%"> # </th> <th width="25%"> Title</th> <th> Description </th>
		<th width="10%"> Created </th> 
		<th width="8%">Show </th>
		<th width="8%">Status </th>  <th width="10%"> Action </th>
		</tr>
		<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['loop'] = is_array($_loop=$this->_tpl_vars['festival_detail']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<td valign="top"> <?php echo ((is_array($_tmp=$this->_tpl_vars['festival_detail'][$this->_sections['data']['index']]['article_title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, '...', 'TRUE') : smarty_modifier_truncate($_tmp, 30, '...', 'TRUE')); ?>
</td> 
			<td valign="top"> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['festival_detail'][$this->_sections['data']['index']]['article_desc'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 50, '...', 'TRUE') : smarty_modifier_truncate($_tmp, 50, '...', 'TRUE')); ?>
</td> 
			<td valign="top"> <?php echo $this->_tpl_vars['festival_detail'][$this->_sections['data']['index']]['article_created']; ?>
</td> 
			
			<td valign="top"> 
			<a href="admin.php?view=festival&action=set_show&festival_id=<?php echo $this->_tpl_vars['festival_detail'][$this->_sections['data']['index']]['article_id']; ?>
&set=
			<?php if ($this->_tpl_vars['festival_detail'][$this->_sections['data']['index']]['article_show'] == 'Y'): ?>N<?php else: ?>Y<?php endif; ?>">
			<?php if ($this->_tpl_vars['festival_detail'][$this->_sections['data']['index']]['article_show'] == 'Y'): ?>Y<?php else: ?>N<?php endif; ?></a> 
			</td> 
			
			
			<td valign="top"> 
			<a href="admin.php?view=festival&action=set_festival&festival_id=<?php echo $this->_tpl_vars['festival_detail'][$this->_sections['data']['index']]['article_id']; ?>
&set=
			<?php if ($this->_tpl_vars['festival_detail'][$this->_sections['data']['index']]['article_status'] == 'Y'): ?>N<?php else: ?>Y<?php endif; ?>">
			<?php if ($this->_tpl_vars['festival_detail'][$this->_sections['data']['index']]['article_status'] == 'Y'): ?>Y<?php else: ?>N<?php endif; ?></a> </td> 
			
			
			<td valign="top"> 
		<form name="del_form" method="post" enctype="multipart/form-data" action="admin.php?view=festival&action=del_festival">
			<a href="admin.php?view=festival&action=edit_festival&festival_id=<?php echo $this->_tpl_vars['festival_detail'][$this->_sections['data']['index']]['article_id']; ?>
">Edit</a> 
			|
		<input type="hidden" name="del_id" id="del_id" value="" />
		 <a href="#" onclick="del_gallery(<?php echo $this->_tpl_vars['festival_detail'][$this->_sections['data']['index']]['article_id']; ?>
);">Del</a>
		 </form>
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