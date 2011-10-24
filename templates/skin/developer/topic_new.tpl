{assign var="oBlog" value=$oTopic->getBlog()}
{assign var="oUser" value=$oTopic->getUser()}
{assign var="oVote" value=$oTopic->getVote()} 
<div class="idea">
<div class="idea-bottom">
<div class="idea-top">
		<div class="voting vi {if $oTopic->getRating()>0}positive{elseif $oTopic->getRating()<0}negative{/if} {if $oVote} voted {if $oVote->getDirection()>0}plus{elseif $oVote->getDirection()<0}minus{/if}{/if} {if $oTopic->getCoockieVote()} voted {if $oTopic->getCoockieVote()>0}plus{elseif $oTopic->getCoockieVote()<0}minus{/if}{/if}">
			<div class="voting-but">
			<a href="#" class="plus" onclick="lsVote.vote({$oTopic->getId()},this,1,'topic'); return false;"></a>
			<a href="#" class="minus" onclick="lsVote.vote({$oTopic->getId()},this,-1,'topic'); return false;"></a>
			</div>
			<div class="total vit" title="{$aLang.topic_vote_count}: {$oTopic->getCountVote()}">{$oTopic->getRating()}</div>
		</div>
		<div class="status" id="status_{$oTopic->getId()}" {if !$oTopic->getStatus()}style="display:none;"{/if}>{$oTopic->getStatus()}</div>
	<h2 class="title">
		<a href="{if $oTopic->getType()=='link'}{router page='link'}go/{$oTopic->getId()}/{else}{$oTopic->getUrl()}{/if}" class="title-topic">{$oTopic->getTitle()|escape:'html'}</a>
	</h2>
	
	
	
	<ul class="actions">									
		{if $oUserCurrent and ($oUserCurrent->getId()==$oTopic->getUserId() or $oUserCurrent->isAdministrator() or $oBlog->getUserIsAdministrator() or $oBlog->getUserIsModerator() or $oBlog->getOwnerId()==$oUserCurrent->getId())}
			<li><a href="{cfg name='path.root.web'}/{$oTopic->getType()}/edit/{$oTopic->getId()}/" title="{$aLang.topic_edit}" class="edit">{$aLang.topic_edit}</a></li>
		{/if}
		{if $oUserCurrent and ($oUserCurrent->isAdministrator() or $oBlog->getUserIsAdministrator() or $oBlog->getOwnerId()==$oUserCurrent->getId())}
			<li><a href="{router page='topic'}delete/{$oTopic->getId()}/?security_ls_key={$LIVESTREET_SECURITY_KEY}" title="{$aLang.topic_delete}" onclick="return confirm('{$aLang.topic_delete_confirm}');" class="delete">{$aLang.topic_delete}</a></li>
		{/if}
		{if $oUserCurrent and ($oUserCurrent->isAdministrator() or $oBlog->getUserIsAdministrator() or $oBlog->getOwnerId()==$oUserCurrent->getId())}
			<li><a href="#" title="Odpowiedz" onclick="toggleAnsBlock('answer_block_{$oTopic->getId()}',this);return false;" class="answer">Odpowiedz</a></li>
		{/if}
	</ul>
	{if $oUserCurrent and ($oUserCurrent->isAdministrator() or $oBlog->getUserIsAdministrator() or $oBlog->getOwnerId()==$oUserCurrent->getId())}
	<div id="answer_block_{$oTopic->getId()}" style="display:none;">
	<form name="answer_form_{$oTopic->getId()}" id="answer_form_{$oTopic->getId()}" method="POST" action="" onsubmit="return false;" enctype="multipart/form-data">
		<input type="hidden" value="{$LIVESTREET_SECURITY_KEY}" name="security_ls_key" />
		<input type="hidden" value="{$oTopic->getId()}" name="topic_id" />
		<textarea name="answer_text" id="answer_text_{$oTopic->getId()}" rows="5" style="width:360px;">{$oTopic->getAnswerText()}</textarea>
		<select style="width: 120px;" name="topic_status">  
					<option value="1" {if $oTopic->getStatus() == 'completed' or !$oTopic->getStatus}selected="selected"{/if}>Zrobione</option>    
					<option value="2" {if $oTopic->getStatus() == 'started'}selected="selected"{/if}>Wykonuje sie</option>    
					<option value="3" {if $oTopic->getStatus() == 'planned'}selected="selected"{/if}>Zaplanowane</option>    
					<option value="4" {if $oTopic->getStatus() == 'review'}selected="selected"{/if}>Rozpatrywane</option>  
					<option value="5" {if $oTopic->getStatus() == 'canceled'}selected="selected"{/if}>Odprzucone</option> 					      
		</select>
		<input type="submit" value="Zapisz" name="save_answer" class="prop-button" onclick="lsTopicNew.addAnswer('answer_form_{$oTopic->getId()}',{$oTopic->getId()}); return false;">
	</form>
	</div>
	{/if}
	<div class="content">
			{$oTopic->getText()}
	</div>
	{if $oTopic->getAnswerText()}
	{assign var="oAnswerAutor" value=$oTopic->getAnswerAutorObj()}
	<div class="answer-block" id="ans_{$oTopic->getId()}">
	<span class="rep-ans-t">Odpowiedz przedstawiciela</span>
	<ul class="info">
		<li class="username"><a href="{$oAnswerAutor->getUserWebPath()}">{$oAnswerAutor->getLogin()}</a></li>	
		<li class="date">{date_format date=$oTopic->getAnswerDate()}</li>
		</ul>
	{$oTopic->getAnswerText()}
	</div>
	{/if}
	<ul class="info" id="info_{$oTopic->getId()}">
		<li class="comments-link">
				{if $oTopic->getCountComment()>0}
					<a href="{$oTopic->getUrl()}#comments" title="{$aLang.topic_comment_read}">{$oTopic->getCountComment()} <span>{if $oTopic->getCountCommentNew()}+{$oTopic->getCountCommentNew()}{/if}</span></a>
				{else}
					<a href="{$oTopic->getUrl()}#comments" title="{$aLang.topic_comment_add}">0</a>
				{/if}
		</li>
		<li class="username"><a href="{$oUser->getUserWebPath()}">{$oUser->getLogin()}</a></li>	
		<li class="date">{date_format date=$oTopic->getDateAdd()}</li>
		</ul>
</div>
</div>
</div>