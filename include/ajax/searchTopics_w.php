<?php

/**
 * Обрабатывает поиск похожих топиков при добавлении
 */

set_include_path(get_include_path().PATH_SEPARATOR.dirname(dirname(dirname(__FILE__))));
$sDirRoot=dirname(dirname(dirname(__FILE__)));
require_once($sDirRoot."/config/config.ajax.php");

$topicText=getRequest('topicText',null,'post');
$bStateError=false;
$aTotal=0;
$aHtml='';
if($topicText != ""){
	$oTopics = $oEngine->Topic_GetTopicsByTopicTitle($topicText);
	if($aTotal = count($oTopics)){
		if (!class_exists('ModuleViewer')) {
			require_once(Config::Get('path.root.engine')."/modules/viewer/Viewer.class.php");
		}
		$oViewerLocal=$oEngine->Viewer_GetLocalViewer();	
		$oViewerLocal->Assign('oUserCurrent',$oEngine->User_GetUserCurrent());	
		$oViewerLocal->Assign('aTopics',$oTopics);						
		$aHtml=$oViewerLocal->Fetch("topic_mini_w.tpl");
		
	}
}
$GLOBALS['_RESULT'] = array(
"bStateError"     => $bStateError,
"aHtml"   => $aHtml,
"aTotal" => $aTotal,
);

?>