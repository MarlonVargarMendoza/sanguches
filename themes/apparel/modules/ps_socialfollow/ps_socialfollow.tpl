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

{block name='block_social'}
    <div class="footer-socials col-lg-3 col-md-3 col-sm-12">
        <div class="content-block">
            <ul>
                {foreach from=$social_links item='social_link'}
                    <li>
                        <a href="{$social_link.url}" target="_blank">
                            <i class="fa fa-{$social_link.class}" aria-hidden="true"></i>
                        </a>
                    </li>
                {/foreach}
            </ul>
        </div>
    </div>
{/block}
