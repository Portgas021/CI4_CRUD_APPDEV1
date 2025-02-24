<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Codeigniter\HTTP\ResponseInterface;

class HomeController extends BaseController
{
    public function home()
    {
        return 'ready';
    }
    public function about()
    {
        return 'content from about';
    }
    public function contactus()
    {
        return 'contact us';
    }

    
}
