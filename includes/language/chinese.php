<?php
//CHINESE
if (!isset($_SESSION['settings']['cpassman_url'])) {
	$TeamPass_url = '';
}else{
	$TeamPass_url = $_SESSION['settings']['cpassman_url'];
}


$txt['account_is_locked'] = "This is account is locked";
$txt['activity'] = "Activity";
$txt['add_button'] = "Add";
$txt['add_new_group'] = "Add a new folder";
$txt['add_role_tip'] = "Add a new role.";
$txt['admin'] = "Administration";
$txt['admin_action'] = "Please validate your action";
$txt['admin_actions_title'] = "Specific Actions";
$txt['admin_action_change_salt_key'] = "Change the main SALT Key";
$txt['admin_action_change_salt_key_tip'] = "Before changing the SALT key, please be sure to do a full backup of the database, and to put the tool in maintenance in order to avoid any users being logged.";
$txt['admin_action_check_pf'] = "Actualize Personal Folders for all users (creates them if not existing)";
$txt['admin_action_db_backup'] = "Create a backup of the database";
$txt['admin_action_db_backup_key_tip'] = "Please enter the encryption key. Save it somewhere, it will be asked when restoring. (leave empty to not encrypt)";
$txt['admin_action_db_backup_start_tip'] = "Start";
$txt['admin_action_db_backup_tip'] = "It is a good practice to create a backup that could be used to restore your database.";
$txt['admin_action_db_clean_items'] = "Remove orphan items from database";
$txt['admin_action_db_clean_items_result'] = "items have been deleted.";
$txt['admin_action_db_clean_items_tip'] = "This will only delete those items and associated logs that have not been deleted after the associated folder has been deleted. It is suggested to create a backup before.";
$txt['admin_action_db_optimize'] = "Optimize the database";
$txt['admin_action_db_restore'] = "Restore the database";
$txt['admin_action_db_restore_key'] = "Please enter the encryption key.";
$txt['admin_action_db_restore_tip'] = "It has to be done using an SQL backup file created by the backup functionality.";
$txt['admin_action_purge_old_files'] = "Purge old files";
$txt['admin_action_purge_old_files_result'] = "files have been deleted.";
$txt['admin_action_purge_old_files_tip'] = "This will delete all temporary files older than 7 days.";
$txt['admin_action_reload_cache_table'] = "Reload Cache table";
$txt['admin_action_reload_cache_table_tip'] = "This permits to reload the full content of table Cache. Can be usefull to be done sometimes.";
$txt['admin_backups'] = "Backups";
$txt['admin_emails'] = "Emails";
$txt['admin_emails_configuration'] = "Emails Configuration";
$txt['admin_emails_configuration_testing'] = "Configuration testing";
$txt['admin_email_auth'] = "SMTP server needs authentification";
$txt['admin_email_auth_pwd'] = "Authentification Password";
$txt['admin_email_auth_username'] = "Authentification Username";
$txt['admin_email_from'] = "Sender Email (from Email)";
$txt['admin_email_from_name'] = "Sender Name (from Name)";
$txt['admin_email_port'] = "Server Port";
$txt['admin_email_result_nok'] = "Email not sent ... check your configuration. See associated error: ";
$txt['admin_email_result_ok'] = "Email sent ... check your inbox.";
$txt['admin_email_send_backlog'] = "Send emails backlog (actually #nb_emails# emails)";
$txt['admin_email_send_backlog_tip'] = "This script permits to force the emails in the database to be sent.<br />This could take some time depending of the number of emails to send.";
$txt['admin_email_smtp_server'] = "SMTP server";
$txt['admin_email_test_body'] = "Hi,<br><br>Email sent successfully.<br><br>Cheers.";
$txt['admin_email_test_configuration'] = "Test the Email configuration";
$txt['admin_email_test_subject'] = "[TeamPass] Test email";
$txt['admin_error_no_complexity'] = "(<a href='index.php?page=manage_groups'>Define?</a>)";
$txt['admin_error_no_visibility'] = "No one can see this item. (<a href='index.php?page=manage_roles'>Customize roles</a>)";
$txt['admin_functions'] = "Roles management";
$txt['admin_groups'] = "Folders management";
$txt['admin_help'] = "Help";
$txt['admin_info'] = "Some information concerning the tool";
$txt['admin_info_loading'] = "Loading data ... please wait";
$txt['admin_ldap_configuration'] = "LDAP配置";
$txt['admin_ldap_menu'] = "LDAP选项";
$txt['admin_main'] = "Information";
$txt['admin_misc_cpassman_dir'] = "Full path to TeamPass";
$txt['admin_misc_cpassman_url'] = "Full URL to TeamPass";
$txt['admin_misc_custom_login_text'] = "Custom Login text";
$txt['admin_misc_custom_logo'] = "Full url to Custom Login Logo";
$txt['admin_misc_favicon'] = "Full URL to favicon file";
$txt['admin_misc_title'] = "Customize";
$txt['admin_new1'] = "<i><u>14FEB2012:</i></u><br>Administrator profile is no more allowed to see items. This profile is now only an Administrative account.<br />See <a href='http://www.teampass.net/how-to-handle-changes-on-administrator-profile' target='_blank'>TeamPass.net page</a> concerning the way to handle this change.";
$txt['admin_one_shot_backup'] = "One shot backup and restore";
$txt['admin_path_to_files_folder'] = "Path to Files folder";
$txt['admin_path_to_files_folder_tip'] = "<span style='font-size:11px;max-width:300px;'>Files folder is used to store all generated files by TeamPass and also some uploaded files.<br />IMPORTANT: for security reason, this folder should not be in the WWW folder of your website. It should be set in a protected area with a specific redirection rule in your Server configuration.<br />IMPORTANT 2:It could be good to set a CRON task in order to clean up periodically this folder.</span>";
$txt['admin_path_to_upload_folder'] = "Path to Upload folder";
$txt['admin_path_to_upload_folder_tip'] = "<span style='font-size:11px;max-width:300px;'>Upload folder is used to store all uploaded files associated to Items.<br />IMPORTANT: for security reason, this folder should not be in the WWW folder of your website. It should be set in a protected area with a specific redirection rule in your Server configuration.<br />IMPORTANT 2:This folder should never be clean up! Those files are associated to the Items.</span>";
$txt['admin_pwd_maximum_length'] = "Maximum length for passwords";
$txt['admin_pwd_maximum_length_tip'] = "The default value for passwords length is set to 40. It is important to know that setting a high value length will have impact on performances. Indeed more long is this value, more time the server needs to encrypt and decrypt, and to display passwords.";
$txt['admin_script_backups'] = "Settings for Backups script";
$txt['admin_script_backups_tip'] = "For more security, it is recommended to parameter a scheduled backup of the database.<br />Use your server to schedule a daily cron task by calling the file 'script.backup.php' in 'backups' folder.<br />You first need to set the 2 first paramteres and SAVE them.";
$txt['admin_script_backup_decrypt'] = "Name of the file you want to decrypt";
$txt['admin_script_backup_decrypt_tip'] = "In order to decrypt a backup file, just indicate the name of the backup file (no extension and no path).<br />The file will be decrypted in the same folder as the backup files are.";
$txt['admin_script_backup_encryption'] = "Encryption key (optional)";
$txt['admin_script_backup_encryption_tip'] = "If set, this key will be used to encrypted your file";
$txt['admin_script_backup_filename'] = "Backup file name";
$txt['admin_script_backup_filename_tip'] = "File name you want for your backups file";
$txt['admin_script_backup_path'] = "Path where backups have to be stored";
$txt['admin_script_backup_path_tip'] = "In what folder the backup files have to be stored";
$txt['admin_settings'] = "Settings";
$txt['admin_settings_title'] = "TeamPass Settings";
$txt['admin_setting_activate_expiration'] = "Enable passwords expiration";
$txt['admin_setting_activate_expiration_tip'] = "When enabled, items expired will not be displayed to users.";
$txt['admin_setting_enable_delete_after_consultation'] = "Item consulted can be automatically deleted";
$txt['admin_setting_enable_delete_after_consultation_tip'] = "<span style='font-size:11px;max-width:300px;'>When enabled, the Item creator can decide that Item will be automatically deleted after being seen X times.</span>";
$txt['admin_url_to_files_folder'] = "URL to Files folder";
$txt['admin_url_to_upload_folder'] = "URL to Upload folder";
$txt['admin_users'] = "Users management";
$txt['admin_views'] = "Views";
$txt['alert_message_done'] = "完成！";
$txt['alert_message_personal_sk_missing'] = "你必须输入你的个人SALTKey";
$txt['all'] = "all";
$txt['anyone_can_modify'] = "允许项目被可访问的人修改";
$txt['associated_role'] = "该文件夹归属的角色为";
$txt['associate_kb_to_items'] = "Select the items to associate to this KB";
$txt['assoc_authorized_groups'] = "Allowed Associated Folders";
$txt['assoc_forbidden_groups'] = "Forbidden Associated Folders";
$txt['at'] = "at";
$txt['at_add_file'] = "File added";
$txt['at_automatically_deleted'] = "Automatically deleted";
$txt['at_automatic_del'] = "automatic deletion";
$txt['at_category'] = "Folder";
$txt['at_copy'] = "Copy created";
$txt['at_copy'] = "Copy done";
$txt['at_creation'] = "Creation";
$txt['at_delete'] = "Deletion";
$txt['at_del_file'] = "File deleted";
$txt['at_description'] = "Description.";
$txt['at_email'] = "email";
$txt['at_file'] = "File";
$txt['at_import'] = "Importation";
$txt['at_label'] = "Label";
$txt['at_login'] = "Login";
$txt['at_modification'] = "Modification";
$txt['at_moved'] = "Moved";
$txt['at_personnel'] = "Personal";
$txt['at_pw'] = "Password changed.";
$txt['at_restored'] = "Restored";
$txt['at_restriction'] = "Restriction";
$txt['at_shown'] = "Accessed";
$txt['at_url'] = "URL";
$txt['at_user_added'] = "User #user_login# added";
$txt['at_user_deleted'] = "User #user_login# deleted";
$txt['at_user_email_changed'] = "User #user_login# email changed";
$txt['at_user_initial_pwd_changed'] = "User #user_login# initial password change";
$txt['at_user_locked'] = "User #user_login# locked";
$txt['at_user_pwd_changed'] = "User #user_login# password changed";
$txt['at_user_unlocked'] = "User #user_login# unlocked";
$txt['auteur'] = "Author";
$txt['author'] = "Author";
$txt['authorized_groups'] = "Allowed Folders";
$txt['auth_creation_without_complexity'] = "Allow creating an item without respecting the required password complexity";
$txt['auth_modification_without_complexity'] = "Allow modifying an item without respecting the required password complexity";
$txt['automatic_deletion_activated'] = "Automatic deletion engaged";
$txt['automatic_del_after_date_text'] = "or after date";
$txt['auto_create_folder_role'] = "Create folder and role for ";
$txt['bad_email_format'] = "Email address has not the expected format!";
$txt['block_admin_info'] = "Administrators Info";
$txt['block_last_created'] = "Last created";
$txt['bugs_page'] = "If you discover a bug, you can directly post it in <a href='https://github.com/nilsteampassnet/TeamPass/issues' target='_blank'><u>Bugs Forum</u></a>.";
$txt['by'] = "by";
$txt['cancel'] = "Cancel";
$txt['cancel_button'] = "Cancel";
$txt['can_create_root_folder'] = "Can create a folder at root level";
$txt['changelog'] = "Latest news";
$txt['change_authorized_groups'] = "Change authorized folders";
$txt['change_forbidden_groups'] = "Change forbidden folders";
$txt['change_function'] = "Change roles";
$txt['change_group_autgroups_info'] = "Select the authorized folders this Role can see and use";
$txt['change_group_autgroups_title'] = "Customize the authorized folders";
$txt['change_group_forgroups_info'] = "Select the forbidden folders this Role can't see and use";
$txt['change_group_forgroups_title'] = "Customize the forbidden folders";
$txt['change_user_autgroups_info'] = "Select the authorized folders this account can see and use";
$txt['change_user_autgroups_title'] = "Customize the authorized folders";
$txt['change_user_forgroups_info'] = "Select the forbidden folders this account can't see nor use";
$txt['change_user_forgroups_title'] = "Customize the forbidden folders";
$txt['change_user_functions_info'] = "Select the functions associated to this account";
$txt['change_user_functions_title'] = "Customize associated functions";
$txt['check_all_text'] = "Check all";
$txt['close'] = "Close";
$txt['complexity'] = "Complexity";
$txt['complex_asked'] = "Required complexity";
$txt['complex_asked'] = "Required complexity";
$txt['complex_level0'] = "Very weak";
$txt['complex_level1'] = "Weak";
$txt['complex_level2'] = "Medium";
$txt['complex_level3'] = "Strong";
$txt['complex_level4'] = "Very strong";
$txt['complex_level5'] = "Heavy";
$txt['complex_level6'] = "Very heavy";
$txt['confirm'] = "Confirm";
$txt['confirm_delete_group'] = "You have decided to delete this Folder and all included Items ... are you sure?";
$txt['confirm_deletion'] = "You are going to delete... are you sure?";
$txt['confirm_del_account'] = "You have decided to delete this Account. Are you sure?";
$txt['confirm_del_from_fav'] = "Please confirm deletion from Favourites";
$txt['confirm_del_role'] = "Please confirm the deletion of the next role:";
$txt['confirm_edit_role'] = "Please enter the name of the next role:";
$txt['confirm_lock_account'] = "You have decided to LOCK this Account. Are you sure?";
$txt['connection'] = "Connection";
$txt['connections'] = "connections";
$txt['copy'] = "Copy";
$txt['copy_to_clipboard_small_icons'] = "Enable copy to clipboard small icons in items page";
$txt['copy_to_clipboard_small_icons_tip'] = "<span style='font-size:11px;max-width:300px;'>This could help preventing memory usage if users have no recent computer.<br /> Indeed, the clipboard is not loaded with items informations. But no quick copy of password and login is possible.</span>
";
$txt['creation_date'] = "Creation date";
$txt['csv'] = "CSV";
$txt['csv_import_button_text'] = "Browse CSV file";
$txt['date'] = "Date";
$txt['date'] = "Date";
$txt['date_format'] = "Date format";
$txt['days'] = "days";
$txt['definition'] = "Definition";
$txt['delete'] = "Delete";
$txt['deletion'] = "Deletions";
$txt['deletion_title'] = "List of Items deleted";
$txt['del_button'] = "Delete";
$txt['del_function'] = "Delete Roles";
$txt['del_group'] = "Delete Folder";
$txt['description'] = "Description";
$txt['description'] = "Description";
$txt['disable_notify'] = "Disable notify";
$txt['disconnect'] = "Disconnection";
$txt['disconnection'] = "Disconnection";
$txt['div_dialog_message_title'] = "信息";
$txt['done'] = "Done";
$txt['drag_drop_helper'] = "Drag and drop item";
$txt['duplicate_folder'] = "Authorize to have several folders with the same name.";
$txt['duplicate_item'] = "Authorize to have several items with the same name.";
$txt['email'] = "Email";
$txt['email_altbody_1'] = "Item";
$txt['email_altbody_2'] = "has been created.";
$txt['email_announce'] = "Announce this Item by email";
$txt['email_body1'] = "Hi,<br><br>Item '";
$txt['email_body2'] = "has been created.<br /><br />You may view it by clicking <a href='";
$txt['email_body3'] = "'>HERE</a><br /><br />Regards.";
$txt['email_bodyalt_item_updated'] = "Password for #item_label# has been updated.";
$txt['email_body_item_updated'] = "Hello,<br><br>Password for '#item_label#' has been updated.<br /><br />You can check it <a href=\"".@$_SESSION['settings']['cpassman_url']."/index.php?page=items&group=#item_category#&id=#item_id#\">HERE</a><br /><br />Cheers";
$txt['email_body_on_user_login'] = "Hello,<br><br>User #tp_user# has get connected to TeamPass the #tp_date# at #tp_time#.<br><br>Regards.";
$txt['email_change'] = "Change the account's email";
$txt['email_changed'] = "Email changed!";
$txt['email_new_user_mail'] = "Hello,<br><br>An administrator has created your account for TeampPass.<br>You can use the next credentials for being logged:<br>- Login: #tp_login#<br>- Password: #tp_pw#<br><br>Click the <a href='#tp_link#'>LINK</a> to access.<br><br>Best regards.";
$txt['email_on_open_notification_mail'] = "Hello,<br><br>#tp_user# has opened and watched the Item '#tp_item#'.<br>Click the <a href='#tp_link#'>LINK</a> to access.<br><br>Best regards.";
$txt['email_on_open_notification_subject'] = "[TeamPass] Notification on Item open";
$txt['email_request_access_mail'] = "Hello #tp_item_author#,<br><br>User #tp_user# has required an access to '#tp_item#'.<br><br>Be sure of the rights of this user before changing the restriction to the Item.<br><br>Regards.";
$txt['email_request_access_subject'] = "[TeamPass] Request an access to item";
$txt['email_select'] = "Select persons to inform";
$txt['email_share_item_mail'] = "Hello,<br><br><u>#tp_user#</u> has shared with you the item <b>#tp_item#</b><br>Click the <a href='#tp_link#'>LINK</a> to access.<br><br>Best regards.";
$txt['email_share_item_subject'] = "[TeamPass] An Item was share with you";
$txt['email_subject'] = "Creating a new Item in Passwords Manager";
$txt['email_subject_item_updated'] = "Password has been updated";
$txt['email_subject_new_user'] = "[TeamPass] Your account creation";
$txt['email_subject_new_user'] = "[TeamPass] Your new account";
$txt['email_subject_on_user_login'] = "[TeamPass] A user has get connected";
$txt['email_text_new_user'] = "Hi,<br /><br />Your account has been created in TeamPass.<br />You can now access $TeamPass_url using the next credentials:<br />";
$txt['enable_delete_after_consultation'] = "Item will be automatically deleted after being seen";
$txt['enable_email_notification_on_item_shown'] = "Send notification by email when Item is shown";
$txt['enable_favourites'] = "Enable the Users to store Favourites";
$txt['enable_notify'] = "Enable notify";
$txt['enable_personal_folder'] = "Enable Personal folder";
$txt['enable_personal_folder_feature'] = "Enable Personal folder feature";
$txt['enable_personal_saltkey_cookie'] = "Enable personal SALTKey to be stored in a cookie";
$txt['enable_send_email_on_user_login'] = "Send an email to Admins on User log in";
$txt['enable_user_can_create_folders'] = "Users are allowed to manage folders in allowed parent folders";
$txt['encrypt_key'] = "Encryption key";
$txt['errors'] = "errors";
$txt['error_complex_not_enought'] = "Password complexity is not fulfilled!";
$txt['error_confirm'] = "Password confirmation is not correct!";
$txt['error_cpassman_dir'] = "No path for TeamPass is set. Please select 'TeamPass settings' tab in Admin Settings page.";
$txt['error_cpassman_url'] = "No URL for TeamPass is set. Please select 'TeamPass settings' tab in Admin Settings page.";
$txt['error_empty_data'] = "No data to proceed!";
$txt['error_fields_2'] = "The 2 fields are mandatory!";
$txt['error_group'] = "A folder is mandatory!";
$txt['error_group_complex'] = "The Folder must have a minimum required passwords complexity level!";
$txt['error_group_exist'] = "This folder already exists!";
$txt['error_group_label'] = "The Folder must be named!";
$txt['error_html_codes'] = "Some text contains HTML codes! This is not allowed.";
$txt['error_item_exists'] = "This Item already exists!";
$txt['error_label'] = "A label is mandatory!";
$txt['error_must_enter_all_fields'] = "You must fill in each fields!";
$txt['error_mysql'] = "MySQL Error!";
$txt['error_not_allowed_to'] = "You are not allowed to do that!";
$txt['error_not_authorized'] = "You are not allowed to see this page.";
$txt['error_not_exists'] = "This page doesn't exist.";
$txt['error_no_folders'] = "You should start by creating some folders.";
$txt['error_no_password'] = "You need to enter your password!";
$txt['error_no_roles'] = "You should also create some roles and associate them to folders.";
$txt['error_no_selected_folder'] = "You need to select a Folder";
$txt['error_password_confirmation'] = "Passwords should be the same";
$txt['error_pw'] = "A password is mandatory!";
$txt['error_pw_too_long'] = "Password is too long! maximum characters is 40.";
$txt['error_renawal_period_not_integer'] = "Renewal period should be expressed in months!";
$txt['error_salt'] = "<b>The SALT KEY is too long! Please don't use the tool until an Admin has modified the salt key.</b> In settings.php file, SALT should not be longer than 32 characters.";
$txt['error_tags'] = "No punctuation characters allowed in TAGS! Only space.";
$txt['error_times_before_deletion'] = "Number of consultation before deletion needs to be more than 0!";
$txt['error_user_exists'] = "用户已存在";
$txt['expiration_date'] = "Expiration date";
$txt['expir_one_month'] = "1 month";
$txt['expir_one_year'] = "1 year";
$txt['expir_six_months'] = "6 months";
$txt['expir_today'] = "today";
$txt['files_&_images'] = "Files &amp; Images";
$txt['find'] = "Find";
$txt['find_text'] = "Your search";
$txt['folders'] = "Folders";
$txt['forbidden_groups'] = "Forbidden Folders";
$txt['forgot_my_pw'] = "Forgot your password?";
$txt['forgot_my_pw_email_sent'] = "Email has been sent";
$txt['forgot_my_pw_error_email_not_exist'] = "This email doesn't exist!";
$txt['forgot_my_pw_text'] = "Your password will be sent to the email associated to your account.";
$txt['forgot_pw_email_altbody_1'] = "Hi, Your identification credentials for TeamPass are:";
$txt['forgot_pw_email_body'] = "Hi,<br /><br />Your new password for TeamPass is :";
$txt['forgot_pw_email_body'] = "Hi,<br /><br />Your new password for TeamPass is :";
$txt['forgot_pw_email_body_1'] = "Hi, <br /><br />Your identification credentials for TeamPass are:<br /><br />";
$txt['forgot_pw_email_subject'] = "TeamPass - Your password";
$txt['forgot_pw_email_subject_confirm'] = "[TeamPass] Your password step 2";
$txt['functions'] = "Roles";
$txt['function_alarm_no_group'] = "This role is not associated to any Folder!";
$txt['generate_pdf'] = "Generate a PDF file";
$txt['generation_options'] = "Generation options";
$txt['gestionnaire'] = "Manager";
$txt['give_function_tip'] = "Add a new role";
$txt['give_function_title'] = "Add a new Role";
$txt['give_new_email'] = "Please enter new email for";
$txt['give_new_login'] = "Please select the account";
$txt['give_new_pw'] = "Please indicate the new password for";
$txt['god'] = "GOD";
$txt['group'] = "Folder";
$txt['group_parent'] = "Parent Folder";
$txt['group_pw_duration'] = "Renewal period";
$txt['group_pw_duration_tip'] = "In months. Use 0 to disable.";
$txt['group_select'] = "Select folder";
$txt['group_title'] = "Folder label";
$txt['history'] = "History";
$txt['home'] = "Home";
$txt['home_personal_menu'] = "Personal Actions";
$txt['home_personal_saltkey'] = "你的个人SALTKey";
$txt['home_personal_saltkey_button'] = "保存！";
$txt['home_personal_saltkey_info'] = "如果你想要使用个人项目，必须输入个人SALTKey";
$txt['home_personal_saltkey_label'] = "输入你的个人SALTKey";
$txt['importing_details'] = "List of details";
$txt['importing_folders'] = "Importing folders";
$txt['importing_items'] = "Importing items";
$txt['import_button'] = "Import";
$txt['import_csv_anyone_can_modify_in_role_txt'] = "Set \"anyone in the same role can modify\" right on all imported items.";
$txt['import_csv_anyone_can_modify_txt'] = "Set \"anyone can modify\" right on all imported items.";
$txt['import_csv_dialog_info'] = "Information: import must be done using a CSV file. Typically a file exported from KeePass has the expected structure.<br />If you use a file generated by another tool, please check that CSV structure is as follows: `Account`,`Login Name`,`Password`,`Web Site`,`Comments`.";
$txt['import_csv_menu_title'] = "Import Items from file (CSV/KeePass XML)";
$txt['import_error_no_file'] = "You must select a file!";
$txt['import_error_no_read_possible'] = "Can't read the file!";
$txt['import_error_no_read_possible_kp'] = "Can't read the file! It must be a KeePass file.";
$txt['import_keepass_dialog_info'] = "Please use this to select an XML file generated by KeePass export functionality. Will only work with KeePass file! Notice that the import script will not import folders or elements that already exist at the same level of the tree structure.";
$txt['import_keepass_to_folder'] = "Select the destination folder";
$txt['import_kp_finished'] = "Import from KeePass is now finished !<br />By default, the complexity level for new folders have been set to `Medium`. Perhaps will you need to change it.";
$txt['import_to_folder'] = "Tick the items you want to import to folder:";
$txt['index_add_one_hour'] = "Extend session by 1 hour";
$txt['index_alarm'] = "ALARM!!!";
$txt['index_bas_pw'] = "Bad password for this account!";
$txt['index_change_pw'] = "Your password must be changed!";
$txt['index_change_pw'] = "Change your password";
$txt['index_change_pw_button'] = "Change";
$txt['index_change_pw_confirmation'] = "Confirm";
$txt['index_expiration_in'] = "session expiration in";
$txt['index_get_identified'] = "Please identify yourself";
$txt['index_identify_button'] = "Enter";
$txt['index_identify_you'] = "Please identify yourself";
$txt['index_last_pw_change'] = "Password changed the";
$txt['index_last_seen'] = "Last connection, the";
$txt['index_login'] = "Account";
$txt['index_maintenance_mode'] = "Maintenance mode has been activated. Only Administrators can log in.";
$txt['index_maintenance_mode_admin'] = "Maintenance mode is activated. Users currently can not access TeamPass.";
$txt['index_new_pw'] = "New password";
$txt['index_password'] = "Password";
$txt['index_pw_error_identical'] = "The passwords have to be identical!";
$txt['index_pw_expiration'] = "Actual password expiration in";
$txt['index_pw_level_txt'] = "Complexity";
$txt['index_refresh_page'] = "Refresh page";
$txt['index_session_duration'] = "Session duration";
$txt['index_session_ending'] = "Your session will end in less than 1 minute.";
$txt['index_session_expired'] = "Your session has expired or you are not correctly identified!";
$txt['index_welcome'] = "Welcome";
$txt['info'] = "Information";
$txt['info_click_to_edit'] = "Click on a cell to edit its value";
$txt['is_admin'] = "Is Admin";
$txt['is_manager'] = "Is Manager";
$txt['is_read_only'] = "Is Read Only";
$txt['items'] = "Items";
$txt['items_browser_title'] = "Folders";
$txt['item_copy_to_folder'] = "Please select a folder in which the item has to be copied.";
$txt['item_menu_add_elem'] = "Add item";
$txt['item_menu_add_rep'] = "Add a Folder";
$txt['item_menu_add_to_fav'] = "Add to Favourites";
$txt['item_menu_collab_disable'] = "禁止编辑";
$txt['item_menu_collab_enable'] = "允许编辑";
$txt['item_menu_copy_elem'] = "Copy item";
$txt['item_menu_copy_login'] = "Copy login";
$txt['item_menu_copy_pw'] = "Copy password";
$txt['item_menu_del_elem'] = "Delete item";
$txt['item_menu_del_from_fav'] = "Delete from Favourites";
$txt['item_menu_del_rep'] = "Delete a Folder";
$txt['item_menu_edi_elem'] = "Edit item";
$txt['item_menu_edi_rep'] = "Edit a Folder";
$txt['item_menu_find'] = "Search";
$txt['item_menu_mask_pw'] = "Mask password";
$txt['item_menu_refresh'] = "Refresh page";
$txt['item_share_text'] = "In order to share by mail this Item, enter the email address and press SEND button.";
$txt['kbs'] = "KBs";
$txt['kb_menu'] = "知识库";
$txt['keepass_import_button_text'] = "Browse XML file";
$txt['label'] = "Label";
$txt['last_items_icon_title'] = "Show/Hide Last items seen";
$txt['last_items_title'] = "Last items seen";
$txt['ldap_extension_not_loaded'] = "The LDAP extension is not activated on the server.";
$txt['level'] = "Level";
$txt['link_copy'] = "Get a link to this item";
$txt['link_is_copied'] = "The link to this Item has been copied to clipboard.";
$txt['login'] = "Login (if needed)";
$txt['login_attempts_on'] = " login attempts on ";
$txt['login_copied_clipboard'] = "Login copied in clipboard";
$txt['login_copy'] = "Copy account to clipboard";
$txt['logs'] = "Logs";
$txt['logs_1'] = "Generate the log file for the passwords renewal done the";
$txt['logs_passwords'] = "Generate Passwords Log";
$txt['maj'] = "Uppercase letters";
$txt['mask_pw'] = "Mask/Display the password";
$txt['max_last_items'] = "Maximum number of last items seen by user (default is 10)";
$txt['menu_title_new_personal_saltkey'] = "Changing your Personal Saltkey";
$txt['minutes'] = "minutes";
$txt['modify_button'] = "Modify";
$txt['my_favourites'] = "My favourites";
$txt['name'] = "Name";
$txt['nb_false_login_attempts'] = "Number of false login attempts before account is disabled (0 to disable)";
$txt['nb_folders'] = "Number of Folders";
$txt['nb_items'] = "Number of Items";
$txt['nb_items_by_page'] = "Number of items by page";
$txt['nb_items_by_query'] = "Number of items to get at each query iterration";
$txt['nb_items_by_query_tip'] = "<span style='font-size:11px;max-width:300px;'>More items means more time to display the list.<br />Set to 'auto' to let the tool to adapt this number depending on the size screen of the user.<br />Set to 'max' to force to display the complet list in one time.<br />Set a number corresding to the number of items to get at each query iterration.</span>";
$txt['new_label'] = "New label";
$txt['new_role_title'] = "New role title";
$txt['new_saltkey'] = "New Saltkey";
$txt['new_saltkey_warning'] = "Please be sure to use the original SaltKey, otherwize the new encryption will be corrupted. Before doing any change, please test your actual SaltKey!";
$txt['new_saltkey_warning_lost'] = "You have lost your saltkey? What a pitty, this one can't be recovered, so please be sure before continuing.<br>By reseting your saltkey, all your previous personal items will be deleted!";
$txt['new_user_title'] = "Add a new user";
$txt['no'] = "No";
$txt['nom'] = "Name";
$txt['none'] = "None";
$txt['none_selected_text'] = "None selected";
$txt['notify_activated'] = "Notification enabled";
$txt['not_allowed_to_see_pw'] = "You are not allowed to see that Item!";
$txt['not_allowed_to_see_pw_is_expired'] = "This item has expired!";
$txt['not_defined'] = "Not defined";
$txt['no_last_items'] = "No items seen";
$txt['no_previous_pw'] = "No previous password";
$txt['no_restriction'] = "没有限制";
$txt['numbers'] = "Numbers";
$txt['number_of_used_pw'] = "Number of new passwords a user has to enter before reusing an old one.";
$txt['ok'] = "OK";
$txt['open_url_link'] = "Open in new page";
$txt['pages'] = "Pages";
$txt['pdf'] = "PDF";
$txt['pdf_del_date'] = "PDF generated the";
$txt['pdf_del_title'] = "Passwords renewal follow-up";
$txt['pdf_download'] = "Download file";
$txt['pdf_export'] = "PDF exports";
$txt['pdf_password'] = "PDF encryption key";
$txt['pdf_password_warning'] = "You must provide an encryption key!";
$txt['personal_folder'] = "Personal folder";
$txt['personal_saltkey_change_button'] = "Change it!";
$txt['personal_saltkey_cookie_duration'] = "Personal SALTKey cookie DAYS life time before expiration";
$txt['personal_saltkey_lost'] = "I've lost it";
$txt['personal_salt_key'] = "Your personal salt key";
$txt['personal_salt_key_empty'] = "Personal salt key has not been entered!";
$txt['personal_salt_key_info'] = "This salt key will be used to encrypt and decrypt your passwords.<br />It is not stored in database, you are the only person who knows it.<br />So don't loose it!";
$txt['please_update'] = "Please update the tool!";
$txt['please_wait'] = "Please wait!";
$txt['previous_pw'] = "Previous passwords used:";
$txt['print'] = "Print";
$txt['print_out_menu_title'] = "Print out a listing of your items";
$txt['print_out_pdf_title'] = "TeamPass - List of exported Items";
$txt['print_out_warning'] = "All passwords and all confidential data will be written in this file without any encryption! By writing the file containing unencrypted items/passwords, you are accepting the full responsibility for further protection of this list!";
$txt['pw'] = "Password";
$txt['pw_change'] = "Change the account's password";
$txt['pw_changed'] = "Password changed!";
$txt['pw_copied_clipboard'] = "Password copied to clipboard";
$txt['pw_copy_clipboard'] = "Copy password to clipboard";
$txt['pw_encryption_error'] = "Error encryption of the password!";
$txt['pw_generate'] = "Generate";
$txt['pw_is_expired_-_update_it'] = "This item has expired! You need to change its password.";
$txt['pw_life_duration'] = "Users' password life duration before expiration (in days, 0 to disable)";
$txt['pw_recovery_asked'] = "You have asked for a password recovery";
$txt['pw_recovery_button'] = "Send me my new password";
$txt['pw_recovery_info'] = "By clicking on the next button, you will receive an email that contains the new password for your account.";
$txt['pw_used'] = "This password has already been used!";
$txt['readme_open'] = "Open full readme file";
$txt['read_only_account'] = "Read Only";
$txt['refresh_matrix'] = "Refresh Matrix";
$txt['renewal_menu'] = "Renewal follow-up";
$txt['renewal_needed_pdf_title'] = "List of Items that need to be renewed";
$txt['renewal_selection_text'] = "List all items that will expire:";
$txt['request_access_ot_item'] = "Request an access to author";
$txt['restore'] = "Restore";
$txt['restore'] = "Restore";
$txt['restricted_to'] = "Restricted to";
$txt['restricted_to_roles'] = "Allow to restrict items to Users and Roles";
$txt['rights_matrix'] = "Users rights matrix";
$txt['roles'] = "Roles";
$txt['role_cannot_modify_all_seen_items'] = "Set this role not allowed to modify all accessible items (normal setting)";
$txt['role_can_modify_all_seen_items'] = "Set this role allowed to modify all accessible items (not secure setting)";
$txt['root'] = "Root";
$txt['save_button'] = "Save";
$txt['secure'] = "Secure";
$txt['see_item_title'] = "Item Details";
$txt['see_logs'] = "See Logs";
$txt['select'] = "select";
$txt['select'] = "Select";
$txt['select_folders'] = "Select folders";
$txt['select_language'] = "Select your language";
$txt['send'] = "Send";
$txt['settings_anyone_can_modify'] = "为每个人都可以修改项目启用一个选项";
$txt['settings_anyone_can_modify_tip'] = "<span style='font-size:11px;max-width:300px;'>启用后，项目表单将添加一个复选框，使建立者可以允许任何人修改这个项目</span>";
$txt['settings_default_language'] = "Define the Default Language";
$txt['settings_kb'] = "启用知识库(beta)";
$txt['settings_kb_tip'] = "<span style='font-size:11px;max-width:300px;'>启用后，将会添加一个可以用于建立知识库的页面</span>";
$txt['settings_ldap_domain'] = "域名的LDAP账户前缀";
$txt['settings_ldap_domain_controler'] = "LDAP array of domain controllers";
$txt['settings_ldap_domain_controler_tip'] = "<span style='font-size:11px;max-width:300px;'>Specifiy multiple controllers if you would like the class to balance the LDAP queries amongst multiple servers.<br />You must delimit the domains by a comma ( , )!<br />By example: domain_1,domain_2,domain_3</span>";
$txt['settings_ldap_domain_dn'] = "LDAP base dn for your domain";
$txt['settings_ldap_mode'] = "Enable users authentification through LDAP server";
$txt['settings_ldap_mode_tip'] = "Enable only if you have an LDAP server and if you want to use it to authentify TeamPass users through it.";
$txt['settings_ldap_ssl'] = "Use LDAP through SSL (LDAPS)";
$txt['settings_ldap_tls'] = "Use LDAP through TLS";
$txt['settings_log_accessed'] = "Enable loggin who accessed the items";
$txt['settings_log_connections'] = "Enable logging all users connections into database.";
$txt['settings_maintenance_mode'] = "Set TeamPass in Maintenance mode";
$txt['settings_maintenance_mode_tip'] = "This mode will refuse any user connection except for Administrators.";
$txt['settings_manager_edit'] = "Managers can edit and delete Items they are allowed to see";
$txt['settings_printing'] = "Enable printing items to PDF file";
$txt['settings_printing_tip'] = "When enabled, a button will be added to user's home page that will permit him/her to write a listing of items to a PDF file he/she can view. Notice that the listed passwords will be uncrypted.";
$txt['settings_restricted_to'] = "Enable Restricted To functionality on Items";
$txt['settings_richtext'] = "Enable richtext for item description";
$txt['settings_richtext_tip'] = "<span style='font-size:11px;max-width:300px;'>This will activate a richtext with BBCodes in description field.</span>";
$txt['settings_send_stats'] = "Send monthly statistics to author for better understand your usage of TeamPass";
$txt['settings_send_stats_tip'] = "These statistics are entirely anonymous!<br /><span style='font-size:10px;max-width:300px;'>Your IP is not sent, just the following data are transmitted: amount of Items, Folders, Users, TeamPass version, personal folders enabled, ldap enabled.<br />Many thanks if you enable those statistics. By this you help me further develop TeamPass.</span>";
$txt['settings_show_description'] = "Show Description in list of Items";
$txt['share'] = "Share this Item";
$txt['share_sent_ok'] = "Email has been sent";
$txt['show'] = "Show";
$txt['show_help'] = "Show Help";
$txt['show_last_items'] = "Show last items block on main page";
$txt['size'] = "Size";
$txt['start_upload'] = "Start uploading files";
$txt['sub_group_of'] = "Dependent on";
$txt['support_page'] = "For any support, please use the <a href='https://github.com/nilsteampassnet/TeamPass/issues' target='_blank'><u>Forum</u></a>.";
$txt['symbols'] = "Symbols";
$txt['tags'] = "Tags";
$txt['Test the Email configuration'] = "This test should send an email to the address indicated. If you don't receive it, please check your credentials.";
$txt['thku'] = "Thank you for using TeamPass!";
$txt['times'] = "times";
$txt['timezone_selection'] = "Timezone selection";
$txt['time_format'] = "Time format";
$txt['uncheck_all_text'] = "Uncheck all";
$txt['unlock_user'] = "User is locked. Do you want to unlock this account?";
$txt['update_needed_mode_admin'] = "It is recommended to update your TeamPass installation. Click <a href='install/upgrade.php'>HERE</a>";
$txt['uploaded_files'] = "Existing Files";
$txt['upload_button_text'] = "Browse";
$txt['upload_files'] = "Upload New Files";
$txt['url'] = "URL";
$txt['url_copied'] = "URL has been copied!";
$txt['used_pw'] = "Used password";
$txt['user'] = "User";
$txt['users'] = "Users";
$txt['users_online'] = "users online";
$txt['user_action'] = "Action on a user";
$txt['user_activity'] = "User Activity";
$txt['user_alarm_no_function'] = "This user has no Roles!";
$txt['user_del'] = "Delete account";
$txt['user_lock'] = "Lock user";
$txt['user_mngt'] = "User Management";
$txt['version'] = "Current version";
$txt['views_confirm_items_deletion'] = "Do you really want to delete the selected items from database?";
$txt['views_confirm_restoration'] = "Please confirm the restoration of this Item";
$txt['visibility'] = "Visibility";
$txt['warning_screen_height'] = "WARNING: screen height is not enough for displaying items list!";
$txt['yes'] = "Yes";
$txt['your_version'] = "Your version";
?>
