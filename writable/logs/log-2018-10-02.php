<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2018-10-02 09:18:40 --> Access denied for user 'root'@'localhost' (using password: NO)
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/MySQLi/Connection.php(177): mysqli->real_connect('localhost', 'root', '', 'api_ci4', 3306, '', 0)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/BaseConnection.php(369): CodeIgniter\Database\MySQLi\Connection->connect(false)
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/BaseConnection.php(602): CodeIgniter\Database\BaseConnection->initialize()
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT `id`\nFRO...', Array)
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/Model.php(403): CodeIgniter\Database\BaseBuilder->get()
#5 /var/app/ci4-api/application/Models/Users/Guest/Auth.php(13): CodeIgniter\Model->first()
#6 /var/app/ci4-api/application/Controllers/Api/Guest.php(20): App\Models\Users\Guest\Auth->getByUsername('pengajar')
#7 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Guest->postIdentity()
#8 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Guest))
#9 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2018-10-02 09:18:50 --> Access denied for user 'root'@'localhost' (using password: NO)
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/MySQLi/Connection.php(177): mysqli->real_connect('localhost', 'root', '', 'api_ci4', 3306, '', 0)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/BaseConnection.php(369): CodeIgniter\Database\MySQLi\Connection->connect(false)
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/BaseConnection.php(602): CodeIgniter\Database\BaseConnection->initialize()
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT `id`\nFRO...', Array)
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/Model.php(403): CodeIgniter\Database\BaseBuilder->get()
#5 /var/app/ci4-api/application/Models/Users/Guest/Auth.php(13): CodeIgniter\Model->first()
#6 /var/app/ci4-api/application/Controllers/Api/Guest.php(20): App\Models\Users\Guest\Auth->getByUsername('pengajar')
#7 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Guest->postIdentity()
#8 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Guest))
#9 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2018-10-02 09:19:02 --> Access denied for user 'root'@'localhost' (using password: NO)
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/MySQLi/Connection.php(177): mysqli->real_connect('localhost', 'root', '', 'api_ci4', 3306, '', 0)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/BaseConnection.php(369): CodeIgniter\Database\MySQLi\Connection->connect(false)
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/BaseConnection.php(602): CodeIgniter\Database\BaseConnection->initialize()
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Database/BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT `id`\nFRO...', Array)
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/Model.php(403): CodeIgniter\Database\BaseBuilder->get()
#5 /var/app/ci4-api/application/Models/Users/Guest/Auth.php(13): CodeIgniter\Model->first()
#6 /var/app/ci4-api/application/Controllers/Api/Guest.php(20): App\Models\Users\Guest\Auth->getByUsername('pengajar')
#7 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Guest->postIdentity()
#8 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Guest))
#9 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2018-10-02 09:40:15 --> openssl_sign(): supplied key param cannot be coerced into a private key
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'openssl_sign():...', '/var/app/ci4-ap...', 199, Array)
#1 /var/app/ci4-api/vendor/firebase/php-jwt/src/JWT.php(199): openssl_sign('eyJ0eXAiOiJKV1Q...', '', 'MIICXAIBAAKBgQC...', 'SHA256')
#2 /var/app/ci4-api/vendor/firebase/php-jwt/src/JWT.php(170): Firebase\JWT\JWT::sign('eyJ0eXAiOiJKV1Q...', 'MIICXAIBAAKBgQC...', 'RS256')
#3 /var/app/ci4-api/application/Controllers/Api/Base.php(28): Firebase\JWT\JWT::encode(Object(stdClass), 'MIICXAIBAAKBgQC...', 'RS256')
#4 /var/app/ci4-api/application/Controllers/Api/Guest.php(26): App\Controllers\Api\Base->success(Object(stdClass), 'postIdentity', Object(stdClass))
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Guest->postIdentity()
#6 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Guest))
#7 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-02 09:40:19 --> openssl_sign(): supplied key param cannot be coerced into a private key
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'openssl_sign():...', '/var/app/ci4-ap...', 199, Array)
#1 /var/app/ci4-api/vendor/firebase/php-jwt/src/JWT.php(199): openssl_sign('eyJ0eXAiOiJKV1Q...', '', 'MIICXAIBAAKBgQC...', 'SHA256')
#2 /var/app/ci4-api/vendor/firebase/php-jwt/src/JWT.php(170): Firebase\JWT\JWT::sign('eyJ0eXAiOiJKV1Q...', 'MIICXAIBAAKBgQC...', 'RS256')
#3 /var/app/ci4-api/application/Controllers/Api/Base.php(28): Firebase\JWT\JWT::encode(Object(stdClass), 'MIICXAIBAAKBgQC...', 'RS256')
#4 /var/app/ci4-api/application/Controllers/Api/Guest.php(26): App\Controllers\Api\Base->success(Object(stdClass), 'postIdentity', Object(stdClass))
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Guest->postIdentity()
#6 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Guest))
#7 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-02 09:41:18 --> openssl_sign(): supplied key param cannot be coerced into a private key
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'openssl_sign():...', '/var/app/ci4-ap...', 199, Array)
#1 /var/app/ci4-api/vendor/firebase/php-jwt/src/JWT.php(199): openssl_sign('eyJ0eXAiOiJKV1Q...', '', 'MIICXAIBAAKBgQC...', 'SHA256')
#2 /var/app/ci4-api/vendor/firebase/php-jwt/src/JWT.php(170): Firebase\JWT\JWT::sign('eyJ0eXAiOiJKV1Q...', 'MIICXAIBAAKBgQC...', 'RS256')
#3 /var/app/ci4-api/application/Controllers/Api/Base.php(30): Firebase\JWT\JWT::encode(Object(stdClass), 'MIICXAIBAAKBgQC...', 'RS256')
#4 /var/app/ci4-api/application/Controllers/Api/Guest.php(26): App\Controllers\Api\Base->success(Object(stdClass), 'postIdentity', Object(stdClass))
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Guest->postIdentity()
#6 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Guest))
#7 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-02 09:41:19 --> openssl_sign(): supplied key param cannot be coerced into a private key
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'openssl_sign():...', '/var/app/ci4-ap...', 199, Array)
#1 /var/app/ci4-api/vendor/firebase/php-jwt/src/JWT.php(199): openssl_sign('eyJ0eXAiOiJKV1Q...', '', 'MIICXAIBAAKBgQC...', 'SHA256')
#2 /var/app/ci4-api/vendor/firebase/php-jwt/src/JWT.php(170): Firebase\JWT\JWT::sign('eyJ0eXAiOiJKV1Q...', 'MIICXAIBAAKBgQC...', 'RS256')
#3 /var/app/ci4-api/application/Controllers/Api/Base.php(30): Firebase\JWT\JWT::encode(Object(stdClass), 'MIICXAIBAAKBgQC...', 'RS256')
#4 /var/app/ci4-api/application/Controllers/Api/Guest.php(26): App\Controllers\Api\Base->success(Object(stdClass), 'postIdentity', Object(stdClass))
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Guest->postIdentity()
#6 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Guest))
#7 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-02 09:43:01 --> openssl_sign(): supplied key param cannot be coerced into a private key
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'openssl_sign():...', '/var/app/ci4-ap...', 199, Array)
#1 /var/app/ci4-api/vendor/firebase/php-jwt/src/JWT.php(199): openssl_sign('eyJ0eXAiOiJKV1Q...', '', 'MIICXAIBAAKBgQC...', 'SHA256')
#2 /var/app/ci4-api/vendor/firebase/php-jwt/src/JWT.php(170): Firebase\JWT\JWT::sign('eyJ0eXAiOiJKV1Q...', 'MIICXAIBAAKBgQC...', 'RS256')
#3 /var/app/ci4-api/application/Controllers/Api/Base.php(28): Firebase\JWT\JWT::encode(Object(stdClass), 'MIICXAIBAAKBgQC...', 'RS256')
#4 /var/app/ci4-api/application/Controllers/Api/Guest.php(26): App\Controllers\Api\Base->success(Object(stdClass), 'postIdentity', Object(stdClass))
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Guest->postIdentity()
#6 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Guest))
#7 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-02 09:44:25 --> openssl_sign(): supplied key param cannot be coerced into a private key
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'openssl_sign():...', '/var/app/ci4-ap...', 199, Array)
#1 /var/app/ci4-api/vendor/firebase/php-jwt/src/JWT.php(199): openssl_sign('eyJ0eXAiOiJKV1Q...', '', 'RS256', 'SHA256')
#2 /var/app/ci4-api/vendor/firebase/php-jwt/src/JWT.php(170): Firebase\JWT\JWT::sign('eyJ0eXAiOiJKV1Q...', 'RS256', 'RS256')
#3 /var/app/ci4-api/application/Controllers/Api/Base.php(28): Firebase\JWT\JWT::encode(Object(stdClass), 'RS256', 'RS256')
#4 /var/app/ci4-api/application/Controllers/Api/Guest.php(26): App\Controllers\Api\Base->success(Object(stdClass), 'postIdentity', Object(stdClass))
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Guest->postIdentity()
#6 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Guest))
#7 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-02 09:44:25 --> openssl_sign(): supplied key param cannot be coerced into a private key
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'openssl_sign():...', '/var/app/ci4-ap...', 199, Array)
#1 /var/app/ci4-api/vendor/firebase/php-jwt/src/JWT.php(199): openssl_sign('eyJ0eXAiOiJKV1Q...', '', 'RS256', 'SHA256')
#2 /var/app/ci4-api/vendor/firebase/php-jwt/src/JWT.php(170): Firebase\JWT\JWT::sign('eyJ0eXAiOiJKV1Q...', 'RS256', 'RS256')
#3 /var/app/ci4-api/application/Controllers/Api/Base.php(28): Firebase\JWT\JWT::encode(Object(stdClass), 'RS256', 'RS256')
#4 /var/app/ci4-api/application/Controllers/Api/Guest.php(26): App\Controllers\Api\Base->success(Object(stdClass), 'postIdentity', Object(stdClass))
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Guest->postIdentity()
#6 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Guest))
#7 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-02 09:44:53 --> openssl_sign(): supplied key param cannot be coerced into a private key
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'openssl_sign():...', '/var/app/ci4-ap...', 199, Array)
#1 /var/app/ci4-api/vendor/firebase/php-jwt/src/JWT.php(199): openssl_sign('eyJ0eXAiOiJKV1Q...', '', 'RS256', 'SHA256')
#2 /var/app/ci4-api/vendor/firebase/php-jwt/src/JWT.php(170): Firebase\JWT\JWT::sign('eyJ0eXAiOiJKV1Q...', 'RS256', 'RS256')
#3 /var/app/ci4-api/application/Controllers/Api/Base.php(28): Firebase\JWT\JWT::encode('$tokenData', 'RS256', 'RS256')
#4 /var/app/ci4-api/application/Controllers/Api/Guest.php(26): App\Controllers\Api\Base->success(Object(stdClass), 'postIdentity', Object(stdClass))
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Guest->postIdentity()
#6 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Guest))
#7 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-02 09:44:54 --> openssl_sign(): supplied key param cannot be coerced into a private key
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'openssl_sign():...', '/var/app/ci4-ap...', 199, Array)
#1 /var/app/ci4-api/vendor/firebase/php-jwt/src/JWT.php(199): openssl_sign('eyJ0eXAiOiJKV1Q...', '', 'RS256', 'SHA256')
#2 /var/app/ci4-api/vendor/firebase/php-jwt/src/JWT.php(170): Firebase\JWT\JWT::sign('eyJ0eXAiOiJKV1Q...', 'RS256', 'RS256')
#3 /var/app/ci4-api/application/Controllers/Api/Base.php(28): Firebase\JWT\JWT::encode('$tokenData', 'RS256', 'RS256')
#4 /var/app/ci4-api/application/Controllers/Api/Guest.php(26): App\Controllers\Api\Base->success(Object(stdClass), 'postIdentity', Object(stdClass))
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Guest->postIdentity()
#6 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Guest))
#7 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-02 09:46:33 --> openssl_sign(): supplied key param cannot be coerced into a private key
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'openssl_sign():...', '/var/app/ci4-ap...', 199, Array)
#1 /var/app/ci4-api/vendor/firebase/php-jwt/src/JWT.php(199): openssl_sign('eyJ0eXAiOiJKV1Q...', '', 'RS256', 'SHA256')
#2 /var/app/ci4-api/vendor/firebase/php-jwt/src/JWT.php(170): Firebase\JWT\JWT::sign('eyJ0eXAiOiJKV1Q...', 'RS256', 'RS256')
#3 /var/app/ci4-api/application/Controllers/Api/Base.php(28): Firebase\JWT\JWT::encode('$tokenData', 'RS256', 'RS256')
#4 /var/app/ci4-api/application/Controllers/Api/Guest.php(14): App\Controllers\Api\Base->success(Array, 'postIdentity', Array)
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Guest->postIdentity()
#6 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Guest))
#7 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-02 09:48:21 --> Algorithm not supported
#0 /var/app/ci4-api/vendor/firebase/php-jwt/src/JWT.php(170): Firebase\JWT\JWT::sign('eyJ0eXAiOiJKV1Q...', 'RS256', 'hash_hmac')
#1 /var/app/ci4-api/application/Controllers/Api/Base.php(28): Firebase\JWT\JWT::encode('$tokenData', 'RS256', 'hash_hmac')
#2 /var/app/ci4-api/application/Controllers/Api/Guest.php(14): App\Controllers\Api\Base->success(Array, 'postIdentity', Array)
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Guest->postIdentity()
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Guest))
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 09:51:21 --> Attempt to assign property 'eexpired_at' of non-object
#0 /var/app/ci4-api/application/Controllers/Api/Base.php(25): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Attempt to assi...', '/var/app/ci4-ap...', 25, Array)
#1 /var/app/ci4-api/application/Controllers/Api/Guest.php(14): App\Controllers\Api\Base->success(Array, 'postIdentity', Array)
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Guest->postIdentity()
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Guest))
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2018-10-02 09:55:02 --> syntax error, unexpected ']'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 09:55:20 --> syntax error, unexpected ']'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 09:55:30 --> syntax error, unexpected ']'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 09:55:43 --> syntax error, unexpected ']'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 09:55:51 --> syntax error, unexpected ']'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 09:56:42 --> syntax error, unexpected ']'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 09:56:52 --> syntax error, unexpected ']'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 09:57:49 --> syntax error, unexpected ']'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 09:58:42 --> syntax error, unexpected 'if' (T_IF), expecting ';'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Router/Router.php(189): CodeIgniter\Router\Router->autoRoute('api/guest/postP...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(685): CodeIgniter\Router\Router->handle('api/guest/postP...')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(270): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-02 09:58:47 --> syntax error, unexpected 'if' (T_IF), expecting ';'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Router/Router.php(189): CodeIgniter\Router\Router->autoRoute('api/guest/postI...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(685): CodeIgniter\Router\Router->handle('api/guest/postI...')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(270): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-02 09:58:53 --> syntax error, unexpected 'if' (T_IF), expecting ';'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Router/Router.php(189): CodeIgniter\Router\Router->autoRoute('api/guest/postI...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(685): CodeIgniter\Router\Router->handle('api/guest/postI...')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(270): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-02 09:59:00 --> syntax error, unexpected 'if' (T_IF), expecting ';'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Router/Router.php(189): CodeIgniter\Router\Router->autoRoute('api/guest/postI...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(685): CodeIgniter\Router\Router->handle('api/guest/postI...')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(270): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-02 09:59:22 --> syntax error, unexpected ']'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 09:59:39 --> syntax error, unexpected ']'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 09:59:40 --> syntax error, unexpected ']'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 10:00:04 --> syntax error, unexpected ']'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 10:00:32 --> syntax error, unexpected ']'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 10:01:11 --> syntax error, unexpected ']'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 10:01:26 --> syntax error, unexpected ']'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 10:01:52 --> syntax error, unexpected ']'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 10:01:55 --> syntax error, unexpected ']'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 10:02:19 --> syntax error, unexpected ']'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 10:03:22 --> Class 'firebase\JWT\JWT' not found
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(134): App\Filters\API\GuestWithBearerRequest->before(Object(CodeIgniter\HTTP\IncomingRequest), NULL)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-10-02 10:03:56 --> Class 'firebase\JWT\JWT' not found
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(134): App\Filters\API\GuestWithBearerRequest->before(Object(CodeIgniter\HTTP\IncomingRequest), NULL)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-10-02 10:04:58 --> Class 'firebase\JWT\JWT' not found
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(134): App\Filters\API\GuestWithBearerRequest->before(Object(CodeIgniter\HTTP\IncomingRequest), NULL)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-10-02 10:04:59 --> Class 'firebase\JWT\JWT' not found
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(134): App\Filters\API\GuestWithBearerRequest->before(Object(CodeIgniter\HTTP\IncomingRequest), NULL)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-10-02 10:05:42 --> Class 'firebase\JWT\JWT' not found
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(134): App\Filters\API\GuestWithBearerRequest->before(Object(CodeIgniter\HTTP\IncomingRequest), NULL)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-10-02 10:05:56 --> Class 'firebase\JWT\JWT' not found
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(134): App\Filters\API\GuestWithBearerRequest->before(Object(CodeIgniter\HTTP\IncomingRequest), NULL)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-10-02 10:06:19 --> Class 'firebase\JWT\JWT' not found
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(134): App\Filters\API\GuestWithBearerRequest->before(Object(CodeIgniter\HTTP\IncomingRequest), NULL)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-10-02 10:06:20 --> Class 'firebase\JWT\JWT' not found
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(134): App\Filters\API\GuestWithBearerRequest->before(Object(CodeIgniter\HTTP\IncomingRequest), NULL)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-10-02 10:06:31 --> syntax error, unexpected 'true' (T_STRING)
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 10:06:32 --> syntax error, unexpected 'true' (T_STRING)
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 10:06:50 --> syntax error, unexpected 'true' (T_STRING)
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 10:07:01 --> Class 'firebase\JWT\JWT' not found
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(134): App\Filters\API\GuestWithBearerRequest->before(Object(CodeIgniter\HTTP\IncomingRequest), NULL)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-10-02 10:07:45 --> Class 'firebase\JWT\JWT' not found
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(134): App\Filters\API\GuestWithBearerRequest->before(Object(CodeIgniter\HTTP\IncomingRequest), NULL)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-10-02 10:08:16 --> Class 'firebase\JWT\JWT' not found
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(134): App\Filters\API\GuestWithBearerRequest->before(Object(CodeIgniter\HTTP\IncomingRequest), NULL)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-10-02 10:08:51 --> Argument 3 passed to Firebase\JWT\JWT::decode() must be of the type array, string given, called in /var/app/ci4-api/application/Filters/API/GuestWithBearerRequest.php on line 20
#0 /var/app/ci4-api/application/Filters/API/GuestWithBearerRequest.php(20): Firebase\JWT\JWT::decode('eyJ0eXAiOiJKV1Q...', 'MIICXAIBAAKBgQC...', 'HS256')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(134): App\Filters\API\GuestWithBearerRequest->before(Object(CodeIgniter\HTTP\IncomingRequest), NULL)
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-02 10:13:38 --> Undefined property: Config\App::$jwt
#0 /var/app/ci4-api/application/Controllers/Api/Guest.php(36): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/var/app/ci4-ap...', 36, Array)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Guest->postPassword()
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Guest))
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-02 10:14:05 --> Cannot use object of type stdClass as array
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(134): App\Filters\API\GuestWithBearerRequest->before(Object(CodeIgniter\HTTP\IncomingRequest), NULL)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-10-02 10:14:21 --> Cannot use object of type stdClass as array
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(134): App\Filters\API\GuestWithBearerRequest->before(Object(CodeIgniter\HTTP\IncomingRequest), NULL)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/guest/postP...', 'before')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-10-02 10:18:09 --> syntax error, unexpected '->' (T_OBJECT_OPERATOR)
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/teacher/Cou...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 10:18:42 --> syntax error, unexpected '->' (T_OBJECT_OPERATOR)
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/teacher/Cou...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 10:19:12 --> syntax error, unexpected '->' (T_OBJECT_OPERATOR)
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/teacher/cou...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 10:19:52 --> Class 'App\Filters\API\JWT' not found
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(134): App\Filters\API\UserLoginRequest->before(Object(CodeIgniter\HTTP\IncomingRequest), NULL)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/teacher/cou...', 'before')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-10-02 10:20:29 --> Wrong number of segments
#0 /var/app/ci4-api/application/Filters/API/UserLoginRequest.php(20): Firebase\JWT\JWT::decode(NULL, 'MIICXAIBAAKBgQC...', Array)
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(134): App\Filters\API\UserLoginRequest->before(Object(CodeIgniter\HTTP\IncomingRequest), NULL)
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/teacher/cou...', 'before')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-02 10:38:05 --> syntax error, unexpected ',', expecting ';'
#0 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/var/app/ci4-ap...')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Filters\\API...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Filters\\API...')
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/Filters/Filters.php(125): spl_autoload_call('App\\Filters\\API...')
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(284): CodeIgniter\Filters\Filters->run('api/teacher/Cou...', 'before')
#5 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 10:38:19 --> Cannot use object of type stdClass as array
#0 /var/app/ci4-api/application/Controllers/Api/Teacher/Course.php(10): App\Models\Courses\Teacher\Data->getByTitle('')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course->index()
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course))
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-02 10:38:20 --> Cannot use object of type stdClass as array
#0 /var/app/ci4-api/application/Controllers/Api/Teacher/Course.php(10): App\Models\Courses\Teacher\Data->getByTitle('')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course->index()
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course))
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-02 10:38:30 --> Cannot use object of type stdClass as array
#0 /var/app/ci4-api/application/Controllers/Api/Teacher/Course.php(10): App\Models\Courses\Teacher\Data->getByTitle('')
#1 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course->index()
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course))
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-02 10:41:18 --> Creating default object from empty value
#0 /var/app/ci4-api/application/Controllers/Api/Base.php(27): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Creating defaul...', '/var/app/ci4-ap...', 27, Array)
#1 /var/app/ci4-api/application/Controllers/Api/Teacher/Course.php(12): App\Controllers\Api\Base->success(Array, 'Sukses')
#2 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(807): App\Controllers\Api\Teacher\Course->index()
#3 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Api\Teacher\Course))
#4 /var/app/ci4-api/vendor/codeigniter4/framework/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/app/ci4-api/public/index.php(43): CodeIgniter\CodeIgniter->run()
#6 {main}
