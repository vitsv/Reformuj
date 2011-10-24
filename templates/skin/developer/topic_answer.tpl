	{assign var="oAnswerAutor" value=$oTopic->getAnswerAutorObj()}
	<span class="rep-ans-t">Odpowiedź przedstawiciela</span>
	<ul class="info">
		<li class="username"><a href="{$oAnswerAutor->getUserWebPath()}">{$oAnswerAutor->getLogin()}</a></li>	
		<li class="date">{date_format date=$oTopic->getAnswerDate()}</li>
		</ul>
	{$oTopic->getAnswerText()}