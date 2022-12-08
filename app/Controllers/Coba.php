<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        return view('home/home');
    }

    public function coba()
    {
        echo "YUK NGOPI!";
    }

    public function team()
    {
        echo "Halo, kenalkan kita $this->team";
    }

    public function testform()
    {
        $data = [
            'title' => 'tesform'
        ];
        return view('/layout/tesformvalidation', $data);
    }
}
