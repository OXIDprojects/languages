<?php
/**
 * This file is part of OXID eSales PayPal module.
 *
 * OXID eSales PayPal module is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales PayPal module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales PayPal module.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2013
 */
 
// -------------------------------
// RESOURCE IDENTIFIER = STRING
// -------------------------------
$aLang = array(
    'charset'                                            => 'ISO-8859-2',
    'SHOP_MODULE_GROUP_oepaypal_display'                 => 'Megjelenítés a PayPal-fizetési oldalán',
    'SHOP_MODULE_GROUP_oepaypal_checkout'                => 'PayPal-integráció',
    'SHOP_MODULE_GROUP_oepaypal_payment'                 => 'Kosár megjelenítése a PayPal-fizetési oldalán',
    'SHOP_MODULE_GROUP_oepaypal_transaction'             => 'Pénz levonása',
    'SHOP_MODULE_GROUP_oepaypal_api'                     => 'API-Szignatúr',
    'SHOP_MODULE_GROUP_oepaypal_development'             => 'A folyamat beállításai',

    'SHOP_MODULE_sOEPayPalBrandName'                     => 'A shop neve',
    'HELP_SHOP_MODULE_sOEPayPalBrandName'                => 'Írja be az áruháza nevét, amely megjelenik a PayPal-fizetési oldalán.',
    'SHOP_MODULE_sOEPayPalBorderColor'                   => 'A kosár színe aPayPal-fizetési oldalán',
    'HELP_SHOP_MODULE_sOEPayPalBorderColor'              => 'Írja be kérem a választott szín hexadecimal kódját, amely megjelenik a PayPal-fizetési oldalán.',

    'SHOP_MODULE_blOEPayPalStandardCheckout'             => 'PayPal Bázis',
    'HELP_SHOP_MODULE_blOEPayPalStandardCheckout'        => 'A PayPal megjelenik mint fizetési mód a megrendelés lezárásakor. Amennyiben az ügyfél PayPal fizetési módot választ, igazolja a vásárlás tényét a PayPal-fizetési oldalán, majd visszairányítjuk az áruházba.',
    'SHOP_MODULE_blOEPayPalExpressCheckout'              => 'PayPal Express',
    'HELP_SHOP_MODULE_blOEPayPalExpressCheckout'         => 'A PayPal-Express-Gombra kattintva eljut az ügyfél aPayPal-fizetési oldalra, ahol igazolja a vásárlást, ezt követõen visszairányítjuk az ügyfelét az áruházba. Ezzel egyidõben átveszi az áruház a vásárlásra vonatkozó PayPal ügyféladatokat..',
    'SHOP_MODULE_blOEPayPalGuestBuyRole'                 => 'Vendégfizetési mód engedélyezése',
    'HELP_SHOP_MODULE_blOEPayPalGuestBuyRole'            => 'Az ügyfél rendelhet anélkül is, hogy rendelkezne PayPal-Kontóval. Az ügyfél csak az engedélyezés esetén fizethet mint vendég, és késõbb eldöntheti, hogy a továbbiakban a vásárlási információkat egy PayPal kontón kívánja-e tárolni.',

    'SHOP_MODULE_blOEPayPalSendToPayPal'                 => 'Kosár megjelenítése a PayPal-on',
    'HELP_SHOP_MODULE_blOEPayPalSendToPayPal'            => 'A kosár tartalma és a hozzátartozó információk: termékeinformációk, árak és szállítási költségek a PayPal-ra történõ bejelentkezés után láthatók lesznek a PayPal-on. Az ügyfél kiválaszthatja a megrendelés során, hogy ezek az adatok átvitelre kerüljenek-e.',
    'SHOP_MODULE_blOEPayPalDefaultUserChoice'            => 'Beállított ügyfélválasztás',
    'HELP_SHOP_MODULE_blOEPayPalDefaultUserChoice'       => 'Az ügyfélnek kizárólagosan el kell fogadnia a megrendelés során, hogy a kosár tartalma, és a hozzátartozó információk átvitelre kerülnek a PayPal-ra. Itt állíthatja be azt, hogy az ügyfél alapértelmezetten egyetért az adatátvitellel.',

    'SHOP_MODULE_sOEPayPalLogoImageOption'               => 'Shop-Logo megjelenítése a PayPal-fizetési oldalán',
    'HELP_SHOP_MODULE_sOEPayPalLogoImageOption'          => 'PayPal-fizetési oldalán. Van arra lehetõség, hogy az áruház alapértelmezett logója jelenjen meg, de megjeleníthetõ egy speciális, erre a célra létrehozott logó is. A Logo nem lehet nagyobb 190px*60px-nél (szélesség*magasság). A nagyobb képek erre a méretre lesznek beállítva, és "resized_" elõtaggal lesznek ellátva. Minden használatban lévõ sablonhoz szerepelnie kel a logo-fáljnak az /out/{theme}/img könyvtárban. Amennyiben nem jelenik meg a kijelölt logo, ellenõrizze, hogy a logó neve korrekt módon lett megadva, és a fenti könyvtárban jelen van-e. Az alapértelmezett shop-logo megjelenítéséhez ellenõrizze, hogy a "sShopLogo" bejegyzés szerepel-e config.inc.php fájlban. Ha nem adja hozzá a bejegyzést',

    'SHOP_MODULE_sOEPayPalCustomShopLogoImage'           => 'Speciális Shop-Logó PayPal-fizetési oldalán',
    'HELP_SHOP_MODULE_sOEPayPalCustomShopLogoImage'      => 'A PayPal-fizetési oldalán megjeleníthetõ az ön által definiált logó is. Ehhez be kell másolnia a fájlt a shop (/out/{theme}/img) könyvtárába, és be kell írnia a fájl nevét. Minden használatban lévõ sablonhoz szerepelnie kell a logo-fáljnak fenti könyvtárban.' ,

    'SHOP_MODULE_sOEPayPalLogoImageOption_noLogo'        => 'Nem küld shop logót',
    'SHOP_MODULE_sOEPayPalLogoImageOption_shopLogo'      => 'Alapértelmezett Shop-Logo küldése',
    'SHOP_MODULE_sOEPayPalLogoImageOption_customLogo'    => 'Speciális Shop-Logo küldése',

    'SHOP_MODULE_sOEPayPalTransactionMode'               => 'A pénz átutalásának idõpontja',
    'HELP_SHOP_MODULE_sOEPayPalTransactionMode'          => 'Válassza ki, hogy mely idõpontban történjék a pénz átutalása. Önnek lehetõsége van arra, hogy a pénz levonása közvetlenül rögtön a vásárláskor (SALE), vagy közvetlenül az áru elküldésekor (AUTH) (kézi) a PayPal oldalán. Ugyanakkor azt is meghatározhatja, hogy a pénz átutalásának az idõpontja, a megvásárolt termék a vebáruház raktárkészlete határozza meg az átutalás idõpontját (AUTOMATIC).',
	'SHOP_MODULE_sOEPayPalTransactionMode_Automatic'     => 'AUTOMATIC - a megrendelt áru raktárkészletétõl függõen',
    'SHOP_MODULE_sOEPayPalTransactionMode_Sale'          => 'SALE - azonnali végrehajtás',
    'SHOP_MODULE_sOEPayPalTransactionMode_Authorization' => 'AUTH - az áru küldése elõtt kézi végrehajtás',
    'SHOP_MODULE_sOEPayPalEmptyStockLevel'               => 'Fennmaradó Raktárkészlet',
    'HELP_SHOP_MODULE_sOEPayPalEmptyStockLevel'          => 'Ez az érték az AUTOMATIC beállításra vonatkozik, és befolyásolja, hogy a AUTH vagy a SALE határozza meg az pénz átutalásának idejét. Ellenõrizve lesz, hogy a megrendeléskor a termék raktárkészlete kisebb lesz-e, mint a meghatározott maradék készlet. Ebben az esetben AUTH átutalási idõpont lesz felhasználva, egyébként pedig a SALE.',

    'SHOP_MODULE_sOEPayPalUserEmail'                     => 'A PayPal felhasználó E-Mail-címe',
    'SHOP_MODULE_sOEPayPalUsername'                      => 'API-felhasználó neve',
    'HELP_SHOP_MODULE_sOEPayPalUsername'                 => 'Jelentkezzen be <a target="_blank" href="https://www.paypal.com/de/cgi-bin/webscr?cmd=_get-api-signature&generic-flow=true">PayPal-fiókjába</a> API-Signatur-ért.',
    'SHOP_MODULE_sOEPayPalPassword'                      => 'API-jelszó',
    'SHOP_MODULE_sOEPayPalSignature'                     => 'Aláírás',

    'SHOP_MODULE_blOEPayPalSandboxMode'                  => 'Sandbox aktíválása',
    'SHOP_MODULE_sOEPayPalSandboxUserEmail'              => 'Sandbox: PayPal-felhasználó E-Mail-címe',
    'SHOP_MODULE_sOEPayPalSandboxUsername'               => 'Sandbox: API-felhasználónév',
    'HELP_SHOP_MODULE_sOEPayPalSandboxUsername'          => 'Jelentkezzen be <a target="_blank" href="https://www.sandbox.paypal.com/de/cgi-bin/webscr?cmd=_get-api-signature&generic-flow=true">PayPal-fiókjába</a> ein, API-Signatur-ért PayPal-Sandbox-hoz.',
    'SHOP_MODULE_sOEPayPalSandboxPassword'               => 'Sandbox: API-Jelszó',
    'SHOP_MODULE_sOEPayPalSandboxSignature'              => 'Sandbox: Aláírás',

    'SHOP_MODULE_blPayPalLoggerEnabled'                  => 'PayPal bwlépés aktíválása',

    'SHOP_MODULE_blOEPayPalECheckoutInDetails'           => 'Express fizetés megjelenítése a termékrészleteknél ',
    'HELP_SHOP_MODULE_blOEPayPalECheckoutInDetails'      => 'Amennyiben a PayPal Express aktív, akkor a PayPal Express-gomb megjelenik a termékrészleteknél.',

    'SHOP_MODULE_blOEPayPalECheckoutInMiniBasket'        => 'Express fizetés megjelenítése a Mini-kosárban',
    'HELP_SHOP_MODULE_blOEPayPalECheckoutInMiniBasket'   => 'Amennyiben a PayPal Express aktív, akkor a PayPal Express-gomb im Mini-kosárnál is megjelenik.',
);