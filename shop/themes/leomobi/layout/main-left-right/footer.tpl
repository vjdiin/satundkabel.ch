{if $HOOK_CONTENTBOTTOM && in_array($page_name,array('index')) }
	<div id="contentbottom" class="clearfix block">
	{$HOOK_CONTENTBOTTOM}
	</div>
{/if}
</section>
{if $LAYOUT_COLUMN_SPANS[0]}
<!-- Left -->
<section id="left_column" class="column sidebar col-md-{$LAYOUT_COLUMN_SPANS[0]}">
	{$HOOK_LEFT_COLUMN}
</section>
{/if}
{if isset($LAYOUT_COLUMN_SPANS[2])&&$LAYOUT_COLUMN_SPANS[2]} 
<!-- Right -->
<section id="right_column" class="column sidebar col-md-{$LAYOUT_COLUMN_SPANS[2]}">
	{$HOOK_RIGHT_COLUMN}
</section>
{/if}