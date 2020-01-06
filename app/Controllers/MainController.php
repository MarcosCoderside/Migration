<?php namespace App\Controllers;


use CodeIgniter\Controllers;

class MainController extends BaseController
{

    public function index()
    {
        return view('index');
    }
}