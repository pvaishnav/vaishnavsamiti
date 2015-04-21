<?php /* Smarty version 2.6.22, created on 2014-03-03 22:02:09
         compiled from show_news.tpl */ ?>
<div>
	

		<div><h4>News Details</h4></div>
        
        <div class="center"> 
      
     	 <div class="maincontent col_23">
    
     <!--blog-->
      <ul class="bloglist">
        <li>
        <?php if ($this->_tpl_vars['news'][0]['article_image'] != ''): ?>
          <div class="postimage">
            <div class="blog-thumb">
		 <span ><img src="<?php echo $this->_tpl_vars['site_url']; ?>
/news_images/<?php echo $this->_tpl_vars['news'][0]['article_image']; ?>
" height="140" width="140"  alt="<?php echo $this->_tpl_vars['news'][0]['article_image']; ?>
" align="left" /></span>
		 
            </div>
          </div>
          <?php endif; ?>
          <div class="postcontent">                
            <h3> <?php echo $this->_tpl_vars['news'][0]['article_title']; ?>
</h3>
            <p><?php echo $this->_tpl_vars['news'][0]['article_desc']; ?>
</p>
            
          </div>  
          <div class="clear"></div>
        </li>
        
      </ul>
     
    <!--blog end-->
      <div class="clear"></div>
    </div>
     
   		</div>

	
</div>