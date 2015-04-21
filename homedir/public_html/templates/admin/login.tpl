<HTML>
<HEAD>
<TITLE></TITLE>

<style type="text/css" >@import url("{$site_url}templates/admin/css/styles.css"); </style>

</HEAD>

<BODY >

<form method="post" action="admin.php?view=user&action=login">
<table border="0" width="100%" height="80%" cellpadding="0" cellspacing="0">

<tr height="40%"><td colspan="3">&nbsp;</td></tr>
<tr>
<td width="35%">&nbsp;</td>
<td width="30%" align="center" >
 <div style="display:table; border:#FF0000 1px solid; margin:2px; padding:1px"  align="center"  >
<table  border="0" width="100%" align="center" cellspacing="2" cellpadding="1">
  <tr> <td align="right">Admin Username:</td> <td> <input type="text" name="user"> </td> </tr>
  <tr> <td align="right">Admin Password:</td> <td> <input type="password" name="pass"> </td> </tr>
  {if $err}
	  <tr> <td align="center" colspan="2"> {$err}</td> </tr>
  {/if}
  <tr> <td colspan="2" align="center"><input type="submit" name="submit" value="Log In"></td>  </tr>
</table>
</div>
</td>
<td width="35%">&nbsp;</td>
</tr>
<tr height="40%" ><td colspan="3">&nbsp;</td></tr>

</table>
<input type="hidden" name="old_view" value="{$view}"  />
<input type="hidden" name="old_action" value="{$action}"  />
</form>

</BODY>
</HTML>