<?php

/**
 * GIT VERSION: 10813
 *
 * Some of the following constants are automatically filled in when
 * the build process is run. If you change them in site/index.php
 * and rerun the build process your changes will be lost
 *
 * APP_PATH   absolute path to the php files of the app
 * DEBUG_MODE flag to enable easier debugging and development
 * CACHE_ID   unique string to bust js/css browser caching for a new build
 * SITE_ID    random site id used for page keys
 */
define('APP_PATH', '/home/roberto/tikipack/24.4/tiki-24.4/vendor_bundled/vendor/jason-munro/cypht/');
define('VENDOR_PATH', APP_PATH.'vendor/');
define('WEB_ROOT', '');
define('DEBUG_MODE', false);
define('CACHE_ID', '8DE%2FBT9thnPGuwzIYmNLOn0Rhc4EfkxvzmZEZhyMO2Y%3D');
define('SITE_ID', 'fXTL6YNdbXPlXP%2B%2FUFcUO%2B6YKja%2Bs6G6a4Tqgynv%2FwPA4p6dJ2zL5G%2BAgTodbmBZxIbUcR90aiw3p5OFC%2BHEnQ%3D%3D');
define('JS_HASH', 'sha512-P8Q9C+JSwDqHJErlRwsYPHgIBcT2N2fUUAixARIVmPmYTTIsmIStgcty0OMEb6g2fF+k0p2ZazKwAIHBKxABFA==');
define('CSS_HASH', 'sha512-DplDFq5viuIrKJcLRGD87fiQ/qnbSRt185CzecfhyNdISeJUNUSsXLRd/HWoURn0L/+GVlpXqT0cS7XYcz1Nyw==');

/* show all warnings in debug mode */
if (DEBUG_MODE) {
    error_reporting(E_ALL | E_STRICT);
}

/* config file location */
define('CONFIG_FILE', APP_PATH.'hm3.rc');

/* don't let anything output content until we are ready */
ob_start();

/* set default TZ */
date_default_timezone_set( 'UTC' );

/* get includes */
require APP_PATH.'lib/framework.php';

/* get configuration */
$config = new Hm_Site_Config_File(CONFIG_FILE);

/* setup ini settings */
if (!$config->get('disable_ini_settings')) {
    require APP_PATH.'lib/ini_set.php';
}

/* process the request */
new Hm_Dispatch($config);

/* log some debug stats about the page */
if (DEBUG_MODE) {
    Hm_Debug::load_page_stats();
    Hm_Debug::show();
}
