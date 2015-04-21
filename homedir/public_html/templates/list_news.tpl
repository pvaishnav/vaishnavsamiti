    <div id="testMain" >
  <p class="testtop"></p>
  <div class="center">
     <h2><span> News</span></h2>
    {section name=newsdata loop=$news}
    <div >
      <table width="620" border="0">
        <tr>
          <td>
          {if $news[newsdata].article_image!=''}
          <div class="postimage">
            <div class="blog-thumb">
              <a href="{$site_url}index.php?page=rd_news&action=show_news&id={$news[newsdata].article_id}"> <img src="{$site_url}/news_images/{$news[newsdata].article_image}" width="140" height="140" alt="{$news[newsdata].article_image}" /></a>
            </div>
          </div>
          {/if}
         </td>
          <td><h3><a href="{$site_url}index.php?page=rd_news&action=show_news&id={$news[newsdata].article_id}">
      {$news[newsdata].article_title|truncate:40:'...'}</a> </h3>
            <p ><i>{$news[newsdata].article_desc|strip_tags|truncate:125:'...'}</i></p></td>
        </tr>
        <tr>
          <td colspan="2" >&nbsp;</td>
        </tr>
      </table>
    </div>
    {/section}
    {if $show_page}
    <div  align="center">
      <div > {$page_links}</div>
    </div>
    {/if} 
   </div>
 
 
</div>

