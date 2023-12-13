<div class="row group-row" data-original-title="{l s='You can drag this group to other hook'}"{if isset($item_group)}id="group_{$item_group.id}"{/if}>
    {*add + edit + insert column for group*}
    <div class="group-panel col-lg-12">
        <div class="pull-left">
            <a title="{l s='Click here to change group status'}" class="leo-group-status label-tooltip leo-tool" data-value="{$item_group.active}">
                <span class="status-enable"{if $item_group.active != 1} style="display:none;"{/if}>{l s='Enable'}</span><span class="status-disable"{if $item_group.active == 1} style="display:none;"{/if}>{l s='Disable'}</span>
            </a>
            <a href="javascript:void(0);" class="leo-group-btn leo-edit-group label-tooltip leo-tool" data-original-title="{l s='Click here to Edit group'}">
                 <span class="status-edit">{l s='Edit'}</span>
            </a>
            <a style="color:#D9534F" class="leo-group-btn leo-remove-group label-tooltip leo-tool" data-confirm="{l s='Are you sure you want to delete this group?'}" data-original-title="{l s='Click here to delete group'}" href="javascript:void(0)">
                <span class="status-delete">{l s='Delete'}</span>
            </a>
        </div>
        <div class="pull-right">
            <button type="button" class="btn btn-default leobtn-width dropdown-toggle btn-add-group btn-add-col" tabindex="-1" data-toggle="dropdown">
                {l s='Insert A Column'} <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                {foreach from=$leo_width item=itemWidth}
                <li>
                    <a class="leo-add-column" data-width="{$itemWidth}" href="javascript:void(0);" tabindex="-1">                                          
                        <span class="leo-width-val leo-w-{if $itemWidth|strpos:"."}{$itemWidth|replace:'.':'-'}{else}{$itemWidth}{/if}">{$itemWidth}/12 - ( {math equation="x/y*100" x=$itemWidth y=12 format="%.2f"} % )</span>
                    </a>
                </li>
                {/foreach}
            </ul>
        </div>
    </div>
    <div class="column-list col-lg-12">
        {if isset($item_group) && isset($item_group.columns)}
            {foreach $item_group.columns item="itemColumn"}
                <div id="column_{$itemColumn.id}" class="column-row{if isset($itemColumn.col_value)}{$itemColumn.col_value}{/if}">
                    <div class="leo-column">
                        <div class="leo-column-action pull-left">
                            <a title="{l s='Click here to change column status'}" class="leo-column-status" data-value="{$itemColumn.active}">
                                <span class="status-enable"{if $itemColumn.active != 1} style="display:none;"{/if}>&nbsp;</span><span class="status-disable"{if $itemColumn.active == 1} style="display:none;"{/if}>&nbsp;</span>
                            </a>
                            <a class="leo-edit-column"><span class="status-edit">&nbsp;</span></a>
                            <a style="color:#fff" class="leo-delete-column" data-for="delete" data-confirm="{l s='Are you sure you want to delete this column?'}" href="javascript:void(0)">
                            <span class="status-delete">&nbsp;</span></a>
                        </div>
                        <div class="leo-action-top pull-right">
                            <button type="button" class="leo-cog dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                                <span class="width-val"></span><span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                {foreach from=$leo_width item=itemWidth}
                                <li>
                                    <a class="leo-change-width" data-width="{$itemWidth}" href="javascript:void(0);" tabindex="-1">                                          
                                        <span class="leo-width-val leo-w-{if $itemWidth|strpos:"."}{$itemWidth|replace:'.':'-'}{else}{$itemWidth}{/if}">{$itemWidth}/12 - ( {math equation="x/y*100" x=$itemWidth y=12 format="%.2f"} % )</span>
                                    </a>
                                </li>
                                {/foreach}
                            </ul>
                            <div class="action-sign">
                                <a class="width-action plus-sign" href="#" data-action="1"></a>
                                <a class="width-action minus-sign" href="#" data-action="-1"></a>
                            </div>
                        </div>
                        <div class="leo-column-row clear">
						{if isset($itemColumn.rows)}
							{foreach $itemColumn.rows item = "itemRow"}
                            <div class="leo-column_title {if $itemRow.type eq '0'}widget{else}module{/if}" id="row_{$itemRow.id}">
                            <a title="{l s='Click here to change row status'}" class="leo-row-status" data-value="{$itemRow.active}">
                                <span class="status-enable" {if $itemRow.active != 1} style="display:none;"{/if}>&nbsp;</span><span class="status-disable"{if $itemRow.active == 1} style="display:none;"{/if}>&nbsp;</span>
                            </a>
                            <a style="color:#D9534F" class="leo-delete-row" data-confirm="{l s='Are you sure you want to delete this column?'}" data-for="delete" href="javascript:void(0)"><span class="status-delete">&nbsp;</span></a>
                            <a class="leo-edit-row" href="javascript:void(0)"><span class="status-edit">&nbsp;</span></a>
							<a class="leo-edit-widget" data-for="widget" href="javascript:void(0);">{if $itemRow.type eq '0'}{$itemRow.name}{else}{$itemRow.module_name}{/if}</a>
        						</div>                        
							{/foreach}
						{/if}
                        </div>
                        <div class="leo-column_btn"><a class="btn-add-row btn-add-widget" title="{l s='Click here to add a new row'}" href="javascript:void(0)" data-action="1">
                        {l s='Add widgets'}</a></div>
                    </div>
                </div>
            {/foreach}
        {/if}
    </div>
</div>