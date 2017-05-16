<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'felix');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 's.adm.000');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@c>?Ev.S o.Gvf}jMs:--[xK-y-rmRAJ%IMhq0>arV]S#RVEDvQ9s)pg%u,EM}WW');
define('SECURE_AUTH_KEY',  'HD_F9vQ;Z42=h^9sEH8K1EJp.;J3:PRUX=:^-KQmrHq#TVe`cQwsX|vvV*AzS<m@');
define('LOGGED_IN_KEY',    '5DB,bBF!i;vc?Q60mT5$PEB>z~,2Ke&U[-B$s/Jld.Mi=`|RK<)4v52TYp/v9}v3');
define('NONCE_KEY',        'jgtw@#/VHs/S[Du`]Jxq??g;1Qr^&*+,FMUKT&4cr3C0b(3`{[AK5>O4Ds^*2%*$');
define('AUTH_SALT',        'T-z{EHF4|8/j3E#!!833/Z5Q~~A)z^t@xB N`hyYB8w)%q<ol1z7rq+v`+x~r@;i');
define('SECURE_AUTH_SALT', 'kubZ]]mK|*qL~`SKSfQ4fhn!4jMNM$}_W`q2:bGdm$gdx/l1rIXl#{PD,]S#*b$!');
define('LOGGED_IN_SALT',   'xdxX<D&(G8?Dp6$3x|7m*LJx%G:o9aC^!%5KmjA5m{!|rT!RHUWNeqA`;&52S&M-');
define('NONCE_SALT',       'jn0~3z;jQX}ML{Gii|j1{6=C{@[i<l~ezm_H-C%z(:-kNB$FDmpp!rF1m}$>`VH8');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
