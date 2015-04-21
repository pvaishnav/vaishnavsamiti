<?php /* Smarty version 2.6.22, created on 2014-03-01 21:55:27
         compiled from contact_us.tpl */ ?>
<div class="center">
		<div><h3>Contact Detail</h3> </div>

<table width="500" border="1" cellspacing="2" cellpadding="2">
  <tr>
    <td>
    <?php if ($this->_tpl_vars['contact'][0]['article_image'] != ''): ?>
   		 <p class="testTxt1"><img src="<?php echo $this->_tpl_vars['site_url']; ?>
other_images/<?php echo $this->_tpl_vars['contact'][0]['article_image']; ?>
" width="150" height="150" alt="<?php echo $this->_tpl_vars['contact'][0]['article_image']; ?>
" /></p>
		 <?php endif; ?>
    </td>
    <td> <h3> <?php echo $this->_tpl_vars['contact'][0]['article_title']; ?>
</h3> 
  
     <p >
		 <i><?php echo $this->_tpl_vars['contact'][0]['article_desc']; ?>
</i> 
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
		