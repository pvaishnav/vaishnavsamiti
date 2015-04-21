<div class="box_data"  >
{if $page2!='print_view_guest'}
		<div class="menu">
		<div class="box_menu"  >
			<ul> 
				<li><a href="admin.php?view=user&action=change_password"> Change Password </a></li>
				<li> | </li>
				<li><a href="admin.php?view=admin_home&action=view_contact_us"> Contact Us</a></li>
				<li> | </li>
				<li><a href="admin.php?view=admin_home&action=view_about_us"> About Us </a></li>
				<li> | </li>
				{*<li><a href="admin.php?view=admin_home&action=view_my_account"> My Account </a></li>
				<li> | </li>*}
				<li><a href="admin.php?view=admin_home&action=view_guest_book"> Form </a></li>
                <li> | </li>
				{* <li><a href="admin.php?view=admin_home&action=view_suggestion_book"> Suggestion </a></li>
                <li> | </li>
				<li><a href="admin.php?view=ecard_gallery&action=show_ecard_gallery"> E-card </a></li>   *}

			</ul>
		</div>
	</div>
	<div class="dv_header">Wellcome to Home </div>
{/if}	
	{include file="admin/$page2.tpl"}
	
</div>
