<?php
/*
|--------------------------------------------------------------------------
| Ionize Connect library Language file
|
| This lang file can be replaced by a theme one.
| Simply copy this file in the folder /themes/your_theme/language/xx/
| and modify the translations elements.
|
|--------------------------------------------------------------------------
*/

// Main library language elements
$lang['connect_login_failed'] = "你所提供的登录信息未通过验证。你输入的用户名活在密码错误，请重试。";
$lang['connect_access_denied'] = "你的访问 %s受限制";
$lang['connect_missing_parameters']	= "缺少参数 %s ";
$lang['connect_parameter_error'] = "传入的参数 %s 错误";
$lang['connect_user_save_impossible'] = "我们无法保存你所提交的数据，请尝试或者联系我们。";
$lang['connect_user_already_exists'] = "用户名或邮箱已存在。请换一个用户名或邮箱再做尝试。";
$lang['connect_blocked'] = "因为多次登录失败，你的登录已受限，请尝试 %s";
$lang['connect_cannot_ban_yourself'] = "你不能踢掉自己。";
$lang['connect_register_success'] = "你已成功注册。";
$lang['connect_register_success_verify_user'] = "你已经成功注册，但是我们需要验证你的邮箱。我们已发送一封邮件到你邮箱，请检查你的邮箱，点击邮件中的激活链接来激活你的账户。";

// Activation mail to Admin
$lang['connect_admin_mail_subject'] = "注册";
$lang['connect_admin_mail_title'] = "注册";
$lang['connect_admin_mail_intro'] = "网站有了新成员。";
$lang['connect_admin_mail_nom'] = "名称";
$lang['connect_admin_mail_login'] = "登录";
$lang['connect_admin_mail_email'] = "邮箱";
$lang['connect_admin_mail_activation_link'] = "激活链接";

// Activation mail to User
$lang['connect_user_mail_subject'] = "你的注册";
$lang['connect_user_mail_activated'] = "账户已激活";
$lang['connect_act_user_mail_title'] = "欢迎你 !";
$lang['connect_act_user_mail_intro'] = "感谢你注册我们的网站。";
$lang['connect_act_user_mail_text'] = "请点击下面的激活链接来确认你的注册。";
$lang['connect_act_user_mail_activation_link'] = "激活链接";

// Registration confirmation mail to User
$lang['connect_wait_user_mail_title'] = "欢迎你 !";
$lang['connect_wait_user_mail_intro'] = "感谢你注册我们的网站。";
$lang['connect_wait_user_mail_text'] = "你的账户将被激活。";

// Registration views
$lang['connect_user_registration_title'] = "注册成功";
$lang['connect_user_registration_message'] = "你将收到一封注册邮件，会引导你确认你的注册信息。";

// Activation views
$lang['connect_home_page'] = "首页";
$lang['connect_activation_title'] = "账户激活";
$lang['connect_user_activated_message'] = "你的账户已激活<br/>你可以在首页登录了。";
$lang['connect_user_activated_error'] = "用户账户激活出错。可能你已经激活了，或者你用了错误的信息。请尝试登录你的账户，或者重新验证我们给你发送的邮件。";

$lang['connect_admin_activated_message'] = "账户已经被激活。<br/>已经给用户发送一封邮件通知他了。";
$lang['connect_admin_activated_error'] = "在你尝试激活用户账户时出错。可能你已激活过，或者你使用了错误的信息。";

