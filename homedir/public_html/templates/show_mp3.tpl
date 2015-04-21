{literal}
<script language="javascript">
function createWindow(cUrl,cName,cFeatures) {
var xWin = window.open(cUrl,cName,cFeatures)
}
</script> 
{/literal}

<div id="testMain">
	<p class="testtop"></p>
		<div id="test">
		<h2><span>Welcome Rajasthani Mp3 Song</span></h2>
		
		
	<div class="show_img">
        <img src="{$site_url}album_images/{$mp3hed[0].album_image}" width="110" height="110" alt="{$mp3hed[0].album_image}" />
        <p><span class="headline"> {$mp3hed[0].album_title|truncate:80:'...'}</span>
        <i>{$mp3hed[0].album_desc|truncate:175:'...'}</i></p>
    </div>
    

    <div class="bgtextcolor">
    	<ul>
    	{section name=mp3data loop=$mp3}
        	<li  style="background-color:{cycle values="#d7dbf1,#f9d3f2"}">
             <table width="100%" border="0">
              <tr>
                <td style="padding: 0 0px 0px 8px;"><a>{$mp3[mp3data].ad_title|truncate:50:'...'}</a></td>
                <td width="18%" class="download"><a href="javascript:createWindow('sound.php?song={$site_url}album_songs/{$mp3[mp3data].ad_data}&siturl={$site_url}','window2','width=480,height=285')">Play</a> | <a href="{$site_url}album_songs/{$mp3[mp3data].ad_data}" style="padding: 0 0px 0px 8px;">Download</a>
                </td>
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