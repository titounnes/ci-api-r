<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2018-10-07 22:42:32 --> Undefined property: Config\App::$time
#0 /var/app/ci4-api/App1/application/Controllers/Api/Base.php(34): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/var/app/ci4-ap...', 34, Array)
#1 /var/app/ci4-api/App1/application/Controllers/Api/Guest.php(25): App\Controllers\Api\Base->success(Object(stdClass), 'postIdentity', Object(stdClass))
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Guest->postIdentity()
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Guest))
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2018-10-07 22:42:35 --> Undefined property: Config\App::$time
#0 /var/app/ci4-api/App1/application/Controllers/Api/Base.php(34): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/var/app/ci4-ap...', 34, Array)
#1 /var/app/ci4-api/App1/application/Controllers/Api/Guest.php(25): App\Controllers\Api\Base->success(Object(stdClass), 'postIdentity', Object(stdClass))
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Guest->postIdentity()
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Guest))
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2018-10-07 22:42:53 --> Undefined property: Config\App::$time
#0 /var/app/ci4-api/App1/application/Controllers/Api/Base.php(34): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/var/app/ci4-ap...', 34, Array)
#1 /var/app/ci4-api/App1/application/Controllers/Api/Guest.php(25): App\Controllers\Api\Base->success(Object(stdClass), 'postIdentity', Object(stdClass))
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Guest->postIdentity()
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Guest))
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2018-10-07 22:44:34 --> Undefined property: Config\App::$time
#0 /var/app/ci4-api/App1/application/Controllers/Api/Base.php(34): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/var/app/ci4-ap...', 34, Array)
#1 /var/app/ci4-api/App1/application/Controllers/Api/Guest.php(25): App\Controllers\Api\Base->success(Object(stdClass), 'postIdentity', Object(stdClass))
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Guest->postIdentity()
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Guest))
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2018-10-07 22:45:46 --> Table 'test.classromms_courses_evaluations' doesn't exist
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/MySQLi/Connection.php(312): mysqli->query('SELECT `e`.`id`...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `e`.`id`...')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `e`.`id`...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT `e`.`id`...', Array)
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/Model.php(366): CodeIgniter\Database\BaseBuilder->get()
#5 /var/app/ci4-api/App1/application/Models/Evaluations/Teacher/Data.php(15): CodeIgniter\Model->findAll()
#6 /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Evaluation.php(14): App\Models\Evaluations\Teacher\Data->getByClassroomCourse('5', '3')
#7 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Evaluation->index()
#8 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Evaluation))
#9 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2018-10-07 22:46:48 --> Table 'test.classromms_courses_evaluations' doesn't exist
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/MySQLi/Connection.php(312): mysqli->query('SELECT `e`.`id`...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `e`.`id`...')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `e`.`id`...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT `e`.`id`...', Array)
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/Model.php(366): CodeIgniter\Database\BaseBuilder->get()
#5 /var/app/ci4-api/App1/application/Models/Evaluations/Teacher/Data.php(15): CodeIgniter\Model->findAll()
#6 /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Evaluation.php(14): App\Models\Evaluations\Teacher\Data->getByClassroomCourse('5', '3')
#7 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Evaluation->index()
#8 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Evaluation))
#9 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2018-10-07 22:47:06 --> Table 'test.classromms_courses_evaluations' doesn't exist
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/MySQLi/Connection.php(312): mysqli->query('SELECT `e`.`id`...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `e`.`id`...')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `e`.`id`...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT `e`.`id`...', Array)
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/Model.php(366): CodeIgniter\Database\BaseBuilder->get()
#5 /var/app/ci4-api/App1/application/Models/Evaluations/Teacher/Data.php(15): CodeIgniter\Model->findAll()
#6 /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Evaluation.php(14): App\Models\Evaluations\Teacher\Data->getByClassroomCourse('5', '3')
#7 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Evaluation->index()
#8 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Evaluation))
#9 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2018-10-07 22:56:20 --> syntax error, unexpected 'List' (T_LIST), expecting identifier (T_STRING)
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Router/Router.php(189): CodeIgniter\Router\Router->autoRoute('api/teacher/per...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(685): CodeIgniter\Router\Router->handle('api/teacher/per...')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(270): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-07 22:56:53 --> syntax error, unexpected 'List' (T_LIST), expecting identifier (T_STRING)
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Router/Router.php(189): CodeIgniter\Router\Router->autoRoute('api/teacher/per...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(685): CodeIgniter\Router\Router->handle('api/teacher/per...')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(270): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-07 23:16:19 --> file_get_contents(/test/nfs/home/e-project-files/text/lessons/3.dat): failed to open stream: No such file or directory
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'file_get_conten...', '/var/app/ci4-ap...', 11, Array)
#1 /var/app/ci4-api/App1/application/Models/Courses/Base.php(11): file_get_contents('/test/nfs/home/...')
#2 /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Course/Read.php(13): App\Models\Courses\Base->getById('3')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course\Read->index()
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course\Read))
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-07 23:16:35 --> file_get_contents(/test/nfs/home/e-project-files/text/lessons/3.dat): failed to open stream: No such file or directory
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'file_get_conten...', '/var/app/ci4-ap...', 11, Array)
#1 /var/app/ci4-api/App1/application/Models/Courses/Base.php(11): file_get_contents('/test/nfs/home/...')
#2 /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Course/Read.php(13): App\Models\Courses\Base->getById('3')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course\Read->index()
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course\Read))
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-07 23:17:27 --> Failed to parse json string, error: "Malformed UTF-8 characters, possibly incorrectly encoded".
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Format/JSONFormatter.php(61): CodeIgniter\Format\Exceptions\FormatException::forInvalidJSON('Malformed UTF-8...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/API/ResponseTrait.php(367): CodeIgniter\Format\JSONFormatter->format(Array)
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/API/ResponseTrait.php(120): App\Controllers\Api\Base->format(Array)
#3 /var/app/ci4-api/App1/application/Controllers/Api/Base.php(35): App\Controllers\Api\Base->respond(Array)
#4 /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Course/Read.php(15): App\Controllers\Api\Base->success(Array, 'Sukses')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course\Read->index()
#6 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course\Read))
#7 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-07 23:17:27 --> Uncaught CodeIgniter\Format\Exceptions\FormatException: Failed to parse json string, error: "Malformed UTF-8 characters, possibly incorrectly encoded". in /var/app/ci4-api/vendor/codeigniter4/framework/system/Format/Exceptions/FormatException.php:9
Stack trace:
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Format/JSONFormatter.php(61): CodeIgniter\Format\Exceptions\FormatException::forInvalidJSON('Malformed UTF-8...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/API/ResponseTrait.php(367): CodeIgniter\Format\JSONFormatter->format(Array)
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/API/ResponseTrait.php(120): CodeIgniter\Debug\Exceptions->format(Array)
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Debug/Exceptions.php(147): CodeIgniter\Debug\Exceptions->respond(Array, 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(CodeIgniter\Format\Exceptions\FormatException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-10-07 23:20:59 --> fopen() expects at least 2 parameters, 1 given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'fopen() expects...', '/var/app/ci4-ap...', 15, Array)
#1 /var/app/ci4-api/App1/application/Models/Courses/Base.php(15): fopen('/test/nfs/home/...')
#2 /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Course/Read.php(13): App\Models\Courses\Base->getById('7')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course\Read->index()
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course\Read))
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-07 23:21:15 --> Failed to parse json string, error: "Malformed UTF-8 characters, possibly incorrectly encoded".
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Format/JSONFormatter.php(61): CodeIgniter\Format\Exceptions\FormatException::forInvalidJSON('Malformed UTF-8...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/API/ResponseTrait.php(367): CodeIgniter\Format\JSONFormatter->format(Array)
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/API/ResponseTrait.php(120): App\Controllers\Api\Base->format(Array)
#3 /var/app/ci4-api/App1/application/Controllers/Api/Base.php(35): App\Controllers\Api\Base->respond(Array)
#4 /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Course/Read.php(15): App\Controllers\Api\Base->success('x\x9C\x03\x00\x00\x00\x00\x01', 'Sukses')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course\Read->index()
#6 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course\Read))
#7 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-07 23:21:15 --> Uncaught CodeIgniter\Format\Exceptions\FormatException: Failed to parse json string, error: "Malformed UTF-8 characters, possibly incorrectly encoded". in /var/app/ci4-api/vendor/codeigniter4/framework/system/Format/Exceptions/FormatException.php:9
Stack trace:
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Format/JSONFormatter.php(61): CodeIgniter\Format\Exceptions\FormatException::forInvalidJSON('Malformed UTF-8...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/API/ResponseTrait.php(367): CodeIgniter\Format\JSONFormatter->format(Array)
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/API/ResponseTrait.php(120): CodeIgniter\Debug\Exceptions->format(Array)
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Debug/Exceptions.php(147): CodeIgniter\Debug\Exceptions->respond(Array, 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(CodeIgniter\Format\Exceptions\FormatException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-10-07 23:21:16 --> Failed to parse json string, error: "Malformed UTF-8 characters, possibly incorrectly encoded".
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Format/JSONFormatter.php(61): CodeIgniter\Format\Exceptions\FormatException::forInvalidJSON('Malformed UTF-8...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/API/ResponseTrait.php(367): CodeIgniter\Format\JSONFormatter->format(Array)
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/API/ResponseTrait.php(120): App\Controllers\Api\Base->format(Array)
#3 /var/app/ci4-api/App1/application/Controllers/Api/Base.php(35): App\Controllers\Api\Base->respond(Array)
#4 /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Course/Read.php(15): App\Controllers\Api\Base->success('x\x9C\x03\x00\x00\x00\x00\x01', 'Sukses')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course\Read->index()
#6 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course\Read))
#7 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-07 23:21:16 --> Uncaught CodeIgniter\Format\Exceptions\FormatException: Failed to parse json string, error: "Malformed UTF-8 characters, possibly incorrectly encoded". in /var/app/ci4-api/vendor/codeigniter4/framework/system/Format/Exceptions/FormatException.php:9
Stack trace:
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Format/JSONFormatter.php(61): CodeIgniter\Format\Exceptions\FormatException::forInvalidJSON('Malformed UTF-8...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/API/ResponseTrait.php(367): CodeIgniter\Format\JSONFormatter->format(Array)
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/API/ResponseTrait.php(120): CodeIgniter\Debug\Exceptions->format(Array)
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Debug/Exceptions.php(147): CodeIgniter\Debug\Exceptions->respond(Array, 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(CodeIgniter\Format\Exceptions\FormatException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-10-07 23:22:19 --> Failed to parse json string, error: "Malformed UTF-8 characters, possibly incorrectly encoded".
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Format/JSONFormatter.php(61): CodeIgniter\Format\Exceptions\FormatException::forInvalidJSON('Malformed UTF-8...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/API/ResponseTrait.php(367): CodeIgniter\Format\JSONFormatter->format(Array)
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/API/ResponseTrait.php(120): App\Controllers\Api\Base->format(Array)
#3 /var/app/ci4-api/App1/application/Controllers/Api/Base.php(35): App\Controllers\Api\Base->respond(Array)
#4 /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Course/Read.php(15): App\Controllers\Api\Base->success('x\x9C\x03\x00\x00\x00\x00\x01', 'Sukses')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course\Read->index()
#6 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course\Read))
#7 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-07 23:22:19 --> Uncaught CodeIgniter\Format\Exceptions\FormatException: Failed to parse json string, error: "Malformed UTF-8 characters, possibly incorrectly encoded". in /var/app/ci4-api/vendor/codeigniter4/framework/system/Format/Exceptions/FormatException.php:9
Stack trace:
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Format/JSONFormatter.php(61): CodeIgniter\Format\Exceptions\FormatException::forInvalidJSON('Malformed UTF-8...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/API/ResponseTrait.php(367): CodeIgniter\Format\JSONFormatter->format(Array)
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/API/ResponseTrait.php(120): CodeIgniter\Debug\Exceptions->format(Array)
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Debug/Exceptions.php(147): CodeIgniter\Debug\Exceptions->respond(Array, 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(CodeIgniter\Format\Exceptions\FormatException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-10-07 23:31:45 --> Call to undefined function App\Controllers\Api\Teacher\Course\reading()
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course\Read->index()
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course\Read))
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-10-07 23:31:57 --> Call to undefined function App\Controllers\Api\Teacher\Course\reading()
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course\Read->index()
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course\Read))
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-10-07 23:32:21 --> Using $this when not in object context
#0 /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Course/Read.php(13): reading('8')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course\Read->index()
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course\Read))
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-07 23:32:22 --> Using $this when not in object context
#0 /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Course/Read.php(13): reading('8')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course\Read->index()
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course\Read))
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-07 23:32:47 --> Argument 1 passed to reading() must be an instance of integer, string given, called in /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Course/Read.php on line 13
#0 /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Course/Read.php(13): reading('8')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course\Read->index()
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course\Read))
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-07 23:33:23 --> Argument 1 passed to reading() must be an instance of integer, string given, called in /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Course/Read.php on line 13
#0 /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Course/Read.php(13): reading('8')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course\Read->index()
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course\Read))
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-07 23:49:01 --> Argument 1 passed to reading() must be an instance of numeric, string given, called in /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Course/Read.php on line 13
#0 /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Course/Read.php(13): reading('8')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course\Read->index()
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course\Read))
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-07 23:49:33 --> Using $this when not in object context
#0 /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Course/Read.php(13): reading(8)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course\Read->index()
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course\Read))
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-07 23:49:34 --> Using $this when not in object context
#0 /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Course/Read.php(13): reading(8)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course\Read->index()
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course\Read))
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-07 23:49:54 --> Using $this when not in object context
#0 /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Course/Read.php(13): reading(8)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course\Read->index()
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course\Read))
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-07 23:50:07 --> Using $this when not in object context
#0 /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Course/Read.php(13): reading(8)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course\Read->index()
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course\Read))
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-07 23:51:57 --> syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting ',' or ')'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Router/Router.php(189): CodeIgniter\Router\Router->autoRoute('api/teacher/cou...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(685): CodeIgniter\Router\Router->handle('api/teacher/cou...')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(270): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-07 23:51:58 --> syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting ',' or ')'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Router/Router.php(189): CodeIgniter\Router\Router->autoRoute('api/teacher/cou...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(685): CodeIgniter\Router\Router->handle('api/teacher/cou...')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(270): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-07 23:53:35 --> Undefined variable: fp
#0 /var/app/ci4-api/App1/application/Helpers/file_helper.php(13): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', '/var/app/ci4-ap...', 13, Array)
#1 /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Course/Read.php(13): reading('lessons/', 8)
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course\Read->index()
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course\Read))
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2018-10-07 23:53:35 --> Uncaught CodeIgniter\Format\Exceptions\FormatException: Failed to parse json string, error: "Type is not supported". in /var/app/ci4-api/vendor/codeigniter4/framework/system/Format/Exceptions/FormatException.php:9
Stack trace:
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Format/JSONFormatter.php(61): CodeIgniter\Format\Exceptions\FormatException::forInvalidJSON('Type is not sup...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/API/ResponseTrait.php(367): CodeIgniter\Format\JSONFormatter->format(Array)
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/API/ResponseTrait.php(120): CodeIgniter\Debug\Exceptions->format(Array)
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Debug/Exceptions.php(147): CodeIgniter\Debug\Exceptions->respond(Array, 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(ErrorException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-10-07 23:54:45 --> Undefined variable: fp
#0 /var/app/ci4-api/App1/application/Helpers/file_helper.php(13): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', '/var/app/ci4-ap...', 13, Array)
#1 /var/app/ci4-api/App1/application/Controllers/Api/Teacher/Course/Read.php(13): reading('lessons/', 8)
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course\Read->index()
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course\Read))
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/app/ci4-api/App1/public/index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2018-10-07 23:54:45 --> Uncaught CodeIgniter\Format\Exceptions\FormatException: Failed to parse json string, error: "Type is not supported". in /var/app/ci4-api/vendor/codeigniter4/framework/system/Format/Exceptions/FormatException.php:9
Stack trace:
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Format/JSONFormatter.php(61): CodeIgniter\Format\Exceptions\FormatException::forInvalidJSON('Type is not sup...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/API/ResponseTrait.php(367): CodeIgniter\Format\JSONFormatter->format(Array)
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/API/ResponseTrait.php(120): CodeIgniter\Debug\Exceptions->format(Array)
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Debug/Exceptions.php(147): CodeIgniter\Debug\Exceptions->respond(Array, 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(ErrorException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
