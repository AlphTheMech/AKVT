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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'cCu[=uD}6%EeMUAX^x0,|0nF 7{4Q$+TdPyn,dnP(eY[qk|#owrgf$- dZvg*FWr' );
define( 'SECURE_AUTH_KEY',  ' COJ4Q2Op6!oEr6]G=7Lm|CX=Ot.<UoNZqM=6a!AA5zB)W9617BlZr>*dG:o]C$~' );
define( 'LOGGED_IN_KEY',    'n8sGU.O2Xa??(4Br|cF.Bsz6-tFR&nPQg7WE(5cmySn9T<U&,47Xx!X[]8]+3p(o' );
define( 'NONCE_KEY',        'iVV:yTiaeqec4g?E<8>,eC?s;5~B{]tO|lZ64@X))&Fzg >#<RY3B9+E0B1k%lIh' );
define( 'AUTH_SALT',        'T!:n4-CJRu!Z6d@G}Em>fYkc{FnnDqZUb$7_~+=p8{)PmKFc?krS2{~P</~6yxF1' );
define( 'SECURE_AUTH_SALT', '~`Dz4Y~,+fG.lTy)=pEkq<y^[5@[u36T8B5!akC&>p)-$ag(A[*56yw6-E.6f82o' );
define( 'LOGGED_IN_SALT',   'ZL3>;BVMq7aE%wLY%+[&|B^El%={b]!_#1is-w3;8lJqM}Z~ji97^:@)0h]8A^wS' );
define( 'NONCE_SALT',       '`tY~D-A:-^n6p|<=%b.vP,[fg}:RqOZ?O(GX,:yjIVu1,^-le=tEV]Qi7!.wn0 ^' );

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
