<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function index($studno)
    {
        echo"Student Number: ",$studno;
    }
    public function loginPage()
    {
        return view ('login');
    }
    public function registration()
    {
        return view ('register');
    }

}
