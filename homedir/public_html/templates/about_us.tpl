<div  >

		<!--<div id="test">
		<div id="welcome">Welcome to IFCP </div>
    
  {if $about[0].article_image!=''}
	 <p class="testTxt1"><img src="{$site_url}other_images/{$about[0].article_image}" width="120" height="120" alt="{$about[0].article_image}" /></p>
  {/if}
		 <h3> {$about[0].article_title}</h3>
		 <p class="testTxt2">
		 <i>{$about[0].article_desc}</i> 
		 </p>

<br class="spacer" />		
</div>-->
	<div class="center">		
		<div id="maincontent">
       
         <h4>Welcome to IFCP</h4>
        {if $about[0].article_image!=''}
        <div class="postimage">
            <div class="blog-thumb">
              <img src="{$site_url}/other_images/{$about[0].article_image}" width="140" height="140" alt="{$about[0].article_image}" />
            </div>
          </div>
        {/if}
        
        

  

            <div id="profiles">
              
              <h3>{$about[0].article_title}</h3>
		 <p >
		 {$about[0].article_desc}
		 </p>
              <div class="clear"></div>
            </div>
          </div>

  
    </div>
    </div>		
  
  
  