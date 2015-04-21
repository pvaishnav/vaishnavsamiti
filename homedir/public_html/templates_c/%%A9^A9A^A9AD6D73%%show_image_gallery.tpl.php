<?php /* Smarty version 2.6.22, created on 2013-06-28 11:09:46
         compiled from admin/show_image_gallery.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'admin/show_image_gallery.tpl', 15, false),)), $this); ?>
<div class="box_data" >
	<div class="dv_header">Image Gallery</div>
		<div style="margin:4px; border:#0099FF solid; padding:4px; vertical-align:top;">	
			<form action="admin.php?view=image_gallery&action=add_image_gallery" name="add_image" 
			enctype="multipart/form-data" method="post">
			<table border="0 " >
			 
            <tr> 
				<td > Title : <input type="text" name="title" value=""  />  </td> 
				<td > Event Name : 
				<select name="album_id" style="width:175px;" >
				<option value="0" >--Select--</option>
				<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['loop'] = is_array($_loop=$this->_tpl_vars['imageAlbums']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<option value="<?php echo $this->_tpl_vars['imageAlbums'][$this->_sections['data']['index']][0]; ?>
"   >
						<?php echo ((is_array($_tmp=$this->_tpl_vars['imageAlbums'][$this->_sections['data']['index']][1])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, '...') : smarty_modifier_truncate($_tmp, 25, '...')); ?>

					</option>
				<?php endfor; endif; ?> 
		
			</select> 
				</td> 
				<td > Event Image : <input type="file" name="image_browse"  /> </td> 
			</tr>
			<tr>
			<td ><div id="title"></div></td>
			<td ><div id="album_id"></div></td>
			<td ><div id="image_browse"></div></td>
			</tr>	
			<tr>
           <td valign="top"  colspan="4"></td>
           </tr>
			<tr>
			<td  align="center" colspan="3"> <input type="submit" name="submit" value="Add Event Image" onClick="return valid_add_image(document.add_image);" /> </td> </tr>
			</table>
			</form>
		</div>	

		<div class="dv_data">
		<table border="0" cellpadding="2" cellspacing="2" width="100%" >
			<tr class="header" > 
			<th width="4%"> # </th> 
			<th width="20%"> Image Name </th>
			<th width="20%"> Title</th> 
			<th > Description </th> 
			<th width="20%"> Album </th> 
			<th>Status </th> 
			<th width="10%"> Action </th>
			</tr>
		
	<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['loop'] = is_array($_loop=$this->_tpl_vars['image_album_detail']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<td valign="top"> <?php echo $this->_tpl_vars['image_album_detail'][$this->_sections['data']['index']]['ad_data']; ?>
</td> 
		<td valign="top"> <?php echo ((is_array($_tmp=$this->_tpl_vars['image_album_detail'][$this->_sections['data']['index']]['ad_title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50, '...', 'TRUE') : smarty_modifier_truncate($_tmp, 50, '...', 'TRUE')); ?>
</td> 
		<td valign="top"> <?php echo ((is_array($_tmp=$this->_tpl_vars['image_album_detail'][$this->_sections['data']['index']]['ad_desc'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, '...', 'TRUE') : smarty_modifier_truncate($_tmp, 30, '...', 'TRUE')); ?>
</td> 
		<td valign="top"> <?php echo ((is_array($_tmp=$this->_tpl_vars['image_album_detail'][$this->_sections['data']['index']]['album_title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, '...', 'TRUE') : smarty_modifier_truncate($_tmp, 30, '...', 'TRUE')); ?>
</td> 
				<td valign="top"> 
			<a href="admin.php?view=image_gallery&action=set_gallery&image_id=<?php echo $this->_tpl_vars['image_album_detail'][$this->_sections['data']['index']]['ad_id']; ?>
&set=
			<?php if ($this->_tpl_vars['image_album_detail'][$this->_sections['data']['index']]['ad_status'] == 'Y'): ?>N<?php else: ?>Y<?php endif; ?>">
			<?php if ($this->_tpl_vars['image_album_detail'][$this->_sections['data']['index']]['ad_status'] == 'Y'): ?>Y<?php else: ?>N<?php endif; ?></a> </td> 

		<td valign="top"> 
		<form name="del_form" method="post" enctype="multipart/form-data" action="admin.php?view=image_gallery&action=del_gallery">
		 <a href="admin.php?view=image_gallery&action=edit_gallery&image_id=<?php echo $this->_tpl_vars['image_album_detail'][$this->_sections['data']['index']]['ad_id']; ?>
">Edit</a> 

		| 
		<input type="hidden" name="del_id" id="del_id" value="" />
		
		 <a href="#" onclick="del_gallery(<?php echo $this->_tpl_vars['image_album_detail'][$this->_sections['data']['index']]['ad_id']; ?>
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