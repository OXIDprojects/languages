Language packs for OXID eShop
=============================

This repository is used to collect all language key translations and related files under GPLv3 for OXID eShop:

###1 - language keys and translations for the store front, admin panel, help texts and setup
The translations are done via http://translate.oxidforge.org and will be exported to GitHub from this place. 
If you can help with translations, please register there instead of sending a pull request via GitHub.

###2 - transliteration lists
Aside the base lang files you will find a file /out/{locale}/translit_lang.php containing an array with a language based 
list of special characters (e.g. German Umlauts) transliterating them into clean latin characters, for example: ä => ae. 
This goes especially for languages with non-latin based characters. This is because of the URL where all non-lating based
characters have to be transliterated into latin.

###3 - map.php files
map.php files are used to support theming and own language keys in different themes in OXID eShop and can depend on the
basic language used for the translation.

###4 - flag images
You will find the flag images for the different themes in the following folders:<br>
/out/azure/img/lang/ adjusted at 14x10 px<br>
/out/basic/img/lang/ adjusted at 18x13 px

For more information and how to install a language, please visit
http://wiki.oxidforge.org/Downloads/Languages