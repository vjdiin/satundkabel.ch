{$HOOK_RIGHT_COLUMN=trim($HOOK_RIGHT_COLUMN)}
{$HOOK_LEFT_COLUMN=trim($HOOK_LEFT_COLUMN)}
{if $HOOK_CONTENTBOTTOM && in_array($page_name,array('index')) }
	<div id="contentbottom" class="clearfix block">
	{$HOOK_CONTENTBOTTOM}
	</div>
{/if}
</section>
