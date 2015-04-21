<div id="testMain">
	<p class="testtop"></p>
		<div id="test">
		<h2><span>Welcome Bikaner Place To See</span></h2>
        {if $parcha[0].article_image!=''}
             <span style="padding:0 0 0 15px;"><img src="{$site_url}/parcha_images/{$parcha[0].article_image}" style="max-width:300px; max-height:150px;" alt="{$parcha[0].article_image}" /></span>
        {/if}
		<h3> {$parcha[0].article_title}</h3>
		 <p class="testTxt2">
		 <i>{$parcha[0].article_desc}</i> 
		 </p>

      
<br class="spacer" />		
</div>
			
<p class="testBot"></p>
	<br class="spacer" />
</div>
<br class="spacer" />