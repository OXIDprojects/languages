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
    'SHOP_MODULE_GROUP_oepaypal_display'                 => 'Megjelen�t�s a PayPal-fizet�si oldal�n',
    'SHOP_MODULE_GROUP_oepaypal_checkout'                => 'PayPal-integr�ci�',
    'SHOP_MODULE_GROUP_oepaypal_payment'                 => 'Kos�r megjelen�t�se a PayPal-fizet�si oldal�n',
    'SHOP_MODULE_GROUP_oepaypal_transaction'             => 'P�nz levon�sa',
    'SHOP_MODULE_GROUP_oepaypal_api'                     => 'API-Szignat�r',
    'SHOP_MODULE_GROUP_oepaypal_development'             => 'A folyamat be�ll�t�sai',

    'SHOP_MODULE_sOEPayPalBrandName'                     => 'A shop neve',
    'HELP_SHOP_MODULE_sOEPayPalBrandName'                => '�rja be az �ruh�za nev�t, amely megjelenik a PayPal-fizet�si oldal�n.',
    'SHOP_MODULE_sOEPayPalBorderColor'                   => 'A kos�r sz�ne aPayPal-fizet�si oldal�n',
    'HELP_SHOP_MODULE_sOEPayPalBorderColor'              => '�rja be k�rem a v�lasztott sz�n hexadecimal k�dj�t, amely megjelenik a PayPal-fizet�si oldal�n.',

    'SHOP_MODULE_blOEPayPalStandardCheckout'             => 'PayPal B�zis',
    'HELP_SHOP_MODULE_blOEPayPalStandardCheckout'        => 'A PayPal megjelenik mint fizet�si m�d a megrendel�s lez�r�sakor. Amennyiben az �gyf�l PayPal fizet�si m�dot v�laszt, igazolja a v�s�rl�s t�ny�t a PayPal-fizet�si oldal�n, majd visszair�ny�tjuk az �ruh�zba.',
    'SHOP_MODULE_blOEPayPalExpressCheckout'              => 'PayPal Express',
    'HELP_SHOP_MODULE_blOEPayPalExpressCheckout'         => 'A PayPal-Express-Gombra kattintva eljut az �gyf�l aPayPal-fizet�si oldalra, ahol igazolja a v�s�rl�st, ezt k�vet�en visszair�ny�tjuk az �gyfel�t az �ruh�zba. Ezzel egyid�ben �tveszi az �ruh�z a v�s�rl�sra vonatkoz� PayPal �gyf�ladatokat..',
    'SHOP_MODULE_blOEPayPalGuestBuyRole'                 => 'Vend�gfizet�si m�d enged�lyez�se',
    'HELP_SHOP_MODULE_blOEPayPalGuestBuyRole'            => 'Az �gyf�l rendelhet an�lk�l is, hogy rendelkezne PayPal-Kont�val. Az �gyf�l csak az enged�lyez�s eset�n fizethet mint vend�g, �s k�s�bb eld�ntheti, hogy a tov�bbiakban a v�s�rl�si inform�ci�kat egy PayPal kont�n k�v�nja-e t�rolni.',

    'SHOP_MODULE_blOEPayPalSendToPayPal'                 => 'Kos�r megjelen�t�se a PayPal-on',
    'HELP_SHOP_MODULE_blOEPayPalSendToPayPal'            => 'A kos�r tartalma �s a hozz�tartoz� inform�ci�k: term�keinform�ci�k, �rak �s sz�ll�t�si k�lts�gek a PayPal-ra t�rt�n� bejelentkez�s ut�n l�that�k lesznek a PayPal-on. Az �gyf�l kiv�laszthatja a megrendel�s sor�n, hogy ezek az adatok �tvitelre ker�ljenek-e.',
    'SHOP_MODULE_blOEPayPalDefaultUserChoice'            => 'Be�ll�tott �gyf�lv�laszt�s',
    'HELP_SHOP_MODULE_blOEPayPalDefaultUserChoice'       => 'Az �gyf�lnek kiz�r�lagosan el kell fogadnia a megrendel�s sor�n, hogy a kos�r tartalma, �s a hozz�tartoz� inform�ci�k �tvitelre ker�lnek a PayPal-ra. Itt �ll�thatja be azt, hogy az �gyf�l alap�rtelmezetten egyet�rt az adat�tvitellel.',

    'SHOP_MODULE_sOEPayPalLogoImageOption'               => 'Shop-Logo megjelen�t�se a PayPal-fizet�si oldal�n',
    'HELP_SHOP_MODULE_sOEPayPalLogoImageOption'          => 'PayPal-fizet�si oldal�n. Van arra lehet�s�g, hogy az �ruh�z alap�rtelmezett log�ja jelenjen meg, de megjelen�thet� egy speci�lis, erre a c�lra l�trehozott log� is. A Logo nem lehet nagyobb 190px*60px-n�l (sz�less�g*magass�g). A nagyobb k�pek erre a m�retre lesznek be�ll�tva, �s "resized_" el�taggal lesznek ell�tva. Minden haszn�latban l�v� sablonhoz szerepelnie kel a logo-f�ljnak az /out/{theme}/img k�nyvt�rban. Amennyiben nem jelenik meg a kijel�lt logo, ellen�rizze, hogy a log� neve korrekt m�don lett megadva, �s a fenti k�nyvt�rban jelen van-e. Az alap�rtelmezett shop-logo megjelen�t�s�hez ellen�rizze, hogy a "sShopLogo" bejegyz�s szerepel-e config.inc.php f�jlban. Ha nem adja hozz� a bejegyz�st',

    'SHOP_MODULE_sOEPayPalCustomShopLogoImage'           => 'Speci�lis Shop-Log� PayPal-fizet�si oldal�n',
    'HELP_SHOP_MODULE_sOEPayPalCustomShopLogoImage'      => 'A PayPal-fizet�si oldal�n megjelen�thet� az �n �ltal defini�lt log� is. Ehhez be kell m�solnia a f�jlt a shop (/out/{theme}/img) k�nyvt�r�ba, �s be kell �rnia a f�jl nev�t. Minden haszn�latban l�v� sablonhoz szerepelnie kell a logo-f�ljnak fenti k�nyvt�rban.' ,

    'SHOP_MODULE_sOEPayPalLogoImageOption_noLogo'        => 'Nem k�ld shop log�t',
    'SHOP_MODULE_sOEPayPalLogoImageOption_shopLogo'      => 'Alap�rtelmezett Shop-Logo k�ld�se',
    'SHOP_MODULE_sOEPayPalLogoImageOption_customLogo'    => 'Speci�lis Shop-Logo k�ld�se',

    'SHOP_MODULE_sOEPayPalTransactionMode'               => 'A p�nz �tutal�s�nak id�pontja',
    'HELP_SHOP_MODULE_sOEPayPalTransactionMode'          => 'V�lassza ki, hogy mely id�pontban t�rt�nj�k a p�nz �tutal�sa. �nnek lehet�s�ge van arra, hogy a p�nz levon�sa k�zvetlen�l r�gt�n a v�s�rl�skor (SALE), vagy k�zvetlen�l az �ru elk�ld�sekor (AUTH) (k�zi) a PayPal oldal�n. Ugyanakkor azt is meghat�rozhatja, hogy a p�nz �tutal�s�nak az id�pontja, a megv�s�rolt term�k a veb�ruh�z rakt�rk�szlete hat�rozza meg az �tutal�s id�pontj�t (AUTOMATIC).',
	'SHOP_MODULE_sOEPayPalTransactionMode_Automatic'     => 'AUTOMATIC - a megrendelt �ru rakt�rk�szlet�t�l f�gg�en',
    'SHOP_MODULE_sOEPayPalTransactionMode_Sale'          => 'SALE - azonnali v�grehajt�s',
    'SHOP_MODULE_sOEPayPalTransactionMode_Authorization' => 'AUTH - az �ru k�ld�se el�tt k�zi v�grehajt�s',
    'SHOP_MODULE_sOEPayPalEmptyStockLevel'               => 'Fennmarad� Rakt�rk�szlet',
    'HELP_SHOP_MODULE_sOEPayPalEmptyStockLevel'          => 'Ez az �rt�k az AUTOMATIC be�ll�t�sra vonatkozik, �s befoly�solja, hogy a AUTH vagy a SALE hat�rozza meg az p�nz �tutal�s�nak idej�t. Ellen�rizve lesz, hogy a megrendel�skor a term�k rakt�rk�szlete kisebb lesz-e, mint a meghat�rozott marad�k k�szlet. Ebben az esetben AUTH �tutal�si id�pont lesz felhaszn�lva, egy�bk�nt pedig a SALE.',

    'SHOP_MODULE_sOEPayPalUserEmail'                     => 'A PayPal felhaszn�l� E-Mail-c�me',
    'SHOP_MODULE_sOEPayPalUsername'                      => 'API-felhaszn�l� neve',
    'HELP_SHOP_MODULE_sOEPayPalUsername'                 => 'Jelentkezzen be <a target="_blank" href="https://www.paypal.com/de/cgi-bin/webscr?cmd=_get-api-signature&generic-flow=true">PayPal-fi�kj�ba</a> API-Signatur-�rt.',
    'SHOP_MODULE_sOEPayPalPassword'                      => 'API-jelsz�',
    'SHOP_MODULE_sOEPayPalSignature'                     => 'Al��r�s',

    'SHOP_MODULE_blOEPayPalSandboxMode'                  => 'Sandbox akt�v�l�sa',
    'SHOP_MODULE_sOEPayPalSandboxUserEmail'              => 'Sandbox: PayPal-felhaszn�l� E-Mail-c�me',
    'SHOP_MODULE_sOEPayPalSandboxUsername'               => 'Sandbox: API-felhaszn�l�n�v',
    'HELP_SHOP_MODULE_sOEPayPalSandboxUsername'          => 'Jelentkezzen be <a target="_blank" href="https://www.sandbox.paypal.com/de/cgi-bin/webscr?cmd=_get-api-signature&generic-flow=true">PayPal-fi�kj�ba</a> ein, API-Signatur-�rt PayPal-Sandbox-hoz.',
    'SHOP_MODULE_sOEPayPalSandboxPassword'               => 'Sandbox: API-Jelsz�',
    'SHOP_MODULE_sOEPayPalSandboxSignature'              => 'Sandbox: Al��r�s',

    'SHOP_MODULE_blPayPalLoggerEnabled'                  => 'PayPal bwl�p�s akt�v�l�sa',

    'SHOP_MODULE_blOEPayPalECheckoutInDetails'           => 'Express fizet�s megjelen�t�se a term�kr�szletekn�l ',
    'HELP_SHOP_MODULE_blOEPayPalECheckoutInDetails'      => 'Amennyiben a PayPal Express akt�v, akkor a PayPal Express-gomb megjelenik a term�kr�szletekn�l.',

    'SHOP_MODULE_blOEPayPalECheckoutInMiniBasket'        => 'Express fizet�s megjelen�t�se a Mini-kos�rban',
    'HELP_SHOP_MODULE_blOEPayPalECheckoutInMiniBasket'   => 'Amennyiben a PayPal Express akt�v, akkor a PayPal Express-gomb im Mini-kos�rn�l is megjelenik.',
);