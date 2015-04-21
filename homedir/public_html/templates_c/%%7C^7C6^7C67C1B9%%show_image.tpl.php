<?php /* Smarty version 2.6.22, created on 2014-03-04 03:55:48
         compiled from show_image.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'show_image.tpl', 9, false),array('modifier', 'strip_tags', 'show_image.tpl', 10, false),)), $this); ?>
<div id="testMain">
	<p class="testtop"></p>
		<div id="test">
		<h2><span>Gallery Detail</span></h2>
<table width="550" border="0">
  <tr>
    <td style="padding-left:20px;"><img src="<?php echo $this->_tpl_vars['site_url']; ?>
album_images/<?php echo $this->_tpl_vars['imagehed'][0]['album_image']; ?>
" width="110" height="110" alt="<?php echo $this->_tpl_vars['imagehed'][0]['album_image']; ?>
" /></td>
    <td class="nor_text" style="vertical-align:text-top;"> <p style="width:390px;">
    <span class="headline"><?php echo ((is_array($_tmp=$this->_tpl_vars['imagehed'][0]['album_title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 80, '...') : smarty_modifier_truncate($_tmp, 80, '...')); ?>
</span><br />
    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['imagehed'][0]['album_desc'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 175, '...') : smarty_modifier_truncate($_tmp, 175, '...')); ?>
  </p></td>
  </tr>
  <tr><td colspan="2" class="seprate2">&nbsp;</td></tr>
</table>

    <br class="spacer" />
    
    
    
    
  
<?php if ($this->_tpl_vars['image'][0]['ad_id'] != ''): ?>
<div class="main_content_demo">
	<div style="float:left; width:530px; display:block;" class="alin">
    <?php unset($this->_sections['imgdata']);
$this->_sections['imgdata']['name'] = 'imgdata';
$this->_sections['imgdata']['loop'] = is_array($_loop=$this->_tpl_vars['image']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['imgdata']['show'] = true;
$this->_sections['imgdata']['max'] = $this->_sections['imgdata']['loop'];
$this->_sections['imgdata']['step'] = 1;
$this->_sections['imgdata']['start'] = $this->_sections['imgdata']['step'] > 0 ? 0 : $this->_sections['imgdata']['loop']-1;
if ($this->_sections['imgdata']['show']) {
    $this->_sections['imgdata']['total'] = $this->_sections['imgdata']['loop'];
    if ($this->_sections['imgdata']['total'] == 0)
        $this->_sections['imgdata']['show'] = false;
} else
    $this->_sections['imgdata']['total'] = 0;
if ($this->_sections['imgdata']['show']):

            for ($this->_sections['imgdata']['index'] = $this->_sections['imgdata']['start'], $this->_sections['imgdata']['iteration'] = 1;
                 $this->_sections['imgdata']['iteration'] <= $this->_sections['imgdata']['total'];
                 $this->_sections['imgdata']['index'] += $this->_sections['imgdata']['step'], $this->_sections['imgdata']['iteration']++):
$this->_sections['imgdata']['rownum'] = $this->_sections['imgdata']['iteration'];
$this->_sections['imgdata']['index_prev'] = $this->_sections['imgdata']['index'] - $this->_sections['imgdata']['step'];
$this->_sections['imgdata']['index_next'] = $this->_sections['imgdata']['index'] + $this->_sections['imgdata']['step'];
$this->_sections['imgdata']['first']      = ($this->_sections['imgdata']['iteration'] == 1);
$this->_sections['imgdata']['last']       = ($this->_sections['imgdata']['iteration'] == $this->_sections['imgdata']['total']);
?>
		<div class="demo">
        <a href="<?php echo $this->_tpl_vars['site_url']; ?>
album_image_gallery/<?php echo $this->_tpl_vars['image'][$this->_sections['imgdata']['index']]['ad_data']; ?>
" class="pirobox" title="<?php echo $this->_tpl_vars['image'][$this->_sections['imgdata']['index']]['ad_title']; ?>
"><img src="<?php echo $this->_tpl_vars['site_url']; ?>
album_image_gallery/<?php echo $this->_tpl_vars['image'][$this->_sections['imgdata']['index']]['ad_data']; ?>
" alt="<?php echo $this->_tpl_vars['image'][$this->_sections['imgdata']['index']]['ad_data']; ?>
"  /></a>
        </div>
    <?php endfor; endif; ?>
	</div>
</div>
<br class="spacer" />
<?php endif; ?>




<p class="testBot"></p>
	<br class="spacer" />
</div>
<br class="spacer" />
</div>
<br class="spacer" />