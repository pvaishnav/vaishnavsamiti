<?php

class rd_home
{
	
	function __construct()
	{}
	
	function show_home()
	{	
		global $db,$smarty;
		
		$image_album = $db->fetchResults("select * from album where album_type=2 and album_status='Y' and album_deleted='N'   order by album_id desc limit 0,4");
		$smarty->assign('image_album',$image_album);
		
		$music_album = $db->fetchResults("select * from album where album_type=1 and album_status='Y' and album_deleted='N'  order by album_id desc limit 0,5");
		$smarty->assign('music_album',$music_album);
		
		$music= $db->fetchResults("select * from album_data left join album on album.album_id = album_data.album_id where album_data.ad_status='Y' and album_data.ad_deleted='N' and album.album_type=1 order by ad_id desc limit 0,5");
		$smarty->assign('music',$music);
	
		$ringtone=$db->fetchResults("select * from album_data left join album on album.album_id = album_data.album_id where album_data.ad_status='Y' and album_data.ad_deleted='N' and album.album_type=3 order by ad_id desc limit 0,5");
		$smarty->assign('ringtone',$ringtone);
		
		$festival=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N' and article_type=4 order by article_id desc limit 0,4");
		$smarty->assign('festival',$festival);
		
		$parcha=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N' and article_type=5  order by article_id desc limit 0,5 ");
		$smarty->assign('parcha',$parcha);
		
		
			$sqlQuery = "select * from category where cat_type='Page' and cat_name='Welcome Home'";
		$data = $db->fetchResults($sqlQuery);
		$article_type = $data[0]['cat_id'];
		$smarty->assign('article_type',$article_type);
		$sqlQuery ="select * from articles where article_deleted='N' and article_type='".$article_type."' order by 
					article_id desc";

		$article_detail = $db->fetchResults($sqlQuery);
		$smarty->assign('article_detail',$article_detail);	
		
		$contact=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N'
						 and article_id=12 limit 0,1 ");
		$smarty->assign('contact',$contact);
		
	}
	
	
	function contact_us()
	{
		global $db, $smarty;
		$contact=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N'
						 and article_id=12 limit 0,1 ");
		$smarty->assign('contact',$contact);
		
	}
	
	function about_us()
	{global $db, $smarty;
		$about=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N' 
						and article_id=13 limit 0,1 ");
		$smarty->assign('about',$about);
		
		$contact=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N'
						 and article_id=12 limit 0,1 ");
		$smarty->assign('contact',$contact);
	}
	
	function suggestion()
	{
		global $db, $smarty;
		if($_REQUEST['submit']=='Submit' && $_REQUEST['gname']!='' && $_REQUEST['descript']!='')
		{
			if($_SESSION['one']+$_SESSION['two']==$_REQUEST['val'])
			{
			$sugge_stion ="insert into suggestion (book_id,gname,email,descript,create_date,status,deleted) 
			values('','".ucfirst($_REQUEST['gname'])."','".$_REQUEST['email']."','".$_REQUEST['descript']."',
					'".date('Y/m/d')."','Y','N')";
				$db->query($sugge_stion);
			$smarty->assign('suggequery',"query hasbeen submited");
			}
			else
				$smarty->assign('suggequery',"Please give right Answar of math Query");
		}
		else
			$smarty->assign('suggequery',"Please fill Name and description.");
			
		$one=rand(1,9);
		$two=rand(10,20);
		session_start();
		$_SESSION['one']=$one;
		$_SESSION['two']=$two;
		$smarty->assign('one',$one);
		$smarty->assign('two',$two);
		
		
		$contact=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N'
						 and article_id=12 limit 0,1 ");
		$smarty->assign('contact',$contact);
	}
	
	function guest_book()
	{
		global $db, $smarty;
		if($_REQUEST['submit']=='Submit' && $_REQUEST['gname']!='' && $_REQUEST['descript']!='')
		{
			if($_SESSION['one']+$_SESSION['two']==$_REQUEST['val'])
			{
				$guestbook ="insert into guestbook (book_id,gname,email,descript,create_date,status,deleted) values('','".ucfirst($_REQUEST['gname'])."','".$_REQUEST['email']."','".$_REQUEST['descript']."','".date('Y/m/d')."','Y','N')";
					$db->query($guestbook);
				$smarty->assign('guestquery',"query hasbeen submited");
			}
			else
				$smarty->assign('guestquery',"Please give right Answar of math Query");
		}
		else
			$smarty->assign('guestquery',"Please fill Name and Description.");
			
		$one=rand(1,9);
		$two=rand(10,20);
		session_start();
		$_SESSION['one']=$one;
		$_SESSION['two']=$two;
		$smarty->assign('one',$one);
		$smarty->assign('two',$two);
		
		
		$contact=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N'
						 and article_id=12 limit 0,1 ");
		$smarty->assign('contact',$contact);
		
	}
	
	function list_guestbook()
	{
		global $db, $smarty;
		
		$msg=$_REQUEST['msg'];
		 if($msg!='')
		 	$smarty->assign('msg',"Sucessfully Submit Your Form.");
		
	
		if($_REQUEST['submit']=='Submit')
		{
			if($_REQUEST['sname']!='' && $_REQUEST['fname']!='')
			{
				
				$sugge_stion ="insert into guestbook (book_id,sname,email,descript,create_date,status,deleted) 
				values('','".ucfirst($_REQUEST['gname'])."','".$_REQUEST['email']."','".$_REQUEST['descript']."',
						'".date('Y/m/d')."','Y','N')";
					$db->query($sugge_stion);
				$smarty->assign('messag',"Details hasbeen submited");
				
			}
			else
				$smarty->assign('messag',"Please fill the blank details.");
		}
		
		if(isset($_REQUEST['carrer_submit']))
		{
			$date=date('Y-m-d');
			$d1=mktime(date(h),date(i),date(s),date(m),date(d),date(y));
			$imagename=explode(".",$_FILES['uimage']['name']) ;
			$img_name= $imagename[0];
			$img_extension= $imagename[1]; 
			$path="user_images/".$d1.".".$img_extension;	
				
			  if($_FILES['uimage']['name']!='' &&($_FILES['uimage']['type']=='image/jpeg' || $_FILES['uimage']['type']=='image/png' || $_FILES['uimage']['type']=='image/gif'))		
			  {
			   move_uploaded_file($_FILES['uimage']['tmp_name'], "$path");
			  	$upload_photo=$d1.".".$img_extension;
			   //unlink('product_images/'.$_REQUEST['photo']);
			  }
		$add_carrer="insert into careers(sname,fname,mname,image,mobile,current_address,fixed_address,sbord,stot_mark,sobt_mark,spercen,syear,sdivision,ssbord,sstot_mark,ssobt_mark,sspercen,ssyear,ssdivision,gcollage,gtot_mark,gobt_mark,gpercen,gyear,gdivision,pgcollage,pgtot_mark,pgobt_mark,pgpercen,pgyear,pgdivision,spf_name,spf_grade,spf_achivment,sps_name,sps_grade,sps_achivment,spt_name,spt_grade,spt_achivment,entry_date)values('".$_REQUEST['sname']."','".$_REQUEST['fname']."','".$_REQUEST['mname']."','".$upload_photo."','".$_REQUEST['mobile']."','".$_REQUEST['cuaddress']."','".$_REQUEST['fiaddress']."','".$_REQUEST['sec_bord']."','".$_REQUEST['sec_totmarks']."','".$_REQUEST['sec_obtmarks']."','".$_REQUEST['sec_per']."','".$_REQUEST['sec_year']."','".$_REQUEST['sec_div']."','".$_REQUEST['ss_bord']."','".$_REQUEST['ss_totmarks']."','".$_REQUEST['ss_obtmarks']."','".$_REQUEST['sec_per']."','".$_REQUEST['ss_year']."','".$_REQUEST['ss_div']."','".$_REQUEST['gra_bord']."','".$_REQUEST['gra_totmarks']."','".$_REQUEST['gra_obtmarks']."','".$_REQUEST['gra_per']."','".$_REQUEST['gra_year']."','".$_REQUEST['gra_div']."','".$_REQUEST['pgra_bord']."','".$_REQUEST['pgra_totmarks']."','".$_REQUEST['pgra_obtmarks']."','".$_REQUEST['pgra_per']."','".$_REQUEST['pgra_year']."','".$_REQUEST['pgra_div']."','".$_REQUEST['spo_name']."','".$_REQUEST['spo_grade']."','".$_REQUEST['spo_achiv']."','".$_REQUEST['spo_name2']."','".$_REQUEST['spo_grade2']."','".$_REQUEST['spo_achiv2']."','".$_REQUEST['spo_name3']."','".$_REQUEST['spo_grade3']."','".$_REQUEST['spo_achiv3']."','".$date."')";
			$db->query($add_carrer);
			redirect("index.php?page=rd_home&action=list_guestbook&msg=sucess");
		}
		
		
		$contact=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N'
						 and article_id=12 limit 0,1 ");
		$smarty->assign('contact',$contact);
	}
	
	
	function __destruct()
	{
		
	}

}
?>