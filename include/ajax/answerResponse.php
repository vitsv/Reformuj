<?php
/*-------------------------------------------------------
*
*   LiveStreet Engine Social Networking
*   Copyright © 2008 Mzhelskiy Maxim
*
*--------------------------------------------------------
*
*   Official site: www.livestreet.ru
*   Contact e-mail: rus.engine@gmail.com
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*/

/**
 * Получение новых комментов
 */
set_include_path(get_include_path().PATH_SEPARATOR.dirname(dirname(dirname(__FILE__))));
$sDirRoot=dirname(dirname(dirname(__FILE__)));
require_once($sDirRoot."/config/config.ajax.php");

$idTopic=getRequest('selfIdTopic',null,'post');
$bStateError=false;
$sMsg='';
$sMsgTitle='';
$iMaxIdComment=0;
$aHtml = '';

	if ($oTopic=$oEngine->Topic_GetTopicById($idTopic)) {		
		if (!class_exists('ModuleViewer')) {
			require_once(Config::Get('path.root.engine')."/modules/viewer/Viewer.class.php");
		}
		$oViewerLocal=$oEngine->Viewer_GetLocalViewer();	
		$oViewerLocal->Assign('oTopic',$oTopic);						
		$sText=$oViewerLocal->Fetch("topic_answer.tpl");			
	} else {
		$sMsgTitle=$oEngine->Lang_Get('error');
		$sMsg=$oEngine->Lang_Get('system_error');
	}

$GLOBALS['_RESULT'] = array(
"bStateError"     => $bStateError,
"sMsgTitle"   => $sMsgTitle,
"sMsg"   => $sMsg,
"html" => $sText,
"aStatus" => $oTopic->getStatus(),
);

?>