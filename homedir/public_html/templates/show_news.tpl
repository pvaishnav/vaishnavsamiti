<div>
	

		<div><h4>News Details</h4></div>
        
        <div class="center"> 
      
     	 <div class="maincontent col_23">
    
     <!--blog-->
      <ul class="bloglist">
        <li>
        {if $news[0].article_image!=''}
          <div class="postimage">
            <div class="blog-thumb">
		 <span ><img src="{$site_url}/news_images/{$news[0].article_image}" height="140" width="140"  alt="{$news[0].article_image}" align="left" /></span>
		 
            </div>
          </div>
          {/if}
          <div class="postcontent">                
            <h3> {$news[0].article_title}</h3>
            <p>{$news[0].article_desc}</p>
            
          </div>  
          <div class="clear"></div>
        </li>
        
      </ul>
     
    <!--blog end-->
      <div class="clear"></div>
    </div>
     
   		</div>

	
</div>
