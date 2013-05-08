<?php

$lang = array();

/*
|--------------------------------------------------------------------------
| General
|--------------------------------------------------------------------------
*/
$lang['title_ionize_installation'] = 		"安装";

$lang['title_system_check'] = 		"系统环境检测结果";
$lang['title_database_settings'] = 	"数据库设置";
$lang['title_user_account'] = 	"管理员帐号";
$lang['title_default_language'] = 	"默认语言";
$lang['title_sample_data'] = 	"安装测试数据";

$lang['button_next_step'] = 		"下一步";
$lang['button_skip_next_step'] = 	"跳过&下一步";
$lang['button_save_next_step'] = 	"保存&下一步";
$lang['button_install_test_data'] = 	"安装测试数据";
$lang['button_start_migrate'] = 		"合并数据库";

$lang['nav_check'] = "系统环境检测";
$lang['nav_db'] = "数据库";
$lang['nav_settings'] = "设置";
$lang['nav_end'] = "结束";
$lang['nav_data'] = "演示数据";


/*
|--------------------------------------------------------------------------
| System check
|--------------------------------------------------------------------------
*/
$lang['php_version'] = 			"PHP >= 5";
$lang['php_version_found'] = 	"PHP 版本";
$lang['mysql_support'] = 		"MySQL 支持";
$lang['mysql_version_found'] = 	"MySQL 版本";
$lang['file_uploads'] = 		"文件上传";
$lang['mcrypt'] = 				"PHP Mcrypt 库";
$lang['gd_lib'] = 				"PHP GD 库";
$lang['write_config_dir'] = 	"<b>/application/config/</b>";
$lang['write_files'] = 			"<b>/files/*</b>";
$lang['write_themes'] = 		"<b>/themes/*</b>";
$lang['config_check_errors'] = 	"一些配置环境未准备好.<br/>请配置好相关环境然后继续安装";
$lang['welcome_text'] = 		" <p>欢迎你 ! 以下步骤会引导你安装Ionize.</p>";
$lang['write_check_text'] = 	"<p>以下文件夹和文件必须可写...</p>";
$lang['title_folder_check'] = 	"这些文件夹必须可写";
$lang['title_files_check'] = 	"这些文件必须可写";

/*
|--------------------------------------------------------------------------
| Database
|--------------------------------------------------------------------------
*/
$lang['database_driver'] = 			"驱动";
$lang['database_hostname'] = 		"主机名";
$lang['database_name'] = 			"数据库";
$lang['database_username'] = 		"用户名";
$lang['database_password'] = 		"密码";
$lang['database_create'] = 			"创建数据库";
$lang['title_database_create'] = 	"数据库创建";
$lang['db_create_text'] = 			"<p>Ionize将会安装或升级数据库:</p><p><b class=\"highlight\">全新安装</b> : 创建数据库和数据表<br/><b class=\"highlight2\">升级</b> : 下一步会检测是否需要升级</p>";
$lang['db_create_prerequisite'] = 			"用户需要有权限创建数据库。<br/>如果数据库已经存在，不用做检查。";
$lang['database_error_missing_settings'] = 	"信息丢失.<br/>请填写完整!";
$lang['database_success_install'] = 		"<b class=\"ex\">数据库已成功安装.</b>";
$lang['database_success_install_no_settings_needed'] = 		"<b class=\"ex\">数据库 OK。</b><br/>由于数据库已经存在，网站设置步骤将被跳过。";
$lang['database_success_migrate'] = 		"<b class=\"ex\">数据库成功升级。</b>";
$lang['database_error_coud_not_connect'] = 		"通过提供的设置连接数据库失败。";
$lang['database_error_database_dont_exists'] = 		"数据库不存在！";
$lang['database_error_writing_config_file'] = 		" <b>错误 :</b><br/>文件 <b>/application/config/database.php</b>不可写!<br/>请检查你的用户读写权限。";
$lang['database_error_coud_not_write_database'] = 		"<b>错误 :</b><br/>数据库无法写入数据<br/>请检查你的数据库权限。";
$lang['database_error_coud_not_create_database'] = "安装程序无法创建数据库。请检查你的数据库名称或者你的权限。";
$lang['database_error_no_ionize_tables'] = 			"你所选择的数据库貌似不是 Ionize数据库。请再次检查确认。";
$lang['database_error_no_users_to_migrate'] = 		"用户帐号升级";
$lang['database_migration_from'] = 			"数据库需要升级。<br/>当前版本：";
$lang['database_migration_text'] = 		"<p class=\"error\"><b>注意 :</b><br/> 现在准备升级数据库。<b><br/>请在升级之前做好备份。</p>";


/*
|--------------------------------------------------------------------------
| Settings
|--------------------------------------------------------------------------
*/
$lang['lang_code'] = 		"代码(2字母)";
$lang['lang_name'] = 		"标签";
$lang['settings_default_lang_title'] = 		"默认语言";
$lang['settings_default_lang_text'] = 		"你的网站需要设置一个默认语言。<br/>你可以访问<a target=\"_blank\" href=\"http://en.wikipedia.org/wiki/ISO_639-1\">the Wikipedia ISO 639-1 page</a>获取更多语言代码信息。";
$lang['settings_error_missing_lang_code'] = "语言代码为必填项";
$lang['settings_error_missing_lang_name'] = "语言名称为必填项";
$lang['settings_error_lang_code_2_chars'] = "语言代码必须是两个字母。比如：\"en\"";
$lang['settings_error_write_rights'] = "文件不可写入 <b>/application/config/language.php</b>请检查此文件的读写权限。";
$lang['settings_error_write_rights_config'] = "文件不可写人<b>/application/config/config.php</b>请检查此文件的读写权限。";
$lang['settings_error_admin_url'] = "后台管理URL必须是字母，不能有空格和特殊字符。";
$lang['settings_admin_url_title'] = 		"管理面板URL";
$lang['settings_admin_url_text'] = 		"强烈建议修改默认值";
$lang['admin_url'] = "管理URL";

/*
|--------------------------------------------------------------------------
| User
|--------------------------------------------------------------------------
*/
$lang['user_introduction'] = 	"通过此登录你可以访问到后台管理面板。";
$lang['username'] = 			"登录名(最少4位)";
$lang['screen_name'] = 			"全名";
$lang['email'] = 				"邮箱";
$lang['password'] = 			"密码 (最少4位)";
$lang['password2'] = 			"确认密码";
$lang['user_error_missing_settings'] = 			"有必填项未填";
$lang['user_error_not_enough_char'] = 			"登录名和密码都必须至少4位字符";
$lang['user_error_email_not_valid'] = 			"邮件地址无效";
$lang['user_error_passwords_not_equal'] = 		"密码不一致";
$lang['user_info_admin_exists'] = 		"数据库已存在一个管理员帐号。<br/>如果你不想创建或升级管理员帐号，你可以跳过此步骤。";
$lang['encryption_key'] = 			"密钥";
$lang['encryption_key_text'] = 		"onize需要一个128 bits 密钥.<br />此密钥将用来加密用户帐号及所有的敏感数据。<br/>它将被写入此文件： <b>/application/config/config.php</b>。";
$lang['no_encryption_key_found'] = 	"没有发现密钥。用户帐号未升级。<b>你必须创建一个管理员帐号</b>。";


/*
|--------------------------------------------------------------------------
| Data
|--------------------------------------------------------------------------
*/
$lang['data_install_intro'] = 	"<p>如果这是你第一次使用Ionize，强烈建议你安装演示网站。<br/>网站包括 : </p><ul><li>完整的数据, 有利于测试使用 Ionize,</li><li>完整的演示模版</li></ul>";
$lang['title_skip_this_step'] = "跳过此步";

$lang['title_finish'] = 		"安装完成";
$lang['finish_text'] = 			" <b>重要</b>：<br/>浏览网站或者管理后台之前你必须手动删除 \"<b>/install</b>\"文件夹 。";
$lang['button_go_to_admin'] = 	"后台管理";
$lang['button_go_to_site'] = 	"网站首页";
