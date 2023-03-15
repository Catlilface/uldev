<?php
define( 'WP_CACHE', true ); 
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wpul' );
/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );
/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );
/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );
/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );
/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );
/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'o&+[}j;fWu$a3a$TeV4C:X(.oEylJG/]>;tvVcER&1fW>8A^$anIrfBipC= v2bq' );
define( 'SECURE_AUTH_KEY',  '=y#[r^-W<=F+?N@&u!xN]X#Sw_N]tyl_!CcHf#>t;+6|Q~<v&v[=~n`skPE]k#Xt' );
define( 'LOGGED_IN_KEY',    'pr0dVff1Tiu)cUbh7vYP!02.U&LK:0c|ZO4p]4||Z24k@FZ2Q>+(Yp<ZDb~2%rdp' );
define( 'NONCE_KEY',        'I:]NKn/WnCgD3|#~;*fEZtVjnO}ex7Pg>,t/xuU]d_>QU$Z/TJ}SBeRgx9/fmO1A' );
define( 'AUTH_SALT',        'p&a|9&zLvOZ=F|RMgDvPR(]*T%maHSV^~H*35RHnO.*Eq^8pv5gxD7c-;0@]K.J ' );
define( 'SECURE_AUTH_SALT', 'j^DJ6uH/S6K?y@j`AU1;){lJ`Q5JR1jN`AsU9YP#4Pcq%M&fcX6X9|y:q=1Ze3M}' );
define( 'LOGGED_IN_SALT',   '_NsQ+T:0z$i* ^yC2U^y8eE@`F*uJ ,Ri&&pRDCI1f[`e5p.oBaOsaj0_K;fHa5*' );
define( 'NONCE_SALT',       'CVN(D;[Wtxz}15CBb5BYzE<xB(wSMfp&xCuXwvzh?yU4$HM #`Yd1&9X/JpiC>[1' );
/**#@-*/
/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';
/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */
/* Это всё, дальше не редактируем. Успехов! */
/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';