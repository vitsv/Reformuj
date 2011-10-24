{include file='header.tpl' sMenuHeadItemSelect="blogs"}

<h2>Moje projekty</h2>
{if $aBlogs}
{include file='blog_list_my.tpl'}
{/if}
<div class="green-box">
Załóż nowy projekt, dla wymiany sugestjami i pomysłami ze swoimi użytkownikami <a href="{router page='blog'}add/">Załóż</a>
</div>
{include file='footer.tpl'}