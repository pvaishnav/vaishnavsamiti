

<form name="change_pass" method="post" action="#">
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr><td align="left" style="padding-left:10px; padding-top:10px; font-size:16px; font-weight:700; color:White; background:#6699FF">Change Your Password.</td></tr>
<tr>
<td width="30%" align="center" valign="top" style="padding-top:40px;" >
<table  border="0" width="100%" align="center" cellspacing="0" cellpadding="0">
<tr><td colspan="2" align="center"><h3 style="color:#F00">{$msg}</h3></td></tr>
  <tr> <td align="right">Username:</td> <td><input type="text" name="user"> </td><td><div id="alert_user"></div></td> </tr>
  <tr><td>&nbsp;</td></tr>
  <tr> <td align="right">Old Password:</td> <td> <input type="password" name="oldpass"> </td> <td><div id="alert_oldpass"></div></td> </tr>
  <tr><td>&nbsp;</td></tr>
  <tr> <td align="right">Password:</td> <td> <input type="password" name="newpass"> </td><td><div id="alert_newpass"></div></td> </tr>
    <tr><td>&nbsp;</td></tr>
  <tr> <td align="right">Confirm Password:</td> <td> <input type="password" name="copass"> </td><td><div id="alert_copass"></div></td> </tr>
    <tr><td>&nbsp;</td></tr>
  <tr> <td colspan="2" align="center"><input type="submit" name="submit" value="Change Password" onClick="return Valid_change_password(document.change_pass);"></td>  </tr>
</table></td>
</tr>
</table>

</form>
