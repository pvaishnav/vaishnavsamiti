<div id="testMain">
	<p class="testtop"></p>
		<div id="test">
		<h2><span>Gallery Detail</span></h2>
<table width="550" border="0">
  <tr>
    <td style="padding-left:20px;"><img src="{$site_url}album_images/{$imagehed[0].album_image}" width="110" height="110" alt="{$imagehed[0].album_image}" /></td>
    <td class="nor_text" style="vertical-align:text-top;"> <p style="width:390px;">
    <span class="headline">{$imagehed[0].album_title|truncate:80:'...'}</span><br />
    {$imagehed[0].album_desc|strip_tags|truncate:175:'...'}  </p></td>
  </tr>
  <tr><td colspan="2" class="seprate2">&nbsp;</td></tr>
</table>

    <br class="spacer" />
    
    
    
    
  
{if $image[0].ad_id!=''}
<div class="main_content_demo">
	<div style="float:left; width:530px; display:block;" class="alin">
    {section name=imgdata loop=$image}
		<div class="demo">
        <a href="{$site_url}album_image_gallery/{$image[imgdata].ad_data}" class="pirobox" title="{$image[imgdata].ad_title}"><img src="{$site_url}album_image_gallery/{$image[imgdata].ad_data}" alt="{$image[imgdata].ad_data}"  /></a>
        </div>
    {/section}
	</div>
</div>
<br class="spacer" />
{/if}




<p class="testBot"></p>
	<br class="spacer" />
</div>
<br class="spacer" />
</div>
<br class="spacer" />