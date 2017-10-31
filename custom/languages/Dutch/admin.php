<?php
/*
 *	Gemaakt door Samerton
 *  en vertaald en bijgewerkt door Sander Lambrechts, Jesse Geerts, Derkades en smessie
 *
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr3
 *
 *  License: MIT
 *
 *  Nederlandse taal - Admin
 */

$language = array(
	/*
	 *  Admin controle paneel
	 */
	// Login
	're-authenticate' => 'Gelieve opnieuw te verifiëren',

	// Navigatiebalk
	'admin_cp' => 'Controle Paneel',
	'administration' => 'Administratie',
	'overview' => 'Overzicht',
	'core' => 'Kern',
	'minecraft' => 'Minecraft',
	'modules' => 'Modules',
	'security' => 'Beveiliging',
	'styles' => 'Stijlen',
	'users_and_groups' => 'Gebruikers en groepen',

	// Overzicht
	'running_nameless_version' => 'Website versie: <strong>{x}</strong>', // Verander "{x}" niet
	'running_php_version' => 'PHP versie: <strong>{x}</strong>', // Verander "{x}" niet
	'statistics' => 'Statistieken',
	'notices' => 'Berichten',
	'no_notices' => 'Geen berichten.',
	'email_errors_logged' => 'Email fouten zijn vastgesteld. Klik <a href="{x}">hier</a> om ze te bekijken.', // Verander "{x}" niet

	// Kern
	'settings' => 'Instellingen',
	'general_settings' => 'Algemene Instellingen',
	'sitename' => 'Site naam',
	'default_language' => 'Standaard taal',
	'default_language_help' => 'Gebruikers kunnen kiezen uit alle geinstalleerde talen.',
	'installed_languages' => 'Alle nieuwe talen zijn toegevoegd.',
	'default_timezone' => 'Standaard tijdzone',
	'registration' => 'Registratie',
	'enable_registration' => 'Schakel registratie in?',
	'verify_with_mcassoc' => 'Verifieer gebruiker accounts met MCAssoc?',
	'email_verification' => 'Schakel email verificatie in?',
	'homepage_type' => 'Beginpagina type',
	'post_formatting_type' => 'Bericht opmaak soort',
	'portal' => 'Portaal',
	'missing_sitename' => 'Graag een sitenaam invullen van 2 tot 64 karakters lang.',
	'use_friendly_urls' => 'Vriendelijke URLs',
	'use_friendly_urls_help' => 'BELANGRIJK: Je webserver/webhosting moet geconfigureerd zijn om gebruik te maken van mod_rewrite en .htaccess vooraleer dit werkt.',
	'config_not_writable' => 'Uw <strong>core/config.php</strong> bestand is niet schrijfbaar. Controleer de permissies.',
	'social_media' => 'Sociale Media',
	'youtube_url' => 'Youtube URL',
	'discord_id' => 'Discord Server ID',
	'twitter_url' => 'Twitter URL',
	'twitter_dark_theme' => 'Gebruik het donkere thema voor Twitter?',
	'google_plus_url' => 'Google Plus URL',
	'facebook_url' => 'Facebook URL',
	'successfully_updated' => 'Succesvol bijgewerkt',
	'debugging_and_maintenance' => 'Debugging en beheer',
	'enable_debug_mode' => 'Wil je debug modus inschakelen?',
	'force_https' => 'Forceer https?',
	'force_https_help' => 'Als dit aanstaat, worden alle verzoeken naar deze website doorgestuurd via https. Je moet een geldig SSL certificaat hebben die actief is om dit te laten werken.',
	'contact_email_address' => 'Emailadres voor contact',
	'emails' => 'Emails',
	'email_errors' => 'Email fouten',
	'registration_email' => 'Registratie email',
	'contact_email' => 'Contact email',
    'forgot_password_email' => 'Vergeten wachtwoord email',
	'unknown' => 'Onbekend',
	'delete_email_error' => 'Fout verwijderen',
	'confirm_email_error_deletion' => 'Weet je zeker dat je deze fout wilt verwijderen?',
	'viewing_email_error' => 'Fout aan het bekijken',
	'unable_to_write_email_config' => 'Kon niet naar het bestand <strong>core/email.php</core> schrijven. Graag de bestandsrechten bekijken.',
	'enable_mailer' => 'PHPMailer inschakelen?',
	'enable_mailer_help' => 'Zet dit aan als de emails standaard niet worden verzonden. Als je gebruik wilt maken van PHPMailer heb je een email dienst nodig waarmee je emails kan verzenden, zoals Gmail of een SMTP provider (Outlook/Hotmail).',
	'outgoing_email' => 'Uitgaand Emailadres',
	'outgoing_email_info' => 'Dit is het email adres waarmee NamelessMC emails gaat verzenden.',
	'mailer_settings_info' => 'De volgende velden zijn nodig als je PHPMailer aan hebt gezet. Voor meer informatie hoe je deze velden moet invullen, bekijk dan <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-Gmail-or-SMTP-with-Nameless" target="_blank">de wiki</a>.',
	'host' => 'Host',
	'email_port' => 'Port',
	'email_password_hidden' => 'Het wachtwoord wordt om veiligheidsredenen niet getoond.',
	'send_test_email' => 'Vezend test email',
	'send_test_email_info' => 'Deze knop zorgt ervoor dat er een email naar het email addres, <strong>{x}</strong> wordt verzonden. Eventuele fouten tijdens het versturen van die e-mail, worden weergegeven.', // Verander {x} niet
	'send' => 'Verzend',
	'test_email_error' => 'Test email fout:',
	'test_email_success' => 'Test email succesvol verzonden!',
	'terms_error' => 'Zorg ervoor dat je algemene voorwaarden niet meer dan 2048 karakters bevat.',
	'terms_updated' => 'Algemene voorwaarden succesvol bijgewerkt.',
    'avatars' => 'Avatars',
    'allow_custom_avatars' => 'Toestaan van aangepaste gebruiker avatars?',
    'default_avatar' => 'Standaard avatar',
    'custom_avatar' => 'Aangepaste avatar',
    'minecraft_avatar' => 'Minecraft avatar',
    'minecraft_avatar_source' => 'Minecraft avatar bron',
    'built_in_avatars' => 'Ingebouwde avatar dienst',
    'minecraft_avatar_perspective' => 'Minecraft avatar perspectief',
    'face' => 'Gezicht',
    'head' => 'Hoofd',
    'select_default_avatar' => 'Selecteer een nieuwe standaard avatar:',
    'no_avatars_available' => 'Geen avatars beschikbaar. Graag eerst een niewe afbeelding uploaden hierboven.',
    'avatar_settings_updated_successfully' => 'Avatar instellingen succesvol geüpdatet.',
    'navigation' => 'Navigatie',
    'navbar_order' => 'Navbar ordening',
    'navbar_order_instructions' => 'Je kan elk item een nummer boven de 0 geven om items te ordenen in de navbar, met 1 de eerste en hogere nummers erna.',
    'enable_page_load_timer' => 'Pagina laad timer inschakelen?',
    'google_recaptcha' => 'Enable Google reCAPTCHA?',
    'recaptcha_site_key' => 'reCAPTCHA Site Key',
    'recaptcha_secret_key' => 'reCAPTCHA Secret Key',

	// Reacties
	'icon' => 'Icoon',
	'type' => 'Type',
	'positive' => 'Positief',
	'neutral' => 'Neutraal',
	'negative' => 'Negatief',
	'editing_reaction' => 'Reactie veranderen',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> Nieuwe reactie',
	'creating_reaction' => 'Reactie maken',

	// Aangepaste profiel velden
	'custom_fields' => 'Aangepaste profiel velden',
	'new_field' => '<i class="fa fa-plus-circle"></i> Nieuw veld',
	'required' => 'Verplicht',
	'public' => 'Openbaar',
	'text' => 'Tekst',
	'textarea' => 'Tekst gebied',
	'date' => 'Datum',
	'creating_profile_field' => 'Maak een profiel veld',
	'editing_profile_field' => 'Profiel veld bewerken',
	'field_name' => 'Veld naam',
	'profile_field_required_help' => 'Verplichte velden moeten door de gebruiker worden ingevuld, en ze verschijnen tijden de registratie.',
	'profile_field_public_help' => 'Openbare velden kunnen alle gebruikers zien, als dit uit staat kunnen alleen beheerders het zien.',
	'profile_field_error' => 'Graag een veld naam invullen tussen de 2 en 16 karakters lang.',
	'description' => 'Beschrijving',
	'display_field_on_forum' => 'Veld laten zien in het forum?',
	'profile_field_forum_help' => 'Als dit aan staat, wordt het veld weergegeven bij de gebruiker naast de forum berichten.',

	// Minecraft
	'enable_minecraft_integration' => 'Minecraft integratie aan?',
	'mc_service_status' => 'Minecraft Dienst Status',
	'service_query_error' => 'Kon de dienst status niet verkrijgen.',
	'authme_integration' => 'AuthMe integratie',
	'authme_integration_info' => 'Wanneer AuthMe integratie aanstaat, kunnen de gebruikers alleen in-game een account maken.',
	'enable_authme' => 'AuthMe integratie aanzetten?',
	'authme_db_address' => 'AuthMe Database Adres',
	'authme_db_port' => 'AuthMe Database Poort',
	'authme_db_name' => 'AuthMe Database Naam',
	'authme_db_user' => 'AuthMe Database Gebruikersnaam',
	'authme_db_password' => 'AuthMe Database Wachtwoord',
	'authme_hash_algorithm' => 'AuthMe Hashing Algoritme',
	'authme_db_table' => 'AuthMe User Table',
	'enter_authme_db_details' => 'Vul geldige database gegevens in.',
	'authme_password_sync' => 'Synchroniseer AuthMe wachtwoord?',
	'authme_password_sync_help' => 'Als het aanstaat, veranderd het wachtwoord op de website, wanneer hij of zij het in-game verandert.',
	'minecraft_servers' => 'Minecraft Servers',
	'account_verification' => 'Minecraft Account Verificatie',
	'server_banners' => 'Server Banners',
	'query_errors' => 'Query Fouten',
	'add_server' => '<i class="fa fa-plus-circle"></i> Server toevoegen',
	'no_servers_defined' => 'Er zijn geen servers gedefinieerd',
	'query_settings' => 'Query instellingen',
	'default_server' => 'Standaard server',
	'no_default_server' => 'Geen standaard server',
	'external_query' => 'Gebruike externe query?',
	'external_query_help' => 'Als de standaard server query niet werkt, gebruik dan deze optie.',
	'adding_server' => 'Server toevoegen',
	'server_name' => 'Server naam',
	'server_address' => 'Server adres',
	'server_address_help' => 'Dit is het IP adres of domein dat wordt gebruikt door de spelers om met de server te verbinden.',
	'server_port' => 'Server poort',
	'parent_server' => 'Hoofd server',
	'parent_server_help' => 'Een hoofd server is gewoonlijk de BungeeCord server waarmee de website is verbonden, als deze er is.',
	'no_parent_server' => 'Geen hoofd server',
	'bungee_instance' => 'BungeeCord Server?',
	'bungee_instance_help' => 'Zet dit aan als de server een BungeeCord server is.',
	'server_query_information' => 'Om een lijst met spelers te laten zien, <strong>moet</strong> je server de optie \'enable-query\' aanzetten in de server\'s <strong>server.properties</strong> bestand',
	'enable_status_query' => 'Status query aanzetten?',
	'status_query_help' => 'Als dit aanstaat, zal er op de status pagina staan of de server online is.',
	'enable_player_list' => 'Spelerslijst aanzetten?',
	'pre_1.7' => 'Is de server ouder dan Minecraft versie 1.7?',
	'player_list_help' => 'Als dit aanstaat, wordt er op de status pagina een lijst van online spelers weergegeven.',
	'server_query_port' => 'Server Query poort',
	'server_query_port_help' => 'Dit is de query.port optie in je server\'s server.properties bestand, zorg er ook voor dat de enable-query optie in hetzelfde bestaand aanstaat (true).',
	'server_name_required' => 'Vul een server naam in.',
	'server_name_minimum' => 'Zorg dat de server naam uit minimaal 1 karakter bestaat.',
	'server_name_maximum' => 'Zorg dat de server naam uit maximaal 20 karakters bestaat.',
	'server_address_required' => 'Vul een server adres in.',
	'server_address_minimum' => 'Zorg dat het server adres uit minimaal 1 karakter bestaat.',
	'server_address_maximum' => 'Zorg dat het server adres uit maximaal 64 karakters bestaat.',
	'server_port_required' => 'Vul een server poort in.',
	'server_port_minimum' => 'Zorg ervoor dat je server port minimaal uit 2 karakters bestaat',
	'server_port_maximum' => 'Zorg ervoor dat je server port is a maximum of 5 karakters bestaat',
	'server_parent_required' => 'Graag een hoofd server selecteren',
	'query_port_maximum' => 'Zorg ervoor dat je query poort maximaal uit 5 karakters bestaat',
	'server_created' => 'Server succesvol aangemaakt.',
	'confirm_delete_server' => 'Weet je zeker dat je deze server wilt verwijderen?',
	'server_updated' => 'Server succesvol bijgewerkt.',
	'editing_server' => 'Server bewerken',
	'server_deleted' => 'Server succesvol verwijderd',
	'unable_to_delete_server' => 'Deze server kan niet worden verwijderd.',
	'viewing_query_error' => 'Query fout aan het bekijken',
	'confirm_query_error_deletion' => 'Weet je zeker dat je deze query fout wilt verwijderen?',
	'no_query_errors' => 'Geen query fouten vastgesteld.',
	'new_banner' => '<i class="fa fa-plus-circle"></i> Nieuwe banner',
	'purge_errors' => 'Verwijder fouten',
	'confirm_purge_errors' => 'Weet je zeker dat je alle fouten wilt verwijderen?',
	'mcassoc_help' => 'mcassoc is een externe dienst die gebruikt kan worden om te controleren of gebruikers het Minecraft account hebben gekocht waarmee zij zich hebben geregistreerd. Om deze functie te gebruiken, dien je je aan te melden voor een "shared key". Je kan deze krijgen op de <a href="https://mcassoc.lukegb.com/" target="_blank">mcassoc website</a>.',
	'mcassoc_key' => 'mcassoc Shared Key',
	'mcassoc_instance' => 'mcassoc Instance Key',
	'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">Klik om een "instance key" te genereren</a>',
	'mcassoc_error' => 'Zorg ervoor dat je je "shared key" correct hebt ingevuld, en dat je een "instance key" correct hebt gegenereerd.',
	'updated_mcassoc_successfully' => 'mcassoc instellingen succesvol bijgewerkt.',
	'force_premium_accounts' => 'Forceer betaalde Minecraft accounts?',
	'banner_background' => 'Banner achtergrond',
	'query_interval' => 'Query interval (in minuten, moet tussen de 5 en 60)',
	'player_graphs' => 'Speler grafieken',
	'player_count_cronjob_info' => 'Je kan een cron job instellen om je servers op tevragen elke {x} minuten met de volgende commando:',

	// Modulen
	'modules_installed_successfully' => 'Alle nieuwe modules zijn succesvol toegevoegd.',
	'enabled' => 'Ingeschakeld',
	'disabled' => 'Uitgeschakeld',
	'enable' => 'Inschakelen',
	'disable' => 'Uitschakelen',
	'module_enabled' => 'Module ingeschakeld.',
	'module_disabled' => 'Module uitgeschakeld.',
	'author' => 'Auteur:',

	// Stijlen
	'templates' => 'Sjablonen',
	'template_outdated' => 'We hebben ontdekt dat dit sjabloon voor versie {x} is, maar je gebruikt versie {y}', // Verander "{x}" of "{y}" niet
	'active' => 'Actief',
	'deactivate' => 'Deactiveer',
	'activate' => 'Activeer',
	'warning_editing_default_template' => 'Waarschuwing! Het wordt niet aanbevolen om het standaard sjabloon te bewerken.',
	'images' => 'Afbeeldingen',
	'upload_new_image' => 'Upload nieuwe afbeelding',
	'reset_background' => 'Herstel achtergrond naar standaard',
	'install' => '<i class="fa fa-plus-circle"></i> Installeren',
	'template_updated' => 'Sjabloon succesvol bijgewerkt.',
	'default' => 'Standaard',
	'make_default' => 'Maak standaard',
	'default_template_set' => 'Standaard sjabloon verzet naar {x} succesvol.', // Verander "{x}" niet
	'template_deactivated' => 'Sjabloon gedeactiveerd.',
	'template_activated' => 'Sjabloon geactiveerd.',
	'permissions' => 'Toestemmingen',
	'setting_perms_for_x' => 'Instellen van toestemmingen voor sjabloon {x}', // Verander "{x}" niet
	'templates_installed_successfully' => 'Elk nieuw sjabloon is geinstalleerd .',
	'confirm_delete_template' => 'Weet je zeker dat je dit sjabloon wilt verwijderen?',
	'delete' => 'Verwijder',
	'template_deleted_successfully' => 'Sjabloon succesvol verwijderd.',
    'background_image_x' => 'Background image: <strong>{x}</strong>', // Don't replace {x}

	// Gebruikers & groepen
	'users' => 'Gebruikers',
	'groups' => 'Groepen',
	'group' => 'Groep',
	'new_user' => '<i class="fa fa-plus-circle"></i> Nieuwe gebruiker',
	'creating_new_user' => 'Maak een nieuwe gebruiker',
	'registered' => 'Aangemeld',
	'user_created' => 'Gebruiker succesvol aangemaakt.',
	'cant_delete_root_user' => 'Kan de hoofdgebruiker niet verwijderen!',
	'cant_modify_root_user' => 'Kan de groep van de hoofdgebruiker niet wijzigen!',
	'user_deleted' => 'Gebruiker succesvol verwijderd.',
	'confirm_user_deletion' => 'Weet je zeker dat je <strong>{x}</strong> wilt verwijderen?', // Verander "{x}" niet
	'validate_user' => 'Valideer gebruiker',
	'update_uuid' => 'UUID bijwerken',
	'update_mc_name' => 'Minecraft naam bijwerken',
	'reset_password' => 'Herstel wachtwoord',
	'punish_user' => 'Straf gebruiker',
	'delete_user' => 'Verwijder gebruiker',
	'minecraft_uuid' => 'Minecraft UUID',
	'other_actions' => 'Andere acties',
	'disable_avatar' => 'Avatar uitschakelen',
	'select_user_group' => 'Je moet een groep slecteren.',
	'uuid_max_32' => 'De UUID mag maar uit 32 karakters bestaan.',
	'title_max_64' => 'De gebruikers titel mag maar uit 64 karakters bestaan.',
	'group_id' => 'Groep ID',
	'name' => 'Naam groep',
	'title' => 'Gebruikers titel',
	'new_group' => '<i class="fa fa-plus-circle"></i> Nieuwe groep',
	'group_name_required' => 'Graag een groepsnaam invoeren.',
	'group_name_minimum' => 'Zorg ervoor dat de groepsnaam minimaal uit 2 karakters bestaat.',
	'group_name_maximum' => 'Zorg ervoor dat de groepsnaam maximaal uit 20 karakters bestaat.',
	'creating_group' => 'Nieuwe groep maken',
	'group_html_maximum' => 'Zorg ervoor dat je groeps HTML code niet langer is dan 1024 karakters.',
	'group_html' => 'Groeps HTML code',
	'group_html_lg' => 'Groeps grotere HTML code',
	'group_username_colour' => 'Groep gebruikersnaam kleur',
	'group_staff' => 'Is de groep voor personeel?',
	'group_modcp' => 'Mag deze groep het moderatie paneel zien?',
	'group_admincp' => 'Mag deze groep het controle/administratie paneel zien?',
	'delete_group' => 'Verwijder groep',
	'confirm_group_deletion' => 'Weet je zeker dat je de groep {x} wilt verwijderen?', // Verander "{x}" niet
	'group_not_exist' => 'Die groep bestaat niet.',
	'secondary_groups' => 'Bijkomende groepen',
	'secondary_groups_info' => 'De gebruiker zal de bijkomende toestemmingen van deze groepen ook krijgen',

    // Permissies
    'select_all' => 'Selecteer Allemaal',
    'deselect_all' => 'Deselecteer Allemaal',
    'background_image' => 'Achtergrondafbeelding',
    'can_edit_own_group' => 'Kan de permissies van je eigen groep niet bewerken.',
    'permissions_updated_successfully' => 'Permissies succesvol geüpdatet.',
    'cant_edit_this_group' => 'Je kan deze groep haar permissies niet aanpassen!',

	// Algemene admin taal
	'task_successful' => 'Taak succesvol.',
	'invalid_action' => 'Ongeldige actie.',
	'enable_night_mode' => 'Zet nachtmodus aan',
	'disable_night_mode' => 'Zet nachtmodus uit',
	'view_site' => 'Terug naar de website',
	'signed_in_as_x' => 'Ingelogd als {x}', // Verander "{x}" niet
	'warning' => 'Waarschuwing',

	// Onderhoud
	'maintenance_mode' => 'Onderhoud modus',
	'maintenance_enabled' => 'Onderhoud modus staat nu aan.',
	'enable_maintenance_mode' => 'Wil je onderhoud modus inschakelen?',
	'maintenance_mode_message' => 'Onderhoud modus bericht',
	'maintenance_message_max_1024' => 'Zorg ervoor dat je onderhoud bericht maximaal uit 1024 karakters bestaat.',

	// Beveiliging
	'acp_logins' => 'Controle paneel aanmeldingen',
	'please_select_logs' => 'Welk logboek wil je bekijken?',
	'ip_address' => 'IP Adres',
	'template_changes' => 'Sjabloon veranderingen',
	'file_changed' => 'Veranderde bestanden',

	// Updates
	'update' => 'Bijwerken',
	'current_version_x' => 'Huidige versie: <strong>{x}</strong>', // Verander "{x}" niet
	'new_version_x' => 'Nieuwe versie: <strong>{x}</strong>', // Verander "{x}" niet
	'new_update_available' => 'Er is een nieuwe versie beschikbaar',
	'up_to_date' => 'Deze website draait al de nieuwste versie!',
	'urgent' => 'Je moet je website dringend bijwerken',
	'changelog' => 'Lijst van veranderingen',
	'update_check_error' => 'Er was een fout met het zoeken naar nieuwe versies:',
	'instructions' => 'Instructies',
	'download' => 'Download',
	'install_confirm' => 'Zorg ervoor dat je het bestand hebt gedownload en de bestanden hebt geupload voordat je verder gaat!',

	 // Widgets
	'widgets' => 'Widgets',
	'widget_enabled' => 'Widget ingeschakeld.',
	'widget_disabled' => 'Widget uitgeschakeld.',
	'editing_widget_x' => 'Widget {x} bewerken', // Don't replace {x}
	'module_x' => 'Module: {x}', // Don't replace {x}

    // aangepaste pagina's
    'pages' => 'Pagina\'s',
    'new_page' => '<i class="fa fa-plus-circle"></i> Nieuwe pagina',
    'no_custom_pages' => 'Er zijn nog geen paginas gemaakt.',
    'creating_new_page' => 'Pagina aan het maken',
    'page_title' => 'Pagina titel',
    'page_path' => 'Pagina pad (met vooraf een /, bv /voorbeeld)',
    'page_icon' => 'Pagina icoon',
    'page_link_location' => 'Pagina Link Locatie',
    'page_link_navbar' => 'Navbar',
    'page_link_footer' => 'Voettekst',
    'page_link_more' => '"Meer" Dropdown',
    'page_link_none' => 'Geen link',
    'page_content' => 'Pagina inhoud',
    'page_redirect' => 'Pagina doorsturing?',
    'page_redirect_to' => 'Doorstuur link (met vooraf http://)',
    'unsafe_html' => 'Toestaan van onveilige HTML?',
    'unsafe_html_warning' => 'Dit aanzetten betekent dat je HTML kan gebruiken op je pagina, inclusief potentieel gevaarlijke JavaScript. Alleen aanzetten als je weet dat je HTML veilig is.',
    'page_permissions' => 'Pagina toestemmingen',
    'view_page' => 'Pagina bekijken?',
    'editing_page_x' => 'Pagina {x} aan het bewerken', // Verander {x} niet
    'unable_to_create_page' => 'Kon pagina niet maken:',
    'page_title_required' => 'Een pagina titel is nodig.',
    'page_url_required' => 'Een pagina pad is nodig.',
    'link_location_required' => 'Een link locatie is nodig.',
    'page_title_minimum_2' => 'De pagina titel moet minimaal uit 2 karakters bestaan.',
    'page_url_minimum_2' => 'Het pagina pad moet minimaal uit 2 karakters bestaan.',
    'page_title_maximum_30' => 'De pagina titel moet maximaal uit 30 karakters bestaan.',
    'page_icon_maximum_64' => 'Het pagina icoon moet maximaal uit 64 karakters bestaan.',
    'page_url_maximum_20' => 'Het pagina pad moet maximaal uit 20 karakters bestaan.',
    'page_content_maximum_20480' => 'De pagina inhoud moet minimaal uit 20480 karakters bestaan.',
    'page_redirect_link_maximum_512' => 'De pagina doorstuur link moet minimaal uit 512 karakters bestaan.',
    'confirm_delete_page' => 'Weet je zeker dat je deze pagina wilt verwijderen?',

	// Bestand uploads
	'drag_files_here' => 'Sleep bestand(en) hier naartoe om te uploaden.',
	'invalid_file_type' => 'Bestandstype is incorrect',
	'file_too_big' => 'Het bestand dat je wilt uploaden is te groot! Je bestand is {{filesize}} en het limiet is {{maxFilesize}} .' // Verander {{filesize}} of {{maxFilesize}} niet
);
