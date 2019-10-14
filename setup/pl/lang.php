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
'ATTENTION' => 'Uwaga',
'BUTTON_BEGIN_INSTALL' => 'Rozpocznij instalację',
'BUTTON_DB_INSTALL' => 'Stwórz bazę danych',
'BUTTON_LICENCE' => 'Następny krok',
'BUTTON_PROCEED_INSTALL' => 'Kontynuuj instalację',
'BUTTON_RADIO_INSTALL_DB_DEMO' => 'Zainstaluj dane przykładowe (produkty, klienci)',
'BUTTON_RADIO_LICENCE_ACCEPT' => 'Akceptuję warunki licencyjne.',
'BUTTON_RADIO_LICENCE_NOT_ACCEPT' => 'Nie akceptuję warunków licencyjnych.',
'BUTTON_RADIO_NOT_INSTALL_DB_DEMO' => '<strong>Nie</strong> instaluj danych przykładowych',
'BUTTON_START_INSTALL' => 'Uruchom ponownie instalację',
'BUTTON_WRITE_DATA' => 'Zapisz i kontynuuj',
'BUTTON_WRITE_LICENCE' => 'Zapisz klucz licencyjny',
'ERROR_BAD_DEMODATA' => 'BŁĄD : Wystąpił błąd podczas wykonywania zapytania SQL:',
'ERROR_BAD_SERIAL_NUMBER' => 'BŁĄD: Nieprawidłowy klucz licencyjny!',
'ERROR_BAD_SQL' => 'BŁĄD: Wystąpił błąd podczas wykonywania zapytania SQL:',
'ERROR_CONFIG_FILE_IS_NOT_WRITABLE' => 'BŁĄD: %s/ config.inc.php niezapisywalny!',
'ERROR_COULD_NOT_CREATE_DB' => 'BŁĄD: Baza danych jest nieosiągalna przez co nie może być kontynuowany proces instalacji!',
'ERROR_COULD_NOT_FIND_FILE' => 'Instalator nie może znaleźć "%s"!',
'ERROR_COULD_NOT_OPEN_CONFIG_FILE' => 'Nie można otworzyć % s do odczytu! Prosimy o poszukanie rozwiązań na naszym FAQ, forum lub skontaktować się z pomocą OXID!',
'ERROR_COULD_NOT_READ_FILE' => 'Instalator nie może otworzyć "%s" do odczytu!',
'ERROR_COULD_NOT_WRITE_TO_FILE' => 'Instalator nie może zapisać do "%s"!',
'ERROR_DB_ALREADY_EXISTS' => 'BŁĄD: Instalator wykrył zainstalowaną bazę danych o nazwie "%s" systemu OXID. Należy ją usunąć przed kontynuacją!',
'ERROR_DB_CONNECT' => 'BŁĄD: Brak połączenia z bazą danych!',
'ERROR_FILL_ALL_FIELDS' => 'BŁĄD: Prosimy o wypełnienie wszystkich wymaganych pól',
'ERROR_MYSQL_VERSION_DOES_NOT_FIT_REQUIREMENTS' => 'Wersja MySQL nie spełnia minimalnych wymagań systemowych',
'ERROR_NOT_AVAILABLE' => 'BŁĄD: %s nie został znaleziony!',
'ERROR_NOT_WRITABLE' => 'BŁĄD: %s niezapisywalny!',
'ERROR_OPENING_SQL_FILE' => 'BŁĄD: Nie można otworzyć pliku %s SQL!',
'ERROR_PASSWORDS_DO_NOT_MATCH' => 'Hasło nie pasuje!',
'ERROR_PASSWORD_TOO_SHORT' => 'Hasło jest za krótkie!',
'ERROR_SETUP_CANCELLED' => 'Instalacja została anulowana, ponieważ nie zaakceptowałeś warunków licencyjnych.',
'ERROR_USER_NAME_DOES_NOT_MATCH_PATTERN' => 'Proszę podać poprawny adres e-mail!',
'ERROR_VIEWS_CANT_CREATE' => 'BŁĄD: Nie można utworzyć widoków bazodanowych. Proszę sprawdzić uprawnienia użytkownika bazy danych.',
'ERROR_VIEWS_CANT_DROP' => 'BŁĄD: Nie można usunąć widoków bazodanowych. Proszę sprawdzić uprawnienia użytkownika bazy danych.',
'ERROR_VIEWS_CANT_SELECT' => 'BŁĄD: Nie można wykonać zapytania na widokach bazodanowych. Proszę sprawdzić uprawnienia użytkownika bazy danych.',
'FOOTER_OXID_ESALES' => '© OXID eSales AG 2003 - Y',
'HEADER_META_MAIN_TITLE' => 'Instalator',
'HEADER_TEXT_SETUP_NOT_RUNS_AUTOMATICLY' => 'Jeśli konfiguracja nie zostanie kontynuowana w ciągu kilku sekund, kliknij',
'HERE' => 'tutaj',
'LOAD_DYN_CONTENT_NOTICE' => '<p>Jeśli to pole zostanie zaznaczone, zobaczysz dodatkowe menu w paneu administracyjnym.</p><p>W tym menu znajdziesz informacje o dodatkowych usługach eCommerce jak np. Google product search.</p> <p>Możesz zmienić to ustawienie w każdej chwili.</p>',
'MOD_ALLOW_URL_FOPEN' => 'allow_url_fopen lub fsockopen dla portu 80',
'MOD_BC_MATH' => 'BCMath',
'MOD_BUG53632' => 'Możliwe problemy ze względu na błędy w PHP',
'MOD_CURL' => 'cURL',
'MOD_FILE_UPLOADS' => 'Upload plików jest włączony (file_uploads)',
'MOD_GD_INFO' => 'GDlib v2 [v1] incl. JPEG support',
'MOD_INI_SET' => 'ini_set włączone',
'MOD_I_CONV' => 'ICONV',
'MOD_J_SON' => 'JSON',
'MOD_LIB_XML2' => 'LIB XML2',
'MOD_MB_STRING' => 'mbstring',
'MOD_MOD_REWRITE' => 'moduł Apache mod_rewrite',
'MOD_MYSQL_CONNECT' => 'MySQL client connector for MySQL 5',
'MOD_OPEN_SSL' => 'OpenSSL',
'MOD_PHP4_COMPAT' => 'Zend compatibility mode musi być wyłączony',
'MOD_PHP_CONFIG' => 'Ustawienia PHP',
'MOD_PHP_EXTENNSIONS' => 'Rozszerzenia PHP',
'MOD_PHP_VERSION' => 'PHP w wersji min. 5.2.10',
'MOD_PHP_XML' => 'DOM',
'MOD_REGISTER_GLOBALS' => 'register_globals musi być wyłączone',
'MOD_REQUEST_URI' => 'REQUEST_URI set',
'MOD_SERVER_CONFIG' => 'Konfiguracja Serwera',
'MOD_SERVER_PERMISSIONS' => 'Files/folders access rights',
'MOD_SESSION_AUTOSTART' => 'session.auto_start musi być wyłączone',
'MOD_SOAP' => 'SOAP',
'MOD_TOKENIZER' => 'Tokenizer',
'MOD_UNICODE_SUPPORT' => 'wsparcie UTF-8',
'MOD_ZEND_OPTIMIZER' => 'zainstalowany Zend Optimizer lub Zend Guard Loader',
'MOD_ZEND_PLATFORM_OR_SERVER' => 'zainstalowany Zend Platform lub Zend Server',
'PRIVACY_POLICY' => 'ochronie prywatności',
'SELECT_DELIVERY_COUNTRY' => 'Główny kraj wysyłki towarów',
'SELECT_DELIVERY_COUNTRY_HINT' => 'Jeśli potrzebujesz, możesz swobodnie aktywować większą liczbę krajów dostaw w panelu administracyjnym po zakończeniu instalacji.',
'SELECT_PLEASE_CHOOSE' => 'Wybierz',
'SELECT_SETUP_LANG' => 'Wersja językowa',
'SELECT_SETUP_LANG_SUBMIT' => 'Wybierz',
'SELECT_SHOP_LANG' => 'Język sklepu',
'SELECT_SHOP_LANG_HINT' => 'Jeśli potrzebujesz, swobodnie aktywuj większą liczbę języków w panelu administracyjnym.',
'SELECT_SHOP_LOCATION' => 'Twój rynek',
'SELECT_SHOP_LOCATION_HINT' => 'Wybierz kraj w którym planujesz sprzedawać swoje towary. Na podstawie tego wyboru zostaną załadowane dodatkowe informacje z serwerów OXID, jeśli zostanie to aktywowane.',
'SETUP_CONFIG_PERMISSIONS' => 'Ze względów bezpieczeństwa proszę ustaw prawa dostępu do pliku config.inc.php na tylko do odczytu!',
'SETUP_DIR_DELETE_NOTICE' => 'Ze względów bezpieczeństwa po zakończonej instalacji usuń katalog "setup".',
'STEP_0_DESC' => 'W tym kroku sprawdzane jest czy konfiguracja Twojego systemu spełnia wszystkie wymagania pozwalające na na uruchomienie sklepu:',
'STEP_0_ERROR_TEXT' => 'Twój system nie spełnia wymagań systemowych',
'STEP_0_ERROR_URL' => 'http://www.oxid-esales.com/en/products/community-edition/system-requirements',
'STEP_0_TEXT' => '<ul class="req"><li class="pass"> - Twój system spełnia wszystkie wymagania systemowe.</li><li class="pmin"> - Wyagania systemowe są spełnione tylko częściowo, lecz w stopniu wystarczającym do instalacji i użytkownia sytemu OXID.</li><li class="fail"> - Twój system nie spełnia wymagań systemowych. System OXID eShop nie będzie działał na tym systemie i nie możliwa jest jego instalacja.</li><li class="null"> - Wymagania systemowe nie mogły zostać sprawdzone.</ul>',
'STEP_0_TITLE' => 'Sprawdzenie wymagań systemowych',
'STEP_1_ADDRESS' => 'OXID eSales AG<br>
                                                    Bertoldstr. 48<br>
                                                    79098 Freiburg<br>
                                                    Deutschland<br>',
'STEP_1_CHECK_UPDATES' => 'Sprawdzaj regularnie dostępność aktualizacji systemu OXID',
'STEP_1_DESC' => 'Witamy w instalatorze systemu OXID eShop',
'STEP_1_TEXT' => 'Proszę przeczytać uważnie wszystkie instrukcje oraz postępować zgodnie z instrukacjami aby przejść przez proces instalacji bez problemów.
                                                    Życzymy samych sukcesów podczas użytkowania systemu OXID eShop',
'STEP_1_TITLE' => 'Witaj',
'STEP_2_TITLE' => 'Warunki licencyjne',
'STEP_3_1_CREATING_TABLES' => 'Tworzenie tabel, import danych ...',
'STEP_3_1_DB_CONNECT_IS_OK' => 'Test połączenia z bazą danych zakończony   pomyślnie ...',
'STEP_3_1_DB_CREATE_IS_OK' => 'Baza danych %s została utorzona ...',
'STEP_3_1_TITLE' => 'Baza danych - w trakcie tworzenia ...',
'STEP_3_2_CONTINUE_INSTALL_OVER_EXISTING_DB' => 'Jeśli chcesz nadpisać wszystki istniejące w niej dane i zainstalować system mimo to, kliknij',
'STEP_3_2_CREATING_DATA' => 'Proces tworzenia bazy danych został pomyślnie zakończony. Proszę czekać ...',
'STEP_3_2_TITLE' => 'Baza danych - tworzenie tabel ...',
'STEP_3_CREATE_DB_WHEN_NO_DB_FOUND' => 'Jeśli baza danych o wskazanej nazwie nie istnieje, zostanie utworzona na wskazanym serwerze',
'STEP_3_DB_DATABSE_NAME' => 'Nazwa bazy',
'STEP_3_DB_DEMODATA' => 'Przykładowe dane',
'STEP_3_DB_HOSTNAME' => 'URL serwera bazy danych lub adres IP',
'STEP_3_DB_PASSWORD' => 'Hasło',
'STEP_3_DB_PASSWORD_SHOW' => 'Pokaż hasło',
'STEP_3_DB_USER_NAME' => 'Użytkownik',
'STEP_3_DESC' => 'Zostanie utworzona baza danych wraz z potrzebną sturkturą danych. Proszę uzupełnić pola dotyczące bazy danych:',
'STEP_3_TITLE' => 'Baza danych',
'STEP_3_UTFINFO' => 'Kodowanie znaków w UTF-8 pozwala na używanie polskich znaków diakrytycznych (litery polskiego alfabetu).',
'STEP_3_UTFMODE' => 'Włącz kodowanie znaków w UTF-8',
'STEP_3_UTFNOTSUPPORTED' => 'System OXID eShop nie może użyć kodowania UTF-8 z uwagi na:',
'STEP_3_UTFNOTSUPPORTED1' => 'brakujący moduł PHP: mbstring',
'STEP_3_UTFNOTSUPPORTED2' => 'zainstalowany PCRE nie wspiera UTF-8',
'STEP_4_1_DATA_WAS_WRITTEN' => 'Weryfikacja i zapisanie danych zakończone pomyślnie. Proszę czekać ...',
'STEP_4_1_TITLE' => 'Struktura katalogowa - w trakcie tworzenia ...',
'STEP_4_ADMIN_LOGIN_NAME' => 'Adres e-mail Administratora(używany jako login)',
'STEP_4_ADMIN_PASS' => 'Hasło Administratora',
'STEP_4_ADMIN_PASS_CONFIRM' => 'Powtórz hasło Administratora',
'STEP_4_ADMIN_PASS_MINCHARS' => 'dowolne, min. 6 znaków',
'STEP_4_DESC' => 'Proszę podać niezbędne dane do uruchomienia sklepu:',
'STEP_4_SHOP_DIR' => 'Katalog domowy systemu OXID eShop',
'STEP_4_SHOP_TMP_DIR' => 'Katalog plików tymczasowych',
'STEP_4_SHOP_URL' => 'Adres URL sklepu',
'STEP_4_TITLE' => 'Konfiguracja katalogów i adresu URL systemu OXID eShop',
'STEP_5_1_SERIAL_ADDED' => 'Klucz licencyjny został zapisany poprawnie. Proszę czekać ...',
'STEP_5_1_TITLE' => 'Trwa wprowadzania klucza licencyjnego ...',
'STEP_5_DESC' => 'Proszę potwierdzić klucz licencyjny:',
'STEP_5_LICENCE_DESC' => 'Wprowadzony klucz jest waży przez 30 dni. Po tym czasie zostaną zachowane jeśli wprowadzony zostanie prawidłowy klucz licencyjny.',
'STEP_5_LICENCE_KEY' => 'Klucz licencyjny',
'STEP_5_TITLE' => 'Licencja OXID eShop',
'STEP_6_DESC' => 'Twój system OXID eShop został pomyślnie zainstalowany.',
'STEP_6_LINK_TO_SHOP' => 'Przejdź do sklepu',
'STEP_6_LINK_TO_SHOP_ADMIN_AREA' => 'Przejdź do panelu administracyjnego sklepu',
'STEP_6_TITLE' => 'System OXID eShop został pomyślnie zainstalowany',
'STEP_6_TO_SHOP' => 'Przejdź do sklepu',
'STEP_6_TO_SHOP_ADMIN' => 'Przejdź do panelu administracyjnego sklepu',
'TAB_0_DESC' => 'Sprawdzenie czy Twój system spełnia wszystkie wymagania',
'TAB_0_TITLE' => 'Wymagania systemowe',
'TAB_1_DESC' => 'Witamy w instalatorze OXID eShop',
'TAB_1_TITLE' => 'Witaj',
'TAB_2_DESC' => 'Zatwierdz warunki licencyjne',
'TAB_2_TITLE' => 'Warunki licencyjne',
'TAB_3_DESC' => 'Test połączenia z bazą, budowanie tabel',
'TAB_3_TITLE' => 'Baza danych',
'TAB_4_DESC' => 'Konfiguracja katalogów oraz użytkownika administracyjnego',
'TAB_4_TITLE' => 'Katalogi i login',
'TAB_5_DESC' => 'Zatwierdź klucz licencyjny',
'TAB_5_TITLE' => 'Licencja',
'TAB_6_DESC' => 'Instalacja zakończona sukcesem',
'TAB_6_TITLE' => 'Koniec',
'USE_DYNAMIC_PAGES' => 'Aby zwiększyć swój sukces pobieraj dodaktowe informacje z serwerów OXID. Więcej informacji znajdziesz w naszej',
];
