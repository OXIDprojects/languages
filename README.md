Language packs for OXID eShop
=============================

This repository is used to collect all language key translations and related files under GPLv3 for OXID eShop:

###1 - language keys and translations for the store front, admin panel, help texts and setup
The translations are done via http://translate.oxidforge.org and will be exported to GitHub from this place. 
If you can help with translations, please register there instead of sending a pull request via GitHub.

###2 - transliteration lists
Aside the base lang files you will find a file /application/translations/{locale}/translit_lang.php containing an array with a language based 
list of special characters (e.g. German Umlauts) transliterating them into clean latin characters, for example: ä => ae. 
This is valid especially for languages with non-latin based characters for clean latin based URLs. 
Please feel free to send pull requests where the file is missing or the lists are incomplete.

###3 - map.php files
map.php files are used to support theming and own language keys in different themes in OXID eShop and can depend on the
basic language used for the translation.
Please feel free to send pull requests for such files.

###4 - flag images
You will find the flag images for azure theme in the following folder:<br>
/out/azure/img/lang/ adjusted at 14x10 px<br>
Please feel free to send pull requests for such files.

You'll find the translated language files for former OXID eShop versions in the 'tags' section:
https://github.com/OXIDprojects/languages/tags

For more information and how to install a language, please visit
http://wiki.oxidforge.org/Tutorial/Language_handling