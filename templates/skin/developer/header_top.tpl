{if !$oUserCurrent}
	<div class="login-form">
		<a href="#" class="close" onclick="hideLoginForm(); return false;"></a>
		
		<form action="{router page='login'}" method="POST">
			<h3>{$aLang.user_authorization}</h3>

			{hook run='form_login_popup_begin'}

			<p><label>{$aLang.user_login}:<br />
			<input type="text" class="input-text" name="login" id="login-input"/></label></p>
			
			<p><label>{$aLang.user_password}:<br />
			<input type="password" name="password" class="input-text" /></label></p>
			
			<p><label><input type="checkbox" name="remember" class="checkbox" checked />{$aLang.user_login_remember}</label></p>

			{hook run='form_login_popup_end'}

			<input type="submit" name="submit_login" value="{$aLang.user_login_submit}" /><br /><br />
			
			<a href="{router page='login'}reminder/">{$aLang.user_password_reminder}</a><br />
			<a href="{router page='registration'}">{$aLang.user_registration}</a>
		</form>
	</div>
{/if}


<div id="header">
	<div class="profile">
		{if $oUserCurrent}
		<div class="profile">
			<a href="{$oUserCurrent->getUserWebPath()}" class="avatar"><img src="{$oUserCurrent->getProfileAvatarPath(48)}" alt="{$oUserCurrent->getLogin()}" /></a>
			<ul>
				<li><a href="{$oUserCurrent->getUserWebPath()}" class="author">{$oUserCurrent->getLogin()}</a> (<a href="{router page='login'}exit/?security_ls_key={$LIVESTREET_SECURITY_KEY}">{$aLang.exit}</a>)</li>
				<li>
					{if $iUserCurrentCountTalkNew}
						<a href="{router page='talk'}" class="message" id="new_messages" title="{$aLang.user_privat_messages_new}">{$iUserCurrentCountTalkNew}</a> 
					{else}
						<a href="{router page='talk'}" class="message-empty" id="new_messages">&nbsp;</a>
					{/if}
					{$aLang.user_settings} <a href="{router page='settings'}profile/" class="author">{$aLang.user_settings_profile}</a> | <a href="{router page='settings'}tuning/" class="author">{$aLang.user_settings_tuning}</a> 
				</li>
				<li>{$aLang.user_rating} <strong>{$oUserCurrent->getRating()}</strong></li>
				{hook run='userbar_item'}
			</ul>
		</div>
		{else}
		<div class="profile guest">
			<a href="#" onclick="return showLoginForm();">{$aLang.user_login_submit}</a> {$aLang.or} 
			<a href="{router page='registration'}" class="reg">{$aLang.registration_submit}</a>
		</div>
		{/if}
	</div>

	
	<h1><a href="{cfg name='path.root.web'}">LiveStreet</a></h1>
	
	
	<ul class="pages">	
		{hook run='main_menu'}
		<br /><br />
		<ul class="nav-main">
			<li><a href="{router page='blogs'}">{$aLang.blogs}</a></li>
			<li><a href="{router page='people'}">{$aLang.people}</a></li>
				{if $oUserCurrent}
				<li><b><a href="{router page='blog/my'}">Moje projekty</a></b></li>
				{/if}
		</ul>
	</ul>
</div>