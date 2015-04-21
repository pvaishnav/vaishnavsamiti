<div id="testMain">
	<p class="testtop"></p>
		<div id="test">
		<h2><span>Welcome Bikaner Ringtones</span></h2>
   
  {section name=rgtndata loop=$ringtone}
   <a href="{$site_url}index.php?page=rd_ringtone&action=show_ringtone&id={$ringtone[rgtndata].album_id}"> 
    <img src="{$site_url}/album_images/{$ringtone[rgtndata].album_image}" width="69" height="69" alt="{$ringtone[rgtndata].album_image}" /></a>
    	
		<h3><a href="{$site_url}index.php?page=rd_ringtone&action=show_ringtone&id={$ringtone[rgtndata].album_id}">
      {$ringtone[rgtndata].album_title|truncate:40:'...'}</a> 
		 </h3>
		 
		 <p class="testTxt1">
		 <i>{$ringtone[rgtndata].album_desc|strip_tags|truncate:125:'...'} </i> 
		 </p>
   {/section}
   	<br class="spacer" />
	{if $show_page}
	<div  align="center">
		<div > {$page_links}</div>
	</div>
	{/if}
			
	</div>	
			
<p class="testBot"></p>
	<br class="spacer" />
</div>
<br class="spacer" />