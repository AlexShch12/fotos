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
define('DB_NAME', 'fotos');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '$9Fq.ur6k(OA/,DegsfKfu|DN=E5UJ]!{XJ^Rn8$y)$WtG^`aUXrCL`Gbh-%gQrM');
define('SECURE_AUTH_KEY',  'o(pg6D[/f{{?Y45M y|cbCb&71BmMrS2K-S8?uzFw{Jz&5-k~hCw%,j1cUzkB*[u');
define('LOGGED_IN_KEY',    'WhK>h@uE5k=&R+pC  =Z!X-SZ/j(6eW35_F kA PiV2ST>!O!f<4.j@4)]Eb];;z');
define('NONCE_KEY',        'cC3G1*mA>/PsL<}M-w!K0:$0lNHJHy8{W1JN3e6>D3lY0<;1GCT 3y9[!b(;A}~*');
define('AUTH_SALT',        'W6dlb0%ZU`mg`I2=bf1ulPjAeq9xE*7Gx1|^P}Q~] pf|Eht>{b7cNc#7{`f0w~{');
define('SECURE_AUTH_SALT', 'Yig1}K/;Pfcm9>tHz);[b-,_;lVwd]Q4R3_z~YjUl*0C*H+63fG LW?)nKTus>Cb');
define('LOGGED_IN_SALT',   'lz{}MwY-X5Xu~~mT[;-Bc{H<f5qxP/$xfu:g%2TV~2}P)ML7B?ROm2kico1k2c4o');
define('NONCE_SALT',       '.S2/HA@m?Y*:f}y<d:=6X0omlT_@Ksn_6yK-7#M0-wF($Ls?d~x<El`)VuP.J2cP');

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
