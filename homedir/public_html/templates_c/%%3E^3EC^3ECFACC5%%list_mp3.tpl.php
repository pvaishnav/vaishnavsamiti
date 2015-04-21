<?php /* Smarty version 2.6.22, created on 2014-07-05 05:07:49
         compiled from list_mp3.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'list_mp3.tpl', 10, false),array('modifier', 'strip_tags', 'list_mp3.tpl', 11, false),)), $this); ?>
<div id="testMain" >
  <p class="testtop"></p>
  <div id="test">
    <h2><span>Welcome Bikaner Festival</span></h2>
    <?php unset($this->_sections['mp3data']);
$this->_sections['mp3data']['name'] = 'mp3data';
$this->_sections['mp3data']['loop'] = is_array($_loop=$this->_tpl_vars['mp3']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['mp3data']['show'] = true;
$this->_sections['mp3data']['max'] = $this->_sections['mp3data']['loop'];
$this->_sections['mp3data']['step'] = 1;
$this->_sections['mp3data']['start'] = $this->_sections['mp3data']['step'] > 0 ? 0 : $this->_sections['mp3data']['loop']-1;
if ($this->_sections['mp3data']['show']) {
    $this->_sections['mp3data']['total'] = $this->_sections['mp3data']['loop'];
    if ($this->_sections['mp3data']['total'] == 0)
        $this->_sections['mp3data']['show'] = false;
} else
    $this->_sections['mp3data']['total'] = 0;
if ($this->_sections['mp3data']['show']):

            for ($this->_sections['mp3data']['index'] = $this->_sections['mp3data']['start'], $this->_sections['mp3data']['iteration'] = 1;
                 $this->_sections['mp3data']['iteration'] <= $this->_sections['mp3data']['total'];
                 $this->_sections['mp3data']['index'] += $this->_sections['mp3data']['step'], $this->_sections['mp3data']['iteration']++):
$this->_sections['mp3data']['rownum'] = $this->_sections['mp3data']['iteration'];
$this->_sections['mp3data']['index_prev'] = $this->_sections['mp3data']['index'] - $this->_sections['mp3data']['step'];
$this->_sections['mp3data']['index_next'] = $this->_sections['mp3data']['index'] + $this->_sections['mp3data']['step'];
$this->_sections['mp3data']['first']      = ($this->_sections['mp3data']['iteration'] == 1);
$this->_sections['mp3data']['last']       = ($this->_sections['mp3data']['iteration'] == $this->_sections['mp3data']['total']);
?>
    <div >
      <table width="530" border="0">
        <tr>
          <td><div style="padding-left:20px;"> <a href="<?php echo $this->_tpl_vars['site_url']; ?>
index.php?page=rd_mp3&action=show_mp3&id=<?php echo $this->_tpl_vars['mp3'][$this->_sections['mp3data']['index']]['album_id']; ?>
"> <img src="<?php echo $this->_tpl_vars['site_url']; ?>
album_images/<?php echo $this->_tpl_vars['mp3'][$this->_sections['mp3data']['index']]['album_image']; ?>
" width="69" height="69" alt="<?php echo $this->_tpl_vars['mp3'][$this->_sections['mp3data']['index']]['album_image']; ?>
" /> </a></div></td>
          <td><h3><a href="<?php echo $this->_tpl_vars['site_url']; ?>
index.php?page=rd_mp3&action=show_mp3&id=<?php echo $this->_tpl_vars['mp3'][$this->_sections['mp3data']['index']]['album_id']; ?>
"> <?php echo ((is_array($_tmp=$this->_tpl_vars['mp3'][$this->_sections['mp3data']['index']]['album_title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, '...') : smarty_modifier_truncate($_tmp, 40, '...')); ?>
</a> </h3>
            <p class="testTxt1"><i><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['mp3'][$this->_sections['mp3data']['index']]['album_desc'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 125, '...') : smarty_modifier_truncate($_tmp, 125, '...')); ?>
 </i></p></td>
        </tr>
        <tr>
          <td colspan="2" class="seprate3">&nbsp;</td>
        </tr>
      </table>
    </div>
    <?php endfor; endif; ?> <br class="spacer" />
    <?php if ($this->_tpl_vars['show_page']): ?>
    <div  align="center">
      <div > <?php echo $this->_tpl_vars['page_links']; ?>
</div>
    </div>
    <?php endif; ?>
   </div>
  <p class="testBot"></p>
  <br class="spacer" />
</div>
<br class="spacer" />