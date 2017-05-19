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
    "charset"                                        => "ISO-8859-2", // Supports DE chars like: ä, ü, ö, etc.

    'PAYMORROW_PAYMENT_METHOD_NAME_INVOICE'          => 'Számlás fizetés',
    'PAYMORROW_PAYMENT_METHOD_NAME_DIRECT_DEBIT'     => 'Fizetési meghagyás',

    'PAYMORROW_PAYMENT_NO_JAVASCRIPT'                => 'A fizetési mód használatához aktiválja a Javascript támogatást a böngészõjében.',

    'PAYMORROW_GENERAL_ERROR'                        => 'Egy hiba lépett fel. Kérem, ismételje meg a folymatot.',
    'PAYMORROW_ACCEPT_CONDITIONS_ERROR'              => 'Kérem, fogadja el a Paymorrow GmbH adatvédelemre vonatkozó szabályait.',
    'PAYMORROW_SELECT_GENDER_ERROR'                  => 'Nem választott megszólítást.',
    'PAYMORROW_DATE_OF_BIRTH_ERROR'                  => 'Nem adta meg a születési dátumát.',
    'PAYMORROW_MOBILE_NUMBER_ERROR'                  => 'Nem adott meg hálózati- vagy mobiltelefonszámot.',

    // Custom
    'PAYMORROW_ORDER_DATA_COLLECTION_FAILED'         => 'A megrendelési adatok feldolgozása sikertelen',
    'PAYMORROW_ORDER_SAVING_TEMPORARY_ORDER_FAILED'  => 'Az ideiglenes (temporär) megrendelés mentése sikertelen.',

    // Email
    'EMAIL_ORDER_CUST_HTML_PAYMENTMETHOD'            => 'Fizetési mód:',
    'PAYMORROW_EMAIL_ORDER_CUST_HTML_BANK'           => 'Bank:',
    'PAYMORROW_EMAIL_ORDER_CUST_HTML_IBAN'           => 'IBAN:',
    'PAYMORROW_EMAIL_ORDER_CUST_HTML_BIC'            => 'BIC:',
    'PAYMORROW_EMAIL_ORDER_CUST_HTML_REFERENCE_LINE' => 'Felhasználás célja:',
    'PAYMORROW_EMAIL_ORDER_CUST_HTML_ORDER_ID'       => 'BE',
    'PAYMORROW_EMAIL_ORDER_CUST_HTML_CUSTOMER_NR'    => 'KD',
);
