<?php
/**
 * Обработка блока с рейтингом блогов
 *
 */
class BlockBlogs extends Block {
	public function Exec() {
		if ($aResult=$this->Blog_GetBlogsRating(1,Config::Get('block.blogs.row'))) {
			$aBlogs=$aResult['collection'];
			$this->Viewer_Assign('aBlogs',$aBlogs);
			$sTextResult=$this->Viewer_Fetch("block.blogs_top.tpl");
			$this->Viewer_Assign('sBlogsTop',$sTextResult);
		}
	}
}
?>