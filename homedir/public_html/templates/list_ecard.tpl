<div id="testMain">
	<p class="testtop"></p>
		<div id="test">
		<h2><span>Welcome Bikaner E-card Gallery</span></h2>
	<table width="550" border="0" cellpadding="0" cellspacing="5" style="padding:0 0 0 20px;">
  {section name=imagedata loop=$image}
 	
 {if $smarty.section.imagedata.index % 3==0}
         <tr>
     {/if}
   <td height="180">
   <a href="{$site_url}index.php?page=rd_ecard&action=show_ecard&id={$image[imagedata].album_id}"> 
   <span style="margin:0 0 0 -15px;"><img src="{$site_url}album_images/{$image[imagedata].album_image}" width="150" height="150" alt="{$image[imagedata].album_image}" style="border:4px solid #c9c672;" /></span></a>
   <br />
  <a href="{$site_url}index.php?page=rd_ecard&action=show_ecard&id={$image[imagedata].album_id}" title="{$image[imagedata].album_title}"><span class="nor_text">{$image[imagedata].album_title|truncate:30:'...'}</span></a>
		<br />
   </td>	
   {if ($smarty.section.imagedata.index+1) % 3==0}
         </tr>
     {/if}
	{*	<h3><a href="{$site_url}index.php?page=rd_ecard&action=show_ecard&id={$image[imagedata].album_id}">
      {$image[imagedata].album_title|truncate:40:'...'}</a>
		 </h3>
		 <p class="testTxt1"><i>{$image[imagedata].album_desc|strip_tags|truncate:125:'...'}  </i> </p>*}
        
    {/section}
   </table>
    
    
   	<br class="spacer" />
	{if $show_page}
	<div style=" width:530px; margin-left:14px; text-align:center; background-color:#f3f1ad;">
		<div>{$page_links}</div>
	</div>
	{/if}
			
	</div>	
			
<p class="testBot"></p>
	<br class="spacer" />
</div>
<br class="spacer" />
  
  