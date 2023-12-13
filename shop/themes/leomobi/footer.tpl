{*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if !isset($content_only) || !$content_only}
						{include file="$tpl_dir./layout/{$LEO_LAYOUT_DIRECTION}/footer.tpl"  }
                	</div>
				</div>
            </section>
<!-- Footer -->
            {if isset($HOOK_BOTTOM) && !empty($HOOK_BOTTOM)}
			
				<section id="bottom">
					<div class="container">
							{$HOOK_BOTTOM}
					</div>
				</section>
			{/if}
			<footer id="footer" class="footer-container">
                {if isset($HOOK_FOOTERTOP) && !empty($HOOK_FOOTERTOP)}
					<section id="footertop" class="footer-top"> 
						<div class="container">    
								{$HOOK_FOOTERTOP}
						</div> 
					</section><!-- #footertop -->
                {/if}
                <section id="footercenter" class="footer-center">
					<div class="container"> 
						<div class="col-md-12 clearfix">
							{$HOOK_FOOTER}
						</div> 
					</div>
				</section><!-- #footercenter -->
                {if isset($HOOK_FOOTERBOTTOM)&&!empty($HOOK_FOOTERBOTTOM)}
					<section id="footerbottom" class="footer-bottom">
						<div class="container">
							<div class="row">
								{$HOOK_FOOTERBOTTOM}
							</div>
						</div>
					</section><!-- #footerbottom -->
                {/if}
				<section id="footernav" class="footer-nav">
					<div class="container">
						<div class="inner">
							<div class="row">
								{if isset($ENABLE_COPYRIGHT) && $ENABLE_COPYRIGHT == 1}
									<div id="poweredby" class="col-md-6 col-xs-12">
										{if isset($CUSTOM_COPYRIGHT)&&!empty($CUSTOM_COPYRIGHT)}
											{$CUSTOM_COPYRIGHT}
										{else}
											&copy; 2014 {l s='Powered by PrestaShop. All Rights Reserved.'} 
										{/if}
											<br/>Designed By <span>LeoTheme</span>
									</div><!-- #poweredby -->
								{/if}
								{if isset($HOOK_FOOTNAV)&&!empty($HOOK_FOOTNAV)}
									<div id="footnav" class="col-md-6 col-xs-12 pull-right">
											{$HOOK_FOOTNAV}
									</div>
								{/if}
							</div>
						</div>
					</div>
				</section>
            </footer><!-- .footer-container -->
		</section><!-- #page -->
{/if}
{include file="$tpl_dir./global.tpl"}
{if isset($LEO_PANELTOOL) && $LEO_PANELTOOL}
    {include file="$tpl_dir./info/paneltool.tpl"}
{/if}
	</body>
</html>