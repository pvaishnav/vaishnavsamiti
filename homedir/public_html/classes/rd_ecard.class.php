<?php
 
require("phpmailer.php");

class rd_ecard
{
	
	function __construct()
	{}
	
	function list_ecard()
	{	
		global $db,$smarty,$pager;
		$sqlQuery = "select * from album where album_status='Y' and album_deleted='N' and album_type=11 order by album_id desc";
		$link="index.php?page=rd_image&action=list_image";
		
		$pager->pageCount($sqlQuery,$link);
		if(isset($_REQUEST['page_num']))
			$cnt=$pager->show * ($_REQUEST['page_num']-1);
		else
			$cnt=0;		
		$lim=" limit ".$cnt.",".$pager->show;
		
		$sqlQuery.=$lim;	
		$image=$db->fetchResults($sqlQuery );
		$smarty->assign('image',$image);
		
		
		
		
	}
	
	function show_ecard()
	{	
		global $db,$smarty;
		$image=$db->fetchResults("select * from album_data where ad_status='Y' and ad_deleted='N' and  album_id='".$_REQUEST['id']."'");
		$smarty->assign('image',$image);
		
		$imagehed=$db->fetchResults("select * from album where album_status='Y' and album_deleted='N' and album_type=11 and album_id='".$_REQUEST['id']."' limit 0,1");
		$smarty->assign('imagehed',$imagehed);
		
	}
	
	function send_ecard()
	{	
		global $db,$smarty,$site_url;
		
		$smarty->assign('ecid',$_REQUEST['id']);
		$image=$db->fetchResults("select * from album_data where ad_status='Y' and ad_deleted='N' and ad_id='".$_REQUEST['id']."' limit 0,1");
		$smarty->assign('image',$image);
		
		 $img_show='<a href="http://www.vaishnavsamaj.org/index.php?page=rd_ecard&action=send_ecard&id='.$_REQUEST['id'].'" title="'.$image[0]['ad_data'].'"><img src="http://www.vaishnavsamaj.org/album_ecard_gallery/'.$image[0]['ad_data'].'" style="max-width:510px; max-height:550px;"  alt="'.$image[0]['ad_data'].'" /></a>';
		$smarty->assign('img_show',$img_show);
			
		if(isset($_REQUEST['submit']))
		{	
			 $mess='This for <b>You</b> <br /><a href="'.$site_url.'index.php?page=rd_ecard&action=send_ecard&id='.$_REQUEST['id'].'" title="'.$image[0]['ad_data'].'">
			<img src="'.$site_url.'album_ecard_gallery/'.$image[0]['ad_data'].'" style="max-width:510px; max-height:550px;"  alt="'.$image[0]['ad_data'].'" /></a>';
			$sub=$_REQUEST['uname']." Send a sweet E-card";
			$title="This E-card send by ".$_REQUEST['uname']." to You";
			$this->Send_mail($_REQUEST['uemail'],$title,$_REQUEST['femail'],$sub,$mess);
			$success="Your E-card Send Successfully to Your Friend.";
			$smarty->assign('success',$success);
		}
		
	}
	
	//############################Send mail###################################
	
	function Send_mail($Site_mail,$Title,$Email,$Subject,$Message)
	{
			$mail = new PHPMailer();
			//echo $Site_mail."//".$Title."//".$Email."//".$Subject."//".$Message;exit;
			$mail->From  = $Site_mail;						
			$mail->FromName = $Title;					
			$mail->AddAddress($Email);			
			$mail->WordWrap = 50;                    
			$mail->IsHTML(true);                     
			$mail->Subject  =  $Subject;		
			$mail->Body     =  $Message;				

			$mail->Send();
	}


	function __destruct()
	{
		
	}

}
?>