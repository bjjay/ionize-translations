<?php
/*
|--------------------------------------------------------------------------
| Ionize Form library Language file
|
| Copy this file to /themes/<my_theme/language/xx/form_lang.php
| to replace these translations with your one.
|
| IMPORTANT :
| Do not modify this file.
| It will be overwritten when migrating to a new Ionize release.
|
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Labels
| To be used for form lables.
| Also used by Form Validation to display "human" name for each field in the errors messages.
| Declared as "label" for each fields of forms set in /config/ionize.php
|--------------------------------------------------------------------------
*/
$lang['form_label_email'] = "邮箱";
$lang['form_label_name'] = "用户名";
$lang['form_label_firstname'] = "姓";
$lang['form_label_lastname'] = "名";
$lang['form_label_screen_name'] = "显示名称";
$lang['form_label_username'] = "登录名";
$lang['form_label_birthdate'] = "生日";
$lang['form_label_gender'] = "性别";
$lang['form_label_login'] = "登录";
$lang['form_label_password'] = "密码";
$lang['form_label_password_confirmation'] = "确认密码";
$lang['form_label_delete_account'] = "删除账户";

/*
|--------------------------------------------------------------------------
| Buttons
|--------------------------------------------------------------------------
*/
$lang['form_button_send'] = "发送";
$lang['form_button_save'] = "保存";
$lang['form_button_register'] = "注册";
$lang['form_button_login'] = "登录";
$lang['form_button_logout'] = "注销";
$lang['form_button_post'] = "提交";
$lang['form_button_answer'] = "答案";

/*
|--------------------------------------------------------------------------
| Emails
|--------------------------------------------------------------------------
*/
// Registration : Email to the website email
$lang['mail_website_registration_subject'] = "网站有新成员入驻";
$lang['mail_website_registration_message'] = "以下是新成员的详细信息。";

// Registration : Email to user
$lang['mail_user_registration_subject'] = "注册于  %s";
$lang['mail_user_registration_intro'] = "你好 %s,";
$lang['mail_user_registration_message'] = "你刚刚在 <b>%s</b>注册。<br/>以下是你的登录信息.";
$lang['mail_user_registration_activate'] = "在登录之前，你需要通过下面链接激活你的帐户：";

// New Password : Email to user
$lang['mail_user_password_subject'] = "你用户名 %s的心密码";
$lang['mail_user_password_intro'] = "你好 %s,";
$lang['mail_user_password_message'] = "你刚刚申请一个新密码访问网站 <b>%s</b>.<br/>以下是你的新的登录信息：";

/*
|--------------------------------------------------------------------------
| Messages
| Success messages for login / registration forms
| Declared as 'success' for each form in form setup : /config/ionize.php
|--------------------------------------------------------------------------
*/
$lang['form_not_logged'] = "你还未登录.";

$lang['form_login_success_message'] = "你已成功登录.";
$lang['form_login_error_message'] = "错误 : 请检查你的用户名/密码。";
$lang['form_login_not_found_message'] = "用户不存在。";
$lang['form_login_not_activated_message'] = "账户未激活。请检查你的邮箱并访问邮件内的激活链接。";

$lang['form_register_success_message'] = "你已成功注册。";
$lang['form_register_error_message'] = "错误：注册失败。";

$lang['form_profile_success_message'] = "数据已保存。";
$lang['form_profile_error_message'] = "用户已存在。请换个登录名或邮箱。";
$lang['form_profile_account_deleted'] = "账户已被删除。";

$lang['form_password_error_message'] = "发生错误。";
$lang['form_password_not_found_message'] = "邮箱貌似不存在哟";
$lang['form_password_success_message'] = "新密码已发送至你的邮箱。";

/*
|--------------------------------------------------------------------------
| Validation Errors
|--------------------------------------------------------------------------
*/
$lang['form_error_javascript_required'] = "你需要开启Javascript来提交表单";
$lang['form_error_spam'] = "谢谢你的垃圾信息 !";
$lang['form_error_required'] = "<strong>%s</strong>  项为必填项。";
$lang['form_error_isset'] = " <strong>%s</strong>  项为必填项。";
$lang['form_error_valid_email'] = "<strong>%s</strong> 项必须是有效邮件地址。";
$lang['form_error_valid_emails'] = "<strong>%s</strong> 项必须是有效邮件地址。";
$lang['form_error_valid_url'] = "<strong>%s</strong> 项必须是有效URL。";
$lang['form_error_valid_ip'] = "<strong>%s</strong> 项必须是有效IP地址。";
$lang['form_error_min_length'] = "<strong>%s</strong> 项至少包含 %s 个字符。";
$lang['form_error_max_length'] = "<strong>%s</strong> 项不能超过 %s 个字符。";
$lang['form_error_exact_length'] = "<strong>%s</strong> 项必须是 %s 个字符。";
$lang['form_error_alpha'] = "<strong>%s</strong> 项只能包含字母。";
$lang['form_error_alpha_numeric'] = "<strong>%s</strong> 项只能是数字和字母组合。";
$lang['form_error_alpha_dash'] = "<strong>%s</strong> 项只能包含数字，字母，下划线和中划线。";
$lang['form_error_numeric'] = "<strong>%s</strong> 项只能包含数字。";
$lang['form_error_is_numeric'] = "<strong>%s</strong> 项只能包含数字。";
$lang['form_error_integer'] = "<strong>%s</strong> 项必须为整数。";
$lang['form_error_matches'] = "<strong>%s</strong> 项不匹配。";
$lang['form_error_is_natural'] = "<strong>%s</strong> 项只能是正数。";
$lang['form_error_is_natural_no_zero']	= "<strong>%s</strong> 项必须是大于0的数字。";
$lang['form_error_restricted_field'] = "非法传输数据。";
$lang['form_error_terms'] = "你必须接受使用条款。";
$lang['form_error_upload_something'] = "文件上传出错了。";
$lang['form_error_upload_file_size'] = "上传文件不能超过 1 MB。";
$lang['form_error_upload_file_type'] = "只允许 JPEGs, PNGs and GIFs格式图片。";

