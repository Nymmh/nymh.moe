<?php
	require('php/usersession.php');
	require('php/head.php');
	require('php/mainnavEdit.php');
	require('php/extrabackground.php');
	require('php/dropdownscript.php');
	require('php/weebhubdb.php');
	if($_GET['Genre']){
		require('php/weebhubpage.php');
	}elseif($_GET['Anime']){
		require('php/weebhubanime.php');
	}elseif($_GET['studio']){
		require('studio.php');
	}elseif($_GET['source']){
		require('php/weebhubsource.php');
	}elseif($_GET['type']){
		require('php/weebhubtype.php');
	}elseif($_GET['year']){
		require('php/weebhubyear.php');
	}elseif($_GET['episodes']){
		require('php/weebhubep.php');
	}elseif($_GET['add']){
		require('php/isData.php');
	}else{
		require('php/weebhubgenre.php');
	}
?>