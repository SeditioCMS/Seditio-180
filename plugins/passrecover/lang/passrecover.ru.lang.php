<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome & Seditio Team
https://seditio.org
[BEGIN_SED]
File=plugins/passrecover/lang/passrecover.ru.lang.php
Version=180
Updated=2025-jan-25
Type=Plugin.standalone
Author=Seditio Team
Description=
[END_SED]
==================== */


$L['plu_title'] = "Восстановление пароля";

$L['plu_explain1'] = "1. Введите свой e-mail и нажмите кнопку \"Запрос\".";
$L['plu_explain2'] = "2. Проверьте свой почтовый ящик, туда должно прийти письмо с ссылкой для входа на сайт.";
$L['plu_explain3'] = "3. Затем зайдите в профиль и установите новый пароль.";
$L['plu_explain4'] = "Если в профиле отсутствует e-mail, или указан недействующий адрес то восстановить пароль не получится. <br />В этом случае <a href=\"" . sed_url("plug", "e=contact") . "\">обратись к администратору сайта</a>.";
$L['plu_mailsent'] = "Готово. Скоро вы получите письмо со ссылкой для входа на сайт.<br />Затем следуйте дальнейшим инструкциям.";
$L['plu_mailsent2'] = "Готово. Скоро вы получите письмо со ссылкой для смены пароля.<br />Затем следуйте дальнейшим инструкциям.";
$L['plu_youremail'] = "Ваш E-mail : ";
$L['plu_request'] = "Запрос";
$L['plu_loggedin1'] = "Здравствуйте, ";
$L['plu_loggedin2'] = "вы вошли на сайт.";
$L['plu_loggedin3'] = "Теперь зайдите в <a href=\"" . sed_url("users", "m=profile") . "\">профиль</a> и установите новый пароль.";
$L['plu_email1'] = "Вы запросили восстановление пароля для входа на наш сайт. \r\nПерейдите по ссылке ниже чтобы войти на сайт, и следуйте дальнейшим инструкциям :";
$L['plu_email2'] = "Вы запросил восстановление пароля для входа на наш сайт. \r\nПерейдите по ссылке ниже чтобы сгенерировать новый пароль. Новый пароль будет выслан на e-mail :";
$L['plu_email3'] = "По вашему запросу создан новый пароль. Измените его при первой возможности и удалите данное письмо.\r\n\r\nВаш новый пароль: ";
$L['plu_newpass'] = "Готово!\r\n\r\n Скоро вы получите письмо с новым паролем для входа на сайт";

$L['cfg_generate_password'] = array("Генерировать новый пароль и отсылать на e-mail?", "");
