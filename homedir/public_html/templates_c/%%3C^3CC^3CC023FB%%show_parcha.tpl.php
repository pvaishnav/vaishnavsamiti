<?php /* Smarty version 2.6.22, created on 2014-10-03 02:20:30
         compiled from show_parcha.tpl */ ?>
<div id="testMain">
	<p class="testtop"></p>
		<div id="test">
		<h2><span>Welcome Bikaner Place To See</span></h2>
        <?php if ($this->_tpl_vars['parcha'][0]['article_image'] != ''): ?>
             <span style="padding:0 0 0 15px;"><img src="<?php echo $this->_tpl_vars['site_url']; ?>
/parcha_images/<?php echo $this->_tpl_vars['parcha'][0]['article_image']; ?>
" style="max-width:300px; max-height:150px;" alt="<?php echo $this->_tpl_vars['parcha'][0]['article_image']; ?>
" /></span>
        <?php endif; ?>
		<h3> <?php echo $this->_tpl_vars['parcha'][0]['article_title']; ?>
</h3>
		 <p class="testTxt2">
		 <i><?php echo $this->_tpl_vars['parcha'][0]['article_desc']; ?>
</i> 
		 </p>

      
<br class="spacer" />		
</div>
			
<p class="testBot"></p>
	<br class="spacer" />
</div>
<br class="spacer" />