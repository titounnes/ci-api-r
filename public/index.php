<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Bearer, Fingerprint, X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Path to the front controller (this file)
define('FCPATH', __DIR__.DIRECTORY_SEPARATOR);
//define('BASEPATH','../');

// Location of the Paths config file.
// This is the first of two lines that might need to be changed, depending on your folder structure.
$pathsPath = FCPATH . '../application/Config/Paths.php';

/*
 *---------------------------------------------------------------
 * BOOTSTRAP THE APPLICATION
 *---------------------------------------------------------------
 * This process sets up the path constants, loads and registers
 * our autoloader, along with Composer's, loads our constants
 * and fires up an environment-specific bootstrapping.
 */

// Ensure the current directory is pointing to the front controller's directory
chdir(__DIR__);

// Load our paths config file
require $pathsPath;
$paths = new Config\Paths();
// Location of the framework bootstrap file.
// This is the second of two lines that might need to be changed, depending on your folder structure.

define('BASEPATH', realpath(FCPATH.'../../'. $paths->systemDirectory). DIRECTORY_SEPARATOR);
$app = require BASEPATH . 'bootstrap.php';

/*
 *---------------------------------------------------------------
 * LAUNCH THE APPLICATION
 *---------------------------------------------------------------
 * Now that everything is setup, it's time to actually fire
 * up the engines and make this app do it's thang.
 */
$app->run();
