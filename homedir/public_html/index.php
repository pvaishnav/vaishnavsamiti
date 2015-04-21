<?php session_start();

include("global.php");
$smarty = new Smarty;

$smarty->compile_check = true;
$db=new DB;
$db->connect(HOST,USER,PASS,DATABASE);
$def_page='index.tpl';
$page="view_home";
$page=$_REQUEST['view'];
$action="show_home";
$defaultpage="";

$functions->show_hot_news();
$functions->show_old_festival();
$functions->show_hot_parcha();
$functions->show_hot_menu();
$functions->right_news();
$functions->wel_come();


$livemode=true;

if($livemode){
	$smarty->assign('site_url',"http://vaishnavsamiti.com/" );
}
else
{
	$smarty->assign('site_url',"http://192.168.1.10/vaishnavsamaj/" );
}


$page="rd_home"; $action="show_home"; $defaultpage="comingsoon";
if(isset($_REQUEST['page'])) $page=$_REQUEST['page'];
if(isset($_REQUEST['action'])) $action=$_REQUEST['action'];
$smarty->assign("page", $page);
$smarty->assign("action", $action);
	
	switch ($page)
	{
		case 'rd_home':  $rd_home = new rd_home; 
		case 'rd_home': 
		  switch($action){
			  case 'show_home': $rd_home->show_home(); $page="home"; break;
			  case 'contact_us': $rd_home->contact_us(); $page="contact_us"; break;
			  case 'about_us': $rd_home->about_us(); $page="about_us"; break;
			  case 'suggestion': $rd_home->suggestion(); $page="suggestion"; break;
			  case 'list_guestbook': $rd_home->list_guestbook(); $page="list_guestbook"; break;
			  case 'guest_book': $rd_home->guest_book(); $page="guest_book"; break;
			  default: $page=$defaultpage;
		  }
		  break;
		default:$page=$defaultpage; break;
	  
		case 'rd_festival': $rd_festival = new rd_festival; 
		case 'rd_festival':
	  		switch($action){
				case 'list_festival'; $rd_festival->list_festival(); $page="list_festival"; break;
				case 'show_festival': $rd_festival->show_festival(); $page="show_festival"; break;
				default: $page=$defaultpage;
			}break;
			default:$page=$defaultpage; break;
		
		case 'rd_image': $rd_image = new rd_image;
		case 'rd_image':
	  		switch($action){
				case 'list_image': $rd_image->list_image(); $page="list_image"; break;
				case 'show_image': $rd_image->show_image(); $page="show_image"; break;
				default: $page=$defaultpage;
			}break;
			default:$page=$defaultpage; break;
		
		case 'rd_ecard': $rd_ecard = new rd_ecard;
		case 'rd_ecard':
	  		switch($action){
				case 'list_ecard': $rd_ecard->list_ecard(); $page="list_ecard"; break;
				case 'show_ecard': $rd_ecard->show_ecard(); $page="show_ecard"; break;
				case 'send_ecard': $rd_ecard->send_ecard(); $page="send_ecard"; break;
				default: $page=$defaultpage;
			}break;
			default:$page=$defaultpage; break;
			
		case 'rd_mp3': $rd_mp3 = new rd_mp3;
		case 'rd_mp3':
	  		switch($action){
				case 'list_mp3': $rd_mp3->list_mp3(); $page="list_mp3"; break;
				case 'show_mp3': $rd_mp3->show_mp3(); $page="show_mp3"; break;
				default: $page=$defaultpage;
			}break;
			default:$page=$defaultpage; break;
		case 'rd_news': $rd_news = new rd_news;
		case 'rd_news':
	  		switch($action){
				case 'list_news': $rd_news->list_news(); $page="list_news"; break;
				case 'show_news': $rd_news->show_news(); $page="show_news"; break;
				default: $page=$defaultpage;
			}break;
			default:$page=$defaultpage; break;
			
		case 'rd_parcha': $rd_parcha = new rd_parcha;
		case 'rd_parcha':
	  		switch($action){
				case 'list_parcha': $rd_parcha->list_parcha(); $page="list_parcha"; break;
				case 'show_parcha': $rd_parcha->show_parcha(); $page="show_parcha"; break;
				default: $page=$defaultpage;
			}break;
			default:$page=$defaultpage; break;
		
		case 'rd_menu': $rd_menu = new rd_menu;
		case 'rd_menu':
	  		switch($action){
				case 'list_menu': $rd_menu->list_menu(); $page="list_menu"; break;
				case 'show_menu': $rd_menu->show_menu(); $page="show_menu"; break;
				default: $page=$defaultpage;
			}break;
			default:$page=$defaultpage; break;
			
		case 'rd_ringtone': $rd_ringtone = new rd_ringtone;
		case 'rd_ringtone':
	  		switch($action){
				case 'list_ringtone': $rd_ringtone->list_ringtone(); $page="list_ringtone"; break;
				case 'show_ringtone': $rd_ringtone->show_ringtone(); $page="show_ringtone"; break;
				default: $page=$defaultpage;
			}break;
			default:$page=$defaultpage; break;
			
		case 'rd_download': $rd_download = new rd_download;
		case 'rd_download':
	  		switch($action){
				case 'document_download_list': $rd_download->document_download_list(); $page="document_download_list"; break;
				default: $page=$defaultpage;
			}break;
			default:$page=$defaultpage; break;	
	  }

	$smarty->assign("contentBody", $page.".tpl");
	$smarty->assign('page',$page.".tpl" );


$smarty->display('index.tpl');

?>

