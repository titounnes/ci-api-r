<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2018-10-05 21:26:01 --> Migrations have been loaded but are disabled or setup incorrectly.
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/MigrationRunner.php(192): CodeIgniter\Exceptions\ConfigException::forDisabledMigrations()
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/MigrationRunner.php(373): CodeIgniter\Database\MigrationRunner->version('0')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/Commands/Database/MigrateCurrent.php(110): CodeIgniter\Database\MigrationRunner->current(NULL)
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CLI/CommandRunner.php(120): CodeIgniter\Commands\Database\MigrateCurrent->run(Array)
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CLI/CommandRunner.php(93): CodeIgniter\CLI\CommandRunner->runCommand('migrate:current', Array)
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CLI/CommandRunner.php(71): CodeIgniter\CLI\CommandRunner->index(Array)
#6 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(803): CodeIgniter\CLI\CommandRunner->_remap('index', 'migrate:current')
#7 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(CodeIgniter\CLI\CommandRunner))
#8 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/app/ci4-api/vendor/codeigniter4/framework/system/CLI/Console.php(79): CodeIgniter\CodeIgniter->run()
#10 /var/app/ci4-api/App1/spark(64): CodeIgniter\CLI\Console->run()
#11 {main}
