<?php
/**
 * This file is part of OXID eSales Paymorrow module.
 *
 * OXID eSales Paymorrow module is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales eVAT module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales eVAT module.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2015
 */

/**
 * NOTE: This is a copy of the module file views/admin/de/oxpspaymorrow_admin_de_lang.php
 * It is needed for compatibility with older OXID eShop version.
 */

$sLangName = "Magyar";

$aLang = array(
    "charset"                                      => "ISO-8859-2", // Supports DE chars like: �, �, �, etc.
    "oxpspaymorrow"                                => "Paymorrow",

    'NAVIGATION_PAYMORROW'                         => '<a href="https://paymorrow.de/" target="_blank">Paymorrow Payment</a>',
    'SHOP_MODULE_GROUP_oxpsPaymorrowConfiguration' => 'API-Konfiguration',
    'SHOP_MODULE_GROUP_oxpsPaymorrowProfileUpdate' => 'Bestelldaten-Aktualisierung',
    'OXPSPAYMORROW_PAYMENT_TYPE_INVOICE'           => 'Rechnungskauf',
    'OXPSPAYMORROW_PAYMENT_TYPE_DIRECT_DEBIT'      => 'Lastschriftverfahren',
    'oxpspaymorrow_form_error_log'                 => 'Protokoll',
    'oxpspaymorrow_paymorrow_info'                 => 'Paymorrow-Info',
    'oxpspaymorrow_payment_map'                    => 'Paymorrow',

    // Main Menu Settings
    'OXPSPAYMORROW_MAIN_MENU_SETTINGS_TITLE'       => 'Fehlerprotokoll',
    'SHOP_MODULE_paymorrowSandboxMode'             => 'Sandbox-Modus',
    'SHOP_MODULE_paymorrowMerchantId'              => 'Live-Webservice-Benutzer',
    'SHOP_MODULE_paymorrowMerchantIdTest'          => 'Test-Webservice-Benutzer',
    'SHOP_MODULE_paymorrowEndpointUrlTest'         => 'Test-Endpoint-URL',
    'SHOP_MODULE_paymorrowEndpointUrlProd'         => 'Live-Endpoint-URL',
    'SHOP_MODULE_paymorrowLoggingEnabled'          => 'Protokollierung aktivieren',
    'SHOP_MODULE_paymorrowResourcePath'            => 'Live-Resource-Pfad (JavaScript/CSS)',
    'SHOP_MODULE_paymorrowResourcePathTest'        => 'Test-Resource-Pfad (JavaScript/CSS)',
    'SHOP_MODULE_paymorrowOperationMode'           => 'Live-Operation-Mode',
    'SHOP_MODULE_paymorrowOperationModeTest'       => 'Test-Operation-Mode',

    // RSA Keys fields
    'SHOP_MODULE_paymorrowKeysJson'                => 'Feld aller Daten',
    'SHOP_MODULE_paymorrowPrivateKey'              => 'Live - aktiver privater Schl�ssel',
    'SHOP_MODULE_paymorrowPrivateKeyTest'          => 'Test - aktiver privater Schl�ssel',
    'SHOP_MODULE_paymorrowPublicKey'               => 'Live - aktiver �ffenticher Schl�ssel',
    'SHOP_MODULE_paymorrowPublicKeyTest'           => 'Test - aktiver �ffenticher Schl�ssel',
    'SHOP_MODULE_paymorrowPaymorrowKey'            => 'Live - �ffenticher Schl�ssel Paymorrow',
    'SHOP_MODULE_paymorrowPaymorrowKeyTest'        => 'Test - �ffenticher Schl�ssel Paymorrow',

    // Profile data normalization settings
    'SHOP_MODULE_paymorrowUpdateAddresses'         => 'Zur�ckspielen der Anschriften bei Ver�nderung im Checkout',
    'SHOP_MODULE_paymorrowUpdatePhones'            => 'Zur�ckspielen der Telefonnummer bei Ver�nderung im Checkout',

    // Help Idents
    'PM_HELP_ADMIN_PAYMENT_METHODS_ACTIVATE'       => 'Aktivierung bewirkt die Zuordnung dieser Zahlungsart zu Paymorrow.',
    'PM_HELP_ADMIN_PAYMENT_METHODS_INVOICE'        => 'Aktivierung bewirkt, dass diese Paymorrow zugeordnete Zahlungsart f�r den Paymorrow-Rechnungskauf freigeschaltet wird.',
    'PM_HELP_ADMIN_PAYMENT_METHODS_SDD'            => 'Aktivierung bewirkt, dass diese Paymorrow zugeordnete Zahlungsart f�r das Paymorrow-Lastschriftverfahren freigeschaltet wird.',
);
