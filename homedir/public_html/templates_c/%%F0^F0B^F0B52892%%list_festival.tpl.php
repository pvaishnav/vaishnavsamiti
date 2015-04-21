<?php /* Smarty version 2.6.22, created on 2014-03-01 16:52:18
         compiled from list_festival.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'list_festival.tpl', 23, false),array('modifier', 'truncate', 'list_festival.tpl', 23, false),)), $this); ?>
<div >

  <div >
    <div><h3>We are in news</h3></div>
    <?php unset($this->_sections['hisdata']);
$this->_sections['hisdata']['name'] = 'hisdata';
$this->_sections['hisdata']['loop'] = is_array($_loop=$this->_tpl_vars['festival']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['hisdata']['show'] = true;
$this->_sections['hisdata']['max'] = $this->_sections['hisdata']['loop'];
$this->_sections['hisdata']['step'] = 1;
$this->_sections['hisdata']['start'] = $this->_sections['hisdata']['step'] > 0 ? 0 : $this->_sections['hisdata']['loop']-1;
if ($this->_sections['hisdata']['show']) {
    $this->_sections['hisdata']['total'] = $this->_sections['hisdata']['loop'];
    if ($this->_sections['hisdata']['total'] == 0)
        $this->_sections['hisdata']['show'] = false;
} else
    $this->_sections['hisdata']['total'] = 0;
if ($this->_sections['hisdata']['show']):

            for ($this->_sections['hisdata']['index'] = $this->_sections['hisdata']['start'], $this->_sections['hisdata']['iteration'] = 1;
                 $this->_sections['hisdata']['iteration'] <= $this->_sections['hisdata']['total'];
                 $this->_sections['hisdata']['index'] += $this->_sections['hisdata']['step'], $this->_sections['hisdata']['iteration']++):
$this->_sections['hisdata']['rownum'] = $this->_sections['hisdata']['iteration'];
$this->_sections['hisdata']['index_prev'] = $this->_sections['hisdata']['index'] - $this->_sections['hisdata']['step'];
$this->_sections['hisdata']['index_next'] = $this->_sections['hisdata']['index'] + $this->_sections['hisdata']['step'];
$this->_sections['hisdata']['first']      = ($this->_sections['hisdata']['iteration'] == 1);
$this->_sections['hisdata']['last']       = ($this->_sections['hisdata']['iteration'] == $this->_sections['hisdata']['total']);
?>
    <div >
    
     <div class="center"> 
      
      <div class="maincontent col_23">
    
     <!--blog-->
      <ul class="bloglist">
        <li>
          <div class="postimage">
            <div class="blog-thumb">
              <img src="<?php echo $this->_tpl_vars['site_url']; ?>
/festival_images/<?php echo $this->_tpl_vars['festival'][$this->_sections['hisdata']['index']]['article_image']; ?>
" width="140" height="140" alt="<?php echo $this->_tpl_vars['festival'][$this->_sections['hisdata']['index']]['article_image']; ?>
"  />
            </div>
          </div>
          
          <div class="postcontent">                
            <h3><a href="<?php echo $this->_tpl_vars['site_url']; ?>
index.php?page=rd_festival&action=show_festival&id=<?php echo $this->_tpl_vars['festival'][$this->_sections['hisdata']['index']]['article_id']; ?>
" ></a></h3>
            <p><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['festival'][$this->_sections['hisdata']['index']]['article_desc'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 125, '...') : smarty_modifier_truncate($_tmp, 125, '...')); ?>
 </p>
            <a href="<?php echo $this->_tpl_vars['site_url']; ?>
index.php?page=rd_festival&action=show_festival&id=<?php echo $this->_tpl_vars['festival'][$this->_sections['hisdata']['index']]['article_id']; ?>
"> <?php echo ((is_array($_tmp=$this->_tpl_vars['festival'][$this->_sections['hisdata']['index']]['article_title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, '...') : smarty_modifier_truncate($_tmp, 40, '...')); ?>
</a>
          </div>  
          <div class="clear"></div>
        </li>
        
      </ul>
     
    <!--blog end-->
      <div class="clear"></div>
    </div>
     
    </div>  
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
