{**
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License 3.0 (AFL-3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* https://opensource.org/licenses/AFL-3.0
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
* @author    PrestaShop SA <contact@prestashop.com>
* @copyright 2007-2018 PrestaShop SA
* @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
* International Registered Trademark & Property of PrestaShop SA
*}

<div id="newsletter" class="col-md-9 newsletter-block">
    <div class="newsletter-title col-md-3">
        <span>
            {l s='Newsletter' d='Shop.Theme.Customeraccount'}
        </span>
    </div>
    <div class="block newsletter col-md-9">
        <div class="content">
            <form action="{$urls.current_url}#blockEmailSubscription_{$hookName}" method="post" class="form subscribe">
                <div class="field newsletter">
                    <div class="content-inner">
                        <div class="actions">
                            <input class="btn btn-primary float-xs-right hidden-xs-down" name="submitNewsletter"
                                type="submit" value="{l s='Subscribe' d='Shop.Theme.Actions'}">
                        </div>
                        <input class="btn btn-primary float-xs-right hidden-sm-up" name="submitNewsletter" type="submit"
                            value="{l s='OK' d='Shop.Theme.Actions'}">
                        <div class="input-wrapper">
                            <input name="email" type="email" value="{$value}"
                                placeholder="{l s='Enter your email' d='Shop.Forms.Labels'}"
                                aria-labelledby="block-newsletter-label" required>
                        </div>
                        <input type="hidden" name="blockHookName" value="{$hookName}" />
                        <input type="hidden" name="action" value="0">
                        <div class="clearfix"></div>
                    </div>
                    <div class="content-inner">
                        {if $conditions}
                            <p>{$conditions}</p>
                        {/if}
                        {if $msg}
                            <p class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
                                {$msg}
                            </p>
                        {/if}
                        {hook h='displayNewsletterRegistration'}
                        {if isset($id_module)}
                            {hook h='displayGDPRConsent' id_module=$id_module}
                        {/if}
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>