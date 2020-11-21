<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Nastavenia',
    'settings_save' => 'Uložiť nastavenia',
    'settings_save_success' => 'Nastavenia uložené',

    // App Settings
    'app_customization' => 'Customization',
    'app_features_security' => 'Features & Security',
    'app_name' => 'Názov aplikácia',
    'app_name_desc' => 'Tento názov sa zobrazuje v hlavičke a v emailoch.',
    'app_name_header' => 'Zobraziť názov aplikácie v hlavičke?',
    'app_public_access' => 'Public Access',
    'app_public_access_desc' => 'Enabling this option will allow visitors, that are not logged-in, to access content in your BookStack instance.',
    'app_public_access_desc_guest' => 'Access for public visitors can be controlled through the "Guest" user.',
    'app_public_access_toggle' => 'Allow public access',
    'app_public_viewing' => 'Povoliť verejné zobrazenie?',
    'app_secure_images' => 'Povoliť nahrávanie súborov so zvýšeným zabezpečením?',
    'app_secure_images_toggle' => 'Enable higher security image uploads',
    'app_secure_images_desc' => 'Kvôli výkonu sú všetky obrázky verejné. Táto možnosť pridá pred URL obrázka náhodný, ťažko uhádnuteľný reťazec. Aby ste zabránili jednoduchému prístupu, uistite sa, že indexy priečinkov nie sú povolené.',
    'app_editor' => 'Editor stránky',
    'app_editor_desc' => 'Vyberte editor, ktorý bude používaný všetkými používateľmi na editáciu stránok.',
    'app_custom_html' => 'Vlastný HTML obsah hlavičky',
    'app_custom_html_desc' => 'Všetok text pridaný sem bude vložený naspodok <head> sekcie na každej stránke. Môže sa to zísť pri zmene štýlu alebo pre pridanie analytického kódu.',
    'app_custom_html_disabled_notice' => 'Custom HTML head content is disabled on this settings page to ensure any breaking changes can be reverted.',
    'app_logo' => 'Logo aplikácie',
    'app_logo_desc' => 'Tento obrázok by mal mať 43px na výšku. <br>Veľké obrázky budú preškálované na menší rozmer.',
    'app_primary_color' => 'Primárna farba pre aplikáciu',
    'app_primary_color_desc' => 'Toto by mala byť hodnota v hex tvare. <br>Nechajte prázdne ak chcete použiť prednastavenú farbu.',
    'app_homepage' => 'Application Homepage',
    'app_homepage_desc' => 'Select a view to show on the homepage instead of the default view. Page permissions are ignored for selected pages.',
    'app_homepage_select' => 'Select a page',
    'app_disable_comments' => 'Zakázať komentáre',
    'app_disable_comments_toggle' => 'Disable comments',
    'app_disable_comments_desc' => 'Zakázať komentáre na všetkých stránkach aplikácie. Existujúce komentáre sa nezobrazujú.',

    // Color settings
    'content_colors' => 'Content Colors',
    'content_colors_desc' => 'Sets colors for all elements in the page organisation hierarchy. Choosing colors with a similar brightness to the default colors is recommended for readability.',
    'bookshelf_color' => 'Shelf Color',
    'book_color' => 'Book Color',
    'chapter_color' => 'Chapter Color',
    'page_color' => 'Page Color',
    'page_draft_color' => 'Page Draft Color',

    // Registration Settings
    'reg_settings' => 'Nastavenia registrácie',
    'reg_enable' => 'Enable Registration',
    'reg_enable_toggle' => 'Enable registration',
    'reg_enable_desc' => 'When registration is enabled user will be able to sign themselves up as an application user. Upon registration they are given a single, default user role.',
    'reg_default_role' => 'Prednastavená používateľská rola po registrácii',
    'reg_enable_external_warning' => 'The option above is ignored while external LDAP or SAML authentication is active. User accounts for non-existing members will be auto-created if authentication, against the external system in use, is successful.',
    'reg_email_confirmation' => 'Email Confirmation',
    'reg_email_confirmation_toggle' => 'Require email confirmation',
    'reg_confirm_email_desc' => 'Ak je použité obmedzenie domény, potom bude vyžadované overenie emailu a hodnota nižšie bude ignorovaná.',
    'reg_confirm_restrict_domain' => 'Obmedziť registráciu na doménu',
    'reg_confirm_restrict_domain_desc' => 'Zadajte zoznam domén, pre ktoré chcete povoliť registráciu oddelených čiarkou. Používatelia dostanú email kvôli overeniu adresy predtým ako im bude dovolené používať aplikáciu. <br> Používatelia si budú môcť po úspešnej registrácii zmeniť svoju emailovú adresu.',
    'reg_confirm_restrict_domain_placeholder' => 'Nie sú nastavené žiadne obmedzenia',

    // Maintenance settings
    'maint' => 'Maintenance',
    'maint_image_cleanup' => 'Cleanup Images',
    'maint_image_cleanup_desc' => "Scans page & revision content to check which images and drawings are currently in use and which images are redundant. Ensure you create a full database and image backup before running this.",
    'maint_image_cleanup_ignore_revisions' => 'Ignore images in revisions',
    'maint_image_cleanup_run' => 'Run Cleanup',
    'maint_image_cleanup_warning' => ':count potentially unused images were found. Are you sure you want to delete these images?',
    'maint_image_cleanup_success' => ':count potentially unused images found and deleted!',
    'maint_image_cleanup_nothing_found' => 'No unused images found, Nothing deleted!',
    'maint_send_test_email' => 'Send a Test Email',
    'maint_send_test_email_desc' => 'This sends a test email to your email address specified in your profile.',
    'maint_send_test_email_run' => 'Send test email',
    'maint_send_test_email_success' => 'Email sent to :address',
    'maint_send_test_email_mail_subject' => 'Test Email',
    'maint_send_test_email_mail_greeting' => 'Email delivery seems to work!',
    'maint_send_test_email_mail_text' => 'Congratulations! As you received this email notification, your email settings seem to be configured properly.',
    'maint_recycle_bin_desc' => 'Deleted shelves, books, chapters & pages are sent to the recycle bin so they can be restored or permanently deleted. Older items in the recycle bin may be automatically removed after a while depending on system configuration.',
    'maint_recycle_bin_open' => 'Open Recycle Bin',

    // Recycle Bin
    'recycle_bin' => 'Recycle Bin',
    'recycle_bin_desc' => 'Here you can restore items that have been deleted or choose to permanently remove them from the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'recycle_bin_deleted_item' => 'Deleted Item',
    'recycle_bin_deleted_by' => 'Deleted By',
    'recycle_bin_deleted_at' => 'Deletion Time',
    'recycle_bin_permanently_delete' => 'Permanently Delete',
    'recycle_bin_restore' => 'Restore',
    'recycle_bin_contents_empty' => 'The recycle bin is currently empty',
    'recycle_bin_empty' => 'Empty Recycle Bin',
    'recycle_bin_empty_confirm' => 'This will permanently destroy all items in the recycle bin including content contained within each item. Are you sure you want to empty the recycle bin?',
    'recycle_bin_destroy_confirm' => 'This action will permanently delete this item, along with any child elements listed below, from the system and you will not be able to restore this content. Are you sure you want to permanently delete this item?',
    'recycle_bin_destroy_list' => 'Items to be Destroyed',
    'recycle_bin_restore_list' => 'Items to be Restored',
    'recycle_bin_restore_confirm' => 'This action will restore the deleted item, including any child elements, to their original location. If the original location has since been deleted, and is now in the recycle bin, the parent item will also need to be restored.',
    'recycle_bin_restore_deleted_parent' => 'The parent of this item has also been deleted. These will remain deleted until that parent is also restored.',
    'recycle_bin_destroy_notification' => 'Deleted :count total items from the recycle bin.',
    'recycle_bin_restore_notification' => 'Restored :count total items from the recycle bin.',

    // Audit Log
    'audit' => 'Audit Log',
    'audit_desc' => 'This audit log displays a list of activities tracked in the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'audit_event_filter' => 'Event Filter',
    'audit_event_filter_no_filter' => 'No Filter',
    'audit_deleted_item' => 'Deleted Item',
    'audit_deleted_item_name' => 'Name: :name',
    'audit_table_user' => 'User',
    'audit_table_event' => 'Event',
    'audit_table_related' => 'Related Item or Detail',
    'audit_table_date' => 'Activity Date',
    'audit_date_from' => 'Date Range From',
    'audit_date_to' => 'Date Range To',

    // Role Settings
    'roles' => 'Roly',
    'role_user_roles' => 'Používateľské roly',
    'role_create' => 'Vytvoriť novú rolu',
    'role_create_success' => 'Rola úspešne vytvorená',
    'role_delete' => 'Zmazať rolu',
    'role_delete_confirm' => 'Toto zmaže rolu menom \':roleName\'.',
    'role_delete_users_assigned' => 'Túto rolu má priradenú :userCount používateľov. Ak chcete premigrovať používateľov z tejto roly, vyberte novú rolu nižšie.',
    'role_delete_no_migration' => "Nemigrovať používateľov",
    'role_delete_sure' => 'Ste si istý, že chcete zmazať túto rolu?',
    'role_delete_success' => 'Rola úspešne zmazaná',
    'role_edit' => 'Upraviť rolu',
    'role_details' => 'Detaily roly',
    'role_name' => 'Názov roly',
    'role_desc' => 'Krátky popis roly',
    'role_external_auth_id' => 'External Authentication IDs',
    'role_system' => 'Systémové oprávnenia',
    'role_manage_users' => 'Spravovať používateľov',
    'role_manage_roles' => 'Spravovať role a oprávnenia rolí',
    'role_manage_entity_permissions' => 'Spravovať všetky oprávnenia kníh, kapitol a stránok',
    'role_manage_own_entity_permissions' => 'Spravovať oprávnenia vlastných kníh, kapitol a stránok',
    'role_manage_page_templates' => 'Manage page templates',
    'role_access_api' => 'Access system API',
    'role_manage_settings' => 'Spravovať nastavenia aplikácie',
    'role_asset' => 'Oprávnenia majetku',
    'roles_system_warning' => 'Be aware that access to any of the above three permissions can allow a user to alter their own privileges or the privileges of others in the system. Only assign roles with these permissions to trusted users.',
    'role_asset_desc' => 'Tieto oprávnenia regulujú prednastavený prístup k zdroju v systéme. Oprávnenia pre knihy, kapitoly a stránky majú vyššiu prioritu.',
    'role_asset_admins' => 'Admins are automatically given access to all content but these options may show or hide UI options.',
    'role_all' => 'Všetko',
    'role_own' => 'Vlastné',
    'role_controlled_by_asset' => 'Regulované zdrojom, do ktorého sú nahrané',
    'role_save' => 'Uložiť rolu',
    'role_update_success' => 'Roly úspešne aktualizované',
    'role_users' => 'Používatelia s touto rolou',
    'role_users_none' => 'Žiadni používatelia nemajú priradenú túto rolu',

    // Users
    'users' => 'Používatelia',
    'user_profile' => 'Profil používateľa',
    'users_add_new' => 'Pridať nového používateľa',
    'users_search' => 'Hľadať medzi používateľmi',
    'users_latest_activity' => 'Latest Activity',
    'users_details' => 'User Details',
    'users_details_desc' => 'Set a display name and an email address for this user. The email address will be used for logging into the application.',
    'users_details_desc_no_email' => 'Set a display name for this user so others can recognise them.',
    'users_role' => 'Používateľské roly',
    'users_role_desc' => 'Select which roles this user will be assigned to. If a user is assigned to multiple roles the permissions from those roles will stack and they will receive all abilities of the assigned roles.',
    'users_password' => 'User Password',
    'users_password_desc' => 'Set a password used to log-in to the application. This must be at least 6 characters long.',
    'users_send_invite_text' => 'You can choose to send this user an invitation email which allows them to set their own password otherwise you can set their password yourself.',
    'users_send_invite_option' => 'Send user invite email',
    'users_external_auth_id' => 'Externé autentifikačné ID',
    'users_external_auth_id_desc' => 'This is the ID used to match this user when communicating with your external authentication system.',
    'users_password_warning' => 'Pole nižšie vyplňte iba ak chcete zmeniť heslo:',
    'users_system_public' => 'Tento účet reprezentuje každého hosťovského používateľa, ktorý navštívi Vašu inštanciu. Nedá sa pomocou neho prihlásiť a je priradený automaticky.',
    'users_delete' => 'Zmazať používateľa',
    'users_delete_named' => 'Zmazať používateľa :userName',
    'users_delete_warning' => ' Toto úplne odstráni používateľa menom \':userName\' zo systému.',
    'users_delete_confirm' => 'Ste si istý, že chcete zmazať tohoto používateľa?',
    'users_delete_success' => 'Používateľ úspešne zmazaný',
    'users_edit' => 'Upraviť používateľa',
    'users_edit_profile' => 'Upraviť profil',
    'users_edit_success' => 'Používateľ úspešne upravený',
    'users_avatar' => 'Avatar používateľa',
    'users_avatar_desc' => 'Tento obrázok by mal byť štvorec s rozmerom približne 256px.',
    'users_preferred_language' => 'Preferovaný jazyk',
    'users_preferred_language_desc' => 'This option will change the language used for the user-interface of the application. This will not affect any user-created content.',
    'users_social_accounts' => 'Sociálne účty',
    'users_social_accounts_info' => 'Tu si môžete pripojiť iné účty pre rýchlejšie a jednoduchšie prihlásenie. Disconnecting an account here does not previously authorized access. Revoke access from your profile settings on the connected social account.',
    'users_social_connect' => 'Pripojiť účet',
    'users_social_disconnect' => 'Odpojiť účet',
    'users_social_connected' => ':socialAccount účet bol úspešne pripojený k Vášmu profilu.',
    'users_social_disconnected' => ':socialAccount účet bol úspešne odpojený od Vášho profilu.',
    'users_api_tokens' => 'API Tokens',
    'users_api_tokens_none' => 'No API tokens have been created for this user',
    'users_api_tokens_create' => 'Create Token',
    'users_api_tokens_expires' => 'Expires',
    'users_api_tokens_docs' => 'API Documentation',

    // API Tokens
    'user_api_token_create' => 'Create API Token',
    'user_api_token_name' => 'Name',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Expiry Date',
    'user_api_token_expiry_desc' => 'Set a date at which this token expires. After this date, requests made using this token will no longer work. Leaving this field blank will set an expiry 100 years into the future.',
    'user_api_token_create_secret_message' => 'Immediately after creating this token a "Token ID" & "Token Secret" will be generated and displayed. The secret will only be shown a single time so be sure to copy the value to somewhere safe and secure before proceeding.',
    'user_api_token_create_success' => 'API token successfully created',
    'user_api_token_update_success' => 'API token successfully updated',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'This is a non-editable system generated identifier for this token which will need to be provided in API requests.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Token created :timeAgo',
    'user_api_token_updated' => 'Token updated :timeAgo',
    'user_api_token_delete' => 'Delete Token',
    'user_api_token_delete_warning' => 'This will fully delete this API token with the name \':tokenName\' from the system.',
    'user_api_token_delete_confirm' => 'Are you sure you want to delete this API token?',
    'user_api_token_delete_success' => 'API token successfully deleted',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'he' => 'עברית',
        'hu' => 'Magyar',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ]
    //!////////////////////////////////
];
