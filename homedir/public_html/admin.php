<?php session_start();

include("global.php");
$smarty = new Smarty;

$smarty->compile_check = true;
$db=new DB;
$db->connect(HOST,USER,PASS,DATABASE);
$def_page='index.tpl';
$page="view_home";

$page2="";$page3="login_frm";

$livemode=true;

if($livemode){
	$smarty->assign('site_url',"http://vaishnavsamiti.com/" );
}
else
{
	$smarty->assign('site_url',"http://192.168.1.10/vaishnavsamaj/" );
}
//echo SITEURL;
//echo "user=".$_SESSION['user']." pass=".$_SESSION['pass'];
//echo "id=". session_id("azizchouanyahoo-co-in" );
if((!isset($_SESSION['user']))  && (!isset($_SESSION['pass'])))
{
	 $user = new user; $user->login();$page='login';
	 
	 $smarty->assign('page',$page );
	// if(isset($_REQUEST['view'])) $smarty->assign('view',$_REQUEST['view']);
	// if(isset($_REQUEST['action'])) $smarty->assign('action',$_REQUEST['action']);
	 $smarty->display('admin/'.$page.'.tpl');
	// echo " not varified user";
	exit;
}
/*else
{
	echo " varified";
}
*///
//echo "view =".$_REQUEST['view'];
//print_r($_REQUEST);exit;
	
	switch ($_REQUEST['view'])
	{
		case 'admin_home': $admin_home = new admin_home; // $admin_home->view_home();
		
		$page='view_home';//echo $page."1";//break;
//				echo $_REQUEST['submit'];
		switch ($_REQUEST['action'])
		{
		case 'view_welcome_home':$admin_home->view_welcome_home(); 
		$page2='view_home_content';$smarty->assign('page2',$page2); break;
		
		case 'view_contact_us':  $admin_home->view_contact_us(); 
		$page2='view_home_content'; $smarty->assign('page2',$page2);break;
		
		case 'view_about_us':  $admin_home->view_about_us(); 
		$page2='view_home_content'; $smarty->assign('page2',$page2); break;
		
		
		case 'edit_welcome_home':$admin_home->edit_welcome_home(); 
		$page2='edit_home_content';$smarty->assign('page2',$page2); break;
		
		case 'edit_contact_us':  $admin_home->edit_contact_us(); 
		$page2='edit_home_content'; $smarty->assign('page2',$page2);break;
		
		case 'edit_about_us':  $admin_home->edit_about_us(); 
		$page2='edit_home_content'; $smarty->assign('page2',$page2); break;
		
		case 'view_my_account':$admin_home->view_my_account(); 
		$page2='view_my_account';$smarty->assign('page2',$page2); break;
		
		case 'view_guest_book':$admin_home->view_guest_book(); 
		$page2='view_guest_book';$smarty->assign('page2',$page2); break;
		
		case 'view_guest':$admin_home->view_guest(); 
		$page2='view_guest';$smarty->assign('page2',$page2); break;
		
		case 'print_view_guest':$admin_home->view_guest(); 
		$page2='print_view_guest';$smarty->assign('page2',$page2); break;
		
		case 'del_guest_book':$admin_home->del_guest_book(); 
		break;
		
		case 'view_suggestion_book':$admin_home->view_suggestion_book(); 
		$page2='view_suggestion_book';$smarty->assign('page2',$page2); break;
		
		case 'view_suggestion':$admin_home->view_suggestion(); 
		$page2='view_suggestion';$smarty->assign('page2',$page2); break;
		
		case 'del_suggestion':$admin_home->del_suggestion(); 
		break;
		
		
		
		case 'edit_my_account':$admin_home->edit_my_account(); 
		$page2='edit_my_account';$smarty->assign('page2',$page2); break;
		
		case 'show_other_image':$admin_home->show_other_image(); 
		$page2='show_other_image';$smarty->assign('page2',$page2); break;
		
		default: $admin_home->view_welcome_home();$page='view_home';
		$page2='view_home_content'; $smarty->assign('page2',$page2);
			break;
		}
		
		break;
		
		case 'user':	$user = new user; 
		switch ($_REQUEST['action'])
		{
			case 'login':  $user->login(); $page='login';  $smarty->display('admin/'.$page.'.tpl');
					exit;  break;
			case 'logout':  $user->logout(); break;
			case 'change_password':  $user->change_password(); $page='change_password'; break;
			case 'upload_document':  $user->upload_document(); $page='upload_document'; break;
			default: $user->login(); $page='login'; break;
		}	
		break;
		
		case 'album':  $album = new album; 
//
		switch ($_REQUEST['action'])
		{
			case 'show_album':  $album->show_album();$page='show_album'; break;
			case 'add_album':  $album->add_album();break;
			case 'del_album':  $album->del_album();break;
			case 'set_album':  $album->set_album();break;
			case 'edit_album':  $album->edit_album(); $page='edit_album';break;
			default: $album->show_album();$page='show_album'; break;
		}	
		break;
		case 'music_gallery':  $music_gallery = new music_gallery; 
		switch ($_REQUEST['action'])
		{
			case 'show_music_gallery':  $music_gallery->show_music_gallery();$page='show_music_gallery'; break;
			case 'add_music_gallery':  $music_gallery->add_music_gallery();break;
			case 'del_gallery':  $music_gallery->del_gallery();break;
			case 'set_gallery':  $music_gallery->set_gallery();break;
			case 'edit_gallery':  $music_gallery->edit_gallery(); $page='edit_gallery'; break;						
			default:   $music_gallery->show_music_gallery();$page='show_music_gallery'; break;
		}	
		break;
		
		case 'image_gallery':  $image_gallery = new image_gallery; 
		switch ($_REQUEST['action'])
		{
			case 'show_image_gallery':  $image_gallery->show_image_gallery();$page='show_image_gallery'; break;
			case 'add_image_gallery':  $image_gallery->add_image_gallery();break;
			case 'del_gallery':  $image_gallery->del_gallery();break;
			case 'set_gallery':  $image_gallery->set_gallery();break;			
			case 'edit_gallery':  $image_gallery->edit_gallery(); $page='edit_gallery'; break;			
			default:   $image_gallery->show_image_gallery();$page='show_image_gallery'; break;
		}	
		break;
		
		case 'ecard_gallery':  $ecard_gallery = new ecard_gallery; 
		switch ($_REQUEST['action'])
		{
			case 'show_ecard_gallery':  $ecard_gallery->show_ecard_gallery();$page='show_ecard_gallery'; break;
			case 'add_ecard_gallery':  $ecard_gallery->add_ecard_gallery();break;
			case 'del_gallery':  $ecard_gallery->del_gallery();break;
			case 'set_gallery':  $ecard_gallery->set_gallery();break;			
			case 'edit_gallery':  $ecard_gallery->edit_gallery(); $page='edit_ecard'; break;			
			default:   $ecard_gallery->show_ecard_gallery();$page='show_ecard_gallery'; break;
		}	
		break;
		
		case 'ringtone_gallery':  $ringtone_gallery = new ringtone_gallery; 
		switch ($_REQUEST['action'])
		{
			case 'show_ringtone_gallery':  $ringtone_gallery->show_ringtone_gallery();$page='show_ringtone_gallery'; break;
			case 'add_ringtone_gallery':  $ringtone_gallery->add_ringtone_gallery();break;
			case 'del_gallery':  $ringtone_gallery->del_gallery();break;
			case 'set_gallery':  $ringtone_gallery->set_gallery();break;						
			case 'edit_gallery':  $ringtone_gallery->edit_gallery(); $page='edit_gallery'; break;						
			default:     $ringtone_gallery->show_ringtone_gallery();$page='show_ringtone_gallery'; break;
		}	
		break;

		case 'festival':  $festival = new festival; 
		switch ($_REQUEST['action'])
		{
			case 'show_festival':  $festival->show_festival();$page='show_festival'; break;
			case 'add_festival':  $festival->add_festival();break;
			case 'del_festival':  $festival->del_festival();break;
			case 'set_festival':  $festival->set_festival();break;
			case 'set_show':  $festival->set_show();break;
			case 'edit_festival':  $festival->edit_festival(); $page='edit_festival'; break;
			default: $festival->show_festival();$page='show_festival'; break;
		}	
		break;

		case 'parcha':  $parcha = new parcha; 
		switch ($_REQUEST['action'])
		{
			case 'show_parcha':  $parcha->show_parcha();$page='show_parcha'; break;
			case 'add_parcha':  $parcha->add_parcha();break;
			case 'del_parcha':  $parcha->del_parcha();break;
			case 'set_parcha':  $parcha->set_parcha();break;
			case 'set_show':  $parcha->set_show();break;
			case 'edit_parcha':  $parcha->edit_parcha(); $page='edit_parcha'; break;			
			default: $parcha->show_parcha();$page='show_parcha'; break;
		}	
		break;
		
		case 'menu':  $menu = new menu; 
		switch ($_REQUEST['action'])
		{
			case 'show_menu':  $menu->show_menu();$page='show_menu'; break;
			case 'add_menu':  $menu->add_menu();break;
			case 'change_menu_pos':  $menu->change_menu_pos();break;
			case 'del_menu':  $menu->del_menu();break;
			case 'set_menu':  $menu->set_menu();break;
			case 'set_show':  $menu->set_show();break;
			case 'edit_menu':  $menu->edit_menu(); $page='edit_menu'; break;			
			default: $menu->show_menu();$page='show_menu'; break;
		}	
		break;
		
		case 'other_image':  $other_image = new other_image; 
		switch ($_REQUEST['action'])
		{
			case 'show_other_image':  $other_image->show_other_image();$page='show_other_image'; break;
			case 'del_other_image':  $other_image->del_other_image();$page='show_other_image'; break;
			default: $other_image->show_other_image();$page='show_other_image'; break;
		}	
		break;

		case 'news':  $news = new news; 
		switch ($_REQUEST['action'])
		{
			case 'show_news':  $news->show_news();$page='show_news'; break;
			case 'add_news':  $news->add_news();break;
			case 'del_news':  $news->del_news();break;
			case 'set_news':  $news->set_news();break;
			case 'set_show':  $news->set_show();break;			
			case 'edit_news': $news->edit_news(); $page='edit_news'; break;			
			default: $news->show_news();$page='show_news'; break;
		}	
		break;
		default : $admin_home = new admin_home;$admin_home->view_home();$admin_home->view_welcome_home(); 
		$page='view_home';$page2='view_home_content'; $smarty->assign('page2',$page2);break;
	}
	//echo "page=".$page."  page2=".$page2;
	$smarty->assign('page',$page );
//	$smarty->assign('page2',$page2 );
//	$smarty->assign('page3',$page3 );

$smarty->display('admin/index.tpl');

//$smarty->display('left-panel.tpl');

?>

