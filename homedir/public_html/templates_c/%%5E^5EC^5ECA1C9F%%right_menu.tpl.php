<?php /* Smarty version 2.6.22, created on 2014-03-01 15:46:41
         compiled from right_menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'right_menu.tpl', 14, false),)), $this); ?>


<div class="sidebar">
      <div class="sidebar-wrapper">
        <div class="sidebar-wrapper-top">
        <h4><a href="<?php echo $this->_tpl_vars['site_url']; ?>
index.php?page=rd_news&action=list_news">Latest News</a></h4>
        </div>
          <div class="sidebar-wrapper-content">
            <div class="sidebox">
            <ul>
              <h2>On <?php echo $this->_tpl_vars['c_date']; ?>
</h2>
	<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['loop'] = is_array($_loop=$this->_tpl_vars['rightnews']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<p > 
    	<span><?php echo ((is_array($_tmp=$this->_tpl_vars['rightnews'][$this->_sections['data']['index']]['article_title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, '...') : smarty_modifier_truncate($_tmp, 30, '...')); ?>
<br /></span>
        <span><?php echo ((is_array($_tmp=$this->_tpl_vars['rightnews'][$this->_sections['data']['index']]['article_desc'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, '...') : smarty_modifier_truncate($_tmp, 150, '...')); ?>
</span>
        <a href="<?php echo $this->_tpl_vars['site_url']; ?>
index.php?page=rd_news&action=show_news&id=<?php echo $this->_tpl_vars['rightnews'][$this->_sections['data']['index']]['article_id']; ?>
"> more...</a></p>
        <br />
	<?php endfor; endif; ?>
    	
            </ul>
            <div class="clear"></div>
            </div>
          </div>
        <div class="sidebar-wrapper-bottom"></div>
      </div>
    </div>


	