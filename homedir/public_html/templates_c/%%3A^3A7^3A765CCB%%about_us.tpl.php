<?php /* Smarty version 2.6.22, created on 2014-03-02 13:42:19
         compiled from about_us.tpl */ ?>
<div  >

		<!--<div id="test">
		<div id="welcome">Welcome to IFCP </div>
    
  <?php if ($this->_tpl_vars['about'][0]['article_image'] != ''): ?>
	 <p class="testTxt1"><img src="<?php echo $this->_tpl_vars['site_url']; ?>
other_images/<?php echo $this->_tpl_vars['about'][0]['article_image']; ?>
" width="120" height="120" alt="<?php echo $this->_tpl_vars['about'][0]['article_image']; ?>
" /></p>
  <?php endif; ?>
		 <h3> <?php echo $this->_tpl_vars['about'][0]['article_title']; ?>
</h3>
		 <p class="testTxt2">
		 <i><?php echo $this->_tpl_vars['about'][0]['article_desc']; ?>
</i> 
		 </p>

<br class="spacer" />		
</div>-->
	<div class="center">		
		<div id="maincontent">
       
         <h4>Welcome to IFCP</h4>
        <?php if ($this->_tpl_vars['about'][0]['article_image'] != ''): ?>
        <div class="postimage">
            <div class="blog-thumb">
              <img src="<?php echo $this->_tpl_vars['site_url']; ?>
/other_images/<?php echo $this->_tpl_vars['about'][0]['article_image']; ?>
" width="140" height="140" alt="<?php echo $this->_tpl_vars['about'][0]['article_image']; ?>
" />
            </div>
          </div>
        <?php endif; ?>
        
        

  

            <div id="profiles">
              
              <h3><?php echo $this->_tpl_vars['about'][0]['article_title']; ?>
</h3>
		 <p >
		 <?php echo $this->_tpl_vars['about'][0]['article_desc']; ?>

		 </p>
              <div class="clear"></div>
            </div>
          </div>

  
    </div>
    </div>		
  
  
  