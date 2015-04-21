<?php /* Smarty version 2.6.22, created on 2014-03-02 13:59:45
         compiled from list_news.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'list_news.tpl', 19, false),array('modifier', 'strip_tags', 'list_news.tpl', 20, false),)), $this); ?>
    <div id="testMain" >
  <p class="testtop"></p>
  <div class="center">
     <h2><span> News</span></h2>
    <?php unset($this->_sections['newsdata']);
$this->_sections['newsdata']['name'] = 'newsdata';
$this->_sections['newsdata']['loop'] = is_array($_loop=$this->_tpl_vars['news']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['newsdata']['show'] = true;
$this->_sections['newsdata']['max'] = $this->_sections['newsdata']['loop'];
$this->_sections['newsdata']['step'] = 1;
$this->_sections['newsdata']['start'] = $this->_sections['newsdata']['step'] > 0 ? 0 : $this->_sections['newsdata']['loop']-1;
if ($this->_sections['newsdata']['show']) {
    $this->_sections['newsdata']['total'] = $this->_sections['newsdata']['loop'];
    if ($this->_sections['newsdata']['total'] == 0)
        $this->_sections['newsdata']['show'] = false;
} else
    $this->_sections['newsdata']['total'] = 0;
if ($this->_sections['newsdata']['show']):

            for ($this->_sections['newsdata']['index'] = $this->_sections['newsdata']['start'], $this->_sections['newsdata']['iteration'] = 1;
                 $this->_sections['newsdata']['iteration'] <= $this->_sections['newsdata']['total'];
                 $this->_sections['newsdata']['index'] += $this->_sections['newsdata']['step'], $this->_sections['newsdata']['iteration']++):
$this->_sections['newsdata']['rownum'] = $this->_sections['newsdata']['iteration'];
$this->_sections['newsdata']['index_prev'] = $this->_sections['newsdata']['index'] - $this->_sections['newsdata']['step'];
$this->_sections['newsdata']['index_next'] = $this->_sections['newsdata']['index'] + $this->_sections['newsdata']['step'];
$this->_sections['newsdata']['first']      = ($this->_sections['newsdata']['iteration'] == 1);
$this->_sections['newsdata']['last']       = ($this->_sections['newsdata']['iteration'] == $this->_sections['newsdata']['total']);
?>
    <div >
      <table width="620" border="0">
        <tr>
          <td>
          <?php if ($this->_tpl_vars['news'][$this->_sections['newsdata']['index']]['article_image'] != ''): ?>
          <div class="postimage">
            <div class="blog-thumb">
              <a href="<?php echo $this->_tpl_vars['site_url']; ?>
index.php?page=rd_news&action=show_news&id=<?php echo $this->_tpl_vars['news'][$this->_sections['newsdata']['index']]['article_id']; ?>
"> <img src="<?php echo $this->_tpl_vars['site_url']; ?>
/news_images/<?php echo $this->_tpl_vars['news'][$this->_sections['newsdata']['index']]['article_image']; ?>
" width="140" height="140" alt="<?php echo $this->_tpl_vars['news'][$this->_sections['newsdata']['index']]['article_image']; ?>
" /></a>
            </div>
          </div>
          <?php endif; ?>
         </td>
          <td><h3><a href="<?php echo $this->_tpl_vars['site_url']; ?>
index.php?page=rd_news&action=show_news&id=<?php echo $this->_tpl_vars['news'][$this->_sections['newsdata']['index']]['article_id']; ?>
">
      <?php echo ((is_array($_tmp=$this->_tpl_vars['news'][$this->_sections['newsdata']['index']]['article_title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, '...') : smarty_modifier_truncate($_tmp, 40, '...')); ?>
</a> </h3>
            <p ><i><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['news'][$this->_sections['newsdata']['index']]['article_desc'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 125, '...') : smarty_modifier_truncate($_tmp, 125, '...')); ?>
</i></p></td>
        </tr>
        <tr>
          <td colspan="2" >&nbsp;</td>
        </tr>
      </table>
    </div>
    <?php endfor; endif; ?>
    <?php if ($this->_tpl_vars['show_page']): ?>
    <div  align="center">
      <div > <?php echo $this->_tpl_vars['page_links']; ?>
</div>
    </div>
    <?php endif; ?> 
   </div>
 
 
</div>
