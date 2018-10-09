<?php 
declare(strict_types=1);

namespace App\Filters\API;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

final class GuestRequest implements FilterInterface
{
    public function before(RequestInterface $request)
    {
        (Config('App'))->time = microtime(true);
        //$request->isAJAX()=== TRUE &&
        if($request->getMethod() === 'post')
        {
            return true;
        }

        return Services::response()
            ->setStatusCode(ResponseInterface::HTTP_METHOD_NOT_ALLOWED);
    }

    public function after(RequestInterface $request, ResponseInterface $response )
    {
        return Services::response()
            ->setStatusCode(200);
    }
}
