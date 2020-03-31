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
define( 'DB_NAME', 'timber-wp' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5|ki9&J9h+XG[,=/O|gi9=[4F&]b*mDE`,iE.E)>%BWr!>e,(Mja84,!IwiCZz8^' );
define( 'SECURE_AUTH_KEY',  'm6q!,7?xU&|1[;EZ0b)Z.lE@{2`A{-&oo7;aUVswM0Vd$cS0R,3osh%+uE}!wbYk' );
define( 'LOGGED_IN_KEY',    '5X=ndR]HGzSh=d,4g;xVME#JmV|:Mn_8.!DKBuQ@w[(tZ5jo.qc!N~]1QDO4tLkn' );
define( 'NONCE_KEY',        '8:&uT0aR.Q21DaDl)X^Zn2H,[hux{3)0Sxv=`iQ.nn#CY_%@4:&6EwIp4O;UJcTq' );
define( 'AUTH_SALT',        'jrg_/8ki]eA5|[:M_JzQD9]E4bH@0^FjQ0=>!AN0<kikutW4NJqlI>oss65a dYW' );
define( 'SECURE_AUTH_SALT', '.msw`i]}?J|vU}R]7Tpk+Ar5Ff1qi6J!7mIq~.e1QMXmLDh,lYW~=0s1P1e:[sW9' );
define( 'LOGGED_IN_SALT',   'adFNy1V`Y`4CUv}wi3slQc~H cB!Ic:;sT/lQifqVFZF_iLc]y?CQu3D])i!}VeB' );
define( 'NONCE_SALT',       'G;=qOJ8oX7y~v8;@,tn~(wHu+k9UFc`3Ezi3us+j{~1XVVF2$IbYwbdZYG]2EoC9' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
