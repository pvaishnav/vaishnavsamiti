<?php 
  error_reporting(0);
require_once 'libs/Smarty.class.php';
require("config.php");
require_once 'classes/db.php';

require_once 'classes/admin/pager.class.php';
$pager =new pager;
$smarty = new Smarty;

//$site_url="http://192.168.1.10/vaishnavsamaj/";
//$smarty->assign('site_url',$site_url);

require_once 'classes/admin/user.class.php';

require_once 'classes/admin/admin_home.class.php';
require_once 'classes/admin/album.class.php';
require_once 'classes/admin/music_gallery.class.php';
require_once 'classes/admin/image_gallery.class.php';
require_once 'classes/admin/ecard_gallery.class.php';
require_once 'classes/admin/ringtone_gallery.class.php';
require_once 'classes/admin/other_image.class.php';

require_once 'classes/admin/festival.class.php';
require_once 'classes/admin/parcha.class.php';
require_once 'classes/admin/menu.class.php';
require_once 'classes/admin/news.class.php';

require_once 'classes/functions.class.php';
$functions =new functions;

require_once 'classes/functions.class.php';
require_once 'classes/rd_home.class.php';
$rd_home =new rd_home;
require_once 'classes/rd_festival.class.php';
require_once 'classes/rd_image.class.php';
require_once 'classes/rd_ecard.class.php';
require_once 'classes/rd_mp3.class.php';
require_once 'classes/rd_news.class.php';
require_once 'classes/rd_parcha.class.php';
require_once 'classes/rd_menu.class.php';
require_once 'classes/rd_ringtone.class.php';


require_once 'classes/rd_download.class.php';

function redirect($url)
{	//if( !headers_sent())
	//{  header("Location:".$url); exit;	}
	header("Location:".$url); 
}
?>
