<?php /* Smarty version 2.6.22, created on 2014-07-05 05:08:24
         compiled from list_parcha.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'list_parcha.tpl', 15, false),)), $this); ?>
<div id="testMain">
	<p class="testtop"></p>
		<div id="test">
		<h2><span>Welcome Place To See</span></h2>
	<table width="550" border="0" cellpadding="0" cellspacing="5" style="padding:0 0 0 20px;">
  <?php unset($this->_sections['prcdata']);
$this->_sections['prcdata']['name'] = 'prcdata';
$this->_sections['prcdata']['loop'] = is_array($_loop=$this->_tpl_vars['parcha']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['prcdata']['show'] = true;
$this->_sections['prcdata']['max'] = $this->_sections['prcdata']['loop'];
$this->_sections['prcdata']['step'] = 1;
$this->_sections['prcdata']['start'] = $this->_sections['prcdata']['step'] > 0 ? 0 : $this->_sections['prcdata']['loop']-1;
if ($this->_sections['prcdata']['show']) {
    $this->_sections['prcdata']['total'] = $this->_sections['prcdata']['loop'];
    if ($this->_sections['prcdata']['total'] == 0)
        $this->_sections['prcdata']['show'] = false;
} else
    $this->_sections['prcdata']['total'] = 0;
if ($this->_sections['prcdata']['show']):

            for ($this->_sections['prcdata']['index'] = $this->_sections['prcdata']['start'], $this->_sections['prcdata']['iteration'] = 1;
                 $this->_sections['prcdata']['iteration'] <= $this->_sections['prcdata']['total'];
                 $this->_sections['prcdata']['index'] += $this->_sections['prcdata']['step'], $this->_sections['prcdata']['iteration']++):
$this->_sections['prcdata']['rownum'] = $this->_sections['prcdata']['iteration'];
$this->_sections['prcdata']['index_prev'] = $this->_sections['prcdata']['index'] - $this->_sections['prcdata']['step'];
$this->_sections['prcdata']['index_next'] = $this->_sections['prcdata']['index'] + $this->_sections['prcdata']['step'];
$this->_sections['prcdata']['first']      = ($this->_sections['prcdata']['iteration'] == 1);
$this->_sections['prcdata']['last']       = ($this->_sections['prcdata']['iteration'] == $this->_sections['prcdata']['total']);
?>
 	
 <?php if ($this->_sections['prcdata']['index'] % 3 == 0): ?>
         <tr>
     <?php endif; ?>
   <td height="180">
     <a href="<?php echo $this->_tpl_vars['site_url']; ?>
index.php?page=rd_parcha&action=show_parcha&id=<?php echo $this->_tpl_vars['parcha'][$this->_sections['prcdata']['index']]['article_id']; ?>
"> 
  <span style="margin:0 0 0 -15px;"> <img src="<?php echo $this->_tpl_vars['site_url']; ?>
/parcha_images/<?php echo $this->_tpl_vars['parcha'][$this->_sections['prcdata']['index']]['article_image']; ?>
" width="150" height="150" alt="<?php echo $this->_tpl_vars['parcha'][$this->_sections['prcdata']['index']]['article_title']; ?>
" style="border:4px solid #c9c672;" /></span></a>
   <br />
  <a href="<?php echo $this->_tpl_vars['site_url']; ?>
index.php?page=rd_parcha&action=show_parcha&id=<?php echo $this->_tpl_vars['parcha'][$this->_sections['prcdata']['index']]['article_id']; ?>
" title="<?php echo $this->_tpl_vars['image'][$this->_sections['imagedata']['index']]['album_title']; ?>
"><span class="nor_text"><?php echo ((is_array($_tmp=$this->_tpl_vars['parcha'][$this->_sections['prcdata']['index']]['article_title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, '...') : smarty_modifier_truncate($_tmp, 30, '...')); ?>
</span></a>
		<br />
   </td>	
   <?php if (( $this->_sections['prcdata']['index']+1 ) % 3 == 0): ?>
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
  
  