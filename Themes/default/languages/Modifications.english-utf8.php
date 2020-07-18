// Post History Start
$txt['core_settings_item_posthistory'] = 'Post History';
$txt['core_settings_item_posthistory_desc'] = 'Store history of edits of message content into database.';

$txt['view_post_history'] = 'View Edits of Post';
$txt['title_view_post_history'] = 'Viewing Post History for - %1$s';

$txt['ph_last_edit'] = 'Latest Edit By';
$txt['ph_last_time'] = 'Edit Time';
$txt['ph_view_edit'] = 'View Post';

$txt['ph_original_edit'] = 'original';
$txt['ph_current_edit'] = 'current';
$txt['ph_current_original_edit'] = 'current, original';

$txt['ph_no_edits'] = 'No one has edited this post yet';

$txt['compare_selected'] = 'Compare Selected';
$txt['restore'] = 'Restore';

$txt['permissionname_posthistory_view'] = 'View Edit History of Post';
$txt['permissionhelp_posthistory_view'] = 'Allows user to view past versions of post.';
$txt['permissionname_posthistory_view_own'] = 'Own post';
$txt['permissionname_posthistory_view_any'] = 'Any post';
$txt['permissionname_posthistory_restore'] = 'Restore older version';
$txt['permissionhelp_posthistory_restore'] = 'Allows user to start editing from older version of post.';
$txt['permissionname_posthistory_restore_own'] = 'Own post';
$txt['permissionname_posthistory_restore_any'] = 'Any post';
$txt['permissionname_simple_posthistory_view_own'] = 'View edit history of their own post';
$txt['permissionname_simple_posthistory_view_any'] = 'View edit history of someone else\'s post';
$txt['permissionname_simple_posthistory_restore_own'] = 'Restore older version of own post';
$txt['permissionname_simple_posthistory_restore_any'] = 'Restore older versions of someone else\'s post';

$txt['cannot_posthistory_view_any'] = 'You are not allowed to view history of this post!';
$txt['cannot_posthistory_restore_own'] = 'You are not allowed to start editing from older version of your posts!';
$txt['cannot_posthistory_restore_any'] = 'You are not allowed to start editing from older version of someone else\'s post!';
// Post History END

// TrimUrl
$txt['urlLength'] = 'Trim url longer than (x) characters.';
// CleanTalk messages begin
$txt['cleantalk_name'] = 'Antispam by CleanTalk';
$txt['cleantalk_settings'] = 'Antispam by CleanTalk Mod settings';
$txt['cleantalk_api_key'] = 'Access key';
$txt['cleantalk_check_registrations'] = 'Enable spam test on registration';
$txt['cleantalk_get_access_manually'] = 'Get access key manually';
$txt['cleantalk_get_access_key_or'] = 'or';
$txt['cleantalk_get_access_automatically'] = 'Get access key automatically';
$txt['cleantalk_license_agreement'] = 'License agreement';
$txt['cleantalk_key_valid'] = 'Access key is valid';
$txt['cleantalk_account_name_ob'] = 'Account at cleantalk.org';
$txt['cleantalk_moderate_ip'] = 'The anti-spam service is paid by your hosting provider. License #';
$txt['cleantalk_key_not_valid'] = 'Access key is not valid!';
$txt['cleantalk_get_statistics'] = 'Click here to get anti-spam statistics';
$txt['cleantalk_admin_email_will_be_used'] = 'Admin e-mail (%s) will be used for registration';
$txt['cleantalk_first_post_checking'] = 'Enable antispam test for Newly registered members';
$txt['cleantalk_first_post_checking_postinput'] = 'All messages from newly registered members (<a href="index.php?action=moderate;area=viewgroups;sa=members;group=4">%GROUP% group</a> only) will be checked for spam';
$txt['cleantalk_automod'] = 'Enable automoderation for messages';
$txt['cleantalk_automod_postinput'] = 'Automatically put suspicious comments which may not be 100% spam to manual approvement and block obvious spam comments. Make sure that <b>Post moderation</b> feature is enabled under Adminsitration Center -> Core features';
$txt['cleantalk_api_key_description'] = 'Extension home page: <a target="_blank" href="https://cleantalk.org/">http://cleantalk.org</a>';
$txt['cleantalk_logging'] = 'Enable logging';
$txt['cleantalk_logging_postinput'] = 'All plugin\'s actions will be added to the forum\'s log. (<a target="_blank" href="%s/index.php?action=admin;area=logs;sa=errorlog;desc">Admin -> Error log</a>)';
$txt['cleantalk_tell_others'] = 'Tell others about CleanTalk';
$txt['cleantalk_email_notifications'] = 'Enable admin email notifications';
$txt['cleantalk_email_notifications_postinput'] = 'Send admin email notifications for allow/blocked checking results';
$txt['cleantalk_check_personal_messages'] = 'Enable antispam test for personal message';
$txt['cleantalk_check_personal_messages_postinput'] = 'Check all personal messages for spam';
$txt['cleantalk_ccf_checking'] = 'Check custom forms';
$txt['cleantalk_ccf_checking_postinput'] = 'May cause conflicts!';
$txt['cleantalk_tell_others_postinput'] = 'Checking this box places a small link in the footer that lets others know what anti-spam tool protects your site.';
$txt['cleantalk_tell_others_footer_message'] = '<a href="https://cleantalk.org/smf-anti-spam-mod">SMF spam</a> blocked by CleanTalk';
$txt['cleantalk_sfw'] = 'Enable SpamFireWall';
$txt['cleantalk_sfw_postinput'] = 'This option allows to filter spam bots before they access website. Also reduces CPU usage on hosting server and accelerates pages load time.';
$txt['cleantalk_check_users'] = '%CLEANTALK_CHECK_USERS%';
$txt['cleantalk_check_users_button'] = 'Check users for spam';
$txt['cleantalk_check_users_button_after'] = 'Anti-spam by CleanTalk will check all users against blacklists database and show you senders that have spam activity on other websites.';
$txt['cleantalk_check_users_key_is_bad'] = 'Can not access cloud database. Access key is bad.';
$txt['cleantalk_check_users_nofound'] = 'No spam users found';
$txt['cleantalk_check_users_tbl_select'] = 'Select';
$txt['cleantalk_check_users_tbl_username'] = 'Username';
$txt['cleantalk_check_users_tbl_username_details'] = 'Details';
$txt['cleantalk_check_users_tbl_joined'] = 'Registered';
$txt['cleantalk_check_users_tbl_lastvisit'] = 'Last visit';
$txt['cleantalk_check_users_tbl_posts'] = 'Posts';
$txt['cleantalk_check_users_tbl_posts_show'] = 'Show';
$txt['cleantalk_check_users_pages'] = 'Pages';
$txt['cleantalk_check_users_done'] = 'Done. All users checked via blacklists database, see result below.';
$txt['cleantalk_check_users_tbl_delselect'] = 'Delete selected';
$txt['cleantalk_check_users_tbl_delall'] = 'Delete all';
$txt['cleantalk_check_users_tbl_delnotice'] = 'All topics and posts of selected users will be deleted, too.';
$txt['cleantalk_check_users_confirm'] = 'Delete account(s) with their posts and topics?';
$txt['cleantalk_sfw_die_notice_ip'] = 'SpamFireWall is activated for your IP ';
$txt['cleantalk_sfw_die_make_sure_js_enabled'] = 'To continue working with web site, please make sure that you have enabled JavaScript.';
$txt['cleantalk_sfw_die_click_to_pass'] = 'Please click bellow to pass protection,';
$txt['cleantalk_sfw_die_you_will_be_redirected'] = 'Or you will be automatically redirected to the requested page after 3 seconds.';
$txt['cleantalk_sfw_die_no_file'] = 'Your IP looks like spammer\'s IP';
$txt['cleantalk_banner_renew_1'] = 'Please, renew your anti-spam license for %s.';
$txt['cleantalk_banner_renew_2'] = 'next year';
$txt['cleantalk_banner_trial_1'] = 'Cleantalk\'s cloud service trial period ends, please upgrade to %s!';
$txt['cleantalk_banner_trial_2'] = 'Premium version';
$txt['cleantalk_banner_bad_key_1'] = 'Enter the Access Key in %s settings to enable anti-spam protection!';
$txt['cleantalk_banner_bad_key_2'] = 'CleanTalk\'s mod';
// CleanTalk messages end
