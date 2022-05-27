<?php namespace App\Filters;
use App\Controllers\Startseite;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthGuard implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->get('isLoggedIn'))
        {
            return redirect()
                ->to('/Login');
        }


    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

    }
}

