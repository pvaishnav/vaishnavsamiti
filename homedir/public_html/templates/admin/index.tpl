<HTML>
<HEAD>
<TITLE></TITLE>
<script type="text/javascript" src="templates/admin/js/validation.js"> </script>
<script type="text/javascript" src="templates/admin/js/nicEdit.js"> </script>
<style type="text/css" >@import url("{$site_url}templates/admin/css/styles.css"); </style>
{literal}
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
{/literal}
</HEAD>

<BODY >
<div  align="center" >
	<div  class="wrapper" >
    {if $page2!='print_view_guest'}
	 {include file="admin/menu.tpl" }{/if}
	 {include file="admin/$page.tpl"} 
	
	</div>
</div>	
</BODY>
</HTML>

