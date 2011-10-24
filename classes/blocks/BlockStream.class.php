<?php
/**
 * Обработка блока с комментариями
 *
 */
class BlockStream extends Block {
	public function Exec() {
		if ($aComments=$this->Comment_GetCommentsOnline('topic',Config::Get('block.stream.row'))) {
			$this->Viewer_Assign('aComments',$aComments);
			$sTextResult=$this->Viewer_Fetch("block.stream_comment.tpl");
			$this->Viewer_Assign('sStreamComments',$sTextResult);
		}
	}
}
?>