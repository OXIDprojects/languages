<?php
/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */
$sLangName  = "English";
// -------------------------------
// RESOURCE IDENTIFIER = STRING
// -------------------------------
$aLang = [
'ATTENTION' => 'Attenzione!',
'BUTTON_BEGIN_INSTALL' => 'Avvia l\'installazione',
'BUTTON_DB_INSTALL' => 'Crea il database',
'BUTTON_LICENCE' => 'Accetto la licenza',
'BUTTON_PROCEED_INSTALL' => 'Procedi con l\'installazione',
'BUTTON_RADIO_INSTALL_DB_DEMO' => 'Installa Demo',
'BUTTON_RADIO_LICENCE_ACCEPT' => 'Accetto le condizioni di licenza',
'BUTTON_RADIO_LICENCE_NOT_ACCEPT' => 'Non Accetto le condizioni di licenza',
'BUTTON_RADIO_NOT_INSTALL_DB_DEMO' => '<strong>Non</strong> installare il demo',
'BUTTON_START_INSTALL' => 'Ravvia l\'installazione',
'BUTTON_WRITE_DATA' => 'Salva e continua',
'BUTTON_WRITE_LICENCE' => 'Salva la chiave di licenza',
'ERROR_BAD_DEMODATA' => '',
'ERROR_BAD_SERIAL_NUMBER' => 'ERRORE: Codice di licenza scorretto',
'ERROR_BAD_SQL' => 'ERRORE: Problema con comando SQL seguente:',
'ERROR_CONFIG_FILE_IS_NOT_WRITABLE' => 'ERRORE: il file di configurazione %s/config.inc.php non è scrivibile',
'ERROR_COULD_NOT_CREATE_DB' => 'ERRORE: Non posso creare il database',
'ERROR_COULD_NOT_FIND_FILE' => 'ERRORE: Il setup non trova "%s"!',
'ERROR_COULD_NOT_OPEN_CONFIG_FILE' => 'Non è possibile aprire config.inc.php. Consulta per favore FAQ, il forum o contatta direttamente il supporto di OXID.',
'ERROR_COULD_NOT_READ_FILE' => 'File "%s" non si apre!',
'ERROR_COULD_NOT_WRITE_TO_FILE' => '',
'ERROR_DB_ALREADY_EXISTS' => 'ERRORE: Sembra che nella banca dati %s ci sia già una banca dati OXID. Cancellala per favore!',
'ERROR_DB_CONNECT' => 'ERRORE: Collegamento con database non è possibile!',
'ERROR_FILL_ALL_FIELDS' => 'ERRORE: Compila tutti i campi necessari!',
'ERROR_MYSQL_VERSION_DOES_NOT_FIT_REQUIREMENTS' => 'La versione MySQL non corresponde ai requisiti di sistema.',
'ERROR_NOT_AVAILABLE' => 'ERRORE: %s non trovato!',
'ERROR_NOT_WRITABLE' => '',
'ERROR_OPENING_SQL_FILE' => 'ERRORE: Non è stato possibile aprire il sql-file %s.',
'ERROR_PASSWORDS_DO_NOT_MATCH' => 'Le password non corrispondono.',
'ERROR_PASSWORD_TOO_SHORT' => 'Attenzione! La password è troppo corta',
'ERROR_SETUP_CANCELLED' => '',
'ERROR_USER_NAME_DOES_NOT_MATCH_PATTERN' => 'Per favore inserisci un indirizzo mail corretto!',
'ERROR_VIEWS_CANT_CREATE' => '',
'ERROR_VIEWS_CANT_DROP' => '',
'ERROR_VIEWS_CANT_SELECT' => '',
'FOOTER_OXID_ESALES' => '© OXID eSales AG 2003 - Y',
'HEADER_META_MAIN_TITLE' => '',
'HEADER_TEXT_SETUP_NOT_RUNS_AUTOMATICLY' => '',
'HERE' => 'qui',
'LOAD_DYN_CONTENT_NOTICE' => '',
'MOD_ALLOW_URL_FOPEN' => 'allow_url_fopen o fsockopen verso la porta 80',
'MOD_BC_MATH' => 'BCMath',
'MOD_BUG53632' => 'Possibili problemi relativi al bug 53562 di PHP!',
'MOD_CURL' => 'cURL',
'MOD_FILE_UPLOADS' => 'l\'upload di files è abilitato (file_uploads)',
'MOD_GD_INFO' => 'GDlib v2 [v1] con supporto JPEG',
'MOD_INI_SET' => 'ini_set consentito',
'MOD_I_CONV' => 'ICONV',
'MOD_J_SON' => 'JSON',
'MOD_LIB_XML2' => 'libxml2',
'MOD_MB_STRING' => 'mbstring',
'MOD_MOD_REWRITE' => 'modulo mod_rewrite di Apache',
'MOD_MYSQL_CONNECT' => 'MySQL connettore del cliente per MySQL 5',
'MOD_OPEN_SSL' => 'OpenSSL',
'MOD_PHP4_COMPAT' => '',
'MOD_PHP_CONFIG' => 'configurazione PHP',
'MOD_PHP_EXTENNSIONS' => 'estensioni PHP',
'MOD_PHP_VERSION' => 'PHP versione almeno 5.2.10',
'MOD_PHP_XML' => 'DOM',
'MOD_REGISTER_GLOBALS' => 'il parametro register_globals dev\'essere impostato su OFF',
'MOD_REQUEST_URI' => 'REQUEST_URI insieme',
'MOD_SERVER_CONFIG' => 'Configurazione del server',
'MOD_SERVER_PERMISSIONS' => '',
'MOD_SESSION_AUTOSTART' => 'session.auto_start deve essere spento',
'MOD_SOAP' => 'SOAP',
'MOD_TOKENIZER' => 'Tokenizer',
'MOD_UNICODE_SUPPORT' => 'Supporto UTF-8',
'MOD_ZEND_OPTIMIZER' => '',
'MOD_ZEND_PLATFORM_OR_SERVER' => '',
'PRIVACY_POLICY' => '',
'SELECT_DELIVERY_COUNTRY' => '',
'SELECT_DELIVERY_COUNTRY_HINT' => '',
'SELECT_PLEASE_CHOOSE' => '',
'SELECT_SETUP_LANG' => '',
'SELECT_SETUP_LANG_SUBMIT' => '',
'SELECT_SHOP_LANG' => 'Negozio lingua',
'SELECT_SHOP_LANG_HINT' => '',
'SELECT_SHOP_LOCATION' => 'Vostro mercato',
'SELECT_SHOP_LOCATION_HINT' => '',
'SETUP_CONFIG_PERMISSIONS' => '',
'SETUP_DIR_DELETE_NOTICE' => 'Per motivi di sicurezza ti invitiamo ad eliminare la directory <strong>setup</strong>',
'STEP_0_DESC' => 'Durante questo passaggio valuteremo se il tuo sistema soddisfa i requisiti minimi:',
'STEP_0_ERROR_TEXT' => 'Il tuo sistema non soddisfa i requisiti minimi',
'STEP_0_ERROR_URL' => 'http://www.oxid-esales.com/en/products/community-edition/system-requirements',
'STEP_0_TEXT' => '<ul class="req"><li class="pass"> - Il sistema soddisfa tutti i requisiti.</li><li class="pmin"> - Il sistema soddisfa parzialmente i requisiti. Tuttavia OXID eShop può essere installato ed usato...</li><li class="fail"> - Il sistema non soddisfa i requisiti. OXID eShop non può funzionare e non verrà avviata l\'installazione.</li><li class="null"> - Impossibile eseguire il controllo dei requisiti.</ul>',
'STEP_0_TITLE' => 'Controllo dei requisiti di sistema',
'STEP_1_ADDRESS' => 'OXID eSales AG<br>
                                                    Bertoldstr. 48<br>
                                                    79098 Freiburg<br>
                                                    Deutschland<br>',
'STEP_1_CHECK_UPDATES' => 'Controlla regolarmente gli aggiornamenti',
'STEP_1_DESC' => 'Benvenuto al processo di installazione di OXID eShop',
'STEP_1_TEXT' => '',
'STEP_1_TITLE' => 'Benvenuti',
'STEP_2_TITLE' => 'Condizioni di licenza',
'STEP_3_1_CREATING_TABLES' => '',
'STEP_3_1_DB_CONNECT_IS_OK' => '',
'STEP_3_1_DB_CREATE_IS_OK' => '',
'STEP_3_1_TITLE' => '',
'STEP_3_2_CONTINUE_INSTALL_OVER_EXISTING_DB' => '',
'STEP_3_2_CREATING_DATA' => '',
'STEP_3_2_TITLE' => '',
'STEP_3_CREATE_DB_WHEN_NO_DB_FOUND' => '',
'STEP_3_DB_DATABSE_NAME' => '',
'STEP_3_DB_DEMODATA' => '',
'STEP_3_DB_HOSTNAME' => '',
'STEP_3_DB_PASSWORD' => '',
'STEP_3_DB_PASSWORD_SHOW' => '',
'STEP_3_DB_USER_NAME' => '',
'STEP_3_DESC' => '',
'STEP_3_TITLE' => '',
'STEP_3_UTFINFO' => '',
'STEP_3_UTFMODE' => '',
'STEP_3_UTFNOTSUPPORTED' => '',
'STEP_3_UTFNOTSUPPORTED1' => '',
'STEP_3_UTFNOTSUPPORTED2' => '',
'STEP_4_1_DATA_WAS_WRITTEN' => '',
'STEP_4_1_TITLE' => '',
'STEP_4_ADMIN_LOGIN_NAME' => '',
'STEP_4_ADMIN_PASS' => 'Password amministratore',
'STEP_4_ADMIN_PASS_CONFIRM' => '',
'STEP_4_ADMIN_PASS_MINCHARS' => '',
'STEP_4_DESC' => '',
'STEP_4_SHOP_DIR' => '',
'STEP_4_SHOP_TMP_DIR' => '',
'STEP_4_SHOP_URL' => '',
'STEP_4_TITLE' => '',
'STEP_5_1_SERIAL_ADDED' => '',
'STEP_5_1_TITLE' => '',
'STEP_5_DESC' => '',
'STEP_5_LICENCE_DESC' => '',
'STEP_5_LICENCE_KEY' => '',
'STEP_5_TITLE' => 'Licenza di Oxid eshop',
'STEP_6_DESC' => 'OXID eShop installato correttamente',
'STEP_6_LINK_TO_SHOP' => 'Vai al tuo eShop OXID',
'STEP_6_LINK_TO_SHOP_ADMIN_AREA' => 'Vai all\'interfaccia di amministrazione',
'STEP_6_TITLE' => 'OXID eShop installato correttamente',
'STEP_6_TO_SHOP' => 'al negozio',
'STEP_6_TO_SHOP_ADMIN' => 'all\'interfaccia di amministrazione',
'TAB_0_DESC' => '',
'TAB_0_TITLE' => '',
'TAB_1_DESC' => '',
'TAB_1_TITLE' => 'Benvenuti',
'TAB_2_DESC' => '',
'TAB_2_TITLE' => '',
'TAB_3_DESC' => '',
'TAB_3_TITLE' => '',
'TAB_4_DESC' => '',
'TAB_4_TITLE' => '',
'TAB_5_DESC' => '',
'TAB_5_TITLE' => '',
'TAB_6_DESC' => '',
'TAB_6_TITLE' => 'Finitura',
'USE_DYNAMIC_PAGES' => 'Per far crescere il tuo successo scarica informazioni aggiuntive dai server di OXID. Potrai trovare ulteriori informazioni sul nostro',
];
