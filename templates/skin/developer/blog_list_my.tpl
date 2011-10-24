		{foreach from=$aBlogs item=oBlog}
			<div class="idea">
				<div class="idea-bottom">
					<div class="idea-top">
					<div>
					<h2>{if $oBlog->getType()=='close'}<img src="{cfg name='path.static.skin'}/images/lock.png" alt="[x]" title="{$aLang.clean_blog_closed}" />{/if}<a href="{router page='blog'}{$oBlog->getUrl()}/">{$oBlog->getTitle()|escape:'html'}</a></h2>
					<ul class="actions">
					<li><a href="{router page='blog'}edit/{$oBlog->getId()}/" title="{$aLang.blog_edit}" class="edit">{$aLang.blog_edit}</a></li>
				</ul>
					
					<img src="{$oBlog->getAvatarPath(48)}" alt="avatar" class="avatar" />
					</div>
					<div class="idea-blog-content">
					{$oBlog->getDescription()}
					</div>
					<ul class="info">
					<li class="username"><a href="{router page='blog'}admin/{$oBlog->getId()}/"><b>{$oBlog->getCountUser()}</b></a> Sledzący</li>
					<li>Ranking: <strong>{$oBlog->getRating()}</strong> </li>
					</ul>
					</div>
				</div>
			</div>
		{/foreach}