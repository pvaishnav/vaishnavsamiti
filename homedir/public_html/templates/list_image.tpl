<div>
{*<div id="authorbox" >*}
		<div>
        
        <div class="center working_area">
		 <div><h3>Our Gallery</h3></div>
	<table width="550" border="0" cellpadding="0" cellspacing="5" style="padding:0 0 0 20px;">
  {section name=imagedata loop=$image}
 	
 {if $smarty.section.imagedata.index % 3==0}
         <tr>
     {/if}
      
   <td height="180">
   
   <div class="postimage">
            <div class="blog-thumb">
             <a href="{$site_url}index.php?page=rd_image&action=show_image&id={$image[imagedata].album_id}"> 
  <span > <img src="{$site_url}album_images/{$image[imagedata].album_image}" width="140" height="140" alt="{$image[imagedata].album_image}"  /></span></a>
            </div>
          </div>
   
   
   
   
   <br />
  <a href="{$site_url}index.php?page=rd_image&action=show_image&id={$image[imagedata].album_id}" title="{$image[imagedata].album_title}"><span class="nor_text">{$image[imagedata].album_title|truncate:30:'...'}</span></a>
		<br />
   </td>
   	
   {if ($smarty.section.imagedata.index+1) % 3==0}
         </tr>
     {/if}
	{*	<h3><a href="{$site_url}index.php?page=rd_image&action=show_image&id={$image[imagedata].album_id}">
      {$image[imagedata].album_title|truncate:40:'...'}</a>
		 </h3>
		 <p class="testTxt1"><i>{$image[imagedata].album_desc|strip_tags|truncate:125:'...'}  </i> </p>*}
        
    {/section}
   </table>
  
    
    <div id="authorbox">
           
             <div class="detail">
               {if $show_page}
                <div style="text-align:center;">
                    <div>{$page_links}</div>
                </div>
                {/if}
             </div>
             
             <div class="clear"></div>
    </div>
    
    
    
   
	
			
	</div>	
	  </div>		

	
</div>

  
  