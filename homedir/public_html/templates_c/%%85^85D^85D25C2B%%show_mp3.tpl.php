<?php /* Smarty version 2.6.22, created on 2014-10-03 02:53:15
         compiled from show_mp3.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'show_mp3.tpl', 17, false),array('function', 'cycle', 'show_mp3.tpl', 25, false),)), $this); ?>
<?php echo '
<script language="javascript">
function createWindow(cUrl,cName,cFeatures) {
var xWin = window.open(cUrl,cName,cFeatures)
}
</script> 
'; ?>


<div id="testMain">
	<p class="testtop"></p>
		<div id="test">
		<h2><span>Welcome Rajasthani Mp3 Song</span></h2>
		
		
	<div class="show_img">
        <img src="<?php echo $this->_tpl_vars['site_url']; ?>
album_images/<?php echo $this->_tpl_vars['mp3hed'][0]['album_image']; ?>
" width="110" height="110" alt="<?php echo $this->_tpl_vars['mp3hed'][0]['album_image']; ?>
" />
        <p><span class="headline"> <?php echo ((is_array($_tmp=$this->_tpl_vars['mp3hed'][0]['album_title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 80, '...') : smarty_modifier_truncate($_tmp, 80, '...')); ?>
</span>
        <i><?php echo ((is_array($_tmp=$this->_tpl_vars['mp3hed'][0]['album_desc'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 175, '...') : smarty_modifier_truncate($_tmp, 175, '...')); ?>
</i></p>
    </div>
    

    <div class="bgtextcolor">
    	<ul>
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
        	<li  style="background-color:<?php echo smarty_function_cycle(array('values' => "#d7dbf1,#f9d3f2"), $this);?>
">
             <table width="100%" border="0">
              <tr>
                <td style="padding: 0 0px 0px 8px;"><a><?php echo ((is_array($_tmp=$this->_tpl_vars['mp3'][$this->_sections['mp3data']['index']]['ad_title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50, '...') : smarty_modifier_truncate($_tmp, 50, '...')); ?>
</a></td>
                <td width="18%" class="download"><a href="javascript:createWindow('sound.php?song=<?php echo $this->_tpl_vars['site_url']; ?>
album_songs/<?php echo $this->_tpl_vars['mp3'][$this->_sections['mp3data']['index']]['ad_data']; ?>
&siturl=<?php echo $this->_tpl_vars['site_url']; ?>
','window2','width=480,height=285')">Play</a> | <a href="<?php echo $this->_tpl_vars['site_url']; ?>
album_songs/<?php echo $this->_tpl_vars['mp3'][$this->_sections['mp3data']['index']]['ad_data']; ?>
" style="padding: 0 0px 0px 8px;">Download</a>
                </td>
              </tr>
            </table>
            </li>
        <?php endfor; endif; ?>
        </ul>
    </div>
    
    
    
    

<br class="spacer" />		
</div>
			
<p class="testBot"></p>
	<br class="spacer" />
</div>
<br class="spacer" />