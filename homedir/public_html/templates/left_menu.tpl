
{*
<div id="leftMain">
	<div id="left">
		<p class="leftTop"></p>
		<h2 class="homeDetail">Menu</h2>
		<ul class="leftLink">
		
{section name=menudata loop=$hot_menu}		
  <li><a href="{$site_url}index.php?page=rd_menu&action=show_menu&id={$hot_menu[menudata].menu_id}"><b>{$hot_menu[menudata].menu_title|truncate:30:'...':TRUE}</b></a></li>
{/section}    
		</ul>
		<p class="leftBot"></p>
 
       <div align="center">
		 <table border="0" width="170" cellspacing="0" cellpadding="0" style="border-width: 0px" height="468">
			
        {if 1 == $head_image[0].googlead}
       
        <tr>
			<td style="border-style: none; border-width: medium; text-align:center;">
			<script type="text/javascript"><!--
google_ad_client = "pub-6986243749094810";
/* 120x600, created 8/29/08 */
google_ad_slot = "3502887840";
google_ad_width = 140;
google_ad_height = 600;
//-->
</script>

<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
			</td>
		</tr>
        </table>
        {else}
        <tr>
		<td style="border-style: none; text-align:center; border-width: medium">
        <img src="{$site_url}other_images/{$head_image[0].head_left_image}" />
        </td>
		</tr>
        </table>
        {/if}
	</table>
</div>
       
	</div>
	
    <div align="center">
 <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.vaishnavsamaj.org&amp;width=170&amp;colorscheme=light&amp;connections=10&amp;stream=true&amp;header=true&amp;height=587" scrolling="no" frameborder="1" style="border:none; overflow:hidden; width:170px; height:287px;" allowTransparency="true"></iframe>
    </div>
	
   
    
		<br class="spacer" />
</div>
*}

