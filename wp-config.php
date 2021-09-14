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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         'oi@_h2v]W? oo<tM?F1=HcKq5.+}+2n)7|:?!}GgDeomPJiLD3Htyhw PH(gbh$E' );
define( 'SECURE_AUTH_KEY',  'ZrIhK:?@oqe@_h|HfK/B,OTE^7r/DUvTn)nSryrt1|{qjF5Pp5Zd(9YlW,nSA9f*' );
define( 'LOGGED_IN_KEY',    'x~Hy%Ri(|J&!sdGkDCaHIrnI^O7D=7kiI5+Vl}42`*AgY0Xi]8@>ArUO}Y32-W*D' );
define( 'NONCE_KEY',        'B!]d2}AoOVgn$KTF1hf`.^jagSbf^lN!3NE)8Nz8J#sPyy$<>HMJn06Igkp:%jis' );
define( 'AUTH_SALT',        'o8mRvE|m%st]/vx_XgEH8gahqj2^BPD2aZ|QQSW.Gin2%GtuPR|Ni ~LNGgp:+v~' );
define( 'SECURE_AUTH_SALT', 'nxsV1HKa-B^Xq,?D_h2UF1?[7~k}c(ca%KZ^_b@!g<Fo*)^W)Zjgl`CvJE,Ysr>g' );
define( 'LOGGED_IN_SALT',   '-D]If.]7zcE}W+uBz,Nq]/-}8t|2&O<IV5%O)QY{sIqz4UN?NZP%L>?buGK?r:=T' );
define( 'NONCE_SALT',       'Rgd*-oF:ZTb-/s<~6^6M}xUJxkr/b/BA-Okxb,0xSR3^>Le =u$>paa;se[r !aF' );

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
