<div id="testMain" >
  <p class="testtop"></p>
  <div id="test">
    <h2><span>Welcome Bikaner Festival</span></h2>
    {section name=mp3data loop=$mp3}
    <div >
      <table width="530" border="0">
        <tr>
          <td><div style="padding-left:20px;"> <a href="{$site_url}index.php?page=rd_mp3&action=show_mp3&id={$mp3[mp3data].album_id}"> <img src="{$site_url}album_images/{$mp3[mp3data].album_image}" width="69" height="69" alt="{$mp3[mp3data].album_image}" /> </a></div></td>
          <td><h3><a href="{$site_url}index.php?page=rd_mp3&action=show_mp3&id={$mp3[mp3data].album_id}"> {$mp3[mp3data].album_title|truncate:40:'...'}</a> </h3>
            <p class="testTxt1"><i>{$mp3[mp3data].album_desc|strip_tags|truncate:125:'...'} </i></p></td>
        </tr>
        <tr>
          <td colspan="2" class="seprate3">&nbsp;</td>
        </tr>
      </table>
    </div>
    {/section} <br class="spacer" />
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
