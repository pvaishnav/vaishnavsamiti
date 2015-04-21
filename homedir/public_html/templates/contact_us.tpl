<div class="center">
		<div><h3>Contact Detail</h3> </div>

<table width="500" border="1" cellspacing="2" cellpadding="2">
  <tr>
    <td>
    {if $contact[0].article_image!=''}
   		 <p class="testTxt1"><img src="{$site_url}other_images/{$contact[0].article_image}" width="150" height="150" alt="{$contact[0].article_image}" /></p>
		 {/if}
    </td>
    <td> <h3> {$contact[0].article_title}</h3> 
  
     <p >
		 <i>{$contact[0].article_desc}</i> 
		 </p>
         </td>
   
  </tr>
  <tr><td colspan="2" height="30px">&nbsp;</td></tr>
  <tr>
  		<td><h4><a title="Member">Member - 01 (Guardian)</a></h4></td>
        <td><h5><a>9090909090</a></h5></td>
   </tr>
   <tr>
  		<td><h4><a title="Member">Member - 02 (President)</a></h4></td>
        <td><h5><a>9090909090</a></h5></td>
   </tr>
   <tr>
  		<td><h4><a title="Member">Member - 03 (Vice President)</a></h4></td>
        <td><h5><a>9090909090</a></h5></td>
   </tr>
   <tr>
  		<td><h4><a title="Member">Member - 04 (Secretary)</a></h4></td>
        <td><h5><a>9090909090</a></h5></td>
   </tr>
</table>


</div>
		
