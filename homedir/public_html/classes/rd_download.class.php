<?php

class rd_download
{
	
	function __construct()
	{}
	
	function document_download_list()
	{	
		global $db,$smarty;
		$sqlQuery = "select * from upload_document where deleted='N'";
		$filedata = $db->fetchResults($sqlQuery);
		$smarty->assign('filedata',$filedata);
	
	
			///==========================================contact query==============================================//
		$contact=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N'
						 and article_id=12 limit 0,1 ");
		$smarty->assign('contact',$contact);
	}
	
	

	function __destruct()
	{
		
	}

}
?>