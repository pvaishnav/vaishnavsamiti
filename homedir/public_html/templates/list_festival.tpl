<div >

  <div >
    <div><h3>We are in news</h3></div>
    {section name=hisdata loop=$festival}
    <div >
    
     <div class="center"> 
      
      <div class="maincontent col_23">
    
     <!--blog-->
      <ul class="bloglist">
        <li>
          <div class="postimage">
            <div class="blog-thumb">
              <img src="{$site_url}/festival_images/{$festival[hisdata].article_image}" width="140" height="140" alt="{$festival[hisdata].article_image}"  />
            </div>
          </div>
          
          <div class="postcontent">                
            <h3><a href="{$site_url}index.php?page=rd_festival&action=show_festival&id={$festival[hisdata].article_id}" ></a></h3>
            <p>{$festival[hisdata].article_desc|strip_tags|truncate:125:'...'} </p>
            <a href="{$site_url}index.php?page=rd_festival&action=show_festival&id={$festival[hisdata].article_id}"> {$festival[hisdata].article_title|truncate:40:'...'}</a>
          </div>  
          <div class="clear"></div>
        </li>
        
      </ul>
     
    <!--blog end-->
      <div class="clear"></div>
    </div>
     
    </div>  
    </div>
    {/section} 
    {if $show_page}
    <div  align="center">
      <div > {$page_links}</div>
    </div>
    {/if} 
   </div>
  
  
</div>

