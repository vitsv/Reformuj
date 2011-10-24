{foreach from=$aTopics item=oTopic}   
	{assign var="oBlog" value=$oTopic->getBlog()}
	{assign var="oUser" value=$oTopic->getUser()}
	{assign var="oVote" value=$oTopic->getVote()} 
			<div class="idea-top">
				<div style="width:auto">
					<li class="voting {if $oTopic->getRating()>0}positive{elseif $oTopic->getRating()<0}negative{/if} {if $oVote} voted {if $oVote->getDirection()>0}plus{elseif $oVote->getDirection()<0}minus{/if}{/if} {if $oTopic->getCoockieVote()} voted {if $oTopic->getCoockieVote()>0}plus{elseif $oTopic->getCoockieVote()<0}minus{/if}{/if}">
						<a href="#" class="plus" onclick="lsVote.vote({$oTopic->getId()},this,1,'topic'); return false;"></a>
						<div class="total" title="{$aLang.topic_vote_count}: {$oTopic->getCountVote()}">{$oTopic->getRating()}</div>
						<a href="#" class="minus" onclick="lsVote.vote({$oTopic->getId()},this,-1,'topic'); return false;"></a>
					</li>
				</div>
					<div class="mini_title">
					<a target="_blank" href="{$oTopic->getUrl()}"><b>{$oTopic->getTitle()}</b></a>
					</div>
				<div class="cl"></div>	
			</div>
{/foreach}	