<?php /* Smarty version 2.6.22, created on 2014-03-01 16:15:21
         compiled from admin/view_home.tpl */ ?>
<div class="box_data"  >
<?php if ($this->_tpl_vars['page2'] != 'print_view_guest'): ?>
		<div class="menu">
		<div class="box_menu"  >
			<ul> 
				<li><a href="admin.php?view=user&action=change_password"> Change Password </a></li>
				<li> | </li>
				<li><a href="admin.php?view=admin_home&action=view_contact_us"> Contact Us</a></li>
				<li> | </li>
				<li><a href="admin.php?view=admin_home&action=view_about_us"> About Us </a></li>
				<li> | </li>
								<li><a href="admin.php?view=admin_home&action=view_guest_book"> Form </a></li>
                <li> | </li>
				
			</ul>
		</div>
	</div>
	<div class="dv_header">Wellcome to Home </div>
<?php endif; ?>	
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/".($this->_tpl_vars['page2']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
</div>