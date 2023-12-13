		{if $HOOK_CONTENTBOTTOM && in_array($page_name,array('index')) }
			<div id="contentbottom" class="no-border clearfix block">
				{$HOOK_CONTENTBOTTOM}
			</div>
		{/if}
</section>
{if isset($LAYOUT_COLUMN_SPANS[2])&&$LAYOUT_COLUMN_SPANS[2]} 
<!-- Right -->
<section id="right_column" class="column sidebar col-md-{$LAYOUT_COLUMN_SPANS[2]}" role="navigation">
		{$HOOK_RIGHT_COLUMN}
</section>
{/if}

