

<div class="sidebar">
      <div class="sidebar-wrapper">
        <div class="sidebar-wrapper-top">
        <h4><a href="{$site_url}index.php?page=rd_news&action=list_news">Latest News</a></h4>
        </div>
          <div class="sidebar-wrapper-content">
            <div class="sidebox">
            <ul>
              <h2>On {$c_date}</h2>
	{section name=data loop=$rightnews}
		<p > 
    	<span>{$rightnews[data].article_title|truncate:30:'...'}<br /></span>
        <span>{$rightnews[data].article_desc|truncate:150:'...'}</span>
        <a href="{$site_url}index.php?page=rd_news&action=show_news&id={$rightnews[data].article_id}"> more...</a></p>
        <br />
	{/section}
    	
            </ul>
            <div class="clear"></div>
            </div>
          </div>
        <div class="sidebar-wrapper-bottom"></div>
      </div>
    </div>


	