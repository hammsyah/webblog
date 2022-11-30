<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        return view('admin/user');
    }
}
