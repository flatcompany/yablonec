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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'yablonec' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1{Q;1How8h6%tK+)IVC(4Z1_desW:5eKI&2a4sAtJHmc~P87V`>mxY~}%wR^g1>/' );
define( 'SECURE_AUTH_KEY',  'af^8eT?!,/lK4v8K4TgTj#?fTd5kUtU;XWO{mw-HrL#=ZLE.7|6oEht9lhE6:$13' );
define( 'LOGGED_IN_KEY',    'x[`:-!65`4C$i+UD+)EpgDonB29_d[t~? @E6dKU:$p7d2r?%J;ej%.F12_cM.p_' );
define( 'NONCE_KEY',        '3KyK(+`db-8$n>vOFS`4xP`(|%>71ILcY(~xo[n|SVs@&`zL6*`s.pS~JM:r$?k^' );
define( 'AUTH_SALT',        '2l=|oX21W6ZZ>iNVZpTsCPf0K#to&VrrM)hlq`=qNXML8}UA:,WVx}V3}R%3!,5r' );
define( 'SECURE_AUTH_SALT', '>1Y7!7KsRnAT,gi_mBp$kV<Zt}YV~`V`uD]D=lZuUM4W`?$Xh^0|cOmu#KXj}+s7' );
define( 'LOGGED_IN_SALT',   'TwU-:aoS8Eiz!oC+wyi}dxjjS3s P[$CX([*[?lj)*Zei*Tg0J4(7/SYKFK:&q/4' );
define( 'NONCE_SALT',       '0NcG1Y<3L6=-SQ4wbX( ,Zz(hW^%E%/6ZV~rD)M-!npd7ol]BP$.x){]5,0prZ$%' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
