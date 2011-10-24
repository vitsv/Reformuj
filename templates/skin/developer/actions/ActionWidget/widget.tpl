<script language="JavaScript" type="text/javascript">
		var DIR_WEB_ROOT='{cfg name="path.root.web"}';
		var DIR_STATIC_SKIN='{cfg name="path.static.skin"}';
		var BLOG_USE_TINYMCE='{cfg name="view.tinymce"}';
		var TALK_RELOAD_PERIOD='{cfg name="module.talk.period"}';
		var TALK_RELOAD_REQUEST='{cfg name="module.talk.request"}';
		var TALK_RELOAD_MAX_ERRORS='{cfg name="module.talk.max_errors"}';
		var LIVESTREET_SECURITY_KEY = '{$LIVESTREET_SECURITY_KEY}';
		var project_url = '{$oBlogFullURL}';
</script>
<link rel='stylesheet' type='text/css' href='{cfg name="path.root.web"}/widzet/widget.css' />
<script type="text/javascript" src="{cfg name="path.root.web"}/engine/lib/external/JsHttpRequest/JsHttpRequest.js"></script>
<script type="text/javascript" src="{cfg name="path.root.web"}/engine/lib/external/MooTools_1.2/mootools-1.2.js?v=1.2.4"></script>
<script type="text/javascript" src="{cfg name="path.root.web"}/widzet/vote_widget.js"></script>
<script type="text/javascript" src="{cfg name="path.root.web"}/widzet/topic_widget.js"></script>
{literal}<script type="text/javascript">
function showAddForm(){
 $$('.results').setStyle('display', 'none');
  $$('.ref-wr-add').setStyle('display', 'block');
  $('search_button').setStyle('display', 'none');
  $$('.ref-feedback').setStyle('display', 'none');
  if($('topic_text').get('value') == 'Twoja sugestja...')
	$('topic_text').set('value','');
  $('topic_text').focus();
}

function submitAddForm(){
$('search_block').setStyle('border','1px solid #9EB7D8');
$('topic_text').setStyle('border','1px solid #9EB7D8');
if($('topic_title').get('value') == ''){
$('search_block').setStyle('border','2px solid #CC0033');
$('topic_title').focus();
}
else if($('topic_text').get('value') == ''){
$('topic_text').setStyle('border','2px solid #CC0033');
$('topic_text').focus();
}
else{
lsTopicNew.addTopic('form_topic_text');
}
}
</script>{/literal}
<div id="finput">
        <form method="POST" action="" name="form_topic_text" id="form_topic_text" onsubmit="return false;" enctype="multipart/form-data">
		<input type="hidden" value="{$oBlogId}" name="blog_id" />
        <div style="position: relative;" id="search_block">
            <div onclick="showAddForm();" id="search_button">Dalej</div>
            <label onclick="document.getElementById('topic_title').focus()" id="helper" for="topic_title">Twoja sugestja...</label>
            <input onfocus="document.getElementById('helper').style.display = 'none';document.getElementById('search_block').style.backgroundColor = '#FFFFCC';" onblur="document.getElementById('search_block').style.backgroundColor = 'white';" onkeyup="lsTopicNew.searchTopic(this.value);return false;" name="topic_title" id="topic_title">
        </div>
		<div class="ref-wr-add" style="display:none;">
        <p>
        
        <label>Opis</label><br /><textarea name="topic_text" cols="40" rows="5" id="topic_text"></textarea>
        </p>
        <p>
        
        <label>Wybierz rodzaj:</label>
		<br />
        <input type="radio" name="topic_cat" value="idea" checked="checked">pomysł
		<input type="radio" name="topic_cat" value="err">błąd
		<input type="radio" name="topic_cat" value="thank">pochwała
		<input type="radio" name="topic_cat" value="quest">pytanie
        </p>
        <p>
        <input type="submit" class="i_submit" value="Dodaj" id="id_submit_btn" onclick="submitAddForm();return false;">
        <input type="button" class="i_cancel jqmClose" value="Analuj" onclick=" $$('.ref-feedback').setStyle('display', 'block'); $$('.ref-wr-add').setStyle('display', 'none');$('search_button').setStyle('display', 'block');return false;" id="id_cancel_btn">
		</p>
		</div>
        </form>
    <div class="results">
	<div class="resultsLabel"></div>
	<div class="resultsTopic"></div>
	</div>

    </div>
<div id="succes" style="display:none;">
</div>
<div class="ref-feedback">
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
 <span class="ref-more"><a href="{$oBlog->getUrlFull()}" target="_blank">>> Zobacz wszystkie ({$iCountTopics})</a></span>
</div>