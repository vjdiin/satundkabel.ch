<script type="text/javascript">
/* Blockusreinfo */
	
$(document).ready( function(){
	$(".leo-groupe").each( function(){
		var content = $(".groupe-content");
		$(".groupe-btn", this ).click( function(){
			content.toggleClass("eshow");
		}) ;
	} );
	
	$(window).resize(function() {
		if( $(window).width() > 600 ){
			 $(".groupe-content").removeClass('eshow');
		}
	});
});
</script>

<!-- Block user information module NAV  -->
<div class="leo-groupe g-dropdown">
	<a class="groupe-btn visible-xs">{l s='Quick link'  mod='blockuserinfo'} <span class="caret"></span></a>
	<div id="header_user_info" class="pull-left groupe-content hidden-xs">
		<ul class="links">
			{if $logged}
				<li><a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="name-customer" rel="nofollow">{l s='Welcome'} <span>{$cookie->customer_firstname} {$cookie->customer_lastname}</span></a></li>
				<li><a href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" title="{l s='Log me out' mod='blockuserinfo'}" class="logout" rel="nofollow"><i class="icon-power-off"></i> {l s='Sign out' mod='blockuserinfo'}</a></li>
				<li><a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" rel="nofollow"><i class="icon-user"></i> {l s='Your Account' mod='blockuserinfo'}</a></li>
				<li><a href="{$link->getModuleLink('blockwishlist', 'mywishlist')}" title="{l s='My wishlists' mod='blockuserinfo'}"><i class="icon-list-alt"></i> {l s='My wishlists' mod='blockuserinfo'}</a></li>
			{else}
				<li><a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" rel="nofollow"><i class="icon-user"></i> {l s='Your Account' mod='blockuserinfo'}</a></li>
				<li><a href="{$link->getModuleLink('blockwishlist', 'mywishlist')}" title="{l s='My wishlists' mod='blockuserinfo'}"><i class="icon-list-alt"></i> {l s='My wishlists' mod='blockuserinfo'}</a></li>
				<li><a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='Login to your customer account' mod='blockuserinfo'}" class="login" rel="nofollow"><i class="icon-key"></i> {l s='Sign in' mod='blockuserinfo'}</a></li>
				<li><a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='Register account' mod='blockuserinfo'}" class="register" rel="nofollow"><i class="icon-edit"></i> {l s='Register' mod='blockuserinfo'}</a></li>
			{/if}
		</ul>
	</div>
</div>
<!-- /Block usmodule NAV -->