Language packs for OXID eShop
=============================

This translations are provided by community translators at http://translate.oxidforge.org. If you find an error or missing translated language constants, please feel free to register yourself in this translation center and contribute your fixed version. Also, if you can provide other languages than downloaded, you are welcome to register there.

##License

All translations made by the community are distributed under the open source license GPLv3 and can be used by everyone running an OXID eShop no matter which edition is used. As it is open source, please consider to contribute corrections; another language or translations to still missing parts (e.g. admin panel).

##Installation

1. Upload the files you find in this package to the shop root of your running OXID eShop installation. Take care you keep the folder structure as you find it in this package.
2. Go to the admin panel -> Master settings -> Languages and activate the language of your choosing
3. Go to the admin panel -> Service -> Tools and hit the button "Update DB views now". Clean the tmp/ folder.
4. Enjoy!

For more information please visit
http://wiki.oxidforge.org/Tutorials/Language_handling

##Warranty and support

All community translations come without any warranty. If you need support (e.g. with installation) please turn to our forums at http://forum.oxid-esales.com.

##Support for previous OXID eShop versions

You'll find the translated language files for previous OXID eShop versions in the 'tags' section:
https://github.com/OXIDprojects/languages/tags
Be aware you'll find not all language keys translated in tags that you may see in the master branch. Translators work primarily in present versions of OXID eShop language files.

##Content of this package

###Language keys and translations for the store front, admin panel, help texts and setup
The translations are done via http://translate.oxidforge.org and will be exported to GitHub from this place. 
If you can help with translations, please register there instead of sending a pull request via GitHub.

###Transliteration lists
Aside the basic language files you will find a file /application/translations/{locale}/translit_lang.php containing an array with a language based list of special characters (e.g. German Umlauts) transliterating them into clean latin characters, for example: ä => ae. This is valid especially for languages with non-latin based characters for clean latin based URLs. Please feel free to send pull requests where the file is missing or the lists are incomplete.

###map.php files
map.php files are used to support theming and own language keys in different themes in OXID eShop and can depend on the
basic language used for the translation. Please feel free to send pull requests for such files.

###Flag images
You will find the flag images for azure theme in this directory: /out/azure/img/lang/ adjusted at 14x10 px. Please feel free to send pull requests for such files.
