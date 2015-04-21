<div id="testMain">
	<p class="testtop"></p>
		<div id="test">
		<h2><span>Detail News</span></h2>

        {if $festival[0].article_image!=''}
        	{if $festival[0].article_id==11}
   			
             <div class="postimage">
            <div class="blog-thumb">
              <img src="{$site_url}/other_images/{$festival[0].article_image}" width="140" height="140" alt="{$festival[0].article_image}" />
            </div>
          </div>
             
            {else}
            
            <div class="postimage">
            <div class="blog-thumb">
              <img src="{$site_url}/festival_images/{$festival[0].article_image}" width="140" height="140" alt="{$festival[0].article_image}" />
            </div>
          </div>
            
            {/if}
			<h3> {$festival[0].article_title}</h3>
		 <p class="testTxt2">
		 <i>{$festival[0].article_desc}</i> </p>

    	{else}
			<h3> {$festival[0].article_title}</h3>
		 <p class="testTxt2">
		 <i>{$festival[0].article_desc}</i></p>
      {/if}
		
</div>

</div>
	
  
  