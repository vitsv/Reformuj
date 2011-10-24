{foreach from=$aTopics item=oTopic}   
	{assign var="oBlog" value=$oTopic->getBlog()}
	{assign var="oUser" value=$oTopic->getUser()}
	{assign var="oVote" value=$oTopic->getVote()} 
	<div class="topic idea">
		<div class="idea-bottom">
			<div class="idea-top">
				<div style="width:50px">
					<li class="voting {if $oTopic->getRating()>0}positive{elseif $oTopic->getRating()<0}negative{/if} {if $oVote} voted {if $oVote->getDirection()>0}plus{elseif $oVote->getDirection()<0}minus{/if}{/if} {if $oTopic->getCoockieVote()} voted {if $oTopic->getCoockieVote()>0}plus{elseif $oTopic->getCoockieVote()<0}minus{/if}{/if}">
						<a href="#" class="plus" onclick="lsVote.vote({$oTopic->getId()},this,1,'topic'); return false;"></a>
						<div class="total" title="{$aLang.topic_vote_count}: {$oTopic->getCountVote()}">{$oTopic->getRating()}</div>
						<a href="#" class="minus" onclick="lsVote.vote({$oTopic->getId()},this,-1,'topic'); return false;"></a>
					</li>
				</div>
				<div class="idea_title mimi-title">
					<a href="javascript: void(0);" class="drop" id="dropl_{$oTopic->getId()}" onclick="$('drop_{$oTopic->getId()}').setStyle('display',('none') == $('drop_{$oTopic->getId()}').getStyle('display') ? 'block' : 'none');$('dropl_{$oTopic->getId()}').replaceClass(('none') == $('drop_{$oTopic->getId()}').getStyle('display') ? 'drop' : 'drop_up');return false;"></a>
					<a href="{$oTopic->getUrl()}"><b>{$oTopic->getTitle()}</b></a>
					<div id="drop_{$oTopic->getId()}" style="display: none;">
						<div class="idea_text">{$oTopic->getText()}</div>                                                              
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
				<div class="cl"></div>	
			</div>
		</div>
	</div>
{/foreach}	