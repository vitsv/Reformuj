{include file='header.tpl' menu='blog'}
{literal}
	<script language="JavaScript" type="text/javascript">
	function toggleAnsBlock(id,link) {
	link=$(link);
	var obj=$(id);	
	var slideObj = new Fx.Slide(obj);
	if (obj.getStyle('display')=='none') {
		slideObj.hide();
		obj.setStyle('display','block');		
	}	
	slideObj.toggle();
	}
	</script>
{/literal}

{include file='topic.tpl' tSingle="true"}
{include 
	file='comment_tree.tpl' 	
	iTargetId=$oTopic->getId()
	sTargetType='topic'
	iCountComment=$oTopic->getCountComment()
	sDateReadLast=$oTopic->getDateRead()
	bAllowNewComment=$oTopic->getForbidComment()
	sNoticeNotAllow=$aLang.topic_comment_notallow
	sNoticeCommentAdd=$aLang.topic_comment_add
}	


{include file='footer.tpl'}