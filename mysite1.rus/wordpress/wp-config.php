<?php
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
define( 'DB_NAME', 'shop' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'uJZ)`V^%Gg$g2DV}Sfkk~JN.!u)kF|Nr1n;Zi!VEn EUb[mhXe)zGPqr2Ejq~{Jt' );
define( 'SECURE_AUTH_KEY',  'Y<xl40:D7%|A-+V^D4b p$cxZO*j;|Bq0j#<3i.~}szugScx!3dY)M[,MJYbvU|x' );
define( 'LOGGED_IN_KEY',    'ID&qV-u7[RLaSBz_/;cdHxfo_xoricq%*yHGHIpBzG=.6r2`J%W;Dw_X+Q37vh1b' );
define( 'NONCE_KEY',        'uvS88WP16H#cbyn{MY0o9;19,Hrdl([T>w{AS]~H:u *oZ`>mW}<D0k}=V?1c.w0' );
define( 'AUTH_SALT',        'yp7tsvf{.wGusC+v|pb8}h{}?YO@,x~u(7&fL8HTS~eH%GRra1:(w2-,itq~6*gY' );
define( 'SECURE_AUTH_SALT', '?NZ7# Y@Y6^YF(IO{<xb7)8jkQ2L9:c_/KOO4Q0tCv1.;-gFF{abhz{-XHKee.lc' );
define( 'LOGGED_IN_SALT',   'mZt_F]1|,nL`{gzcekP{4[DPDTar?Mik_Fs>vsL-ij.@GTJ2xUtnL-8Av;y5[*$z' );
define( 'NONCE_SALT',       '3RgcN0mpk__4Naw7G*SDaE&[XkciU/^k2N4>KY*o(67]g}uy~x@&fH&n48S35J#{' );

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
