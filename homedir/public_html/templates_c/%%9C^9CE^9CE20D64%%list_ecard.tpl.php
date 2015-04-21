<?php /* Smarty version 2.6.22, created on 2014-07-05 05:07:10
         compiled from list_ecard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'list_ecard.tpl', 15, false),)), $this); ?>
<div id="testMain">
	<p class="testtop"></p>
		<div id="test">
		<h2><span>Welcome Bikaner E-card Gallery</span></h2>
	<table width="550" border="0" cellpadding="0" cellspacing="5" style="padding:0 0 0 20px;">
  <?php unset($this->_sections['imagedata']);
$this->_sections['imagedata']['name'] = 'imagedata';
$this->_sections['imagedata']['loop'] = is_array($_loop=$this->_tpl_vars['image']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['imagedata']['show'] = true;
$this->_sections['imagedata']['max'] = $this->_sections['imagedata']['loop'];
$this->_sections['imagedata']['step'] = 1;
$this->_sections['imagedata']['start'] = $this->_sections['imagedata']['step'] > 0 ? 0 : $this->_sections['imagedata']['loop']-1;
if ($this->_sections['imagedata']['show']) {
    $this->_sections['imagedata']['total'] = $this->_sections['imagedata']['loop'];
    if ($this->_sections['imagedata']['total'] == 0)
        $this->_sections['imagedata']['show'] = false;
} else
    $this->_sections['imagedata']['total'] = 0;
if ($this->_sections['imagedata']['show']):

            for ($this->_sections['imagedata']['index'] = $this->_sections['imagedata']['start'], $this->_sections['imagedata']['iteration'] = 1;
                 $this->_sections['imagedata']['iteration'] <= $this->_sections['imagedata']['total'];
                 $this->_sections['imagedata']['index'] += $this->_sections['imagedata']['step'], $this->_sections['imagedata']['iteration']++):
$this->_sections['imagedata']['rownum'] = $this->_sections['imagedata']['iteration'];
$this->_sections['imagedata']['index_prev'] = $this->_sections['imagedata']['index'] - $this->_sections['imagedata']['step'];
$this->_sections['imagedata']['index_next'] = $this->_sections['imagedata']['index'] + $this->_sections['imagedata']['step'];
$this->_sections['imagedata']['first']      = ($this->_sections['imagedata']['iteration'] == 1);
$this->_sections['imagedata']['last']       = ($this->_sections['imagedata']['iteration'] == $this->_sections['imagedata']['total']);
?>
 	
 <?php if ($this->_sections['imagedata']['index'] % 3 == 0): ?>
         <tr>
     <?php endif; ?>
   <td height="180">
   <a href="<?php echo $this->_tpl_vars['site_url']; ?>
index.php?page=rd_ecard&action=show_ecard&id=<?php echo $this->_tpl_vars['image'][$this->_sections['imagedata']['index']]['album_id']; ?>
"> 
   <span style="margin:0 0 0 -15px;"><img src="<?php echo $this->_tpl_vars['site_url']; ?>
album_images/<?php echo $this->_tpl_vars['image'][$this->_sections['imagedata']['index']]['album_image']; ?>
" width="150" height="150" alt="<?php echo $this->_tpl_vars['image'][$this->_sections['imagedata']['index']]['album_image']; ?>
" style="border:4px solid #c9c672;" /></span></a>
   <br />
  <a href="<?php echo $this->_tpl_vars['site_url']; ?>
index.php?page=rd_ecard&action=show_ecard&id=<?php echo $this->_tpl_vars['image'][$this->_sections['imagedata']['index']]['album_id']; ?>
" title="<?php echo $this->_tpl_vars['image'][$this->_sections['imagedata']['index']]['album_title']; ?>
"><span class="nor_text"><?php echo ((is_array($_tmp=$this->_tpl_vars['image'][$this->_sections['imagedata']['index']]['album_title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, '...') : smarty_modifier_truncate($_tmp, 30, '...')); ?>
</span></a>
		<br />
   </td>	
   <?php if (( $this->_sections['imagedata']['index']+1 ) % 3 == 0): ?>
         </tr>
     <?php endif; ?>
	        
    <?php endfor; endif; ?>
   </table>
    
    
   	<br class="spacer" />
	<?php if ($this->_tpl_vars['show_page']): ?>
	<div style=" width:530px; margin-left:14px; text-align:center; background-color:#f3f1ad;">
		<div><?php echo $this->_tpl_vars['page_links']; ?>
</div>
	</div>
	<?php endif; ?>
			
	</div>	
			
<p class="testBot"></p>
	<br class="spacer" />
</div>
<br class="spacer" />
  
  