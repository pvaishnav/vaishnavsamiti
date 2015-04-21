<div id="testMain">
	<p class="testtop"></p>
		<div id="test">
		<h2><span>Welcome Bikaner Ringtones</span></h2>
		

   <div class="show_img"> <img src="{$site_url}album_images/{$ringtonehed[0].album_image}" width="110" 	height="110" alt="{$ringtonehed[0].album_image}" />
	<p><span class="headline"> {$ringtonehed[0].album_title|truncate:80:'...'}</span>
	<i>{$ringtonehed[0].album_desc|strip_tags|truncate:175:'...'}</i> </p>
		</div> 
  
	<div class="bgtextcolor">
    	<ul>
    	{section name=rngdata loop=$ringtone}
        	<li  style="background-color:{cycle values="#d7dbf1,#f9d3f2"}">
           
            <table width="100%" border="0">
              <tr>
                <td> {$ringtone[rngdata].ad_title}</td>
                <td width="15%" class="download"><a href="{$site_url}/album_ringtones/{$ringtone[rngdata].ad_data}">Download</a></td>
              </tr>
            </table>

            </li>
        {/section}
        </ul>
    </div>
	
	

 <br class="spacer" />		
</div>
			
<p class="testBot"></p>
	<br class="spacer" />
</div>
<br class="spacer" />