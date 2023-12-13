{$HOOK_RIGHT_COLUMN=trim($HOOK_RIGHT_COLUMN)}
{$HOOK_LEFT_COLUMN=trim($HOOK_LEFT_COLUMN)}
{if !empty($HOOK_LEFT_COLUMN)&& empty($HOOK_RIGHT_COLUMN)}
{assign var='LAYOUT_COLUMN_SPANS' value=array(3,9,0) scope='global'}
{elseif empty($HOOK_LEFT_COLUMN)&& !empty($HOOK_RIGHT_COLUMN)}
{assign var='LAYOUT_COLUMN_SPANS' value=array(0,9,3) scope='global'}
{elseif empty($HOOK_LEFT_COLUMN)&&empty($HOOK_RIGHT_COLUMN)}
{assign var='LAYOUT_COLUMN_SPANS' value=array(0,12,0) scope='global'}
{else}
{assign var='LAYOUT_COLUMN_SPANS' value=array(3,6,3) scope='global'}
{/if}


{if $LAYOUT_COLUMN_SPANS[0]}
<!-- Left -->
<section id="left_column" class="column sidebar col-md-{$LAYOUT_COLUMN_SPANS[0]}" role="navigation">
		{$HOOK_LEFT_COLUMN}
</section>
{/if}
<!-- Center -->
<section id="center_column" class="col-md-{$LAYOUT_COLUMN_SPANS[1]}">
