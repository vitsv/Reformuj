{include file='header.tpl'}
{include file='menu.blog_edit.tpl'}

<p>Skopiuj i wstaw poniżej imieszczony kod do swojej strony.<br />
Najliepej to zrobić pomiędzy tagami &lt;head&gt; i &lt;/head&gt; </p>
<textarea cols="60" rows="10">
<script type="text/javascript">
{literal}var _ref_param = {{/literal}
title:'{$oBlogTitle}',
project_id:'{$oBlogUrl}'
{literal}};{/literal}
</script>
<script type="text/javascript" src="{cfg name="path.root.web"}/widzet/widget.js"></script>

</textarea>


{include file='footer.tpl'}