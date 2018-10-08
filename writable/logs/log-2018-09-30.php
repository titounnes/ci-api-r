<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2018-09-30 22:32:03 --> Uncaught InvalidArgumentException: No Formatter defined for mime type:  in /var/app/CI4R/application/Config/Format.php:56
Stack trace:
#0 /var/app/CI4R/vendor/codeigniter4/framework/system/API/ResponseTrait.php(357): Config\Format->getFormatter('')
#1 /var/app/CI4R/vendor/codeigniter4/framework/system/API/ResponseTrait.php(120): CodeIgniter\Debug\Exceptions->format(Array)
#2 /var/app/CI4R/vendor/codeigniter4/framework/system/Debug/Exceptions.php(147): CodeIgniter\Debug\Exceptions->respond(Array, 404)
#3 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(CodeIgniter\Exceptions\PageNotFoundException))
#4 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
