<div id="testMain">
	<p class="testtop"></p>
		<div id="test">
		<h2><span>Welcome {$menu[0].menu_title}</span></h2>

  
        {if $menu[0].menu_image!=''}
		 <span style="padding:0 0 0 15px;"><img src="{$site_url}/menu_images/{$menu[0].menu_image}" style="max-width:300px; max-height:150px;" alt="{$menu[0].article_image}" /></span>
		 {/if}
		 <p class="testTxt2">
		 <i>{$menu[0].menu_desc} </i> 
		 </p>
	    </div>	
			
<p class="testBot"></p>
	<br class="spacer" />
</div>
<br class="spacer" />