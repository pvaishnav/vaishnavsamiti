<?php /* Smarty version 2.6.22, created on 2014-03-04 05:02:53
         compiled from show_festival.tpl */ ?>
<div id="testMain">
	<p class="testtop"></p>
		<div id="test">
		<h2><span>Detail News</span></h2>

        <?php if ($this->_tpl_vars['festival'][0]['article_image'] != ''): ?>
        	<?php if ($this->_tpl_vars['festival'][0]['article_id'] == 11): ?>
   			
             <div class="postimage">
            <div class="blog-thumb">
              <img src="<?php echo $this->_tpl_vars['site_url']; ?>
/other_images/<?php echo $this->_tpl_vars['festival'][0]['article_image']; ?>
" width="140" height="140" alt="<?php echo $this->_tpl_vars['festival'][0]['article_image']; ?>
" />
            </div>
          </div>
             
            <?php else: ?>
            
            <div class="postimage">
            <div class="blog-thumb">
              <img src="<?php echo $this->_tpl_vars['site_url']; ?>
/festival_images/<?php echo $this->_tpl_vars['festival'][0]['article_image']; ?>
" width="140" height="140" alt="<?php echo $this->_tpl_vars['festival'][0]['article_image']; ?>
" />
            </div>
          </div>
            
            <?php endif; ?>
			<h3> <?php echo $this->_tpl_vars['festival'][0]['article_title']; ?>
</h3>
		 <p class="testTxt2">
		 <i><?php echo $this->_tpl_vars['festival'][0]['article_desc']; ?>
</i> </p>

    	<?php else: ?>
			<h3> <?php echo $this->_tpl_vars['festival'][0]['article_title']; ?>
</h3>
		 <p class="testTxt2">
		 <i><?php echo $this->_tpl_vars['festival'][0]['article_desc']; ?>
</i></p>
      <?php endif; ?>
		
</div>

</div>
	
  
  