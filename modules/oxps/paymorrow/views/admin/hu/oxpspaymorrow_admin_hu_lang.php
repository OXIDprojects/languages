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

$sLangName = "Magyar";

$aLang = array(
    "charset"                                      => "ISO-8859-2", // Supports DE chars like: ä, ü, ö, etc.
    "oxpspaymorrow"                                => "Paymorrow",

    'NAVIGATION_PAYMORROW'                         => '<a href="https://paymorrow.de/" target="_blank">Paymorrow Payment</a>',
    'SHOP_MODULE_GROUP_oxpsPaymorrowConfiguration' => 'API-Konfiguráció',
    'SHOP_MODULE_GROUP_oxpsPaymorrowProfileUpdate' => 'Megrendelési adatok-Frissítés',
    'OXPSPAYMORROW_PAYMENT_TYPE_INVOICE'           => 'Számlás fizetés',
    'OXPSPAYMORROW_PAYMENT_TYPE_DIRECT_DEBIT'      => 'Fizetési meghagyás',
    'oxpspaymorrow_form_error_log'                 => 'Protokoll',
    'oxpspaymorrow_paymorrow_info'                 => 'Paymorrow-Info',
    'oxpspaymorrow_payment_map'                    => 'Paymorrow',

    // Main Menu Settings
    'OXPSPAYMORROW_MAIN_MENU_SETTINGS_TITLE'       => 'Hibajelentés',
    'SHOP_MODULE_paymorrowSandboxMode'             => 'Sandbox-Mód',
    'SHOP_MODULE_paymorrowMerchantId'              => 'Live-Webservice-Felhasználó',
    'SHOP_MODULE_paymorrowMerchantIdTest'          => 'Test-Webservice-Felhasználó',
    'SHOP_MODULE_paymorrowEndpointUrlTest'         => 'Test-Endpoint-URL',
    'SHOP_MODULE_paymorrowEndpointUrlProd'         => 'Live-Endpoint-URL',
    'SHOP_MODULE_paymorrowLoggingEnabled'          => 'Log fájl-aktiválása ',
    'SHOP_MODULE_paymorrowResourcePath'            => 'Live-Resource-Pfad (JavaScript/CSS)',
    'SHOP_MODULE_paymorrowResourcePathTest'        => 'Test-Resource-Pfad (JavaScript/CSS)',
    'SHOP_MODULE_paymorrowOperationMode'           => 'Live-Operation-Mode',
    'SHOP_MODULE_paymorrowOperationModeTest'       => 'Test-Operation-Mode',

    // RSA Keys fields
    'SHOP_MODULE_paymorrowKeysJson'                => 'Feld aller Daten',
    'SHOP_MODULE_paymorrowPrivateKey'              => 'Live - aktiver privater Schlüssel',
    'SHOP_MODULE_paymorrowPrivateKeyTest'          => 'Test - aktiver privater Schlüssel',
    'SHOP_MODULE_paymorrowPublicKey'               => 'Live - aktiver öffenticher Schlüssel',
    'SHOP_MODULE_paymorrowPublicKeyTest'           => 'Test - aktiver öffenticher Schlüssel',
    'SHOP_MODULE_paymorrowPaymorrowKey'            => 'Live - öffenticher Schlüssel Paymorrow',
    'SHOP_MODULE_paymorrowPaymorrowKeyTest'        => 'Test - öffenticher Schlüssel Paymorrow',

    // Profile data normalization settings
    'SHOP_MODULE_paymorrowUpdateAddresses'         => 'Zurückspielen der Anschriften bei Veränderung im Checkout',
    'SHOP_MODULE_paymorrowUpdatePhones'            => 'Zurückspielen der Telefonnummer bei Veränderung im Checkout',

    // Help Idents
    'PM_HELP_ADMIN_PAYMENT_METHODS_ACTIVATE'       => 'Aktivierung bewirkt die Zuordnung dieser Zahlungsart zu Paymorrow.',
    'PM_HELP_ADMIN_PAYMENT_METHODS_INVOICE'        => 'Aktivierung bewirkt, dass diese Paymorrow zugeordnete Zahlungsart für den Paymorrow-Rechnungskauf freigeschaltet wird.',
    'PM_HELP_ADMIN_PAYMENT_METHODS_SDD'            => 'Aktivierung bewirkt, dass diese Paymorrow zugeordnete Zahlungsart für das Paymorrow-Lastschriftverfahren freigeschaltet wird.',
);
